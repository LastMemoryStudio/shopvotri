    <a href="{{ $categoryItem['alias'] }}" aria-label="{{ $categoryItem['name'] }}" class="cursor-pointer w-44 h-56 rounded-xl flex flex-col justify-center items-center bg-white hover:shadow-xl duration-200 hover:shadow-black/10 box-content md:w-32">
        <div>
            
            <img loading="lazy" src="{{ $categoryItem['image'] ?? 'https://i.ibb.co/bdmmfQj/noimg.jpg' }}" alt="" class="w-16 rounded-xl" width="4rem" height="4rem">
        </div>
        <div class="text-center mt-5 text-lg font-medium">
            <h1>
                {{ $categoryItem['name'] }}
            </h1>
        </div>
    </a>