<template>
 <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">
                        <p>Inicio</p>
                    </a>
                </li>
            </ul>


        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="{{asset('admin/img/Nike.png')}}" alt="Doña Pitty" class="brand-image img-circle elevation-3" style="opacity: 0.8">
                <span class="brand-text font-weight-light">Doña Pitty</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('admin/img/Nike.png')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Henry Daniel</a>
                    </div>
                </div>
                <div >
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <router-link to="/inicio">Inicio</router-link>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <router-link to="/platos">Platos</router-link>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <router-link to="/estado">Estado</router-link>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <router-link to="/menus">Menú</router-link>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <router-link to="/mesas">Mesas</router-link>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <router-link to="/reservas">Reservas</router-link>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <router-link to="/usuarios">Usuarios</router-link>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('user.logout')}}" class="nav-link">
                    <p>Salir</p>
                </a>
            </li>
        </ul>   
    </div>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <router-view></router-view>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2022 <a href="#">Doña Pitty</a>.</strong> Todos los derechos reservados.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
 
</template>

<script setup>


</script>
