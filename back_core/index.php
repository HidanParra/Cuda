
<!doctype html>
<html lang="es_MX">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.5">
  <title>Signin Template · Bootstrap</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


<link href="css/login.css" rel="stylesheet">
</head>
<body class="text-center">
  <form class="form-signin">
    <img class="mb-4" src="../img/logotipo.png" alt="">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus >
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="btn btn-lg btn-info btn-block" id="buttonSubmit" type="button">Sign in</button>
    <button class="btn btn-lg btn-success btn-block" hidden id="buttonOk">OK</button>
    <button class="btn btn-lg btn-danger btn-block" hidden id="buttonError">FAIL</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
  </form>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script>
    function validateEmail(email) {
      var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    }
    $("#buttonSubmit").click(function(){

      let usuario = $("#inputEmail").val();
      let password = $("#inputPassword").val();
      if(usuario == "" || password == ""){
        alert("Los campos de Correo y Password son Requeridos");
        return false;
      }
      if(!validateEmail(usuario)){
        alert("El campo de Correo es erróneo");
        return false;
      }

      let usr_data = {
        "accion" : "login",
        "usuario" : usuario,
        "password" : password
      };

      $.post("includes/_funciones.php", usr_data)
      .done(()=>{              
        console.log("Conexión correcta"); 
      })
      .fail(()=>{
        console.log("Error en conexión");
      })
      .then((data)=>{
        if(data!=1){
          $('#buttonError').removeAttr("hidden");
        }else{
          $('#buttonError').attr("hidden","true");
          $('#buttonOk').removeAttr("hidden");

          setTimeout(function(){ location.href='./dashboard'; }, 2000);
        }
      });
        // Mostrar mensaje de error
        // Redireccionar a usuarios.php
    });









  </script>
</body>
</html>