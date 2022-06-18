<script >
import { computed, ref } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import { Head, Link } from '@inertiajs/inertia-vue3';
import ResponsiveNavLink from '@/Components/NavLink.vue';
import JetBanner from '@/Components/Banner.vue';
import Footer from '@/Pages/Footer.vue';
import SobreMi from '@/Pages/Info/SobreMi.vue';
import Trabajos from '@/Pages/Info/Trabajos.vue';
import Contacto from '@/Pages/Info/Contacto.vue';

import Slider from '@/Pages/Slider.vue'

//import 'vue-glide-js/dist/vue-glide.css'


export default {
  components: {
    ResponsiveNavLink,
    Link,
    JetBanner,
    Head,
	 Slider,
	SobreMi,
	Trabajos,
	Contacto,
	Footer,
	
	 
  },
  props:{
      title:String,
	  errors:Object,
  }
};

</script>
<template class="font-sans antialiased">
			<Head :title="title" />

			<JetBanner />
	<div class="min-h-screen bg-gray-100">
					<!-- <Navigation /> -->
			<header class="bg-black sticky top-0" style="z-index: 900">
				<div class="container flex items-center justify-between h-24">
					<!-- logo -->
					<div>
						<a class="text-white" href="#home"> 
							<p class="items-center justify-center text-4xl font-extrabold rounded-full p-2 ">
								| JC |
							</p>
						</a>
					</div>
					<div>
			
						<a href="#sobre_mi" class="text-sm text-gray-400 hover:text-white mr-3 md:text-md lg:text-lg" >
								Sobre mi
						</a>
						<a href="#portafolio_web" class="text-sm hover:text-white mr-3 md:text-md lg:text-lg text-gray-400">
								Portafolio web
						</a> 
						<a href="#contacto" class="text-sm hover:text-white mr-3 md:text-md lg:text-lg text-gray-400">
								Contacto
						</a> 
					</div>
				</div>
			</header>
				<!-- Page Content -->
			<main>
				 <div class="text-center" v-if="$page.props.errors.nombre || $page.props.errors.correo || $page.props.errors.mensaje ">
					  <p class="text-sm text-red-800 font-bold bg-black">Mensaje no enviado, debe completar todos los campos obligatorios</p>
				</div>

				 <div v-if="$page.props.flash.status" class="text-center ">
                    <p class="text-sm text-gray-300 font-bold bg-black">{{$page.props.flash.status}}</p>
                </div>
				<a name="home" />
				 <Slider contenido="Hola, mi nombre es Jesmary Carneiro" />
				 <div>
				<a name="sobre_mi" />
				<SobreMi/>
				</div>

				<div class="h-full">
				<a name="portafolio_web" />
				<Trabajos/>
				</div>
		
				<div>
				<a name="contacto" />
				<Contacto/>
				</div>
			</main>

		
	</div>
</template>






