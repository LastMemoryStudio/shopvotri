<template>
  <div class="hover:bg-gradient-to-l hover:from-violet-500/40 hover:to-orange-500/40 rounded-xl p-0.5 shadow-xl hover:shadow-none h-[350px] my-2 md:my-0 md:w-[49%] lg:w-[600px] lg:h-[350px]">
    <div class="w-full h-full flex flex-col justify-center rounded-xl bg-white px-5 lg:px-12">
      <div class="w-full flex justify-between items-center text-xl">
        <img :src="img" class="w-[80px] h-[80px] border border-black rounded-full" alt="">
        <span class="flex items-center text-yellow-500 font-medium">
          <i class="fa-solid fa-star mr-1"></i>
          <p>{{ rating }}</p>
        </span>
      </div>
      <div class="my-5">
        <h3 class="text-2xl font-medium mb-1">{{ name }}</h3>
        <h4 class="text-lg">{{ position }}</h4>
      </div>
      <p>{{ description }}</p>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    img: String,
    rating: String,
    name: String,
    position: String,
    description: String,
  }
}
</script>