<?php 

class Profile extends Controller{
    public function index(){
        $data['title'] = "Profile";
        session_start();
        $data = $this->model('Login_model')->getUser($_SESSION['email']);
        $this->view('profile/index',$data);
        $this->view('templates/footer');
    }
}

?>