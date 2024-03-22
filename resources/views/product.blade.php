<div class="h-[7em]">
    @include('layout/navbar')
</div>

@include('home/slide')
<div class="flex justify-center mt-10">
    @include('product/breadcrumb')
</div>

<div class="flex justify-center mt-5">
    <div class="w-[90%] lg:flex justify-between items-start flex-wrap md:flex-nowrap lg:w-[80%] md:mr-3">
        {{-- sidebar --}}
        <div class="w-full mb-4 lg:w-3/12">
            @include('product/sidebar')
        </div>
        {{-- card --}}
        <div class="lg:ml-4 w-full lg:w-9/12 mb-4">
            <div class="mb-4 lg:hidden text-2xl font-semibold">
                Sản phẩm mới
            </div>
            <div class="flex w-full flex-wrap justify-between">
                @include('product/listProduct')
            </div>
            <div class="flex justify-center">
                @include('product/pagination')
            </div>
        </div>
        
    </div>
</div>


@include('layout/footer')