<?php

class HistoriasController extends BaseController {

	public function index()
	{	
		$historias = Historia::all();
		return View::make('administrador.historia.index', compact('historias'));
	}

	public function add()
	{			
		return View::make('administrador.historia.add');
	}

	public function store()
	{
		
		$historia         = new Historia;
		$historia->date   = date('d-F');
		$historia->titulo = Input::get('titulo');
		$historia->texto  = Input::get('texto');

		if(Input::hasFile('path')) {
			Input::file('path')->move('img/historia/', Input::file("path")->getClientOriginalName());
			$historia->path = Input::file("path")->getClientOriginalName();
		}

		$historia->save();

		Session::flash('message', 'Noticia Agregada');	
		return Redirect::back();
	}

	public function delete($id)
	{
		$historia = Historia::find($id);
		$historia->delete();

		Session::flash('message', 'Noticia Borrada');	
		return Redirect::back();

	}
}