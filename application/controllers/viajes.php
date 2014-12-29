<?php

//Archivo Controllador Viajes
if (!defined('BASEPATH'))
   exit('No direct script access allowed');

    require_once APPPATH.'controllers/buses.php';
    class Buses_hijo extends Buses {
       public function __construct() {
          parent::__construct();
       }
    }

    require_once APPPATH.'controllers/recorridos.php';
    class Recorridos_hijo extends Recorridos {
       public function __construct() {
          parent::__construct();
       }
    }

    require_once APPPATH.'controllers/usuarios.php';
    class Usuarios_hijo extends Usuarios {
       public function __construct() {
          parent::__construct();
       }
    }


class Viajes extends CI_Controller {
   public function __construct() {
      parent::__construct();
    }
   
   public function index() {
      $data = array();
      $this->load->model('viaje_model');
      $data['viajes'] = $this->viaje_model->obtener_todos();
      $this->load->view('header_footer/header');
      $this->load->view('viajes/index', $data);
      $this->load->view('header_footer/footer');
   }
   public function ver($codigo_servicio){
      $data = array();
      $this->load->model('viaje_model');
      $bus = $this->bus_model->obtener_por_id($$codigo_servici);
      $data['buses'] = $bus;
      $this->load->view('header_footer/header');
      $this->load->view('viajes/ver', $data);
      $this->load->view('header_footer/footer');
   }
   public function guardar($codigo_servicio=null){
      $data = array(); 
      $this->load->model('viaje_model');
      if($codigo_servicio){
         $bus = $this->viaje_model->obtener_por_id($codigo_servicio); 
         $data['patente'] = $bus->patente;
         $data['capacidad'] = $bus->capacidad;
      }else{
         $data['patente'] = null;
         $data['capacidad'] = null;
      }
      $this->load->view('header_footer/header');
      $this->load->view('viajes/guardar', $data);
      $this->load->view('header_footer/footer');
   }
   public function guardar_post($codigo_servicio=null){
      if($this->input->post()){
         $patente = $this->input->post('patente');
         $capacidad = $this->input->post('capacidad');
         $this->load->model('bus_model');
         $this->bus_model->guardar($capacidad, $patente);
         redirect('buses');
      }else{
         $this->guardar();
      } 
   }
   public function eliminar($codigo_servicio){
      $this->load->model('viaje_model');
      $this->viaje_model->eliminar($codigo_servicio);
      redirect('viajes');
   }
}
