<?php 
require_once '../includes/_db.php';
require_once '../includes/_funciones.php';
?>
<!doctype html>
<html lang="es_MX">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.5">
  <title>Dashboard Template · Bootstrap</title>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="../css/estilo.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="#">Sign out</a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="../dashboard">
                <span data-feather="home"></span>
                Dashboard 
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../usuarios/">
                <span data-feather="file"></span>
                Usuarios <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../services">
                <span data-feather="file"></span>
                Servicios 
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="../comentarios">
                <span data-feather="file"></span>
                Comentarios
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active ">
                <span data-feather="file"></span>
                Habilidaes <span class="sr-only">(current)</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <br>
        <h1>Habilidaes</h1>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>#</th>
                <th>Habilidad</th>
                <th>Prcentaje</th>                                                
              </tr>
            </thead>
            <tbody>
              <?php 
             
             $usuarios = $db->select("Skills","*");
              foreach ($usuarios as $usuario => $usr) {
                ?>
                <tr>
                    <td><?php echo $usr["id_skills"]; ?></td>
                    <td><?php echo $usr["name_skills"]; ?></td>
                    <td><?php echo $usr["percentage_skills"]; ?></td>
                                    
                    <td><a href="#" data-id="<?php echo $usr["id_usr"]; ?>">Editar</a> / <a href="#" data-id="<?php echo $usr["id_usr"]; ?>">Eliminar</a></td>
                </tr>
                <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  </html>
