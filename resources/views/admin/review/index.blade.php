@extends('admin.base-admin')
@section('admin-content')
<div class="w-full flex flex-col h-screen overflow-y-hidden">
    <!-- Mobile Header & Nav -->
    @include('admin.layout.navbar_mobile')

    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="text-3xl text-black pb-6">Review</h1>

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
                                    1
                                </th>
                                <th scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                    yanto
                                </th>
                                <td class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                    kimak
                                </td>
                                <form action="...." method="POST">
                                    <input type="hidden" id="id" name="id" value="..." />
                                    <th class="px-6 py-3 font-medium text-gray-700 whitespace-nowrap">
                                        <button type="submit" class="rounded-md bg-rose-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-red-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-rose-500">
                                            Delete
                                        </button>
                                    </th>
                                </form>
                            </tr>
                            <tr class="bg-gray-100">
                                <th scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                    1
                                </th>
                                <th scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                    yanto
                                </th>
                                <td class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                    kimak
                                </td>
                                <form action="...." method="POST">
                                    <input type="hidden" id="id" name="id" value="..." />
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
                        ..........
                    </div>
                </div>
            </div>
    </div>
    </main>
</div>

<script src="{{ asset('js/navbar_admin.js') }}"></script>
@endsection