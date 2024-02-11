@extends('layouts.app')
@section('content')
<div class="relative overflow-hidden" style="height: 500px;">
    <div class="absolute inset-0">
        <img src="{{ asset('img/facility (4).jpg') }}" class="object-cover h-full w-full" alt="">
        <div class="absolute inset-0 bg-black opacity-50"></div>
    </div>
</div>

<div class="container mx-auto -mt-16 grid place-items-center relative md:w-3/4 shadow-xl rounded-xl mb-10 font-[Montserrat]">
    <form class="mx-auto bg-white w-full grid lg:grid-cols-3 rounded-xl p-8">
        <div class="flex flex-col px-3 py-4  lg:border-r-2 lg:border-[#000000]">
            <h1 class="mb-2 font-bold">Check In</h1>
            <input type="date" id="checkin" name="checkin" placeholder="Add Date" class="p-2 w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-xl border-2 border-[#000000]">
        </div>
        <div class="flex flex-col px-3 py-4 lg:border-r-2 lg:border-[#000000]">
            <h1 class="mb-2 font-bold">Check Out</h1>
            <input type="date" id="checkout" name="checkout" placeholder="Add Date" class="p-2 w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-xl border-2 border-[#000000]">
        </div>
        <button type="button" onclick="updateValues()" class="font-semibold bg-[#3E9CC0] lg:w-3/4 lg:mx-auto lg:h-1/2 lg:my-auto max-lg:h-full max-lg:min-h-[52px] text-white flex items-center justify-center transition duration-300 ease-in-out hover:bg-[#1680A8] rounded-xl">Check
            Availability</button>
    </form>
</div>

<div class="container mx-auto font-bold text-6xl mb-2 font-[Aleo] text-center">Room Type</div>
<div class="container mx-auto bg-white md:grid md:grid-cols-[2fr,.75fr] md:grid-flow-col rounded-xl font-[Montserrat] ">
    <div class="flex flex-col mr-5 px-3 py-4 grid-cols-2">
        <div class="bg-white border-2 border-[#24305A] rounded-xl shadow mb-10">
            <div id="indicators-carousel" class="relative w-full" data-carousel="static">
                <div class="relative h-56 overflow-hidden rounded-t-lg md:h-96">
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="{{ asset('img/standard (1).jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>

                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('img/standard (2).jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>

                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('img/standard (3).jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>

                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('img/standard (4).jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>

                <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                </div>

                <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

            <div class="px-5 py-2 bg-[#24305A] grid grid-cols-2">
                <div class="flex flex-col w-full">
                    <h5 class="mb-2 text-4xl max-md:text-3xl font-bold tracking-tight text-white" id="namakamar1">
                        Standard Room
                    </h5>
                </div>
                <div class="flex flex-col items-end w-full">
                    <div class="rounded-xl px-10 py-2 text-2xl max-md:text-lg font-semibold leading-6 text-white border border-white" id="hargakamar1">
                        Rp 250.000
                    </div>
                </div>
            </div>

            <div class="px-5 py-2 mx-auto bg-white grid grid-cols-[2fr,.75fr] rounded-b-xl">
                <div class="flex flex-col items-end justify-center grid grid-cols-[2fr,2fr,.75fr]">
                    <div class="grid grid-cols-[.5fr,2fr]">
                        <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M20 19h-1V5c0-.55-.45-1-1-1h-4c0-.55-.45-1-1-1H6c-.55 0-1 .45-1 1v15H4c-.55 0-1 .45-1 1s.45 1 1 1h9c.55 0 1-.45 1-1V6h3v14c0 .55.45 1 1 1h2c.55 0 1-.45 1-1s-.45-1-1-1m-9-6c-.55 0-1-.45-1-1s.45-1 1-1s1 .45 1 1s-.45 1-1 1" />
                        </svg>
                        <h5 class="mb-2 text-lg max-md:text-sm font-bold tracking-tight text-[#24305A]">2x Guest
                        </h5>
                    </div>
                    <div class="grid grid-cols-[.5fr,2fr]">
                        <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56 56">
                            <path fill="currentColor" d="M38.723 28.549c4.417 0 8.217-3.944 8.217-9.08c0-5.074-3.82-8.833-8.217-8.833c-4.396 0-8.217 3.841-8.217 8.874c0 5.095 3.8 9.039 8.217 9.039m-23.645.473c3.821 0 7.15-3.452 7.15-7.91c0-4.416-3.35-7.683-7.15-7.683c-3.82 0-7.19 3.349-7.169 7.725c0 4.416 3.328 7.868 7.17 7.868M3.616 47.572h15.612c-2.136-3.102.473-9.347 4.89-12.757c-2.28-1.52-5.219-2.65-9.06-2.65C5.793 32.164 0 39.004 0 44.695c0 1.85 1.027 2.877 3.616 2.877m22.186 0h25.822c3.225 0 4.376-.925 4.376-2.733c0-5.3-6.636-12.613-17.297-12.613c-10.641 0-17.277 7.313-17.277 12.614c0 1.807 1.15 2.732 4.376 2.732" />
                        </svg>
                        <h5 class="mb-2 text-lg max-md:text-sm font-bold tracking-tight text-[#24305A]">90 × 200
                            meter
                        </h5>
                    </div>
                </div>
                <form class="flex flex-col items-end justify-center grid grid-cols-2">
                    <select id="jumlah" name="jumlah" autocomplete="jumlah" required class="rounded-xl px-3 py-1.5 mx-2 max-md:mx-1 font-semibold leading-6 border-2 border-[#24305A] placeholder:text-gray-400 focus:bg-white focus:outline-none focus:ring-1 focus:ring-blue-800">
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <button onclick="addItem()" type="button" class="rounded-xl px-3 py-2 mx-2 text-xl max-md:text-sm max-md:mx-0 bg-[#3E9CC0] font-semibold leading-6 text-white">
                        Ambil
                    </button>
                </form>
            </div>
        </div>

    </div>

    <div class="flex flex-col font-[Montserrat] max-md:hidden">
        <form class="flex flex-col ml-3 px-3 py-4 border-2 border-[#000000] rounded-xl">
            <h1 class="font-bold text-2xl mb-2">Ringkasan Pesanan</h1>
            <div class="relative mb-2">
                <input type="text" id="namakepala" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-xl border-1 border-2 border-black appearance-none focus:outline-none focus:ring-0 focus:border-black peer bg-white" placeholder=" " />
                <label for="namakepala" class="absolute text-sm text-black duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-black font-bold peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Nama
                    Kepala</label>
            </div>

            <h1 class="font-bold">Check In</h1>
            <h1 class="mb-2 font-medium" id="haricheckin">none</h1>
            <h1 class="font-bold">Check Out</h1>
            <h1 class="mb-2 font-medium" id="haricheckout">none</h1>

            <div class="border-b-2 border-t-2 border-[#000000] pt-2">

                <div id="cart-items"></div>

            </div>

            <div class="container mx-auto bg-white md:grid md:grid-cols-2">
                <div class="flex flex-col py-4">
                    <h1 class="mb-2 font-bold">Total</h1>
                </div>
                <div class="flex flex-col py-4 items-end">
                    <h1 class="mb-2 font-medium" id="totalnavbar">Rp 0</h1>
                </div>
            </div>
            <button type="button" onclick="pesanSekarang()" id="pesanButton" class="flex w-full text-xl justify-center rounded-xl bg-[#24305A] px-3 py-3 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-[#0B163E]">Pesan
                Sekarang</button>
        </form>
    </div>
</div>

<nav class='fixed inset-x-0 bottom-0 mx-auto w-full max-w-screen-md border border-gray-100 bg-white/80 py-3 shadow backdrop-blur-lg md:top-6 md:rounded-xl lg:max-w-screen-lg 2xl:max-w-screen-2xl xl:max-w-screen-xl font-[Montserrat] z-50 md:hidden'>
    <div class='flex flex-wrap justify-between px-10 py-3'>
        <div id="toggleup" class="flex-shrink-0">
            <button class=''>
                <svg class='w-8 h-8' xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="m6 15l6-6l6 6" />
                </svg>
            </button>
        </div>
        <div class='grid grid-cols-[2fr,1.5fr] w-11/12'>
            <div class=w-full">
                <div class="flex flex-col items-end">
                    <h1 class="font-bold text-sm">Total</h1>
                </div>
                <div class="flex flex-col py-1 items-end">
                    <h1 class="font-medium text-xl" id="total">Rp 0</h1>
                </div>
            </div>
            <div class="w-full flex justify-center">
                <button type="button" onclick="pesanSekarang()" id="pesanButton" class="flex items-center w-3/4 text-lg justify-center rounded-xl bg-[#24305A] px-1 py-1 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-[#0B163E] mx-auto">Pesan
                    Sekarang</button>
            </div>
        </div>

        <ul id="collapseTransac" class='lg:!flex lg:space-x-10 max-lg:space-y-3 max-lg:hidden max-lg:w-full max-lg:my-4 my-auto'>
            <div class="relative mb-2">
                <input type="text" id="namakepala" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-xl border-1 border-2 border-black appearance-none focus:outline-none focus:ring-0 focus:border-black peer bg-white" placeholder=" " />
                <label for="namakepala" class="absolute text-sm text-black duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-black font-bold peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Nama
                    Kepala</label>
            </div>

            <h1 class="font-bold">Check In</h1>
            <h1 class="mb-2 font-medium" id="haricheckinnavbar">none</h1>
            <h1 class="font-bold">Check Out</h1>
            <h1 class="mb-2 font-medium" id="haricheckoutnavbar">none</h1>

            <div class="border-b-2 border-t-2 border-[#000000] pt-2">
                <div id="cart-items-navbar"></div>
            </div>
        </ul>
    </div>
</nav>

@include('layouts.footer')

<div class="md:hidden h-20 bg-[#24305A]"></div>

<script src="{{ asset('js/type.js') }}"></script>
@endsection