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
                        <h1 class="text-2xl font-bold" style="color: #070A52;">Tambah Foto</h1>
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
                                <h1 class="mb-2 font-bold">Foto</h1>
                                <form>
                                    <input type="file" class="block w-full text-sm text-slate-500
                                              file:mr-4 file:py-2 file:px-4 file:rounded-md
                                              file:border-0 file:text-sm file:font-semibold
                                              file:bg-blue-100 file:text-[#24305A]
                                              hover:file:bg-pink-100" />
                                </form>
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
                </div>
            </div>
        </main>
    </div>
</div>
@endsection