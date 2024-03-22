    <div class="w-full md:w-44 bg-white py-5 rounded-xl px-2 duration-200 hover:shadow-black/10 hover:shadow-xl cursor-pointer md:w-48 lg:w-52">
        <div class="relative">
            <div class="flex justify-center w-full">
                <a href="{{ $productItem['alias'] }}">
                    <img loading="lazy" src="{{ $productItem['image'] ?? 'https://i.ibb.co/bdmmfQj/noimg.jpg' }}" alt="" class="w-[80%] mx-5 object-cover">
                </a>
            </div>
            <i class="fa-regular fa-heart absolute z-10 text-gray-400 -top-4 -right-1 duration-200 hover:bg-clip-text hover:text-transparent hover:bg-gradient-to-r hover:from-blue-700 hover:to-red-700 hover:shadow-md hover:shadow-black/40 p-2.5 rounded-full"></i>
        </div>
        <div class="w-full">
            
            <a href="{{ $productItem['alias'] }}" class="text-2xl text-blue-500 font-semibold my-2 hover:text-[#0D63F3]">
                {{ $productItem['name'] }}
            </a>
            <h2 class="w-full text-base my-2 line-clamp-2">
                {{ $productItem['cate_name'] }}
            </h2>
            <p class="text-gray-600 text-sm my-2">
                số lượng: {{ $productItem['qty'] }}
            </p>
        </div>
        <div class="w-full flex justify-between mt-4">
            <a href="{{ $productItem['alias'] }}" class="w-[65%] py-1 text-xl text-center uppercase font-bold rounded-lg bg-blue-600 text-white duration-500 bg-gradient-to-r hover:from-blue-700 hover:to-red-700">mua</a>
            <button class="w-[30%] py-1 text-xl rounded-full text-gray-600">
                <i class="fa-solid fa-cart-shopping text-gray-400 hover:bg-clip-text duration-200 hover:text-transparent hover:bg-gradient-to-r hover:from-blue-500 hover:to-red-500"></i>
            </button>
        </div>
    </div>