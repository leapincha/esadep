<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Noticia extends MY_Controller {

	public function __construct() {
        parent::__construct();
        
        $this->load->model('categorias');
        $this->load->model('noticias');
        $this->load->library("pagination");

        //$this->output->enable_profiler(TRUE);
        


      
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
	public function index($offset = 0)
	{

		$data['active'] = "noticias";
        $data['sub_active'] = "";
        $data['title'] = "ÚLTIMAS NOVEDADES";

        $data['categorias'] = $this->categorias->read("id_categoria, categoria","id_categoria","ASC");

        $offset = ($this->uri->segment(3) != '' ? $this->uri->segment(3):0);
        //$noticias = $this->tickets->read("ticket.idTicket, ticket.fecha, espectaculo.descripcion AS espectaculo, ticket.tipoticket", '' == $order ? '' : $order, $sortOrder, 10, $page);
        $data["results"] = $this->noticias->read_noti("id_noticia,titulo, SUBSTR(copete, 1, 80) as copete,foto",'id_noticia', 'DESC', 6, $offset);

        $count = (int) $this->noticias->count_all();



        // Creo la paginacion
        $config = array();
        $config['base_url'] = base_url() . 'noticia/index';
        $config["total_rows"] = $count;
        $config['per_page'] = 6;
        
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
       	
       	$this->display("web/noticias_prueba", $data);
    	
		
	}

	public function tipo($idcategoria){

		

        $data['active'] = "noticias";
        $data['sub_active'] = "";

        $data['categorias'] = $this->categorias->read("id_categoria, categoria","id_categoria","ASC");
       
        $categoria_nombre = $this->categorias->get("categoria", NULL, 'ASC', NULL, 0, "id_categoria = $idcategoria");
        $data['categoria'] = $categoria_nombre;

        foreach($categoria_nombre as $nombre){
            $nombre_cat= $nombre;
                     
        }

        $data['title'] = $nombre_cat;


        $offset = ($this->uri->segment(4) != '' ? $this->uri->segment(4):0);

       
        
        
        $data["results"] = $this->noticias->current_noticias_categoria("noticias.id_noticia as id_noticia,noticias.titulo as titulo, SUBSTR(noticias.copete, 1, 80) as copete,noticias.foto as foto", 'noticias.id_noticia', 'DESC', 6, $offset, $idcategoria);
        $data["contar"] = $this->noticias->current_noticias("noticias.id_noticia as id_noticia,noticias.titulo as titulo, SUBSTR(noticias.copete, 1, 80) as copete,noticias.foto as foto", 'noticias.id_noticia', 'DESC', $idcategoria);

        $count = count($data["contar"]);

        $data['cantidad_total'] = $count;

        
        // Creo la paginacion
        $config = array();
        $config['base_url'] = base_url() . 'noticia/tipo/'.$idcategoria;
        $config["total_rows"] = $count;
        $config['per_page'] = 6;
        $config['uri_segment'] = 4; 
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

        
        $data["links"] = $this->pagination->create_links($offset);

        $this->display("web/noticias",$data);        


   
	}

    function ver($id_nota){

        $data['active'] = "noticias";
        $data['sub_active'] = "";

        $data['categorias'] = $this->categorias->read("id_categoria, categoria","id_categoria","ASC");

        $noticias = $this->noticias->get("titulo,fecha, copete,foto, desarrollo, documento", NULL, 'ASC', NULL, 0, "id_noticia = $id_nota");



        $data['notici'] = $noticias;


       


        $this->display("web/noticia-view",$data);   
    }

	

	
}
