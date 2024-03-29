@extends('layouts.app')
@section('content')
<div class="w-full flex flex-col h-screen overflow-y-hidden">
    <!-- Mobile Header & Nav -->
    @include('layouts.navbar-admin-mobile')

    <div class="w-full overflow-x-hidden border-t flex flex-col max-sm:pt-20">
        <main class="w-full flex-grow p-6">
            <a href="{{ route('review') }}" class="rounded-md bg-[#24305A] px-3 py-2.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-800 text-xl max-sm:text-center">Kembali</a>
            <div class="container flex justify-center mx-auto w-4/5 mt-10 mb-10 flex-col">
                <h1 class="text-center text-[#12182E] text-4xl md:text-5xl font-bold font-[Aleo]">
                    Detail Review
                </h1>
                <h1 class="text-2xl text-center font-bold pb-2">{{ $review->name }} - {{ \Carbon\Carbon::parse($review->created_at)->locale('id')->isoFormat('D MMMM YYYY') }}</h1>
            </div>

            <div class="w-full mt-5">
                @if ($photos->count() > 0)
                @foreach($photos as $photo)
                <div class="relative w-3/4 mx-auto">
                    <img src="{{ asset('img/'.$photo->name) }}" class="w-full h-96 object-cover" alt="...">
                </div>
                @endforeach
                @elseif ($photos->count() > 1)
                <div id="indicators-carousel" class="relative w-3/4 mx-auto" data-carousel=" static">
                    <div class="relative overflow-hidden rounded-t-lg h-96">
                        @foreach($photos as $photo)
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('img/'.$photo->name) }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        @endforeach
                    </div>

                    <div class="absolute flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2 z-30">
                        @php
                        $i = 0;
                        @endphp
                        @foreach ($photos as $photo)
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="{{ $i == 0 ? 'true' : 'false' }}" aria-label="Slide {{ $i+1 }}" data-carousel-slide-to="{{ $i++ }}"></button>
                        @endforeach
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
                @endif

                <div class="container flex mx-auto flex-col w-3/4 mb-10 mt-10">
                    <div class="flex items-center justify-between">
                        <h1 class="text-3xl text-[#24305A] font-bold pb-2  max-sm:pb-0">Bintang</h1>
                    </div>
                    <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                        @for ($i = 1; $i <= $review->rating; $i++)
                            <svg class="w-6 h-8 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            @endfor
                            @for ($i = 5 - $review->rating; $i > 0; $i--)
                            <svg class="w-6 h-8 text-gray-300 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            @endfor
                    </div>
                    <div class="flex items-center justify-between">
                        <h1 class="text-3xl text-[#24305A] font-bold pb-2 max-sm:pb-0">Komentar</h1>
                    </div>
                    <p>{{ $review->message }}</p>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection