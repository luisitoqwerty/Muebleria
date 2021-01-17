<?php

namespace App\Controllers;

use App\Models\HomePostModel;

class HomePost extends BaseController
{
	public function agregarUsuarios()
	{

		$data = array(
			"nombre" => $_POST['nombre'],
			"tipo" => $_POST['tipo'],
			"costov" => $_POST['costov'],
			"costoc" => $_POST['costoc'],
			"fecha" => $_POST['fecha']
		);
		$model =  new HomePostModel();
		echo $exito = $model->agregarUsuario($data);
	}

	public function obtenerTodosLosUsuarios()
	{
		$model =  new HomePostModel();
		$datos = $model->obtenerTodosLosUsuariosModel();

		echo json_encode($datos);
	}

	public function eliminaUsuario()
	{
		$model =  new HomePostModel();
		$datos = array("id_mueble" => $_POST['id_mueble']);
		echo $model->eliminaUsuario($datos);
	}

	public function obtenerDatosUpdate()
	{
		$model =  new HomePostModel();
		$data = array('id_mueble' => $_POST['id_mueble']);
		echo $model->obtenerDatosUpdate($data);
	}

	public function actualizarUsuario()
	{
		$model =  new HomePostModel();
		$data = array(
			
			"nombre" => $_POST['nombreu'],
			"tipo" => $_POST['tipou'],
			"costov" => $_POST['costovu'],
			"costoc" => $_POST['costocu'],
			"fecha" => $_POST['fechau']
		);
		echo $model->actualizarUsuario($data);
	}
	//--------------------------------------------------------------------

}
