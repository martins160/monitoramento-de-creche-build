<?php 
  session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline'; style-src 'self' 'unsafe-inline'; media-src *" />
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/signin.css">
    <title>MONITORAMENTO DE CRECHE</title>
</head>

<body>





    <div class="container">

      <form class="form-signin-login2" method="POST" action="config/valida.php">
        <h2 class="form-signin-heading login-top">Login</h2>
        <div class="login-cont">
        
        <input type="text" class="login-sep" name="usuario" id="" class="form-control" placeholder="Login" required autofocus>
        
        <input type="password" class="login-sep" name="senha" id="" class="form-control" placeholder="Senha" required>
        
        <button class="btn btn-lg btn-primary btn-block btn-login2">Entrar</button>  
        </div>

        <p class="text-center text-danger error">
          <?php if(isset($_SESSION['loginErro'])){
            echo $_SESSION['loginErro'];
            unset($_SESSION['loginErro']);
          }?>
      </p>

      </form>

      

    </div>






<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script> 

</body>

</html>