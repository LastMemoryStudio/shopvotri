<div class="h-[7em] ">
    @include('layout/navbar')
</div>
@include('home/slide') 

{{-- cardSale --}}
<div class="my-10 w-full flex flex-col items-center">
    <div class="flex flex-wrap justify-around mx-auto md:justify-between mb-4 md:w-[80%] ">
        @for($i = 0; $i<8; $i++)
        <div class="w-[90%] my-4 lg:my-6 lg:mx-0 md:w-auto">
            @include('layout/cardSale')
        </div>
        @endfor
    </div>
</div>

{{-- card --}}
<div class="my-10 w-full flex flex-col items-center">
    <div class="w-[80%] mb-3">
        <h1 class="text-3xl text-left font-semibold">Sản phẩm của <a href="{{$category[0]['alias']}}" class="text-blue-500"> {{ $category[0]['name'] }} </a> </h1>
    </div>
    <div class="flex flex-wrap justify-around mx-auto md:justify-between md:w-[80%] mb-4">
        @isset($product)
            @foreach($product as $productItem)
                <div class="my-5 lg:mx-0">
                    @include('layout/card')
                </div>
            @endforeach
        @endisset
    </div>
</div>

@include('layout/footer')