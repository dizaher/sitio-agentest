<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ctocadmin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->model('museradmin','',TRUE);
		$this->load->library('grocery_CRUD');
	}

	function index()
	 {
	 	if($this->session->userdata('usuarioadmin'))//si hay sesion iniciada 
	   {
		   $this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
		}
		else//si no hay sesion iniciada
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
	 }

	 public function _example_output($output = null)
	  {
	    $this->load->view('Admin/catalogos_view.php',$output);
	  }

/*
	public function _example_output($output = null)
	{
		$this->load->view('Admin/index.php',$output);
	}
	*/

	public function offices()
	{
		$output = $this->grocery_crud->render();

		$this->_example_output($output);
	}

	

	//////////////////////////////////////////////////////////////
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
	 ////////////////////////////////////////////////////////////////
	 function logout()
	 {     
	    $this->session->sess_destroy();
	    redirect('ctocadmin');
	 }
	 ///////////////////////////////////////
	public function admin_usuarios()
	{
			$crud = new grocery_CRUD();
			
			$crud->set_table('at_usersadmin');
			$crud->columns('atu_nombreadmin','atu_apeadmin','atu_correo','atu_user','atu_password');			
			
			$crud->display_as('atu_nombreadmin','Nombre');
			$crud->display_as('atu_apeadmin','Apellidos');
			$crud->display_as('atu_correo','Correo electrónico');
			$crud->display_as('atu_user','Nombre de Usuario');
			$crud->display_as('atu_password','Clave de usuario');
			$crud->change_field_type('atu_password', 'password');

			$crud->callback_before_insert(array($this,'encrypt_password_callback'));

			$crud->set_subject('Usuarios');

			$crud->required_fields('atu_nombreadmin','atu_apeadmin','atu_correo','atu_user','atu_password');
			
			$crud->unset_export();
			$crud->unset_print();
			$output = $crud->render();

			$this->_example_output($output);
	}

	function encrypt_password_callback($post_array) {
	  $this->load->library('encrypt');
	  $key = 'super-secret-key';
	  $post_array['password'] = $this->encrypt->encode($post_array['password'], $key);
	 
	  return $post_array;
	}   

	/////////////////////////////////////////////
	public function admin_noticias()
	{
			$crud = new grocery_CRUD();
			
			$crud->set_table('at_noticias');			
			$crud->display_as('atu_nombre','Titulo de la Noticia');
			$crud->display_as('atu_descripcion','Redacción de la Noticia');
			$crud->display_as('atu_imagen','Imagen de la Noticia');
			$crud->display_as('atu_fecha','Fecha publicación');
			$crud->display_as('atu_tipo','Tipo de Noticia');

			$crud->field_type('atu_tipo','dropdown',
            array('Primaria' =>'Primaria', 'Secundaria' =>'Secundaria'));
            
			/*Asignamos el directorio de la subida de imagenes */
            $crud->set_field_upload('atu_imagen','img/Noticias');

            $crud->required_fields(
              'atu_idnotice',
              'atu_nombre',
              'atu_descripcion',
              'atu_imagen'      ,
              'atu_fecha',
              'atu_tipo'
            );
            $crud->columns(
              'atu_nombre',
              'atu_descripcion',
              'atu_imagen'      ,
              'atu_fecha',
              'atu_tipo'
            );

			$crud->set_subject('Noticias');

			$crud->unset_texteditor('atu_descripcion','full_text');
			$crud->unset_texteditor('atu_nombre','full_text');

			$crud->unset_export();
			$crud->unset_print();
			$output = $crud->render();

			$this->_example_output($output);
	}

	/*
	public function offices_management()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('offices');
			$crud->set_subject('Office');
			$crud->required_fields('city');
			$crud->columns('city','country','phone','addressLine1','postalCode');

			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	
	public function orders_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_relation('customerNumber','customers','{contactLastName} {contactFirstName}');
			$crud->display_as('customerNumber','Customer');
			$crud->set_table('orders');
			$crud->set_subject('Order');
			$crud->unset_add();
			$crud->unset_delete();

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function products_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('products');
			$crud->set_subject('Product');
			$crud->unset_columns('productDescription');
			$crud->callback_column('buyPrice',array($this,'valueToEuro'));

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function valueToEuro($value, $row)
	{
		return $value.' &euro;';
	}

	public function film_management()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('film');
		$crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname','priority');
		$crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
		$crud->unset_columns('special_features','description','actors');

		$crud->fields('title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');

		$output = $crud->render();

		$this->_example_output($output);
	}

	public function film_management_twitter_bootstrap()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('twitter-bootstrap');
			$crud->set_table('film');
			$crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname','priority');
			$crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
			$crud->unset_columns('special_features','description','actors');

			$crud->fields('title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');

			$output = $crud->render();
			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	function multigrids()
	{
		$this->config->load('grocery_crud');
		$this->config->set_item('grocery_crud_dialog_forms',true);
		$this->config->set_item('grocery_crud_default_per_page',10);

		$output1 = $this->offices_management2();

		$output2 = $this->employees_management2();

		$output3 = $this->customers_management2();

		$js_files = $output1->js_files + $output2->js_files + $output3->js_files;
		$css_files = $output1->css_files + $output2->css_files + $output3->css_files;
		$output = "<h1>List 1</h1>".$output1->output."<h1>List 2</h1>".$output2->output."<h1>List 3</h1>".$output3->output;

		$this->_example_output((object)array(
				'js_files' => $js_files,
				'css_files' => $css_files,
				'output'	=> $output
		));
	}

	public function offices_management2()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('offices');
		$crud->set_subject('Office');

		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

		$output = $crud->render();

		if($crud->getState() != 'list') {
			$this->_example_output($output);
		} else {
			return $output;
		}
	}

	public function employees_management2()
	{
		$crud = new grocery_CRUD();

		$crud->set_theme('datatables');
		$crud->set_table('employees');
		$crud->set_relation('officeCode','offices','city');
		$crud->display_as('officeCode','Office City');
		$crud->set_subject('Employee');

		$crud->required_fields('lastName');

		$crud->set_field_upload('file_url','assets/uploads/files');

		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

		$output = $crud->render();

		if($crud->getState() != 'list') {
			$this->_example_output($output);
		} else {
			return $output;
		}
	}

	public function customers_management2()
	{

		$crud = new grocery_CRUD();

		$crud->set_table('customers');
		$crud->columns('customerName','contactLastName','phone','city','country','salesRepEmployeeNumber','creditLimit');
		$crud->display_as('salesRepEmployeeNumber','from Employeer')
			 ->display_as('customerName','Name')
			 ->display_as('contactLastName','Last Name');
		$crud->set_subject('Customer');
		$crud->set_relation('salesRepEmployeeNumber','employees','lastName');

		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

		$output = $crud->render();

		if($crud->getState() != 'list') {
			$this->_example_output($output);
		} else {
			return $output;
		}
	}*/

}