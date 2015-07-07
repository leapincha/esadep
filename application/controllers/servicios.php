<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Servicios extends MY_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model("servicio");
        
      
    }


    public function capacitacion()
	{

		    
		    $data['active'] = "servicios";
        $data['sub_active'] = "capacitacion";
        //$data['titulo'] ="ESADEP";

       	$servicio = $this->servicio->get("id_servicio,nombre_servicio,descripcion,foto", NULL, 'ASC', NULL, 0, "id_servicio = 1");

        $data['serv'] = $servicio;
       	$this->display("web/servicios", $data);
    	
		
	}

  public function seguridad_acuatica(){

     $data['active'] = "servicios";
     $data['sub_active'] = "seguridad";

     $servicio = $this->servicio->get("id_servicio,nombre_servicio,descripcion,foto", NULL, 'ASC', NULL, 0, "id_servicio = 3");

     $data['serv'] = $servicio;
     $this->display("web/servicios", $data);

  }

  public function alquiler_material(){

     $data['active'] = "servicios";
     $data['sub_active'] = "alquiler";

     $servicio = $this->servicio->get("id_servicio,nombre_servicio,descripcion,foto", NULL, 'ASC', NULL, 0, "id_servicio = 2");

     $data['serv'] = $servicio;
     $this->display("web/servicios", $data);


    
  }




}