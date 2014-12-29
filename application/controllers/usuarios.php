<?php
if (!defined('BASEPATH'))
   exit('No direct script access allowed');
 class Usuarios extends CI_Controller {
   public function __construct() {
      parent::__construct();
   }
   /******CRUD USUARIOS*************/
   
    public function index() {
        $data = array();
        $this->load->model('usuario_model');
        $data['usuarios'] = $this->usuario_model->obtener_todos();
        $this->load->view('header_footer/header');
        $this->load->view('usuarios/index', $data);
        $this->load->view('header_footer/footer');
    }
   
    public function ver($id_usuario){
        $data = array();
        $this->load->model('usuario_model');
        $usuario = $this->usuario_model->obtener_por_id($id_usuario);
        $data['usuarios'] = $usuario;
        $this->load->view('header_footer/header');
        $this->load->view('usuarios/ver', $data);
        $this->load->view('header_footer/footer');
    }
   
   public function guardar($id_usuario=null){
      $data = array(); 

        $this->load->model('usuario_model');
	  
	 /***Parametros para cargar select con tipos de usuario ***/	
        $data['tipos_usuarios'] = $this->usuario_model->obtener_tipos_usuarios(); 
	 
        if($id_usuario){
           $usuario = $this->usuario_model->obtener_por_id($id_usuario); 
            $data['id_usuario'] = $id_usuario;
            $data['rut'] = $usuario->rut;
            $data['nombre'] = $usuario->nombre;
            $data['apellido'] = $usuario->apellido;
            $data['contrasena'] = $usuario->contrasena;	
            $data['tipo_usuario'] = $usuario->tipo_usuario;


        }else{
            $data['id_usuario'] = null;
            $data['rut'] = null;
            $data['nombre'] = null;
            $data['apellido'] = null;
            $data['contrasena'] = null;
            $data['tipo_usuario'] = null;
        }
        $this->load->view('header_footer/header');
        $this->load->view('usuarios/guardar', $data);  
        $this->load->view('header_footer/footer');
   }
   
    public function guardar_post($id_usuario=null){
        if($this->input->post()){
            $rut = $this->input->post('rut');
            $nombre = $this->input->post('nombre');
            $apellido = $this->input->post('apellido');
            $contrasena = $this->input->post('contrasena');		 
            $tipo_usuario = $this->input->post('tipo_usuario');	 
            $this->load->model('usuario_model');
            $this->usuario_model->guardar($rut, $nombre, $apellido, $contrasena, $tipo_usuario);
            redirect('usuarios');
        }else{
            $this->guardar();
        } 
    }
   
    public function eliminar($id_usuario){
        $this->load->model('usuario_model');
        $this->usuario_model->eliminar($id_usuario);
        redirect('usuarios');
    }
   
}