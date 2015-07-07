<?php

class Consultas extends MY_Model
{
    public function  __construct()
    {
        parent::__construct();
        $this->table = "";
    }
    
    function make_query($query)
    {
        $query = $this->db->query($query);

        $result = $query->result_array();
        $query->free_result();

        return $result;
    }
}

?>
