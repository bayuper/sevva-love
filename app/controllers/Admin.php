<?php

class Admin extends Controller{
    $data['title'] = "Admin";
    $this->view('admin/index',$data);
}