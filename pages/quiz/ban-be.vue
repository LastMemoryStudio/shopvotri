<template>
<div class="lg:flex lg:justify-center lg:items-center">
    <main class="lg:w-[90%]">
        <div class="px-5 lg:px-0">
            <section class="h-16 hidden lg:block">
                <Navbar/>
            </section>
            <section class="w-full lg:flex lg:gap-5">
                <FindFriendSlide class="rounded-2xl"/>
                <FindFriendSlide class="rounded-2xl hidden lg:block"/>
            </section>

            <FeatureContainer class="lg:hidden">
                <IconButton title="seach contact" icon="phone"/>
                <IconButton title="Invite friends" icon="users"/>
                <IconButton title="Connect to Facebook" icon="facebook"/>
            </FeatureContainer>

            <ListTopAuthors class="lg:mt-16">
                <div class="md:grid md:grid-cols-6 md:gap-5 lg:grid-cols-8">
                    <SuggestionsFriend v-for="i in 8" 
                    :key="i"  title="Ân" :username="`an`" :image="`https://banhmibahuynh.vn/wp-content/uploads/2022/11/Banh-mi-Ba-Huynh-o-moi-1.webp`"
                    class="mt-5"
                    />
                </div>
            </ListTopAuthors>
            
        </div>
    </main>
</div>
</template>
<script>
import { FindFriendSlide } from '../../components/Slide'
import { IconButton } from '../../components/Button'
import { SuggestionsFriend } from '../../components/Card'
import {FeatureContainer} from '../../components/Feature'
import {List, ListTopAuthors} from '../../components/List'
import {Navbar} from '../../components/Layouts'


export default {
    components:{
        FindFriendSlide,
        IconButton,
        SuggestionsFriend,
        FeatureContainer,
        List,
        ListTopAuthors,
        Navbar
    }
}
</script>