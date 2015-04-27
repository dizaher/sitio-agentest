<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Muser extends CI_Model
{
	public function construct()
	{
		parent::__construct();
	}
	
	//realizamos la inserción de los datos y devolvemos el 
	//resultado al controlador para envíar el correo si todo ha ido bien
	function new_user($nombre,$apellido,$correo_e,$p,$tel,$tipo,$des)
	{
       $data = array(
            'atu_nombre' => $nombre,
            'atu_apellidos' => $apellido,
            'atu_correo' => $correo_e,
            'atu_clave' => md5($p),
            'atu_telefono' => $tel,
            'atu_tipo' => $tipo,
            'atu_descripcion' => $des
        );
       	return $this->db->insert('at_users', $data);	
    }

    function consulta_user($correo)
	 {
	   	$query = $this->db->get_where('at_users',array('atu_correo' => $correo));
        if($query->num_rows() > 0 )
        {
            return false;
        }
        else{
        	return true;
        }
	 }

     function busca_user($usuario)
     {
       $this -> db -> select('atu_nombre, atu_clave');
       $this -> db -> from('at_users');
       $this -> db -> where('atu_correo', $usuario);          

       $query = $this -> db -> get();

       if($query -> num_rows() == 1)
       {    
         return $query->result();
       }
       else
       {
         return false;
       }
     }
}