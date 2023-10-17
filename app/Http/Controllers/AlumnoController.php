<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegisterController;
use App\MateriaInscrita;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

use App\User;
use App\Lista;
use App\Alumno;

class AlumnoController extends Controller
{
    public function createAlumno(){
        return view('alumno.createAlumno');
    }
    public function listarAlumnos(){
        $alumno = Alumno::orderBy('apellidoPaterno', 'asc')->get();
        return view('alumno.listadoAlumnos', array(
            'alumnos' => $alumno
        ));
    }
    public function saveAlumno(Request $request){
        //Validar Formulario
       $validateData = $this->validate($request, [
            'nombre' => 'required',
            'apellidoPaterno' => 'required',
            'nacimiento_anio' => 'required',
            'nacimiento_mes' => 'required',
            'nacimiento_dia' => 'required',
            'domicilio' => 'required',
            'colonia' => 'required',
            'sector' => 'required',
            'cp' => 'required',
            'municipio' => 'required',
            'telCelular' => 'required',
            'email' => 'required',
            'escolaridad' => 'required',
            'estado' => 'required',
            'estadoCivil' => 'required',
            'contacto' => 'required',
            'jubilado' => 'required',

        ]);


        $alumno = new Alumno();
        $alumno->nombre = $request->input('nombre');
        $alumno->apellidoPaterno = $request->input('apellidoPaterno');
        $alumno->apellidoMaterno = $request->input('apellidoMaterno');

        $fechaNacimiento = $request->input('nacimiento_anio');
        $fechaNacimiento .= '-' . $request->input('nacimiento_mes');
        $fechaNacimiento .= '-' . $request->input('nacimiento_dia');

        $alumno->fechaNacimiento = $fechaNacimiento;
        $alumno->domicilio = $request->input('domicilio');
        $alumno->colonia = $request->input('colonia');
        $alumno->sector = $request->input('sector');
        $alumno->cp = $request->input('cp');
        $alumno->municipio = $request->input('municipio');
        $alumno->estado = $request->input('estado');
        $alumno->ine = $request->input('ine');
            if(empty($request->input('institucionJubilacion'))){
                $alumno->telCasa ="No Especificado";
            }else{
                $alumno->telCasa = $request->input('telCasa');
            }

        $alumno->telCelular = $request->input('telCelular');
        $alumno->email = $request->input('email');
        $alumno->escolaridad = $request->input('escolaridad');

        $alumno->estadoCivil = $request->input('estadoCivil');
        $alumno->contacto = $request->input('contacto');
        $alumno->jubilado = $request->input('jubilado');
        if(empty($request->input('institucionJubilacion'))){
            $alumno->institucionJubilacion ="No aplica";
        }else{
            $alumno->institucionJubilacion = $request->input('institucionJubilacion');
        }
        $alumno->equipo = $request->input('equipo');
        $alumno->internet = $request->input('internet');
        //Subida de la imagen
        $image = $request->file('ine');
        if ($image) {
            $image_path = time() . $image->getClientOriginalName();
            \Storage::disk('images')->put($image_path, \File::get($image));
            $alumno->ine = $image_path;
        }
        $alumno->save();






            $emailLimpio=$request->input('apellidoPaterno');
                $no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");
                $permitidas= array ("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E");
                $texto = str_replace($no_permitidas, $permitidas ,$emailLimpio);
            $emailLimpio = $texto;
            $passwordLimpio=$request->input('apellidoPaterno');
            $no_permitidas2= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");
            $permitidas2= array ("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E");
            $texto2 = str_replace($no_permitidas2, $permitidas2 ,$passwordLimpio);
            $passwordLimpio = $texto2;
            $loginBusqueda=strtolower($emailLimpio) . $request->input('nacimiento_anio');


        $userExistente=User::where('email','=',$loginBusqueda)->count();
        $user = new User();
        $user->name = $request->input('nombre') . " " . $request->input('apellidoPaterno') . " " . $request->input('apellidoMaterno');
        if($userExistente==0){
            $loginFinal = strtolower($emailLimpio) . $request->input('nacimiento_anio');
        }else{
            $loginFinal = strtolower($emailLimpio) . $request->input('nacimiento_dia') . "-" . $request->input('nacimiento_mes')."-".$request->input('nacimiento_anio');
        }
        $user->email = $loginFinal;
        $user->password = bcrypt(strtolower($passwordLimpio) . $request->input('nacimiento_dia'));
        $alumno=Alumno::all();
        $user->IdAlumno = $alumno->last()->id;
        if(Auth::check()){
            $user->surname ='Admin';
        }else{
            $user->surname = 'Web';
        }
        $user->role = 'alumno';
        $user->save();

        if (Auth::check()) {
            return redirect()->route('home')->with(array(
                "message" => "La información se ha guardado correctamente"
                    . " ------------------- NOMBRE DE USUARIO: " . $loginFinal
                    . " ------------------- CONTRASEÑA: " . strtolower($passwordLimpio) . $request->input('nacimiento_dia')
            ));
        } else {
            return redirect()->route('login')->with(array(
                "message" => "La información se ha registrado correctamente. Ahora puede iniciar sesión y agendar materias. "
                    . " ------------------- NOMBRE DE USUARIO: " . $loginFinal
                    . " ------------------- CONTRASEÑA: " . strtolower($passwordLimpio) . $request->input('nacimiento_dia')
            ));
        }


    }
    public function editarAlumno($alumno_id){
        $alumno = Alumno::findOrFail($alumno_id);
        return view('alumno.editAlumno', array('alumno' => $alumno));
    }
    public function delete($alumno_id){
        $alumno = Alumno::find($alumno_id);
        $lista = Lista::where('IdAlumno','=', $alumno_id);
        if($alumno){
            //Eliminar entradas en las listas
            $lista->delete();
            //Eliminar el curso
            $alumno->delete();
            $message = array('message' => 'Alumno Eliminado');
        }else{
            $message = array('message' => 'El Alumno no existe');
        }
        return redirect('/listadoAlumnos')->with($message);
    }
    public function getImagen($filename){
        $file = \Storage::disk('images')->get($filename);
        return new Response($file, 200);
    }
    public function update($alumno_id, Request $request){
      /*  $validateData = $this->validate($request, [
            'nombre' => 'required',
            'apellidoPaterno' => 'required',
            'domicilio' => 'required',
            'colonia' => 'required',
            'sector' => 'required',
            'cp' => 'required',
            'municipio' => 'required',
            'telCelular' => 'required',
            'email' => 'required',
            'escolaridad' => 'required',
            'estadoCivil' => 'required',
            'contacto' => 'required',
            'jubilado' => 'required',
        ]);*/
        $alumno = Alumno::findOrFail($alumno_id);
        $alumno->nombre = $request->input('nombre');
        $alumno->apellidoPaterno = $request->input('apellidoPaterno');
        $alumno->apellidoMaterno = $request->input('apellidoMaterno');
        $alumno->fechaNacimiento = $request->input('nacimiento');
        $alumno->domicilio = $request->input('domicilio');
        $alumno->colonia = $request->input('colonia');
        $alumno->sector = $request->input('sector');
        $alumno->cp = $request->input('cp');
        $alumno->municipio = $request->input('municipio');
        $alumno->estado = $request->input('estado');
        $alumno->ine = $request->input('ine');
        $alumno->telCasa = $request->input('telCasa');
        $alumno->telCelular = $request->input('telCelular');
        $alumno->email = $request->input('email');
        $alumno->escolaridad = $request->input('escolaridad');
        $alumno->estadoCivil = $request->input('estadoCivil');
        $alumno->contacto = $request->input('contacto');
        $alumno->jubilado = $request->input('jubilado');
        $alumno->institucionJubilacion = $request->input('institucionJubilacion');
        //Subida de la imagen
        $image =  $request->file('ine');
        if($image){
            $image_path = time().$image->getClientOriginalName();
            \Storage::disk('images')->put($image_path, \File::get($image));
            $alumno->ine = $image_path;
        }
        $alumno->update();
        return redirect()->route('listadoAlumnos')->with(array('message' => 'El registro se actualizó correctamnte'));
    }
    public function kardexAlumno($alumno_id){
            $alumno = Alumno::findOrFail($alumno_id);
            $materias = MateriaInscrita::where("IdAlumno", "=", $alumno_id)->get();
            $user1 = User::where('IdAlumno','=', $alumno_id)->first();
            return view('alumno.kardexAlumno', array(
                'alumno' => $alumno,
                'materias' => $materias,
                'user1'=>$user1
            ));
    }
}
