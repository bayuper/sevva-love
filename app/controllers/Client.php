<?php 

    class Client extends Controller{
        public function update(){
            if($this->model('Client_model')->updateDataClient($_POST) > 0){
                header('Location: '.BASEURL.'/profile');
            }
        }
    }

?>