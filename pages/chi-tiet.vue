<template>
    <div>
        <header>
            <Navbar/>
        </header>
        <main class="mt-20">

            <section class="px-4 lg:px-0">
                <h1 class="text-[32px] tracking-[9.6px] text-center">BÀI VIẾT</h1>
            </section>

            <div class=" mt-20 w-full mx-auto flex justify-center items-center px-4 md:w-[97%] md:px-0 lg:w-[70%]">
                <img src="https://i.ibb.co/nL3GVYh/chat-gpt-la-gi-1.jpg" alt="" class="rounded-[18px] w-full">
            </div>

            <section>
                <RightHotCard/>
            </section>
            <section class="flex flex-col justify-center items-center mt-14 px-4 lg:px-0 lg:w-[85%] lg:mx-auto">
                <div class="grid grid-cols-1 w-full gap-3 md:grid-cols-4 lg:gap-5">
                    <NewsCard 
                        v-for="i in 4" 
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
import { RightHotCard, NewsCard  } from '../components/Card'
import Footer from '../components/layouts/Footer.vue'

export default {
    components:{
        Navbar,
        RightHotCard,
        NewsCard,
        Footer
    }
}

</script>