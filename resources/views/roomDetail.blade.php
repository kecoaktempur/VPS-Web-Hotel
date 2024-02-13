<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="bg-white p-2 lg:pt-8 px-4">
        <!-- picture -->
        <div class="mx-auto">
            <!-- big grid 1 -->
            <div class="flex flex-wrap lg:space-x-4 justify-center lg:col-2">
                <!-- Start left -->
                <div class="flex-shrink max-w-full w-full lg:w-3/5 pb-1">
                    <div class="relative hover-img max-h-64 lg:max-h-96 overflow-hidden lg:rounded-md">
                        <a href="#">
                            <img class="max-w-full w-full object-center mx-auto h-auto hover:scale-110 transition-all duration-300"
                                src="\public\img\standard (6).jpg" alt="Image description">
                        </a>
                    </div>
                </div>

                <!-- Start right (mobile layout: pictures in a single row) -->
                <div class="flex lg:flex-col lg:space-y-6 max-w-full w-full lg:w-1/5">
                    <div class="flex-shrink w-1/3 max-w-full lg:w-full">
                        <div class="relative h-full max-h-24 lg:max-h-28 overflow-hidden lg:rounded-md">
                            <a href="#">
                                <img class="object-cover w-full h-full mx-auto" src="\public\img\standard (2).jpg" alt="Image description">
                            </a>
                        </div>
                    </div>
                    <div class="flex-shrink w-1/3 max-w-full lg:w-full">
                        <div class="relative h-full max-h-24 lg:max-h-28 overflow-hidden lg:rounded-md">
                            <a href="#">
                                <img class="object-cover w-full h-full mx-auto" src="\public\img\standard (3).jpg" alt="Image description">
                            </a>
                        </div>
                    </div>
                    <div class="flex-shrink w-1/3 max-w-full lg:w-full">
                        <div class="relative h-full max-h-24 lg:max-h-28 overflow-hidden lg:rounded-md">
                            <a href="#">
                                <img class="object-cover w-full h-full mx-auto" src="\public\img\standard (4).jpg" alt="Image description">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- picture -->

        <div class="py-4 lg:flex mx-auto justify-center lg:w-4/5">
            <!-- main info start -->
            <div>
                <h1 class="text-gray-800 text-3xl lg:text-6xl font-bold">
                    Standard Room
                </h1>
                <p class="text-gray-700 text-wrap text-sm py-4 lg:w-2/3">
                    untuk 2 orang, 2 single bed ukuran 90 × 200, kebersihan kami jaga dengan mengganti sprei setiap hari,membersihkan kamar setiap hari. Tersedia kopi, gula, teh, air mineral, peralatan mandi yang lengkap disetiap kamarnya
                </p>
                <div class="border lg:w-2/3"></div>
                <h2 class="text-gray-800 text-2xl lg:text-5xl font-bold pt-2 lg:pt-4">
                    Fasilitas
                </h2>
                <!-- icon fasilitas start -->
                <div class="flex flex-wrap py-4 lg:gap-4 gap-2 lg:w-2/3">
                    <div class="w-[90px] h-[90px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                        <div class="p-2">
                            <img class="mx-auto" src="bed.svg" alt="icon">
                            <p class="pt-2 text-center text-xs ">2 single bed</p>
                        </div>
                    </div>
                    <div class="w-[90px] h-[90px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                        <div class="p-2">
                            <img class="mx-auto" src="bed.svg" alt="icon">
                            <p class="pt-2 text-center text-xs">ac</p>
                        </div>
                    </div>
                    <div class="w-[90px] h-[90px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                        <div class="p-2">
                            <img class="mx-auto" src="bed.svg" alt="icon">
                            <p class="pt-2 text-center text-xs">tv</p>
                        </div>
                    </div>
                    <div class="w-[90px] h-[90px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                        <div class="p-2">
                            <img class="mx-auto" src="bed.svg" alt="icon">
                            <p class="pt-2 text-center text-xs">coffe/tea</p>
                        </div>
                    </div>
                    <div class="w-[90px] h-[90px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                        <div class="p-2">
                            <img class="mx-auto" src="bed.svg" alt="icon">
                            <p class="pt-2 text-center text-xs">dispenser</p>
                        </div>
                    </div>
                    <div class="w-[90px] h-[90px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                        <div class="p-2">
                            <img class="mx-auto" src="bed.svg" alt="icon">
                            <p class="pt-2 text-center text-xs">refrigerator</p>
                        </div>
                    </div>
                    <div class="w-[90px] h-[90px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                        <div class="p-2">
                            <img class="mx-auto" src="bed.svg" alt="icon">
                            <p class="pt-2 text-center text-xs">meja makan</p>
                        </div>
                    </div>
                </div>
                <div class="border lg:w-2/3"></div>
                <p class="text-gray-800 pt-2 font-bold lg:text-xl">Kamar Mandi</p>
                <div class="flex flex-wrap py-4 lg:gap-4 gap-2 lg:w-2/3">
                    <div class="w-[90px] h-[90px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                        <div class="p-2">
                            <img class="mx-auto" src="bed.svg" alt="icon">
                            <p class="pt-2 text-center text-xs">shower</p>
                        </div>
                    </div>
                    <div class="w-[90px] h-[90px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                        <div class="p-2">
                            <img class="mx-auto" src="bed.svg" alt="icon">
                            <p class="pt-2 text-center text-xs">water heater</p>
                        </div>
                    </div>
                    <div class="w-[90px] h-[90px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                        <div class="p-2">
                            <img class="mx-auto" src="bed.svg" alt="icon">
                            <p class="pt-2 text-center text-xs">closet</p>
                        </div>
                    </div>
                </div>
                <div class="border lg:w-2/3"></div>
                <p class="text-gray-800 pt-2 font-bold lg:text-xl">Opsional</p>
                <div class="flex flex-wrap py-4 lg:gap-4 gap-2 lg:w-2/3">
                    <div class="w-[90px] h-[90px] rounded-[8px] bg-[#EFF0F2] flex items-center justify-center">
                        <div class="p-2">
                            <img class="mx-auto" src="bed.svg" alt="icon">
                            <p class="pt-2 text-center text-xs">shower</p>
                        </div>
                    </div>
                </div>
                
                <h2 class="text-gray-800 text-2xl lg:text-5xl font-bold">
                    Ukuran Kamar
                </h2>
                <div class="py-4">
                    <div class="w-max h-[90px] rounded-[8px] flex items-center justify-center">
                        <div class="p-2 flex items-center">
                            <img class="mx-auto" src="bed.svg" alt="icon">
                            <p class="text-center pl-3">15 m</p>
                        </div>
                    </div>
                    <div class="w-max h-[90px] rounded-[8px] flex items-center justify-center">
                        <div class="p-2 flex items-center">
                            <img class="mx-auto" src="bed.svg" alt="icon">
                            <p class="text-center pl-3">4 orang</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:align-center">
                <button class="rounded-xl bg-sky-500 p-2 lg:p-4 text-sm lg:text-lg text-white font-bold min-w-max">
                    Rp.250.000 / malam
                </button>
            </div>
        </div>
        <div class="lg:flex mx-auto justify-left lg:w-4/5">
            <h2 class="text-gray-500 text-xl lg:text-3xl font-bold">
                Kamar Lainnya
            </h2>
        </div>
    </div>
</body>

</html>