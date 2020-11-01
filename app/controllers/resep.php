<?php

class resep extends controller{
    public function index(){
        $data['judul'] = 'Halaman index';
        $this->view('templates/metatag', $data); 
        $this->view('templates/header'); 
        $this->view('resep/index');  
        $this->view('templates/footer', $data);  
    }
    public function share(){
        $data['judul'] = 'Halaman index';
        $this->view('templates/metatag', $data); 
        $this->view('templates/header'); 
        $this->view('resep/share');  
        $this->view('templates/footer', $data);   
        
    }

}