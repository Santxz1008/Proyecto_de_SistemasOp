<?php
//Hace conexión con la base de datos
include("proyectoSO.php");
//Declara las variables
  $matricula= $_REQUEST['matricula'];
  $nombre= $_POST['nombre'];
  $apellido_pat= $_POST['apellido_pat'];
  $apellido_mat= $_POST['apellido_mat'];
//Acá nos dice básicamente: reemplaza los datos de la tabla "usuarios" donde el dato "nombre" sea "$nombre"(la variable que creeamos arriba, osea, que se reemplazara por esta, lo mismo con los demás.)
  $query="UPDATE alumnos SET nombre='$nombre', apellido_pat='$apellido_pat', apellido_mat='$apellido_mat' WHERE matricula='$matricula'";
  $resultado= $proyectoSO->query($query);
//Si tiene exito nos llevara a tabla.php donde estaran los datos modificados
  if($resultado){
    header("Location: tabla.php");
  }
  //Sino nos dará el siguiente error
  else{
    echo "Inserción fallida";
  }

?>
