<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tbl_user_model extends CI_Model{

    public function gets(){
        $query = $this->db->join('tb_role','tb_role.idrole = tb_user.role_id')->get('tb_user')->result();
        return $query;
    }

    public function get($id){
        $query = $this->db->where('iduser',$id)->join('tb_role','tb_role.idrole = tb_user.role_id')->get('tb_user')->row();
        return $query;
    }

    public function insert($data){
        $query = $this->db->insert('tb_user',$data);
        return $query;
    }

    public function update($data){
        $query = $this->db->where('iduser',$data['iduser'])->update('tb_user',$data);
        return $query;
    }

    public function delete($id){
        $query = $this->db->where('iduser',$id)->delete('tb_user');
        return $query;
    }
}