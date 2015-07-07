<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    function nombremes($mes){
    setlocale(LC_TIME, 'spanish');  
    $nombre=strftime("%B",mktime(0, 0, 0, $mes, 1, 2000)); 
    return $nombre;
    } 

    function nombredia($dia){
    setlocale(LC_TIME, 'spanish');  
    $nombre=strftime("%A",mktime(0, 0, 0, $dia, 1, 2000)); 
    return $nombre;
    } 



?>


