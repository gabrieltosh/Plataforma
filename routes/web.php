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
Route::bind('carrera',function($carrera){
    return App\Carrera::find($carrera);
});
Route::bind('semestre',function($semestre){
    return App\Semestre::find($semestre);
});
Route::bind('estudiante',function($estudiante){
    return App\User::find($estudiante);
});
Route::bind('docente',function($docente){
    return App\User::find($docente);
});
Route::get('/', function (){
    return view('welcome');
});
//Mostrar materias segun carrera y semestre del estudiante
Route::get('semestre/materias/{id}',[
	'as'=>'materias',
	'uses'=>'controladorSemestre@materia_semestre'
	]);
//Mostar Semestres
Route::get('semestre',[
	'as'=>'semestre',
	'uses'=>'controladorSemestre@mostrar'
	]);
Route::get('inicio',[
		'as'=>'inicio',
		'uses'=>'controladorPagina@inicio',
	]);
Route::post('login/log',[
		'as'=>'logueo',
		'uses'=>'controladorLogin@log',
	]);
Route::get('logout',[
		'as'=>'logout',
		'uses'=>'controladorLogin@logout',
	]);
Route::get('login',[
		'as'=>'login',
		'uses'=>'controladorLogin@inicio',
	]);
Route::get('usuario/opcion/{id}',[
		'as'=>'opcion',
		'uses'=>'controladorLogin@opcion',
	]);
Route::get('usuario/carrera',[
		'as'=>'carrera',
		'uses'=>'controladorLogin@carrera',
	]);
Route::resource('cdocente','controladorDocente');
Route::resource('cestudiante','controladorEstudiante');
//panel de administracion
	Route::get('panel/semestre/result',[
		'as'=>'semestre-result',
		'uses'=>'panel\controladorSemestre@result'
		]); 
	Route::get('panel/carrera/result',[
		'as'=>'carrera-result',
		'uses'=>'panel\controladorCarrera@result'
		]); 
	Route::get('panel/materia/result',[
		'as'=>'materia-result',
		'uses'=>'panel\controladorMateria@result'
		]);
	Route::get('panel/estudiante/result',[
		'as'=>'estudiante-result',
		'uses'=>'panel\controladorEstudiante@result'
		]);
	Route::get('panel/docente/result',[
		'as'=>'docente-result',
		'uses'=>'panel\controladorDocente@result'
		]);
	Route::resource('panel/carrera','panel\controladorCarrera');
	Route::resource('panel/semestre','panel\controladorSemestre');
	Route::resource('panel/materia','panel\controladorMateria');
	//ruta Estudiante
	Route::resource('panel/estudiante','panel\controladorEstudiante');
	//ruta Docente
	Route::resource('panel/docente','panel\controladorDocente');
	Route::get('panel',[
		'as'=>'panel',
		'uses'=>'panel\controladorPanel@inicio'
		]);
//panel super Usuario
	Route::resource('panelsu/semestres','panelsu\controladorSemestre');
	Route::resource('panelsu/carreras','panelsu\controladorCarrera');
	Route::resource('panelsu/materias','panelsu\controladorMateria');
	Route::resource('panelsu/administradors','panelsu\controladorAdministrador');
	Route::resource('panelsu/estudiantes','panelsu\controladorEstudiante');
	Route::resource('panelsu/docentes','panelsu\controladorDocente');
	Route::get('panelsu',[
		'as'=>'panelsu',
		'uses'=>'panelsu\controladorPanelsu@inicio'
		]);