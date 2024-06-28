<?php
  $conex = mysqli_connect("localhost", "root", "", "idsearch_vxnec0de") or die("no se pudo contectar a la DB");

  $sql = "insert into identification values('', 29664547, 'Vanessa', 'Rubio', 0)";

  if(mysqli_query($conex, $sql)){
    echo  "Se registro con exito";
  }else{
    echo "problemas al registrarse, intente nuevamente mas tarde"
  };

  

  /*
  $ = para crear variables

  $conex es la conexion a la db

  mysqli_connect() tiene 4 parametros:
  -el primero es en donde va buscar la base, es en el servidor(localhost),
  -el segundo es el usuario de la base de datos, en este caso la raiz,
  -el tercero es la clave del usuario, de la base de datos, en este caso -como es una db es general, se deja vacia
  el cuarto es el nombre de la base de datos

  or die() mata todo, manda un mensaje

  mysqli_query es una funcion que se encarga de enviar un query o una colsuta a la base de datos y recibe dos parametros:
  -parametro 1, la conexion, que en este caso es $conex
  -parametro 2, insertar dato, lo que quiero hacer con la base de datos, en este caso lo de sql

  debo preguntar a la funcion si trabajo, un booleano, si inserto el dato o no, para eso es el "if, else", para comprobar la condicion si esta trabajando o no.
  */
?>