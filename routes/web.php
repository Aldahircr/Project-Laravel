<?php
//use Illuminate\Support\Facades\Route;

//App::setLocale('es'); cambiar idioma

Route::view('/', 'home')->name('home');
Route::view('/quienes somos', 'about')->name('about');

Route::get('/portafolio', 'ProjectController@index')->name('projects.index');
Route::get('/portafolio/crear', 'ProjectController@create')->name('projects.create');

Route::post('/portafolio', 'ProjectController@store')->name('projects.store');

Route::get('/portafolio/{project}', 'ProjectController@show')->name('projects.show');



Route::view('/contacto', 'contact')->name('contact');
Route::post('/contact' , 'MessageController@store')->name('messages.store');





























//Rout::get('/', function () {
    //return view('welcome');e


//Route::get('/', function(){

//return  "Hola desde la pagina de inicio";
//});
//Route::get('about', function(){

//return  "Pagina about";

//});

//Route::get('Contactar', function(){

//return  "Pagina contactos";

//})->name('contact');

//Route::get('/', function(){

	//echo "<a href='" . route('contact') . "'>contact 1</a><br>";
	//echo "<a href='" . route('contact') . "'>contact 2</a><br>";
	//echo "<a href='" . route('contact') . "'>contact 3</a><br>";
	//echo "<a href='" . route('contact') . "'>contact 4</a><br>";
	//echo "<a href='" . route('contact') . "'>contact 5</a><br>";
//});


//Route::get('/', function () {
	//$nombre = "Aldahir";

 //return view('home')->with('nombre', $nombre);

//})->name('home');


//Route::view('/', 'home');