<?php

//Archivo Controllador Buses
if (!defined('BASEPATH'))
   exit('No direct script access allowed');
class Buses extends CI_Controller {
   public function __construct() {
      parent::__construct();
   }
   public function index() {
      $data = array();
      $this->load->model('bus_model');
      $data['buses'] = $this->bus_model->obtener_todos();
      $this->load->view('header_footer/header');
      $this->load->view('buses/index', $data);
      $this->load->view('header_footer/footer');
   }
   public function ver($patente){
      $data = array();
      $this->load->model('bus_model');
      $bus = $this->bus_model->obtener_por_id($patente);
      $data['buses'] = $bus;
      $this->load->view('header_footer/header');
      $this->load->view('buses/ver', $data);
      $this->load->view('header_footer/footer');
   }
   public function guardar($patente=null){
      $data = array(); 
      $this->load->model('bus_model');
      if($patente){
         $bus = $this->bus_model->obtener_por_id($patente); 
         $data['patente'] = strtoupper($bus->patente);
         $data['capacidad'] = $bus->capacidad;
      }else{
         $data['patente'] = null;
         $data['capacidad'] = null;
      }
      $this->load->view('header_footer/header');
      $this->load->view('buses/guardar', $data);
      $this->load->view('header_footer/footer');
   }
   public function guardar_post($patente=null){
      if($this->input->post()){
         $patente = strtoupper($this->input->post('patente'));
         $capacidad = $this->input->post('capacidad');
         $this->load->model('bus_model');
         $this->bus_model->guardar($capacidad, $patente);
         redirect('buses');
      }else{
         $this->guardar();
      } 
   }
   public function eliminar($patente){
      $this->load->model('bus_model');
      $this->bus_model->eliminar($patente);
      redirect('buses');
   }
}