<?php
require_once '../Model.php';

class Users extends Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function find($value = null, $field = 'id')
    {
        $response = $this->db->query(sprintf("SELECT * FROM users WHERE %s = '%s' LIMIT 1", $field, $value));
        
        if ($response)
            return json_encode(['type' => 'success', 'data' => $response->fetch_assoc()]);
    }
}