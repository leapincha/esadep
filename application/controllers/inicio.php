<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends MY_Controller {

	public function __construct() {
        parent::__construct();
        
        $this->load->model('consultas');
        $this->load->model('noticias');
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

		$data['active'] = "Inicio";
        $data['sub_active'] = "";

        $this->load->model("eventos");
        $this->load->model("sponsors");
        $this->load->model("equipos");

        $data['sponsors']= $this->sponsors->read("link_web, foto",'id_sponsor','ASC');
        $events = $this->eventos->current_eventos("id_evento, fecha, nombre, lugar, foto","fecha","ASC", 5);
        $data['equipo'] = $this->equipos->read("id_equipo,nombre_equipo,descripcion,foto","id_equipo","ASC");
        $data["noticias"] = $this->noticias->read_noti("id_noticia,titulo, SUBSTR(copete, 1, 190) as copete,foto", 'id_noticia', 'DESC',4);

        


        

        $data['eventos']= $events;

        
       	
       	$this->display("web/index", $data);
    	
		
	}

	public function quienes()
	{

		$this->load->model("quienes");
		$data['active'] = "esadep";
        $data['sub_active'] = "quienes";
        $data['titulo'] ="ESADEP";

       	$data['quienes'] = $this->quienes->read("quienes","id","DESC",1);
       	$this->display("web/quienes-somos", $data);
    	
		
	}

	public function historia()
	{

		$this->load->model("historia");
		$data['active'] = "esadep";
        $data['sub_active'] = "historia";
        $data['titulo'] ="Historia";
        //$queries = "select * from historia order by fecha desc limit 1";

        //$result = $this->consultas->make_query($queries); 

        $data['historia'] = $this->historia->read("historia","id","DESC",1);

       

        //$data['historia'] = $result;

       	
       	$this->display("web/historia", $data);

	}

	public function comision_directiva()
	{
		$this->load->model("comision");
		$data['active'] = "esadep";
        $data['sub_active'] = "cd";

        $data['titulo'] ="Comisión Directiva";

        $data['comision'] = $this->comision->read("nombre_apellido, descripcion, file_url","id","ASC");
       	
       	$this->display("web/comision", $data);

	}

	public function comision()
	{
		
		$data['active'] = "esadep";
    $data['sub_active'] = "cd";

    $data['titulo'] ="Comisión Directiva";

        
       	
    $this->display("web/comision-directiva", $data);

	}

  public function equipos()
  {
    $this->load->model("equipos");
    $data['active'] = "esadep";
    $data['sub_active'] = "equipos";

    $data['equipo'] = $this->equipos->read("id_equipo,nombre_equipo,descripcion","id_equipo","ASC");

    $this->display("web/equipos", $data);
  }


  public function nombremes($mes){
    setlocale(LC_TIME, 'spanish');  
    $nombre=strftime("%B",mktime(0, 0, 0, $mes, 1, 2000)); 
    return $nombre;
    } 

	
}
