<?php
if (!defined('BASEPATH'))
   exit('No direct script access allowed');
class Informes extends CI_Controller {
   public function __construct() {
      parent::__construct();
   }
   public function index() {
      $data = array();
      $this->load->model('informe_model');
      $data['informes'] = $this->informe_model->obtener_todos();
      $this->load->view('informes/header');
      $this->load->view('informes/index', $data);
      $this->load->view('informes/footer');
   }
   public function ver($patente){
      $data = array();
      $this->load->model('informe_model');
      $informe = $this->informe_model->obtener_por_id($patente);
      $data['informe'] = $informe;
      $this->load->view('informes/header');
      $this->load->view('informes/ver', $data);
      $this->load->view('informes/footer');
   }
   public function guardar($patente=null){
      $data = array(); 
      $this->load->model('informe_model');
      if($patente){
         $informe = $this->informe_model->obtener_por_id($patente); 
         $data['patente'] = $informe->patente;
         $data['capacidad'] = $informe->capacidad;
      }else{
         $data['patente'] = null;
         $data['capacidad'] = null;
      }
      $this->load->view('informes/header');
      $this->load->view('informes/guardar', $data);
      $this->load->view('informes/footer');
   }
   public function guardar_post($patente=null){
      if($this->input->post()){
         $patente = $this->input->post('patente');
         $capacidad = $this->input->post('capacidad');
         $this->load->model('informe_model');
         $this->informe_model->guardar($capacidad, $patente);
         redirect('informes');
      }else{
         $this->guardar();
      } 
   }
   public function eliminar($patente){
      $this->load->model('informe_model');
      $this->informe_model->eliminar($patente);
      redirect('informes');
   }
}