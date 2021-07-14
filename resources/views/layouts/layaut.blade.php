<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Historial | Medico </title>
    <link rel="shortcut icon" type="image/png" href="favicon.ico">
    <!-- Select2 -->
    <!--<link media="all" type="text/css" rel="stylesheet" href="assets/lib/css/select2.min.css">-->
    <!--Toastr -->
    <link media="all" type="text/css" rel="stylesheet" href="assets/lib/css/toastr.css">
    <link media="all" type="text/css" rel="stylesheet" href="assets/lib/css/dropzone.css">
    <link media="all" type="text/css" rel="stylesheet" href="assets/lib/css/new_style.css">
    <link media="all" type="text/css" rel="stylesheet" href="assets/lib/css/custom_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link media="all" type="text/css" rel="stylesheet" href="http://digital:81/siseg/public/dist/css/icons/font-awesome/css/fontawesome.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


</head>
<body>

   <div class="preloader" style="display: none;">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="mini-sidebar" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full" class="">
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin4">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <a class="navbar-brand" href="{{route('index')}}">
                        <b class="logo-icon">
                            <strong><font color="#FFF">SHC</font></strong>
                        </b>
                        <span class="logo-text">
                               <strong><font color="#FFF">- CREO</font></strong>
                        </span>
                    </a>
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light border border-dark" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div> <!--end logo-->


                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                                <i class="fas fa-align-left"></i>
                            </a>
                        </li>
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                                Bienvenido | José Ariel Muñiz Cedillo
                            </a>
                        </li>
                    </ul> <!--elementos a lado izquierdo-->

                    <ul class="navbar-nav float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="images/1.jpg" class="rounded-circle" width="40" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow">
                                    <span class="bg-primary"></span>
                                </span>
                                <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                    <div class="">
                                        <img src="images/1.jpg" class="img-circle" width="60" alt="">
                                    </div>
                                    <div class="m-l-10">
                                        <h4 class="m-b-0"> Jose Ariel Muñiz Cedillo</h4>
                                        <p class=" m-b-0">  Auxiliar</p>
                                    </div>
                                </div>

                                <a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout_form').submit();">
                                    <i class="fa fa-power-off m-r-5 m-l-5"></i> Salir
                                </a>
                                <form action="{{route('logout')}}" id="logout_form" method="POST" style="display: none;">
                                    {{csrf_field()}}
                                    <!--<input type="hidden" name="_token" value="NYCmniLU2pYmvlSSAlmxv3xLMVJkmceISWBj1yLh">-->
                                </form>
                            </div>
                        </li>

                    </ul><!--elementos a lado izquierdo-->
                </div>
            </nav>
        </header><!--end header-->


    <aside class="left-sidebar" data-sidebarbg="skin4">
        <div class="scroll-sidebar ps-container ps-theme-default" data-ps-id="dc66c51c-33e8-855b-59af-238c5d94f52b">
            <nav class="sidebar-nav">
                <ul id="sidebarnav" class="in">

                    <!--<li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="fas fa-layer-group"></i><span class="hide-menu">Inventario Creo</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">
                                    <i class="fas fa-desktop"></i> <span class="hide-menu">Control De Computo</span>
                                </a>
                            </li>

                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">
                                    <i class="fas fa-server"></i> <span class="hide-menu">Control De Perifericos</span>
                                </a>
                            </li>

                        </ul>
                    </li>-->

                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="fas fa-file-medical"></i><span class="hide-menu">Nuevo Paciente</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="{{route('paciente')}}" class="sidebar-link">
                                    <i class="fas fa-user-plus"></i> <span class="hide-menu">Paciente</span>
                                </a>
                            </li>

                            <!--<li class="sidebar-item">
                                <a href="#" class="sidebar-link">
                                    <i class="fas fa-file-alt"></i> <span class="hide-menu">Consultar</span>
                                </a>
                            </li>-->

                        </ul><!-- Fin primer nivel -->
                    </li> <!-- Fin Inventario -->



                    <!--<li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="fas fa-file"></i><span class="hide-menu">Control De Formatos</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">
                                        <i class="fas fa-file-archive"></i><span class="hide-menu">Formatos</span>
                                    </a>
                                </li>
                            </ul>
                    </li>-->
                </ul>
            </nav>
            <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div>
        </div>
    </aside>

    <div class="contenido">
        @yield("Contenido")

    </div>
   </div> <!--End Wrapper-->
    <script src="assets/lib/js/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/lib/js/popper.min.js"></script>
    <script src="assets/lib/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="assets/lib/js/app.min.js"></script>
    <script src="assets/lib/js/app.init.mini-sidebar.js"></script>
    <script src="assets/lib/js/app-style-switcher.js"></script>
    <!-- Select2 -->
    <!--<script src="assets/lib/js/select2.full.min.js"></script>
    <script src="assets/lib/js/select2.min.js"></script>-->
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/lib/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/lib/js/sparkline.js"></script>
    <!--Toastr -->
    <script src="assets/lib/js/toastr.js"></script>
    <!--Wave Effects -->
    <script src="assets/lib/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="assets/lib/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="assets/lib/js/custom.min.js"></script>
    <!-- Dropzone -->
    <script src="assets/lib/js/dropzone.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script >
      $('.toastrDefaultError').click(function() {
      toastr.error('Error Verifica que los campos sean correctos.')
    });
    </script>



</body>
</html>