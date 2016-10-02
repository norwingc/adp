
<?php

class SliderController extends BaseController {

	public function index()
	{	
		$slider = SliderIndex::all();
		$title = 'Agregar Slider del Index';
		$url = 'Administrador/Slider/Index';		
		return View::make('administrador.slider.index', compact('slider', 'title', 'url'));
	}

	public function storeindex()
	{
		$slider = new SliderIndex();
		$slider->name = Input::get('name');

		if(Input::hasFile('path')) {
			Input::file('path')->move('img/slider/index/', Input::file("path")->getClientOriginalName());
			$slider->path = 'index/'.Input::file("path")->getClientOriginalName();
		}

		$slider->save();

		Session::flash('message', 'Imagen agregada');	
		return Redirect::back();
	}

	public function deleteindex($id)
	{
		$slider = SliderIndex::find($id);

		File::delete('img/slider/'. $slider->path);

		$slider->delete();

		Session::flash('message', 'Imagen Borrada');	
		return Redirect::back();
	}



	public function desarrollo()
	{	
		$slider = SliderDesarrollo::all();
		$title = 'Agregar Slider del Desarrollo Institucional';
		$url = 'Administrador/Slider/Desarrollo';		
		return View::make('administrador.slider.index', compact('slider', 'title', 'url'));
	}

	public function storedesarrollo()
	{
		$slider = new SliderDesarrollo();
		$slider->name = Input::get('name');

		if(Input::hasFile('path')) {
			Input::file('path')->move('img/slider/desarrollo/', Input::file("path")->getClientOriginalName());
			$slider->path = 'desarrollo/'.Input::file("path")->getClientOriginalName();
		}

		$slider->save();

		Session::flash('message', 'Imagen agregada');	
		return Redirect::back();
	}

	public function deletedesarrollo($id)
	{
		$slider = SliderDesarrollo::find($id);

		File::delete('img/slider/'. $slider->path);

		$slider->delete();

		Session::flash('message', 'Imagen Borrada');	
		return Redirect::back();
	}

	public function organizacion()
	{	
		$slider = SliderOrganizacion::all();
		$title = 'Agregar Slider de Organizacion Social Comunitaria';
		$url = 'Administrador/Slider/Organizacion';		
		return View::make('administrador.slider.index', compact('slider', 'title', 'url'));
	}

	public function storeorganizacion()
	{
		$slider = new SliderOrganizacion();
		$slider->name = Input::get('name');

		if(Input::hasFile('path')) {
			Input::file('path')->move('img/slider/organizacion/', Input::file("path")->getClientOriginalName());
			$slider->path = 'organizacion/'.Input::file("path")->getClientOriginalName();
		}

		$slider->save();

		Session::flash('message', 'Imagen agregada');	
		return Redirect::back();
	}

	public function deleteorganizacion($id)
	{
		$slider = SliderOrganizacion::find($id);

		File::delete('img/slider/'. $slider->path);

		$slider->delete();

		Session::flash('message', 'Imagen Borrada');	
		return Redirect::back();
	}


	public function salud()
	{	
		$slider = SliderSalud::all();
		$title = 'Agregar Slider de Salud Comunitaria Preventiva';
		$url = 'Administrador/Slider/Salud';		
		return View::make('administrador.slider.index', compact('slider', 'title', 'url'));
	}

	public function storesalud()
	{
		$slider = new SliderSalud();
		$slider->name = Input::get('name');

		if(Input::hasFile('path')) {
			Input::file('path')->move('img/slider/salud/', Input::file("path")->getClientOriginalName());
			$slider->path = 'salud/'.Input::file("path")->getClientOriginalName();
		}

		$slider->save();

		Session::flash('message', 'Imagen agregada');	
		return Redirect::back();
	}

	public function deletesalud($id)
	{
		$slider = SliderSalud::find($id);

		File::delete('img/slider/'. $slider->path);

		$slider->delete();

		Session::flash('message', 'Imagen Borrada');	
		return Redirect::back();
	}

	public function ambiente()
	{	
		$slider = SliderAmbiente::all();
		$title = 'Agregar Slider de Medio Ambiente y Cambio Climático';
		$url = 'Administrador/Slider/Ambiente';		
		return View::make('administrador.slider.index', compact('slider', 'title', 'url'));
	}

	public function storeambiente()
	{
		$slider = new SliderAmbiente();
		$slider->name = Input::get('name');

		if(Input::hasFile('path')) {
			Input::file('path')->move('img/slider/ambiente/', Input::file("path")->getClientOriginalName());
			$slider->path = 'ambiente/'.Input::file("path")->getClientOriginalName();
		}

		$slider->save();

		Session::flash('message', 'Imagen agregada');	
		return Redirect::back();
	}

	public function deleteambiente($id)
	{
		$slider = SliderAmbiente::find($id);

		File::delete('img/slider/'. $slider->path);

		$slider->delete();

		Session::flash('message', 'Imagen Borrada');	
		return Redirect::back();
	}

	public function recurso()
	{	
		$slider = SliderRecurso::all();
		$title = 'Agregar Slider de Recurso Hídrico';
		$url = 'Administrador/Slider/Recurso';		
		return View::make('administrador.slider.index', compact('slider', 'title', 'url'));
	}

	public function storerecurso()
	{
		$slider = new SliderRecurso();
		$slider->name = Input::get('name');

		if(Input::hasFile('path')) {
			Input::file('path')->move('img/slider/recurso/', Input::file("path")->getClientOriginalName());
			$slider->path = 'recurso/'.Input::file("path")->getClientOriginalName();
		}

		$slider->save();

		Session::flash('message', 'Imagen agregada');	
		return Redirect::back();
	}

	public function deleterecurso($id)
	{
		$slider = SliderRecurso::find($id);

		File::delete('img/slider/'. $slider->path);

		$slider->delete();

		Session::flash('message', 'Imagen Borrada');	
		return Redirect::back();
	}


	public function flora()
	{	
		$slider = SliderFlora::all();
		$title = 'Agregar Slider de Recurso Flora y Fauna';
		$url = 'Administrador/Slider/Flora';		
		return View::make('administrador.slider.index', compact('slider', 'title', 'url'));
	}

	public function storeflora()
	{
		$slider = new SliderFlora();
		$slider->name = Input::get('name');
	
		if(Input::hasFile('path')) {
			Input::file('path')->move('img/slider/flora/', Input::file("path")->getClientOriginalName());
			$slider->path = 'flora/'.Input::file("path")->getClientOriginalName();
		}

		$slider->save();

		Session::flash('message', 'Imagen agregada');	
		return Redirect::back();
	}

	public function deleteflora($id)
	{
		$slider = SliderFlora::find($id);

		File::delete('img/slider/'. $slider->path);

		$slider->delete();

		Session::flash('message', 'Imagen Borrada');	
		return Redirect::back();
	}

	public function senderos()
	{	
		$slider = SliderSenderos::all();
		$title = 'Agregar Slider de Senderos';
		$url = 'Administrador/Slider/Senderos';		
		return View::make('administrador.slider.index', compact('slider', 'title', 'url'));
	}

	public function storesenderos()
	{
		$slider = new SliderSenderos();
		$slider->name = Input::get('name');
	
		if(Input::hasFile('path')) {
			Input::file('path')->move('img/slider/senderos/', Input::file("path")->getClientOriginalName());
			$slider->path = 'senderos/'.Input::file("path")->getClientOriginalName();
		}

		$slider->save();

		Session::flash('message', 'Imagen agregada');	
		return Redirect::back();
	}

	public function deletesenderos($id)
	{
		$slider = SliderSenderos::find($id);

		File::delete('img/slider/'. $slider->path);

		$slider->delete();

		Session::flash('message', 'Imagen Borrada');	
		return Redirect::back();
	}

}
