<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pruebas extends MY_Controller {

	public function __construct() {
        parent::__construct();
        
        $this->load->model('consultas');
      
    }

  
	public function index()
	{

		$data['active'] = "salvamento";
        $data['sub_active'] = "pruebas";
       	
       	$this->display("web/pruebas", $data);
    	
		
	}

	public function tipo($prueba)
	{
		    $data['active'] = "salvamento";
        $data['sub_active'] = $prueba;

        if($prueba=='abiertas'){
        	$this->load->model('abiertas');
          $data["title"] = $prueba;
        	$data["individuales"] = $this->abiertas->current_abiertas("abiertas.id_prueba as id_prueba,abiertas.nombre_prueba as nombre, abiertas.introduccion as intro, abiertas.descripcion as descrip, tipo_prueba.tipo_prueba as tipo_prueba, abiertas.foto as foto", 'abiertas.id_prueba', 'ASC',1);
          $data["grupales"] = $this->abiertas->current_abiertas("abiertas.id_prueba as id_prueba,abiertas.nombre_prueba as nombre, abiertas.introduccion as intro, abiertas.descripcion as descrip, tipo_prueba.tipo_prueba as tipo_prueba, abiertas.foto as foto", 'abiertas.id_prueba', 'ASC',2);
        }elseif($prueba=='cerradas'){
        	$this->load->model('cerradas');
          $data["title"] = $prueba;
        	$data["individuales"] = $this->cerradas->current_cerradas("cerradas.id_prueba as id_prueba,cerradas.nombre_prueba as nombre, cerradas.introduccion as intro, cerradas.descripcion as descrip, tipo_prueba.tipo_prueba as tipo_prueba, cerradas.foto as foto", 'cerradas.id_prueba', 'ASC',1);
          $data["grupales"] = $this->cerradas->current_cerradas("cerradas.id_prueba as id_prueba,cerradas.nombre_prueba as nombre, cerradas.introduccion as intro, cerradas.descripcion as descrip, tipo_prueba.tipo_prueba as tipo_prueba, cerradas.foto as foto", 'cerradas.id_prueba', 'ASC',2);
        }
       	
       	$this->display("web/pruebas", $data);
	}

    public function ver($tipo,$id_prueba)
  {

      $data['active'] = "salvamento";
      $data['sub_active'] = $tipo;

       if($tipo=='abiertas'){
        $this->load->model('abiertas');
        $data["prueba"] = $this->abiertas->get("nombre_prueba,introduccion,descripcion,foto,tipo_prueba,link_galeriafb,youtube", NULL, 'ASC', NULL, 0, "id_prueba = $id_prueba");

       }elseif($tipo=='cerradas'){
        $this->load->model('cerradas');
        
        $data["prueba"] = $this->cerradas->get("nombre_prueba,introduccion,descripcion,foto,tipo_prueba,link_galeriafb,youtube", NULL, 'ASC', NULL, 0, "id_prueba = $id_prueba");

       }


       $this->display("web/prueba-view", $data);
  }

	

	
}
