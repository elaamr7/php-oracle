<?php

class home extends controller{
    public function index(){
        $data['judul'] = 'Halaman index';
        $this->view('templates/metatag'); 
        $this->view('templates/header'); 
        $this->view('home/index'); 
        $this->view('templates/footer'); 
    }
}