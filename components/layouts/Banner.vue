<template>
  <div class="flex md:flex-row mt-8 justify-center">
    <div
      class="flex flex-col md:flex-row w-[95%] md:w-[90%] md:items-center justify-center md:justify-between"
    >
      <div class="w-full md:w-[64%] rounded-2xl">
        <div
          class="mySwiper w-full"
          navigation="true"
          pagination="true"
          keyboard="true"
          mousewheel="true"
          css-mode="true"
        >
          <div class="w-full bg-center relative bg-cover rounded-md md:rounded-2xl h-[30vh] md:h-[60vh]"
          :style="{ backgroundImage: 'url(https://demo-uminex.myshopify.com/cdn/shop/files/banner_9_3.jpg?v=1690362130&width=2000)' }">
            <div
              class="flex flex-col absolute top-8 left-8 md:top-10 md:left-20 md:h-[50%]"
            >
              <div class="flex flex-col justify-between h-full">
                <div class="flex flex-col h-[60%]">
                  <div class="flex text-css">
                    <span class="text-md md:text-xl mr-2"> Top </span>
                    <span class="text-md md:text-xl"> Trending </span>
                  </div>
                  <div class="text-white flex justify-start">
                    <span class="text-lg md:text-5xl"> Cellphone </span>
                  </div>
                  <div class="flex">
                    <div class="text-css">
                      <span class="first text-5xl mr-2"> 25MP </span>
                    </div>
                    <div class="text-3xl md:text-5xl text-white">
                      Pro Camera
                    </div>
                  </div>
                  <div class="text-white mt-2 flex justify-start">
                    Perfect. Level Up Your Productivity.
                  </div>
                </div>
                <div class="w-full flex justify-start text-white mt-3">
                  <button class="rounded-3xl bg-blue-200 p-3 w-[40%] font-bold">
                    Shop Now
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="flex flex-col w-full md:w-[34%] md:h-[60vh] md:justify-between mt-3 rounded-md md:rounded-2xl mt-3 md:mt-0"
      >
        <div
          class="flex justify-start h-[15vh] md:h-[29vh] bg-blue-200 w-full rounded-md md:rounded-2xl bg-center bg-cover mb-2 md:mb-0"
          style="
            background-image: url(https://demo-uminex.myshopify.com/cdn/shop/files/img_9_1.jpg?v=1690361674&width=2000);
          "
        >
          <div class="flex justify-start ml-3 md:pt-[4vw] md:pl-[4vw]">
            <div class="flex flex-col text-white">
              <div class="font-normal text-4xl">Canyon</div>
              <div class="font-normal text-4xl">Star Raider</div>
              <div class="font-normal text-sm">Headphone & Audio</div>
            </div>
          </div>
        </div>
        <div
          class="flex justify-start h-[15vh] md:h-[29vh] bg-blue-300 bg-center bg-cover rounded-md md:rounded-2xl"
          style="
            background-image: url(https://demo-uminex.myshopify.com/cdn/shop/files/img_9_2.jpg?v=1690361674&width=2000);
          "
        >
          <div class="flex justify-start ml-3 md:pt-[4vw] md:pl-[4vw]">
            <div class="flex flex-col text-white">
              <div class="font-normal text-4xl">Canyon</div>
              <div class="font-normal text-4xl">Star Raider</div>
              <div class="font-normal text-sm">Headphone & Audio</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>e