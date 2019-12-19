<?php

class Register extends Controller{
    public function index(){
        $data['title']='Register';
        $data['locate'] = $this->model('Client_model')->getLokasi();
        $data['id'] = $this->model('Client_model')->getNewIdClient();
        $this->view('templates/header',$data);
        $this->view('register/index',$data);
        $this->view('templates/footer');
    }

    public function tambah(){
        //var_dump($_POST);
        if ($this->model('Client_model')->tambahDataClient($_POST) > 0){
            echo '<script>alert("Tambah data sukses")</script>';
            header('Location: '.BASEURL.'/login');
        }else{
            echo "Saying I Wont be silence";
        }
    }
}
