@extends('layouts.app')
@section('content')
<div class="w-full flex flex-col h-screen overflow-y-hidden">
    <!-- Mobile Header & Nav -->
    @include('layouts.navbar-admin-mobile')

    <div class="w-full overflow-x-hidden border-t flex flex-col max-sm:pt-20">
        <main class="w-full flex-grow p-6">
            <div class="container flex justify-center mx-auto w-4/5 mt-10">
                <h1 class="text-[#12182E] text-4xl md:text-5xl font-bold font-[Aleo]">
                    Detail Standard Room
                </h1>
            </div>

            <div class="container flex mx-auto w-4/5 flex-col">
                <h1 class="text-[#12182E] text-4xl md:text-5xl font-bold font-[Aleo] max-md:my-auto">
                    Fasilitas
                </h1>

                <div class="flex flex-wrap lg:flex-nowrap py-4 lg:gap-4 gap-2">
                    <div class="w-[120px] h-[120px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                        <div class="p-2">
                            <svg class="w-9 h-9 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4">
                                    <path d="M8 12a3 3 0 0 1 3-3h26a3 3 0 0 1 3 3v11H8zM6 35v4m36-4v4" />
                                    <path d="M29 18H19a3 3 0 0 0-3 3v2h16v-2a3 3 0 0 0-3-3M4 26a3 3 0 0 1 3-3h34a3 3 0 0 1 3 3v9H4z" />
                                </g>
                            </svg>
                            <p class="text-center mt-3">1 Single Bed</p>
                        </div>
                    </div>
                    <div class="w-[120px] h-[120px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                        <div class="p-2">
                            <svg class="w-9 h-9 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M2 11.975q0-.825.588-1.4T4 10V7q0-.825.588-1.412T6 5h12q.825 0 1.413.588T20 7v3q.825 0 1.413.588T22 12v3.65q0 .575-.387.963T20.65 17l-.55 1.675q-.05.15-.175.238T19.65 19h-.3q-.15 0-.275-.088t-.175-.237L18.35 17H5.65l-.55 1.675q-.05.15-.175.238T4.65 19h-.3q-.15 0-.275-.088t-.175-.237L3.35 17q-.575 0-.962-.387T2 15.65zM13 10h5V7h-5zm-7 0h5V7H6zm-2 5h16v-3H4zm16 0H4z" />
                            </svg>
                            <p class="text-center mt-3">1 King Bed</p>
                        </div>
                    </div>
                    <div class="w-[120px] h-[120px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                        <div class="p-2">
                            <svg class="w-9 h-9 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M21 10.78V8c0-1.65-1.35-3-3-3h-4c-.77 0-1.47.3-2 .78c-.53-.48-1.23-.78-2-.78H6C4.35 5 3 6.35 3 8v2.78c-.61.55-1 1.34-1 2.22v5c0 .55.45 1 1 1s1-.45 1-1v-1h16v1c0 .55.45 1 1 1s1-.45 1-1v-5c0-.88-.39-1.67-1-2.22M14 7h4c.55 0 1 .45 1 1v2h-6V8c0-.55.45-1 1-1M5 8c0-.55.45-1 1-1h4c.55 0 1 .45 1 1v2H5zm-1 7v-2c0-.55.45-1 1-1h14c.55 0 1 .45 1 1v2z" />
                            </svg>
                            <p class="text-center mt-3">1 Queen Bed</p>
                        </div>
                    </div>
                    <div class="w-[120px] h-[120px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                        <div class="p-2">
                            <svg class="w-9 h-9 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12.5.5h-11a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1" />
                                    <path d="M11 7.5v-2a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v2m-.5 5h.1A1.4 1.4 0 0 0 4 11.1V10m7.5 2.5h-.1a1.4 1.4 0 0 1-1.4-1.4V10m-3 3.5V10" />
                                </g>
                            </svg>
                            <p class="text-center mt-3">AC</p>
                        </div>
                    </div>
                    <div class="w-[120px] h-[120px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                        <div class="p-2">
                            <svg class="w-9 h-9 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16">
                                    <path d="M 191.99999,208 H 64 C 46.272,208 32,193.728 32,176 V 96 C 32,78.272 46.272,64 64,64 h 128 c 17.728,0 32,14.272 32,32 v 80 c 0,17.728 -14.272,32 -32,32" />
                                    <path d="m 96,240 h 64" />
                                    <path d="M 128,64 176,16" />
                                    <path d="M 128,64 80,16" />
                                </g>
                            </svg>
                            <p class="text-center mt-3">TV</p>
                        </div>
                    </div>
                    <div class="w-[120px] h-[120px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                        <div class="p-2">
                            <svg class="w-9 h-9 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2048 2048">
                                <path fill="currentColor" d="M576 544q-26 0-45-19t-19-45q0-23-14-41t-33-30q-35-24-71-48t-68-52t-50-65t-20-84q0-26 19-45t45-19q26 0 45 19t19 45q0 23 14 41t33 30q34 24 71 48t68 52t50 65t20 84q0 26-19 45t-45 19m448 0q-26 0-45-19t-19-45q0-23-14-41t-33-30q-35-24-71-48t-68-52t-50-65t-20-84q0-26 19-45t45-19q26 0 45 19t19 45q0 23 14 41t33 30q34 24 71 48t68 52t50 65t20 84q0 26-19 45t-45 19m448 0q-26 0-45-19t-19-45q0-23-14-41t-33-30q-35-24-71-48t-68-52t-50-65t-20-84q0-26 19-45t45-19q26 0 45 19t19 45q0 23 14 41t33 30q34 24 71 48t68 52t50 65t20 84q0 26-19 45t-45 19m133 736q-33 75-82 138t-110 118h443v128q0 45-14 90t-40 82t-65 60t-89 24H208q-50 0-88-23t-65-60t-41-82t-14-91v-128h379q-118-103-184-239t-67-294V640h1605q66 0 123 25t100 69t67 102t25 124q0 65-24 123t-67 102t-100 69t-124 26zm59-512q0 42 1 84t1 85q0 55-3 109t-16 106h86q39 0 73-15t60-42t39-61t15-74q0-39-14-74t-40-61t-59-41t-74-16zM256 1003q0 88 26 169t75 150t114 123t145 91h560q79-36 145-90t114-124t74-150t27-169V768H256zm1392 789q21 0 36-14t25-33t14-42t5-39H128q0 17 4 39t15 41t25 34t36 14z" />
                            </svg>
                            <p class="text-center mt-3">Coffe/Tea</p>
                        </div>
                    </div>
                    <div class="w-[120px] h-[120px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                        <div class="p-2">
                            <svg class="w-9 h-9 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M18.08 7a1 1 0 0 0-1.08.92l-.35 4.55a2.67 2.67 0 0 1-1.2-.77a1 1 0 0 0-1.5 0a2.65 2.65 0 0 1-3.9 0a1 1 0 0 0-1.5 0a2.7 2.7 0 0 1-1.2.77L7 7.92A1 1 0 0 0 5.92 7A1 1 0 0 0 5 8.08l.86 11.15a3 3 0 0 0 3 2.77h6.3a3 3 0 0 0 3-2.77L19 8.08A1 1 0 0 0 18.08 7m-1.94 12.08a1 1 0 0 1-1 .92H8.85a1 1 0 0 1-1-.92L7.5 14.5a4.77 4.77 0 0 0 1.8-.79a4.66 4.66 0 0 0 5.4 0a4.77 4.77 0 0 0 1.8.79ZM12 10a3.26 3.26 0 0 0 3.25-3.25c0-2.75-2.58-4.51-2.69-4.58a1 1 0 0 0-1.12 0c-.11.08-2.69 1.83-2.69 4.58A3.26 3.26 0 0 0 12 10m0-5.7a3.61 3.61 0 0 1 1.25 2.45a1.25 1.25 0 0 1-2.5 0A3.66 3.66 0 0 1 12 4.3" />
                            </svg>
                            <p class="text-center mt-3">Dispenser</p>
                        </div>
                    </div>
                    <div class="w-[120px] h-[120px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                        <div class="p-2">
                            <svg class="w-9 h-9 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M10.5.5h-7a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1v-10a1 1 0 0 0-1-1M2.5 6h9m-7-3v.5m-.5 9v1m6-1v1" />
                            </svg>
                            <p class="text-center mt-3">Kulkas</p>
                        </div>
                    </div>
                    <div class="w-[120px] h-[120px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                        <div class="p-2">
                            <svg class="w-9 h-9 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M4.325 9h15.35l-.85-3H5.2zM16.8 11H7.225l-.275 2h10.1zM4.15 18.875L5.225 11H3q-.5 0-.787-.4t-.163-.875l1.425-5q.1-.325.35-.525t.6-.2h15.15q.35 0 .6.2t.35.525l1.425 5q.125.475-.162.875T21 11h-2.2l1.05 7.875q.05.45-.238.788t-.737.337q-.375 0-.663-.238t-.337-.612l-.55-4.15H6.675l-.55 4.15q-.05.375-.337.613T5.125 20q-.45 0-.737-.337t-.238-.788" />
                            </svg>
                            <p class="text-center mt-3">Meja Makan</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container flex mx-auto w-4/5 flex-col">
                <h1 class="text-[#12182E] text-4xl md:text-5xl font-bold font-[Aleo] max-md:my-auto">
                    Kamar Mandi
                </h1>

                <div class="flex flex-wrap lg:flex-nowrap py-4 lg:gap-4 gap-2">
                    <div class="w-[120px] h-[120px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                        <div class="p-2">
                            <svg class="w-9 h-9 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path fill="currentColor" d="m15.605 4.856l2.124-2.125a2.497 2.497 0 1 1 3.531 3.531l-2.122 2.122a8.005 8.005 0 0 1-1.202 8.98a2.496 2.496 0 0 1-4.18 2.401l-9.49-9.49a2.497 2.497 0 0 1 2.35-4.192a8.005 8.005 0 0 1 8.989-1.227m2.71 2.23l1.884-1.884a.997.997 0 0 0-1.41-1.41l-1.885 1.886a8.076 8.076 0 0 1 1.41 1.409m-12.989.72a.997.997 0 0 0 0 1.41l9.49 9.489a.997.997 0 1 0 1.41-1.41l-9.49-9.49a.997.997 0 0 0-1.41 0M7.78 17.28a.75.75 0 1 0-1.06-1.06l-2 2a.75.75 0 1 0 1.06 1.06zm2.5 1.44a.75.75 0 0 1 0 1.06l-2 2a.75.75 0 0 1-1.06-1.06l2-2a.75.75 0 0 1 1.06 0m-5-3.94a.75.75 0 1 0-1.06-1.06l-2 2a.75.75 0 1 0 1.06 1.06zm11.816 1.256a6.501 6.501 0 0 0-9.132-9.132z" />
                            </svg>
                            <p class="text-center mt-3">Shower</p>
                        </div>
                    </div>
                    <div class="w-[120px] h-[120px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                        <div class="p-2">
                            <svg class="w-9 h-9 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M9.3 10.775q0 .475.163.925t.462.825q.05-.3.2-.587t.375-.488L12 10l1.475 1.475q.225.2.375.475t.2.575q.275-.375.487-.8t.213-.9q0-.475-.15-.913t-.45-.812q-.275.125-.562.2T13 9.375q-.75 0-1.375-.425t-.95-1.125q-.3.3-.55.637t-.437.713Q9.5 9.55 9.4 9.95t-.1.825M12 12.1l-.425.425q-.1.1-.137.2t-.038.225q0 .25.175.4t.425.15q.25 0 .425-.15t.175-.4q0-.125-.037-.225t-.138-.2zM12 5v1.9q0 .425.3.713t.725.287q.275 0 .5-.162t.4-.388l.175-.25q1.025.575 1.588 1.563t.562 2.162q0 1.75-1.25 2.963T12 15q-1.75 0-2.975-1.225T7.8 10.8q0-1.925 1.225-3.425T12 5M6 22q-.825 0-1.412-.587T4 20V6q0-1.65 1.175-2.825T8 2h8q1.65 0 2.825 1.175T20 6v14q0 .825-.587 1.413T18 22zm0-4v2h12v-2q-.75 0-1.2.5T15 19q-1.35 0-1.763-.5T12 18q-.825 0-1.237.5T9 19q-1.35 0-1.763-.5T6 18m3-1q.825 0 1.238-.5T12 16q1.35 0 1.8.5t1.2.5q.75 0 1.2-.5T18 16V6q0-.825-.587-1.412T16 4H8q-.825 0-1.412.588T6 6v10q1.35 0 1.763.5T9 17" />
                            </svg>
                            <p class="text-center mt-3">Water Heater</p>
                        </div>
                    </div>
                    <div class="w-[120px] h-[120px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                        <div class="p-2">
                            <svg class="w-9 h-9 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path fill="currentColor" d="M21 1a2 2 0 0 0-2 2v9H3.5A2.5 2.5 0 0 0 1 14.5v2a1.5 1.5 0 0 0 1.414 1.498a11 11 0 0 0 3.396 5.327c.549.474 1.145.896 1.782 1.256L6.097 27.57c-.093.186-.227.453-.328.733c-.1.277-.21.678-.158 1.11c.06.5.332.959.832 1.25c.44.254.982.337 1.557.337h14c.825 0 1.567-.402 2.082-.918c.515-.515.918-1.257.918-2.082v-8c0-.268.155-.627.445-1.024A4 4 0 0 0 29 15V3a2 2 0 0 0-2-2zM9.416 25.403A10.99 10.99 0 0 0 13 26c4.22 0 8.114-2.081 10-5.582V28c0 .175-.098.433-.332.668c-.235.235-.493.332-.668.332H8c-.146 0-.261-.008-.349-.02c.058-.159.142-.33.243-.533zM20.5 17c.334.445.814.775 1.368.92C20.811 21.587 17.223 24 13 24c-2.29 0-4.38-.855-5.968-2.263A9.002 9.002 0 0 1 4.222 17zm-.45-1H3v-1.5a.5.5 0 0 1 .5-.5H20v1.5c0 .171.017.338.05.5M27 15a2 2 0 0 1-2 2h-2.5a1.5 1.5 0 0 1-1.5-1.5V3h6z" />
                            </svg>
                            <p class="text-center mt-3">Closet</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container flex mx-auto w-4/5 flex-col">
                <div class="w-full mt-5">
                    <h1 class="text-3xl text-black pb-6">Transaksi</h1>
                    <div class="bg-white overflow-auto">
                        <table class="w-full table-auto text-sm text-left rtl:text-right text-gray-500 overflow:hidden">
                            <thead class="text-xs uppercase border-b border-gray-700" style="color: #070A52;">
                                <tr>
                                    <th scope="col" class="px-6 py-3 font-extrabold">
                                        No
                                    </th>
                                    <th scope="col" class="px-6 py-3 font-extrabold">
                                        Nama
                                    </th>
                                    <th scope="col" class="px-6 py-3 font-extrabold">
                                        Komentar
                                    </th>
                                    <th scope="col" class="px-6 py-3 font-extrabold">
                                        Delete
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <th scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                        {{ $count++ }}
                                    </th>
                                    <th scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                        {{ $doctor->firstname }} {{ $doctor->lastname }}
                                    </th>
                                    <td class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                        {{ $doctor->email }}
                                    </td>
                                    <form action="{{ route('question.destroy') }}" method="POST">
                                        <input type="hidden" id="id" name="id" value="{{ $question->id }}" />
                                        <th class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            <button type="submit" class="rounded-md bg-rose-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-red-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-rose-500">
                                                Delete
                                            </button>
                                        </th>
                                    </form>
                                </tr>
                                <tr class="bg-gray-100">
                                    <th scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                        {{ $count++ }}
                                    </th>
                                    <th scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                        {{ $doctor->firstname }} {{ $doctor->lastname }}
                                    </th>
                                    <td class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                        {{ $doctor->email }}
                                    </td>
                                    <form action="{{ route('question.destroy') }}" method="POST">
                                        <input type="hidden" id="id" name="id" value="{{ $question->id }}" />
                                        <th class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                            <button type="submit" class="rounded-md bg-rose-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-red-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-rose-500">
                                                Delete
                                            </button>
                                        </th>
                                    </form>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex flex-col-reverse justify-end items-end bottom-0 right-0 mt-4 mb-4 mr-4">
                        <div class="inline-flex rounded-md">
                            {{ $doctors->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<script src="{{ asset('js/quantity.js') }}"></script>
@endsection