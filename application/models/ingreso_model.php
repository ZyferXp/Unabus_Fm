<?php
class Ingreso_model extends CI_Model { 
   public function __construct() {
      parent::__construct();
   }
   
   /*****LOGIN USUARIOS************/
   public function usuario_por_rut_contrasena($rut, $contrasena){
      $this->db->select('id_usuario, rut, nombre, apellido, tipo_usuario');
      $this->db->from('tb_usuarios');
      $this->db->where('rut', $rut);
      $this->db->where('contrasena', $contrasena);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
   }
}