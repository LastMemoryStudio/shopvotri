<template>
    <div class="lg:flex lg:justify-center lg:items-center">
        <div class="lg:flex lg:flex-col lg:w-[90%] lg:mx-0">
            <section class="h-16 hidden lg:block">
                <Navbar/>
            </section>
            <section class="px-5 mb-10 md:px-5 lg:px-0">
                <QuizHotSlideVue/>
            </section>

            <ListTop class="mb-10" title="Collections">
                <div class="flex gap-3 px-5 overflow-x-scroll overflow-hidden justify-between mt-5 lg:px-0">
                    <ImgCard v-for="i in 5" :key="i"/> 
                </div>
            </ListTop>

            <ListTop class=" mb-10" title="Autors">
                <div class="flex gap-3 px-5 overflow-x-scroll overflow-hidden justify-between lg:px-0">
                    <AuthorCard v-for="i in 13" :key="i"/>
                </div>
            </ListTop>

            <ListTop class=" mb-10" title="Quiz">
                <div class="flex gap-3 overflow-x-scroll px-5 overflow-hidden justify-between lg:px-0">
                    <QuestionCard v-for="j in 5" :key="j" class=""/>
                </div>
            </ListTop>

        </div>
    </div>
</template>

<script>
import QuizHotSlideVue from '../../components/slide/QuizHotSlide.vue';
import ImgCard from '../../components/card/ImgCard.vue';
import AuthorCard from '../../components/card/AuthorCard.vue';
import QuestionCard from '../../components/card/QuestionCard.vue'
import {ListTop} from '../../components/List'
import {Navbar} from '../../components/Layouts'


export default {
    components:{
        QuizHotSlideVue,
        ImgCard,
        AuthorCard,
        QuestionCard,
        ListTop,
        Navbar
    }
}
</script>