<template>
<div class="w-full flex justify-center items-center">
    <header class="z-50 mx-auto flex justify-between items-center h-12 bg-inherit backdrop-blur fixed top-0 p-2 w-full max-w-screen lg:w-[85%]">
        <nuxt-link to="/" href="#" class="flex items-center justify-start">
            <img src="https://ik.imagekit.io/0lpnflx37/LastMemory/Logo/LoverCounter/log.png?updatedAt=1697546936452" alt="Loveny Logo" class="w-[58px] md:w-[64px] lg:w-[72px]">
            <h1 class="font-bold text-lg">Loveny</h1>
        </nuxt-link>
        <nav class="text-gray-500 flex justify-between hidden md:block">
            <nuxt-link to="/" type="button" class="md:mx-2 lg:mx-3.5 text-black">Trang chủ</nuxt-link>
            <button type="button" class="md:mx-2 lg:mx-3.5" @click="scrollToElement('weHave')">Về app</button>
            <button type="button" class="md:mx-2 lg:mx-3.5" @click="scrollToElement('statistical')">Thống kê</button>
            <button type="button" class="md:mx-2 lg:mx-3.5" @click="scrollToElement('frontend')">Giao diện</button>
            <nuxt-link to="/bai-viet" type="button" class="md:mx-2 lg:mx-3.5">Bài viết</nuxt-link>
        </nav>
        <div class="flex items-center ">
            <button @click="toggleModal('register_early')" class="py-2 px-5 text-black hover:text-red-500 hidden md:block">
                Đăng ký sớm
            </button>
            <button class="text-white lg:ml-5" @click="toggleModal('download')">
                <div class="bg-gradient-to-r from-red-500 via-pink-500 to-fuchsia-500 py-2 px-5 rounded-xl hover:text-black">
                    <i class="fa-solid fa-download"></i>
                    Tải Xuống
                </div>
            </button>
        </div>
    </header>
</div>
</template>

<script>
export default {
    methods: {
        toggleModal(type){
            this.$emit('toggleModal', type);
        },
        scrollToElement(elementTo){
            this.$router.push('/');
            this.$emit('scrollToElement', elementTo);
        }
    }
}
</script>