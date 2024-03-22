<template>
<div class="flex flex-col justify-center w-full">
	<Navbar/>
    <main class="mt-20">
        <section class="px-4 lg:px-0">
            <h1 class="text-[32px] tracking-[9.6px] text-center">BÀI VIẾT</h1>
        </section>

        <section>
            <LeftHotCard/>
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

        <section class="mt-20">
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
    <footer class="mt-16">
        <Footer/>
    </footer>
</div>
</template>

<style>
@media (min-width: 768px) {
  body {
    font-family: Comic Sans MS, Comic Sans, cursive;
  }
}
</style>

<script>
import Navbar from '../components/layouts/Navbar.vue';
import { NewsCard, RightHotCard, LeftHotCard } from '../components/Card'
import { Footer } from '../components/Layouts'

export default {
    components: {
        Navbar,
        NewsCard,
        RightHotCard,
        LeftHotCard,
        Footer,
    }
}
</script>