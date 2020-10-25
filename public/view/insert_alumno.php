<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crear alumne</title>
    <style>
      .column_left{
        
        padding: 0 40%;
      }
      label,input{
        display: block;
        padding: 5px;
      }
      input[type="submit"]{
        margin-top:5px;
      }
    </style>
</head>
<body>
<div class="row">
  <div class="column_left">
    <h2 style="text-align: left; margin: 5%">Crear alumno</h2>
    <div class="form" style="margin:5%;">
        <form  action="../../controller/insertAlumnoController.php" method="POST" >
          <label for="nombre">Nombre</label>
          <input type="text" id="nombre" name="nombre" placeholder="Nombre...">
          
          <label for="primerApellido">primer apellido</label>
          <input type="text" id="primerApellido" name="primerApellido" placeholder="primer apellido...">

          <label for="segundoApellido">segundo apellido</label>
          <input type="text" id="segundoApellido" name="segundoApellido" placeholder="segundo apellido...">

          <label for="grupo">grupo</label>
          <input type="text" id="grupo" name="grupo" placeholder="grupo...">

          <label for="email">email</label>
          <input type="email" id="email" name="email" placeholder="email...">
          
          <label for="psswd">password</label>
          <input type="psswd" id="psswd" name="psswd" placeholder="password...">
          
          <input type="submit" value="Crear">
        </form>
        
    </div>    
  </div>
  </div>
</body>
</html>



