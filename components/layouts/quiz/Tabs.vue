<template>
    <div class="grid grid-flow-col justify-stretch  h-14 rounded-full bg-gradient-to-r from-cyan-400 to-blue-300">
        <div class=" h-full flex justify-center items-center" v-for="i in tabsList" :key="i">
            <button class="font-medium rounded-full w-[95%] h-[90%]" :class="{'bg-white w-[95%] h-[90%]':i.id==tabActive}" @click="changeTabActive(i.id)">
                {{ i.text }}
            </button>
        </div>
    </div>
</template>

<script>


export default {
    props:{
        tabsList: Array,
    },
    data() {
        return {
         tabActive:1   
        }
    },
    methods:{
        changeTabActive(id){
            this.tabActive= String(id)
        }
    }
}



</script>