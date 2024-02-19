@extends('layouts.app')
@section('content')
<div class="w-full flex flex-col h-screen overflow-y-hidden">
    <!-- Mobile Header & Nav -->
    @include('layouts.navbar-admin-mobile')

    <div class="w-full overflow-x-hidden border-t flex flex-col max-sm:pt-20">
        <main class="w-full flex-grow p-6">
            <div class="w-full mt-12 bg-white rounded-2xl p-5">
                <div class="bg-white overflow-auto mt-5">
                    <form action="{{ route('photo.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="flex items-center justify-between mb-5">
                            <h1 class="text-2xl font-bold" style="color: #070A52;">Tambah Foto</h1>
                            <div class="flex space-x-2">
                                <a href="{{ route('photo') }}" class="text-sm bg-transparent hover:bg-red-600 text-[#24305A] font-semibold hover:text-white py-1.5 px-2 border border-[#24305A]  hover:border-transparent rounded">
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
                                    <h1 class="mb-2 font-bold">Foto</h1>
                                    <input type="file" class="block w-full text-sm text-slate-500
                                    file:mr-4 file:py-2 file:px-4 file:rounded-md
                                    file:border-0 file:text-sm file:font-semibold
                                    file:bg-blue-100 file:text-[#24305A]
                                    hover:file:bg-pink-100" id="photo" name="photo" />
                                </div>
                                @if($errors->has('photo'))
                                <div class="text-red-500 text-sm mt-1">
                                    {{ $errors->first('photo') }}
                                </div>
                                @endif
                            </div>
                            <div class="w-1/2 pl-2 mb-2">
                                <div class="relative mb-2">
                                    <h1 class="mb-2 font-bold">Tipe Ruangan</h1>
                                    <select id="type_id" name="type_id" class="rounded-xl px-3 py-2 font-semibold leading-6 border-2 border-[#24305A] placeholder:text-gray-400 focus:bg-white focus:outline-none focus:ring-1 focus:ring-blue-800 w-full relative">
                                        <option value="0" selected>-</option>
                                        @foreach ($types as $type)
                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
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
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection