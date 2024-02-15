@extends('layouts.app')
@section('content')
<div class="bg-white mt-40">
    <div class="container flex mx-auto w-4/5 justify-center lg:col-2">
        <div class="grid grid-cols-[2fr,1fr] grid-flow-col gap-2">
            @php
            $firstPhoto = $type->photos->slice(0, 1)->first()->name;
            $secondPhoto = $type->photos->slice(1, 2)->first()->name;
            $thirdPhoto = $type->photos->slice(2, 3)->first()->name;
            @endphp
            <div class="w-full row-span-2 cursor-pointer" onclick="toggleModal('modal-id')">
                <img src="{{ asset('img/'.$firstPhoto) }}" alt="Photo by Claudio Schwarz on Unsplash" class="inset-0 h-full w-full object-cover object-center rounded-xl opacity-75 hover:opacity-100">
            </div>
            <div class="w-full cursor-pointer" onclick="toggleModal('modal-id')">
                <img src="{{ asset('img/'.$secondPhoto) }}" alt="Photo by Claudio Schwarz on Unsplash" class="inset-0 h-full w-full object-cover object-center rounded-xl opacity-75 hover:opacity-100 ">
            </div>
            <div class="w-full cursor-pointer" onclick="toggleModal('modal-id')">
                <img src="{{ asset('img/'.$thirdPhoto) }}" alt="Photo by Claudio Schwarz on Unsplash" class="inset-0 h-full w-full object-cover object-center rounded-xl opacity-75 hover:opacity-100 ">
            </div>
        </div>
    </div>

    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id">
        <!-- Move the "x" button inside the modal container and position it at the top left corner -->
        <div class="absolute top-0 right-0 p-4">
            <button class="text-black text-4xl leading-none font-semibold outline-none focus:outline-none cursor-pointer" onclick="toggleModal('modal-id')"> × </button>
        </div>
        <div class="relative w-full max-w-screen-lg max-h-[700px]">

            <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                <div class="flex items-start justify-between p-5 rounded-t">
                    <div id="indicators-carousel" class="relative w-full" data-carousel="static">
                        <div class="relative h-56 md:h-screen overflow-hidden rounded-lg">
                            @php
                            $photos = $type->photos;
                            $i = 0;
                            @endphp
                            @foreach ($photos as $photo)
                            <div class="hidden duration-700 ease-in-out" data-carousel-item="{{ $i++ == 0 ? 'active' : '' }}">
                                <img src="{{ asset('img/'.$photo->name) }}" class="absolute w-full h-full object-cover" alt="...">
                            </div>
                            @endforeach
                        </div>

                        <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
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
                </div>
            </div>
        </div>
    </div>
    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>
    <div class="container flex mx-auto md:grid md:grid-cols-[3fr,1fr] w-4/5 mt-10 border-b-2 border-gray-300">
        <div class="mr-5">
            <div class="container flex mx-auto max-md:grid max-md:grid-cols-[2fr,1fr]">
                <h1 class="text-[#12182E] text-4xl md:text-5xl font-bold font-[Aleo] max-md:my-auto">
                    {{ $type->name }}
                </h1>
                <div class="align-center my-auto md:hidden">
                    <div class="rounded-xl p-4 lg:text-xl font-bold min-w-max border-2 border-[#12182E] text-[#12182E]">
                        Rp {{ number_format($type->price, 0, ',', '.') }} / malam
                    </div>
                </div>
            </div>
            <p class=" md:text-sm lg:text-base text-justify mb-8 mt-5">
                {{ $type->description}}
            </p>
        </div>
        <div class="mx-auto my-auto max-md:hidden">
            <div class="rounded-xl p-4 lg:text-xl font-bold min-w-max border-2 border-[#12182E] text-[#12182E]">
                Rp {{ number_format($type->price, 0, ',', '.') }} / malam
            </div>
        </div>
    </div>

    @php
    // fasilitas
    $single_bed = 0; $king_bed = 0; $queen_bed = 0; $dispenser = 0; $magic_jar = 0; $rak_piring = 0; $alat_makan = 0; $meja_makan = 0; $dapur = 0; $living_room = 0; $microwave = 0; $kulkas = 0; $ac = 0; $tv = 0;
    // kamar mandi
    $shower = 0; $waterheater = 0; $wastafel = 0; $closet = 0; $bathtub = 0;

    foreach ($rooms as $room){
    $single_bed += $room->single_bed;
    $king_bed += $room->king_bed;
    $queen_bed += $room->queen_bed;
    $dispenser += $room->dispenser;
    $magic_jar += $room->magic_jar;
    $rak_piring += $room->rak_piring;
    $alat_makan += $room->alat_makan;
    $meja_makan += $room->meja_makan;
    $dapur += $room->dapur;
    $living_room += $room->living_room;
    $microwave += $room->microwave;
    $kulkas += $room->kulkas;
    $ac += $room->ac;
    $tv += $room->tv;
    $shower += $room->shower;
    $waterheater += $room->waterheater;
    $wastafel += $room->wastafel;
    $closet += $room->closet;
    $bathtub += $room->bathtub;
    }
    @endphp

    <div class="container flex mx-auto w-4/5 flex-col">
        <h2 class="text-[#12182E] text-2xl lg:text-4xl font-bold pt-2 lg:pt-4 font-[Aleo]">
            Fasilitas
        </h2>

        <div class="flex flex-wrap lg:flex-nowrap py-4 lg:gap-4 gap-2">
            @if ($single_bed > 0)
            <div class="w-[120px] h-[120px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                <div class="p-2">
                    <svg class="w-9 h-9 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4">
                            <path d="M8 12a3 3 0 0 1 3-3h26a3 3 0 0 1 3 3v11H8zM6 35v4m36-4v4" />
                            <path d="M29 18H19a3 3 0 0 0-3 3v2h16v-2a3 3 0 0 0-3-3M4 26a3 3 0 0 1 3-3h34a3 3 0 0 1 3 3v9H4z" />
                        </g>
                    </svg>
                    <p class="text-center mt-3">Single Bed {{ $single_bed < $rooms->count() ? "(Opsional)" : ""}}</p>
                </div>
            </div>
            @endif
            @if ($king_bed > 0)
            <div class="w-[120px] h-[120px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                <div class="p-2">
                    <svg class="w-9 h-9 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M2 11.975q0-.825.588-1.4T4 10V7q0-.825.588-1.412T6 5h12q.825 0 1.413.588T20 7v3q.825 0 1.413.588T22 12v3.65q0 .575-.387.963T20.65 17l-.55 1.675q-.05.15-.175.238T19.65 19h-.3q-.15 0-.275-.088t-.175-.237L18.35 17H5.65l-.55 1.675q-.05.15-.175.238T4.65 19h-.3q-.15 0-.275-.088t-.175-.237L3.35 17q-.575 0-.962-.387T2 15.65zM13 10h5V7h-5zm-7 0h5V7H6zm-2 5h16v-3H4zm16 0H4z" />
                    </svg>
                    <p class="text-center mt-3">King Bed {{ $king_bed < $rooms->count() ? "(Opsional)" : ""}}</p>
                </div>
            </div>
            @endif
            @if ($queen_bed > 0)
            <div class="w-[120px] h-[120px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                <div class="p-2">
                    <svg class="w-9 h-9 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M21 10.78V8c0-1.65-1.35-3-3-3h-4c-.77 0-1.47.3-2 .78c-.53-.48-1.23-.78-2-.78H6C4.35 5 3 6.35 3 8v2.78c-.61.55-1 1.34-1 2.22v5c0 .55.45 1 1 1s1-.45 1-1v-1h16v1c0 .55.45 1 1 1s1-.45 1-1v-5c0-.88-.39-1.67-1-2.22M14 7h4c.55 0 1 .45 1 1v2h-6V8c0-.55.45-1 1-1M5 8c0-.55.45-1 1-1h4c.55 0 1 .45 1 1v2H5zm-1 7v-2c0-.55.45-1 1-1h14c.55 0 1 .45 1 1v2z" />
                    </svg>
                    <p class="text-center mt-3">Queen Bed {{ $queen_bed < $rooms->count() ? "(Opsional)" : ""}}</p>
                </div>
            </div>
            @endif
            @if ($dispenser > 0)
            <div class="w-[120px] h-[120px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                <div class="p-2">
                    <svg class="w-9 h-9 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M18.08 7a1 1 0 0 0-1.08.92l-.35 4.55a2.67 2.67 0 0 1-1.2-.77a1 1 0 0 0-1.5 0a2.65 2.65 0 0 1-3.9 0a1 1 0 0 0-1.5 0a2.7 2.7 0 0 1-1.2.77L7 7.92A1 1 0 0 0 5.92 7A1 1 0 0 0 5 8.08l.86 11.15a3 3 0 0 0 3 2.77h6.3a3 3 0 0 0 3-2.77L19 8.08A1 1 0 0 0 18.08 7m-1.94 12.08a1 1 0 0 1-1 .92H8.85a1 1 0 0 1-1-.92L7.5 14.5a4.77 4.77 0 0 0 1.8-.79a4.66 4.66 0 0 0 5.4 0a4.77 4.77 0 0 0 1.8.79ZM12 10a3.26 3.26 0 0 0 3.25-3.25c0-2.75-2.58-4.51-2.69-4.58a1 1 0 0 0-1.12 0c-.11.08-2.69 1.83-2.69 4.58A3.26 3.26 0 0 0 12 10m0-5.7a3.61 3.61 0 0 1 1.25 2.45a1.25 1.25 0 0 1-2.5 0A3.66 3.66 0 0 1 12 4.3" />
                    </svg>
                    <p class="text-center mt-3">Dispenser {{ $dispenser < $rooms->count() ? "(Opsional)" : ""}}</p>
                </div>
            </div>
            @endif
            @if ($magic_jar > 0)
            <div class="w-[120px] h-[120px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                <div class="p-2">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" class="w-9 h-9 mx-auto" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M256,211c-57.897,0-105,47.103-105,105c0,24.813,20.187,45,45,45h120c24.813,0,45-20.187,45-45 C361,258.103,313.897,211,256,211z M316,331H196c-8.271,0-15-6.729-15-15c0-41.355,33.645-75,75-75c41.355,0,75,33.645,75,75 C331,324.271,324.271,331,316,331z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M286,271h-60c-8.284,0-15,6.716-15,15s6.716,15,15,15h60c8.284,0,15-6.716,15-15S294.284,271,286,271z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M406,30h-83.787l-16.82-16.82C296.894,4.681,285.594,0,273.574,0h-35.147c-12.02,0-23.32,4.681-31.819,13.18L189.787,30 H106c-41.355,0-75,33.645-75,75v332c0,24.813,20.187,45,45,45h5.73c1.048,1.226,10.578,30,42.812,30h22.917 c32.22,0,41.75-28.76,42.811-30h131.46c1.048,1.226,10.578,30,42.812,30h22.917c32.22,0,41.75-28.76,42.811-30H436 c24.813,0,45-20.187,45-45V105C481,63.645,447.355,30,406,30z M451,437c0,8.271-6.729,15-15,15h-15 c-5.681,0-10.875,3.209-13.416,8.291l-6.71,13.418c-2.557,5.114-7.697,8.291-13.415,8.291h-22.917 c-5.718,0-10.859-3.177-13.417-8.293l-6.709-13.416C341.875,455.209,336.681,452,331,452H181c-5.681,0-10.875,3.209-13.416,8.291 l-6.71,13.418c-2.557,5.114-7.697,8.291-13.415,8.291h-22.917c-5.718,0-10.859-3.177-13.417-8.293l-6.709-13.416 C101.875,455.209,96.681,452,91,452H76c-8.271,0-15-6.729-15-15v-15h390V437z M451,392H61V180c12.388,0,371.312,0,390,0V392z M226,150c0-16.542,13.458-30,30-30s30,13.458,30,30H226z M451,150H316c0-33.084-26.916-60-60-60s-60,26.916-60,60H61v-45 c0-24.813,20.187-45,45-45h90c3.978,0,7.793-1.581,10.606-4.394l21.213-21.213c2.833-2.833,6.6-4.393,10.606-4.393h35.147 c4.006,0,7.773,1.56,10.606,4.393l21.213,21.213C308.207,58.419,312.022,60,316,60h90c24.813,0,45,20.187,45,45V150z" />
                            </g>
                        </g>
                    </svg>
                    <p class="text-center mt-3">Magic Jar {{ $magic_jar < $rooms->count() ? "(Opsional)" : ""}}</p>
                </div>
            </div>
            @endif
            @if ($rak_piring > 0)
            <div class="w-[120px] h-[120px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                <div class="p-2">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" class="w-9 h-9 mx-auto" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M471.5,482H461c0-18.649,0-447.208,0-467c0-8.284-6.716-15-15-15H66c-8.284,0-15,6.716-15,15c0,41.114,0,444.211,0,467 H40.5c-8.284,0-15,6.716-15,15s6.716,15,15,15h51c8.284,0,15-6.716,15-15s-6.716-15-15-15H81v-21h350v21h-10.5 c-8.284,0-15,6.716-15,15s6.716,15,15,15h51c8.284,0,15-6.716,15-15S479.784,482,471.5,482z M431,431H81v-21h350V431z M431,380H81 V271h350V380z M431,241H81v-21h350V241z M431,190H81V81h350V190z M431,51H81V30h350V51z" />
                            </g>
                        </g>
                    </svg>
                    <p class="text-center mt-3">Rak Piring {{ $rak_piring < $rooms->count() ? "(Opsional)" : ""}}</p>
                </div>
            </div>
            @endif
            @if ($alat_makan > 0)
            <div class="w-[120px] h-[120px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                <div class="p-2">
                    <svg class="w-9 h-9 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                            <path d="M14 4v40M8 5v10c0 5 6 5 6 5s6 0 6-5V5m14 15v24" />
                            <path fill="currentColor" d="M40 12c0 4.418-2.686 8-6 8s-6-3.582-6-8s2.686-8 6-8s6 3.582 6 8" />
                        </g>
                    </svg>
                    <p class="text-center mt-3">Alat Makan {{ $alat_makan < $rooms->count() ? "(Opsional)" : ""}}</p>
                </div>
            </div>
            @endif
            @if ($meja_makan > 0)
            <div class="w-[120px] h-[120px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                <div class="p-2">
                    <svg class="w-9 h-9 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M4.325 9h15.35l-.85-3H5.2zM16.8 11H7.225l-.275 2h10.1zM4.15 18.875L5.225 11H3q-.5 0-.787-.4t-.163-.875l1.425-5q.1-.325.35-.525t.6-.2h15.15q.35 0 .6.2t.35.525l1.425 5q.125.475-.162.875T21 11h-2.2l1.05 7.875q.05.45-.238.788t-.737.337q-.375 0-.663-.238t-.337-.612l-.55-4.15H6.675l-.55 4.15q-.05.375-.337.613T5.125 20q-.45 0-.737-.337t-.238-.788" />
                    </svg>
                    <p class="text-center mt-3">Meja Makan {{ $meja_makan < $rooms->count() ? "(Opsional)" : ""}}</p>
                </div>
            </div>
            @endif
            @if ($dapur > 0)
            <div class="w-[120px] h-[120px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                <div class="p-2">
                    <svg class="w-9 h-9 mx-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M22 10h-4V7c0-1.66-1.34-3-3-3s-3 1.34-3 3h2c0-.55.45-1 1-1s1 .45 1 1v3H8c1.1 0 2-.9 2-2V4H4v4c0 1.1.9 2 2 2H2v2h2v8h16v-8h2zM6 6h2v2H6zm0 12v-6h5v6zm12 0h-5v-6h5z" />
                    </svg>
                    <p class="text-center mt-3">Dapur {{ $dapur < $rooms->count() ? "(Opsional)" : ""}}</p>
                </div>
            </div>
            @endif
            @if ($living_room > 0)
            <div class="w-[120px] h-[120px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                <div class="p-2">
                    <svg class="w-9 h-9 mx-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M21 9V7c0-1.65-1.35-3-3-3h-4c-.77 0-1.47.3-2 .78c-.53-.48-1.23-.78-2-.78H6C4.35 4 3 5.35 3 7v2c-1.65 0-3 1.35-3 3v5c0 1.65 1.35 3 3 3v2h2v-2h14v2h2v-2c1.65 0 3-1.35 3-3v-5c0-1.65-1.35-3-3-3m-7-3h4c.55 0 1 .45 1 1v2.78c-.61.55-1 1.34-1 2.22v2h-5V7c0-.55.45-1 1-1M5 7c0-.55.45-1 1-1h4c.55 0 1 .45 1 1v7H6v-2c0-.88-.39-1.67-1-2.22zm17 10c0 .55-.45 1-1 1H3c-.55 0-1-.45-1-1v-5c0-.55.45-1 1-1s1 .45 1 1v4h16v-4c0-.55.45-1 1-1s1 .45 1 1z" />
                    </svg>
                    <p class="text-center mt-3">Ruang Tamu {{ $living_room < $rooms->count() ? "(Opsional)" : ""}}</p>
                </div>
            </div>
            @endif
            @if ($microwave > 0)
            <div class="w-[120px] h-[120px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                <div class="p-2">
                    <svg class="w-9 h-9 mx-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M4 20q-.825 0-1.412-.587T2 18V6q0-.825.588-1.412T4 4h16q.825 0 1.413.588T22 6v12q0 .825-.587 1.413T20 20zm0-2h10V6H4zm12 0h4V6h-4zm1-9h2V7h-2zm1 4q.425 0 .713-.288T19 12q0-.425-.288-.712T18 11q-.425 0-.712.288T17 12q0 .425.288.713T18 13m0 4q.425 0 .713-.288T19 16q0-.425-.288-.712T18 15q-.425 0-.712.288T17 16q0 .425.288.713T18 17m-7.75-1q-.6 0-1.037-.225t-.763-.425q-.25-.175-.4-.262T7.75 15q-.275 0-.55.225t-.4.375l-1.425-1.4q.275-.3.888-.75T7.75 13q.6 0 1.038.238t.762.437q.225.15.4.238t.3.087q.275 0 .55-.225t.4-.375l1.425 1.4q-.275.3-.887.75T10.25 16m0-5q-.6 0-1.037-.225t-.763-.425q-.25-.175-.4-.262T7.75 10q-.275 0-.55.225t-.4.375L5.375 9.2q.275-.3.888-.75T7.75 8q.6 0 1.038.238t.762.437q.225.15.4.238t.3.087q.275 0 .55-.225t.4-.375l1.425 1.4q-.275.3-.887.75T10.25 11M16 18V6z" />
                    </svg>
                    <p class="text-center mt-3">Microwave {{ $microwave < $rooms->count() ? "(Opsional)" : ""}}</p>
                </div>
            </div>
            @endif
            @if ($kulkas > 0)
            <div class="w-[120px] h-[120px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                <div class="p-2">
                    <svg class="w-9 h-9 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M10.5.5h-7a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1v-10a1 1 0 0 0-1-1M2.5 6h9m-7-3v.5m-.5 9v1m6-1v1" />
                    </svg>
                    <p class="text-center mt-3">Kulkas {{ $kulkas < $rooms->count() ? "(Opsional)" : ""}}</p>
                </div>
            </div>
            @endif
            @if ($ac > 0)
            <div class="w-[120px] h-[120px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                <div class="p-2">
                    <svg class="w-9 h-9 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12.5.5h-11a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1" />
                            <path d="M11 7.5v-2a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v2m-.5 5h.1A1.4 1.4 0 0 0 4 11.1V10m7.5 2.5h-.1a1.4 1.4 0 0 1-1.4-1.4V10m-3 3.5V10" />
                        </g>
                    </svg>
                    <p class="text-center mt-3">AC {{ $ac < $rooms->count() ? "(Opsional)" : ""}}</p>
                </div>
            </div>
            @endif
            @if ($tv > 0)
            <div class="w-[120px] h-[120px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                <div class="p-2">
                    <svg class="w-9 h-9 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16">
                            <path d="M 191.99999,208 H 64 C 46.272,208 32,193.728 32,176 V 96 C 32,78.272 46.272,64 64,64 h 128 c 17.728,0 32,14.272 32,32 v 80 c 0,17.728 -14.272,32 -32,32" />
                            <path d="m 96,240 h 64" />
                            <path d="M 128,64 176,16" />
                            <path d="M 128,64 80,16" />
                        </g>
                    </svg>
                    <p class="text-center mt-3">TV {{ $tv < $rooms->count() ? "(Opsional)" : ""}}</p>
                </div>
            </div>
            @endif
        </div>
    </div>
    <div class="container flex mx-auto w-4/5 flex-col">
        <h2 class="text-[#12182E] text-2xl lg:text-4xl font-bold pt-2 lg:pt-4 font-[Aleo]">
            Kamar Mandi
        </h2>

        <div class="flex flex-wrap lg:flex-nowrap py-4 lg:gap-4 gap-2">
            @if ($shower > 0)
            <div class="w-[120px] h-[120px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                <div class="p-2">
                    <svg class="w-9 h-9 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="currentColor" d="m15.605 4.856l2.124-2.125a2.497 2.497 0 1 1 3.531 3.531l-2.122 2.122a8.005 8.005 0 0 1-1.202 8.98a2.496 2.496 0 0 1-4.18 2.401l-9.49-9.49a2.497 2.497 0 0 1 2.35-4.192a8.005 8.005 0 0 1 8.989-1.227m2.71 2.23l1.884-1.884a.997.997 0 0 0-1.41-1.41l-1.885 1.886a8.076 8.076 0 0 1 1.41 1.409m-12.989.72a.997.997 0 0 0 0 1.41l9.49 9.489a.997.997 0 1 0 1.41-1.41l-9.49-9.49a.997.997 0 0 0-1.41 0M7.78 17.28a.75.75 0 1 0-1.06-1.06l-2 2a.75.75 0 1 0 1.06 1.06zm2.5 1.44a.75.75 0 0 1 0 1.06l-2 2a.75.75 0 0 1-1.06-1.06l2-2a.75.75 0 0 1 1.06 0m-5-3.94a.75.75 0 1 0-1.06-1.06l-2 2a.75.75 0 1 0 1.06 1.06zm11.816 1.256a6.501 6.501 0 0 0-9.132-9.132z" />
                    </svg>
                    <p class="text-center mt-3">Shower {{ $shower < $rooms->count() ? "(Opsional)" : ""}}</p>
                </div>
            </div>
            @endif
            @if ($waterheater > 0)
            <div class="w-[120px] h-[120px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                <div class="p-2">
                    <svg class="w-9 h-9 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M9.3 10.775q0 .475.163.925t.462.825q.05-.3.2-.587t.375-.488L12 10l1.475 1.475q.225.2.375.475t.2.575q.275-.375.487-.8t.213-.9q0-.475-.15-.913t-.45-.812q-.275.125-.562.2T13 9.375q-.75 0-1.375-.425t-.95-1.125q-.3.3-.55.637t-.437.713Q9.5 9.55 9.4 9.95t-.1.825M12 12.1l-.425.425q-.1.1-.137.2t-.038.225q0 .25.175.4t.425.15q.25 0 .425-.15t.175-.4q0-.125-.037-.225t-.138-.2zM12 5v1.9q0 .425.3.713t.725.287q.275 0 .5-.162t.4-.388l.175-.25q1.025.575 1.588 1.563t.562 2.162q0 1.75-1.25 2.963T12 15q-1.75 0-2.975-1.225T7.8 10.8q0-1.925 1.225-3.425T12 5M6 22q-.825 0-1.412-.587T4 20V6q0-1.65 1.175-2.825T8 2h8q1.65 0 2.825 1.175T20 6v14q0 .825-.587 1.413T18 22zm0-4v2h12v-2q-.75 0-1.2.5T15 19q-1.35 0-1.763-.5T12 18q-.825 0-1.237.5T9 19q-1.35 0-1.763-.5T6 18m3-1q.825 0 1.238-.5T12 16q1.35 0 1.8.5t1.2.5q.75 0 1.2-.5T18 16V6q0-.825-.587-1.412T16 4H8q-.825 0-1.412.588T6 6v10q1.35 0 1.763.5T9 17" />
                    </svg>
                    <p class="text-center mt-3">Water Heater {{ $waterheater < $rooms->count() ? "(Opsional)" : ""}}</p>
                </div>
            </div>
            @endif
            @if ($wastafel > 0)
            <div class="w-[120px] h-[120px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                <div class="p-2">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" class="w-9 h-9 mx-auto" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M473.762,172.785h-86.499v-13.619h8.66c8.656,0,15.674-7.018,15.674-15.673c0-8.656-7.018-15.674-15.674-15.674 c-7.46,0-61.667,0-69.299,0c-8.656,0-15.673,7.018-15.673,15.674v29.293H271.67V62.893c0-12.785,10.402-23.187,23.187-23.187 s23.187,10.402,23.187,23.187v13.862c0,8.656,7.018,15.673,15.673,15.673c8.656,0,15.673-7.018,15.673-15.673V62.893 c0-30.07-24.464-54.534-54.534-54.534s-54.534,24.464-54.534,54.534v109.892h-39.281v-29.293c0-8.656-7.018-15.674-15.673-15.674 c-7.634,0-61.838,0-69.299,0c-8.656,0-15.673,7.018-15.673,15.674c0,8.656,7.018,15.673,15.673,15.673h8.66v13.619H38.238 C17.154,172.785,0,189.938,0,211.023c0,21.085,17.154,38.238,38.238,38.238H54.32c7.117,90.284,75.173,163.917,163.442,180.676 v35.466c0,21.084,17.154,38.237,38.238,38.237s38.238-17.153,38.238-38.238v-35.466c88.27-16.759,156.325-90.392,163.442-180.676 h16.082c21.084,0,38.238-17.153,38.238-38.238C512,189.937,494.846,172.785,473.762,172.785z M342.298,159.166h13.619v13.619 h-13.619V159.166z M156.076,159.166h13.619v13.619h-13.619V159.166z M262.891,465.403c0,3.8-3.091,6.891-6.891,6.891 c-3.8,0-6.891-3.091-6.891-6.891v-31.985c0.167,0.005,0.332,0.003,0.499,0.008c4.74,0.145,8.036,0.146,12.783,0 c0.167-0.005,0.332-0.003,0.499-0.008V465.403z M256,402.188c-88.808,0-162.171-67.186-170.219-152.926H426.22 C418.159,335.136,344.671,402.188,256,402.188z M473.762,217.914c-23.423,0-411.119,0-435.525,0c-3.799,0-6.891-3.091-6.891-6.891 c0-3.8,3.091-6.891,6.891-6.891c20.856,0,418.702,0,435.525,0c3.799,0,6.891,3.091,6.891,6.891 C480.653,214.824,477.562,217.914,473.762,217.914z" />
                            </g>
                        </g>
                    </svg>
                    <p class="text-center mt-3">Wastafel {{ $wastafel < $rooms->count() ? "(Opsional)" : ""}}</p>
                </div>
            </div>
            @endif
            @if ($closet > 0)
            <div class="w-[120px] h-[120px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                <div class="p-2">
                    <svg class="w-9 h-9 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                        <path fill="currentColor" d="M21 1a2 2 0 0 0-2 2v9H3.5A2.5 2.5 0 0 0 1 14.5v2a1.5 1.5 0 0 0 1.414 1.498a11 11 0 0 0 3.396 5.327c.549.474 1.145.896 1.782 1.256L6.097 27.57c-.093.186-.227.453-.328.733c-.1.277-.21.678-.158 1.11c.06.5.332.959.832 1.25c.44.254.982.337 1.557.337h14c.825 0 1.567-.402 2.082-.918c.515-.515.918-1.257.918-2.082v-8c0-.268.155-.627.445-1.024A4 4 0 0 0 29 15V3a2 2 0 0 0-2-2zM9.416 25.403A10.99 10.99 0 0 0 13 26c4.22 0 8.114-2.081 10-5.582V28c0 .175-.098.433-.332.668c-.235.235-.493.332-.668.332H8c-.146 0-.261-.008-.349-.02c.058-.159.142-.33.243-.533zM20.5 17c.334.445.814.775 1.368.92C20.811 21.587 17.223 24 13 24c-2.29 0-4.38-.855-5.968-2.263A9.002 9.002 0 0 1 4.222 17zm-.45-1H3v-1.5a.5.5 0 0 1 .5-.5H20v1.5c0 .171.017.338.05.5M27 15a2 2 0 0 1-2 2h-2.5a1.5 1.5 0 0 1-1.5-1.5V3h6z" />
                    </svg>
                    <p class="text-center mt-3">Closet {{ $closet < $rooms->count() ? "(Opsional)" : ""}}</p>
                </div>
            </div>
            @endif
            @if ($bathtub > 0)
            <div class="w-[120px] h-[120px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                <div class="p-2">
                    <svg class="w-9 h-9 mx-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32">
                        <path fill="currentColor" d="M17.25 6c0-2.414 1.836-4.25 4.25-4.25c2.414 0 4.25 1.836 4.25 4.25v9h2.75a2.5 2.5 0 0 1 .91 4.829c-.462 1.688-1.285 3.8-2.736 5.575c-.852 1.043-1.92 1.966-3.24 2.615l.773.774a1 1 0 0 1-1.414 1.414l-1.455-1.455c-.721.16-1.5.248-2.338.248h-6a10.7 10.7 0 0 1-2.338-.248l-1.455 1.455a1 1 0 0 1-1.414-1.414l.773-.774c-1.32-.65-2.388-1.572-3.24-2.615c-1.45-1.775-2.274-3.887-2.736-5.575A2.5 2.5 0 0 1 3.5 15h3.293c-.195-.305-.293-.5-.293-.5c-1-2 1-4.5 3.5-4.5c1.531 0 2.125.75 2.585 1.332c.29.368.528.668.915.668c.5 0 .75-.125 1-.25s.5-.25 1-.25s.75.25 1 .5s.5.5 1 .5s.875-.125 1.25-.25S19.5 12 20 12c2.5 0 3.5 2 3.5 2.5v.5h.75V6c0-1.586-1.164-2.75-2.75-2.75S18.75 4.414 18.75 6v.087C20.5 6.53 20.5 8.5 20.5 8.5c.04.17 0 .5-.5.5h-4c-.5 0-.545-.331-.5-.5c0 0 0-1.971 1.75-2.413zM4.726 20c.438 1.365 1.116 2.874 2.149 4.138C8.205 25.765 10.127 27 13 27h6c2.873 0 4.796-1.235 6.126-2.862c1.032-1.264 1.71-2.773 2.148-4.138zM3 17.5a.5.5 0 0 0 .5.5h25a.5.5 0 0 0 0-1h-25a.5.5 0 0 0-.5.5" />
                    </svg>
                    <p class="text-center mt-3">Bathtub {{ $bathtub < $rooms->count() ? "(Opsional)" : ""}}</p>
                </div>
            </div>
            @endif
        </div>
    </div>

    <div class="container flex mx-auto grid grid-cols-[0.5fr,2fr,3fr]  w-4/5">
        <div class="border-b-2 border-[#3E9CC0] w-full rounded-full h-0 my-auto"></div>
        <div class="flex items-center justify-center"> <!-- Added mx-4 class for horizontal margin -->
            <h1 class="text-[#12182E] text-2xl lg:text-4xl font-bold pt-2 lg:pt-4 font-[Aleo]">
                Tipe Ruangan Lainnya
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
                @foreach($otherTypes as $otherType)
                <li class="-5 border-2 border-[#24305A] rounded-xl m-5" id="card">
                    <a href="{{ route('type.show.user', ['id' => $otherType->id]) }}">
                        <img src="{{ asset('img/'.$otherType->photos->first()->name) }}" alt="black chair and white table" class="w-full object-cover object-center rounded-t-xl h-96" />
                        <div class="bg-[#24305A] relative p-2">
                            <h5 class="mb-2 text-4xl max-md:text-3xl font-bold tracking-tight text-white text-center" id="namakamar1">
                                {{ $otherType->name }}
                            </h5>
                        </div>
                        <div class="flex flex-col justify-center grid grid-cols-[2fr,2fr,.75fr] p-3">
                            <div class="grid grid-cols-[.5fr,2fr]">
                                <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56 56">
                                    <path fill="currentColor" d="M38.723 28.549c4.417 0 8.217-3.944 8.217-9.08c0-5.074-3.82-8.833-8.217-8.833c-4.396 0-8.217 3.841-8.217 8.874c0 5.095 3.8 9.039 8.217 9.039m-23.645.473c3.821 0 7.15-3.452 7.15-7.91c0-4.416-3.35-7.683-7.15-7.683c-3.82 0-7.19 3.349-7.169 7.725c0 4.416 3.328 7.868 7.17 7.868M3.616 47.572h15.612c-2.136-3.102.473-9.347 4.89-12.757c-2.28-1.52-5.219-2.65-9.06-2.65C5.793 32.164 0 39.004 0 44.695c0 1.85 1.027 2.877 3.616 2.877m22.186 0h25.822c3.225 0 4.376-.925 4.376-2.733c0-5.3-6.636-12.613-17.297-12.613c-10.641 0-17.277 7.313-17.277 12.614c0 1.807 1.15 2.732 4.376 2.732" />
                                </svg>
                                <h5 class="mb-2 text-lg max-md:text-sm font-bold tracking-tight text-[#24305A]">
                                    {{ $otherType->size }} Guest
                                </h5>
                            </div>
                        </div>
                        <div class="flex flex-col justify-center pl-2 pr-2 pb-2">
                            <div class="rounded-xl px-3 py-2 text-xl max-md:text-sm max-md:mx-0 bg-[#3E9CC0] font-semibold leading-6 text-white text-center">
                                Rp {{ number_format($otherType->price, 0, ',', '.') }}
                            </div>
                        </div>
                    </a>
                </li>
                @endforeach
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
</div>
<script src="{{ asset('js/show.js') }}"></script>
@include('layouts.footer')
@endsection