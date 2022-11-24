<style scoped>
    .card{
        display: flex;
        justify-content: center;
        align-content: center;
        position: relative;
        background-color: #fff;
        margin: 5vh;
        max-width: calc(50% - 250px);
        margin: 0 auto;  
    }
    .__input{
        display: flex;
        justify-content: c;
    }
    input[type="text"]{ 
       border: 2px solid rgba(112, 112, 112, 0.4);
    }
    
</style>
<template>
    <div class="m-2">
        <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h4>Editar Nuevo Estado</h4>
                    </div>
                    <div class="card-body">
                        <form method="PUT" @submit.prevent="actualizar" >
                            
                                    <div class="__input" >
                                        <div class="row">
                                            <div class="col-6" style="width:auto; height: auto; margin: 2px;" >
                                                <div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" v-model="estados.estado" placeholder="Estados">
                                                    </div>                                            
                                                </div>
                                            </div>                                           
                                            <div class="col-6">
                                                <button type="submit" class="btn btn-success">Editar</button>
                                                <router-link class="btn btn-primary" to="/estado">Cancelar</router-link>
                                            </div>
                                        </div>
                                    </div>    
                            
                        </form>
                    </div>
                    <div class="card-footer" disable>
                    </div>
                </div>
                </div>
            </div>
</template>
<script>

export default {
   name:"created-estados",
   data(){
    return{
        estados:{
            estado:''
        }
        }
    },
    mounted(){
        this.mostrar()
    },
    methods: {
      async mostrar(){
           await this.axios.get(`/api/estados/show/${this.$route.params.id}`)
            .then(resp=>{
                console.log("getestados:",resp.data)
                this.estados=resp.data
            })
            .catch(e=>{
                console.log(e.response)
            })
        },
        async actualizar(){
            await this.axios.put(`/api/estados/actualizar/${this.$route.params.id}`,this.estados)
            .then(resp=>{
               this.$router.push({name:"Estados"})
            })
            .catch(e=>{
                console.log("algo salio mal :",e.response)
            })
        }
    },
   }   

</script>

