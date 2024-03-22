<template>
    <div class="w-full mt-5 hover:cursor-pointer">
        <img src="https://i.ibb.co/nL3GVYh/chat-gpt-la-gi-1.jpg" alt="" class="h-[80%] w-full object-cover rounded-2xl">
        <span class="grid gap-0.5 mt-3">
            <h3 class="text-3xl font-medium sm:text-3xl md:text-lg lg:text-2xl"> {{ title }} </h3>
                <div class="flex gap-2.5 my-1 text-xs md:text-[10px]">
                    <dd :style="{ color: i.color }" v-for="i in tags" :key="i">    
                        #{{ i.tags }}
                    </dd>
                </div>
        </span>
    </div>
</template>

<script>
export default {
    props: {
        title: String,
        shortDes: String,
        tags: [Object, Array]
    }
}
</script>