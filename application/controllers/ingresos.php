<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

 class Ingresos extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
   
   /*****LOGIN*********/
   public function iniciar_sesion() {
   $data = array();
   $data['error'] = $this->session->flashdata('error');
   $this->load->view('header_footer/header');   
   $this->load->view('ingresos/iniciar_sesion', $data);
   $this->load->view('header_footer/footer');  
   }

    public function iniciar_sesion_post() {
        if ($this->input->post()) {
            $rut = $this->input->post('rut');
            $contrasena = $this->input->post('contrasena');
            $this->load->model('ingreso_model');
            $usuario = $this->ingreso_model->usuario_por_rut_contrasena($rut, $contrasena);
            if  ($usuario) {
                $usuario_data = array(
                    'id_usuario' => $usuario->id_usuario,
                    'nombre' => $usuario->nombre,
                    'apellido' => $usuario->apellido,
                    'tipo_usuario' => $usuario->tipo_usuario,
                    'descripcion' => $usuario->descripcion,
                    'logueado' => TRUE
                );
                $this->session->set_userdata($usuario_data);
                redirect('/ingresos/logueado');
            } else {
                $this->session->set_flashdata('error', 'El usuario o la contraseña son incorrectos.');
                redirect('ingresos/iniciar_sesion');
            }
        } else {
         $this->iniciar_sesion();
        }
    }
    
    public function logueado() {
         if($this->session->userdata('logueado')){
            $data = array(
                'id_usuario' => $this->session->userdata('id_usuario'),
                'nombre' => $this->session->userdata('nombre'),
                'apellido' => $this->session->userdata('apellido'),
                'tipo_usuario' => $this->session->userdata('tipo_usuario'),
                'descripcion' => $this->session->userdata('descripcion')
		 );
            $this->load->view('header_footer/header');   
            $this->load->view('ingresos/home', $data);
            $this->load->view('header_footer/footer');  
        }else{
            redirect('ingresos/iniciar_sesion');
        }
    }
    
    public function cerrar_sesion() {
        $usuario_data = array(
           'logueado' => FALSE
        );
        $this->session->set_userdata($usuario_data);
        redirect('ingresos/iniciar_sesion');
    }
}