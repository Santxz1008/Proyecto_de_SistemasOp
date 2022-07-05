<!DOCTYPE html>
<html>
<head>
  <!--Titulo.-->
  <title>Registro</title>
</head>
<!--Boddy, color de fondo naranja.-->
<body bgcolor="blue">
  <center>
    <!--Hace conexión con "Operacion_guardar.php"-->
    <!--El [Method="POST"] envia los datos de forma que no podemos ver, a diferencia del GET que los envia a travez del URL-->
    <form action="operacion_guardar.php" method="POST">
    </br></br></br></br></br>
          <h2><font face="Arial">Bienvenido al registro de alumnos</h2><br><br>
          <h3><font face="Arial">Ingrese los datos del alumno</h3><br>
      <!--Acá están los textos donde vamos a introducir el nombre, apellido y el correo, más un botón para registrarse en la base de datos.-->
      <label for="Nombre">Nombre</label><br>
      <input type="text" required name="nombre" value="" /><br/><br/>
      <label for="ApellidoP">Apellido Paterno</label><br>
      <input type="text" required name="apellido_pat" value="" /><br/><br/>
      <label for="ApellidoM">Apellido Materno</label><br>
      <input type="text" required name="apellido_mat" value="" /><br/><br/>
      <input type="submit" value="Registrar" />
    </form>
  </center>
</body>
</html>
