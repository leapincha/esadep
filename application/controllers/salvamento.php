<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Salvamento extends MY_Controller {

	public function __construct() {
        parent::__construct();
        
        
      
    }


    public function historia()
	{
        $this->load->model("historia_salvamento");
		
		    $data['active'] = "salvamento";
        $data['sub_active'] = "historia_salv";
        $data['titulo'] ="ESADEP";

       	$data['historia'] = $this->historia_salvamento->read("descripcion","id_historia","DESC",1);
       	
       	$this->display("web/historia-salvamento", $data);
    	
		
	}

      public function definicion()
  {
        $this->load->model("definicion_salvamento");
        $this->load->model("quienes");
        $data['active'] = "salvamento";
        $data['sub_active'] = "definicion";
       

        $data['historia'] = $this->definicion_salvamento->read("descripcion","id_historia","DESC",1);
        
        $this->display("web/definicion-salvamento", $data);
      
    
  }

  public function reglamento()
  {
    $this->load->model("reglamento");

    $data['active'] = "salvamento";
    $data['sub_active'] = "reglamento";

    $data['reglamento'] = $this->reglamento->read("descripcion,reglamento","id_reglamento","DESC",1);

    $this->display("web/reglamento", $data);

  }



}