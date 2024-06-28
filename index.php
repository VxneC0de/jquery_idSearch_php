<?php
  $conex = mysqli_connect("localhost", "root", "", "idsearch_vxnec0de") or die("no se pudo contectar a la DB");

  /*
  mysqli_connect() tiene 4 parametros:
  -el primero es en donde va buscar la base, es en el servidor(localhost),
  -el segundo es el usuario de la base de datos, en este caso la raiz,
  -el tercero es la clave del usuario, de la base de datos, en este caso -como es una db es general, se deja vacia
  el cuarto es el nombre de la base de datos

  or die() mata todo, manda un mensaje
  */
?>