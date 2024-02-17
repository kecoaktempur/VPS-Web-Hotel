@extends('layouts.app')
@section('content')
<div class="w-full flex flex-col h-screen overflow-y-hidden">
    <!-- Mobile Header & Nav -->
    @include('layouts.navbar-admin-mobile')

    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <div class="w-full mt-12 bg-white rounded-2xl p-5">
                <div class="bg-white overflow-auto mt-5">
                    <form action="{{ route('type.update', ['id' => $type->id]) }}" method="POST">
                        @csrf
                        @method('PUT');
                        <div class="flex items-center justify-between mb-5">
                            <h1 class="text-2xl font-bold" style="color: #070A52;">Edit Tipe Ruangan</h1>
                            <div class="flex space-x-2">
                                <a href="{{ route('type.index.admin') }}" class="text-sm bg-transparent hover:bg-red-600 text-[#24305A] font-semibold hover:text-white py-1.5 px-2 border border-[#24305A]  hover:border-transparent rounded">
                                    Cancel
                                </a>
                                <button type="submit" class="rounded-md bg-[#24305A] px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#24305A]">
                                    Submit
                                </button>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-1/3 mb-2">
                                <div class="relative mb-2">
                                    <h1 class="mb-2 font-bold">Nama Ruangan</h1>
                                    <input type="text" id="name" name="name" class="block px-2.5 py-2.5 w-full text-sm text-gray-900 bg-transparent rounded-xl border-1 border-2 border-black appearance-none focus:outline-none focus:ring-0 focus:border-black peer bg-white" placeholder="Nama Ruangan" value="{{ $type->name }}"/>
                                </div>
                                @if($errors->has('name'))
                                <div class="text-red-500 text-sm mt-1">
                                    {{ $errors->first('name') }}
                                </div>
                                @endif
                            </div>
                            <div class="w-1/3 pl-2 mb-2">
                                <div class="relative mb-2">
                                    <h1 class="mb-2 font-bold">Jumlah Orang</h1>
                                    <input type="number" id="size" name="size" class="block px-2.5 py-2.5 w-full text-sm text-gray-900 bg-transparent rounded-xl border-1 border-2 border-black appearance-none focus:outline-none focus:ring-0 focus:border-black peer bg-white" min="1" placeholder="Jumlah Orang" value="{{ $type->size }}"/>
                                </div>
                                @if($errors->has('size'))
                                <div class="text-red-500 text-sm mt-1">
                                    {{ $errors->first('size') }}
                                </div>
                                @endif
                            </div>
                            <div class="w-1/3 pl-2 mb-2">
                                <div class="relative mb-2">
                                    <h1 class="mb-2 font-bold">Harga Per Malam</h1>
                                    <input type="number" id="price" name="price" class="block px-2.5 py-2.5 w-full text-sm text-gray-900 bg-transparent rounded-xl border-1 border-2 border-black appearance-none focus:outline-none focus:ring-0 focus:border-black peer bg-white" min="0" placeholder="Harga" value="{{ $type->price }}"/>
                                </div>
                                @if($errors->has('price'))
                                <div class="text-red-500 text-sm mt-1">
                                    {{ $errors->first('price') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-full pl-2 mb-2">
                                <h1 class="mb-2 font-bold">Deskripsi</h1>
                                <div class="py-2 px-4 mb-4 rounded-lg rounded-t-lg border border-gray-200">
                                    <label for="description" class="sr-only">Deskripsi</label>
                                    <textarea id="description" name="description" rows="6" class="bg-transparent px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none" placeholder="Kamar standar kami ....." ><?php echo $type->description; ?></textarea>
                                </div>
                                @if($errors->has('description'))
                                <div class="text-red-500 text-sm mt-1">
                                    {{ $errors->first('description') }}
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