<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    // $name, $username, $password
    public function add($name, $username, $password)
    {
        // return($this->db->insert('user',$user))
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
    
    public function getUserById($id){
        $this->db->where('id',$id);
        return $this->db->get('user')->result_array()[0];
    }

    public function deleteUser($id){
        return $this->db->delete('user',array('id'=>$id));
    }

    public function update($user){
        $data = array(
            'name'=> $user['name'],
            'username'=> $user['username'],
            'password' => $user['password']
        );
        $this->db->where('id',$user['id']);
        return $this->db->update('user',$data);
    }
}