<template>
    <div>
        <div class="text-3xl font-medium">
            {{ result }} 
        </div>
        <slot>

        </slot>

    </div>
</template>

<script>
export default {
    props:{
        result:String,
    }
}
</script>