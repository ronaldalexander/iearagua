<?php 



include_once("../session.php");
session_start();


?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Acceso | IEA </title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">
        <link rel="stylesheet" href="../../dist/css/style.css">
        <link rel="icon" type="image/png" sizes="32x32" href="../../dist/img/profile.png">
        <style type="text/css">
            .formato {
                text-align: center;
                color: snow;
            }
            
            .texto {
                text-decoration: none;
                color: white;
            }
        </style>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    </head>

    <body>
        <div class="login-box">
            <div class="login-box-body">
                <div class="col-xs-12" align="left">
                    <a href="../../" class="texto"> <i class="fa  fa-arrow-circle-left"></i> </a>
                </div>
                <div class="login-logo"> <img clas="logo" src="../../dist/img/logo.png" alt="IEA"> </div>
                <!-- /.login-logo -->
                <form method="post" action="">
                    <p class="login-box-msg">Inicia sesión</p>
                    <div class="form-group has-feedback">
                        <?php
    
        if(isset($_POST["user"]) && isset($_POST["pass"])){
        
      $user = mysqli_real_escape_string($mysqli, $_POST["user"]);
      $pass = mysqli_real_escape_string($mysqli, $_POST["pass"]);
        
      $sql = "SELECT * FROM usuarios WHERE (usuario='$user' OR email='$user') AND clave='$pass'";
      $result = $mysqli->query($sql);

      if ($result->num_rows == "1") {
        $data = $result->fetch_assoc();
          
        $_SESSION["user"] = $data["usuario"];
        $_SESSION["nombre"] = $data["primer_nombre"];
        $_SESSION["apellido"] = $data["segundo_nombre"];
        $_SESSION["rol"] = $data["tipo_usuario"];


             if ($_SESSION["rol"] == "Administrador" ) {
                 
                 echo '<div class="formato">Bienvenido<br>Admin. '.$_SESSION["nombre"].' '.$_SESSION["apellido"].'<br> Ingresando, por favor espere...<br><br>';
					echo '<center><img src="../../dist/img/ajax-loader.gif"></center><br>';
					echo '<meta http-equiv="refresh" content="5;url=../admin/"></div>';


            }else if($_SESSION["rol"] == "Profesor" ){

                echo '<div class="formato">Bienvenido<br>Prof. '.$_SESSION["nombre"].' '.$_SESSION["apellido"].'<br> Ingresando, por favor espere...<br><br>';
					echo '<center><img src="../../dist/img/ajax-loader.gif"></center><br>';
					echo '<meta http-equiv="refresh" content="5;url=../profesor/"></div>';}
         
       
          
        } else {

             header("location:../error/error_login.php");}

        }else{
          
          echo '          
                <input id="user" name="user" type="text" class="form-control" placeholder="Usuario o Email">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                <input id="pass" name="pass" type="password" class="form-control" data-type="password" placeholder="Contraseña">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                <div class="col-xs-12" align="center">
                <button type="submit" class="btn btn-danger btn-flat">Ingresar</button>
                </div>
                <!-- /.col -->

      ';
      }?> 
                  
                    </div>
                </form>
            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->
        <!-- jQuery 2.2.3 -->
        <script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="../../bootstrap/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="../../plugins/iCheck/icheck.min.js"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue'
                    , radioClass: 'iradio_square-blue'
                    , increaseArea: '20%' // optional
                });
            });
        </script>
    </body>

    </html>