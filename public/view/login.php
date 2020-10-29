<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/styles.css">


</head>
<body>

<div class="row">
  <div class="column left">
    <h2 style="text-align: left; margin: 5%">Login</h2>
    <div class="form" style="margin:5%;">
        <form action="../../controller/loginController.php" method="POST" id="submit" onsubmit="return validacionForm()">
          <label for="email">Usuario</label>
          <input type="email" id="email" name="email" placeholder="Usuario...">
          
          <label for="psswd">Contraseña</label>
          <input type="password" id="psswd" name="psswd" placeholder="Contraseña...">
          
          <input type="submit" value="Iniciar sesión">
        </form>
        <div id="message"></div>
    </div>    
  </div>
  </div>
</div>
<script src="../js/validateLogin.js"></script>
</body>
</html>
