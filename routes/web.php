<?php
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::get('/portafolio', 'PortafolioController@index')->name('portafolio');
Route::view('/contact', 'contact')->name('contact');





























//Route::get('/', function () {
    //return view('welcome');


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