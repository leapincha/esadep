<?php

class Noticias extends MY_Model {
       function __construct() {
           parent::__construct();
           $this->table="noticias";
           }


    function read_noti($fields, $order = '', $sortOrder = '', $limit = 9, $offset = 0)
    {
        $query = "SELECT $fields FROM noticias
                  ORDER BY $order $sortOrder
                  LIMIT $limit OFFSET $offset";

        $query = $this->db->query($query);

        $result = $query->result();
        $query->free_result();

        return $result;

    }

    function current_noticias_categoria($fields, $order = '', $sortOrder = '', $limit = 0, $offset = 0, $id_cat)
    {
        $query = "select $fields FROM $this->table
                  LEFT JOIN categoria_noticia on categoria_noticia.id_noticia=noticias.id_noticia
                  where categoria_noticia.id_categoria=$id_cat
                  ORDER BY $order $sortOrder
                  ";
        
        ($limit != 0) ? $query .= " LIMIT $limit OFFSET $offset" : "";
        //echo $query;die();
        $query = $this->db->query($query);

        $result = $query->result();
        $query->free_result();

        return $result;
    }

    function current_noticias($fields, $order = '', $sortOrder = '', $id_cat)
    {
        $query = "select $fields FROM $this->table
                  LEFT JOIN categoria_noticia on categoria_noticia.id_noticia=noticias.id_noticia
                  where categoria_noticia.id_categoria=$id_cat
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
