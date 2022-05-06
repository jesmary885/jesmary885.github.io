<script>
import 'vue3-carousel/dist/carousel.css';
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel';
import { Head, Link } from '@inertiajs/inertia-vue3';

// export default {
//       name: 'Autoplay',

//     components:{
//         AppLayout,
//         Slider,
//         Carousel,
//         Slide,
//         Link,
//         Pagination,
//         Navigation,    
//     },
//     props:{
//         itemsToShow: Number,
//         wrapAround: Boolean,
//     },
//     data(){
//         return{
//             trabajos : 1,
//         }
//     }

// }

export default({
  name: 'Breakpoints',
 
  components: {
        Carousel,
        Slide,
        Link,
        Pagination,
        Navigation,    
  },
  data: () => ({
    // carousel settings
    settings: {
      itemsToShow: 1,
      snapAlign: 'center',

    },
    // breakpoints are mobile first
    // any settings not specified will fallback to the carousel settings
    breakpoints: {
      // 700px and up
      700: {
    
        itemsToShow: 4,
        snapAlign: 'center',
     
      },
     
    },
  }),
});

</script>

<style>

:root {
     --vc-clr-primary: rgba(72, 90, 72, 0.301);
  }

  .carousel__slide > .carousel__item {
  transform: scale(1);

  transition: 0.5s;
}
.carousel__slide--visible > .carousel__item {
  opacity: 1;
  transform: rotateY(0);
}
.carousel__slide--next > .carousel__item {
  transform: scale(0.9) translate(-10px);
}
.carousel__slide--prev > .carousel__item {
  transform: scale(0.9) translate(10px);
}
.carousel__slide--active > .carousel__item {
  transform: scale(1.1);
}

</style>


<template>
<div class="h-full mt-2 pt-24 mb-11">
    <div class="bg-white rounded-lg shadow-lg p-4 ">
            <h2 class="font-bold text-gray-700 text-center text-lg">PROYECTOS MÁS RELEVANTES</h2>
        </div>

    <div class="mt-4 mb-20">
     

    <carousel :settings="settings" :breakpoints="breakpoints" :wrapAround="true">

      <slide v-for="trabajos in 5" :key="trabajos">
      
        <ul class=" mr-2 w-52 h-72 carousel__item">
          <li class="bg-white rounded-lg shadow">
              
            <article v-if="trabajos == 1" class="pt-6 px-4 pb-16 h-full transform hover:scale-110 transition ease-out duration-500">
                <figure>
                  <img class="w-full h-48 object-cover object-center " src="/img/ventas.jpg" alt="">
                </figure>
                <Link :href="route('ventas')" class="text-sm md:text-md lg:text-md font-semibold text-gray-700">
                Control de ventas e inventario
                </Link>
            </article>
<!-- transform hover:scale-110 transition ease-out duration-500 -->
            <article v-if="trabajos == 2" class="pt-6 px-4 pb-16 h-full transform hover:scale-110 transition ease-out duration-500">
                <figure>
                  <img class="w-full h-48 object-cover object-center " src="/img/control_actividades.png" alt="">
                </figure>
                <Link :href="route('actOperacional')" class="text-sm md:text-md lg:text-md font-semibold text-gray-700">
                Control de actividades operacionales
                </Link>
            </article>
             <article v-if="trabajos == 3" class="pt-6 px-4 pb-16 h-full transform hover:scale-110 transition ease-out duration-500">
                <figure>
                  <img class="w-full h-48 object-cover object-center " src="/img/blog.jpg" alt="">
                </figure>
                <Link :href="route('blog')" class="text-sm md:text-md lg:text-md font-semibold text-gray-700">
                Blog administrable
                </Link>
            </article>
             <article v-if="trabajos == 4" class="pt-6 px-4 pb-16 h-full transform hover:scale-110 transition ease-out duration-500">
                <figure>
                  <img class="w-full h-48 object-cover object-center " src="/img/negocios.png" alt="">
                </figure>
                <Link :href="route('negocios')" class="text-sm md:text-md lg:text-md font-semibold text-gray-700">
                Página web de negocios
                </Link>
            </article>
             <article v-if="trabajos == 5" class="pt-6 px-4 pb-16 h-full transform hover:scale-110 transition ease-out duration-500">
                <figure>
                  <img class="w-full h-48 object-cover object-center " src="/img/ecommerce.png" alt="">
                </figure>
                <Link :href="route('ecommerce')" class="text-sm md:text-md lg:text-md font-semibold text-gray-700">
                Página ecommerce
                </Link>
            </article>
          </li>
        </ul>
      </slide>
       <template #addons>
           <Navigation class="m-8" />
    </template>
   
  </carousel>

    </div>
  </div>
</template>