<template>
  <div class="w-full h-full relative">
    <div
      v-if="loading == true || imageError == true"
      :class="[
        'min-h-[' + height + 'px]',
        'w-full',
        'bg-slate-200',
        'animate-pulse',
        'rounded-[18px]',
      ]"
    ></div>
    <img
      v-if="loading == false && imageError == false"
      :src="src"
      @load="handleImageLoad"
      @error="handleImageError"
      alt=""
      class="w-full h-full rounded-[18px]"
    />
  </div>
</template>

<script>
export default {
  props: {
    src: String,
    height: String,
  },
  data() {
    return {
      loading: true,
      imageError: false,
    };
  },
  methods: {
    handleImageLoad() {
      console.log('error')
      this.loading = false;
    },
    handleImageError() {
      console.log('error')
      this.loading = false;
      this.imageError = true;
    },
  },
};
</script>