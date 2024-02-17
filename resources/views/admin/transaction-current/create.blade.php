@extends('layouts.app')
@section('content')
<div class="w-full flex flex-col h-screen overflow-y-hidden">
    <!-- Mobile Header & Nav -->
    @include('layouts.navbar-admin-mobile')

    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <div class="w-full mt-12 bg-white rounded-2xl p-5">
                <div class="bg-white overflow-auto mt-5">
                    <form action="{{ route('transaction.store') }}" method="POST">
                        @csrf
                        <div class="flex items-center justify-between mb-5">
                            <h1 class="text-2xl font-bold" style="color: #070A52;">Tambah Transaksi</h1>
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
                                    <h1 class="mb-2 font-bold">Nama Kepala</h1>
                                    <input type="text" id="name" name="name" class="block px-2.5 py-2.5 w-full text-sm text-gray-900 bg-transparent rounded-xl border-1 border-2 border-black appearance-none focus:outline-none focus:ring-0 focus:border-black peer bg-white" placeholder="Nama Kepala" />
                                </div>
                                @if($errors->has('name'))
                                <div class="text-red-500 text-sm mt-1">
                                    {{ $errors->first('name') }}
                                </div>
                                @endif
                            </div>
                            <div class="w-1/3 pl-2 mb-2">
                                <h1 class="mb-2 font-bold">Tanggal Mulai</h1>
                                <input type="date" id="start_date" name="start_date" placeholder="Add Date" class="p-2 w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-xl border-2 border-[#000000]">
                                @if($errors->has('start_date'))
                                <div class="text-red-500 text-sm mt-1">
                                    {{ $errors->first('start_date') }}
                                </div>
                                @endif
                            </div>
                            <div class="w-1/3 pl-2 mb-2">
                                <h1 class="mb-2 font-bold">Tanggal Selesai</h1>
                                <input type="date" id="end_date" name="end_date" placeholder="Add Date" class="p-2 w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-xl border-2 border-[#000000]">
                                @if($errors->has('end_date'))
                                <div class="text-red-500 text-sm mt-1">
                                    {{ $errors->first('end_date') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-full pl-2 mb-2">
                                <h1 class="mb-2 font-bold">Note</h1>
                                <div class="py-2 px-4 mb-4 rounded-lg rounded-t-lg border border-gray-200">
                                    <label for="notes" class="sr-only">Your notes</label>
                                    <textarea id="notes" name="notes" rows="6" class="bg-transparent px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none" placeholder="Tambah Kasur (1), Tambah Bantal (1)....."></textarea>
                                </div>
                                @if($errors->has('notes'))
                                <div class="text-red-500 text-sm mt-1">
                                    {{ $errors->first('notes') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <h1 class="mb-2 font-bold">Pilih Nomor Ruangan</h1>
                        <div class="flex grid grid-cols-4 max-md:grid-cols-2">
                            @foreach ($rooms as $room)
                            <div class="mb-2" id="checkbox{{$room->id}}">
                                <div class="relative mb-2">
                                    <div class="inline-flex items-center">
                                        <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="checkbox">
                                            <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-[#24305A] checked:before:bg-gray-900 hover:before:opacity-10" id="room{{$room->id}}" name="room{{$room->id}}" />
                                            <span class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </label>
                                        <h1 class="font-bold">{{ $room->room_number }} ({{ $room->type->name }})</h1>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>

<script>
    // Function to show/hide rooms based on availability
    function updateRoomAvailability() {
        const startDate = document.getElementById('start_date').value;
        const endDate = document.getElementById('end_date').value;

        console.log('start' + startDate);
        console.log('end' + endDate);

        var availabilityUrl = "{{ route('type.available') }}";

        var formData = {
            _token: $('meta[name="csrf-token"]').attr('content'),
            start_date: startDate,
            end_date: endDate
        };

        $.ajax({
            type: 'POST',
            url: availabilityUrl,
            data: formData,
            success: function(response) {
                if (response && response.availablerooms) {
                    console.log(response);
                    // Get the available room IDs
                    const availableRoomIds = response.availablerooms.map(room => room.id);

                    // console.log(availableRoomIds);
                    // Hide rooms not in the availableRooms array
                    $('[id^="checkbox"]').each(function() {
                        const roomId = parseInt($(this).attr('id').replace('checkbox', ''));
                        if (!availableRoomIds.includes(roomId)) {
                            $(this).hide();
                        } else {
                            $(this).show();
                        }
                    });
                }
            },
            error: function(error) {
                console.log(error);
                $('[id^="checkbox"]').hide();
            }
        });
    }

    // Add event listeners to date fields
    document.getElementById('start_date').addEventListener('change', updateRoomAvailability);
    document.getElementById('end_date').addEventListener('change', updateRoomAvailability);

    // Initial call to update room availability when the page loads
    updateRoomAvailability();
</script>
@endsection