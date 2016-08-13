<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});

Route::get('SaludComunitaria', function()
{
	return View::make('StaticPage.salud');
});

Route::get('DesarrolloInstitucional', function()
{
	return View::make('StaticPage.desarrollo');
});

Route::get('MedioAmbiente', function()
{
	return View::make('StaticPage.medioambiente');
});

Route::get('OrganizacionSocial', function()
{
	return View::make('StaticPage.organizacionsocial');
});

Route::get('ReservaHidrica', function()
{
	return View::make('StaticPage.reservahidrica');
});

Route::get('Documentos', function()
{
	return View::make('StaticPage.documentos');
});

Route::get('PaginasAmigas', function()
{
	return View::make('StaticPage.amigas');
});

Route::get('Contactenos', function()
{
	return View::make('StaticPage.contacto');
});


Route::get('Noticias', function()
{
	return View::make('StaticPage.noticias');
});



Route::get('login', function()
{
	return View::make('login');
});

Route::post('login', function(){

	$userdata = array(
		'username' =>Input::get('username'),
		'password' =>Input::get('password')
	);

	if(Auth::attempt($userdata)){
		return Redirect::to('Administrador');
	}else{
		return Redirect::back();
	}

});


///////////////////
// ADMINISTRADOR //
///////////////////

Route::group(array('before' => 'auth'), function()
{	
	Route::group(array('prefix' => 'Administrador'), function () {
		Route::get('/', function(){
			return View::make('administrador.index');
		});

		Route::group(array('prefix' => 'Slider'), function () {
			Route::get('Index', 'SliderController@index');
			Route::post('Index', 'SliderController@storeindex');	
			Route::get('Index/Delete/{id}', 'SliderController@deleteindex');			
		});

		Route::get('logout', function(){
			Auth::logout();
			return Redirect::to('/');
		});
	});	
});		


