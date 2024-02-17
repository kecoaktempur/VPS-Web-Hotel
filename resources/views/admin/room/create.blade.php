@extends('layouts.app')
@section('content')
<div class="w-full flex flex-col h-screen overflow-y-hidden">
    <!-- Mobile Header & Nav -->
    @include('layouts.navbar-admin-mobile')

    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <div class="w-full mt-12 bg-white rounded-2xl p-5">
                <div class="bg-white overflow-auto mt-5">
                    <div class="flex items-center justify-between mb-5">
                        <h1 class="text-2xl font-bold" style="color: #070A52;">Tambah Ruangan</h1>
                        <div class="flex space-x-2">
                            <a href="#" class="text-sm bg-transparent hover:bg-red-600 text-[#24305A] font-semibold hover:text-white py-1.5 px-2 border border-[#24305A]  hover:border-transparent rounded">
                                Cancel
                            </a>
                            <button class="rounded-md bg-[#24305A] px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#24305A]">
                                Submit
                            </button>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="w-1/2 mb-2">
                            <div class="relative mb-2">
                                <h1 class="mb-2 font-bold">Nama Ruangan</h1>
                                <input type="text" id="namaruangan" class="block px-2.5 py-2.5 w-full text-sm text-gray-900 bg-transparent rounded-xl border-1 border-2 border-black appearance-none focus:outline-none focus:ring-0 focus:border-black peer bg-white" placeholder="Nama Ruangan" />
                            </div>
                        </div>
                        <div class="w-1/2 pl-2 mb-2">
                            <div class="relative mb-2">
                                <h1 class="mb-2 font-bold">Tipe Ruangan</h1>
                                <select id="jumlah" name="jumlah" autocomplete="jumlah" required class="rounded-xl px-3 py-2 font-semibold leading-6 border-2 border-[#24305A] placeholder:text-gray-400 focus:bg-white focus:outline-none focus:ring-1 focus:ring-blue-800 w-full relative">
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="w-1/3 mb-2">
                            <div class="relative mb-2">
                                <h1 class="mb-2 font-bold">Single Bed</h1>
                                <div class="custom-number-input h-10 w-32">
                                    <div class="flex flex-row h-10 rounded-lg relative bg-transparent mt-1">
                                        <button data-action="decrement" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                            <span class="m-auto text-2xl font-">−</span>
                                        </button>
                                        <input type="number" class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black md:text-base cursor-default flex items-center text-gray-700 outline-none" name="single-bed" value="0" max="5">
                                        <button data-action="increment" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
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
                                        <button data-action="decrement" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                            <span class="m-auto text-2xl font-">−</span>
                                        </button>
                                        <input type="number" class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black md:text-base cursor-default flex items-center text-gray-700 outline-none" name="king-bed" value="0" max="5">
                                        <button data-action="increment" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
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
                                        <button data-action="decrement" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                            <span class="m-auto text-2xl font-">−</span>
                                        </button>
                                        <input type="number" class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black md:text-base cursor-default flex items-center text-gray-700 outline-none" name="queen-bed" value="0" max="5">
                                        <button data-action="increment" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
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
                                        <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-[#24305A] checked:before:bg-gray-900 hover:before:opacity-10" id="dispenser" checked />
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
                                        <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-[#24305A] checked:before:bg-gray-900 hover:before:opacity-10" id="magicjar" checked />
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
                                        <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-[#24305A] checked:before:bg-gray-900 hover:before:opacity-10" id="rakpiring" checked />
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
                                        <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-[#24305A] checked:before:bg-gray-900 hover:before:opacity-10" id="alatmakan" checked />
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
                                        <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-[#24305A] checked:before:bg-gray-900 hover:before:opacity-10" id="mejamakan" checked />
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
                                        <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-[#24305A] checked:before:bg-gray-900 hover:before:opacity-10" id="dapur" checked />
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
                                        <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-[#24305A] checked:before:bg-gray-900 hover:before:opacity-10" id="livingroom" checked />
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
                                        <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-[#24305A] checked:before:bg-gray-900 hover:before:opacity-10" id="microwave" checked />
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
                                        <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-[#24305A] checked:before:bg-gray-900 hover:before:opacity-10" id="kulkas" checked />
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
                                        <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-[#24305A] checked:before:bg-gray-900 hover:before:opacity-10" id="shower" checked />
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
                                        <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-[#24305A] checked:before:bg-gray-900 hover:before:opacity-10" id="waterheater" checked />
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
                                        <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-[#24305A] checked:before:bg-gray-900 hover:before:opacity-10" id="wastafel" checked />
                                        <span class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </label>
                                    <h1 class="font-bold">Watafel</h1>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="relative mb-2">
                                <div class="inline-flex items-center">
                                    <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="checkbox">
                                        <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-[#24305A] checked:before:bg-gray-900 hover:before:opacity-10" id="closet" checked />
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
                                        <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-[#24305A] checked:before:bg-gray-900 hover:before:opacity-10" id="bathup" checked />
                                        <span class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </label>
                                    <h1 class="font-bold">Bathup</h1>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="relative mb-2">
                                <div class="inline-flex items-center">
                                    <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="checkbox">
                                        <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-[#24305A] checked:before:bg-gray-900 hover:before:opacity-10" id="tv" checked />
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
                </div>
            </div>
        </main>
    </div>
</div>

<script src="{{ asset('js/quantity.js') }}"></script>
@endsection