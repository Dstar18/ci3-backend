<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->load->model('tabel/Tbl_user_model');
    }

    public function gets(){
        $result = $this->Tbl_user_model->gets();
        return to_obj($result);
    }

    public function get($id=false){
        $cekID  = $this->db->where('iduser', $id)->get('tb_user');
        if($cekID->num_rows()>0){
            $result = $this->Tbl_user_model->get($id);
            return to_obj($result);
        }else{
            return to_obj([
                "error" => ([
                    "resultCode"    => 404,
                    "resultMsg"     => "Data not found"
                ])
            ]);
        }
    }

    public function insert($post=false){
        $data = array(
            'role_id'       => $post['role_id'],
            'nip'           => $post['nip'],
            'email'         => $post['email'],
            'firstname'     => $post['firstname'],
            'lastname'      => $post['lastname'],
            'password'      => md5($post['password']),
            'created_at'    => date('Y-m-d H:i:sa')
        );
        $cekNIP = $this->db->where('nip', $data['nip'])->get('tb_user');
        if($cekNIP->num_rows()>0){
            return to_obj([
                "error" => ([
                    "resultCode"    => 500,
                    "resultMsg"     => "Error - NIP sudah tersedia"
                ]),
                "resultData" => false
            ]);
        }else{
            $result = $this->Tbl_user_model->insert($data);
            return to_obj([
                "result" => ([
                    "resultCode"    => 200,
                    "resultMsg"     => "Created successfully"
                ]),
                "resultData" => $result
            ]);
        }
    }

    public function update($post=false){
        $data = array(
            'iduser'        => $post['iduser'],
            'role_id'       => $post['role_id'],
            'nip'           => $post['nip'],
            'email'         => $post['email'],
            'firstname'     => $post['firstname'],
            'lastname'      => $post['lastname'],
            'password'      => md5($post['password']),
            'update_at'     => date('Y-m-d H:i:sa')
        );
        $cekID  = $this->db->where('iduser', $data['iduser'])->get('tb_user');
        if($cekID->num_rows()>0){
            $result = $this->Tbl_user_model->update($data);
            return to_obj([
                "result" => ([
                    "resultCode"    => 200,
                    "resultMsg"     => "Update successfully"
                ]),
                "resultData" => $result
            ]);
        }else{
            return to_obj([
                "error" => ([
                    "resultCode"    => 404,
                    "resultMsg"     => "User not found"
                ]),
                "resultData" => false
            ]);
        }
    }

    public function delete($id=false){
        $cekID  = $this->db->where('iduser', $id)->get('tb_user');
        if($cekID->num_rows()>0){
            $result = $this->Tbl_user_model->delete($id);
            return to_obj([
                "result" => ([
                    "resultCode"    => 200,
                    "resultMsg"     => "Delete successfully"
                ]),
                "resultData" => $result
            ]);
        }else{
            return to_obj([
                "error" => ([
                    "resultCode"    => 404,
                    "resultMsg"     => "Data not found"
                ]),
                "resultData" => false
            ]);
        }
    }
}