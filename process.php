
<?php

  $texto=$correo='';

  if ($_SERVER['REQUEST_METHOD']=="POST") {
  
    $texto = $_POST['txtex'];
    $correo = $_POST['correo'];

    if (empty($texto) or empty($correo)) {
      echo "<br><div>Faltan datos</div>";
    }else{
      if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo "<br><div>Dirección de correo inválida</div>";
      }else{
        echo "<br><div>MAIL ENVIADO CON ÉXITO!</div><br>";
        include "result_success.php";
      }
    }

  }



?>