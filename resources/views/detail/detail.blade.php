<section class="w-[90%] flex flex-wrap lg:flex-nowrap lg:w-[80%]">
    <div class="flex flex-col items-end relative w-full lg:mr-5 lg:w-1/2">
        <div class="w-full flex justify-end">
            <img src="{{ $productDetail['image'] }}" alt="" class="rounded-xl w-full lg:w-[80%] ">
            <div class="absolute flex flex-col">
                <i class="fa-regular fa-heart flex justify-center items-center opacity-50 hover:opacity-100 bg-clip-text duration-200 text-transparent bg-gradient-to-r from-blue-500 to-red-500 my-1 mx-3 rounded-md w-10 h-10 text-xl hover:shadow-lg hover:shadow-black/20 md:w-12 md:h-12 md:text-xl lg:w-7 lg:h-7 lg:text-base"></i>
                <i class="fa-solid fa-share-nodes opacity-50 hover:opacity-100 bg-clip-text duration-200 text-transparent bg-gradient-to-r from-blue-500 to-red-500 w-10 h-10 flex justify-center items-center my-1 mx-3 text-xl rounded-md hover:shadow-lg hover:shadow-black/20 md:w-12 md:h-12 md:text-xl lg:w-7 lg:h-7 lg:text-base"></i>
            </div>
        </div>
        <div class="flex justify-between mt-3 w-full lg:mt-10 md:mt-5 lg:w-[80%]">
            <img loading="lazy" src="https://i.ibb.co/YyXkvr8/phpED74.webp" alt="" class="rounded-md w-24 md:w-44 lg:w-24">
            <img loading="lazy" src="https://i.ibb.co/YyXkvr8/phpED74.webp" alt="" class="rounded-md w-24 md:w-44 lg:w-24">
            <img loading="lazy" src="https://i.ibb.co/YyXkvr8/phpED74.webp" alt="" class="rounded-md w-24 md:w-44 lg:w-24">
            <img loading="lazy" src="https://i.ibb.co/YyXkvr8/phpED74.webp" alt="" class="rounded-md w-24 md:w-44 lg:w-24">
        </div>
    </div>
    <div class="w-full lg:ml-3 lg:w-1/2">
        <h1 class="w-full font-medium text-xl md:text-2xl lg:text-3xl lg:mx-2">
            {{ $productDetail['name'] }}
        </h1>
        <div class="my-7">
            <h4 class="text-xl font-medium text-gray-500 lg:mx-2">Color</h4>
            <div class="flex">
                <div class="w-16 h-12 bg-red-500 mx-2 md:w-24 md:h-14 lg:w-12 h:h-12"></div>
                <div class="w-16 h-12 bg-blue-500 mx-2 md:w-24 md:h-14 lg:w-12 h:h-12"></div>
                <div class="w-16 h-12 bg-green-500 mx-2 md:w-24 md:h-14 lg:w-12 h:h-12"></div>
                <div class="w-16 h-12 bg-pink-500 mx-2 md:w-24 md:h-14 lg:w-12 h:h-12"></div>
            </div>
        </div>
        <div class="my-7">
            <h4 class="text-xl font-medium text-gray-500 lg:mx-2 ">Size</h4>
            <div class="flex text-2xl ">
                <p class="w-16 h-12 bg-white flex justify-center items-center mx-2 md:w-24 md:h-14 lg:w-12 h:h-12">s</p>
                <p class="w-16 h-12 bg-white flex justify-center items-center mx-2 md:w-24 md:h-14 lg:w-12 h:h-12">m</p>
                <p class="w-16 h-12 bg-white flex justify-center items-center mx-2 md:w-24 md:h-14 lg:w-12 h:h-12">xl</p>
                <p class="w-16 h-12 bg-white flex justify-center items-center mx-2 md:w-24 md:h-14 lg:w-12 h:h-12">2xl</p>
                <p class="w-16 h-12 bg-white flex justify-center items-center mx-2 md:w-24 md:h-14 lg:w-12 h:h-12">3xl</p>
            </div>
        </div>
        <h3 class="text-3xl font-semibold my-7 lg:text-5xl lg:mx-2">
            {{ $productDetail['price_sale'] > 0 ? number_format($productDetail['price_sale']) : number_format($productDetail['price']) }} VNĐ
        </h3>
        <div class="mt-3 flex text-lg my-7 lg:justify-between">
            <button class="w-64 h-12 text-white rounded-xl bg-blue-600 text-xl mr-2 duration-500 bg-gradient-to-r hover:from-blue-700 hover:to-red-700 md:mr-5 lg:mx-2 ">
                Mua ngay
            </button>
            <button class="w-64 h-12 text-white rounded-xl bg-blue-600 text-xl ml-2 duration-500 bg-gradient-to-r hover:from-blue-700 hover:to-red-700 md:ml-5 lg:mx-2 ">
                Thêm vào giỏ hàng
            </button>
        </div>
        <div class="my-7 lg:mx-2">
            <div class="flex items-center text-gray-500">
                <i class="fa-solid fa-shop w-7 text-left"></i>
                <p class="">
                    Shop: <p class="text-black mx-0.5">Memory</p>
                </p>
            </div>
            <div class="flex items-center text-gray-500">
                <i class="fa-solid fa-truck w-7 text-left"></i>
                <p class="">
                    Đơn hàng: <p class="text-green-500 mx-0.5">30.000.00VND</p>
                </p>
            </div>
            <div class="flex items-center text-gray-500">
                <i class="fa-solid fa-repeat w-7 text-left"></i>
                <p class="">
                    Đổi trả sản phẩm 15 ngày 
                    <a href="#" class="capitalize font-medium text-blue-500 underline underline-offset-4">điều khoản</a>
                </p>
            </div>
        </div>
    </div>
</section>
