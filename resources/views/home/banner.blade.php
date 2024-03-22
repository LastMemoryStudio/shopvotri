@isset($banner)
<div class="w-full relative">
    <div class="banner-slider">
        @foreach($banner as $bannerItem)
        <img src="{{ $bannerItem['image'] }}" alt="{{ $bannerItem['name'] }}">
        @endforeach
    </div>
    <div class="banner-slider-button">
        <button class="banner-slider-button-previous absolute top-[45%] left-[2em]">
            <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512" fill="rgb(156 163 175)">
                <path d="M512 256A256 256 0 1 0 0 256a256 256 0 1 0 512 0zM271 135c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-87 87 87 87c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L167 273c-9.4-9.4-9.4-24.6 0-33.9L271 135z"/>
            </svg>
        </button>
        <button class="banner-slider-button-next absolute top-[45%] right-[2em]">
            <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512" fill="rgb(156 163 175)">
                <path d="M0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM241 377c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l87-87-87-87c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L345 239c9.4 9.4 9.4 24.6 0 33.9L241 377z"/>
            </svg>
        </button>
    </div>
</div>
@endisset


<style>
    .banner-slider {
      width: 80%;
      margin: 0 auto;
    }
    .banner-slider img{
        height: 200px;
        object-fit: cover;
        border-radius: 0.5em;
    }
    .slick-arrow{
        display: none !important;
    }
</style>
<script>
  $(document).ready(function(){
    var slider = $('.banner-slider').slick({
      autoplay: true,
      arrows: false,
      dots: true
    });
    $('.banner-slider-button-previous').click(function() {
         slider.slick('slickPrev');
    });

    $('.banner-slider-button-next').click(function() {
        slider.slick('slickNext');
    });
  });
</script>