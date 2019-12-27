<?php 

    class Client extends Controller{
        public function update(){
            session_start();
            $data = $this->model('Login_model')->getUser($_SESSION['email_user']);
            if($this->model('Client_model')->updateDataClient($_POST) > 0){
                header('Location: '.BASEURL.'/profile/'.$data['id_client']);
            }
        }
    }

?>