<?php 

include_once("../../session.php");

session_start();
if(!isset($_SESSION["user"])){
  header("location:../../acces/");
}

?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Administrador | Estudiantes </title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../../dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="../../../dist/css/skins/_all-skins.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="../../../plugins/iCheck/flat/blue.css">
        <!-- Morris chart -->
        <link rel="stylesheet" href="../../../plugins/morris/morris.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="../../../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
        <!-- Date Picker -->
        <link rel="stylesheet" href="../../../plugins/datepicker/datepicker3.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="../../../plugins/daterangepicker/daterangepicker.css">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="../../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
        <link rel="icon" type="image/png" sizes="32x32" href="../../../dist/img/profile.png">
        <style>
            .margen {
                margin-top: 8px;
            }
            
            .example-modal .modal {
                position: relative;
                top: auto;
                bottom: auto;
                right: auto;
                left: auto;
                display: block;
                z-index: 1;
            }
            
            .example-modal .modal {
                background: transparent !important;
            }
            
            #icon {
                font-size: 20px;
            }
        </style>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    </head>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="../" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels --><span class="logo-mini"><b>IEA</b></span>
                    <!-- logo for regular state and mobile devices --><span class="logo-lg"><b>IEA</b>ragua</span> </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">MENÚ</span> </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="../../../dist/img/avatar5.png" class="user-image" alt="User Image"> <span class="hidden-xs"><?php echo $_SESSION["user"] ?></span> </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header"> <img src="../../../dist/img/avatar5.png" class="img-circle" alt="User Image">
                                        <p>
                                            <?php echo $_SESSION["user"]?> -
                                                <?php echo $_SESSION["rol"]?> <small>
                    <?php
                        $hoy = getdate();
                        print_r($hoy["mday"]."/".$hoy["mon"]."/".$hoy["year"]);
                        ?>
                    </small> </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class="user-body">
                                        <div class="row">
                                            <div class="col-xs-12 text-center"> <a href="#">¡Bienvenido al Sistema del IEAragua!</a> </div>
                                        </div>
                                        <!-- /.row -->
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div align="center"> <a href="../../acces/logout.php" class="btn btn-default btn-flat">Cerrar Sesión</a> </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li> <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a> </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image"> <img src="../../../dist/img/avatar5.png" class="img-circle" alt="User Image"> </div>
                        <div class="pull-left info">
                            <p>
                                <?php echo $_SESSION["user"] ?>
                            </p> <a href="#"><i class="fa fa-circle text-success"></i> Online</a> </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">Menú de Navegación</li>
                        <li class="treeview">
                            <a href="../"> <i class="ion ion-android-desktop"></i> <span> Inicio</span> <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span> </a>
                        </li>
                        <li class="treeview">
                            <a href="../materias/"> <i class="ion ion-android-create"></i> <span> Materias</span> <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span> </a>
                        </li>
                        <li class="treeview">
                            <a href="../grados/"> <i class="ion ion-ribbon-b"></i> <span> Grados</span> <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span> </a>
                        </li>
                        <li class="treeview">
                            <a href="../secciones/"> <i class="ion ion-android-home"></i> <span> Secciones</span> <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span> </a>
                        </li>
                        <li class="treeview">
                            <a href="../lapsos/"> <i class="ion ion-easel"></i> <span> Lapsos</span> <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span> </a>
                        </li>
                        <li class="treeview">
                            <a href="../evaluaciones/"> <i class="ion ion-clipboard"></i> <span> Evaluaciones</span> <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span> </a>
                        </li>
                        <li class="treeview active">
                            <a href="../estudiantes/"> <i class="ion ion-android-people"></i> <span> Estudiantes</span> <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span> </a>
                        </li>
                        <li class="treeview">
                            <a href="../profesores/"> <i class="ion ion-android-person"></i> <span> Profesores</span> <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span> </a>
                        </li>
                        <li class="treeview">
                            <a href="../../calendario/"> <i class="ion ion-android-calendar"></i> <span> Eventos</span> <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span> </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
        Administrador
      </h1>
                    <ol class="breadcrumb">
                        <li><a href="../">Inicio</a>
                            <li class="active">Estudiantes</li>
                    </ol>
                </section>
                <br>
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div align="center" class="box-header with-border">
                            <h1 class="box-title">Estudiantes</h1> </div>
                        <!-- /.box-header -->
                        <div class="col-md-12">
                            <form align="left" class="navbar-form navbar-left" method="post" role="search" action="">
                                <div class="form-group">
                                    <input type="text" name="buscar" class="form-control" placeholder="Buscar" required> </div>
                                <button type="submit" class="btn btn-default">&nbsp;<i class="glyphicon glyphicon-search"></i>&nbsp;</button>
                            </form>
                            <!-- Button trigger modal -->
                            <div align="right"> <a data-toggle="modal" href="#myModal" class="margen btn btn-info"><i class="ion ion-plus"></i></a></div>
                            <br>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">Agregar</h4> </div>
                                        <div class="modal-body" align="center">
                                            <form role="form" method="post" action="">
                                                <div class="form-group has-feedback">
                                                    <input type="text" class="form-control" name="cedula" placeholder="Cédula" required> <span class="glyphicon glyphicon-edit form-control-feedback"></span> </div>
                                                <div class="form-group has-feedback">
                                                    <input type="text" class="form-control" name="nombre" placeholder="Nombres" required> <span class="glyphicon glyphicon-edit form-control-feedback"></span> </div>
                                                <div class="form-group has-feedback">
                                                    <input type="text" class="form-control" name="apellido" placeholder="Apellidos" required> <span class="glyphicon glyphicon-edit form-control-feedback"></span> </div>
                                                <div class="form-group has-feedback">
                                                    <input type="text" class="form-control" name="genero" placeholder="Género" required> <span class="glyphicon glyphicon-edit form-control-feedback"></span> </div>
                                                <div class="form-group has-feedback">
                                                    <input type="email" class="form-control" name="email" placeholder="Email" required> <span class="glyphicon glyphicon-edit form-control-feedback"></span> </div>
                                                <div class="form-group has-feedback">
                                                    <input type="date" class="form-control" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" required> <span class="glyphicon glyphicon-edit form-control-feedback"></span> </div>
                                                <div class="form-group has-feedback">
                                                    <input type="text" class="form-control" name="numero_celular" placeholder="Teléfono" required> <span class="glyphicon glyphicon-edit form-control-feedback"></span> </div>
                                                <div class="form-group has-feedback">
                                                    <input type="text" class="form-control" name="fecha_matricula" placeholder="Fecha de Incripción" required> <span class="glyphicon glyphicon-edit form-control-feedback"></span> </div>
                                                <button type="submit" name="enviar" class="btn btn-default"><span class="ion ion-plus"></span> </button>
                                            </form>
                                            <?php if(!empty($_POST['cedula']) and !empty($_POST['nombre'])){
    
            $cedula = $_POST['cedula'];
            $nombres = $_POST['nombre'];
            $apellidos = $_POST['apellido'];
            $genero = $_POST['genero'];
            $email = $_POST['email'];
            $fecha_nacimiento = $_POST['fecha_nacimiento'];
            $numero_celular = $_POST['numero_celular'];
            $fecha_matricula = $_POST['fecha_matricula'];
           
    
            $sql = "INSERT INTO estudiantes(cedula, primer_nombre, segundo_nombre, genero, email, fecha_nacimiento, numero_celular, fecha_matricula) values ('$cedula', '$nombres', '$apellidos', '$genero', '$email', '$fecha_nacimiento', '$numero_celular', '$fecha_matricula')";
    
              $result = $mysqli->query($sql);
    
        	if($result!=null){
				print "<script>alert(\"Agregado Exitosamente.\");window.location='index.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='index.php';</script>";

			}
        

            }?>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                        </div>
                        <div class="box-body">
                            <table id="example1" class="text-center table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Cód</th>
                                        <th>Cédula</th>
                                        <th>Nombre</th>
                                        <th>Género</th>
                                        <th>Email</th>
                                        <th>Fecha de Nacimiento</th>
                                        <th>Teléfono</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                    
                    
                    
                    
                    if(!empty($_POST['buscar'])){
                     $buscar = $_POST['buscar'];
                    
                   $pa=$mysqli->query("SELECT * FROM estudiantes WHERE cedula LIKE '%$buscar%' OR primer_nombre LIKE '%$buscar%' OR segundo_nombre LIKE '%$buscar%' OR genero LIKE '%$buscar%'");	
                        
                        
                        	while($row=$pa->fetch_array()){
							
				  ?>
                                        <tr>
                                            <td>
                                                <?php echo $row['id_estudiante']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['cedula']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['primer_nombre']." ".$row['segundo_nombre']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['genero']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['email']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['fecha_nacimiento']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['numero_celular']; ?>
                                            </td>
                                            <td>
                                                <!-- Button trigger modal --><a data-toggle="modal" href="#myModal<?php echo $row['id_estudiante']; ?>" class="btn btn-warning"><i class="ion ion-edit"></i></a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="myModal<?php echo $row['id_estudiante']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title">Editar</h4> </div>
                                                            <div class="modal-body" align="center">
                                                                <form role="form" method="post" action="edita.php" class="form-horizontal">
                                                                    <div class="form-group">
                                                                        <label for="cedula" class="col-sm-2 control-label">Cédula</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" name="cedula" id="cedula" value="<?php echo $row['cedula']; ?>" readonly> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="nombres" class="col-sm-2 control-label">Nombres</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" name="nombre" id="nombres" value="<?php echo $row['primer_nombre']; ?>" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="apellidos" class="col-sm-2 control-label">Apellidos</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" name="apellido" id="apellidos" value="<?php echo $row['segundo_nombre']; ?>" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="genero" class="col-sm-2 control-label">Género</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" name="genero" value="<?php echo $row['genero']; ?>" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="genero" class="col-sm-2 control-label">Email</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="email" class="form-control" name="email" id="email" value="<?php echo $row['email']; ?>" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="fecha_nacimiento" class="col-sm-2 control-label">Nacimiento</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" value="<?php echo $row['fecha_nacimiento']; ?>" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="numero_celular" class="col-sm-2 control-label">Teléfono</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" name="numero_celular" id="numero_celular" value="<?php echo $row['numero_celular']; ?>" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="fecha_matricula" class="col-sm-2 control-label">Inscripción</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" name="fecha_matricula" id="fecha_matricula" value="<?php echo $row['fecha_matricula']; ?>" required>
                                                                        </div>
                                                                    </div>
                                                                    <button type="submit" name="enviar" class="btn btn-default"><span class="ion ion-edit"></span> </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                                <!-- /.modal -->
                                            </td>
                                            <td> <a class='btn btn-danger' href='elimina.php?id=<?php echo $row[' id_estudiante ']; ?>'><i class="ion ion-trash-a"></i></a> </td>
                                        </tr>
                                        <?php }}else{
                              
                    
                   $pa=$mysqli->query("SELECT * FROM estudiantes");	
                        
                        
                        	while($row=$pa->fetch_array()){
							
				  ?>
                                            <tr>
                                                <td>
                                                    <?php echo $row['id_estudiante']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['cedula']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['primer_nombre']." ".$row['segundo_nombre']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['genero']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['email']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['fecha_nacimiento']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['numero_celular']; ?>
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal --><a data-toggle="modal" href="#myModal<?php echo $row['id_estudiante']; ?>" class="btn btn-warning"><i class="ion ion-edit"></i></a>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="myModal<?php echo $row['id_estudiante']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                    <h4 class="modal-title">Editar</h4> </div>
                                                                <div class="modal-body" align="center">
                                                                    <form role="form" method="post" action="edita.php" class="form-horizontal">
                                                                        <div class="form-group">
                                                                            <label for="cedula" class="col-sm-2 control-label">Cédula</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" class="form-control" name="cedula" id="cedula" value="<?php echo $row['cedula']; ?>" readonly> </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="nombres" class="col-sm-2 control-label">Nombres</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" class="form-control" name="nombre" id="nombres" value="<?php echo $row['primer_nombre']; ?>" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="apellidos" class="col-sm-2 control-label">Apellidos</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" class="form-control" name="apellido" id="apellidos" value="<?php echo $row['segundo_nombre']; ?>" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="genero" class="col-sm-2 control-label">Género</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" class="form-control" name="genero" value="<?php echo $row['genero']; ?>" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="genero" class="col-sm-2 control-label">Email</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="email" class="form-control" name="email" id="email" value="<?php echo $row['email']; ?>" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="fecha_nacimiento" class="col-sm-2 control-label">Nacimiento</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" value="<?php echo $row['fecha_nacimiento']; ?>" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="numero_celular" class="col-sm-2 control-label">Teléfono</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" class="form-control" name="numero_celular" id="numero_celular" value="<?php echo $row['numero_celular']; ?>" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="fecha_matricula" class="col-sm-2 control-label">Inscripción</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" class="form-control" name="fecha_matricula" id="fecha_matricula" value="<?php echo $row['fecha_matricula']; ?>" required>
                                                                            </div>
                                                                        </div>
                                                                        <button type="submit" name="enviar" class="btn btn-default"><span class="ion ion-edit"></span> </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                    <!-- /.modal -->
                                                </td>
                                                <td> <a class='btn btn-danger' href='elimina.php?id=<?php echo $row[' id_estudiante ']; ?>'><i class="ion ion-trash-a"></i></a> </td>
                                            </tr>
                                            <?php }
                        
                    }?>
                                </tbody>
                                <tfoot> </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.box -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs"> <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a> <a class="btn btn-social-icon btn-google"><i class="fa fa-google-plus"></i></a> <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a> <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a> </div> <strong>Copyright &copy; 2017 <a href="#"> Kenia &amp; Ronald</a>.</strong> Derechos Reservados. </footer>
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs"> </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">
                        <h3 class="control-sidebar-heading">Recent Activity</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript:void(0)"> </a>
                            </li>
                        </ul>
                        <!-- /.control-sidebar-menu -->
                        <h3 class="control-sidebar-heading">Tasks Progress</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- /.control-sidebar-menu -->
                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    <!-- Settings tab content -->
                    <div class="tab-pane" id="control-sidebar-settings-tab">
                        <form method="post">
                            <h3 class="control-sidebar-heading">General Settings</h3>
                            <div class="form-group">
                                <label class="control-sidebar-subheading"> Report panel usage
                                    <input type="checkbox" class="pull-right" checked> </label>
                                <p> Some information about this general settings option </p>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label class="control-sidebar-subheading"> Allow mail redirect
                                    <input type="checkbox" class="pull-right" checked> </label>
                                <p> Other sets of options are available </p>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label class="control-sidebar-subheading"> Expose author name in posts
                                    <input type="checkbox" class="pull-right" checked> </label>
                                <p> Allow the user to show his name in blog posts </p>
                            </div>
                            <!-- /.form-group -->
                            <h3 class="control-sidebar-heading">Chat Settings</h3>
                            <div class="form-group">
                                <label class="control-sidebar-subheading"> Show me as online
                                    <input type="checkbox" class="pull-right" checked> </label>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label class="control-sidebar-subheading"> Turn off notifications
                                    <input type="checkbox" class="pull-right"> </label>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label class="control-sidebar-subheading"> Delete chat history <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a> </label>
                            </div>
                            <!-- /.form-group -->
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->
        <!-- jQuery 2.2.3 -->
        <script src="../../../plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.6 -->
        <script src="../../../bootstrap/js/bootstrap.min.js"></script>
        <!-- Morris.js charts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="../../../plugins/morris/morris.min.js"></script>
        <!-- Sparkline -->
        <script src="../../../plugins/sparkline/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="../../../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="../../../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="../../../plugins/knob/jquery.knob.js"></script>
        <!-- daterangepicker -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
        <script src="../../../plugins/daterangepicker/daterangepicker.js"></script>
        <!-- datepicker -->
        <script src="../../../plugins/datepicker/bootstrap-datepicker.js"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="../../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <!-- Slimscroll -->
        <script src="../../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="../../../plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="../../../dist/js/app.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="../../../dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../../../dist/js/demo.js"></script>
    </body>

    </html>