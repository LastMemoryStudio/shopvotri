<template >
<div class="lg:flex lg:justify-center lg:items-center">
    <main class="lg:w-[90%]">
        <div class="px-5 lg:px-0">
            <section class="h-16 hidden lg:block">
                <Navbar/>
            </section>
            <div>
                <QuizNavBar :title="`Thế giới`" class="block lg:hidden"/>
            </div>
            <section class="w-full lg:flex  lg:gap-5">
                <FindFriendSlide class="rounded-2xl mt-7 w-full h-full"/>
                <FindFriendSlide class="rounded-2xl mt-7 w-full hidden lg:block"/>
            </section>
            <ListReultQuiz result="133 Quiz" class="mt-7">
                <div class="md:w-full md:grid md:justify-stretch md:grid-cols-4 md:gap-5 lg:grid-cols-5 lg:gap-7">
                    <div v-for="i in 8" :key="i" class="grid grid-cols-2 gap-3 mt-5 md:grid-cols-1 md:w-full ">
                        <QuestionCard class="w-full h-[120px] md:w-full lg:h-[170px]"/>
                        <div class="flex flex-col justify-between pt-1 pb-3">
                            <h1 class="font-semibold text-[18px] leading-snug line-clamp-3">Hướng làm bạn trong mối quan hệ tình yêu</h1>
                            <p class="text-xs text-gray-500 flex flex-wrap gap-3 md:mt-5">
                                3 ngày trước
                                <span class="px-1.5 py-1 bg-blue-400 rounded-lg text-white sm:px-3">1.8k player</span>
                            </p>
                        </div>
                    </div>
                </div>
            </ListReultQuiz>
        </div>
    </main>
</div>
</template>
<script>
import { FindFriendSlide } from '../../components/Slide'
import {QuizNavBar} from '../../components/Layouts'
import {QuestionCard } from '../../components/Card'
import {ListReultQuiz} from '../../components/List'
import {Navbar} from '../../components/Layouts'


export default {
    components:{
        FindFriendSlide,
        QuizNavBar,
        QuestionCard,
        ListReultQuiz,
        Navbar
    }
}
</script>