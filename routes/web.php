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

use App\Course;


use Facades\App\Alert;




$courses = collect([
	new Course(['title'=> 'OOP', 'premium' => true]),
	new Course(['title'=> 'Primeros pasos con Laravel', 'premium' => false]),
	new Course(['title'=> 'Git', 'premium' => true]),
	new Course(['title'=> 'Laravel 5.4', 'premium' => false]),
]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('courses', function() use ($courses){
    Alert::message('¡Hola como estan todos!!!!', 'success');

    return view('courses');
	/**
	 * Map sirve para allar a cada uno de los cursos
	 */

	//$courses->map->archive();

	/**
	 * Filtrando el curso por el tipo premium
	 * filter() funciona para filtra donde el retorno sea verdadero
	 */

	/*$premium = $courses->filter(function ($course){
		return $course->premium;
	});*/


	#$premium = $courses->filter->premium;
	//$premium = $courses->filter->isPremium();


	/**
	 * Filtrando el curso por el tipo premium
	 * reject() funciona para filtra donde el retorno sea opuesto a verdadero
	 */

	/*$free = $courses->reject(function ($course){
		return $course->premium;
	});*/

	#$free = $courses->reject->premium;
	//$free = $courses->reject->isPremium();

	/**
	 * Filtrando con funcion de laravel 5.3 list()
	 */


	/*list($premium, $free) = $courses->partition(function($course){
		return $course->premium;
	});*/

	list($premium, $free) = $courses->partition->isPremium();


	//dd($courses->toArray(), $premium->toArray(), $free->toArray());

});
