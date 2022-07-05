<!DOCTYPE html>
<html>
<head>
  <title>Tabla de alumnos</title>
</head>
<body>
    <center>
        <table bgcolor="cyan" border="3" width="50%">
            <thead>
                <tr>
                  <!--Acá usamos un href para crear un nuevo registro-->
                    <th colspan="1"><a href="formulario.php">Nuevo Registro</a></th>
                    <th colspan="5">Lista de alumnos</th>
                </tr>
            </thead>
            <!--Se siguen añadiendo valores a la tabla de HTML (los correspondientes a nuestra base de daots)-->
            <tbody>
                <tr>
                  <td>Matricula</td>
                  <td>Nombre</td>
                  <td>Apellido Paterno</td>
                  <td>Apellido Materno</td>
                  <td colspan="2">Opciones</td>

                </tr>
            <?php
            //Hace conexión con la base de datos
                include("proyectoSO.php");
            //Básicamente, selecciona la tabla usuarios para pasarla a nuestra tabla en PHP
                $query="SELECT * FROM alumnos";
                $resultado= $proyectoSO->query($query);
                while($row=$resultado->fetch_assoc()){
              ?>

                <tr>
                  <td><?php echo $row['matricula']; ?></td>
                  <td><?php echo $row['nombre']; ?></td>
                  <td><?php echo $row['apellido_pat']; ?></td>
                  <td><?php echo $row['apellido_mat']; ?></td>
                  <!--Se crea un href para los botones Modificar y Eliminar-->
                  <td><a href="modificar.php?matricula=<?php echo $row['matricula']; ?>">Editar</a></td>
                  <td><a href="eliminar.php?matricula=<?php echo $row['matricula']; ?>">Borrar</a></td>

                </tr>
            <?php
                }
            ?>

            </tbody>
        </table>
    </center>
</body>
</html>
