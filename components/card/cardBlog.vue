<template>
	<div class="flex flex-col card-blog overflow-hidden">
		<img class="w-[400px]" src="https://demo-uminex.myshopify.com/cdn/shop/articles/10_cc1abdba-a10a-4889-8b57-88133851a0ba_360x.png?v=1677830513" alt="">
		<div class="p-4 drop-shadow bg-white">
			<div class="flex flex-col">
				<a class="text-blue-400 text-2xl	" href="">Technology</a>
				<a class="text-black text-2xl" href="">The Smartphone Has Just Launched in Sep 2022</a>
			</div>
			<div class="mb-2">
				<div class="text-gray-500">Post by ALO Support</div>
			</div>
			<div class="main-info-post mb-2">
				<div class="text-gray-500 ">
					<p>iPad Pro is the fastest device of its kind. It’s designed to take full advantage...
					</p>
				</div>
			</div>
			<div class="flex justify-between py-4 border-t-2 mt-2">
				<a class="text-xl" href="" title="The Smartphone Has Just Launched in Sep 2022" tabindex="0">
                    Read more
                </a>
				<div class="text-xl">
					<span class="month">Mar</span>,
					<span class="day">03</span>
					<span class="year">2023</span>
				</div>
			</div>
		</div>
	</div>
</template>

<style>
.card-blog img {
  transition: transform 0.3s ease;
}

.card-blog:hover img {
  transform: scale(1.1);
}
</style>