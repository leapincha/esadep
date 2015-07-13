<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Evento extends MY_Controller {

	public function __construct() {
        parent::__construct();
        
        $this->load->model('eventos');
        $this->load->library("pagination");
        $this->load->helper('date');
        
      
    }

    /**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		
    	
		
	}

	

	public function ver($id_evento)
	{
        $data['active'] = "eventos";
        $data['sub_active'] = "";

        
        $events = $this->eventos->get("id_evento,nombre,descripcion,fecha,foto,lugar", NULL, 'ASC', NULL, 0, "id_evento = $id_evento");



        $data['events'] = $events;


       


        $this->display("web/evento-view",$data);   
		

	}

	public function listado($offset = 0)
	{

		$data['active'] = "eventos";
        $data['sub_active'] = "";
        $data['title'] = "Eventos";

        $events = $this->eventos->current_eventos("id_evento, fecha, nombre, lugar, foto","fecha","ASC", 5);


        $this->load->model("sponsors");

        $data['sponsors']= $this->sponsors->read("link_web, foto",'id_sponsor','ASC');

        $data['eventos']= $events;

        $offset = ($this->uri->segment(3) != '' ? $this->uri->segment(3):0);
        //$noticias = $this->tickets->read("ticket.idTicket, ticket.fecha, espectaculo.descripcion AS espectaculo, ticket.tipoticket", '' == $order ? '' : $order, $sortOrder, 10, $page);
        $data["results"] = $this->eventos->read("id_evento,fecha,nombre, descripcion,foto",'fecha', 'DESC', 5, $offset);

        $count = (int) $this->eventos->count_all();

        // Creo la paginacion
        $config = array();
        $config['base_url'] = base_url() . 'evento/listado';
        $config["total_rows"] = $count;
        $config['per_page'] = 5;
        
        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        
        $this->pagination->initialize($config);
        $data['cantidad_total'] = $count;
       	//$page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $data["links"] = $this->pagination->create_links();
       	
       	$this->display("web/eventos", $data);
	}



	

	
}
