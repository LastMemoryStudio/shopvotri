<link rel="stylesheet" href="https://res.cloudinary.com/djyikpkzv/raw/upload/v1692426858/MemoryEcommerceShop/style/slide.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" integrity="sha256-5uKiXEwbaQh9cgd2/5Vp6WmMnsUr3VZZw0a8rKnOKNU=" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js" integrity="sha256-FZsW7H2V5X9TGinSjjwYJ419Xka27I8XPDmWryGlWtw=" crossorigin="anonymous"></script>

@isset($slide)

<section class="splide" aria-label="Home Slide">
	<div class="splide__track">
		<ul class="splide__list">\
		@foreach($slide as $slideItem)
			<li class="splide__slide">
				<img class="object-cover" src="{{ $slideItem['image'] }}" alt="{{ $slideItem['name'] }}">
			</li>
		@endforeach
		</ul>
	</div>
</section>
@endisset
<script>
	new Splide('.splide', {
		type: 'slide',
		perPage: 1,
		autoplay: true
	}).mount();
</script>
