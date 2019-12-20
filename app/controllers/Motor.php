<?php 
    
    class Motor extends Controller{
        public function index()
        {
            // $data = $this->model('Client_model')->getAllClient();
            session_start();
            if(isset($_SESSION['email'])){
                $data =  $this->model('Login_model')->getUser($_SESSION['email_user']);
                $data['locate'] = $this->model('Client_model')->getLokasi();
                $data['brand']= $this->model('Motor_model')->getBrand();
                $data['tipe']= $this->model('Motor_model')->getTipe();
                $data['motor'] = $this->model('Motor_model')->getAllMotor();
                $data['title'] = 'Motorbikes';
                $this->view('templates/header2', $data);
                $this->view('motor/index', $data);
                $this->view('templates/footer');
            }else{
                $data['title'] = 'Motorbikes';
                $data['locate'] = $this->model('Client_model')->getLokasi();
                $data['brand']= $this->model('Motor_model')->getBrand();
                $data['tipe']= $this->model('Motor_model')->getTipe();
                $data['motor'] = $this->model('Motor_model')->getAllMotor();
                $this->view('templates/header', $data);
                $this->view('motor/index', $data);
                $this->view('templates/footer');
            }
        }

        public function cariData(){
                session_start();
                $data =  $this->model('Login_model')->getUser($_SESSION['email_user']);
                $data['title'] = 'Motorbikes';
                $data['locate'] = $this->model('Client_model')->getLokasi();
                $data['brand']= $this->model('Motor_model')->getBrand();
                $data['tipe']= $this->model('Motor_model')->getTipe();
                $data['motor'] = $this->model('Motor_model')->getFindMotor($_POST);
                //$data['motor'] = $this->model('Motor_model')->getAllMotor();
                $this->view('templates/header2', $data);
                $this->view('motor/index', $data);
                $this->view('templates/footer');
        }

        public function pageTambahMotor(){
            session_start();
            $data =  $this->model('Login_model')->getUser($_SESSION['email_user']);
            $data['title'] = 'Add Motorbikes';
            $data['locate'] = $this->model('Client_model')->getLokasi();
            $data['brand']= $this->model('Motor_model')->getBrand();
            $data['tipe']= $this->model('Motor_model')->getTipe();
            $data['id'] = $this->model('Motor_model')->getNewIdMotor();
            $this->view('templates/header2', $data);
            $this->view('motor/addMotor', $data);
            $this->view('templates/footer');
        }
        
        public function tambah()
        {
            //echo $_POST['foto_motor'];
            //var_dump($_POST);
            if($this->model('Motor_model')->tambahDataMotor($_POST) > 0){
               
                echo 'cek';
                header('Location: '.BASEURL.'/motor');
            }else{
                echo "Tambah data gagal";
            }

            if($_POST){
                $file = $_FILES['foto_motor'];
                $file_name = $_FILES['foto_motor']['name'];
                $fileTmpName = $_FILES['foto_motor']['tmp_name'];
                $fileSize = $_FILES['foto_motor']['size'];
                $fileError = $_FILES['foto_motor']['error'];
                $fileType = $_FILES['foto_motor']['type'];

                $fileExt = explode('.',$file_name);
                $fileActExt = strtolower(end($fileExt));

                $allowed = array('jpg','png','jpeg');
                if(in_array($fileActExt,$allowed)){
                    if($fileError === 0){
                        if($fileSize < 1000000){
                            $file_name_new = uniqid('',true).".".$fileActExt;
                            $fileDestination = BASEURL.'/img/'.$file_name_new;
                            move_uploaded_file($fileTmpName,$fileDestination);
                            echo $file_name_new;
                        }
                    }
                }   
            }else{
                echo "idc";
            }

            
        }

        public function detail($id){
            session_start();
            $data =  $this->model('Login_model')->getUser($_SESSION['email_user']);
            $data['title'] = "Detai Motor";
            $data['motor'] = $this->model('Motor_model')->getMotorById($id);
            $this->view('templates/header2', $data);
            $this->view('motor/detail', $data);
            $this->view('templates/footer');
        }
    }

?>