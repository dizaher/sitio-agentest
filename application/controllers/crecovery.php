<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crecovery extends CI_Controller {

 function __construct()
 {
   parent::__construct();   
   $this->load->model('muser','',TRUE);
   $this->load->library("encrypt");
 }


function index()
 {
   //El método tiene la validación de credenciales o usuarios
   $this->load->library('form_validation');

   $this->form_validation->set_rules('correo', 'E-mail','trim|required|xss_clean|callback_busca_usuario');

   if($this->form_validation->run() == FALSE)
   {
     //Validación de campo fallado. Usuario redirigido a la página iniciar sesión
        $data['contenido']='password_view';
        $this->load->view('index',$data);
   }
   else
   {                     
       redirect('ctoc');
   }

 }

 function busca_usuario()
 {
   //Validación de campo tuvo éxito. Validar contra la base de datos
   $usuario = $this->input->post('correo');           
   //consultar la base de datos
   $result = $this->muser->busca_usuario($usuario);

   if($result)
   {      
      foreach($result as $row)
      {    
         $correo_e = $row->atu_correo;
         $pass = $row->atu_clave;                                  
      }   
           
      /*EMPIEZO A CONFIGURAR EL CORREO */
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'mail.tocveracruz.com.mx',
            'smtp_port' => 25,
            'smtp_user' => 'dzacarias@tocveracruz.com.mx', // change it to yours
            'smtp_pass' => 'wWeQ]T5B}(bo', // change it to yours
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'wordwrap' => TRUE
        );
          
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('dzacarias@tocveracruz.com.mx', 'Diana Zacarías'); // change it to yours
        $this->email->to($usuario);// change it to yours
        $this->email->subject('Recuperación de contraseña');
        $this->email->message('<h3>Tu cuenta de acceso y la contraseña que nos proporcionaste son las siguientes.</h3>
                              <hr>                                  
                              <p>Por favor, conserva este correo para posterior consulta:</p>
                              <p><strong>Usuario: ' . $correo_e. '</strong></p>
                              <p><strong>Contraseña: ' . $pass . ' </strong></p>
                              '); 
        $this->email->send();             
      return TRUE;
    }
    else{
      $this->form_validation->set_message('busca_usuario', 'El usuario no se encuentra registrado');
          return false;
    }   
 }

}
?>