<template>
<div class="lg:flex lg:justify-center lg:items-center">
    <main class="lg:w-[90%]">
        <div>
            <section class="h-16 hidden lg:block">
                <Navbar/>
            </section>
            <section>
                <img src="https://i.ibb.co/nL3GVYh/chat-gpt-la-gi-1.jpg" alt="" class="rounded-b-[30px] h-[150px] object-cover w-full md:h-[200px] lg:h-[350px]">
            
                <div class="flex flex-col items-center -mt-8 md:-mt-10 lg:-mt-20">
                    <img class="w-16 h-16 rounded-full ring-4 ring-white md:w-20 md:h-20 lg:w-40 lg:h-40" src="https://banhmibahuynh.vn/wp-content/uploads/2022/11/Banh-mi-Ba-Huynh-o-moi-1.webp" alt="Bordered avatar">
                    <h2 class="text-[22px] font-semibold mt-2 lg:mt-4 lg:text-3xl " >Trần Lâm Tuấn</h2>
                    <p class=" text-gray-400">@tranlamtuan</p>
                </div>

                <nav class="flex justify-between px-5 mt-7">
                    <span class="flex flex-col items-center text-[19px] text-gray-500/90" v-for="i in 8" :key="i">
                        <h4>Câu hỏi</h4>
                        <p class="text-black font-bold text-[22px]">34</p>
                    </span>
                </nav>
            </section>

            <section class="px-5 mt-8 lg:px-0 lg:flex lg:justify-center lg:items-center">
                <FollowButton class="lg:w-[110px]"/>
            </section>

            <section class="mt-10 px-5">
                <QuizTabs :tabsList="[{id:1,text:`Bộ câu hỏi`},{id:2,text:`Danh mục`},{id:3,text:`Thông tin`} ]"/>
            </section>

            <ListReultQuiz result="89quiz" class="mt-7 px-5">
                <div class="md:grid md:grid-cols-2 md:gap-3 lg:grid-cols-3">
                    <div v-for="i in 3" :key="i" class="flex gap-3 mt-5 md:mt-2">
                        <QuestionCard/>
                        <div class="flex flex-col justify-between pt-1 pb-3">
                            <h1 class="font-semibold text-[18px] leading-snug">Hướng làm bạn trong mối quan hệ tình yêu</h1>
                            <p class="text-xs text-gray-500">
                                3 ngày trước
                                <span class="px-1.5 py-1 bg-blue-400 rounded-lg text-white ml-3 sm:px-5">1.8k player</span>
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
import {QuizTabs} from '../../components/Layouts'
import {QuestionCard } from '../../components/Card'
import {FollowButton} from '../../components/Button'
import {ListReultQuiz} from '../../components/List'
import {Navbar} from '../../components/Layouts'


export default {
    components:{
        QuizTabs,
        QuestionCard,
        FollowButton,
        ListReultQuiz,Navbar
    }
}
</script>