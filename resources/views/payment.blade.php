<div class="bg-gray-300 flex justify-center items-center h-screen overflow-y-hidden">
    <div class="w-[90%] bg-white h-[90%] rounded-2xl shadow-md lg:flex">


        <!-- Left  -->

        <div class="lg:w-4/6 relative shadow-md">
            <img class="w-full h-2/5 rounded-tl-2xl" src="https://i.ibb.co/kQs79v4/php7554.png" alt="">
            <div class="absolute w-[150px] h-[80px] top-0 flex justify-center items-center">
                <p class="text-white"> <i class="fa-solid fa-arrow-left"></i> Quay lại </p>
            </div> 
            <div class="w-full h-full p-4 md:p-12">
                <div class="flex items-end">
                    <p class="text-yellow-800 font-bold text-2xl"> Giỏ hàng </p>
                    <span class="text-red-400 ml-4 font-bold"> 3 vật phẩm </span>
                </div>
                <!-- start card -->
                <div class="h-1/2 overflow-y-scroll" id="voucherList">
                    @for($i = 0; $i < 3; $i++)
                        @include('cart/product')
                    @endfor
                </div>
                <!-- end card -->
            </div>
        </div>


        <!-- Left  -->


        <!-- Right  -->


        <div class="lg:w-2/6 rounded-tr-2xl rounded-br-2xl lg:h-full bg-gray-100">

            <div class="w-full h-full p-4 md:p-24">
                <div class="flex items-center">
                    <div class="pr-4 pb-4">
                        Thanh toán: <span class="font-bold text-blue-300">Chuyển Khoản</span>
                    </div>
                </div>


                <div class="h-full h-[10em] md:h-[55%]">
                    <div class="font-bold mb-2">
                        Chọn mã khuyến mãi:
                    </div>
                    <div class="h-full overflow-y-scroll" id="voucherList">
                        @for($i = 0; $i < 5; $i++)
                            @include('voucher/voucher')
                        @endfor
                    </div>

                </div>

                <div class="mt-12">

                    <div class="flex justify-between">
                        <div>
                            Tổng giá tiền:
                        </div>
                        <div>
                            12,000đ
                        </div>
                    </div>

                    <div class="flex justify-between my-2">
                        <div>
                            Giảm giá:
                        </div>
                        <div>
                            5,000đ
                        </div>
                    </div>

                    <div class="flex justify-between items-center">
                        <div>
                            Thanh toán: 
                            <br>
                            <span class="font-bold">7,000đ</span>
                        </div>
                        <div>
                            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center">
                                Thanh toán
                            </button>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <!-- Right  -->
    </div>
</div>
<link rel="stylesheet" href="https://res.cloudinary.com/djyikpkzv/raw/upload/v1692424836/MemoryEcommerceShop/style/vourcher.min.css">
<script>
    $('.selectVoucher').click(function(){
        $(this).find('img:nth-child(2)').toggleClass('hidden')
    })
</script>