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


			Route::get('Desarrollo', 'SliderController@desarrollo');
			Route::post('Desarrollo', 'SliderController@storedesarrollo');	
			Route::get('Desarrollo/Delete/{id}', 'SliderController@deletedesarrollo');		

			Route::get('Organizacion', 'SliderController@organizacion');
			Route::post('Organizacion', 'SliderController@storeorganizacion');	
			Route::get('Organizacion/Delete/{id}', 'SliderController@deleteorganizacion');

			Route::get('Salud', 'SliderController@salud');
			Route::post('Salud', 'SliderController@storesalud');	
			Route::get('Salud/Delete/{id}', 'SliderController@deletesalud');

			Route::get('Ambiente', 'SliderController@ambiente');
			Route::post('Ambiente', 'SliderController@storeambiente');	
			Route::get('Ambiente/Delete/{id}', 'SliderController@deleteambiente');

			Route::get('Recurso', 'SliderController@recurso');
			Route::post('Recurso', 'SliderController@storerecurso');	
			Route::get('Recurso/Delete/{id}', 'SliderController@deleterecurso');

			Route::get('Flora', 'SliderController@flora');
			Route::post('Flora', 'SliderController@storeflora');	
			Route::get('Flora/Delete/{id}', 'SliderController@deleteflora');

			Route::get('Senderos', 'SliderController@senderos');
			Route::post('Senderos', 'SliderController@storesenderos');	
			Route::get('Senderos/Delete/{id}', 'SliderController@deletesenderos');
		});

		Route::group(array('prefix' => 'Noticias'), function () {
			Route::get('/', 'HistoriasController@index');
			Route::get('Add', 'HistoriasController@add');
			Route::post('Add', 'HistoriasController@store');	
			Route::get('Delete/{id}', 'HistoriasController@delete');			
		});


		Route::get('logout', function(){
			Auth::logout();
			return Redirect::to('/');
		});
	});	
});		


