<template>
    <div>
        <div style="width:calc(100% - 30px); margin:0 auto;" class="row">
                <h1 class="text-center">Estado</h1>
                <hr>
                <!-- Botones -->
                <div>
                    <router-link :to="{name:'crearEstado'}" class="btn btn-success">Crear</router-link>
                </div>
            <hr class="mt-3">
                <!-- Tabla -->
                <div>
                    <div class="row">
                        <table id="plato" class="table table-striped" style="width:100%">
                            <thead class="bg-success">
                                <tr class="text-center">
                               
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr v-for="state in estados" :key="state.id">
                                
                                <td>{{state.estado}}</td>
                                <td>
                                    <router-link class="btn btn-primary" :to="{name:'editarEstados',params:{id:state.id}}">Editar</router-link>
                                    <div class="btn btn-danger ml-2" @click.prevent="eliminar(state.id)">Eliminar</div>
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
    name:'estado',
    data(){
        return{
            estados:[]
        }
    },
    mounted(){
      this.getEstado()  
    },
    methods: {
        async getEstado(){
            await this.axios.get('/api/estado')
            .then(resp=>{
                console.log(resp.data)
                this.estados=resp.data.estado
            })
            .catch(e=>{
                 this.platos=[]
            })
        },
        async eliminar(id){
            if(confirm("¿Estas seguro de eliminar este estado?")){
                await this.axios.delete(`/api/estados/delete/${id}`)
                .then(resp=>{
                  this.getEstado()
                })
                .catch(e=>{
                    console.log(e.response)
                })
                this.getEstado
            }
        }
    },
}
</script>