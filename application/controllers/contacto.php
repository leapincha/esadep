<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacto extends MY_Controller {

	public function __construct() {
        parent::__construct();
        
        
      
    }


    public function index()
	 {

		    
		    $data['active'] = "contacto";
        $data['sub_active'] = "";
        $data['titulo'] ="Contacto";

       	
       	
       	$this->display("web/contacto", $data);
    	
		
	 }




}