@extends('layouts.app')
@section('content')
<div class="container mx-auto pt-52 pb-10 w-3/4">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach ($photos as $photo)
        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/'.$photo->name) }}" alt="">
        </div>
        @endforeach
    </div>
</div>

<script src="{{ asset('js/home.js') }}"></script>
@include('layouts.footer')
@endsection