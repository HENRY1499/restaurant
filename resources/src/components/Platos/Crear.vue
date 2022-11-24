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
                        <h4>Crear Nuevo Plato</h4>
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="postCrear" >
                            
                                    <div class="__input" >
                                        <div class="row">
                                            <div class="col-6" style="width:auto; height: auto; margin: 2px;" >
                                                <div >
                                                    <figure>
                                                        <img width="200" height="200" :src="imagen" alt="Foto del plato">
                                                    </figure>
                                                    <div class="form-group">
                                                        <input type="file" class="form-control" @change="obtenerImagen" placeholder="Imagen">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" v-model="platos.nombre" placeholder="Nombre">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6" style="width:auto; height: auto; margin: 2px;" >
                                                <div class="form-group">
                                                    <input type="text" class="form-control" v-model="platos.descripcion" placeholder="Descripción">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" v-model="platos.precio" placeholder="Precio">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <button type="submit" class="btn btn-success">Agregar</button>
                                                <router-link class="btn btn-primary" to="/platos">Cancelar</router-link>
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
   name:"platos",
   data(){
    return{
        imagenMiniatura:'',
        platos:{
            imagen:'',
            nombre:'',
            descripcion:'',
            precio:''
        }
        }
    },

    methods: {
      async postCrear(){
        let formData= new FormData();
        formData.append('imagen',this.platos.imagen)
        formData.append('nombre',this.platos.nombre)
        formData.append('descripcion',this.platos.descripcion)
        formData.append('precio',this.platos.precio)
        await this.axios.post('/api/plato/store', formData)
            .then(resp=>{
                console.log(resp.data)

                this.$router.push({name:"Platos"})
            })
            .catch(e=>{
                console.log(e.response.data.message)
            })
        },
        async obtenerImagen(e){
            let file= e.target.files[0];
            console.log(file)
            this.platos.imagen=file;
            this.cargarImagen(file);
        },
        async cargarImagen(file){
            let reader=new FileReader();
            reader.onload=(e)=>{
                this.imagenMiniatura=e.target.result;
            }
            reader.readAsDataURL(file)
        }
    },
    computed:{
        imagen(){
            return this.imagenMiniatura;
        }
    }
   }   

</script>

