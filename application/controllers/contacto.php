<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacto extends MY_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model("contactos");
        $this->load->library('form_validation');
        $this->load->model("info_contacto");
        
      
    }


    public function index()
	 {

		    
		$data['active'] = "contacto";
        $data['sub_active'] = "";
        $data['titulo'] ="Contacto";

        $this->load->helper(array('form', 'url'));

        $data['contact'] = $this->info_contacto->read("descripcion","id_info","DESC",1);

        $this->form_validation->set_rules('usuario', 'Usuario', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email'); 
        $this->form_validation->set_rules('mensaje', 'Mensaje', 'required');
        

        if ($this->form_validation->run() == FALSE)
        {

            $data['error'] = FALSE;
            $this->display("web/contacto", $data);
        }
        else
        {
            $data['active'] = "contacto";
            $data['sub_active'] = "";
            $post = Array("usuario" => $this->input->post("usuario"),
                          "email" => $this->input->post("email"),
                          "mensaje" => $this->input->post("mensaje"),
                          
                          );
            
            $this->form_validation->resetpostdata();
            $this->contactos->create($post);
            $data['error'] = TRUE;
            $this->display("web/contacto", $data);
        }

       	
       	
       	
    	
		
	 }




}