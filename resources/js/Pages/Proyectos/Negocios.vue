<script>


import AppLayout from '@/Layouts/AppLayout.vue';
import Slider from '@/Pages/Slider.vue';
import Menu from '@/Pages/Menu.vue'

export default {

    components:{
         AppLayout,
         Slider,
         Menu,
    }
    
}
</script>

<template>


     <div>
            <Menu />
         <div class="mt-0">
               <Slider contenido="Página web informativa sobre negocios locales" />
        </div>

        <div class="container py-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <video src="/media/negocios.mp4" class="w-full p-4" controls></video>
                </div>
                <div class="bg-white rounded shadow-lg p-4">
                    <div>
                        <h3 class="text-gray-800 font-semibold text-lg">Funcionalidades</h3><br>

                        <p class="text-gray-800 text-md">
                            -Buscador de negocios en el header de la página.<br>
                            -Botón de categoriás donde se mostrarán ellas y sus subcategorías, y los negocios relacionados..<br>
                            -Se muestran los negocios asociados a cada categoria en un slider que se puede deslizar horizontalmente.<br>
                            -Al hacer click sobre cada negocio se visualiza su detalle, junto a un submenú con fotos, ubicación utilizando app de google maps, productos y servicios que ofrece).<br>
                            -Panel administrativo con la información que se muestra de cada negocio, sus productos y servicios.<br>
                            -Registro y perfil de usuario.

                        </p><br>
                    </div>
              
                    <div>
                        <h3 class="text-gray-800 text-lg font-semibold">Tecnologías utilizadas en el desarrollo</h3><br>
                        <p class="text-gray-800 text-md">
                        -Backend: PHP con framework Laravel.<br>
                        -Fronted: Vuejs.<br>
                        -Tailwind css.<br>
                        -Gestor de bdd Mysql.<br>
                        </p><br>
                    </div>
           
                    <div>
                        <h3 class="text-gray-800 text-lg font-semibold">Estado actual</h3><br>
                        <p class="text-gray-800 text-md">
                            -Sistema desarrollado como prueba, no se encuentra operativo.
                        </p>
                        
                    </div>
                    
                </div>
            </div>
        </div>
     </div>
</template>