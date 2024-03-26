<template>
      <nav class=" flex flex-col justify-center md:w-full  bg-blue-500">
        <div class=" flex flex-col md:flex-row justify-center  border-y-2">
            <div class="flex md:w-[90%] p-2 flex-col md:flex-row justify-between  md:items-center 	">
                <div class="items-center md:justify-between jun flex text-white p-4 ">
                    <div class="img">
                        <img src="https://demo-uminex.myshopify.com/cdn/shop/files/logo9_145x@2x.png?v=1690360964"
                            class="md:w-[145px] md:h-[44.929577464788736px] " alt="">
                    </div>
                </div>
                <div class="input flex  justify-between  bg-white rounded">
                    <div class="border-2 flex ">
                        <div class="px-6 py-2">
                            <select class="md:w-[5vw] w-[2vw] border-r-2 text-black " name="product_type">
                                <option value="r32r">text-css</option>
                                <option value="Accessories">Accessories</option>
                            </select>
                        </div>
                        <div class="p-2">
                            <input type="text" class="w-[20vw] overscroll-none text-black" style="outline: none;"
                                placeholder="tim dfaedfaed">
                        </div>
                    </div>
                    <button class="md:w-[7vw] px-6 py-2 border-blue-600 bg-blue-300 text-white  rounded-r ">
                        Seach
                    </button>
                </div>
                <div class="flex text-white justify-between items-center w-[16vw] hidden md:inline-flex">
                    <div class="flex  items-center ">
                        <i class="fa-regular fa-user text-3xl mr-2"></i>
                        <div class="flex flex-col">
                            <span class="text">Login</span>
                            <span class="b">Account</span>
                        </div>
                    </div>
                    <div class="">
                        <i class="fa-regular fa-heart  text-3xl"></i>
                    </div>
                    <div class="flex text-white  items-center">
                        <div class="flex  items-center ">
                            <i class="fa-sharp fa-light fa-cart-shopping"></i>
                            <div class="flex flex-col justify-end  items-center">
                                <span class="text">Your Cart </span>
                                <span class="js-total-price"> $28.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="md:w-full hidden  md:inline-flex flex text-white font-bold items-center justify-center p-5  ">
            <div class=" w-[90%]  ">
                <div class="flex  justify-between mr-30">
                    <div class="flex items-center  justify-start ">
                        <span class="icon-left mr-2">
                            <i class="fa-regular fa-bars"></i>
                        </span>
                        <span class="title">Browse All Categories</span>
                    </div>
                    <div class=" flex md:mr-[106px]  ">
                        <a class="border-l-2 px-2 flex items-center" href="">
                            Home
                            <i class="fa-solid fa-sort-down px-2 "></i>
                        </a>
                        <a class="px-2 flex items-center" href="">
                            shop
                            <i class="fa-solid fa-sort-down px-2 "></i>
                        </a>
                        <a class="px-2 flex items-center" href="">
                            Product
                            <i class="fa-solid fa-sort-down px-2 "></i>
                        </a>
                        <a class="px-2 flex items-center" href="">
                            Pages
                            <i class="fa-solid fa-sort-down px-2 "></i>
                        </a>
                        <a class="px-2 flex items-center" href="">
                            Contact Us
                            <i class="fa-solid fa-sort-down px-2  "></i>
                        </a>
                        <a class="px-2 flex items-center text-blue-300" href="">
                            Buy Uminex!

                        </a>
                    </div>
                    <div class="  flex justify-end">
                        <p><a class="ml-[100px]" title="Sale">Sale $20 Off Your First Order.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>

</script>