<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">

<div class="h-[7em]">
    @include('layout/navbar')
</div>

@if(count($slide) > 0)
@include('home/slide')
@endif

@include('layout/sidebar')

{{-- cardCategory --}}
@if(count($category) > 0 )
<div class="my-5 w-full flex flex-col items-center">
    <div class="w-[80%] mb-3 ">
        <h1 class="text-xl text-left font-semibold">Danh mục</h1>
    </div>
    <div class="flex justify-around mx-auto flex-wrap md:justify-between md:w-[80%] mb-4">
            @foreach($category as $categoryItem)
                <div class="my-3 lg:my-0 lg:mx-0">
                    @include('layout/cardCategory')
                </div>
            @endforeach
    </div>
</div>
@endif

{{-- card --}}
@if(count($product) > 0)
<div class="my-10 w-full flex flex-col items-center">
    <div class="w-[80%] mb-3">
        <h1 class="text-xl text-left font-semibold">sản phẩm</h1>
    </div>

    <div class="w-[80%] flex w-full flex-wrap justify-between">
        @include('product/listProduct')
    </div>


    <button class="w-[92%] h-12 rounded-xl bg-white text-lg font-medium md:w-[80%] ">
        <a href="/san-pham">
            Xem thêm
        </a>
    </button>
</div>
@endif

@if(count($tradeMark) > 0)
<div class="w-full flex flex-col items-center">
    <div class="md:w-[80%]">
        <h1 class="text-xl text-left font-semibold">các hãng công nghệ</h1>
    </div>
    <div class="flex flex-wrap justify-around mx-auto md:justify-between md:w-[80%] mb-5">
            @foreach($tradeMark as $Item)
            <div class="my-3 lg:mx-0">
                @include('layout/branch')
            </div>
            @endforeach
    </div>
</div>
@endisset

@if(count($banner) > 0)
<div class="w-full">
    @include('home/banner')
</div>
@endif

{{-- branch --}}
@if(count($tradeMark) > 0)
<div class="w-full flex flex-col items-center">
    <div class="md:w-[80%]">
        <h1 class="text-xl text-left font-semibold">các cửa hàng đối tác</h1>
    </div>
    <div class="flex flex-wrap justify-around mx-auto md:justify-between md:w-[80%] mb-5">
            @foreach($tradeMark as $Item)
            <div class="my-3 lg:mx-0">
                @include('layout/branch')
            </div>
            @endforeach
    </div>
</div>
@endif
    
@include('layout/footer')