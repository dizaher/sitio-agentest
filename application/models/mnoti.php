<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mnoti extends CI_Model
{
	public function construct()
	{
		parent::__construct();
	}
	
	//realizamos la inserción de los datos y devolvemos el 
	//resultado al controlador para envíar el correo si todo ha ido bien
	public function get_datos_noticias($limit,$start)
  {         
    $this->db->limit($limit, $start);
    $query = $this->db->where("atu_tipo","Secundaria" );
    $query = $this->db->get("at_noticias");

    if ($query->num_rows() > 0) {
        foreach ($query->result() as $row) {
            $data[] = $row;
        }
        return $data;
    }
    return 0;
  }
  
  function getNumDatos_noti()
  {
      return $this->db->count_all("at_noticias");
  }  

  public function get_noticias_prin()
  {         
    $query = $this->db->select("atu_nombre, atu_descripcion, atu_imagen");
    $query = $this->db->where("atu_tipo","Primaria" );  
    $query = $this->db->limit(2);
    $query = $this->db->order_by("atu_fecha", "asc");   
    $query = $this->db->get("at_noticias");  
    if($query -> num_rows() > 0){    
      return $query->result();
    }
    else{
      return 0;
    }
  }

  public function get_noticias_secu()
  {         
    $query = $this->db->select("atu_nombre, atu_descripcion");
    $query = $this->db->where("atu_tipo","Secundaria" );     
    $query = $this->db->limit(3);
    $query = $this->db->order_by("atu_fecha", "asc"); 
    $query = $this->db->get("at_noticias");  
    if($query -> num_rows() > 0){    
      return $query->result();
    }
    else{
      return 0;
    }
  }
}