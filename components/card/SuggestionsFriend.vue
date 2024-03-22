<template>
    <div>
        <div class="flex justify-between items-center md:flex-col">
            <div class="flex items-center gap-4 md:flex-col">
                <img class="w-14 h-14 rounded-full object-cover md:w-20 md:h-20" :src="image" alt="">
                <div class="font-medium md:text-center">
                    <div class="text-black text-lg md:text-[22px]">{{ title }}</div>
                    <div class="text-sm text-gray-500 md:text-lg md:mt-1 md:text-gray-400">@{{ username }}</div>
                </div>
            </div>

            <button class=" bg-black text-white text-sm rounded-full w-20 h-10 font-semibold md:mt-2 lg:w-24 lg:h-12">
                Theo dõi
            </button>
        </div>
    </div>
</template>

<script>
export default {
    props:{
        title: String,
        username: String,
        image: String
    }
}
</script>