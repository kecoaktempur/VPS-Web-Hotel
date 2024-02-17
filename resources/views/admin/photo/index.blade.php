@extends('layouts.app')
@section('content')
<div class="w-full flex flex-col h-screen overflow-y-hidden">
    <!-- Mobile Header & Nav -->
    @include('layouts.navbar-admin-mobile')

    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <div class="flex items-center justify-between mb-5">
                <h1 class="text-3xl text-[#24305A] font-bold pb-6">Foto</h1>
                <div class="flex space-x-2">
                    <a href="{{ route('photo.create')}}" class="rounded-md bg-[#24305A] px-3 py-2.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-800 text-xl">
                        Tambah Foto
                    </a>
                </div>
            </div>

            <div class="w-full mt-5">
                <div class="bg-white overflow-auto">
                    <table class="w-full table-auto text-sm text-left rtl:text-right text-gray-500 overflow:hidden">
                        <thead class="text-xs uppercase border-b border-gray-700" style="color: #070A52;">
                            <tr>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Foto
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Tipe Ruangan
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Action
                                </th>
                            </tr>
                        </thead>

                        @php
                        $count = 1;
                        @endphp


                        <tbody>
                            @foreach ($photos as $photo)
                            <tr>
                                <th scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                    {{ $count++ }}
                                </th>
                                <th scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap max-w-36">
                                    <img src="{{ asset('img/' . $photo->name) }}" alt="">
                                </th>
                                <th scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                    {{ $photo->name }}
                                </th>
                                <td scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                    @php
                                    $typephoto = $typephotos->where('photo_id', $photo->id)->first();
                                    $type = null;
                                    if ($typephoto) {
                                    $type = $types->where('id', $typephoto->type_id)->first();
                                    }
                                    @endphp
                                    {{ $type ? $type->name : "-" }}
                                </td>
                                <td scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                    <form action="{{ route('photo.destroy', ['id' => $photo->id]) }} " method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="ml-2 rounded-md bg-red-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-red-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="flex flex-col-reverse justify-end items-end bottom-0 right-0 mt-4 mb-4 mr-4">
                    <div class="inline-flex rounded-md">
                        ..........
                    </div>
                </div>
            </div>
    </div>
    </main>
</div>
@endsection