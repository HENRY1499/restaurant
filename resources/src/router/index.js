import { createRouter, createWebHistory } from 'vue-router'


// components
import InicioComponent from '../components/InicioComponent.vue';
import PlatosComponent from '../components/PlatosComponent.vue';
import BebidasComponent from '../components/BebidasComponent.vue';
import EstadoComponent from '../components/EstadoComponent.vue';
import MenuComponent from '../components/MenuComponent.vue';
import MesasComponent from '../components/MesasComponent.vue';
import ReservasComponent from '../components/ReservasComponent.vue';
import UsuariosComponent from '../components/UsuariosComponent.vue';

const routes = [

    {
        path: '/dashboard',
        name: "Inicio",
        component: InicioComponent
    },
    {
        path: '/dashboard/platos',
        name: "Platos",
        component: PlatosComponent
    },
    {
        path: '/bebidas',
        name: "Bebidas",
        component: BebidasComponent
    },
    {
        path: '/estado',
        name: "Estados",
        component: EstadoComponent
    },
    {
        path: '/menu',
        name: "Menu",
        component: MenuComponent
    },
    {
        path: '/mesas',
        name: "Mesas",
        component: MesasComponent
    },
    {
        path: '/reservas',
        name: "Reservas",
        component: ReservasComponent
    },
    {
        path: '/usuarios',
        name: "Usuarios",
        component: UsuariosComponent
    },
    {
        path: '/platos',
        name: "Platos",
        component: PlatosComponent
    },

]

const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router