@extends('layouts.app')
<link rel="stylesheet" href="css/admin/index.css">
@section('content')
<div class="container px-4 mx-auto">
    <div class="p-6 m-20 bg-white rounded shadow">
        {!! $roomAvailableTodayChart->container() !!}
    </div>
    <div class="p-6 m-20 bg-white rounded shadow">
        {!! $roomAvailablePerTypeChart->container() !!}
    </div>
    <div class="p-6 m-20 bg-white rounded shadow">
        {!! $transactionCountPerMonthChart->container() !!}
    </div>
</div>

<script src="{{ $roomAvailableTodayChart->cdn() }}"></script>

{{ $roomAvailableTodayChart->script() }}
{{ $roomAvailablePerTypeChart->script() }}
{{ $transactionCountPerMonthChart->script() }}
@endsection