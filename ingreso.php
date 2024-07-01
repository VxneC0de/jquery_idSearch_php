<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Form</title>
</head>
<body>

  <form action="mete.php" method="post">

  <h1>User Form</h1>

  <label for="cedula">Id</label>
  <input type="text" name="cedula" id="cedula-ingreso" placeholder="Enter your id" required>

  <label for="name">Name</label>
  <input type="text" name="name" id="name-ingreso" placeholder="Enter your name" required>

  <label for="lastname">Lastname</label>
  <input type="text" name="lastname" id="lastname-ingreso" placeholder="Enter your lastname" required>

  <button id="enter-ingreso">Enter</button>

  </form>

  <p id="answer"></p>

  <script src="jquery.js"></script>

  <script>
  
  let x = $(document);
  x.ready(inicializarEventos);
  
  function inicializarEventos(){
    let x = $("#enter-ingreso");
    x.click(ingreso);
  }

  function ingreso(){
    
    let id = $("#cedula-ingreso").val();
    let name = $("#name-ingreso").val();
    let lastName = $("#lastname-ingreso").val();

    $.ajax({
      async: true,
      type: "POST",
      dataType: "html",
      url: "mete.php",
      data: { id: id, name: name, lastName: lastName },
      beforeSend: llego,
      success: llegada,
      timeout: 5000,
      error: problemas
    });

    return false;
  }

  function llego(){
    let x = $("#answer");
    x.html('<img src="https://i.gifer.com/ZKZg.gif" alt="load" width="100" height="100">');
  }

  function llegada(datos){
    $("#answer").text(datos);
  }

  function problemas(){
    $("#answer").text("intente mas tarde");
  }

  </script>
  
</body>
</html>