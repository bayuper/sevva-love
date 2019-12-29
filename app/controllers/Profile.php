<?php 

class Profile extends Controller{
    public function index($id){
        session_start();
        $data = $this->model('Login_model')->getUser($_SESSION['email_user']);
        $data['title'] = "Profile";
        $data['locate'] = $this->model('Client_model')->getLokasi();
        $data['motor'] = $this->model('Motor_model')->getNamaMotorById($id);
        $data['motoraku'] = $this->model('Motor_model')->getMotorById($id);
        $this->view('templates/header2',$data);
        $this->view('profile/index',$data);
        $this->view('templates/footer');
    }
    public function clientprofile($id){
        session_start();
        $data = $this->model('Login_model')->getUser($_SESSION['email_user']);
        $data['client'] = $this->model('Client_model')->getClientProfile($id);
        $data['motor'] = $this->model('Client_model')->getClientProfileMotor($id);
        $data['title'] = "Client Profile";
        $this->view('templates/header2',$data);
        $this->view('profile/clientprofile',$data);
        $this->view('templates/footer');

    }
}

?>