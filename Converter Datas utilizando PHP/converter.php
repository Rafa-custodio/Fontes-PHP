<?php
	/*
	*EXEMPLO: função que converte a data em PHP.
	*Author: Rafael Custodio
	*/

function converter($date_usa){

    if ($date = \DateTime::createFromFormat('Y-m-d', $date_usa)) {
       
        echo $date->format('d/m/Y') . " - Brasileiro";

    } elseif ($date = \DateTime::createFromFormat('d/m/Y', $date_usa)) {
        
          echo $date->format('Y-m-d') . " - Americano";
    }

    else{
        echo "Data inválida!";
    }
}

?>
