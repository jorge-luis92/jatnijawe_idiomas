<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
    <link rel="shortcut icon" href="{{asset('logo.ico')}}">
  <!-- Custom fonts for this template-->
  <link href="requisitos/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/nuevo.css">
  <title>Estudiante @yield('title')</title>

</head>

<body id="page-top">
  <div id="wrapper" ><!-- Sidebar -->
    <ul class="navbar-nav  sidebar sidebar-dark" style="background-color: #0B173B; font-size: 1.0em;" id="accordionSidebar" ><!-- Sidebar - Brand -->
          <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href={{ route('home_estudiante')}}>
          <i class="fas fa-home" style="font-size: 30px"></i><span style="font-size: 1.9em">Jat Nijawe</span></a></li><!-- Divider -->
      <hr class="sidebar-divider" style=" background-color: #FFFFFF;"><!-- Heading -->
      <div class="sidebar-heading" style="color: blue">
        Servicios
      </div><!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-upload"></i><span style="font-size: 1.0em;">&nbsp;Actualización de</br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Datos</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" style="color: blue">Opciones:</h6>
            <a class="collapse-item" data-toggle="modal" href="#datos_generales_uno"  aria-haspopup="true" aria-expanded="false">Datos Generales</a>
            <a class="collapse-item" data-toggle="modal" href="#datos_personales_dos" aria-haspopup="true" aria-expanded="false">Datos Personales</a>
            <a class="collapse-item" data-toggle="modal" href="#datos_laborales_tres" aria-haspopup="true" aria-expanded="false">Datos Laborales</a>
            <a class="collapse-item" data-toggle="modal" href="#datos_medicos_cuatro" aria-haspopup="true" aria-expanded="false">Datos Médicos</a>
            <a class="collapse-item" data-toggle="modal" href="#des_hoja" aria-haspopup="true" aria-expanded="false">Descargar Hoja de Datos </br> Personales</a>

          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fa fa-list"></i><span style="font-size: 1.0em;">&nbsp;Formación Integral</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header" style="color: blue">Opciones:</h6>
            <a  class="collapse-item" href="#">Convocatoria</a>
            <a  class="collapse-item" href="#">Mis Actividades </br> Extraescolares</a>
            <a  class="collapse-item" href="#">Avance de Horas</a>
            <a  class="collapse-item" href="#">Solicitud Actividades </br> Extraescolares</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block" style=" background-color: #FFFFFF;">      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul> <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column" style="background-image: url('image/logos.png'); background-color: #FFFFFF;"> <!-- Main Content -->
      <div id="content" style="padding: 2.2rem;" > <!-- Topbar -->
        <div class="container">

          <nav class="navbar" style="opacity: 0.7;filter:alpha(opacity=5);background-color: #819FF7;">
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand"  style="color: #000000">
            <img src="logo.ico" width="30" height="30" class="d-inline-block align-top" alt="">
            Facultad de Idiomas
          </a>
          <ul class="navbar-nav mr-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span style="color: #000000">Mi Perfil &nbsp;</span>
                <img class="img-profile rounded-circle" style="width:30px; height: 30px;" src="image/foto.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-black-400"></i>
                  Configuración
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-black-400"></i>
                  Cerrar Sesión
                </a>
              </div>
            </li>

          </ul>
  </nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="opacity: 0.7;filter:alpha(opacity=5);background-color: #819FF7;">

          <!-- Topbar Navbar -->
          <ul class="navbar-nav mr-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span style="color: #000000">Mi Perfil &nbsp;</span>
                <img class="img-profile rounded-circle" style="width:30px; height: 30px;" src="image/foto.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-black-400"></i>
                  Configuración
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-black-400"></i>
                  Cerrar Sesión
                </a>
              </div>
            </li>

          </ul>
                  </nav>
                </div>
        <!-- End of Topbar -->
@yield('seccion')
      </div>

      <!-- Footer -->
      <footer class="container-fluid text-center" style="background-color: #58ACFA; border-radius: 14px 14px 14px 14px;-moz-border-radius: 14px 14px 14px 14px;-webkit-border-radius: 14px 14px 14px 14px;border: 0px solid #000000;" >
  <p style="color: black">Av. Universidad S/N. Ex-Hacienda 5 Señores, Oaxaca, Méx. C.P. 68120 </br>Copyright &copy; <a style="color: white">Facultad de Idiomas</a> <?php $anio= date("Y"); echo $anio?>. Todos los derechos reservados.</p>

  </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿Desea cerrar Sesión?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Presione "Finalizar Sesión" para confirmar.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="login.html">Finalizar Sesión</a>
        </div>
      </div>
    </div>
  </div>



  <!-- Bootstrap core JavaScript-->
  <script src="requisitos/jquery/jquery.min.js"></script>
  <script src="requisitos/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="requisitos/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="requisitos/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>


</body>

</html>
