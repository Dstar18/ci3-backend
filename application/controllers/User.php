<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model(['User_model']);
    }

    public function lists_get(){
        $result = $this->User_model->gets();
        $this->response($result, 200);
    }

    public function list_get($id=false){
        $result = $this->User_model->get($id);
        if(isset($result->error)){
            $this->response($result, 404);    
        }
        $this->response($result, 200);
    }

    public function insert_post(){
        if($this->form_validation->run('user/insert') == FALSE){
            $result = $this->validation_errors();
            $error['error'] = implode(" ", $result); /*Jika mau dijadikan string*/
            $this->response($error, 500);
        }else{
            $post = $this->input->post(null, TRUE);
            $result = $this->User_model->insert($post);
            if(isset($result->error)){
                $this->response($result, 500);
            }
            $this->response($result, 201);
        }
    }

    public function update_post(){
        if($this->form_validation->run('user/update') == FALSE){
            $result = $this->validation_errors();
            // $error = implode(" ", $result); /*Jika mau dijadikan string*/
            $this->response($result);
        }else{
            $post = $this->input->post(null, TRUE);
            $result = $this->User_model->update($post);
            if(isset($result->error)){
                $this->response($result, 404);
            }
            $this->response($result, 200);
        }
    }

    public function delete_delete($id=false){
        $result = $this->User_model->delete($id);
        if(isset($result->error)){
            $this->response($result, 404);
        }
        $this->response($result, 200);
    }
    
}