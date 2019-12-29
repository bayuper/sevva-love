<?php 

class Profile extends Controller{
    public function index($id){
        session_start();
        $data = $this->model('Login_model')->getUser($_SESSION['email_user']);
        $data['title'] = "Profile";
        $data['locate'] = $this->model('Client_model')->getLokasi();
        $data['brand']= $this->model('Motor_model')->getBrand();
        $data['tipe']= $this->model('Motor_model')->getTipe();
        $data['motor'] = $this->model('Motor_model')->getNamaMotorById($id);
        $data['rent'] = $this->model('Motor_model')->getRentedMotorById($id);
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

    public function updateRentStatus(){
        session_start();
        $data = $this->model('Login_model')->getUser($_SESSION['email_user']);
        $this->model('Motor_model')->updateStatusReturnMotor($_POST);
        header('Location: '.BASEURL.'/profile/'.$data['id_client']);
        var_dump($_POST);
    }

    public function deleteClient($id){
        $this->model('Client_model')->deleteAccount($id);
        header('Location: '.BASEURL);
    }
}

?>