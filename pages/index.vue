<template>
    <div>
        <Navbar/>
        <Banner/>

        <!-- HOT TRENDING PRODUCTS -->
        <div class="flex flex-col mt-5">
            <div class="flex w-full justify-center">
                <div class="w-full md:w-[90%] p-2 flex justify-between items-center">
                    <span class="text-md md:text-xl font-semibold text-black">HOT TRENDING PRODUCTS</span>
                    <div class="text-md md:text-md font-normal text-gray-500 flex items-center cursor-pointer">
                        <p>Xem thêm</p>
                        <i class="fa-solid fa-caret-right ml-1"></i>
                    </div>
                </div>
            </div>
            <div class="flex w-full justify-center my-5">
                <div class="px-2 md:w-[90%] grid grid-cols-2 md:grid-cols-6 gap-4">
                    <CardProduct v-for="i in 6" :key="i"/>
                </div>
            </div>
        </div>

        <!-- POPULAR CATEGORIES -->
        <div class="w-full flex justify-center mt-5">
            <div class="w-[95%] md:w-[90%] md:h-[10vw]">
                <span class="text-md md:text-xl font-semibold text-black">POPULAR CATEGORIES</span>
                <div class="grid grid-cols-2 md:grid-cols-6 gap-4">
                    <CardCategory v-for="i in 6" :key="i"/>
                </div>
            </div>
        </div>

        <!-- HOT DEALS! GET OUR BEST PRICES -->
        <div class="w-full flex justify-center mt-5">
            <div class="flex flex-col w-[95%] md:w-[90%]">
                <div class="flex flex-col">
                    <div class="flex flex-col md:flex-row justify-between items-center">
                        <div class="flex ">
                            <span class="text-xl  text-blue-300 font-semibold">
                                <i class="fa-solid fa-alarm-clock"></i>
                                HOT DEALS!
                            </span>
                            <span class="ml-2 text-xl ">
                                GET OUR BEST PRICES
                            </span>
                        </div>
                        <div class="flex flex-col md:flex-row items-center ">
                            <span class="text-gray-400 mr-2 text-xl">
                                Hurry up! Offer ends in:
                            </span>
                            <div class="flex text-white mt-5 md:mt-0">
                                <div class="bg-red-500 px-4 py-2 font-normal text-xl	">
                                    00
                                </div>
                                <div class="bg-red-500 px-4 py-2 ml-2 font-normal text-xl	">
                                    00
                                </div>
                                <div class="bg-red-500 px-4 py-2 ml-2 font-normal text-xl 	">
                                    12
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex mt-5 grid grid-cols-2 md:grid-cols-6 gap-4">
                        <CardProduct v-for="i in 6" :key="i"/>
                    </div>
                </div>
            </div>
        </div>

        <!-- banner save -->
        <div class="w-full flex justify-center">
            <div class="flex flex-col w-[95%] md:w-[90%]">
                <div class="flex flex-col w-full mt-5">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <CardSmallSave v-for="i in 3" :key="i"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full flex justify-center">
            <div class="flex flex-col w-[95%] md:w-[90%]">
                <div class="flex flex-col w-full mt-5">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <CardBigSave v-for="i in 2" :key="i"/>
                    </div>
                </div>
            </div>
        </div>

        <!-- live -->
        <div class="flex flex-col w-full mt-5">
            <div class="flex w-full justify-center">
                <div class="w-[95%] md:w-[90%] p-2 flex justify-between">
                    <span class="text-xl font-semibold text-black">TOP SELLING PRODUCTS</span>
                    <div class="hidden md:flex">
                        <span class="text-xl font-normal text-blue-400 p-2">All Products</span>
                        <span class="text-xl font-normal text-gray-400 p-2">Smartphone</span>
                        <span class="text-xl font-normal text-gray-400 p-2">iPad</span>
                    </div>
                </div>
            </div>
            <div class="flex w-full justify-center my-5">
                <div class="w-[95%] md:w-[90%] grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                    <CardProduct v-for="i in 6" :key="i"/>
                </div>
            </div>
        </div>

        <div class="my-4">
            <div class="flex bg-blue-500 py-8">
            </div>
        </div>

    <div class="flex flex-col mt-5">
        <div class="flex w-full justify-center ">
            <div class="w-[95%] md:w-[90%] p-2 flex justify-between">
                <span class="text-xl  font-semibold	 text-black">RECOMMENDED FOR YOU</span>
            </div>
        </div>
        <div class="flex w-full justify-center py-8 ">
            <div class="w-[95%] md:w-[90%] grid grid-cols-2 md:grid-cols-6 gap-4">
                <CardProduct v-for="i in 6" :key="i"/>
            </div>
        </div>
    </div>

    <div class="flex flex-col">
        <div class="flex w-full justify-center ">
            <div class="w-[95%] md:w-[90%] flex justify-between">
                <span class="text-xl font-semibold text-black">
                    BLOG POSTS
                </span>
            </div>
        </div>
        <div class="flex w-full justify-center">
            <div class="w-[95%] md:w-[90%] py-8 ">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <CardBlog v-for="i in 4" :key="i" />
                </div>
            </div>
        </div>
    </div>

    <Footer/>

    </div>
</template>
<script>
import Navbar from "../components/layouts/Navbar.vue";
import Banner from "../components/layouts/Banner.vue";
import Footer from "../components/layouts/Footer.vue";
import CardProduct from "../components/card/cardProduct.vue";
import CardBlog from "../components/card/cardBlog.vue";
import CardCategory from "../components/card/cardCategory.vue";
import CardSmallSave from "../components/card/cardSmallSave.vue";
import CardBigSave from "../components/card/cardBigSave.vue";

export default {
  components: {
    Navbar,
    Banner,
    Footer,
    CardProduct,
    CardCategory,
    CardSmallSave,
    CardBigSave,
    CardBlog
  },
};
</script>