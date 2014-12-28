<?php
class Usuario_model extends CI_Model { 
   public function __construct() {
        parent::__construct();
   }
   
   /*****CRUD USUARIOS*********/
    public function guardar($rut, $nombre, $apellido, $contrasena, $tipo_usuario){
        $data = array(
            'rut' => $rut,
            'nombre' => $nombre,
            'apellido' => $apellido,
            'contrasena' => $contrasena,		
            'tipo_usuario' => $tipo_usuario			    

        );
        $this->db->select('id_usuario');
        $this->db->from('tb_usuarios');
        $this->db->where('rut', $rut);
        $consulta = $this->db->get();
            foreach($consulta->result_array() as $row){
                $id_usuario = $row['id_usuario'];
            }
	  
            if($id_usuario){
                $this->db->where('id_usuario', $id_usuario);
                $this->db->update('tb_usuarios', $data);
            }else{
                $this->db->insert('tb_usuarios', $data);
            } 
   }
   
    public function eliminar($id_usuario){
        $this->db->where('id_usuario', $id_usuario);
        $this->db->delete('tb_usuarios');
    }
   
    public function obtener_por_id($id_usuario){
        $this->db->select('id_usuario, rut, nombre, apellido, contrasena, tipo_usuario');
        $this->db->from('tb_usuarios');
        $this->db->where('id_usuario', $id_usuario);
        $consulta = $this->db->get();
        $resultado = $consulta->row();
        return $resultado;
    }
   
    public function obtener_todos(){
        $this->db->select('id_usuario, rut, nombre, apellido, tipo_usuario, descripcion');
        $this->db->from('tb_usuarios');
        $this->db->join('tb_tipo_usuarios', 'tb_usuarios.tipo_usuario = tb_tipo_usuarios.id_tipo_usuario');
        $this->db->order_by('apellido, nombre', 'asc');
        $consulta = $this->db->get();
        $resultado = $consulta->result();
        return $resultado;
    }
   
     /***Query para llenar select con tipos de usuario***/
    public function obtener_tipos_usuarios(){
        $this->db->select('id_tipo_usuario, descripcion');
        $this->db->from('tb_tipo_usuarios');
        $this->db->order_by('id_tipo_usuario', 'asc');
        $consulta = $this->db->get();
            foreach($consulta->result_array() as $row){
                 $resultado[$row['id_tipo_usuario']]=$row['descripcion'];
            }
        return $resultado;
  }  
}