<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Rutas del controllador de Alumnos
Route::get('/capturar-alumno', array(
   'as' => 'createAlumno',
   'uses' => 'AlumnoController@createAlumno'
));
Route::post('/guardar-alumno', array(
    'as' => 'saveAlumno',
    'uses' => 'AlumnoController@saveAlumno'
));
Route::get('/guardar-seleccion-Cursos/{alumno_id}/{curso_id}/{ciclo}', array(
    'as' => 'saveSeleccionCursos',
    'middleware' => 'auth',
    'uses' => 'CursoController@saveSeleccionCursos'
));
Route::get('/cambiar-estatus/{alumno_id}/{curso_id}/{ciclo}', array(
    'as' => 'cambiar-estatus',
    'middleware' => 'auth',
    'uses' => 'CursoController@cambiarEstatus'
));
Route::get('/elegirCursos/{alumno_id}/{ciclo}', array(
    'as' => 'elegirCursos',
    'middleware' => 'auth',
    'uses' => 'CursoController@obtenerCursos'
));
Route::get('/listadoCursos/{ciclo}', array(
    'as' => 'listadoCursos',
    'middleware' => 'auth',
    'uses' => 'CursoController@listarCursos'
));
Route::get('/capturar-curso/{ciclo}', array(
    'as' => 'createCurso',
    'uses' => 'CursoController@createCurso'
));
Route::post('/guardar-curso', array(
    'as' => 'saveCurso',
    'uses' => 'CursoController@saveCurso'
));
Route::get('/editar-curso/{curso_id}', array(
    'as' => 'editar-curso',
    'middleware' => 'auth',
    'uses' => 'CursoController@editarCurso'
));
Route::get('/delete-curso/{curso_id}', array(
    'as' => 'delete-curso',
    'middleware' => 'auth',
    'uses' => 'CursoController@delete'
));
Route::post('/update-curso/{curso_id}', array(
    'as' => 'update-curso',
    'middleware' => 'auth',
    'uses' => 'CursoController@update'
));
Route::get('/estadisticas', array(
    'as' => 'estadisticas',
    'middleware' => 'auth',
    'uses' => 'CursoController@getEstadisticas'
));
Route::get('/listadoAlumnos', array(
    'as' => 'listadoAlumnos',
    'middleware' => 'auth',
    'uses' => 'AlumnoController@listarAlumnos'
));
Route::get('/listadoPorGrupo/{curso_id}', array(
    'as' => 'listadoPorGrupo',
    'middleware' => 'auth',
    'uses' => 'CursoController@listaPorCurso'
));

Route::get('/listaImprimir/{curso_id}', array(
    'as' => 'listaImprimir',
    'middleware' => 'auth',
    'uses' => 'CursoController@listaImprimir'
));
Route::get('/dt', 'TaskController@index');


Route::get('/editar-alumno/{alumno_id}', array(
    'as' => 'editar-alumno',
    'middleware' => 'auth',
    'uses' => 'AlumnoController@editarAlumno'
));
Route::get('/info-alumnos/{curso_id}', array(
    'as' => 'info-alumnos',
    'middleware' => 'auth',
    'uses' => 'CursoController@infoAlumnosPorCurso'
));
Route::get('/miniatura/{filename}',array(
   'as' => 'ine',
   'uses' => 'AlumnoController@getImagen'
));
Route::post('/update-alumno/{alumno_id}', array(
    'as' => 'update-alumno',
    'middleware' => 'auth',
    'uses' => 'AlumnoController@update'
));
Route::get('/delete-alumno/{alumno_id}', array(
    'as' => 'delete-alumno',
    'middleware' => 'auth',
    'uses' => 'AlumnoController@delete'
));
Route::get('/kardex-alumno/{alumno_id}', array(
    'as' => 'kardex-alumno',
    'middleware' => 'auth',
    'uses' => 'AlumnoController@kardexAlumno'
));
Route::get('/delete-lista/{lista_id}/{alumno_id}', array(
    'as' => 'listaDelete',
    'middleware' => 'auth',
    'uses' => 'ListaController@delete'
));
Route::get('/delete-lista-grupo/{lista_id}/{curso_id}', array(
    'as' => 'listaDeleteGrupo',
    'middleware' => 'auth',
    'uses' => 'ListaController@deleteListaGrupo'
));
Route::name('print')->get('/imprimir/{alumno_id}', 'PdfController@imprimir');
Route::name('printLista')->get('/imprimirLista/{curso_id}', 'PdfController@imprimirLista');
