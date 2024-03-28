<template>
  <div
    class="border-2 p-2 rounded-xl bg-white border-[#ebebeb] h-[20em] card-product relative"
  >
    <div class="w-full h-[200px]">
      <img
        src="https://demo-uminex.myshopify.com/cdn/shop/products/products_33_2.jpg?v=1678075353&width=360"
        alt=""
      />
    </div>
    <div
      class="flex flex-col justify-center card-product-info absolute cursor-pointer"
    >
      <span class="text-lg font-medium">
        Stainless Steel Case with Braided Solo Loop
      </span>
      <div class="flex items-center text-yellow-400 mt-2 mb-2">
        <i class="fas fa-star mr-2"></i>
        <i class="fas fa-star mr-2"></i>
        <i class="fas fa-star mr-2"></i>
        <i class="fas fa-star mr-2"></i>
        <i class="fas fa-star"></i>
      </div>
      <div class="text-blue-500 text-xl font-normal mb-3">$848.00</div>
      <div class="w-full flex justify-center items-center bottom-button">
        <button
          type="button"
          class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 w-11/12"
        >
          Yellow
        </button>
      </div>
      <!-- <div class="flex items-center text-red-500 text-sm">
        <i class="fa-duotone fa-check mr-2"></i>
        Out of Stock
      </div> -->
    </div>
  </div>
</template>

<style>
.card-product .card-product-info {
  bottom: -3em;
  transition: bottom 0.5s ease;
}

.card-product:hover > .card-product-info {
  bottom: 0;
}

.card-product-info .bottom-button {
  opacity: 0;
  transition: opacity 0.4s ease;
}

.card-product:hover .card-product-info .bottom-button {
  opacity: 1;
}
</style>