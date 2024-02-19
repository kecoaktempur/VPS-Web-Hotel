<aside class="relative bg-white h-screen w-64 hidden sm:block shadow-xl transition-all duration-300" id="asideNavbar">
    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="flex justify-center px-6 py-4 text-white max-sm:hidden" id="openSidebarMini">
        <span class="sr-only">Open sidebar</span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-black hover:text-[#24305A]">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
    </button>
    <div class="p-6">
        <a aria-current="page" class="flex items-center" href="/">
            <img class="h-10 w-auto" src="{{ asset('img/VPS_Logo_Dark.png') }}" alt="">
            <p class="sr-only">Website Title</p>
        </a>
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="{{ route('dashboard') }}" class="flex justify-center py-4 pl-6 text-black hover:bg-[#24305A] group {{ Str::contains(Route::currentRouteName(), 'dashboard') ? 'bg-[#24305A]' : '' }}" id="navLink">
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-5 h-5 text-black transition duration-75 group-hover:text-white {{ Str::contains(Route::currentRouteName(), 'dashboard') ? 'text-white' : '' }}" viewBox="0 0 24 24">
                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    <path d="M10 6a7.5 7.5 0 1 0 8 8h-8z" />
                    <path d="M13.5 3H13v8h8v-.5A7.5 7.5 0 0 0 13.5 3" />
                </g>
            </svg>
            <span class="flex-1 ms-3 whitespace-nowrap group-hover:text-white {{ Str::contains(Route::currentRouteName(), 'dashboard') ? 'text-white' : '' }}" id="textSidebarMini">Dashboard</span>
        </a>
        <a href="{{ route('transaction.index.current') }}" class="flex justify-center py-4 pl-6 text-black hover:bg-[#24305A] group {{ Str::contains(Route::currentRouteName(), 'current') ? 'bg-[#24305A]' : '' }}" id="navLink">
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-5 h-5 text-black transition duration-75 group-hover:text-white {{ Str::contains(Route::currentRouteName(), 'current') ? 'text-white' : '' }}" viewBox="0 0 48 48">
                <g fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="4">
                    <rect width="30" height="36" x="9" y="8" rx="2" />
                    <path stroke-linecap="round" d="M18 4v6m12-6v6m-14 9h16m-16 8h12m-12 8h8" />
                </g>
            </svg>
            <span class="flex-1 ms-3 whitespace-nowrap group-hover:text-white {{ Str::contains(Route::currentRouteName(), 'current') ? 'text-white' : '' }}" id="textSidebarMini">Transaksi Baru</span>
        </a>
        <a href="{{ route('transaction.index.past') }}" class="flex justify-center py-4 pl-6 text-black hover:bg-[#24305A] group {{ Str::contains(Route::currentRouteName(), 'past') ? 'bg-[#24305A]' : '' }}" id="navLink">
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-5 h-5 text-black transition duration-75 group-hover:text-white {{ Str::contains(Route::currentRouteName(), 'past') ? 'text-white' : '' }}" viewBox="0 0 48 48">
                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4">
                    <path d="M39 6H9a3 3 0 0 0-3 3v30a3 3 0 0 0 3 3h30a3 3 0 0 0 3-3V9a3 3 0 0 0-3-3" />
                    <path d="m21 31l5 4l8-10M14 15h20m-20 8h8" />
                </g>
            </svg>
            <span class="flex-1 ms-3 whitespace-nowrap group-hover:text-white {{ Str::contains(Route::currentRouteName(), 'past') ? 'text-white' : '' }}" id="textSidebarMini">Transaksi Lama</span>
        </a>
        <a href="{{ route('notif') }}" class="flex justify-center py-4 pl-6 text-black hover:bg-[#24305A] group {{ Str::contains(Route::currentRouteName(), 'notif') ? 'bg-[#24305A]' : '' }}" id="navLink">
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-5 h-5 text-black transition duration-75 group-hover:text-white {{ Str::contains(Route::currentRouteName(), 'notif') ? 'text-white' : '' }}" viewBox="0 0 32 32">
                <path fill="currentColor" d="M28.707 19.293L26 16.586V13a10.014 10.014 0 0 0-9-9.95V1h-2v2.05A10.014 10.014 0 0 0 6 13v3.586l-2.707 2.707A1 1 0 0 0 3 20v3a1 1 0 0 0 1 1h7v.777a5.152 5.152 0 0 0 4.5 5.199A5.006 5.006 0 0 0 21 25v-1h7a1 1 0 0 0 1-1v-3a1 1 0 0 0-.293-.707M19 25a3 3 0 0 1-6 0v-1h6Zm8-3H5v-1.586l2.707-2.707A1 1 0 0 0 8 17v-4a8 8 0 0 1 16 0v4a1 1 0 0 0 .293.707L27 20.414Z" />
            </svg>
            <span class="flex-1 ms-3 whitespace-nowrap group-hover:text-white {{ Str::contains(Route::currentRouteName(), 'notif') ? 'text-white' : '' }}" id="textSidebarMini">Notifikasi</span>
            @php
            $notifcount = App\Models\Expiring::where('is_read', 0)->count();
            @endphp
            @if ($notifcount > 0)
            <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full mr-3" id="textSidebarMini">{{$notifcount}}</span>
            @endif
        </a>
        <a href="{{ route('type.index.admin') }}" class="flex justify-center py-4 pl-6 text-black hover:bg-[#24305A] group {{ Str::contains(Route::currentRouteName(), 'type') ? 'bg-[#24305A]' : '' }}" id="navLink">
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-5 h-5 text-black transition duration-75 group-hover:text-white {{ Str::contains(Route::currentRouteName(), 'type') ? 'text-white' : '' }}" viewBox="0 0 24 24">
                <path fill="currentColor" d="M20 4v16H4V4zm0-2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2m-3.5 8.67V9c0-1.1-.9-2-2-2h-5c-1.1 0-2 .9-2 2v1.67c-.88.35-1.5 1.2-1.5 2.2V17h1.5v-1.5h9V17H18v-4.13c0-1-.62-1.85-1.5-2.2M15 8.5v2H9v-2zm-7.5 4.37c0-.48.39-.87.87-.87h7.27c.48 0 .87.39.87.87V14h-9v-1.13z" />
            </svg>
            <span class="flex-1 ms-3 whitespace-nowrap group-hover:text-white {{ Str::contains(Route::currentRouteName(), 'type') ? 'text-white' : '' }} text-black" id="textSidebarMini">Tipe
                Ruangan</span>
        </a>
        <a href="{{ route('room') }}" class="flex justify-center py-4 pl-6 text-black hover:bg-[#24305A] group {{ Str::contains(Route::currentRouteName(), 'room') ? 'bg-[#24305A]' : '' }}" id="navLink">
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 text-black transition duration-75 group-hover:text-white {{ Str::contains(Route::currentRouteName(), 'room') ? 'text-white' : '' }}" viewBox="0 0 48 48">
                <path fill="currentColor" d="m22.503 7.776l14.5 3c.58.12.997.632.997 1.224v24a1.25 1.25 0 0 1-.997 1.224l-14.5 3A1.25 1.25 0 0 1 21 39.002V9a1.25 1.25 0 0 1 1.503-1.225M18 10v2.5h-5.5v23H18V38h-6.75a1.25 1.25 0 0 1-1.243-1.122L10 36.751v-25.5c0-.648.492-1.18 1.122-1.244L11.25 10zm5.5.536v26.93l12-2.483V13.018zm3 11.965a1.5 1.5 0 1 1 0 3a1.5 1.5 0 0 1 0-3" />
            </svg>
            <span class="flex-1 ms-3 whitespace-nowrap group-hover:text-white {{ Str::contains(Route::currentRouteName(), 'room') ? 'text-white' : '' }}" id="textSidebarMini">Ruangan</span>
        </a>
        <a href="{{ route('photo') }}" class="flex justify-center py-4 pl-6 text-black hover:bg-[#24305A] group {{ Str::contains(Route::currentRouteName(), 'photo') ? 'bg-[#24305A]' : '' }}" id="navLink">
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 text-black transition duration-75 group-hover:text-white {{ Str::contains(Route::currentRouteName(), 'photo') ? 'text-white' : '' }}" viewBox="0 0 24 24">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m2.25 15.75l5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5m10.5-11.25h.008v.008h-.008zm.375 0a.375.375 0 1 1-.75 0a.375.375 0 0 1 .75 0" />
            </svg>
            <span class="flex-1 ms-3 whitespace-nowrap group-hover:text-white {{ Str::contains(Route::currentRouteName(), 'photo') ? 'text-white' : '' }}" id="textSidebarMini">Foto</span>
        </a>
        <a href="{{ route('review') }}" class="flex justify-center py-4 pl-6 text-black hover:bg-[#24305A] group {{ Str::contains(Route::currentRouteName(), 'review') ? 'bg-[#24305A]' : '' }}" id="navLink">
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 text-black transition duration-75 group-hover:text-white {{ Str::contains(Route::currentRouteName(), 'review') ? 'text-white' : '' }}" viewBox="0 0 24 24">
                <path fill="currentColor" d="M15.58 17L12 14.84L8.42 17l.95-4.07l-3.16-2.73l4.17-.36L12 6l1.62 3.83l4.17.36l-3.16 2.73zM19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2zM5 5v14h14V5z" />
            </svg>
            <span class="flex-1 ms-3 whitespace-nowrap group-hover:text-white {{ Str::contains(Route::currentRouteName(), 'review') ? 'text-white' : '' }}" id="textSidebarMini">Review</span>
        </a>
    </nav>
    <form action="{{ route('logout') }}" class="absolute w-full bottom-0 flex items-center justify-center py-4 pl-6 hover:bg-[#24305A] group" method="POST">
        @csrf
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 w-5 h-5 text-black font-bold transition duration-75 group-hover:text-white">
            <path fill-rule="evenodd" d="M17 4.25A2.25 2.25 0 0 0 14.75 2h-5.5A2.25 2.25 0 0 0 7 4.25v2a.75.75 0 0 0 1.5 0v-2a.75.75 0 0 1 .75-.75h5.5a.75.75 0 0 1 .75.75v11.5a.75.75 0 0 1-.75.75h-5.5a.75.75 0 0 1-.75-.75v-2a.75.75 0 0 0-1.5 0v2A2.25 2.25 0 0 0 9.25 18h5.5A2.25 2.25 0 0 0 17 15.75V4.25Z" clip-rule="evenodd" />
            <path fill-rule="evenodd" d="M14 10a.75.75 0 0 0-.75-.75H3.704l1.048-.943a.75.75 0 1 0-1.004-1.114l-2.5 2.25a.75.75 0 0 0 0 1.114l2.5 2.25a.75.75 0 1 0 1.004-1.114l-1.048-.943h9.546A.75.75 0 0 0 14 10Z" clip-rule="evenodd" />
        </svg>
        <button type="submit">
            <span class="flex-1 ms-3 whitespace-nowrap group-hover:text-white" id="textSidebarMini">Log Out</span>
        </button>
    </form>
</aside>
<script src="{{ asset('js/navbar_admin.js') }}"></script>