<script>

export default {
    props:{
      contenido:String,
    },
  }


</script>

<template>

<!-- <img src="img/slider.jpg" class="object-cover w-full h-80 " alt="">
        
  -->

  <div class="bg-[url('/img/slider.jpg')]">
    <h1 class="text-black h-auto text-2xl md:text-3xl text-shadow-lg font-extrabold md:text-right pb-96 pt-20 pl-8 md:px-20 md:pt-60 md:pb-60 lg:pt-60 lg:pb-64  " >
       {{contenido}}
    </h1>
    
  </div>
</template>
