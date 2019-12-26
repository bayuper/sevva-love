<?php 

class Profile extends Controller{
    public function index(){
        session_start();
        $data = $this->model('Login_model')->getUser($_SESSION['email_user']);
        $data['title'] = "Profile";
        $data['locate'] = $this->model('Client_model')->getLokasi();
        $this->view('templates/header2',$data);
        $this->view('profile/index',$data);
        $this->view('templates/footer');
    }
}

?>