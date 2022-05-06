<script>


import AppLayout from '@/Layouts/AppLayout.vue';
import Slider from '@/Pages/Slider.vue';
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
               <Slider contenido="Ecommerce" />
        </div>

        <div class="container py-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <video src="/media/Ecommerce.mp4" class="w-full p-4" controls></video>
                </div>
                <div class="bg-white rounded shadow-lg p-4">
                    <div>
                        <h3 class="text-gray-800 font-semibold text-lg">Funcionalidades</h3><br>

                        <p class="text-gray-800 text-md">
                            -Buscador de productos en el header de la página.<br>
                            -Botón de categoriás donde se mostrarán ellas y sus subcategorías, y sus productos relacionados..<br>
                            -Se muestran los diez productos mas relevantes de cada categoria en un slider que se puede deslizar horizontalmente.<br>
                            -Al hacer click sobre cada producto se visualiza su detalle y un panel de las imágenes cargadas sobre él.<br>
                            -Carrito de compras.<br>
                            -Opción de método de pago por Paypal y tarjeta de crédito.<br>
                            -Panel administrativo, de productos, categorias, marcas y ordenes.<br>
                            -Registro y perfil de usuario.
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
                            -Sistema desarrollado como prueba, no se encuentra operativo.
                        </p>
                        
                    </div>
                    
                </div>
            </div>
        </div>
     </div>
</template>