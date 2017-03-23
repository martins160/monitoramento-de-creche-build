<?php 
  session_start(); 


  if($_SESSION['nivelUser'] != "admin"){
    $_SESSION['loginErro'] = "Acesso Restrito!";        
    header("Location: login.php");
}
?>





<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline'; style-src 'self' 'unsafe-inline'; media-src *" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/page-selecione.css">
  
    <title>MONITORAMENTO DE CRECHE</title>
</head>

<body>



<header class="header">

  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12">     

        <div class="header-top">
          <a href="?sair=logout">
            <span class="glyphicon glyphicon-chevron-left">
              <b class="header-voltar">Voltar</b>
            </span>
          </a>
        </div>     

      </div>
    </div>
  </div>

</header>

<section class="cont">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12">
        <h1>Selecione a criança</h1>

          <form> 
            <div class="form-group">              
              <select class="form-control" id="exampleSelect1">
                <option>Lucas Almeida Lima</option>
                <!--<option>Tatiane Almeida Lima</option>-->
              </select>
            </div>   
            <a href="admin-dados.php" type="submit" class="btn btn-primary btn-page1">Entrar</a>
          </form>

      </div>
    </div>
  </div>
</section>



<?php  //echo "Bem vindo! " .$_SESSION['nomeUser']; ?>

  <!--<h1>admin</h1>

  <br /><br />
  
  <a href="?sair=logout">Logout</a>-->


  <?php
    if(isset($_GET['sair']) && ($_GET['sair'] == 'logout')){
      unset ($_SESSION['nivelUser']);
      header("Location: login.php");
    }
  ?>


  





<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script> 

</body>

</html>