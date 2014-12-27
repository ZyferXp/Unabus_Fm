<?php
class Recorrido_model extends CI_Model { 
   public function __construct() {
      parent::__construct();
   }
   public function guardar($id_recorrido, $id_origen, $id_destino, $duracion, $valor){
      $data = array(
          'id_origen' => $id_origen,
		  'id_destino' => $id_destino,
          'duracion' => $duracion,
		  'valor' => $valor
      );
      $this->db->select('id_recorrido');
      $this->db->from('tb_recorridos');
      $this->db->where('id_recorrido', $id_recorrido);
	  $consulta = $this->db->get();
 		foreach($consulta->result_array() as $row){
            $existe = $row['id_recorrido'];
      }
	  
	  if($existe != NULL){
         $this->db->where('id_recorrido', $id_recorrido);
         $this->db->update('tb_recorridos', $data);
      }else{
         $this->db->insert('tb_recorridos', $data);
      } 
   }
   /*****Guardar Destinos Intermedios********/
    public function guardar_intermedios($id_recorrido, $id_intermedios){
		
		//var_dump($id_intermedios);
		/*Borra las comunas***/
		$this->db->where('id_recorrido', $id_recorrido);
      	$this->db->delete('tb_intermedios');
		 
		/**Inserta todas las comunas***/
		foreach ($id_intermedios as $key => $row)
		{
		  $data_n[$key] = array(
			'id_recorrido' => $row['id_recorrido'],
			'id_comuna' => $row['id_comuna']
		  );
		   $this->db->insert('tb_intermedios', $data_n[$key]);
		}		
    } 
   
   
   
   public function eliminar($id_recorrido){
      $this->db->where('id_recorrido', $id_recorrido);
      $this->db->delete('tb_recorridos');
   }
   public function obtener_por_id($id_recorrido){
      $this->db->select('id_recorrido, id_origen, B.nombre_comuna as origen, id_destino, C.nombre_comuna as destino, duracion, valor');
      $this->db->from('tb_recorridos A');
 	  $this->db->join('tb_territorios B', 'A.id_origen = B.id_comuna');	 
 	  $this->db->join('tb_territorios C', 'A.id_destino = C.id_comuna');
      $this->db->where('id_recorrido', $id_recorrido);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
   }
   public function obtener_todos(){
      $this->db->select('id_recorrido, id_origen, B.nombre_comuna as origen, id_destino, C.nombre_comuna as destino, duracion, valor');
      $this->db->from('tb_recorridos A');
 	  $this->db->join('tb_territorios B', 'A.id_origen = B.id_comuna');	 
 	  $this->db->join('tb_territorios C', 'A.id_destino = C.id_comuna');		   
      $this->db->order_by('id_origen', 'asc');
      $consulta = $this->db->get();
      $resultado = $consulta->result();
      return $resultado;
   }
   /***Query para llenar select con las comunas***/
   public function obtener_comunas(){
      $this->db->select('id_comuna, nombre_comuna');
      $this->db->from('tb_territorios');
      $consulta = $this->db->get();
 		foreach($consulta->result_array() as $row){
            $resultado[$row['id_comuna']]=$row['nombre_comuna'];
        }
      return $resultado;
   } 
    public function obtener_intermedios($id_recorrido){	
      $this->db->select('id_comuna');
      $this->db->from('tb_intermedios'); 
      $this->db->where('id_recorrido', $id_recorrido);
      $consulta = $this->db->get();
	  $resultado = array();
	   foreach($consulta->result_array() as $row){
       	 $resultado[] = $row['id_comuna'];
       }
      return $resultado;
   }
     
}