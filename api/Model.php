<?php
session_start();
require_once 'Constants.php';

class Model
{
	protected $db;

	public function __construct()
	{
		$this->_set_connection_();
	}

	private function _set_connection_()
	{
		$this->db = new MySQLi(CONNECTION['HOSTNAME'], CONNECTION['USERNAME'], CONNECTION['PASSWORD'], CONNECTION['DATABASE'], CONNECTION['PORT'], CONNECTION['SOCKET']);
	}
}
