<template>
    <div class="w-full my-3 hover:bg-gradient-to-l hover:from-violet-500 hover:to-orange-500 rounded-xl p-0.5 md:w-60 h-52 lg:mx-5 lg:w-80 lg:h-60">
		<div class="flex flex-col flex-wrap justify-center items-center w-full h-full bg-white px-7" style="border-radius: inherit;">
			<i :class="`${icon} py-2.5 px-2 ${classed} rounded-full`"></i>
			<h2 class="my-5 text-2xl font-semibold cursor-pointer">{{ title }}</h2>
			<p class="flex-wrap w-full text-lg text-center cursor-pointer">{{ des }}</p>
		</div>
	</div>
</template>

<script>
export default {
	props: {
		classed: String,
		icon: String,
		title: String,
		des: String
	}
}
</script>