
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
		$sliderindex = new SliderIndex();
		$sliderindex->name = Input::get('name');

		if(Input::hasFile('path')) {
			Input::file('path')->move('img/slider/index/', Input::file("path")->getClientOriginalName());
			$sliderindex->path = 'index/'.Input::file("path")->getClientOriginalName();
		}

		$sliderindex->save();

		Session::flash('message', 'Imagen agregada');	
		return Redirect::back();
	}

	public function deleteindex($id)
	{
		$sliderindex = SliderIndex::find($id);

		File::delete('img/slider/'. $sliderindex->path);

		$sliderindex->delete();

		Session::flash('message', 'Imagen Borrada');	
		return Redirect::back();
	}

}
