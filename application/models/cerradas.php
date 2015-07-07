<?php

class Cerradas extends MY_Model {
       function __construct() {
           parent::__construct();
           $this->table="cerradas";
           }

           function current_cerradas($fields, $order = '', $sortOrder = '',$tipo){
           		$query = "select $fields FROM $this->table
                  LEFT JOIN tipo_prueba on tipo_prueba.id_prueba=cerradas.tipo_prueba
                  WHERE cerradas.tipo_prueba=$tipo 
                  ORDER BY $order $sortOrder
                  ";
        
        
        //echo $query;die();
        $query = $this->db->query($query);

        $result = $query->result();
        $query->free_result();

        return $result;

    }
}

?>
