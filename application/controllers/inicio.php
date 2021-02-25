<?php

    class Inicio extends CI_Controller{
        public function index(){
            //creamos array para mandar datos
            $configuraciones = array('titulo' => "Inicio del Sistema");
            $this->load->view('plantilla/cabeza');
            $this->load->view('plantilla/cuerpo', $configuraciones);
            $this->load->view('inicio');
            $this->load->view('plantilla/pie'); 
        }
    }