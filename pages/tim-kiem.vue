<template>
    <div>
        <header>
            <Navbar/>
        </header>
        <main class="mt-20">

            <section class="px-4 lg:px-0">
                <h1 class="text-[32px] tracking-[9.6px] text-center">BÀI VIẾT</h1>
            </section>

            <section class="px-4 lg:px-0">
                <nav class="flex justify-between border-b border-gray-400 pb-1.5 w-full mt-3 lg:w-[85%] lg:mx-auto">
                    <h1 class=" text-gray-400">Có <span class="text-rose-500 font-me">10</span> kết quả được tìm thấy</h1>
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-magnifying-glass text-gray-400"></i>
                        <span class="text-gray-400 ">Tìm kiếm</span>
                    </div>
                </nav>
            </section>

            <section class="flex flex-col justify-center items-center mt-14 px-4 lg:px-0 lg:w-[85%] lg:mx-auto">
                <div class="grid grid-cols-1 w-full gap-3 md:grid-cols-4 lg:gap-5">
                    <NewsCard 
                        v-for="i in 16" 
                        :key="i" :title="'Bài viết ' + i" 
                        :shortDes="'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis viverra ante. Nulla auctor, sapien ac mattis congue,'"
                        :tags="[{ color: 'rgb(154 52 18)', tags: 'Love' },{ color: 'rgb(250 204 21)', tags: 'Em' }]"
                    />
                </div>
            </section>
        </main>
        <footer class="mt-20">
            <Footer/>
        </footer>
    </div>
</template>

<script>
import Navbar from '../components/layouts/Navbar.vue'
import { NewsCard  } from '../components/Card'
import Footer from '../components/layouts/Footer.vue'

export default {
    components:{
        Navbar,
        NewsCard,
        Footer
    }
}

</script>