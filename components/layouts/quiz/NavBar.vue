<template>
    <div class="flex justify-between items-center w-full">
        <div class="flex items-center font-semibold gap-5">
            <i class="fa-solid fa-arrow-left text-lg"></i>
            <h1 class="text-xl">{{ title}}</h1>
        </div>
        <i class="fa-solid fa-magnifying-glass text-2xl"></i>
    </div>
</template>

<script>
export default {
    props:{
        title: String
    }
}
</script>