<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function add($name, $username, $password)
    {
        return ($this->db->query('INSERT INTO `user`(name,username,password) VALUES("' . $name . '", "' . $username . '", "' . $password . '")'));
    }

    public function authenticate($username, $password)
    {
        $query = $this->db->query('SELECT * FROM user WHERE username="' . $username . '" AND password="' . $password . '";')->result_array();
        return (!empty($query));
    }

    public function getAll()
    {
        return ($this->db->get('user')->result_array());
    }
}