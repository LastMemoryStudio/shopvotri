<template>
<div id="defaultModal" @click="handleClickOutside" tabindex="-1" aria-hidden="true" class="fixed flex justify-center items-center z-[5000] w-full p-4 overflow-y-auto inset-0 h-[calc(100%)] max-h-full" style="background: rgba(0,0,0,0.7);">
    
    <div class="relative w-full max-w-xl max-h-full animate__animated animate__fadeInDown" @click.stop>
        <div class="relative bg-white rounded-2xl shadow-xl">
            <slot></slot>
        </div>
    </div>
</div>
</template>

<script>
export default {
	methods: {
		handleClickOutside() {
            this.$emit('closeModal', true);
		},
	},
};
</script>


<style>
.ck-content{
    min-height: 30vh;
    max-height: 30vh;
    overflow: scroll;
}
</style>