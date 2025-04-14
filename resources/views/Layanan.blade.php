@extends('layouts.main')
@section('title', 'Layanan')
@section('content')
    {{-- <div class="heroSection h-screen p-10 md:p-20 relative  flex items-center justify-center overflow-hidden"> --}}
    {{-- <!-- Background Glow Effects -->
        <div class="absolute w-[500px] h-[500px] bg-purple-500 opacity-40 blur-[150px] rounded-full top-1/4 left-1/4"></div>
        <div class="absolute w-[500px] h-[500px] bg-purple-900 opacity-40 blur-[150px] rounded-full top-2/4 right-4"></div>
        <div class="absolute w-[600px] h-[600px] bg-indigo-500 opacity-30 blur-[180px] rounded-full top-1/3 right-12"></div>

        <!-- Konten -->
        <div class="relative flex flex-col md:flex-row items-center justify-between w-full max-w-6xl mx-auto z-10">
            <!-- Teks -->
            <div class="text-white w-full md:w-1/2 space-y-6">
                <h1 class="text-4xl md:text-5xl font-black text-white leading-tight">
                    Print? Jilid? Burning CD? Fotocopy? <br> <span class="text-primary-200">Akela Printis aja 🚀</span>
                </h1>
                <p class="text-lg opacity-80">Gausah pusing mikirin cetak! Di Akela Printis, semuanya simpel & cepat.
                    Transaksi mudah cukup dari rumah.</p>
                <div class="flex flex-wrap gap-3">
                    <a href="#produk"
                        class="border border-white hover:bg-white transition-all p-3 px-5 hover:text-primary-600 rounded-md text-center flex items-center gap-2">
                        <i class="ph-fill ph-list-plus text-lg"></i> Lihat produk
                    </a>
                    <a href="https://wa.me/6285342677431?text=Halo Kak, Mau tanya-tanya dulu"
                        class="text-primary-600 bg-white hover:bg-primary-100 font-medium p-3 px-5 rounded-md flex items-center gap-2">
                        <i class="ph-fill ph-whatsapp-logo text-lg"></i> Tanya Minka
                    </a>
                </div>
            </div>
        </div> --}}





    {{-- </div> --}}


    <div
        class="relative flex layanan items-start md:items-center justify-center h-screen bg-gray-100 z-20 overflow-hidden flex-col gap-3 p-4 ">
        <!-- Glow Effect -->
        {{-- <div class="absolute w-[200px] h-[200px] bg-purple-900 rounded-full blur-3xl opacity-50 right-1/2 -top-10"></div> --}}
        {{-- <div class="absolute w-[300px] h-[300px] bg-purple-900 rounded-full blur-3xl opacity-60 right-3/4 bottom-20"></div>
        <div class="absolute w-[200px] h-[100px] bg-purple-900 rounded-full blur-3xl opacity-60 right-0 top-1/3"></div> --}}
        <div class="absolute w-full h-1/3   bg-gradient-to-t !from-gray-100 !to-transparent right-0 bottom-0 z-0 ">
        </div>


        <!-- Content -->
        <div class="relative text-start md:!text-center text-gray-900 z-20">
            <h1 class="text-5xl font-black text-gray-900 leading-tight drop-shadow-xl">
                Print? Jilid? Burning CD? Fotocopy? <br> <span class="text-primary-600">Akela Printis aja</span>
            </h1>
            <p class=" text-lg text-gray-900 mt-20 md:!mt-0">Simpel & cepat.
                Transaksi mudah cukup dari rumah.</p>
        </div>
        <div class="flex flex-wrap gap-3 text-xs z-10">
            <a href="#produk"
                class="border text-primary-600 border-primary-600 hover:bg-primary-400 transition-all p-2 px-5 hover:text-white rounded-md text-center flex items-center gap-2">
                <i class="ph-fill ph-list-plus text-lg"></i> Lihat produk
            </a>
            <a href="/#simulasi"
                class="text-white bg-primary-600 hover:bg-primary-400 font-medium p-2 px-5 rounded-md flex items-center gap-2">
                <i class="ph-fill ph-whatsapp-logo text-lg"></i> Pesan sekarang
            </a>
        </div>
    </div>


    <div class="w-full p-4 md:!p-20  h-fit flex flex-col space-y-20 z-30">
        {{-- <div class="tentangProduk flex justify-center">
            <div class="grid grid-cols-4 gap-5 place-items-center w-4/5">
                <h1 class="font-medium col-span-3 text-primary-800 text-center text-lg">Akela Printis hadir untuk memudahkan
                    mahasiswa dalam mencetak dan
                    menjilid skripsi, tugas, serta kebutuhan cetak lainnya dengan kualitas terbaik, harga terjangkau, dan
                    yang paling penting cukup pesan dari rumah.
                </h1>
                <div
                    class="review p-4 rounded-xl  bg-linear-to-br from-primary-500 to-primary-700 flex flex-col gap-4 text-white">
                    <p class="text-xl font-medium">Lebih dari 500 review bintang lima</p>

                    <div class="flex gap-2">
                        <i class="ph-fill ph-star"></i>
                        <i class="ph-fill ph-star"></i>
                        <i class="ph-fill ph-star"></i>
                        <i class="ph-fill ph-star"></i>
                        <i class="ph-fill ph-star"></i>
                    </div>
                    <a href="/testimoni" class="text-gray-300 text-xs underline">Lihat review</a>
                </div>
            </div>

        </div> --}}


        <div class=" w-full space-y-5" id="produk">
            <div class="flex justify-between mb-5 w-full">
                <h5 class="font-bold text-gray-900 text-4xl md:!text-2xl mb-5 text-center md:!text-start w-full md:!w-1/2">
                    Layanan terbaik untukmu</h5>
                <p class="text-gray-500 text-sm hidden md:block">Semua produk</p>
            </div>
            <div class="grid grid-cols-2 md:!grid-cols-5 gap-3 items-stretch">
                <div id="first-card"
                    class=" justify-between from-[#f67676] to-[#b62a2a] bg-radial p-4 text-white  shadow flex-none rounded-md  w-full flex flex-col gap-6 ">
                    <p class="font-semibold text-xl">Print cepat, hasil berkualitas—praktis tanpa ribet!</p>
                    <div class="rounded-full flex justify-between bg-white p-2 px-3 border-2 border-red-700 ">
                        <p class="text-red-700 text-xs ">Layanan print </p>
                        <p class="text-red-700 text-xs ">&#8594;</p>
                    </div>
                </div>
                @foreach ($print as $printItem)
                    <div class="  flex-none rounded-md h-fit gap-4 w-full flex flex-col  overflow-hidden ">
                        <img src="/storage/{{ $printItem->foto }}" alt=""
                            class=" h-50 rounded-md  object-cover  w-full">
                        <div class=" text-red-800">
                            <p class="text-xs">Star From Rp {{ $printItem->harga }}</p>
                            <p class="font-bold text-md capitalize">{{ $printItem->nama }}</p>
                        </div>
                    </div>
                @endforeach

                <div id="first-card"
                    class=" justify-between md:hidden from-[#89c2f7] to-[#1592fd] bg-radial p-4 text-white  shadow flex-none rounded-md  w-full flex flex-col gap-6 ">
                    <p class="font-semibold text-xl">Jilid Rapi, Tahan Lama – Skripsi & Dokumen Jadi Lebih
                        Profesional!</p>
                    <div class="rounded-full flex justify-between bg-white p-2 px-3 border-2 border-blue-700 ">
                        <p class="text-blue-700 text-xs ">Layanan jilid </p>
                        <p class="text-blue-700 text-xs "> &#8594;</p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 md:!grid-cols-5 gap-3 items-stretch">

                <div class="flex col-span-4 relative h-fit">
                    <!-- Tombol Kiri -->
                    <button id="scrollLeft"
                        class="absolute left-0 p-2 top-1/2 -translate-y-1/2 bg-white shadow-md rounded-full z-10 hidden md:flex items-center justify-center w-10 h-10">
                        &#8592;
                    </button>
                    <div class=" grid grid-cols-2 gap-3 md:flex overflow-x-scroll " id="scrollContainer">
                        @foreach ($jilid as $jilidItem)
                            <div class=" flex-none rounded-md h-fit gap-4 w-1/5  flex flex-col  overflow-hidden "
                                style="width: var(--card-width)">
                                <img src="/storage/{{ $jilidItem->foto }}" alt=""
                                    class=" h-50 rounded-md  object-cover  w-full">
                                <div class=" text-blue-800">
                                    <p class="text-xs">Star From Rp {{ $jilidItem->harga }}</p>
                                    <p class="font-bold text-md capitalize">{{ $jilidItem->nama }}</p>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="  flex-none rounded-md h-fit gap-4 w-52 flex flex-col  overflow-hidden "
                            style="width: var(--card-width)">
                            <img src="/img/f4.png" alt="" class=" h-50 rounded-md  object-cover  w-full">
                            <div class=" text-blue-800">
                                <p class="text-xs">Star From Rp 20.000</p>
                                <p class="font-bold text-md ">Antero</p>
                            </div>
                        </div>
                        <div class="  flex-none rounded-md h-fit gap-4 w-52 flex flex-col  overflow-hidden "
                            style="width: var(--card-width)">
                            <img src="/img/f4.png" alt="" class=" h-50 rounded-md  object-cover  w-full">
                            <div class=" text-blue-800">
                                <p class="text-xs">Star From Rp 20.000</p>
                                <p class="font-bold text-md ">Antero Laminating</p>
                            </div>
                        </div>
                        <div class="  flex-none rounded-md h-fit gap-4 w-52 flex flex-col  overflow-hidden "
                            style="width: var(--card-width)">
                            <img src="/img/f4.png" alt="" class=" h-50 rounded-md  object-cover  w-full">
                            <div class=" text-blue-800">
                                <p class="text-xs">Star From Rp 20.000</p>
                                <p class="font-bold text-md ">Spiral Kawat</p>
                            </div>
                        </div>
                        <div class="  flex-none rounded-md h-fit gap-4 w-52 flex flex-col  overflow-hidden "
                            style="width: var(--card-width)">
                            <img src="/img/f4.png" alt="" class=" h-50 rounded-md  object-cover  w-full">
                            <div class=" text-blue-800">
                                <p class="text-xs">Star From Rp 20.000</p>
                                <p class="font-bold text-md ">Mika/Lakban</p>
                            </div>
                        </div>
                        <div
                            class=" justify-between md:hidden from-[#fddda2] to-[#f8a643] bg-radial p-4 text-white  shadow flex-none rounded-md  w-full flex flex-col gap-6 ">
                            <p class="font-semibold text-xl">Lebih dari Sekadar Print dan Jilid – Semua bisa </p>
                            <div class="rounded-full flex justify-between bg-white p-2 px-3 border-2 border-yellow-700 ">
                                <p class="text-yellow-700 text-xs ">Lainnya </p>
                                <p class="text-yellow-700 text-xs ">&#8594;</p>
                            </div>
                        </div> --}}
                    </div>

                    <!-- Tombol Kanan -->
                    <button id="scrollRight"
                        class="absolute right-0 p-2 top-1/2 -translate-y-1/2 bg-white shadow-md rounded-full z-10 hidden md:flex items-center justify-center w-10 h-10">
                        &#8594;
                    </button>
                </div>
                <div
                    class=" justify-between hidden md:!flex from-[#89c2f7] to-[#1592fd] bg-radial p-4 text-white  shadow flex-none rounded-md  w-full flex-col gap-6 ">
                    <p class="font-semibold text-xl text-end">Jilid Rapi, Tahan Lama – Skripsi & Dokumen Jadi Lebih
                        Profesional!</p>
                    <div class="rounded-full flex justify-between bg-white p-2 px-3 border-2 border-blue-700 ">
                        <p class="text-blue-700 text-xs "> &#8592;</p>
                        <p class="text-blue-700 text-xs ">Layanan jilid </p>
                    </div>
                </div>

            </div>

            <div class="justify-center hidden md:flex">
                <div class="mt-20 h-80 from-[#cdb4db] to-[#a71cb6] bg-radial w-full rounded-lg grid grid-cols-3 relative ">
                    <div class="col-span-2 flex justify-center flex-col gap-2 p-10">
                        <h1 class="text-white font-bold text-5xl ">Special Product</h1>
                        <h1 class="text-white font-semibold text-2xl ">Papan ucapan akrilik dan Flower Box</h1>
                        <a href="/flower-box-katalog"
                            class="bg-white rounded-md p-2 text-sm text-[#a71cb6] w-fit h-fit">Lihat katalog</a>
                    </div>
                    <div class="pe-10 flex items-end relative">
                        <img src="/img/akrilik.png" alt="" class="p-0 w-full  absolute -bottom-10  ">
                    </div>

                </div>
            </div>


            {{-- <div class="flex justify-center p-20 pb-10">
                <h1 class="text-4xl font-bold">Produk dan layanan lainnya</h1>
            </div> --}}
            <div class="grid grid-cols-2 md:!grid-cols-5 gap-3 mt-3 md:!mt-20">
                <div
                    class=" justify-between hidden md:flex from-[#fddda2] to-[#f8a643] bg-radial p-4 text-white  shadow flex-none rounded-md  w-full flex-col gap-6 ">
                    <p class="font-semibold text-xl">Lebih dari Sekadar Print dan Jilid – Semua bisa </p>
                    <div class="rounded-full flex justify-between bg-white p-2 px-3 border-2 border-yellow-700 ">
                        <p class="text-yellow-700 text-xs ">Layanan lainnya </p>
                        <p class="text-yellow-700 text-xs ">&#8594;</p>
                    </div>
                </div>

                @foreach ($lainnya as $lainnyaItem)
                <div class="  flex-none rounded-md h-fit gap-4 w-full flex flex-col  overflow-hidden ">
                    <img src="/storage/{{ $lainnyaItem->foto }}" alt="" class=" h-50 rounded-md  object-cover  w-full">
                    <div class=" text-yellow-700">
                        <p class="text-xs">Star From Rp {{ $lainnyaItem->harga }}</p>
                        <p class="font-bold text-md ">{{ $lainnyaItem->nama }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div
                class=" col-span-2 p-4 flex-none md:hidden rounded-md h-fit gap-4 from-[#cdb4db] to-[#a71cb6] bg-radial flex flex-col  overflow-hidden">
                <img src="/img/akrilik.webp" alt="" class=" h-50 rounded-md  object-cover object-top  w-full">
                <div class=" text-white">
                    <p class="text-xs">Star From Rp 65.000</p>
                    <p class="font-bold text-3xl ">Special Product</p>
                    <p class="text-sm">Papan ucapan akrilik dan Flower Box</p>
                </div>
                <div class="flex justify-end w-full">
                    <a href="/flower-box-katalog" class="bg-white rounded-md p-2 text-sm text-[#a71cb6] w-fit h-fit">Lihat
                        katalog</a>
                </div>
            </div>

        </div>
    </div>
    <style>
        #scrollContainer {
            scrollbar-width: none;
            /* Firefox */
            -ms-overflow-style: none;
            /* Internet Explorer & Edge */
        }

        /* Untuk WebKit (Chrome, Safari) */
        #scrollContainer::-webkit-scrollbar {
            display: none;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let firstCard = document.getElementById("first-card");
            let scrollContainer = document.getElementById("scrollContainer");
            let scrollLeft = document.getElementById("scrollLeft");
            let scrollRight = document.getElementById("scrollRight");

            function getComputedGap() {
                let computedStyle = window.getComputedStyle(scrollContainer);
                return parseInt(computedStyle.gap) || 0; // Ambil nilai gap, jika tidak ada, default 0
            }

            function updateCardWidth() {
                let firstCardWidth = firstCard.offsetWidth;
                let gapSize = getComputedGap(); // Ambil nilai gap

                // Simpan ukuran dalam CSS variable
                document.documentElement.style.setProperty("--card-width", firstCardWidth + "px");
                document.documentElement.style.setProperty("--gap-size", gapSize + "px");

                // Update event listener untuk scroll dengan gap
                scrollLeft.onclick = () => {
                    scrollContainer.scrollBy({
                        left: -(firstCardWidth + gapSize),
                        behavior: "smooth"
                    });
                };

                scrollRight.onclick = () => {
                    scrollContainer.scrollBy({
                        left: firstCardWidth + gapSize,
                        behavior: "smooth"
                    });
                };
            }

            // Jalankan saat pertama kali halaman dimuat
            updateCardWidth();

            // Perbarui ukuran saat window di-resize
            window.addEventListener("resize", updateCardWidth);
        });
    </script>
@endsection
