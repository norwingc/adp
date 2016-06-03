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