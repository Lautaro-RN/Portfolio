<html>

<style type="text/css">
*{margin:0;padding:0;box-sizing:border-box;}
 body{background:yellow 100vw 100vh;
 }
 body, .modal{width:100%;height:100%;display:flex;justify-content:center;align-items:center;}

 #btn-modal{display: none}
 .lbl-modal{
   background: sandybrown;  		
   padding: 10px 15px;
   border-radius: 4px;
   cursor: pointer;
 }
 #btn-modal:checked ~ .modal {
 	opacity: 1;
 	visibility: visible;
 }

 .modal{
   position: fixed; top: 0; left: 0;
   background: rgba(0, 0, 0, 0.7);
   /*transition: all 500ms ease;*/
   opacity: 0; visibility: hidden;
 }
   .contenedor{
   	width: 400px; height: 300px;
   	margin: auto;
   	background: white;
   	box-shadow:1px 7px 25px rgba(0, 0, 0, 0.7);
   	/*transition: all 500ms ease;*/
   	position: relative;
    }
   	  .contenedor header{
   	 	 padding: 10px;
   	 	 background: orange;
   	 	 color: white;
   	  }
   	  .lbl-cerrar{
   	 	 font-size: 15px;
   	 	 cursor: pointer;
   	  }
   	  #cruz{
   	  	position: absolute; top: 10px; right: 10px;
   	 	 color: white;
   	  }
   	  .contenedor footer{
   	  	background: lightblue;
   	  	position: absolute; bottom:0;
   	  	height: 6vh; width: 100%;
   	  }
   	  #lbl-pie{
   	  	position: relative;
   	  	top: 12px;
   	  	margin: 41%;
   	  	background: limegreen;
   	  	padding: 8px 16px;
   	  }
</style>


  <body>
  	<?php include "process.php"; ?>
  	<section>
  	  <div><form id="ex_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  	  	<label>Texto formulario</label><input type="text" name="txtex" value="<?php if(isset($texto)) echo $texto ?>">
  	  	<label>Correo</label><input type="text" name="correo" value="<?php if(isset($correo)) echo $correo ?>">
  	  	<input type="submit" name="submit" value="ENVIAR">
  	  </form></div>
  	  
  	</section>
  	
  	  <!--<input type="checkbox" id="btn-modal" form="ex_form">
	  <a href="result_success.php" class="lbl-modal">Enviar</a>-->
	  
  </body>
<!--
    <div class="modal">
      <div class="contenedor">
      	<header>Cabeza</header>
      	<label class="lbl-cerrar" for="btn-modal" id="cruz">X</label>
      	<div class="contenido">Este es el texto de cuerpo del modal</div>
      	<footer>
      	  <label class="lbl-cerrar" for="btn-modal" id="lbl-pie">Cerrar</label>
      	</footer>
      </div>
    </div>
-->
  
	
</html>




<?php


?>