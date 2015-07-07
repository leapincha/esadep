<?php

class Eventos extends MY_Model {
       function __construct() {
           parent::__construct();
           $this->table="eventos";
           }


        function current_eventos($fields, $order = '', $sortOrder = '', $limit = 0)
    	{
        	$query = "select $fields FROM $this->table
                  	where fecha >= CURDATE()
                  	ORDER BY $order $sortOrder
                  	LIMIT $limit
                  	";
        
        
        	//echo $query;die();
        	$query = $this->db->query($query);

        	$result = $query->result();
        	$query->free_result();

        	return $result;
    }
}

?>
