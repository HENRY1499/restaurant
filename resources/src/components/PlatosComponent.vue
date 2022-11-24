<template>
    <div>
        <div style="width:calc(100% - 30px); margin:0 auto;" class="row">
                <h1 class="text-center">Platos</h1>
                <hr>
                <!-- Botones -->
                <div>
                    <router-link :to="{name:'crearPlatos'}" class="btn btn-success">Crear</router-link>
                </div>
            <hr class="mt-3">
                <!-- Tabla -->
                <div>
                    <div class="row">
                        <table id="plato" class="table table-striped" style="width:100%">
                            <thead class="bg-success text-center">
                                <tr>
                                    <th>Id</th>
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Precio</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr v-for="plato in platos" :key="plato.id">
                                <td>{{plato.id}}</td>
                                <td>{{plato.imagen}}</td>
                                <td>{{plato.nombre}}</td>
                                <td>{{plato.descripcion}}</td>
                                <td>{{plato.precio}}</td>
                                <td>
                                    <router-link class="btn btn-primary" :to="{name:'editarPlatos',params:{id:plato.id}}">Editar</router-link>
                                    <div class="btn btn-danger ml-2" @click.prevent="remove(plato.id)">Eliminar</div>
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

export default {
    name:'com_plato',
    data(){
        return{
            platos:[]
        }
    },
    mounted(){
        this.getPlato()    
    },
    methods:{
        async getPlato(){
           await this.axios.get(`/api/platos`)
            .then(resp=>{
                console.log('getplato:',resp.data)
                this.platos=resp.data.platos
            })
            .catch(e=>{
                this.platos=[]
            })
        },
        async remove(id){
            if(confirm("¿Estas seguro de eliminar este estado?")){
            await this.axios.delete(`api/plato/delete/${id}`)
            .then(res=>{
                    this.getPlato()
            })
            .catch(err=>{
                console.log("error al eliminar el plato",err.response)
            })
        }
        }
    }
}
</script>
<style>
.row{
    --bs-gutter-x: 0 !important;
}
</style>
