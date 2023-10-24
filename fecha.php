<?php 

        date_default_timezone_set('America/Mexico_City');

        $fecha_actual = getdate();
        
    
        
         $fecha_actual_completa = $fecha_actual['year'] . "-" . $fecha_actual['mon'] . "-" . $fecha_actual['mday'];


        echo "<br> La fecha y hora actual es: ". $fecha_actual_completa;

 ?>