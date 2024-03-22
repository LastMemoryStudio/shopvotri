<template>
<section class="-z-50">
    <div class="flex flex-col-reverse md:flex-row md:justify-between items-center w-full h-[100vh] md:h-[40vh] lg:w-[86%] lg:mx-auto lg:h-[80vh]">
        <div class="w-full px-5 z-10 text-center md:text-left md:w-1/2 lg:w-[500px] lg:mx-0 animate__animated animate__slideInUp">
            <h1 class="text-4xl text-black font-extrabold ">
                Đếm ngày yêu <span class="text-red-500 underline">ghi lại </span> từng ngày yêu nhau
            </h1>
            <p class="text-base text-gray-400 my-5">
                Hãy cùng đếm ngày yêu và chia sẻ mỗi ngày đều là ngày đặc biệt của chúng ta.
            </p>
            <div class="flex items-center justify-center md:justify-start">
                <button @click="toggleModal('register_early')" class="flex justify-center items-center py-2 px-5 bg-black text-white rounded-xl mr-5 hover:text-red-500">
                    <i class="fa-solid fa-play mr-1 text-2xl"></i>
                    <p class="ml-1">Đăng ký sớm</p>
                </button>
                <button @click="toggleModal('download')" class="flex justify-center items-center py-2 px-5 rounded-xl border-2 border-black hover:bg-black hover:text-white duration-500">
                    <i class="fa-brands fa-google-play mr-1 text-2xl"></i>
                    <p class="ml-1">CH Play</p>
                </button>
            </div>
            <p class="text-sm text-gray-400 mt-4">
                Vấn đề về ứng dụng của chúng tôi? <a href="#" class="text-black font-semibold hover:text-blue-500">Liên hệ ngay</a>
            </p>
        </div>
        <div class="w-full md:w-1/2 lg:w-[600px] animate__animated animate__backInRight">
            <img src="https://ik.imagekit.io/0lpnflx37/Background/ColorFull/1697727993927.png?updatedAt=1697728008675" alt="Loveny Theme">
        </div>
    </div>
</section>
</template>

<script>
export default {
    methods: {
        toggleModal(type){
            this.$emit('toggleModal', type)
        }
    }
}
</script>