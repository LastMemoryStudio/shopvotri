<template>
        <button class="w-full h-16 bg-gray-100 text-lg font-semibold rounded-2xl flex justify-start items-center gap-2">
            <i :class="`fa-solid fa-${icon} ml-7`"></i>
            <span>{{ title }}</span>
        </button>
</template>

<script>
export default {
    props:{
        title: String,
        icon: String
    }
}
</script>