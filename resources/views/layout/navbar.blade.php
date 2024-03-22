<nav class="bg-white w-full h-[5em] hidden md:flex justify-center items-center shadow-md fixed z-10">
    <!-- Tablet / Desktop -->
    <div class="bg-white md:w-full lg:w-3/4 h-2/3 hidden md:flex justify-around items-center">

        <a href="/" class="logo w-20 z-10 h-full bg-contain bg-no-repeat bg-[url(https://res.cloudinary.com/djyikpkzv/image/upload/v1692427632/MemoryEcommerceShop/icons/favicon.webp)]">
        </a>

        <div class="mid w-[70%] h-full bg-white flex justify-around items-center">
            <a href="/san-pham" class="flex justify-around items-center text-white bg-gradient-to-r from-blue-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-800 font-medium rounded-lg md:text-xs lg:text-sm md:px-3 lg:px-5 py-2.5 text-center mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg>
                <p class="ml-1">Sản Phẩm</p>
            </a>
            

            <!-- Search -->
            <form class="md:mr-2 ld:mr-0">
                <div class="flex">
                    <div class="relative w-full">
                        <input type="search" id=location-search" class="block w-[25em] p-2.5 z-20 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Tìm kiếm" required>
                        <button type="submit" class="absolute w-[12.5%] top-0 right-0 h-full p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>
            <!-- End Search -->

            <!-- Giỏ hàng -->
                <!-- <div class="p-1 rounded-lg bg-gradient-to-r from-rose-500 to-blue-500"> -->
                <button class="relative inline-flex items-center justify-center p-0.5 mr-2 overflow-hidden text-sm font-medium rounded-lg group hover:bg-gradient-to-br hover:from-blue-500 hover:to-red-500 hover:fill-red-300 transition duration-300">
                    <span class="cart-svg relative px-2.5 py-2.5 bg-blue-200 rounded-md hover:fill-red-300 transition duration-300">
                        <img
                            loading="lazy"
                            src="https://res.cloudinary.com/djyikpkzv/image/upload/v1692436200/MemoryEcommerceShop/svg/cart_yzfblu.svg"
                            alt="" width="100%" height="100%">
                    </span>
                </button>
                    
                <!-- </div> -->
            <!-- End Giỏ hàng -->
            
        </div>
        
        <button type="button" type-auth="login" class="authButton text-white bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-3 py-2.5 text-center">
            Đăng Nhập
        </button>
    </div>
    <!-- End Tablet / Desktop -->

</nav>
    <!-- Mobile -->
<nav class="md:hidden mb-6">
    <div class="">
        <div class="flex justify-between items-center w-full mt-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list w-8 h-8 toggle-drawer-nav" viewBox="0 0 16 16" class="fill-white">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
            <div class="w-22 h-22 text-center font-bold font-mono text-2xl">
                Memory Store
            </div>
            <div class="w-8 h-8"></div>
        </div>

        <form class="md:mr-2 ld:mr-0 mt-4">
            <div class="flex justify-center">
                <div class="relative w-[90%]">
                    <input type="search" id=location-search" class="block w-full p-3 z-20 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Tìm kiếm" required>
                    <button type="submit" class="absolute top-0 right-0 h-full p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>
            </div>
        </form>
        
    </div>
    
</nav>
        <!-- End Modile -->

        @include('auth/login')

    <script>
        $(".cart-svg").hover(
            function() {
                $(this).find("img").attr('src', 'https://res.cloudinary.com/djyikpkzv/image/upload/v1692436200/MemoryEcommerceShop/svg/cartActive_gh0gbu.svg');
            },
            function() {
                $(this).find("img").attr('src', 'https://res.cloudinary.com/djyikpkzv/image/upload/v1692436200/MemoryEcommerceShop/svg/cart_yzfblu.svg');
            }
        );


        $('.authButton').click(function(){
            console.log( '#' + $( this ).attr('type-auth')  )
            $( '#' + $( this ).attr('type-auth') + 'Modal' ).toggleClass('hidden')
        })
    </script>