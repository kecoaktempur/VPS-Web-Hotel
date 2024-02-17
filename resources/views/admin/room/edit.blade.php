@extends('layouts.app')
@section('content')
<div class="w-full flex flex-col h-screen overflow-y-hidden">
    <!-- Mobile Header & Nav -->
    @include('layouts.navbar-admin-mobile')

    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <div class="w-full mt-12 bg-white rounded-2xl p-5">
                <div class="bg-white overflow-auto mt-5">
                    <form action="{{route('room.update', ['id' => $room->id])}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="flex items-center justify-between mb-5">
                            <h1 class="text-2xl font-bold" style="color: #070A52;">Edit Ruangan</h1>
                            <div class="flex space-x-2">
                                <a href="{{ route('room') }}" class="text-sm bg-transparent hover:bg-red-600 text-[#24305A] font-semibold hover:text-white py-1.5 px-2 border border-[#24305A]  hover:border-transparent rounded">
                                    Cancel
                                </a>
                                <button type="submit" class="rounded-md bg-[#24305A] px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#24305A]">
                                    Submit
                                </button>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-1/2 mb-2">
                                <div class="relative mb-2">
                                    <h1 class="mb-2 font-bold">Nomor Ruangan</h1>
                                    <input type="text" id="room_number" name="room_number" class="block px-2.5 py-2.5 w-full text-sm text-gray-900 bg-transparent rounded-xl border-1 border-2 border-black appearance-none focus:outline-none focus:ring-0 focus:border-black peer bg-white" placeholder="Nomor Ruangan" value="{{$room->room_number}}" />
                                </div>
                                @if($errors->has('room_number'))
                                <div class="text-red-500 text-sm mt-1">
                                    {{ $errors->first('room_number') }}
                                </div>
                                @endif
                            </div>
                            <div class="w-1/2 pl-2 mb-2">
                                <div class="relative mb-2">
                                    <h1 class="mb-2 font-bold">Tipe Ruangan</h1>
                                    <select id="type_id" name="type_id" autocomplete="jumlah" required class="rounded-xl px-3 py-2 font-semibold leading-6 border-2 border-[#24305A] placeholder:text-gray-400 focus:bg-white focus:outline-none focus:ring-1 focus:ring-blue-800 w-full relative">
                                        <option value="0">-</option>
                                        @foreach ($types as $type)
                                        <option value="{{ $type->id }}" {{ $room->type_id == $type->id ? 'selected' : '' }}>
                                            {{ $type->name }}
                                        </option>
                                        @endforeach

                                    </select>
                                </div>
                                @if($errors->has('type_id'))
                                <div class="text-red-500 text-sm mt-1">
                                    {{ $errors->first('type_id') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-1/3 mb-2">
                                <div class="relative mb-2">
                                    <h1 class="mb-2 font-bold">Single Bed</h1>
                                    <div class="custom-number-input h-10 w-32">
                                        <div class="flex flex-row h-10 rounded-lg relative bg-transparent mt-1">
                                            <button type="button" data-action="decrement" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                                <span class="m-auto text-2xl font-">−</span>
                                            </button>
                                            <input type="number" class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black md:text-base cursor-default flex items-center text-gray-700 outline-none" id="single_bed" name="single_bed" value="{{ $room->single_bed }}" max="99">
                                            <button type="button" data-action="increment" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                                                <span class="m-auto text-2xl font-">+</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-1/3 mb-2">
                                <div class="relative mb-2">
                                    <h1 class="mb-2 font-bold">King Bed</h1>
                                    <div class="custom-number-input h-10 w-32">
                                        <div class="flex flex-row h-10 rounded-lg relative bg-transparent mt-1">
                                            <button type="button" data-action="decrement" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                                <span class="m-auto text-2xl font-">−</span>
                                            </button>
                                            <input type="number" class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black md:text-base cursor-default flex items-center text-gray-700 outline-none" id="king_bed" name="king_bed" value="{{ $room->king_bed }}" max="99">
                                            <button type="button" data-action="increment" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                                                <span class="m-auto text-2xl font-">+</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-1/3 mb-2">
                                <div class="relative mb-2">
                                    <h1 class="mb-2 font-bold">Queen Bed</h1>
                                    <div class="custom-number-input h-10 w-32">
                                        <div class="flex flex-row h-10 rounded-lg relative bg-transparent mt-1">
                                            <button type="button" data-action="decrement" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                                <span class="m-auto text-2xl font-">−</span>
                                            </button>
                                            <input type="number" class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black md:text-base cursor-default flex items-center text-gray-700 outline-none" id="queen_bed" name="queen_bed" value="{{ $room->queen_bed }}" max="99">
                                            <button type="button" data-action="increment" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                                                <span class="m-auto text-2xl font-">+</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h1 class="text-2xl font-bold" style="color: #070A52;">Fasilitas</h1>
                        <div class="flex grid grid-cols-7 max-md:grid-cols-3">
                            <div class="mb-2">
                                <div class="relative mb-2">
                                    <div class="inline-flex items-center">
                                        <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="checkbox">
                                        <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-[#24305A] checked:before:bg-gray-900 hover:before:opacity-10" id="dispenser" name="dispenser" {{ $room->dispenser ? 'checked' : '' }}>
                                            <span class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </label>
                                        <h1 class="font-bold">Dispenser</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="relative mb-2">
                                    <div class="inline-flex items-center">
                                        <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="checkbox">
                                            <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-[#24305A] checked:before:bg-gray-900 hover:before:opacity-10" id="magic_jar" name="magic_jar" {{ $room->magic_jar ? 'checked' : '' }}/>
                                            <span class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </label>
                                        <h1 class="font-bold">Magic Jar</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="relative mb-2">
                                    <div class="inline-flex items-center">
                                        <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="checkbox">
                                            <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-[#24305A] checked:before:bg-gray-900 hover:before:opacity-10" id="rak_piring" name="rak_piring" {{ $room->rak_piring ? 'checked' : '' }}/>
                                            <span class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </label>
                                        <h1 class="font-bold">Rak Piring</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="relative mb-2">
                                    <div class="inline-flex items-center">
                                        <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="checkbox">
                                            <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-[#24305A] checked:before:bg-gray-900 hover:before:opacity-10" id="alat_makan" name="alat_makan" {{ $room->alat_makan ? 'checked' : '' }}/>
                                            <span class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </label>
                                        <h1 class="font-bold">Alat Makan</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="relative mb-2">
                                    <div class="inline-flex items-center">
                                        <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="checkbox">
                                            <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-[#24305A] checked:before:bg-gray-900 hover:before:opacity-10" id="meja_makan" name="meja_makan" {{ $room->meja_makan ? 'checked' : '' }}/>
                                            <span class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </label>
                                        <h1 class="font-bold">Meja Makan</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="relative mb-2">
                                    <div class="inline-flex items-center">
                                        <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="checkbox">
                                            <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-[#24305A] checked:before:bg-gray-900 hover:before:opacity-10" id="dapur" name="dapur" {{ $room->dapur ? 'checked' : '' }}/>
                                            <span class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </label>
                                        <h1 class="font-bold">Dapur</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="relative mb-2">
                                    <div class="inline-flex items-center">
                                        <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="checkbox">
                                            <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-[#24305A] checked:before:bg-gray-900 hover:before:opacity-10" id="living_room" name="living_room" {{ $room->living_room ? 'checked' : '' }}/>
                                            <span class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </label>
                                        <h1 class="font-bold">Living Room</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="relative mb-2">
                                    <div class="inline-flex items-center">
                                        <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="checkbox">
                                            <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-[#24305A] checked:before:bg-gray-900 hover:before:opacity-10" id="microwave" name="microwave" {{ $room->microwave ? 'checked' : '' }}/>
                                            <span class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </label>
                                        <h1 class="font-bold">Microwave</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="relative mb-2">
                                    <div class="inline-flex items-center">
                                        <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="checkbox">
                                            <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-[#24305A] checked:before:bg-gray-900 hover:before:opacity-10" id="kulkas" name="kulkas" {{ $room->kulkas ? 'checked' : '' }}/>
                                            <span class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </label>
                                        <h1 class="font-bold">Kulkas</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="relative mb-2">
                                    <div class="inline-flex items-center">
                                        <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="checkbox">
                                            <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-[#24305A] checked:before:bg-gray-900 hover:before:opacity-10" id="shower" name="shower" {{ $room->shower ? 'checked' : '' }}/>
                                            <span class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </label>
                                        <h1 class="font-bold">Shower</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="relative mb-2">
                                    <div class="inline-flex items-center">
                                        <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="checkbox">
                                            <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-[#24305A] checked:before:bg-gray-900 hover:before:opacity-10" id="waterheater" name="waterheater" {{ $room->waterheater ? 'checked' : '' }}/>
                                            <span class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </label>
                                        <h1 class="font-bold">Water Heater</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="relative mb-2">
                                    <div class="inline-flex items-center">
                                        <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="checkbox">
                                            <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-[#24305A] checked:before:bg-gray-900 hover:before:opacity-10" id="wastafel" name="wastafel" {{ $room->wastafel ? 'checked' : '' }}/>
                                            <span class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </label>
                                        <h1 class="font-bold">Wastafel</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="relative mb-2">
                                    <div class="inline-flex items-center">
                                        <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="checkbox">
                                            <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-[#24305A] checked:before:bg-gray-900 hover:before:opacity-10" id="closet" name="closet" {{ $room->closet ? 'checked' : '' }}/>
                                            <span class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </label>
                                        <h1 class="font-bold">Closet</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="relative mb-2">
                                    <div class="inline-flex items-center">
                                        <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="checkbox">
                                            <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-[#24305A] checked:before:bg-gray-900 hover:before:opacity-10" id="bathtub" name="bathtub" {{ $room->bathtub ? 'checked' : '' }}/>
                                            <span class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </label>
                                        <h1 class="font-bold">Bathtub</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="relative mb-2">
                                    <div class="inline-flex items-center">
                                        <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="checkbox">
                                            <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-[#24305A] checked:before:bg-gray-900 hover:before:opacity-10" id="ac" name="ac" {{ $room->ac ? 'checked' : '' }}/>
                                            <span class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </label>
                                        <h1 class="font-bold">AC</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="relative mb-2">
                                    <div class="inline-flex items-center">
                                        <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="checkbox">
                                            <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-[#24305A] checked:before:bg-gray-900 hover:before:opacity-10" id="tv" name="tv" {{ $room->tv ? 'checked' : '' }}/>
                                            <span class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </label>
                                        <h1 class="font-bold">TV</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>

<script src="{{ asset('js/quantity.js') }}"></script>
@endsection