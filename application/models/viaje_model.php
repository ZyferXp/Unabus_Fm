<?php
class Viaje_model extends CI_Model { 
    public function __construct() {
        parent::__construct();
    }
    public function guardar($capacidad, $patente){
        $data = array(
            'capacidad' => $capacidad,
            'patesnte' => $patente

        );
        $this->db->select('codigo_viaje');
        $this->db->from('tb_viajes');
        $this->db->where('codigo_viaje', $codigo_viaje);
        $cons = $this->db->get();
        $si_existe = $cons->row();

        if($si_existe){
            $this->db->where('codigo_viaje', $codigo_viaje);
            $this->db->update('tb_viajes', $data);
        }else{
            $this->db->insert('tb_viajes', $data);
        } 
    }
    
    public function eliminar($codigo_servicio){
        $this->db->where('codigo_servicio', $codigo_servicio);
        $this->db->from('tb_viajes');
    }
    
    public function obtener_por_id($codigo_servicio){
        $this->db->select('*');
        $this->db->from('tb_viajes');
        $this->db->where('patente', $patente);
        $consulta = $this->db->get();
        $resultado = $consulta->row();
        return $resultado;
    }
   
    public function obtener_todos(){
        $this->db->select('*');
        $this->db->from('tb_viajes');
        $this->db->order_by('patente', 'asc');
        $consulta = $this->db->get();
        $resultado = $consulta->result();
        return $resultado;
    }
}