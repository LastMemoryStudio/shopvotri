<template>
<div class="lg:flex lg:justify-center lg:items-center">
    <main class="lg:w-[90%]">
        <div class="px-5">
            <section class="h-16 hidden lg:block">
                <Navbar/>
            </section>
            <QuizNavBar class="lg:hidden" :title="`Top người dùng`"/>

            <List class="mt-7 md:flex md:justify-between md:flex-wrap md:gap-5">
                <SuggestionsFriend v-for="i in 5 " :key="i" class="mt-2" title="Lưu Trung Nghĩa" :username="`NghiaOMG`" :image="`https://banhmibahuynh.vn/wp-content/uploads/2022/11/Banh-mi-Ba-Huynh-o-moi-1.webp`"/>
            </List>
        </div>
    </main>
</div>
</template>
<script>
import { SuggestionsFriend } from '../../components/Card'
import {FeatureContainer} from '../../components/Feature'
import {ListTopAuthors,List} from '../../components/List'
import {QuizNavBar,Navbar} from '../../components/Layouts'

export default {
    components:{
        SuggestionsFriend,
        FeatureContainer,
        ListTopAuthors,
        QuizNavBar,List,Navbar
    }
}
</script>

