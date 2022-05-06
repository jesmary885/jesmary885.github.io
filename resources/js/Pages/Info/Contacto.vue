<script>
import { Inertia } from '@inertiajs/inertia';




export default {
   // components:{
      //  Inertia,
    //},
    //mounted(){
        // if(!errors){
        //         this.form = '';
        //     }
        // console.log(Inertia.page.props.errors.nombre);
    //},
    data(){
        return{
            form:{
                nombre: '',
                telefono: '',
                correo: '',
                mensaje: '',
            }
        }
    },
    props:{
         errors:Object,
    },
    methods:{
        submit(){
            
            this.$inertia.post(this.route('sendMail'),this.form)
            this.form = '';
          //
         
        }
    }
    
}

</script>


<template>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 bg-black px-4 py-8">
           

                <div>
                    <figure class="w-full text-center">
                 
                        <div class="m-0">
                            <img class="object-cover inline h-40" src="/img/img_footer2.jpg" alt="">
                        </div>
                    </figure>

                    <div class="w-full text-center">
                        <div class="flex mt-4 justify-center">
                            <i class="fas fa-phone-alt text-xl text-gray-100 mt-2 inline"></i>
                            <p class="text-gray-100 ml-2 font-semibold mt-2 ">
                                58-04141929280
                            </p>
                        </div>
                        <div class="flex mt-1 justify-center">
                            <i class="fas fa-location-arrow text-xl text-gray-100 mt-2 inline"></i>
                            <p class="text-gray-100 ml-2 font-semibold mt-2 ">
                                El Tigre, Edo. Anzoátegui. Venezuela
                            </p>
                        </div>
                        <div class="flex mt-1 justify-center">
                            <i class="far fa-envelope-open text-xl text-gray-100 mt-2 inline"></i>
                            <p class="text-gray-100 ml-2 font-semibold mt-2 ">
                                jesmary885@gmail.com
                            </p>
                        </div>
                    </div>

                    <div class="w-full mt-8 text-center ">
                            <p class=" text-gray-100 mb-4 font-semibold">REDES SOCIALES</p>
                            <div class="flex p-4 justify-center">
                                 <a href="https://www.instagram.com/jesmary_carneiro/" target="_blank"><i class="fab fa-instagram text-xl text-gray-100 inline mr-4"></i></a>
                                    <a href="https://www.facebook.com/jesmary.carneiro" target="_blank"><i class="fab fa-facebook-f text-xl text-gray-100 inline mr-4"></i></a>
                                    <a href="https://www.linkedin.com/in/jesmary-carneiro-62bab71b8/" target="_blank"><i class="fab fa-linkedin-in text-xl text-gray-100 inline"></i></a>
                            </div>
                        </div>
                </div>
                

                <div class="rounded shadow-lg relative ">
                   <form @submit.prevent="submit">
                       <label class="block font-medium text-sm text-gray-700 mb-2">Nombre completo *</label>
                        <input type="text" class="form-input w-full rounded-md shadow-sm p-2 " v-model="form.nombre">
                         <div v-if="$page.props.errors.nombre" class="bg-red-500 text-white text-sm font-bold p-2 mt-2 mb-2 rounded-md">{{ $page.props.errors.nombre }}</div>
                       
                        <label class="block font-medium text-sm text-gray-700 mb-2 mt-2">Telefono / Celular</label>
                        <input type="number" class="form-input w-full rounded-md shadow-sm p-2" v-model="form.telefono">
                        <label class="block font-medium text-sm text-gray-700 mt-2 mb-2">Correo electronico *</label>
                        <input type="email" class="form-input w-full rounded-md shadow-sm p-2" v-model="form.correo">
                        <div v-if="$page.props.errors.correo" class="bg-red-500 text-white text-sm font-bold p-2 mt-2 mb-2 rounded-md">{{ $page.props.errors.correo }}</div>
                      
                        <label class="block font-medium text-sm text-gray-700 mt-2 mb-2">Mensaje *</label>
                        <textarea class="form-input w-full rounded-md shadow-sm p-2 mb-2" v-model="form.mensaje"></textarea>
                        <div v-if="$page.props.errors.mensaje" class="bg-red-500 text-white text-sm font-bold p-2 mt-2 mb-2 rounded-md">{{ $page.props.errors.mensaje }}</div>

                        <button class="bg-blue-500 hober:bg-blue-800 rounded-md text-white font-bold py-2 px-4 mt-4">
                            Enviar mensaje
                        </button>
                   </form>
                </div>
            </div>
</template>