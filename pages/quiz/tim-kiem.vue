<template>
<div class="lg:flex lg:justify-center lg:items-center">
    <main class="lg:w-[90%]">
        <div class="px-5">
            <section class="h-16 w-full hidden lg:block">
                <Navbar/>
            </section>
            <section>
                <QuizNavBar :title="`Thế giới`" class="mt-2 lg:hidden"/>
            </section>

            <section class="mt-5">
                <QuizTabs :tabsList="[{id:1,text:`Bộ câu hỏi`},{id:2,text:`Người dùng`},{id:3,text:`Danh mục`} ]"/>
            </section>

            <section class="mt-7 grid md:grid-cols-2 md:gap-3 lg:grid-cols-3">
                <div v-for="i in 5" :key="i" class="flex gap-3 mt-5">
                    <QuestionCard/>
                    <div class="flex flex-col justify-between pt-1 pb-3">
                        <h1 class="font-semibold text-[18px] leading-snug">Hướng làm bạn trong mối quan hệ tình yêu</h1>
                        <p class="text-xs text-gray-500">
                            3 ngày trước
                            <span class="px-1.5 py-1 bg-blue-400 rounded-lg text-white ml-3 sm:px-3">1.8k player</span>
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </main>
</div>
</template>
<script>
import { QuizTabs} from '../../components/Layouts'
import {QuestionCard } from '../../components/Card'
import {QuizNavBar, Navbar} from '../../components/Layouts'


export default {
    components:{
        QuizTabs,
        QuestionCard,
        QuizNavBar,Navbar
    }
}
</script>