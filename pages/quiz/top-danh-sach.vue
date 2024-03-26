<template>
<div class="lg:flex lg:justify-center lg:items-center">
    <main class="lg:w-[90%]">
        <div class="px-5">
            <section class="h-16 hidden lg:block">
                <Navbar/>
            </section>
            <QuizNavBar :title="`Top danh sách`" class="lg:hidden"/>

            <List class="mt-8">
                <div class="flex justify-between flex-wrap lg:grid lg:grid-cols-4 lg:gap-3 ">
                    <CollectionsCard :title="`giáo viên`" class="w-[48%] bg-blue-400 rounded-2xl cursor-pointer h-[120px] mt-5 md:h-[210px] md:mt-7 lg:mt-2 lg:w-full"/>
                    <CollectionsCard :title="`giáo dục`" class="w-[48%] bg-blue-400 rounded-2xl cursor-pointer h-[120px] mt-5 md:h-[210px] md:mt-7 lg:mt-2 lg:w-full"/>
                    <CollectionsCard :title="`trò chơi`" class="w-full bg-blue-400 rounded-2xl cursor-pointer h-[120px] mt-5 md:h-[210px] md:mt-7 lg:mt-2 lg:w-full"/>
                    <CollectionsCard :title="`vẽ`" class="w-[31%] bg-blue-400 rounded-2xl cursor-pointer h-[120px] mt-5 md:h-[210px] md:mt-7 lg:mt-2 lg:w-full"/>
                    <CollectionsCard :title="`trẻ em`" class="w-[31%] bg-blue-400 rounded-2xl cursor-pointer h-[120px] mt-5 md:h-[210px] md:mt-7 lg:mt-2 lg:w-full"/>
                    <CollectionsCard :title="`sức khỏe`" class="w-[31%] bg-blue-400 rounded-2xl cursor-pointer h-[120px] mt-5 md:h-[210px] md:mt-7 lg:mt-2 lg:w-full"/>
                    <CollectionsCard :title="`đồng tiển `" class="w-[48%] bg-blue-400 rounded-2xl cursor-pointer h-[120px] mt-5 md:h-[210px] md:mt-7 lg:mt-2 lg:w-full"/>
                    <CollectionsCard :title="`thể thao`" class="w-[48%] bg-blue-400 rounded-2xl cursor-pointer h-[120px] mt-5 md:h-[210px] md:mt-7 lg:mt-2 lg:w-full"/>
                    <CollectionsCard :title="`thức ăn và nước uống`" class="w-full bg-blue-400 rounded-2xl cursor-pointer h-[120px] mt-5 md:h-[210px] md:mt-7 lg:mt-2 lg:w-full"/>
                    <CollectionsCard :title="`cuộc đời`" class="w-[31%] bg-blue-400 rounded-2xl cursor-pointer h-[120px] mt-5 md:h-[210px] md:mt-7 lg:mt-2 lg:w-full"/>
                    <CollectionsCard :title="`thế giới`" class="w-[31%] bg-blue-400 rounded-2xl cursor-pointer h-[120px] mt-5 md:h-[210px] md:mt-7 lg:mt-2 lg:w-full"/>
                    <CollectionsCard :title="`vũ trụ`" class="w-[31%] bg-blue-400 rounded-2xl cursor-pointer h-[120px] mt-5 md:h-[210px] md:mt-7 lg:mt-2 lg:w-full"/>
                </div>
            </List>
        </div>
    </main>
</div>
</template>

<script>
import {FeatureContainer} from '../../components/Feature'
import {ListTopAuthors, List} from '../../components/List'
import {QuizNavBar, Navbar} from '../../components/Layouts'
import { CollectionsCard } from '../../components/Card'


export default {
    components:{
        FeatureContainer,
        ListTopAuthors,
        QuizNavBar,
        CollectionsCard,
        List,Navbar
    }
}
</script>