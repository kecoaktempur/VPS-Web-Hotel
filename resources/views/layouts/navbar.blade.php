<nav class='fixed inset-x-0 top-0 mx-auto w-full border border-gray-100 bg-white/80 py-3 shadow backdrop-blur-lg md:top-6 md:rounded-xl md:w-5/6 font-[Montserrat] z-50'>
    <div class='flex flex-wrap justify-between px-10 py-3'>
        <div class="flex-shrink-0 ml-2">
            <a aria-current="page" class="flex items-center" href="/">
                <img class="h-10 w-auto" src="{{ asset('img/logo_dark.svg') }}" alt="">
                <p class="sr-only">Website Title</p>
            </a>
        </div>
        <div id="toggle" class='flex ml-auto lg:order-1 lg:hidden relative z-50'>
            <button class='ml-7'>
                <svg class="w-7 h-7" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <ul id="collapseMenu" class='lg:!flex lg:space-x-10 max-lg:space-y-3 max-lg:hidden max-lg:w-full max-lg:my-4 my-auto'>
            <li class='max-lg:border-b max-lg:py-2'><a href='{{ route('home') }}' class='hover:text-[#007bff] font-semibold block text-[15px] lg:border-b-2 lg:border-[#000000]'>Home</a>
            </li>
            <li class='max-lg:border-b max-lg:py-2'><a href='{{ route('type.index.user')}}' class='hover:text-[#007bff] text-gray-600 font-reguler text-[15px]'>Rooms</a></li>
            <li class='max-lg:border-b max-lg:py-2'><a href='#' class='hover:text-[#007bff] text-gray-600 font-reguler text-[15px]'>Gallery</a></li>
            <li class='max-lg:border-b max-lg:py-2'><a href='#' class='hover:text-[#007bff] text-gray-600 font-reguler text-[15px]'>Contact Us</a></li>
        </ul>
    </div>
</nav>

<script src="{{ asset('js/navbar.js') }}"></script>