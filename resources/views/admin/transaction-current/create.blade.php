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
                        <h1 class="text-2xl font-bold" style="color: #070A52;">Tambah Transaksi</h1>
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
                        <div class="w-1/3 mb-2">
                            <div class="relative mb-2">
                                <h1 class="mb-2 font-bold">Nama Kepala</h1>
                                <input type="text" id="namakepala" class="block px-2.5 py-2.5 w-full text-sm text-gray-900 bg-transparent rounded-xl border-1 border-2 border-black appearance-none focus:outline-none focus:ring-0 focus:border-black peer bg-white" placeholder="Nama Kepala" />
                            </div>
                        </div>
                        <div class="w-1/3 pl-2 mb-2">
                            <h1 class="mb-2 font-bold">Check In</h1>
                            <input type="date" id="checkin" name="checkin" placeholder="Add Date" class="p-2 w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-xl border-2 border-[#000000]">
                        </div>
                        <div class="w-1/3 pl-2 mb-2">
                            <h1 class="mb-2 font-bold">Check Out</h1>
                            <input type="date" id="checkout" name="checkout" placeholder="Add Date" class="p-2 w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-xl border-2 border-[#000000]">
                        </div>
                    </div>
                    <div class="flex">
                        <div class="w-full pl-2 mb-2">
                            <h1 class="mb-2 font-bold">Note</h1>
                            <div class="py-2 px-4 mb-4 rounded-lg rounded-t-lg border border-gray-200">
                                <label for="comment" class="sr-only">Your comment</label>
                                <textarea id="notetambahan" rows="6" class="bg-transparent px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none" placeholder="Tambah Kasur (1), Tambah Bantal (1)....."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="flex grid grid-cols-4 max-md:grid-cols-2">
                        <div class="mb-2">
                            <h1 class="mb-2 font-bold">Standar Room</h1>
                            <div class="custom-number-input h-10 w-32">
                                <div class="flex flex-row h-10 rounded-lg relative bg-transparent mt-1">
                                    <button data-action="decrement" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                        <span class="m-auto text-2xl font-">−</span>
                                    </button>
                                    <input type="number" class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black md:text-base cursor-default flex items-center text-gray-700 outline-none" name="standar-room" value="0" max="5">
                                    <button data-action="increment" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                                        <span class="m-auto text-2xl font-">+</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <h1 class="mb-2 font-bold">Standar Room</h1>
                            <div class="custom-number-input h-10 w-32">
                                <div class="flex flex-row h-10 rounded-lg relative bg-transparent mt-1">
                                    <button data-action="decrement" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                        <span class="m-auto text-2xl font-">−</span>
                                    </button>
                                    <input type="number" class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black md:text-base cursor-default flex items-center text-gray-700 outline-none" name="standar-room" value="0" max="5">
                                    <button data-action="increment" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                                        <span class="m-auto text-2xl font-">+</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="relative mb-2">
                                <h1 class="mb-2 font-bold">Standar Room</h1>
                                <div class="custom-number-input h-10 w-32">
                                    <div class="flex flex-row h-10 rounded-lg relative bg-transparent mt-1">
                                        <button data-action="decrement" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                            <span class="m-auto text-2xl font-">−</span>
                                        </button>
                                        <input type="number" class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black md:text-base cursor-default flex items-center text-gray-700 outline-none" name="standar-room" value="0" max="5">
                                        <button data-action="increment" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                                            <span class="m-auto text-2xl font-">+</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="relative mb-2">
                                <h1 class="mb-2 font-bold">Standar Room</h1>
                                <div class="custom-number-input h-10 w-32">
                                    <div class="flex flex-row h-10 rounded-lg relative bg-transparent mt-1">
                                        <button data-action="decrement" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                            <span class="m-auto text-2xl font-">−</span>
                                        </button>
                                        <input type="number" class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black md:text-base cursor-default flex items-center text-gray-700 outline-none" name="standar-room" value="0" max="5">
                                        <button data-action="increment" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                                            <span class="m-auto text-2xl font-">+</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex">
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<script src="{{ asset('js/quantity.js') }}"></script>
@endsection