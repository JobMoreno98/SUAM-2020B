<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\MateriaInscrita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use App\Curso;
use App\Lista;
use App\CuentaCurso;
use Illuminate\Support\Facades\pdf;
use App\ListaPorCurso;
class CursoController extends Controller
{
    public function createCurso($ciclo){
        return view('cursos.createCurso')->with('ciclo', $ciclo);
    }
    public function obtenerCursos($alumno_id, $ciclo){
        $alumno = Alumno::findOrFail($alumno_id);
        $cuentaCursos = CuentaCurso::all()->where('activo','=', 1)->where('ciclo','=', $ciclo)->sortBy('nombreCurso');
        $cuentaMateriasInscritas= Lista::where([['IdAlumno', '=', $alumno_id],
            ['ciclo', '=', $ciclo],
            ['status', '=', 'Inscrito']])->count();
        $MateriasInscritas= MateriaInscrita::where([['IdAlumno', '=', $alumno_id],
            ['ciclo', '=', $ciclo]])->get();
        return view('cursos.elegirCursos', array(
            'cuentaCursos' => $cuentaCursos,
            'alumno' => $alumno,
            'cuentaMateriasInscritas'=>$cuentaMateriasInscritas,
            'MateriasInscritas'=>$MateriasInscritas,
            'ciclo'=>$ciclo
        ));
    }
    public function listarCursos($ciclo){
        $cuentaCursos = CuentaCurso::all()->where('activo','=', 1)->where('ciclo','=', $ciclo);

        return view('cursos.listadoCursos', array(
            'cuentaCursos' => $cuentaCursos,
            'ciclo'=>$ciclo
        ));
    }
    public function editarCurso($curso_id){
        $curso = Curso::findOrFail($curso_id);
        return view('cursos.editCurso', array('curso' => $curso));
    }
    public function listaPorCurso($curso_id){
        $curso = Curso::findOrFail($curso_id);
        $listaPorGrupo = ListaPorCurso::where('IdCurso','=', $curso_id)->get();
        return view('cursos.listaPorGrupo', array('listaPorGrupo' => $listaPorGrupo, 'curso' => $curso));
    }
    public function infoAlumnosPorCurso($curso_id){
        $curso = Curso::findOrFail($curso_id);
        $listaPorGrupo = ListaPorCurso::where('IdCurso','=', $curso_id)->get();
        return view('cursos.infoAlumnosPorGrupo', array('listaPorGrupo' => $listaPorGrupo, 'curso' => $curso));
    }

    public function listaImprimir($curso_id){
        $curso = Curso::findOrFail($curso_id);
        $listaPorGrupo = ListaPorCurso::where([['IdCurso','=', $curso_id], ['status','=', 'Inscrito']])->get();
        return view('cursos.listaImprimir', array('listaPorGrupo' => $listaPorGrupo, 'curso' => $curso));
    }
    public function delete($curso_id){
        $curso = Curso::find($curso_id);
        $lista = Lista::where('IdCurso','=', $curso_id);
        if($curso){
            //Marcar como eliminado
            $curso->activo = 0;
            $curso->update();
            //Eliminar entradas en las listas
            //$lista->delete();
            //Eliminar el curso
            //$curso->delete();
            $message = array('message' => 'Curso Eliminado');
        }else{
            $message = array('message' => 'El curso no existe');
        }
        return redirect('/listadoCursos/'.$curso->ciclo)->with($message);
    }
    public function update($curso_id, Request $request){
        $validateData = $this->validate($request, [
            'nombreCurso' => 'required',
            'instructor' => 'required',
            'aula' => 'required',
            'cupo' => 'required',
            'horario' => 'required',
            'ciclo' => 'required',
            'hora1'=> 'required',
            'hora2'=> 'required',

        ]);
        $curso = Curso::findOrFail($curso_id);
        $curso->instructor = $request->input('instructor');
        $curso->nombreCurso = $request->input('nombreCurso');
        $curso->aula = $request->input('aula');
        $curso->cupo = $request->input('cupo');
        $curso->horario = $request->input('horario');
        $curso->hora1 = $request->input('hora1');
        $curso->hora2 = $request->input('hora2');
        $curso->ciclo = $request->input('ciclo');

        $curso->update();
        return redirect()->route('listadoCursos',['ciclo' => $curso->ciclo])->with(array('message' => 'La información del Curso se actualizó correctamnte'));
    }

    //--------------------------------------------------------------------------------------------------------
    public function saveSeleccionCursos($alumno_id, $curso_id, $ciclo)
    {
        $mensaje=" ";
        $disponible=0;
        $conflicto=0;
        $MateriasInscritas= Lista::where([['IdAlumno', '=', $alumno_id],
            ['ciclo', '=', $ciclo],
            ['status', '=', 'Inscrito']])->get();
        $conteoMateriasInscritas=sizeof($MateriasInscritas);
        if($conteoMateriasInscritas<3){
            $curso=CuentaCurso::where('id','=',$curso_id)->first();
            $disponible=$curso->cupo - $curso->inscritos;
            //$mensaje.="Cupo Disponible: ".$disponible;
            if($disponible>=1){
                $YaCursada= Lista::where([['IdAlumno', '=', $alumno_id],
                    ['ciclo', '=', $ciclo],
                    ['IdCurso', '=', $curso_id],])->count();
                    if($YaCursada==0){
                        $ListaMateriasInscritas=MateriaInscrita::where([['IdAlumno', '=', $alumno_id],
                            ['ciclo', '=', $ciclo]])->get();
                        foreach ($ListaMateriasInscritas as $ListaMateriasInscrita){
                            if($ListaMateriasInscrita->hora1 == $curso->hora1
                                || $ListaMateriasInscrita->hora1 == $curso->hora2
                                || $ListaMateriasInscrita->hora2 == $curso->hora1
                                || $ListaMateriasInscrita->hora2 == $curso->hora2){
                                $conflicto=1;
                            }
                        }
                        if($conflicto!=1){
                            $lista = new Lista();
                            $lista->IdCurso = $curso_id;
                            $lista->IdAlumno = $alumno_id;
                            $lista->ciclo = $ciclo;
                            $lista->status = 'Inscrito';
                            $lista->save();
                            $mensaje.="Se guardo el registro exitosamente";
                        }else{
                            $mensaje.="Existe una materia que se cruza en una parte del horario";
                        }
                    }else{
                        $mensaje.="El alumno ya está inscrito o en lista de espera en esta materia";
                    }
            }else{
                $enEspera= Lista::where([['IdAlumno', '=', $alumno_id],
                    ['ciclo', '=', $ciclo],
                    ['IdCurso', '=', $curso_id],
                    ['status','=','En Espera']])->count();
                if($enEspera==0) {
                    $lista = new Lista();
                    $lista->IdCurso = $curso_id;
                    $lista->IdAlumno = $alumno_id;
                    $lista->ciclo = $ciclo;
                    $lista->status = 'En Espera';
                    $lista->save();
                    $mensaje .= "No existe cupo en la materia, se ha puesto en lista de espera";
                }else{
                    $mensaje .= "El alumno ya esta en lista de espera";
                }
            }
        }else{
            $mensaje.="El Alumno ya esta inscrito a tres materias. No se toma la lista en espera no cuenta como materia inscrita";
        }

        return redirect()->route('elegirCursos', ['alumno_id' => $alumno_id, 'ciclo'=>$ciclo])->with(array(
            'message' => $mensaje
        ));






    }//Fin del método


//-------------------------------------------------------------------------------------------------------------------------

    public function saveCurso(Request $request){
        //Validar Formulario
        $validateData = $this->validate($request, [
             'nombreCurso' => 'required',
             'instructor' => 'required',
             'aula' => 'required',
             'cupo' => 'required',
             'horario' => 'required',
             'ciclo' => 'required',
             'hora1' => 'required',
             'hora2' => 'required',

         ]);

        $curso = new Curso();
        $curso->nombreCurso = $request->input('nombreCurso');
        $curso->instructor = $request->input('instructor');
        $curso->aula = $request->input('aula');
        $curso->cupo = $request->input('cupo');
        $curso->horario = $request->input('horario');
        $curso->ciclo = $request->input('ciclo');
        $curso->hora1 = $request->input('hora1');
        $curso->hora2 = $request->input('hora2');
        $curso->save();

        return redirect()->route('listadoCursos',['ciclo'=>$curso->ciclo])->with(array(
            "message" => "Los datos se han guardado correctamente"
        ));

    }
//CORREGIR-----------------------------------------
    public function cambiarEstatus($alumno_id, $curso_id, $ciclo){
        $lista= Lista::where([['IdAlumno', '=', $alumno_id],
            ['ciclo', '=', $ciclo],
            ['IdCurso', '=', $curso_id]])->first();

        $lista->IdAlumno = $alumno_id;
        $lista->IdCurso = $curso_id;
        $lista->ciclo =$ciclo;
        if($lista->status=='Inscrito'){
            $lista->status='En Espera';
        }else{
            $lista->status='Inscrito';
        }

        $lista->update();

        return redirect()->route('listadoPorGrupo', ['curso_id' => $curso_id])->with(array(
            "message" => "Se cambio el estatus exitosamente"
        ));
    }
    public function getEstadisticas(){
        $total = Alumno::all()->count();
        $inscritosPorCiclo = Lista::query()
            ->select(['ciclo', DB::raw('count(distinct IdAlumno) as inscritosPorCiclo') ])
            ->groupBy('ciclo')->get();
        $nuevosAlumnos = Lista::query()
            ->select(['created_at', DB::raw('MONTH(created_at) as mes, YEAR(created_at) as anio, count(id) as inscritos_mes') ])
            ->groupBy('mes')->get();
        $conteoPorEstado = Alumno::query()
            ->select(['estado', DB::raw('estado, count(estado) as conteo_estado') ])
            ->groupBy('estado')->get();
        $dispositivos = Alumno::query()
            ->select(['equipo', DB::raw('count(equipo) as dispositivos') ])
            ->groupBy('equipo')->get();
        $internet = Alumno::query()
            ->select(['internet', DB::raw('count(internet) as cuenta') ])
            ->groupBy('internet')->get();
        $jubilaciones = Alumno::query()
            ->select(['jubilado', DB::raw('count(jubilado) as cuenta') ])
            ->groupBy('jubilado')->get();
        $escolaridad = Alumno::query()
            ->select(['escolaridad', DB::raw('count(escolaridad) as cuenta') ])
            ->groupBy('escolaridad')->get();

        return view('estadisticas', array(
            'total'=> $total,
            'dispositivos' => $dispositivos,
            'internet' => $internet,
            'jubilaciones' => $jubilaciones,
            'escolaridad' => $escolaridad,
            'inscritosPorCiclo'=>$inscritosPorCiclo,
            'nuevosAlumnos'=>$nuevosAlumnos,
            'conteoPorEstado'=>$conteoPorEstado
        ));
    }
}
