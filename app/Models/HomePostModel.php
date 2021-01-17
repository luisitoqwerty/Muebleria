<?php namespace App\Models;

use CodeIgniter\Model;

class HomePostModel extends Model {
	public function agregarUsuario($data) {
		$usuario = $this->db->table("t_muebles");
		$usuario->insert($data);
		return $this->db->insertID();
	}

	public function obtenerTodosLosUsuariosModel(){
		$usuario  = $this->db->query('SELECT * FROM t_muebles');
		return $usuario->getResult();
	}

	public function eliminaUsuario($data) {
		$usuario = $this->db->table("t_muebles");
		$usuario->where($data);
		$usuario->delete();
		return json_encode(array("status" => TRUE));
	}

	public function obtenerDatosUpdate($data) {
		$usuario = $this->db->table("t_muebles");
		$usuario->where($data);
		return json_encode($usuario->get()->getResultArray());
	}

	public function actualizarUsuario($data) {
		$usuario = $this->db->table("t_muebles");

		$id_mueble  = $data['id_mueble'];
		$usuario->set($data);


		$usuario->where('id_mueble', $id_mueble );
		return $usuario->update();
	}
}