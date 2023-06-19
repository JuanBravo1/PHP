<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>New User...</title>
  <link rel="stylesheet" href="./css/estilos.css" />
</head>
<body>
  <div id="container">
    <header>
      <h1>Nuevo Usuario</h1>
      <img src="./src/logo.png" alt="ok" class="imgh" />
    </header>
    <section>
      <h2>Formulario de registro...</h2>
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $genero = $_POST['genero'];
        $fchnac = $_POST['date'];

       
        echo "<h3>Datos ingresados:</h3>";
        echo "<table>";
        echo "<tr><th>Campo</th><th>Valor</th></tr>";
        echo "<tr><td>Nombre</td><td>$nombre</td></tr>";
        echo "<tr><td>Usuario</td><td>$user</td></tr>";
        echo "<tr><td>Password</td><td>$pass</td></tr>";
        echo "<tr><td>Correo</td><td>$email</td></tr>";
        echo "<tr><td>Teléfono</td><td>$tel</td></tr>";
        echo "<tr><td>Género</td><td>$genero</td></tr>";
        echo "<tr><td>Fecha de Nacimiento</td><td>$fchnac</td></tr>";
        echo "</table>";
      }
      else {
     
        echo '
          <form action="./php/res.php" method="POST" autocomplete="off">
            <!-- Tu formulario actual -->
          </form>
        ';
      }
      ?>
    </section>
    <footer>
      <h2>Practica 3C</h2>
      <img src="./src/logo.png" alt="ok" class="imgh" />
    </footer>
  </div>
</body>
</html>

