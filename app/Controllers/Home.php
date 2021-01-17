<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function vistaUsuarios() {
		$vistas = view('layouts/header') . view('usuarios/administrar') . view('layouts/footer');
		return $vistas;
	}

	//--------------------------------------------------------------------

}
