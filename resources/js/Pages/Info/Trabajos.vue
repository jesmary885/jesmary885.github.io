<script>
import 'vue3-carousel/dist/carousel.css';
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel';
import { Head, Link } from '@inertiajs/inertia-vue3';


export default({
  components: {
        Carousel,
        Slide,
        Link,
        Pagination,
        Navigation,    
  },

  props: {
      itemsToShow: Number,
      itemsToScroll: Number,
      snapAlign: String,
    },

  data: () => ({
    // carousel settings
      settings: {
      itemsToShow: 4,
      snapAlign: 'center',
    },
    
    // breakpoints are mobile first
    // any settings not specified will fallback to the carousel settings
    breakpoints: {
      // 700px and up
       100: {
        itemsToShow: 1,
        snapAlign: 'center',
      },
      300: {
        itemsToShow: 2,
        snapAlign: 'center',
      },
  
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
     --vc-clr-primary: rgba(200, 202, 200, 0.301);
      --vc-clr-white: rgba(234, 238, 234, 0.301);
  }

  .carousel__item {
  min-height: 200px;
  width: 100%;
  background-color: var(--vc-clr-primary);
  color:  var(--vc-clr-white);
  font-size: 20px;
  border-radius: 8px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.carousel__slide {
  padding: 10px;
}

.carousel__prev,
.carousel__next {
  box-sizing: content-box;
  border: 5px solid white;
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
      
        <ul class="w-full h-64 carousel__item">
          <li class="bg-white rounded-lg">
              
            <article v-if="trabajos == 1" class="p-5 transform hover:scale-110 transition ease-out duration-500">
                <Link :href="route('ventas')" class="text-sm md:text-md lg:text-md font-semibold text-gray-700">
                <figure>
                  <img class="w-full h-48 object-cover object-center " src="/img/ventas.jpg" alt="">
                </figure>
                
                Control de ventas e inventario
                </Link>
            </article>

            <article v-if="trabajos == 2" class="p-5 transform hover:scale-110 transition ease-out duration-500">
                <Link :href="route('actOperacional')" class="text-sm md:text-md lg:text-md font-semibold text-gray-700">
                <figure>
                  <img class="w-full h-48 object-cover object-center " src="/img/control_actividades.png" alt="">
                </figure>
                
                Control de actividades operacionales
                </Link>
            </article>

             <article v-if="trabajos == 3" class="p-5 transform hover:scale-110 transition ease-out duration-500">
                 <Link :href="route('blog')" class="text-sm md:text-md lg:text-md font-semibold text-gray-700">
                <figure>
                  <img class="w-full h-48 object-cover object-center " src="/img/blog.jpg" alt="">
                </figure>
               
                Blog administrable
                </Link>
            </article>

             <article v-if="trabajos == 4" class="p-5 transform hover:scale-110 transition ease-out duration-500">
                 <Link :href="route('negocios')" class="text-sm md:text-md lg:text-md font-semibold text-gray-700">
                <figure>
                  <img class="w-full h-48 object-cover object-center " src="/img/negocios.png" alt="">
                </figure>
               
                Página web de negocios
                </Link>
            </article>

             <article v-if="trabajos == 5" class="p-5 transform hover:scale-110 transition ease-out duration-500">
                 <Link :href="route('ecommerce')" class="text-sm md:text-md lg:text-md font-semibold text-gray-700">
                <figure>
                  <img class="w-full h-48 object-cover object-center " src="/img/ecommerce.png" alt="">
                </figure>
               
                Página ecommerce
                </Link>
            </article>

          </li>
        </ul>
      </slide>
       <template #addons>
           <Navigation class="m-8" />
              <pagination />
    </template>
   
  </carousel>

    </div>
  </div>
</template>