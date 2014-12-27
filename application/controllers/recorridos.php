<?php

//Archivo Controllador Buses
if (!defined('BASEPATH'))
   exit('No direct script access allowed');
class Recorridos extends CI_Controller {
   public function __construct() {
      parent::__construct();
   }
   public function index() {
      $data = array();
      $this->load->model('recorrido_model');
      $data['recorridos'] = $this->recorrido_model->obtener_todos();
      $this->load->view('header_footer/header');
      $this->load->view('recorridos/index', $data);
      $this->load->view('header_footer/footer');
   }
   public function ver($id_recorrido){
      $data = array();
      $this->load->model('recorrido_model');
      $recorrido = $this->recorrido_model->obtener_por_id($id_recorrido);
      $data['recorridos'] = $recorrido;
      $this->load->view('header_footer/header');
      $this->load->view('recorridos/ver', $data);
      $this->load->view('header_footer/footer');
   }
   public function guardar($id_recorrido=NULL){
      $data = array(); 
      $this->load->model('recorrido_model');
	   
	  $data['listado_comunas'] = $this->recorrido_model->obtener_comunas(); 
	   
      if($id_recorrido){
         $recorrido = $this->recorrido_model->obtener_por_id($id_recorrido); 
         $data['id_recorrido'] = $recorrido->id_recorrido;
         $data['id_origen'] = $recorrido->id_origen;
         $data['origen'] = $recorrido->origen;
         $data['id_destino'] = $recorrido->id_destino;
         $data['destino'] = $recorrido->destino;
         $data['duracion'] = $recorrido->duracion;		 		 		 		 
         $data['valor'] = $recorrido->valor;		
   	     $data['destinos_intermedios'] = $this->recorrido_model->obtener_intermedios($id_recorrido);  
		 
      }else{
         $data['id_recorrido'] = null;
         $data['id_origen'] = null;
         $data['id_destino'] = null;
         $data['duracion'] = null;		 		 		 		 
         $data['valor'] = null;
      }
      $this->load->view('header_footer/header');
      $this->load->view('recorridos/guardar', $data);
      $this->load->view('header_footer/footer');
   }
   public function guardar_post($id_recorrido=null){
      if($this->input->post()){
         $id_recorrido = $this->input->post('id_recorrido');		  
         $id_origen = $this->input->post('id_origen');
         $id_destino = $this->input->post('id_destino');
         $duracion = $this->input->post('duracion');
         $valor = $this->input->post('valor');	
  	     $this->load->model('recorrido_model'); 		 
		 /******Guarda Intermedios********/ 
		 $intermedios = $this->input->post('id_destino_intermedio');

 		 $this->recorrido_model->guardar($id_recorrido, $id_origen, $id_destino, $duracion, $valor);		   
		 
		 if($id_recorrido == NULL){
		 	$id_recorrido = $this->db->insert_id();
	  	 }	
		 
		 for ($i=0;$i<count($intermedios);$i++){       
			(
			$data[] = array('id_recorrido' => $id_recorrido, 'id_comuna' => $intermedios[$i])
			);
		 } 

	    $this->recorrido_model->guardar_intermedios($id_recorrido, $data);
        redirect('recorridos');
      }else{
         $this->guardar();
      } 
   }
   public function eliminar($id_recorrido){
      $this->load->model('recorrido_model');
      $this->recorrido_model->eliminar($id_recorrido);
      redirect('recorridos');
   }
}