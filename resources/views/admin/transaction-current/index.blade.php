@extends('layouts.app')
@section('content')
<div class="w-full flex flex-col h-screen overflow-y-hidden">
    <!-- Mobile Header & Nav -->
    @include('layouts.navbar-admin-mobile')

    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="text-3xl text-black pb-6">Transaksi Baru</h1>

            <div class="w-full mt-5">
                <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-list mr-3"></i> Latest Reports
                </p>
                <div class="bg-white overflow-auto">
                    <table class="w-full table-auto text-sm text-left rtl:text-right text-gray-500 overflow:hidden">
                        <thead class="text-xs uppercase border-b border-gray-700" style="color: #070A52;">
                            <tr>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Nama Kepala
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Tipe Ruangan
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Nomor Ruangan
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Tanggal Mulai
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Tanggal Selesai
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Tanggal Checkout
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
                            @foreach ($currentTransactions as $transaction)
                            <tr>
                                <th scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                    {{ $count++ }}
                                </th>
                                <th scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                    {{ $transaction->name }}
                                </th>
                                <td scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                    {{ $transaction->room->type->name }}
                                </td>
                                <td scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                    {{ $transaction->room->room_number }}
                                </td>
                                <td scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                    {{ \Carbon\Carbon::parse($transaction->start_date)->locale('id')->isoFormat('D MMMM YYYY') }}
                                </td>
                                <td scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                    {{ \Carbon\Carbon::parse($transaction->end_date)->locale('id')->isoFormat('D MMMM YYYY') }}
                                </td>
                                <td scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                    {{ $transaction->check_out_date ? \Carbon\Carbon::parse($transaction->check_out_date)->locale('id')->isoFormat('D MMMM YYYY') : 'Belum Checkout' }}
                                </td>
                                <td scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                    <div class="flex">
                                        <a href="{{ route('transaction.edit', ['id' => $transaction->id]) }}">
                                            <button class="rounded-md bg-rose-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-red-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-rose-500">
                                                Edit
                                            </button>
                                        </a>
                                        <form action="{{ route('transaction.destroy.current', ['id' => $transaction->id]) }} " method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="rounded-md bg-rose-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-red-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-rose-500">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
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