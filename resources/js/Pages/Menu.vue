<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import ResponsiveNavLink from '@/Components/NavLink.vue';

export default {
    components: {
    ResponsiveNavLink,
    Link,
  },
    
}
</script>

<template>
    
    <header class="bg-black sticky top-0" style="z-index: 900">
				<div class="container flex items-center justify-between h-24">
					<!-- logo -->
					<div>
						<Link class="text-white" :href="route('home')"> 
					    <p class="items-center justify-center text-4xl font-extrabold rounded-full p-2 ">
								| JC |
						</p>
						</Link> 
					</div>

                    <div>
                          <a href="http://portafolio.test/#sobre_mi" class="text-sm text-gray-400 hover:text-white mr-3 md:text-md lg:text-lg" >
								Sobre mi
						</a>
						<a href="http://portafolio.test/#portafolio_web" class="text-sm hover:text-white mr-3 md:text-md lg:text-lg text-gray-400">
								Portafolio web
						</a> 
						<a href="http://portafolio.test/#contacto" class="text-sm hover:text-white mr-3 md:text-md lg:text-lg text-gray-400">
								Contacto
						</a> 
                    </div>
				</div>
			</header>
</template>