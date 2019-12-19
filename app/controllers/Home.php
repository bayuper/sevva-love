<?php 

class Home extends Controller{
    public function index(){
        session_start();
        if(isset($_SESSION['email'])){
            //session_start();
            //header('Location: localhost:8888/sevva/public/login/cekUser');
            //session_destroy();
            $data =  $this->model('Login_model')->getUser($_SESSION['email_user']);
            $data['title'] = 'Home';
            $data['locate'] = $this->model('Client_model')->getLokasi();
            $data['brand']= $this->model('Motor_model')->getBrand();
            $data['tipe']= $this->model('Motor_model')->getTipe();
            $data['motor'] = $this->model('Motor_model')->getAllMotor();
            $this->view('templates/header2',$data);
            $this->view('home/homeLogin',$data);
            $this->view('templates/footer');
        }else{
            $data['title'] = 'Home';
            $data['locate'] = $this->model('Client_model')->getLokasi();
            $data['brand']= $this->model('Motor_model')->getBrand();
            $data['tipe']= $this->model('Motor_model')->getTipe();
            $data['motor'] = $this->model('Motor_model')->getAllMotor();
            $this->view('templates/header', $data);
            $this->view('home/index', $data);
            $this->view('templates/footer');
        }
        
    }
}

?>