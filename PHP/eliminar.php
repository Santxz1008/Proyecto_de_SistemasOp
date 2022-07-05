<?php
//Hace conexión con la base de datos
include("proyectoSO.php");
//Hace la variable "matricula"
  $matricula= $_REQUEST['matricula'];
//Selecciona a usuarios a partir de la ID para evitar borrar en cuyo caso haya datos repetidos (ya que la ID no se repite)
  $query="DELETE FROM alumnos WHERE matricula='$matricula'";
  //Acá nos dice básicamente que si todo sale bien nos va a llevar a la tabla donde vamos a ver que el usuario se eliminó con exito
  $resultado= $proyectoSO->query($query);
  if($resultado){
    header("Location: tabla.php");
  }
  //Si la conexión falla nos aparecerá el siguiente error
  else{
    echo "Inserción fallida";
  }

?>
