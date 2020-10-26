<?php namespace App\Controllers;

class BicicletaController extends BaseController
{
	public function index()
	{
		
		$vistas = 
		view('plantilla/header').
		view('plantilla/principal').
		view('plantilla/footer');
		return $vistas;
		//echo "<h1>Esta en el area de contacto</h1>";
	}

	public function catalogo(){
		return view('plantilla/header').
					view('plantilla/menu').
					view('plantilla/footer');

		
	}

	public function registro(){
		$vistas = 
		view('plantilla/header').
		view('plantilla/registro').
		view('plantilla/footer');
		return $vistas;
	}

	public function accesorios(){
		$vistas = 
		view('plantilla/header').
		view('plantilla/accesorios').
		view('plantilla/footer');
		return $vistas;
	}

	public function complementos(){
		$vistas = 
		view('plantilla/header').
		view('plantilla/complementos').
		view('plantilla/footer');
		return $vistas;
	}
}

	
