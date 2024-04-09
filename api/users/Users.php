<?php
require_once '../Model.php';

class Users extends Model
{
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

    public function update($data)
    {
        $firstname = $this->db->real_escape_string($data['firstname']);
        $lastname = $this->db->real_escape_string($data['lastname']);
        $email = $this->db->real_escape_string($data['email']);
        $password = $this->db->real_escape_string($data['password']);
        $response = $this->db->query(sprintf("UPDATE users SET firstname = '%s', lastname = '%s', email = '%s', password = '%s', updated_at = '%s' WHERE id = '%d'", $firstname, $lastname, $email, $password, date('Y-m-d H:i:s'), $data['id']));

        if ($response)
            return json_encode(['type' => 'success', 'data' => $response]);
    }
}
