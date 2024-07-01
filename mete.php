<?php
  $conex = mysqli_connect("localhost", "root", "", "idsearch_vxnec0de") or die("no se pudo contectar a la DB");

  if($_POST['id'] !== "" && $_POST['name'] !== "" && $_POST['lastName'] !== ""){

    $sql = "insert into identification values('', '$_POST[id]', '$_POST[name]', '$_POST[lastName]', 0)";
    
    if(mysqli_query($conex, $sql)){
      echo  "Se registro con exito";
    }else{
      echo "problemas al registrarse, intente nuevamente mas tarde";
    };
  
  }else{
    echo "no puede dejar campos vacios";
  }

?>