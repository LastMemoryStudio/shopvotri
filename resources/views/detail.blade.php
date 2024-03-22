<div class="h-[7em] ">
    @include('layout/navbar')
</div>
<div class="flex flex-wrap justify-center">
    @include('detail/detail')
</div>
<div class="flex justify-center ">
    <div class="w-[65%]">
        <div class="flex flex-col justify-center ">
            <p>
                {!! $productDetail['des'] !!}
            </p>
        </div>
    </div>
</div>

<div class=" flex justify-center ">
    <div class=" w-[65%]">
        <h3 class="text-3xl text-black font-semibold">Sản phẩm liên quan</h3>
        <div class="flex justify-between mt-5">
            @foreach($product as $productItem)
                @include('layout/card')
            @endforeach
        </div>
    </div>
</div>
@include('layout/footer')