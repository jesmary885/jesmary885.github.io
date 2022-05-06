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
               <Slider contenido="Sistema de control de ventas e inventario" />
        </div>

        <div class="container py-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <video src="/media/Control_de_ventas_e_inventario.mp4" class="w-full p-4" controls></video>
                </div>
                <div class="bg-white rounded shadow-lg p-4">
                    <div>
                        <h3 class="text-gray-800 font-semibold text-lg">Funcionalidades</h3><br>

                        <p class="text-gray-800 text-md">
                            -Control de productos con código de barras y serial.<br>
                            -Gestión de ventas al contado y crédito.<br>
                            -Inventario adaptado para varias o una sucursal.<br>
                            -Devoluciones de equipos.<br>
                            -Traslados de equipos entres sucursales.<br>
                            -Movimientos en caja.<br>
                            -Reporte de equipos más vendidos.<br>
                            -Kardex.<br>
                            -Reporte de ventas, compras y cajas.<br>
                            -Genera facturas o ticket de pago y reconoce lector de código de barra.<br>
                            -Posee buscador en módulo de cliente por Dni enlazado a página de Reniec.
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
                            -Desarrollo culminado, se encuentra en fase de prueba.
                        </p>
                        
                    </div>
                    
                </div>
            </div>
        </div>
     </div>

</template>