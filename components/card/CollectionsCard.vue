<template>
    <div class="">
        <div class="-translate-x-[0.2rem] -translate-y-1.5 h-full lg:-translate-y-2.5">
            <img src="https://i.ibb.co/nL3GVYh/chat-gpt-la-gi-1.jpg" alt="" class=" w-full h-full object-cover rounded-2xl">
            <p class="absolute bottom-3 left-5 text-[17px] text-white font-medium md:bottom-7 md:left-10 md:text-3xl lg:bottom-5 lg:left-8">{{ title }}</p>            
        </div>
    </div>
</template>
<script>
export default {
    props:{
        title: String,
    }
}
</script>