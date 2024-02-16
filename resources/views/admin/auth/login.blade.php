@extends('layouts.app')
@section('content')
<section class="bg-[#12182E]">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <div class="grid place-items-center">
                    <img class="h-12 mb-5 mr-2" src="{{ asset('img/VPS_Logo_Dark.png') }}" alt="logo">
                </div>
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center">
                    Login Admin
                </h1>
                <form class="space-y-4 md:space-y-6" action="{{ route('login')}}" method="POST">
                    @csrf
                    @if($errors->has('username'))
                        <div class="text-center text-red-500 text-sm mt-1">
                            {{ $errors->first('username') }}
                        </div>
                    @endif
                    <div>
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                        <input type="username" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#3E9CC0] focus:border-[#3E9CC0] block w-full p-2.5" placeholder="Username" required>
                        
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                        <input type="password" name="password" id="password" placeholder="password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#3E9CC0] focus:border-[#3E9CC0] block w-full p-2.5" required>
                    </div>
                    <button type="submit" class="w-full text-white bg-[#3E9CC0] hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Log
                        In</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection