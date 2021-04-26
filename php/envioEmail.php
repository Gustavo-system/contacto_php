<?php
   require_once 'validaciones.php';

   $destinatario = 'solargustavo85@gmail.com'; 

   $contenido = "Nombre:".$user_name."Empresa: ".$empresa."Numero: ".$numero."Correo: ".$email."Asunto: ".$asunto;

   mail($destinatario, "Contacto: ", $contenido);