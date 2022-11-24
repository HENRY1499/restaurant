import { createRouter, createWebHistory } from 'vue-router'


// components
import InicioComponent from '../components/InicioComponent.vue';
import EstadoComponent from '../components/EstadoComponent.vue';
import MenuComponent from '../components/MenuComponent.vue';
import MesasComponent from '../components/MesasComponent.vue';
import ReservasComponent from '../components/ReservasComponent.vue';
import UsuariosComponent from '../components/UsuariosComponent.vue';
// Platos
import PlatosComponent from '../components/PlatosComponent.vue';
import CrearPlato from '../components/Platos/Crear.vue';
import EditarPlato from '../components/Platos/Editar.vue';
// Estado
import CrearEstado from '../components/Estado/Crear.vue';
import EditarEstado from '../components/Estado/Editar.vue';
// Reserva 
import CrearReservas from '../components/Reservas/Crear.vue';
import EditarReservas from '../components/Reservas/Editar.vue';
const routes = [

    {
        path: '/inicio',
        name: "Inicio",
        component: InicioComponent
    },
    // platos
    {
        path: '/platos',
        name: "Platos",
        component: PlatosComponent
    },
    {
        path: '/crear',
        name: "crearPlatos",
        component: CrearPlato
    },
    {
        path: '/editar/:id',
        name: "editarPlatos",
        component: EditarPlato
    },

    // Estado
    {
        path: '/estado',
        name: "Estados",
        component: EstadoComponent
    },
    {
        path: '/crear',
        name: "crearEstado",
        component: CrearEstado
    },
    {
        path: '/editar/:id',
        name: "editarEstados",
        component: EditarEstado
    },
    // Menu
    {
        path: '/menu',
        name: "Menu",
        component: MenuComponent
    },
    // Mesas
    {
        path: '/mesas',
        name: "Mesas",
        component: MesasComponent
    },
    // Reserva
    {
        path: '/reservas',
        name: "Reservas",
        component: ReservasComponent
    },
    {
        path: '/crearReservas',
        name: "crearReservas",
        component: CrearReservas
    },
    {
        path: '/editarReservas/:id',
        name: "editarReservas",
        component: EditarReservas
    },
    // Usuarios
    {
        path: '/usuarios',
        name: "Usuarios",
        component: UsuariosComponent
    },


]

const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router