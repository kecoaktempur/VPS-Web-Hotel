@extends('layouts.app')
@section('content')
<div class="w-full flex flex-col h-screen overflow-y-hidden">
    <!-- Mobile Header & Nav -->
    @include('layouts.navbar-admin-mobile')

    <div class="w-full overflow-x-hidden border-t flex flex-col max-sm:pt-32 mb-10">
        <main class="w-full flex-grow p-6 max-sm:p-0">
            <h1 class="text-3xl text-[#24305A] font-bold pb-6">Dashboard</h1>
            <div class="flex flex-wrap mt-6">
                <div class="w-full lg:w-full pr-0 lg:pr-2">
                    <p class="font-bold text-[#24305A] text-xl pb-3 flex items-center underline">
                        <i class="fas fa-plus mr-3"></i> Jumlah Transaksi Perbulan
                    </p>
                    <div class="m-5 p-2 bg-white rounded shadow max-sm:p-0 max-sm:m-0">
                        {!! $transactionCountPerMonthChart->container() !!}
                    </div>
                </div>
                <div class="w-full lg:w-1/2 pr-0 lg:pr-2">
                    <p class="font-bold text-[#24305A] text-xl pb-3 flex items-center underline">
                        <i class="fas fa-plus mr-3"></i> Ketersediaan Ruagan Hari ini
                    </p>
                    <div class="m-5 p-2 bg-white rounded shadow max-sm:p-0 max-sm:m-0">
                        {!! $roomAvailableTodayChart->container() !!}
                    </div>

                </div>
                <div class="w-full lg:w-1/2 pl-0 lg:pl-2 mt-12 lg:mt-0">
                    <p class="font-bold text-[#24305A] text-xl pb-3 flex items-center underline">
                        <i class="fas fa-check mr-3"></i> Ketersediaan Ruagan Setiap Kamar
                    </p>
                    <div class="m-5 p-2 bg-white rounded shadow max-sm:p-0 max-sm:m-0">
                        {!! $roomAvailablePerTypeChart->container() !!}
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script src="{{ $roomAvailableTodayChart->cdn() }}"></script>

{{ $roomAvailableTodayChart->script() }}
{{ $roomAvailablePerTypeChart->script() }}
{{ $transactionCountPerMonthChart->script() }}
@endsection