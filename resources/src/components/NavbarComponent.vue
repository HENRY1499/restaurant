<template>
    <div >
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <router-link to="/dashboard">Inicio</router-link>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <router-link to="/dashboard/platos">Platos</router-link>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <router-link to="/bebidas">Bebidas</router-link>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <router-link to="/estados">Estado</router-link>
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
</template>

<script>
export default {
    
}
</script>