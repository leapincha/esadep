<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->output->enable_profiler($this->config->item("profile"));

        $this->authentication->check();

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($data = null)
	{
		$this->load->view('admin/inicio.php',$data);
	}

	public function offices()
	{
		$output = $this->grocery_crud->render();

		$this->_example_output($output);
	}

	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}



	public function comision(){
		$crud = new grocery_CRUD();

			$crud->set_table('comision_directiva');
			$crud->columns('nombre_apellido','descripcion','file_url');
			$crud->display_as('nombre_apellido','Nombre y Apellido')
				 ->display_as('descripcion','Descripcion')
				 ->display_as('file_url','Foto');
			$crud->set_subject('Comision Directiva');
			
			$crud->set_field_upload('file_url','assets/web/images/comision_directiva');

			$output = $crud->render();

			$data = array(
                    'title' => "esadep",
                    'subtitle' => "comision",                                    
                    'output'      =>  $output,
                );      

			$this->_example_output($data);
	}

	public function historia(){
		$crud = new grocery_CRUD();

			$crud->set_table('historia');
			$crud->columns('id','historia');
			$crud->display_as('id','ID')
				 ->display_as('historia','Descripcion Historia');
				 
			$crud->set_subject('Historia');
			$crud->unset_add();
			$crud->unset_delete();

			$output = $crud->render();

			$data = array(
                    'title' => "esadep",
                    'subtitle' => "historia",                                    
                    'output'      =>  $output,
                );      

			$this->_example_output($data);
	}

	public function quienes(){

			$crud = new grocery_CRUD();

			$crud->set_table('quienes');
			$crud->columns('id','quienes');
			$crud->display_as('id','ID')
				 ->display_as('quienes','Descripcion Quienes somos');
			$crud->unset_add();
			$crud->set_subject('Quienes somos');
			$crud->unset_delete();
			$crud->unset_add();

			$output = $crud->render();

			 $data = array(
                    'title' => "esadep",
                    'subtitle' => "quienes",                                    
                    'output'      =>  $output,
                );      

			$this->_example_output($data);
	}

	public function categoria(){

			$crud = new grocery_CRUD();

			$crud->set_table('categoria');
			$crud->columns('id_categoria','categoria');
			$crud->display_as('id_categoria','ID Categoria')
				 ->display_as('categoria','Categoria');
				 
			$crud->set_subject('Categoria Noticias');
			

			$output = $crud->render();

			$data = array(
                    'title' => "noticias",
                    'subtitle' => "cat_noticias",                                    
                    'output'      =>  $output,
                );      

			$this->_example_output($data);
	}

	public function noticias(){

			$crud = new grocery_CRUD();

			$crud->set_table('noticias');
			$crud->columns('id_noticia','fecha','titulo','copete','foto','documento');
			$crud->set_relation_n_n('Categorias', 'categoria_noticia', 'categoria', 'id_noticia', 'id_categoria', 'categoria');
			$crud->display_as('id_noticia','Numero Noticia')
				 ->display_as('fecha','Fecha')
				 ->display_as('titulo','Titulo')
				 ->display_as('copete','Copete')
				 ->display_as('foto','Foto')
				 ->display_as('documento','Documento');
			
			$crud->set_field_upload('foto','assets/web/images/noticias');
			$crud->set_field_upload('documento','assets/web/files/noticias');
			$crud->set_subject('Noticias');

			$crud->order_by('id_noticia','desc');
			

			$output = $crud->render();

			$data = array(
                    'title' => "noticias",
                    'subtitle' => "noticias",                                    
                    'output'      =>  $output,
                );      

			$this->_example_output($data);
	}

	public function eventos(){
		
			$crud = new grocery_CRUD();

			$crud->set_table('eventos');
			$crud->columns('fecha','nombre','lugar','descripcion','foto','link_fb');
			$crud->display_as('fecha','Fecha')
				 ->display_as('Nombre','Nombre')
				 ->display_as('lugar','Lugar')
				 ->display_as('foto','Foto')
				 ->display_as('link_fb','Link del Evento en Facebook');
			

			$crud->set_field_upload('foto','assets/web/images/eventos');
			$crud->set_subject('Eventos');
			

			$output = $crud->render();

			$data = array(
                    'title' => "eventos",
                    'subtitle' => "",                                    
                    'output'      =>  $output,
                );     

			$this->_example_output($data);
	}


	public function abiertas(){
		$crud = new grocery_CRUD();

		$crud->set_table('abiertas');
		$crud->set_relation('tipo_prueba','tipo_prueba','tipo_prueba');
		$crud->columns('nombre_prueba','introduccion','descripcion','tipo_prueba','foto','link_galeriafb','youtube');
		$crud->display_as('nombre_prueba','Nombre Prueba')
			 ->display_as('descripcion','Descripcion Prueba')
			 ->display_as('tipo_prueba','Tipo de Prueba')
			 ->display_as('foto','Foto')
			 ->display_as('link_galeriafb','Link Galeria FAcebook')
			 ->display_as('youtube','Video de Youtube');

		$crud->set_field_upload('foto','assets/web/images/pruebas/abiertas');
		$crud->set_subject('Pruebas Abiertas');

		$output = $crud->render();


		$data = array(
                    'title' => "pruebas",
                    'subtitle' => "abiertas",                                    
                    'output'      =>  $output,
                );

        $this->_example_output($data);     
	}

	public function cerradas(){
		$crud = new grocery_CRUD();

		$crud->set_table('cerradas');
		$crud->set_relation('tipo_prueba','tipo_prueba','tipo_prueba');
		$crud->columns('nombre_prueba','introduccion','descripcion','tipo_prueba','foto','link_galeriafb','youtube');
		$crud->display_as('nombre_prueba','Nombre Prueba')
			 ->display_as('introduccion','Introduccion')
			 ->display_as('descripcion','Descripcion Prueba')
			 ->display_as('tipo_prueba','Tipo de Prueba')
			 ->display_as('foto','Foto')
			 ->display_as('link_galeriafb','Link Galeria FAcebook')
			 ->display_as('youtube','Video de Youtube');

		$crud->set_field_upload('foto','assets/web/images/pruebas/cerradas');
		$crud->set_subject('Pruebas Cerradas');

		$output = $crud->render();


		$data = array(
                    'title' => "pruebas",
                    'subtitle' => "cerradas",                                    
                    'output'      =>  $output,
                );

        $this->_example_output($data);     
	}

	public function sponsors(){
		$crud = new grocery_CRUD();

		$crud->set_table('sponsors');
		$crud->columns('nombre_sponsor','link_web','foto');
		$crud->display_as('nombre_sponsor','Nombre Sponsor')
			 ->display_as('link_web','Link de la web')
			 ->display_as('foto','Foto');

		$crud->set_field_upload('foto','assets/web/images/sponsors');
		$crud->set_subject('Sponsors');

		$output = $crud->render();


		$data = array(
                    'title' => "sponsors",
                    'subtitle' => "",                                    
                    'output'      =>  $output,
                );

        $this->_example_output($data);     
	}

		public function definicion_salvamento(){
		$crud = new grocery_CRUD();

		$crud->set_table('definicion_salvamento');
		$crud->columns('descripcion');
		$crud->display_as('descripcion','Descripcion');

		
		$crud->set_subject('Definición Salvamento');
		$crud->unset_add();
		$crud->unset_delete();

		$output = $crud->render();


		$data = array(
                    'title' => "salvamento",
                    'subtitle' => "definicion_salvamento",                                    
                    'output'      =>  $output,
                );

        $this->_example_output($data);     
	}

	public function salvamento_historia(){
		$crud = new grocery_CRUD();

		$crud->set_table('historia_salvamento');
		$crud->columns('descripcion');
		$crud->display_as('descripcion','Descripcion');

		
		$crud->set_subject('Historia Salvamento');
		$crud->unset_add();
		$crud->unset_delete();

		$output = $crud->render();


		$data = array(
                    'title' => "salvamento",
                    'subtitle' => "historia_salvamento",                                    
                    'output'      =>  $output,
                );

        $this->_example_output($data);     
	}

	public function reglamento(){
		$crud = new grocery_CRUD();

		$crud->set_table('reglamento');
		$crud->columns( 'reglamento','descripcion');
		$crud->display_as('reglamento','Reglamento')
			 ->display_as('descripcion','Descripcion');

		$crud->set_field_upload('reglamento','assets/web/files/reglamento');
		$crud->set_subject('Reglamento Salvamento');
		$crud->unset_add();
		$crud->unset_delete();

		$output = $crud->render();


		$data = array(
                    'title' => "salvamento",
                    'subtitle' => "reglamento",                                    
                    'output'      =>  $output,
                );

        $this->_example_output($data);     
	}

	public function servicios(){

		$crud = new grocery_CRUD();

		$crud->set_table('servicios');
		$crud->columns( 'nombre_servicio','descripcion','foto');
		$crud->display_as('nombre_servicio','Nombre Servicio')
			 ->display_as('descripcion','Descripcion')
			 ->display_as('foto','Foto');

		$crud->set_field_upload('foto','assets/web/images/servicios');
		$crud->set_subject('Servicios ESADEP');
		$crud->unset_add();
		$crud->unset_delete();


		$output = $crud->render();


		$data = array(
                    'title' => "servicios",
                    'subtitle' => "",                                    
                    'output'      =>  $output,
                );

        $this->_example_output($data); 

	}









}