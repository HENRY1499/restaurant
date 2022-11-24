<template>
    <div>
        <div style="width:calc(100% - 30px); margin:0 auto;" class="row">
                <h1 class="text-center">Reservas</h1>
                <hr>
                <!-- Botones -->
                <div>
                    <router-link :to="{name:'crearReservas'}" class="btn btn-success">Crear</router-link>
                </div>
            <hr class="mt-3">
                <!-- Tabla -->
                <div>
                    <div class="row">
                        <table id="plato" class="table table-striped" style="width:100%">
                            <thead class="bg-success text-center">
                                <tr>
                                    <th>Id</th>
                                    <th>Hora</th>
                                    <th>Fecha</th>
                                    <th>Comentario</th>
                                    <th>Invitados</th>
                                    <th>id_cliente</th>
                                    <th>id_mesa</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr v-for="reserva in reservas" :key="reserva.id">
                                <td>{{reserva.id}}</td>
                                <td>{{reserva.hora}}</td>
                                <td>{{reserva.fecha}}</td>
                                <td>{{reserva.comentario}}</td>
                                <td>{{reserva.invitados}}</td>
                                <td>{{reserva.cliente.nombres}}</td>
                                <td>{{reserva.mesa.numero}}</td>
                                <td>
                                    <!-- <router-link class="btn btn-primary" :to="{name:'editarReservas',params:{id:reserva.id}}">Editar</router-link> -->
                                    <div class="btn btn-danger ml-2" @click.prevent="remove(reserva.id)">Eliminar</div>
                                </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
        
    </div>
</template>
<script>
export default{
    name:'reservas',
    data(){
        return{
            reservas:[]
        }
    },
    mounted(){
        this.getReservas()
    },
    methods:{
        async getReservas(){
            await this.axios.get(`/api/reserva`)
            .then(resp=>{
                console.log("getreservas:",resp.data)
                this.reservas=resp.data.reserva
            })
            .catch(e=>{
                this.platos=[]
            })
        },
        async remove(id){
            if(confirm("¿Estas seguro de eliminar esta reserva?")){
            await this.axios.delete(`api/reservas/delete/${id}`)
            .then(res=>{
                    this.getReservas()
            })
            .catch(err=>{
                console.log("error al eliminar el reservas",err.response)
            })
        }
    }
}
}
</script>