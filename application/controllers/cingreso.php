<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cingreso extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('muser','',TRUE);
   $this->load->library("encrypt");
   $this->load->model('mnoti');
 }

 function index()
 {
    $data['noti_principales'] = $this->mnoti->get_noticias_prin();
    $data['noti_secundarias'] = $this->mnoti->get_noticias_secu();
   //El método tiene la validación de credenciales o usuarios
   $this->load->library('form_validation');

   $this->form_validation->set_rules('correo', 'E-mail','trim|required|xss_clean');
   $this->form_validation->set_rules('clave', 'Password', 'trim|required|xss_clean|callback_busca_usuario');

   if($this->form_validation->run() == FALSE)
   {
     //Validación de campo fallado. Usuario redirigido a la página iniciar sesión
        $data['contenido']='noticias_view';
        $this->load->view('index',$data);
   }
   else
   {                     
      $data['contenido']='noticias_view';
      $this->load->view('session_view',$data);
   }

 }

 function busca_usuario($clave)
 {
   //Validación de campo tuvo éxito. Validar contra la base de datos
   $usuario = $this->input->post('correo');        
   $cla = md5($clave);
   //consultar la base de datos
   $result = $this->muser->busca_user($usuario);

   if($result)
   {      
      foreach($result as $row)
      {    
               
        if ($cla == $row->atu_clave) { 
          $this->session->set_userdata('usuario', $row->atu_nombre);         
          return TRUE;  
        }
        else{
          $this->form_validation->set_message('busca_usuario', 'Tu usuario o contraseña es incorrecta');                  
          return false;

        }
      }                
    }
    else{
      $this->form_validation->set_message('busca_usuario', 'El usuario no se encuentra en la base de datos');
          return false;
    }   
 }
}
?>