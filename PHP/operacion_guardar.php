<?php
//Hace conexión con conexión.php
include("proyectoSO.php");
//Declara las variables nombre, apellido, correo
  $nombre= $_POST['nombre'];
  $apellido_pat= $_POST['apellido_pat'];
  $apellido_mat= $_POST['apellido_mat'];
//Inserta en la tabla "usuarios" el nombre, el apellido y el correo las variables declaradas anteriormente
  $query="INSERT INTO alumnos(nombre,apellido_pat,apellido_mat) VALUES('$nombre','$apellido_pat','$apellido_mat')";
//Abre conexión
  $resultado= $proyectoSO->query($query);
//Si hay conexión los datos se llevarán hacía la tabla
  if($resultado){
    header("Location: tabla.php");
  }
  //Si no hay conexión aparecerá lo siguiente
  else{
    echo "Inserción fallida";
  }

?>
