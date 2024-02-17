@extends('layouts.app')
@section('content')
<div class="w-full flex flex-col h-screen overflow-y-hidden">
    <!-- Mobile Header & Nav -->
    @include('layouts.navbar-admin-mobile')

    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <div class="w-full mt-12 bg-white rounded-2xl p-5">
                <div class="bg-white overflow-auto mt-5">
                    <form action="{{ route('transaction.update', ['id' => $transaction->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="room_id" name="room_id" value="{{ $transaction->room_id }}" />
                        <div class="flex items-center justify-between mb-5">
                            <h1 class="text-2xl font-bold" style="color: #070A52;">Edit Transaksi</h1>
                            <div class="flex space-x-2">
                                <a href="{{ route('transaction.index.current') }}" class="text-sm bg-transparent hover:bg-red-600 text-[#24305A] font-semibold hover:text-white py-1.5 px-2 border border-[#24305A]  hover:border-transparent rounded">
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
                                    <h1 class="mb-2 font-bold">Nomor Ruangan (Tidak dapat diganti)</h1>
                                    <input type="text" id="room_number" name="room_number" class="block px-2.5 py-2.5 w-full text-sm text-gray-900 bg-transparent rounded-xl border-1 border-2 border-black appearance-none focus:outline-none focus:ring-0 focus:border-black peer bg-white" placeholder="Nama Kepala" value="{{ $transaction->room->room_number }}" readonly />
                                </div>
                            </div>
                            <div class="w-1/3 pl-2 mb-2">
                                <div class="relative mb-2">
                                    <h1 class="mb-2 font-bold">Nama Lengkap</h1>
                                    <input type="text" id="name" name="name" class="block px-2.5 py-2.5 w-full text-sm text-gray-900 bg-transparent rounded-xl border-1 border-2 border-black appearance-none focus:outline-none focus:ring-0 focus:border-black peer bg-white" placeholder="Nama Kepala" value="{{ $transaction->name }}" />
                                </div>
                                @if($errors->has('name'))
                                <div class="text-red-500 text-sm mt-1">
                                    {{ $errors->first('name') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-1/3 mb-2">
                                <h1 class="mb-2 font-bold">Tanggal Mulai</h1>
                                <input type="date" id="start_date" name="start_date" placeholder="Add Date" class="p-2 w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-xl border-2 border-[#000000]" value="{{ $transaction->start_date }}">
                                @if($errors->has('start_date'))
                                <div class="text-red-500 text-sm mt-1">
                                    {{ $errors->first('start_date') }}
                                </div>
                                @endif
                            </div>
                            <div class="w-1/3 pl-2 mb-2">
                                <h1 class="mb-2 font-bold">Tanggal Selesai</h1>
                                <input type="date" id="end_date" name="end_date" placeholder="Add Date" class="p-2 w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-xl border-2 border-[#000000]" value="{{ $transaction->end_date }}">
                                @if($errors->has('end_date'))
                                <div class="text-red-500 text-sm mt-1">
                                    {{ $errors->first('end_date') }}
                                </div>
                                @endif
                            </div>
                            <div class="w-1/3 pl-2 mb-2">
                                <h1 class="mb-2 font-bold">Tanggal Check Out</h1>
                                <input type="date" id="check_out_date" name="check_out_date" placeholder="Add Date" class="p-2 w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-xl border-2 border-[#000000]" value="{{ $transaction->check_out_date }}">
                                @if($errors->has('check_out_date'))
                                <div class="text-red-500 text-sm mt-1">
                                    {{ $errors->first('check_out_date') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-full pl-2 mb-2">
                                <h1 class="mb-2 font-bold">Note</h1>
                                <div class="py-2 px-4 mb-4 rounded-lg rounded-t-lg border border-gray-200">
                                    <label for="notes" class="sr-only">Your notes</label>
                                    <textarea id="notes" name="notes" rows="6" class="bg-transparent px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none" placeholder="Tambah Kasur (1), Tambah Bantal (1)....." ><?php echo $transaction->notes; ?></textarea>
                                </div>
                                @if($errors->has('notes'))
                                <div class="text-red-500 text-sm mt-1">
                                    {{ $errors->first('notes') }}
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