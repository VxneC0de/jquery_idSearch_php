<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Form - Answer</title>
</head>
<body>

  <table border="1">
    <tr>
      <th>Id</th>
      <th>Cedula</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Status</th>
    </tr>

    <?php 
    
    $conex = mysqli_connect("localhost", "root", "", "idsearch_vxnec0de") or die("no se pudo contectar a la DB");
    
    $sql="select * from identification";
    $consulta=mysqli_query($conex,$sql);
    while($ver=mysqli_fetch_array($consulta)){

       // * es un comodin que significa "todo". Y from es selecioname todo de la tabla
       //mysql_query es la funcion que permite hacer la consulta, sirve para mandar a la data base, a su vez funciona para ver lo que hay dentro de la base y se puede guardar en una variable, en este caso los registros. trabaja con dos parametros: la conexion y lo que quiero hacer.
       //lo que esta dentro de consulta es un objeto, hay que desglosarlo.
       //mysqli_fetch_array: esta funcion trabaja con un parametro, donde buscar los datos, fetch es capturar arreglos.
      ?>
      
      <tr>
        <td><?php echo $ver[0]; ?></td> 
        <td><?php echo $ver[1]; ?></td>
        <td><?php echo $ver[2]; ?></td>
        <td><?php echo $ver[3]; ?></td>
        <td><?php echo $ver[4]; ?></td>
      </tr>
      <?php } ?>
    
    </table>
  
</body>
</html>