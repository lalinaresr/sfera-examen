<?php
require_once '../Model.php';

class Auth extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function login($data)
	{
		$user = $this->db->real_escape_string($data['user']);
		$password = $this->db->real_escape_string($data['password']);
		$response = $this->db->query(sprintf("SELECT * FROM usuario WHERE usuario = '%s' AND contrasena = '%s' LIMIT 1", $user, $password));

		if ($response->num_rows > 0) {
			$user = $response->fetch_assoc();
			$this->_set_userdata_(true, $user['id']);
			return json_encode(['type' => 'success']);
		} else {
			return json_encode(['type' => 'not-found']);
		}
	}

	public function logout()
	{
		$this->_set_userdata_();
		session_unset();
		session_destroy();
		return json_encode(['type' => 'success']);
	}

	private function _set_userdata_($logged = false, $value = null)
	{
		$_SESSION['is_logged_in'] = $logged;
		$_SESSION['user'] = $value;
	}
}
