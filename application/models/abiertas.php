<?php

class Abiertas extends MY_Model {
       function __construct() {
           parent::__construct();
           $this->table="abiertas";
           }

    function current_abiertas($fields, $order = '', $sortOrder = '',$tipo){
           		$query = "select $fields FROM $this->table
                  LEFT JOIN tipo_prueba on tipo_prueba.id_prueba=abiertas.tipo_prueba
                  WHERE abiertas.tipo_prueba=$tipo 
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
