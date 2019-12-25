<?php 

class Login extends Controller{
    public function index(){
        $data['status'] = true;
        $data['title'] = 'Login';
        $this->view('login/index', $data);
        $this->view('templates/footer');
    }

    public function cekUser(){
        $data =  $this->model('Login_model')->getUser($_POST['email']);
        // check
        if($_POST['email'] == $data['email'] && md5($_POST['password']) == $data['password']){
            session_start();
            $_SESSION['email'] = $data;
            $_SESSION['email_user'] = $_POST['email'];
            header('Location: '.BASEURL);
            // $data['title'] = 'Home';
            // $data['locate'] = $this->model('Client_model')->getLokasi();
            // $data['brand']= $this->model('Motor_model')->getBrand();
            // $data['tipe']= $this->model('Motor_model')->getTipe();
            // $this->view('templates/header2',$data);
            // $this->view('home/homeLogin',$data);
            // $this->view('templates/footer');
            //session_destroy();
        }
        else{
            $data = [];
            $data['title'] = 'Home';
            $data['status'] = false;
            $this->view('login/index', $data);
            $this->view('templates/footer');
        }

    }

    public function logout(){
        session_start();
        session_unset();
        header('Location: '.BASEURL);
        
    }
}

?>