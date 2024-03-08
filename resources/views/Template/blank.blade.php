<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title', 'Bolão F1 Pederneiras')</title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="/img/F1.svg" style="width: 6rem;"/>
                </div>
                <div class="sidebar-brand-text">PEDERNEIRAS</div>
            </a>

             <!-- Divider -->
             <hr class="sidebar-divider my-0">

             <!-- Nav Item - Drivers -->
             <li class="nav-item active">
                 <a class="nav-link" href="../pilotos">
                     <i class="fas fa-fw fa-user"></i>
                     <span>Pilotos 2024</span></a>
             </li>
             
             <!-- Nav Item - Schedule -->
             <li class="nav-item active">
                 <a class="nav-link" href="../corridas">
                     <i class="fas fa-fw fa-calendar"></i>
                     <span>Calendario 2024</span></a>
             </li>
 
             <!-- Nav Item - Send Guess -->
             <li class="nav-item active">
                 <a class="nav-link" href="index.html">
                     <i class="fas fa-fw fa-tachometer-alt"></i>
                     <span>Enviar Palpite</span></a>
             </li>
 
             <!-- Nav Item - See others guesses -->
             <li class="nav-item active">
                 <a class="nav-link" href="../palpites">
                     <i class="fas fa-fw fa-chart-area"></i>
                     <span>Visualizar Palpites</span></a>
             </li>
 
             <!-- Nav Item - race result -->
             <li class="nav-item active">
                 <a class="nav-link" href="../resultados">
                     <i class="fas fa-fw fa-check-square"></i>
                     <span>Resultado Etapa</span></a>
             </li>
 
             <!-- Nav Item - Rank -->
             <li class="nav-item active">
                 <a class="nav-link" href="../rank">
                     <i class="fas fa-fw fa-list"></i>
                     <span>Ranking Geral</span></a>
             </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @yield('contents')
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; all rights reserved, 2024</span>
                    </div>
                </div>
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

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Custom side bar toogle -->
    <script>
        // Espera que o documento esteja completamente carregado
        document.addEventListener('DOMContentLoaded', function () {
            // Seleciona o botão de alternância da barra lateral
            const sidebarToggleBtn = document.getElementById('sidebarToggle');
            // Seleciona a barra lateral
            const sidebar = document.getElementById('accordionSidebar');

            // Adiciona um ouvinte de eventos de clique ao botão de alternância da barra lateral
            sidebarToggleBtn.addEventListener('click', function () {
                // Alterna a classe 'sidebar-toggled' na barra lateral
                sidebar.classList.toggle('sidebar-toggled');

                // Se a barra lateral tiver a classe 'sidebar-toggled', adiciona a classe 'toggled' também
                if (sidebar.classList.contains('sidebar-toggled')) {
                    sidebar.classList.add('toggled');
                } else {
                    // Caso contrário, remove a classe 'toggled'
                    sidebar.classList.remove('toggled');
                }
            });
        });
    </script>
</body>

</html>