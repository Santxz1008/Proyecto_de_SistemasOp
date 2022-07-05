<!DOCTYPE html>
<html>
<head>
  <title>Guardar</title>
</head>
<body bgcolor="gray">
  <center>
    <?php
      //Declara variable matricula
        $matricula=$_REQUEST['matricula'];
        //Hace conexión con la base de datos
        include("proyectoSO.php");
        //Selecciona la ID de la tabla usuarios para modificar a partir de ella
        $query="SELECT * FROM alumnos WHERE matricula='$matricula'";
        $resultado= $proyectoSO->query($query);
        $row=$resultado->fetch_assoc();
      ?>
      <!--Hace conexión con el proceso de moficiar-->
    <form action="modificar_proceso.php?matricula=<?php echo $row['matricula']; ?>" method="POST">
      <!--Inputs anteriormente escritos a modificar-->
      <br/><br/><br/>
      <h2>Modificar los datos</h2><br><br>
      <label for="Nombre">Nombre</label><br>
      <input type="text" required name="nombre" value="<?php echo $row['nombre']; ?>" /><br/><br/>
      <label for="ApellidoP">Apellido Paterno</label><br>
      <input type="text" required name="apellido_pat" value="<?php echo $row['apellido_pat']; ?>" /><br/><br/>
      <label for="ApellidoM">Apellido Materno</label><br>
      <input type="text" required name="apellido_mat" value="<?php echo $row['apellido_mat']; ?>" /><br/><br/>
      <input type="submit" value="Aceptar" />
    </form>
  </center>
</body>
</html>
