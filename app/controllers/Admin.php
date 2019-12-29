<?php

class Admin extends Controller{
    public function index(){
        $data['title'] = "Admin";
        $this->view('templates/headeradmin',$data);
        $this->view('admin/index',$data);
    }
    
    public function clientadmin(){
        $data['title'] = "Client";
        $this->view('templates/headeradmin',$data);
        $this->view('admin/clientadmin',$data);
    }

    public function motoradmin(){
        $data['title'] = "Client";
        $this->view('templates/headeradmin');
        $this->view('admin/clientadmin',$data);
    }
}