<aside class="bg-white rounded-xl px-4 py-4 text-black">
    <h1 class="text-2xl font-semibold">Danh mục sản phẩm</h1>
    <ul class="text-lg flex justify-start items-center flex-wrap w-full">
        @isset($category)
            @foreach ($category as $categoryItem)
                <li class="my-3 text-base hover:text-red-500 w-6/12 md:w-3/12 lg:w-full">
                    <a href="{{ $categoryItem['alias'] }}">
                        {{ $categoryItem['name'] }}
                    </a>
                </li>
            @endforeach
        @endisset
    </ul>
</aside>