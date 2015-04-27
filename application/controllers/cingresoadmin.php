<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cingresoadmin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('museradmin','',TRUE);
   $this->load->library("encrypt");
 }

 function index()
 {
   //El método tiene la validación de credenciales o usuarios
   $this->load->library('form_validation');

   $this->form_validation->set_rules('user', 'Usuario','trim|required|xss_clean');
   $this->form_validation->set_rules('pass', 'Password', 'trim|required|xss_clean|callback_busca_usuario');

   if($this->form_validation->run() == FALSE)
   {
     //Validación de campo fallado. Usuario redirigido a la página iniciar sesión        
        $this->load->view('Admin/index');
   }
   else
   {  

      $this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
   }
 }

 public function _example_output($output = null)
  {
    $this->load->view('Admin/catalogos_view.php',$output);
  }


 function busca_usuario($pass)
 {
   //Validación de campo tuvo éxito. Validar contra la base de datos
   $usuario = $this->input->post('user');        
   $cla = $pass;
   //consultar la base de datos
   $result = $this->museradmin->busca_user($usuario);

   if($result)
   {      
      foreach($result as $row)
      {    
               
        if ($cla == $row->atu_password) { 
          $this->session->set_userdata('usuarioadmin', $row->atu_user);                   
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

 function logout()
 {     
    $this->session->sess_destroy();
    redirect('ctocadmin');
 }
}
?>