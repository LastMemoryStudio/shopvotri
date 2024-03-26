<template>
    <div>
        <div class="flex justify-between px-3 items-end lg:px-0">
            <h1 class="text-2xl font-bold">Top {{title}}</h1>

            <a href="#" class=" font-medium">Show all</a>
        </div>
        <slot>

        </slot>
    </div>
</template>

<script>
export default {
    props:{
        title:String,
    }
}
</script>