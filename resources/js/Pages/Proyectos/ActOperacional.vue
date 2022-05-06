<script>


import AppLayout from '@/Layouts/AppLayout.vue';
import Slider from '@/Pages/Slider.vue'
import Menu from '@/Pages/Menu.vue'

export default {

    components:{
         AppLayout,
         Slider,
         Menu
    }
    
}
</script>

<template>


     <div>
         <Menu />
         <div class="mt-0">
               <Slider contenido="Sistema de planificación operacional" />
        </div>

        <div class="container py-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <video src="/media/Control_de_activ.mp4" class="w-full p-4" controls></video>
                </div>
                <div class="bg-white rounded shadow-lg p-4">
                    <div>
                        <h3 class="text-gray-800 font-semibold text-lg">Funcionalidades</h3><br>

                        <p class="text-gray-800 text-md">
                            -Registro de asignaciones con periodo de fechas (cargadas con calendario ).<br>
                            -Generación de reportes operacionales por usuario, ubicación y objetivos .<br>
                            -Opción de eliminar asignaciones .<br>
                            -Registro de avances de las asignaciones cargadas.<br>
                            -Panel administrativo de usuarios, regiones, divisiones, negocios, rol de usuarios .<br>
                        </p><br>
                    </div>
              
                    <div>
                        <h3 class="text-gray-800 text-lg font-semibold">Tecnologías utilizadas en el desarrollo</h3><br>
                        <p class="text-gray-800 text-md">
                        -Backend: PHP con framework Laravel.<br>
                        -Fronted: Livewire con Alpine js.<br>
                        -Tailwind css.<br>
                        -Gestor de bdd Mysql.<br>
                        </p><br>
                    </div>
           
                    <div>
                        <h3 class="text-gray-800 text-lg font-semibold">Estado actual</h3><br>
                        <p class="text-gray-800 text-md">
                            -En fase de prueba en servidor privado.
                        </p>
                        
                    </div>
                    
                </div>
            </div>
        </div>


     </div>
     
        

 
</template>