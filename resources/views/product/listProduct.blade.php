    @isset($product)
        @foreach($product as $productItem)
            <div class="mb-5">
                @include('layout/card')
            </div>
        @endforeach
    @endisset