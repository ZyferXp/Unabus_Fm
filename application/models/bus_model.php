<?php
class Bus_model extends CI_Model { 
   public function __construct() {
      parent::__construct();
   }
   public function guardar($capacidad, $patente){
      $data = array(
          'capacidad' => $capacidad,
		  'patente' => $patente

      );
      $this->db->select('patente');
      $this->db->from('tb_buses');
      $this->db->where('patente', $patente);
      $cons = $this->db->get();
      $si_existe = $cons->row();
	  
	  if($si_existe){
         $this->db->where('patente', $patente);
         $this->db->update('tb_buses', $data);
      }else{
         $this->db->insert('tb_buses', $data);
      } 
   }
   public function eliminar($patente){
      $this->db->where('patente', $patente);
      $this->db->delete('tb_buses');
   }
   public function obtener_por_id($patente){
      $this->db->select('patente, capacidad');
      $this->db->from('tb_buses');
      $this->db->where('patente', $patente);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
   }
   public function obtener_todos(){
      $this->db->select('patente, capacidad');
      $this->db->from('tb_buses');
      $this->db->order_by('patente', 'asc');
      $consulta = $this->db->get();
      $resultado = $consulta->result();
      return $resultado;
   }
}