<?php 

include_once("../session.php");

session_start();
if(!isset($_SESSION["user"])){
  header("location:../acces/");
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrador | Panel de Control</title>
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
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../../plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  
  <link rel="stylesheet" href="../../dist/js/pushjs/push.min.js">
  
  <link rel="icon" type="image/png" sizes="32x32" href="../../dist/img/profile.png">
  
    <style>
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
  <script>
   Push.create('Hello World!');
       </script>
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>IEA</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>IEA</b>ragua</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">MENÚ</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../../dist/img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION["user"] ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../../dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION["user"]?> - <?php echo $_SESSION["rol"]?>
                  <small>
                    <?php
                        $hoy = getdate();
                        print_r($hoy["mday"]."/".$hoy["mon"]."/".$hoy["year"]);
                        ?>
                    </small>
                  </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-12 text-center">
                    <a href="#">¡Bienvenido al Sistema del IEAragua!</a>
                  </div>
                
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
              
                <div align="center" >
                  <a href="../acces/logout.php" class="btn btn-default btn-flat">Cerrar Sesión</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
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
        <div class="pull-left image">
          <img src="../../dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION["user"] ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
 
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Menú de Navegación</li>
          <li class="treeview active">
          <a href="">
            <i class="ion ion-android-desktop"></i> <span> Inicio</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          </li>
          <li class="treeview">
          <a href="materias/">
            <i class="ion ion-android-create"></i> <span> Materias</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          </li>
          
              <li class="treeview">
          <a href="grados/">
            <i class="ion ion-ribbon-b"></i> <span> Grados</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          </li>
          
              <li class="treeview">
          <a href="secciones/">
            <i class="ion ion-android-home"></i> <span> Secciones</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          </li>
          
              <li class="treeview">
          <a href="lapsos/">
            <i class="ion ion-easel"></i> <span> Lapsos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          </li>
          
              <li class="treeview">
          <a href="evaluaciones/">
            <i class="ion ion-clipboard"></i> <span> Evaluaciones</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          </li>
          
              <li class="treeview">
          <a href="estudiantes/">
            <i class="ion ion-android-people"></i> <span> Estudiantes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          </li>
          
              <li class="treeview">
          <a href="profesores/">
            <i class="ion ion-android-person"></i> <span> Profesores</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          </li>
          
              <li class="treeview">
          <a href="../calendario/">
            <i class="ion ion-android-calendar"></i> <span> Eventos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
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
        <small>Inicio</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active">Inicio</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-12 col-sm-4">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
             
             <?php  


            $sql = "SELECT count(id_materia)as numero FROM materias";
    
              $result = $mysqli->query($sql);
              
            if($row=$result->fetch_array()){
                
                echo '<h3>'.$row['numero'].'</h3>';
                
				}

                ?>
               <p>Materias</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-create"></i>
            </div>
            <a href="materias/" class="small-box-footer">Ver más <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
         <div class="col-lg-4 col-xs-12 col-sm-4">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
             
             <?php  


            $sql = "SELECT count(id_grado)as numero FROM grados";
    
              $result = $mysqli->query($sql);
              
            if($row=$result->fetch_array()){
                
                echo '<h3>'.$row['numero'].'</h3>';
                
				}

                ?>
               <p>Grados</p>
            </div>
            <div class="icon">
              <i class="ion ion-ribbon-b"></i>
            </div>
            <a href="grados/" class="small-box-footer">Ver más <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
        <div class="col-lg-4 col-xs-12 col-sm-4">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
             
             <?php  


            $sql = "SELECT count(id_seccion)as numero FROM secciones";
    
              $result = $mysqli->query($sql);
              
            if($row=$result->fetch_array()){
                
                echo '<h3>'.$row['numero'].'</h3>';
                
				}

                ?>
               <p>Secciones</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-home"></i>
            </div>
            <a href="secciones/" class="small-box-footer">Ver más <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
             
        <div class="col-lg-4 col-xs-12 col-sm-4">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
             
             <?php  


            $sql = "SELECT count(id_lapso)as numero FROM lapsos";
    
              $result = $mysqli->query($sql);
              
            if($row=$result->fetch_array()){
                
                echo '<h3>'.$row['numero'].'</h3>';
                
				}

                ?>
               <p>Lapsos</p>
            </div>
            <div class="icon">
              <i class="ion ion-easel"></i>
            </div>
            <a href="lapsos/" class="small-box-footer">Ver más <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
            <div class="col-lg-4 col-xs-12 col-sm-4">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
             
             <?php  


            $sql = "SELECT count(id_evaluacion)as numero FROM evaluaciones";
    
              $result = $mysqli->query($sql);
              
            if($row=$result->fetch_array()){
                
                echo '<h3>'.$row['numero'].'</h3>';
                
				}

                ?>
               <p>Evaluaciones</p>
            </div>
            <div class="icon">
              <i class="ion ion-clipboard"></i>
            </div>
            <a href="evaluaciones/" class="small-box-footer">Ver más <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
           <div class="col-lg-4 col-xs-12 col-sm-4">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
             
             <?php  


            $sql = "SELECT count(id_estudiante)as numero FROM estudiantes";
    
              $result = $mysqli->query($sql);
              
            if($row=$result->fetch_array()){
                
                echo '<h3>'.$row['numero'].'</h3>';
                
				}

                ?>
               <p>Estudiantes</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-people"></i>
            </div>
            <a href="estudiantes/" class="small-box-footer">Ver más <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
          <div class="col-lg-4 col-xs-12 col-sm-4">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
             
             <?php  


            $sql = "SELECT count(id_usuario)as numero FROM usuarios";
    
              $result = $mysqli->query($sql);
              
            if($row=$result->fetch_array()){
                
                echo '<h3>'.$row['numero'].'</h3>';
                
				}

                ?>
               <p>Profesores</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-person"></i>
            </div>
            <a href="profesores/" class="small-box-footer">Ver más <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
        
          <div class="col-lg-4 col-xs-12 col-sm-4">
          <!-- small box -->
          <div class="small-box bg-olive">
            <div class="inner">
             
             <?php  


            $sql = "SELECT count(id)as numero FROM eventos";
    
              $result = $mysqli->query($sql);
              
            if($row=$result->fetch_array()){
                
                echo '<h3>'.$row['numero'].'</h3>';
                
				}

                ?>
               <p>Eventos</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-calendar"></i>
            </div>
            <a href="../calendario/" class="small-box-footer">Ver más <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
        <div class="col-lg-4 col-xs-12 col-sm-4">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
             
             <?php  


            $sql = "SELECT count(id_nota)as numero FROM notas";
    
              $result = $mysqli->query($sql);
              
            if($row=$result->fetch_array()){
                
                echo '<h3>'.$row['numero'].'</h3>';
                
				}

                ?>
               <p>Notas</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-list"></i>
            </div>
            <a href="#" class="small-box-footer">Ver más <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
    
      </div>
      <!-- /.row -->
      
       <div class="col-md-12">
       
       
       
       
       
       </div>
      </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    
                
                <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                <a class="btn btn-social-icon btn-google"><i class="fa fa-google-plus"></i></a>
                <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                
    
    </div>
    <strong>Copyright &copy; 2017 <a href="#"> Kenia &amp; Ronald</a>.</strong> Derechos Reservados.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
     
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              
            </a>
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
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
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
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="../../plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="../../plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
