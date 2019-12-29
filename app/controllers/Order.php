<?php 
    class Order extends Controller{
        public function index($id){
            session_start();
            $data =  $this->model('Login_model')->getUser($_SESSION['email_user']);
            $data['motor'] = $this->model('Motor_model')->getMotorById($id);
            $data['client'] = $this->model('Motor_model')->getNamaClientById($id);
            $data['id'] = $this->model('Motor_model')->getNewIdOrder();
            $data['title'] = 'Order';
            $this->view('templates/header2', $data);
            $this->view('order/index', $data);
            $this->view('templates/footer');
        }

        public function tambah(){
            session_start();
            $data =  $this->model('Login_model')->getUser($_SESSION['email_user']);
            if($this->model('Motor_model')->tambahDataOrder($_POST) > 0){
                $this->model('Motor_model')->updateStatusMotor($_POST);
                header('Location: '.BASEURL.'/profile/index/'.$data['id_client']);
                var_dump($_POST);
            }
        }

        public function payment($id){
            session_start();
            $data =  $this->model('Login_model')->getUser($_SESSION['email_user']);
            $data['motor'] = $this->model('Motor_model')->getMotorById($id);
            $data['client'] = $this->model('Motor_model')->getNamaClientById($id);
            $data['id'] = $this->model('Motor_model')->getNewIdOrder();
            $data['title'] = 'Order';
            $this->view('templates/header2', $data);
            $this->view('order/payment', $data);
            $this->view('templates/footer');
        }
    }

?>