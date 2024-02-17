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
                        <h1 class="text-2xl font-bold" style="color: #070A52;">Tambah Tipe Ruangan</h1>
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
                                <h1 class="mb-2 font-bold">Nama Ruangan</h1>
                                <input type="text" id="namaruangan" class="block px-2.5 py-2.5 w-full text-sm text-gray-900 bg-transparent rounded-xl border-1 border-2 border-black appearance-none focus:outline-none focus:ring-0 focus:border-black peer bg-white" placeholder="Nama Ruangan" />
                            </div>
                        </div>
                        <div class="w-1/3 pl-2 mb-2">
                            <div class="relative mb-2">
                                <h1 class="mb-2 font-bold">Jumlah Orang</h1>
                                <input type="text" id="jumlahorang" class="block px-2.5 py-2.5 w-full text-sm text-gray-900 bg-transparent rounded-xl border-1 border-2 border-black appearance-none focus:outline-none focus:ring-0 focus:border-black peer bg-white" placeholder="0" />
                            </div>
                        </div>
                        <div class="w-1/3 pl-2 mb-2">
                            <div class="relative mb-2">
                                <h1 class="mb-2 font-bold">Harga Per Malam</h1>
                                <input type="text" id="namaruangan" class="block px-2.5 py-2.5 w-full text-sm text-gray-900 bg-transparent rounded-xl border-1 border-2 border-black appearance-none focus:outline-none focus:ring-0 focus:border-black peer bg-white" placeholder="500000" />
                            </div>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="w-full pl-2 mb-2">
                            <h1 class="mb-2 font-bold">Deskripsi</h1>
                            <div class="py-2 px-4 mb-4 rounded-lg rounded-t-lg border border-gray-200">
                                <label for="comment" class="sr-only">Deskripsi</label>
                                <textarea id="notetambahan" rows="6" class="bg-transparent px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none" placeholder="Kamar standar kami  ....."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection