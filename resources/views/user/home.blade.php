@extends('layouts.app')
@section('content')
<div class="relative overflow-hidden bg-cover bg-no-repeat p-12 text-center h-screen" style="background-image: url('{{ asset('img/facility (2).jpg') }}')">
    <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed" style="background-color: rgba(18, 24, 46, 0.7)"></div>
    <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed mt-10">
        <div class="flex h-full items-center justify-center">
            <div class="text-white">
                <p class="mt-8 mb-4 text-lg font-normal text-white lg:text-3xl sm:px-16 lg:px-48">Create
                    Memories
                    With
                </p>
                <h1 class="mb-8 text-4xl font-bold tracking-tight leading-none text-white md:text-5xl lg:text-6xl font-[Aleo]">
                    Venesia Park Sentul Syariah</h1>
                <button type="button" class="rounded-xl border-2 border-neutral-50 px-3 pb-[8px] pt-[10px] text-lg lg:text-md sm:px-10 font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200" data-te-ripple-init data-te-ripple-color="light">
                    Book Now
                </button>
            </div>
        </div>
    </div>
</div>

<section class="bg-white font-[Montserrat]">
    <div class='flex justify-center mx-auto md:grid md:grid-cols-2 w-full pt-20 pb-20 overflow-hidden'>
        <div class="my-auto lg:ml-52 md:ml-36 md:ml-20 max-md:p-5">
            <h1 class="text-3xl font-extrabold tracking-tight leading-none text-[#12182E] md:text-4xl lg:text-5xl font-[Aleo]">
                Tentang Kami</h1>
            <div class="border-b-2 border-[#3E9CC0] w-1/5"></div>
            <p class="max-w-2xl mt-8 mb-6 font-medium text-black lg:mb-8 md:text-sm lg:text-base">Amet minim
                mollit
                non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequatduis enim. Amet minim
                mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequatduis enim.
            </p>
            <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white rounded-lg bg-[#3E9CC0] hover:bg-transparent focus:ring-4 focus:ring-primary-300 hover:border-2 hover:border-[#000000] hover:text-black mt-2">Contact
                Us
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
        <div class="w-full h-full ml-20 rounded-xl overflow-hidden max-md:hidden">
            <!-- Apply overflow-hidden here -->
            <div class="rounded-xl">
                <img src="{{ asset('img/facility (4).jpg') }}" class="object-cover h-full w-full" alt="">
            </div>
        </div>
    </div>
</section>


<section class="bg-white font-[Montserrat] relative">
    <div class="absolute top-0 mt-40" style="height: 600px; width: 100%; overflow: hidden;">
        <img src="{{ asset('img/facility (3).jpg') }}" class="-mt-20" style="width: 100%; height: auto; object-fit: cover;" alt="">
    </div>
    <div class='flex justify-center mx-auto lg:grid lg:grid-cols-2 w-full pt-20 pb-20 overflow-hidden'>
        <div class="my-auto">
        </div>
        <div class="relative w-3/4 lg:-ml-20 rounded-xl p-5" style="background-color: rgba(18, 24, 46, 0.95);">
            <h1 class="text-3xl font-extrabold tracking-tight leading-none text-white md:text-4xl lg:text-5xl font-[Aleo] text-center p-10">
                Fasilitas</h1>
            <div class='flex grid-cols-[0.75fr, 1fr] w-full mx-10 mb-3'>
                <div class="rounded-xl bg-gray-200 my-auto p-5">
                    <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                        <g fill="none">
                            <path d="M39 32H13L8 12h36z" />
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20z" />
                            <circle cx="13" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
                            <circle cx="39" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
                        </g>
                    </svg>
                </div>
                <div class="w-3/4 rounded-xl  my-auto p-5">
                    <p class="font-medium text-white  md:text-sm lg:text-base">Dekat dengan
                        BCA Learning Institute, AEON Mall, IKEA.
                    </p>
                </div>
            </div>
            <div class='flex grid-cols-[0.75fr, 2fr] w-full mx-10 mb-5'>
                <div class="rounded-xl bg-gray-200 my-auto p-5">
                    <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                        <path fill="currentColor" d="M5.251 9.749a.749.749 0 1 0 0-1.498a.749.749 0 0 0 0 1.498m6.247-.75A.749.749 0 1 1 10 9a.749.749 0 0 1 1.498 0M6.5 1a.5.5 0 0 0-.5.5V2h-.681a2 2 0 0 0-1.984 1.744L3.173 5H2.5a.5.5 0 0 0 0 1h.544l-.01.074A1.5 1.5 0 0 0 2 7.5v3A1.5 1.5 0 0 0 3.5 12v1.25a.75.75 0 0 0 1.5 0V12h5.997v1.25a.75.75 0 0 0 1.5 0V12h.003a1.5 1.5 0 0 0 1.5-1.5v-3a1.5 1.5 0 0 0-1.04-1.428L12.951 6h.549a.5.5 0 0 0 0-1h-.677l-.16-1.253A2 2 0 0 0 10.68 2H10v-.5a.5.5 0 0 0-.5-.5zM4.052 6l.275-2.128A1 1 0 0 1 5.319 3h5.36a1 1 0 0 1 .992.873L11.943 6zM13 10.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5z" />
                    </svg>
                </div>
                <div class="w-3/4 rounded-xl  my-auto p-5">
                    <p class="font-medium text-white  md:text-sm lg:text-base">Layanan Grab & Gojek 24 jam.
                    </p>
                </div>
            </div>
            <div class='flex grid-cols-[0.75fr, 2fr] w-full mx-10 mb-5'>
                <div class="rounded-xl bg-gray-200 my-auto p-5">
                    <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 15.5v-2.8m0 0h2.857c.714 0 2.143 0 2.143-2.1s-1.429-2.1-2.143-2.1H10z" />
                            <circle cx="12" cy="12" r="10" />
                        </g>
                    </svg>
                </div>
                <div class="w-3/4 rounded-xl  my-auto p-5">
                    <p class="font-medium text-white  md:text-sm lg:text-base">Tempat parkir yang luas.
                    </p>
                </div>
            </div>
            <div class='flex grid-cols-[0.75fr, 2fr] w-full mx-10 mb-5'>
                <div class="rounded-xl bg-gray-200 my-auto p-5">
                    <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M20.916 9.564a.998.998 0 0 0-.513-1.316L7.328 2.492c-.995-.438-2.22.051-2.645 1.042l-2.21 5.154a2.001 2.001 0 0 0 1.052 2.624L9.563 13.9L8.323 17H4v-3H2v8h2v-3h4.323c.823 0 1.552-.494 1.856-1.258l1.222-3.054l5.205 2.23a1 1 0 0 0 1.31-.517l.312-.71l1.701.68l2-5l-1.536-.613zm-4.434 5.126L4.313 9.475l2.208-5.152l12.162 5.354z" />
                    </svg>
                </div>
                <div class="w-3/4 rounded-xl  my-auto p-5">
                    <p class="font-medium text-white  md:text-sm lg:text-base">CCTV 24 jam untuk meningkatkan
                        keamanan.
                    </p>
                </div>
            </div>
            <div class='flex grid-cols-[0.75fr, 2fr] w-full mx-10 mb-5'>
                <div class="rounded-xl bg-gray-200 my-auto p-5">
                    <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                        <path fill="currentColor" d="M82 56V24a6 6 0 0 1 12 0v32a6 6 0 0 1-12 0m38 6a6 6 0 0 0 6-6V24a6 6 0 0 0-12 0v32a6 6 0 0 0 6 6m32 0a6 6 0 0 0 6-6V24a6 6 0 0 0-12 0v32a6 6 0 0 0 6 6m94 58v8a38 38 0 0 1-36.94 38a94.55 94.55 0 0 1-31.13 44H208a6 6 0 0 1 0 12H32a6 6 0 0 1 0-12h30.07A94.34 94.34 0 0 1 26 136V88a6 6 0 0 1 6-6h176a38 38 0 0 1 38 38m-44 16V94H38v42a82.27 82.27 0 0 0 46.67 74h70.66A82.27 82.27 0 0 0 202 136m32-16a26 26 0 0 0-20-25.29V136a93.18 93.18 0 0 1-1.69 17.64A26 26 0 0 0 234 128Z" />
                    </svg>
                </div>
                <div class="w-3/4 rounded-xl  my-auto p-5">
                    <p class="font-medium text-white  md:text-sm lg:text-base">Daerah komunal.
                    </p>
                </div>
            </div>
            <div class='flex grid-cols-[0.75fr, 2fr] w-full mx-10 mb-5'>
                <div class="rounded-xl bg-gray-200 my-auto p-5">
                    <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M346.65 304.3a136 136 0 0 0-180.71 0a21 21 0 1 0 27.91 31.38a94 94 0 0 1 124.89 0a21 21 0 0 0 27.91-31.4Z" />
                        <path fill="currentColor" d="M256.28 183.7a221.47 221.47 0 0 0-151.8 59.92a21 21 0 1 0 28.68 30.67a180.28 180.28 0 0 1 246.24 0a21 21 0 1 0 28.68-30.67a221.47 221.47 0 0 0-151.8-59.92" />
                        <path fill="currentColor" d="M462 175.86a309 309 0 0 0-411.44 0a21 21 0 1 0 28 31.29a267 267 0 0 1 355.43 0a21 21 0 0 0 28-31.31Z" />
                        <circle cx="256.28" cy="393.41" r="32" fill="currentColor" />
                    </svg>
                </div>
                <div class="w-3/4 rounded-xl  my-auto p-5">
                    <p class="font-medium text-white  md:text-sm lg:text-base">Wifi gratis.
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<div class="container flex mx-auto grid grid-cols-[0.5fr,2fr,3fr] w-3/4">
    <div class="border-b-2 border-[#3E9CC0] w-full rounded-full h-0 my-auto"></div>
    <div class="flex items-center justify-center"> <!-- Added mx-4 class for horizontal margin -->
        <h1 class="text-center text-3xl font-extrabold tracking-tight leading-none text-[#12182E] md:text-4xl lg:text-5xl font-[Aleo]">
            Tipe Ruangan
        </h1>
    </div>
    <div class="border-b-2 border-[#3E9CC0] w-full rounded-full h-0 my-auto"></div>
</div>

<div class="flex container mx-auto pt-10 pb-10">
    <div class="w-2/12 flex items-center">
        <div class="w-full text-right">
            <button onclick="next()" aria-label="slide backward" class="p-3 rounded-full bg-white shadow-lg cursor-pointer mr-5" id="prev">
                <svg class="text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
    </div>
    <div class="w-full overflow-hidden" id="slideContainerTipe">
        <ul class="flex w-full" id="sliderTipe">
            <li class="p-5 relative group lg:h-96" id="card">
                <a href="#" class="flex h-full rounded-xl overflow-hidden relative">
                    <img src="https://i.ibb.co/fDngH9G/carosel-1.png" alt="black chair and white table" class="object-cover object-center w-full" />
                    <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden transition-opacity duration-500 ease-in-out opacity-100 group-hover:opacity-0 bg-gradient-to-t from-[#12182E] via-5% to-transparent">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0">
                        <div class="p-6">
                            <h3 class="text-xl lg:text-3xl font-bold leading-5 lg:leading-6 text-white mb-4">
                                Standar Room
                            </h3>
                            <div class="flex items-end">
                                <div class="flex flex-col items-end justify-center grid grid-cols-[2fr,2fr] mb-5">
                                    <div class="grid grid-cols-[.5fr,2fr]">
                                        <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56 56">
                                            <path fill="white" d="M38.723 28.549c4.417 0 8.217-3.944 8.217-9.08c0-5.074-3.82-8.833-8.217-8.833c-4.396 0-8.217 3.841-8.217 8.874c0 5.095 3.8 9.039 8.217 9.039m-23.645.473c3.821 0 7.15-3.452 7.15-7.91c0-4.416-3.35-7.683-7.15-7.683c-3.82 0-7.19 3.349-7.169 7.725c0 4.416 3.328 7.868 7.17 7.868M3.616 47.572h15.612c-2.136-3.102.473-9.347 4.89-12.757c-2.28-1.52-5.219-2.65-9.06-2.65C5.793 32.164 0 39.004 0 44.695c0 1.85 1.027 2.877 3.616 2.877m22.186 0h25.822c3.225 0 4.376-.925 4.376-2.733c0-5.3-6.636-12.613-17.297-12.613c-10.641 0-17.277 7.313-17.277 12.614c0 1.807 1.15 2.732 4.376 2.732" />
                                        </svg>
                                        <h5 class="ml-2 my-auto text-sm max-md:text-sm font-bold tracking-tight text-white">
                                            2x Guest
                                        </h5>
                                    </div>
                                    <div class="grid grid-cols-[.5fr,2fr]">
                                    </div>
                                </div>
                            </div>
                            <div class="items-end w-full">
                                <div class=" text-center rounded-xl px-10 py-2 text-xl max-md:text-lg font-semibold leading-6 text-white bg-[#3E9CC0]">
                                    Rp 250.000
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li class="p-5 relative group lg:h-96" id="card">
                <a href="#" class="flex h-full rounded-xl overflow-hidden relative">
                    <img src="https://i.ibb.co/fDngH9G/carosel-1.png" alt="black chair and white table" class="object-cover object-center w-full" />
                    <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden transition-opacity duration-500 ease-in-out opacity-100 group-hover:opacity-0 bg-gradient-to-t from-[#12182E] via-5% to-transparent">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0">
                        <div class="p-6">
                            <h3 class="text-xl lg:text-3xl font-bold leading-5 lg:leading-6 text-white mb-4">
                                Standar Room
                            </h3>
                            <div class="flex items-end">
                                <div class="flex flex-col items-end justify-center grid grid-cols-[2fr,2fr] mb-5">
                                    <div class="grid grid-cols-[.5fr,2fr]">
                                        <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56 56">
                                            <path fill="white" d="M38.723 28.549c4.417 0 8.217-3.944 8.217-9.08c0-5.074-3.82-8.833-8.217-8.833c-4.396 0-8.217 3.841-8.217 8.874c0 5.095 3.8 9.039 8.217 9.039m-23.645.473c3.821 0 7.15-3.452 7.15-7.91c0-4.416-3.35-7.683-7.15-7.683c-3.82 0-7.19 3.349-7.169 7.725c0 4.416 3.328 7.868 7.17 7.868M3.616 47.572h15.612c-2.136-3.102.473-9.347 4.89-12.757c-2.28-1.52-5.219-2.65-9.06-2.65C5.793 32.164 0 39.004 0 44.695c0 1.85 1.027 2.877 3.616 2.877m22.186 0h25.822c3.225 0 4.376-.925 4.376-2.733c0-5.3-6.636-12.613-17.297-12.613c-10.641 0-17.277 7.313-17.277 12.614c0 1.807 1.15 2.732 4.376 2.732" />
                                        </svg>
                                        <h5 class="ml-2 my-auto text-sm max-md:text-sm font-bold tracking-tight text-white">
                                            2x Guest
                                        </h5>
                                    </div>
                                    <div class="grid grid-cols-[.5fr,2fr]">
                                    </div>
                                </div>
                            </div>
                            <div class="items-end w-full">
                                <div class=" text-center rounded-xl px-10 py-2 text-xl max-md:text-lg font-semibold leading-6 text-white bg-[#3E9CC0]">
                                    Rp 250.000
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li class="p-5 relative group lg:h-96" id="card">
                <a href="#" class="flex h-full rounded-xl overflow-hidden relative">
                    <img src="https://i.ibb.co/fDngH9G/carosel-1.png" alt="black chair and white table" class="object-cover object-center w-full" />
                    <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden transition-opacity duration-500 ease-in-out opacity-100 group-hover:opacity-0 bg-gradient-to-t from-[#12182E] via-5% to-transparent">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0">
                        <div class="p-6">
                            <h3 class="text-xl lg:text-3xl font-bold leading-5 lg:leading-6 text-white mb-4">
                                Standar Room
                            </h3>
                            <div class="flex items-end">
                                <div class="flex flex-col items-end justify-center grid grid-cols-[2fr,2fr] mb-5">
                                    <div class="grid grid-cols-[.5fr,2fr]">
                                        <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56 56">
                                            <path fill="white" d="M38.723 28.549c4.417 0 8.217-3.944 8.217-9.08c0-5.074-3.82-8.833-8.217-8.833c-4.396 0-8.217 3.841-8.217 8.874c0 5.095 3.8 9.039 8.217 9.039m-23.645.473c3.821 0 7.15-3.452 7.15-7.91c0-4.416-3.35-7.683-7.15-7.683c-3.82 0-7.19 3.349-7.169 7.725c0 4.416 3.328 7.868 7.17 7.868M3.616 47.572h15.612c-2.136-3.102.473-9.347 4.89-12.757c-2.28-1.52-5.219-2.65-9.06-2.65C5.793 32.164 0 39.004 0 44.695c0 1.85 1.027 2.877 3.616 2.877m22.186 0h25.822c3.225 0 4.376-.925 4.376-2.733c0-5.3-6.636-12.613-17.297-12.613c-10.641 0-17.277 7.313-17.277 12.614c0 1.807 1.15 2.732 4.376 2.732" />
                                        </svg>
                                        <h5 class="ml-2 my-auto text-sm max-md:text-sm font-bold tracking-tight text-white">
                                            2x Guest
                                        </h5>
                                    </div>
                                    <div class="grid grid-cols-[.5fr,2fr]">
                                    </div>
                                </div>
                            </div>
                            <div class="items-end w-full">
                                <div class=" text-center rounded-xl px-10 py-2 text-xl max-md:text-lg font-semibold leading-6 text-white bg-[#3E9CC0]">
                                    Rp 250.000
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div class="w-2/12 flex items-center">
        <div class="w-full">
            <button onclick="prev()" aria-label="slide forward" class="p-3 rounded-full bg-white shadow-lg  cursor-pointer ml-5" id="next">
                <svg class="text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
    </div>
</div>

<div class="container flex mx-auto grid grid-cols-[3fr,2fr,0.5fr] w-3/4">
    <div class="border-b-2 border-[#3E9CC0] w-full rounded-full h-0 my-auto"></div>
    <div class="flex items-center justify-center">
        <h1 class="text-center text-3xl font-extrabold tracking-tight leading-none text-[#12182E] md:text-4xl lg:text-5xl font-[Aleo]">
            Sekitar Hotel
        </h1>
    </div>
    <div class="border-b-2 border-[#3E9CC0] w-full rounded-full h-0 my-auto"></div>
</div>

<div class="container mx-auto pt-10 pb-10">
    <div class="testimonial__inner">
        <div class="slider-sekitar">
            <div class="flex w-full">
                <div class="p-5 relative group" id="sekitar_card" style="height: 500px;">
                    <div class="flex h-full rounded-xl overflow-hidden relative">
                        <img src="{{ asset('img/facility (1).jpg') }}" alt="black chair and white table" class="object-cover object-center w-full" />
                    </div>
                </div>
            </div>
            <div class="flex w-full">
                <div class="p-5 relative group" id="sekitar_card" style="height: 500px;">
                    <div class="flex h-full rounded-xl overflow-hidden relative">
                        <img src="{{ asset('img/facility (2).jpg') }}" alt="black chair and white table" class="object-cover object-center w-full" />
                    </div>
                </div>
            </div>
            <div class="flex w-full">
                <div class="p-5 relative group" id="sekitar_card" style="height: 500px;">
                    <div class="flex h-full rounded-xl overflow-hidden relative">
                        <img src="{{ asset('img/facility (3).jpg') }}" alt="black chair and white table" class="object-cover object-center w-full" />
                    </div>
                </div>
            </div>
            <div class="flex w-full">
                <div class="p-5 relative group" id="sekitar_card" style="height: 500px;">
                    <div class="flex h-full rounded-xl overflow-hidden relative">
                        <img src="{{ asset('img/facility (4).jpg') }}" alt="black chair and white table" class="object-cover object-center w-full" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container flex mx-auto grid grid-cols-3 w-3/4">
    <div class="border-b-2 border-[#3E9CC0] w-full rounded-full h-0 my-auto"></div>
    <div class="flex items-center justify-center"> <!-- Added mx-4 class for horizontal margin -->
        <h1 class="text-center text-3xl font-extrabold tracking-tight leading-none text-[#12182E] md:text-4xl lg:text-5xl font-[Aleo]">
            Kata Mereka
        </h1>
    </div>
    <div class="border-b-2 border-[#3E9CC0] w-full rounded-full h-0 my-auto"></div>
</div>

<div class="container flex flex-col mx-auto md:w-3/4 p-10">
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <div class="bg-white border-2 border-[#24305A] rounded-lg p-8 text-center w-full">
            <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                <svg class="w-6 h-8 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-6 h-8 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-6 h-8 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-6 h-8 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-6 h-8 text-gray-300 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <h1 class="ml-5">5 dari 5 Bintang</h1>
            </div>
            <h1 class="font-bold text-xl text-start">Yanto</h1>
            <h1 class="text-start">Feb 13, 2021</h1>
            <p class="mb-2 text-gray-500 text-justify">Jelek</p>
        </div>
    </div>
    <div class="flex justify-between items-center mb-6 mt-6">
        <h2 class="text-lg lg:text-2xl font-bold text-gray-900">Apa kata Anda?</h2>
    </div>
    <form action="#">
        <div class="rating flex justify-center items-center gap-2 text-yellow-500 text-2xl mb-8">
            <input type="number" name="rating" hidden>
            <i class='bx bx-star star' style="color: #fde047;"></i>
            <i class='bx bx-star star' style="color: #fde047;"></i>
            <i class='bx bx-star star' style="color: #fde047;"></i>
            <i class='bx bx-star star' style="color: #fde047;"></i>
            <i class='bx bx-star star' style="color: #fde047;"></i>
        </div>
        <div>
            <label for="Nama Kepala" class="block mb-2 text-lg font-medium text-gray-900">Nama
                Kepala</label>
            <input type="text" id="Nama Kepala" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#3E9CC0] focus:border-[#3E9CC0] block w-full p-2.5 mb-5" placeholder="Nama Kepala" required>
        </div>
        <div class="py-2 px-4 mb-4 bg-gray-50 rounded-lg rounded-t-lg border border-gray-200">
            <label for="comment" class="sr-only">Your comment</label>
            <textarea id="comment" rows="6" class="bg-gray-50 px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none" placeholder="Write a comment..." required></textarea>
        </div>
        <div class="btn-group flex items-center gap-2">
            <button type="submit" class="btn submit py-3 px-4 rounded-xl border-none outline-none cursor-pointer text-white bg-[#3E9CC0] font-medium">Kirim</button>
        </div>
    </form>
</div>

<div class="container flex mx-auto grid grid-cols-[1fr,3fr,1fr] w-3/4">
    <div class="border-b-2 border-[#3E9CC0] w-full rounded-full h-0 my-auto"></div>
    <div class="flex items-center justify-center">
        <h1 class="text-center text-3xl font-extrabold tracking-tight leading-none text-[#12182E] md:text-4xl lg:text-5xl font-[Aleo]">
            Tandai Tempat Kami!
        </h1>
    </div>
    <div class="border-b-2 border-[#3E9CC0] w-full rounded-full h-0 my-auto"></div>
</div>
<div class="container flex mx-auto md:w-3/4 p-10">
    <iframe class="w-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.5544321045513!2d106.88318407475386!3d-6.577776393415704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c70c8ab7d701%3A0x35ea8e00d2aa2c14!2sVenesia%20Park%20Sentul%20Syariah!5e0!3m2!1sid!2sid!4v1707789494890!5m2!1sid!2sid" style="border:0; height: 600px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<script src="{{ asset('js/home.js') }}"></script>
@include('layouts.footer')
@endsection