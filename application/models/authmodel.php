<?php
class authmodel extends CI_Model
{
    public function retrieve($id = "", $username = "")
    {
        if (!empty($id)) {
            $this->db->where('id', $id);
        }
        if (!empty($username)) {
            $this->db->where('username', $username);
        }
 
        $result = $this->db->get('users');
        return $result->row();
    }
 
    public function create(
        $username = "",
        $password = "",
        $nama     = "",
        $foto     = ""
    ) {
        $this->db->insert('users', array(
            'username' => $username,
            'password' => $password,
            'nama'     => $nama,
            'foto'     => $foto
        ));
 
        return $this->db->insert_id();
    }

    public function delete($id){
        $this->db->where('id', (int)$id);
        $this->db->delete('users');
    }
}