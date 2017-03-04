<?php
	/*
	*EXEMPLO DO TESTE 3 UTILIZANDO PHP
	*
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