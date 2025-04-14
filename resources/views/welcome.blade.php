@extends('layouts.main')

@section('title', 'Beranda')

@section('content')
    <style>
        .hero {
            background-image: url('img/kertas.jpg');
            background-repeat: no-repeat;
            object-fit: cover;
            background-size: cover;
        }
    </style>
    @if (session('success'))
        @include('components.toastSukses2', ['message' => session('success')])
    @endif
    @if ($errors->any())
        @include('components.toastEror', ['errors' => $errors])
    @endif
    <div class="hero !h-screen hidden w-full hero md:grid grid-cols-5 justify-center  text-white md:!px-20 px-4 relative ">
        <div class="absolute w-full h-1/3   bg-gradient-to-t !from-gray-100 !to-transparent right-0 bottom-0 z-10">
        </div>
        <div class="w-full flex justify-center flex-col gap-2  col-span-3 text-nowrap ">
            <h1 class="md:!text-7xl text-4xl text-black font-black transition-all">Selamat datang para
            </h1>
            <h1 class="md:!text-7xl text-4xl  font-black text-primary-600 transition-all"> pejuang skripsi
            </h1>
            {{-- <p class="font-medium text-lg text-black ">Keren banget, udah mau lulus!🔥🔥</p> --}}
            <p class=" text-md  text-black text-wrap mt-5">akela printis, print dan jilid murah tanpa antri, proses
                <br> cepat, dan tanpa keluar rumah
            </p>
            <a href="#simulasi"
                class="flex relative mt-5 text-wrap group bg-linear-to-l from-primary-600 to-primary-500 z-10  text-white items-center overflow-hidden justify-between gap-2 p-3 ps-4 w-4/5  rounded-full   hover:bg-white  transition-all">

                <p>Cek sebarapa hemat transaksi di akela printis</p>
                <div
                    class="flex justify-center items-center  w-20 group-hover:w-full transition-all duration-200  bg-primary-700 absolute top-0 right-0 bottom-0 z-10 overflow-hidden">
                    <p
                        class="absolute left-0 -translate-x-full group-hover:left-0 group-hover:translate-x-10 z-20  group-hover:transition-transform group-hover:duration-300  ">
                        Lets go..</p>
                    <i class="ph-bold ph-arrow-right text-white font-bold absolute right-8"></i>
                </div>
            </a>

        </div>
        <div class="w-full flex justify-center items-end translate-x-12 z-20 md:!col-span-2">
            <img class="md:!w-1/2 w-full object-cover h-100 md:h-full  overflow-visible" src="/img/hero2.png"
                alt="heroimage">
        </div>
        <div class="absolute   flex gap-3 items-center bottom-20 right-20 z-30 ">
            <div
                class="flex items-center gap-2 p-4 w-65 border rounded-lg border-white backdrop-blur bg-primary-900/20  transition-all">
                <i class="ph  ph-map-pin-area text-xl"></i>
                <p>Tamalanrea, Makassar</p>
            </div>
            <div
                class="flex items-center w-65 gap-2 p-4 border rounded-lg border-white backdrop-blur bg-primary-900/20  transition-all">
                <i class="ph ph-clock text-xl"></i>
                <p>Since, February 2022</p>
            </div>


        </div>
        <div class="absolute bottom-0 h-40  bg-gradient-to-b  from-transparent to-gray-100  p-4 left-0 right-0  z-10"></div>
    </div>

    <div class="hero md:hidden !h-screen !w-full hero pt-20 flex flex-col gap-5 tes   text-white md:!px-20 px-4 relative ">
        <div class="absolute w-full h-1/3   bg-gradient-to-t !from-gray-100 !to-transparent right-0 bottom-0 z-4">
        </div>
        <div class="w-full flex text-start flex-col gap-2 z-10">
            <h1 class=" text-6xl text-black font-black transition-all">Selamat datang
            </h1>
            <h1 class=" text-6xl  font-black text-primary-600 transition-all"> pejuang skripsi
            </h1>
            {{-- <p class="font-medium text-lg text-black ">Keren banget, udah mau lulus!🔥🔥</p> --}}
            <p class=" text-xs  text-black text-wrap mt-5">akela printis, print dan jilid murah tanpa antri, proses
                <br> cepat, dan tanpa keluar rumah
            </p>
            <a href="#simulasi"
                class="flex relative mt-5 ps-5 text-wrap text-start group bg-linear-to-l text-xs from-primary-600 to-primary-500  text-white items-center overflow-hidden justify-between gap-2 p-3  w-3/4  rounded-full   hover:bg-white  transition-all">

                <p>Cek sebarapa hemat transaksi <br> di akela printis</p>
                <div
                    class="flex justify-center items-center  w-10 group-hover:w-full transition-all duration-200  bg-primary-700 absolute top-0 right-0 bottom-0 z-10 overflow-hidden">
                    <p
                        class="absolute left-0 -translate-x-full group-hover:left-0 group-hover:translate-x-10 z-20  group-hover:transition-transform group-hover:duration-300  ">
                        Lets go..</p>
                    <i class="ph-bold ph-arrow-right text-white font-bold absolute right-4"></i>
                </div>
            </a>

        </div>
        <div class="w-full flex justify-center items-end translate-y-12 z-5 absolute bottom-0  translate-x-1/3">
            <img class="md:!w-1/2 w-full object-cover h-90 md:h-full  overflow-visible" src="/img/hero2.png"
                alt="heroimage">
        </div>
        <div class="w-65 absolute max-w-md bottom-4 right-4 mt-10 z-30 overflow-hidden">
            <div id="slider" class="flex transition-all duration-700 ease-in-out ">
                <div
                    class="flex flex-none items-center gap-2 p-4 w-full flex-shrink-0 border rounded-lg border-white backdrop-blur bg-primary-900/20 transition-all">
                    <i class="ph ph-map-pin-area text-xl"></i>
                    <p>Tamalanrea, Makassar</p>
                </div>
                <div
                    class="flex flex-none items-center w-full flex-shrink-0 gap-2 p-4 border rounded-lg border-white backdrop-blur bg-primary-900/20 transition-all">
                    <i class="ph ph-clock text-xl"></i>
                    <p>Since, February 2022</p>
                </div>
                <div
                    class="flex flex-none items-center gap-2 p-4 w-full flex-shrink-0 border rounded-lg border-white backdrop-blur bg-primary-900/20 transition-all">
                    <i class="ph ph-map-pin-area text-xl"></i>
                    <p>Tamalanrea, Makassar</p>
                </div>
            </div>
        </div>

        <div class="absolute bottom-0 h-40  bg-gradient-to-b  from-transparent to-gray-100  p-4 left-0 right-0  z-10"></div>
    </div>

    <div class="h-fit w-full md:!p-20 p-4 pt-20  pb-10">
        <div class="flex flex-col gap-3 items-center justify-center w-full mb-10">
            <h1 class="md:text-5xl text-3xl font-bold text-center"> Layanan terbaik untuk <span
                    class="text-primary-500">Mahasiswa
                    Akhir</span> ada
                di sini!</h1>
            <p class="md:w-3/4 wfull text-center text-xs lg:text-sm  text-gray-600">Ini nih layanan yang saat ini bisa kami
                lakukan, serahkan urusan
                cetak jilidmu di
                akela printis! cetak mudah tanpa
                harus keluar rumah</p>
        </div>
        <div class="w-full grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 px-4 md:!px-0 md:gap-8 gap-4">
            <a href="https://wa.me/6285342677431?text=Halo Kak, Mau print dong"
                class="w-full rounded-lg border group border-success hover:scale-105 shadow-lg transition-all">
                <div class="bg-success group-hover:scale-125 transition-all w-fit p-4 rounded-br-3xl rounded-tl-lg"><i
                        class="ph-fill ph-printer text-2xl text-white"></i></div>
                <div class="p-2 px-4">
                    <p class="font-bold text-xl text-gray-900">Nge-Print</p>
                    <p class=" text-sm text-gray-600">Butuh ngeprint tugas, skripsi, tesis, kuesioner atau dokumen lainnya?
                        Tenang,
                        hasilnya jelas dan bisa pilih jenis kertas sesuai kebutuhan.</p>
                </div>
            </a>
            <a href="https://wa.me/6285342677431?text=Halo Kak, Mau jilid dong"
                class="w-full rounded-lg border group border-warning hover:scale-105 shadow-lg transition-all">
                <div class="bg-warning w-fit group-hover:scale-125 transition-all p-4 rounded-br-3xl rounded-tl-lg"><i
                        class="ph-fill ph-books text-2xl text-white"></i></div>
                <div class="p-2 px-4">
                    <p class="font-bold text-xl text-gray-900">Nge-Jilid </p>
                    <p class=" text-sm text-gray-600">Biar skripsi, Tesis atau laporan makin rapi dan profesional, ada jilid
                        hardcover,
                        softcover, spiral, sampai lakban. Tinggal pilih sesuai selera!</p>
                </div>
            </a>
            <a href="https://wa.me/6285342677431?text=Halo Kak, Mau fotocopy"
                class="w-full rounded-lg border group border-info hover:scale-105 shadow-lg transition-all">
                <div class="bg-info w-fit p-4 group-hover:scale-125 transition-all rounded-br-3xl rounded-tl-lg"><i
                        class="ph-fill ph-copy text-2xl text-white"></i></div>
                <div class="p-2 px-4">
                    <p class="font-bold text-xl text-gray-900"> Nge-Burning CD</p>
                    <p class=" text-sm text-gray-600">Siap mengabadikan file skripsi berhargamu dalam bentuk CD, lengkap
                        dengan cover dan
                        stiker
                    </p>
                </div>
            </a>
            <a href="https://wa.me/6285342677431?text=Halo Kak, boleh diantarkan?"
                class="w-full rounded-lg border group border-danger hover:scale-105 shadow-lg transition-all ">
                <div class="bg-danger w-fit p-4 group-hover:scale-125 transition-all rounded-br-3xl rounded-tl-lg"><i
                        class="ph-fill ph-motorcycle text-2xl text-white"></i></div>
                <div class="p-2 px-4">
                    <p class="font-bold text-xl text-gray-900">Ng-Antar Jemput </p>
                    <p class=" text-sm text-gray-600">Lagi sibuk atau mager keluar? Gampang! Tinggal pesan online, hasil
                        cetakan langsung
                        diantar ke tempat kamu. Gratis ongkir!</p>
                </div>
            </a>
        </div>

    </div>
    <div class="h-fit w-full md:!p-20 p-4">
        <div class="w-full rounded-xl border border-primary-900/30 bg-primary-100/70">
            <div class="md:grid flex flex-col w-full p-10 md:grid-cols-3">
                <p class="text-sm border-0 border-l-2 hidden lg:block py-10 ps-8 rounded col-span-1 ">apa yang bikin akela
                    pas
                    banget sama mahasiswa
                    <span class="text-primary-900 font-bold">Gen-Z</span> ?
                </p>
                <h1
                    class="md:text-4xl text-2xl font-semibold  text-center md:!text-end border-0  rounded col-span-2 border-primary-900/30 ">
                    Rasakan
                    kemudahan
                    transaksi di <span class="text-primary-900 font-bold">Akela Printis</span> </h1>

                <p class="text-sm border-0 md:hidden text-center !border-l-2  rounded">apa yang bikin akela pas
                    banget sama mahasiswa
                    <span class="text-primary-900 font-bold">Gen-Z</span> ?
                </p>
            </div>

            <div class="grid grid-cols-6 relative pb-10 ">
                <div class="col-span-2"></div>
                <img class=" w-96 object-cover hidden lg:block overflow-visible absolute   bottom-0 translate-x-20 translate-y-10   z-30"
                    src="/img/kurirungu.png" alt="kurir">
                <img class=" w-50 lg:hidden object-cover overflow-visible absolute   bottom-0  translate-y-20 -translate-x-10   z-30"
                    src="/img/kurirungu.png" alt="kurir">
                <div class="flex flex-col gap-3 md:!col-span-4 col-span-6 z-20  ">
                    <div class="flex  flex-col  relative rounded-lg overflow-hidden">
                        {{-- <div
                            class="absolute w-10 left-0 top-0 bottom-0   bg-gradient-to-l  from-transparent to-[#E4DDE7]  p-4  z-10">
                        </div>
                        <div
                            class="absolute w-10 right-0 top-0 bottom-0   bg-gradient-to-r  from-transparent to-[#E4DDE7]  p-4  z-10">
                        </div> --}}
                        <div id="scrollContainer"
                            class="flex gap-5 p-5  md:pe-10  overflow-x-scroll scroll-smooth rounded-lg items-stretch ">
                            <div
                                class=" w-60 rounded-lg group flex-none border-r-4 hover:scale-110 transition-all border-b-4 p-5 border-1 border-success bg-white">
                                <div class="flex justify-end ">
                                    <div
                                        class="bg-success w-12 h-12 flex items-center justify-center group-hover:scale-110 transition-all p-4 rounded-full">
                                        <i class="ph-fill ph-money-wavy text-xl text-white "></i>
                                    </div>
                                </div>
                                <h5 class="border-0 border-b font-bold pb-2 text-gray-800">Harganya Mahasiswa Banget</h5>
                                <p class="text-xs pt-2 text-gray-600">Gak perlu khawatir dompet jebol! Akela Printis kasih
                                    harga yang pas
                                    buat kantong mahasiswa, jadi bisa tetap nge-print tanpa bikin saldo menjerit.</p>
                            </div>
                            <div
                                class=" w-60 rounded-lg group flex-none border-r-4 hover:scale-110 transition-all  border-b-4 p-5 border-1 border-warning bg-white">
                                <div class="flex justify-end">
                                    <div
                                        class="bg-warning w-12 h-12 flex items-center justify-center group-hover:scale-110 transition-all p-4 rounded-full">
                                        <i class="ph-fill ph-device-mobile text-xl text-white "></i>
                                    </div>
                                </div>
                                <h5 class="border-0 border-b font-bold pb-2 text-gray-800">Bisa Pesan & Antar Dari HP</h5>
                                <p class="text-xs pt-2 text-gray-600">Cocok banget nggak sih sama yang udah capek-capek
                                    ngerjain
                                    skripsi yang prosesnya panjang itu? tinggal kirim file dan kasih instruksi lalu tunggu
                                    pesanan sampai ke depan pintumu.</p>
                            </div>
                            <div
                                class=" w-60 rounded-lg group flex-none border-r-4 hover:scale-110 transition-all  border-b-4 p-5 border-1 border-info bg-white">
                                <div class="flex justify-end">
                                    <div
                                        class="bg-info w-12 h-12 flex items-center justify-center group-hover:scale-110 transition-all p-4 rounded-full">
                                        <i class="ph-fill ph-hand-coins text-xl text-white "></i>
                                    </div>
                                </div>
                                <h5 class="border-0 border-b font-bold pb-2 text-gray-800">Banyak Metode Pembayaran</h5>
                                <p class="text-xs pt-2 text-gray-600">Kamu tim cash atau cashless nih? dua duanya bisa
                                    banget loh: Qris,
                                    Transfer Bank, E-wallet, dan Tunai. Eits akela punya banyak jenis bank juga loh jadi gk
                                    perlu takut sama biaya admin.
                                </p>
                            </div>
                            <div
                                class=" w-60 rounded-lg group flex-none border-r-4 hover:scale-110 transition-all  border-b-4 p-5 border-1 border-danger bg-white">
                                <div class="flex justify-end">
                                    <div
                                        class="bg-danger w-12 h-12 flex items-center justify-center group-hover:scale-110 transition-all p-4 rounded-full">
                                        <i class="ph-fill ph-books text-xl text-white "></i>
                                    </div>
                                </div>
                                <h5 class="border-0 border-b font-bold pb-2 text-gray-800">Jilid Skripsi Anti Lama, Gak
                                    Pake
                                    Drama </h5>
                                <p class="text-xs pt-2 text-gray-600">Ini cocok banget buat para Deadliner nih, ada jilid
                                    skripsi super
                                    cepat
                                    yang bisa selesai dalam 1-3 jam aja biar urusan per-wisudaan bisa makin melesat.
                                </p>
                            </div>
                            {{-- <div class="h-60 w-60 rounded-lg flex-none border-r-4 border-b-4 border-0 border-success bg-white"></div>
                            <div class="h-60 w-60 rounded-lg flex-none bg-white"></div>
                            <div class="h-60 w-60 rounded-lg flex-none bg-white"></div>
                            <div class="h-60 w-60 rounded-lg flex-none bg-white"></div> --}}
                            {{-- <div class="h-60 w-52 rounded-lg flex-none bg-white"></div> --}}
                        </div>

                    </div>
                    <div class=" hidden md:flex w-full justify-end md:!pe-10 pe-5 gap-3">
                        <div id="left"
                            class="flex h-full p-2 bg-gray-400 rounded-l-lg group items-center transition-all cursor-pointer justify-center  ">
                            <i
                                class="ph-fill ph-caret-left  text-gray-900 group-hover:text-gray-900 transition-all group-active:scale-200 "></i>
                        </div>
                        <div id="right"
                            class="flex h-full p-2  bg-gray-400 rounded-r-lg  group  items-center transition-all cursor-pointer justify-center  ">
                            <i
                                class="ph-fill ph-caret-right  text-gray-900 group-hover:text-gray-900 transition-all group-active:scale-200 "></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full h-fit ">
        <div class="flex w-full  items-center flex-col pt-10 text-center">
            <h1 class="text-4xl font-semibold">Baca <span class="text-primary-600">Review</span>,</h1>
            <h1 class="text-5xl font-bold">biar makin yakin</h1>
            <p class="text-sm font-medium mt-5 text-gray-600 align-middle"><i
                    class="ph-fill ph-star text-primary-400"></i>
                {{ $averageRating }}/5 dari {{ $totalReview }} review</p>
        </div>

        <div class="grid grid-cols-5 mt-10 md:!ps-20 pb-10">
            <div class="w-full hidden md:block ">
                <i class="ph-fill ph-quotes text-8xl text-gray-500"></i>
                <p class="text-sm">Apa yang pelanggan kami katakan setelah transaksi di <span
                        class="text-primary-500">akela printis</span>
                <p>
                <div class="flex w-full justify-start pt-5 gap-3">
                    <div id="testi-left"
                        class="flex h-full p-2   bg-gray-400 rounded-l-lg group active:scale-110 items-center transition-all cursor-pointer justify-center  ">
                        <i
                            class="ph-fill ph-caret-left text-xs text-gray-900 group-hover:text-gray-900 transition-all group-active:scale-110 "></i>
                    </div>
                    <div id="testi-right"
                        class="flex h-full  p-2  bg-gray-400 rounded-r-lg  group active:scale-110  items-center transition-all cursor-pointer justify-center  ">
                        <i
                            class="ph-fill ph-caret-right text-xs  text-gray-900 group-hover:text-gray-900 transition-all group-active:scale-110 "></i>
                    </div>
                </div>
            </div>
            <div class="md:col-span-4 col-span-5">
                <div class="relative">
                    <div
                        class="absolute hidden md:block w-10 left-0 top-0 bottom-0  bg-gradient-to-l  from-transparent to-gray-100  p-10  z-10">
                    </div>
                    <div class="flex gap-4 overflow-x-scroll relative scroll-smooth p-4 md:!ps-10  items-stretch "
                        id="testi">
                        @foreach ($testimonis as $testimoni)
                            <div class="flex-none">
                                <div
                                    class="relative max-w-xs min-w-xs min-h-30 p-4 bg-white rounded-2xl rounded-bl-none shadow-xl">
                                    <p class="text-gray-700 text-sm capitalize">
                                        {{ $testimoni->testimoni }}
                                    </p>
                                    <div class="mt-2 flex items-center">
                                        <!-- Bintang rating -->
                                        <div class="flex text-primary-500">
                                            ★★★★★
                                        </div>
                                    </div>

                                    <!-- Segitiga di kiri bawah -->
                                    <div
                                        class="absolute translate-y-full left-0 bottom-0 drop-shadow-lg  w-0 h-0 border-l-[30px] border-l-white border-b-[30px] border-b-transparent border-r-[10px] border-r-transparent">
                                    </div>

                                </div>
                                <div href="" class="mt-4 flex items-center gap-1 ps-5 text-sm">
                                    <div class="w-12 h-12 rounded-full  flex items-center justify-center flex-col"> <i
                                            class="ph-fill ph-user-circle text-gray-600 text-5xl"></i></div>
                                    <div>
                                        <p class="font-semibold text-sm capitalize">{{ $testimoni->nama }}</p>
                                        <p class="text-gray-500 text-xs">
                                            {{ \Carbon\Carbon::parse($testimoni->created_at)->translatedFormat('j F Y') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>

    @include('components.countdown', ['event' => $event])

    <div class="flex flex-col items-center " id="simulasi">
        <div class="text-start col-span-2 p-4 flex items-center flex-col py-10">
            <h1 class="font-bold text-4xl md:mb-0 md:text-5xl text-center">Order atau cek biaya <span
                    class="text-primary-500 text-end">transaksi</span></h1>
            <!-- Tombol untuk menampilkan detail pada tampilan mobile -->
            <button id="toggleDetails" class="md:hidden  gap-1 flex items-center  text-primary-600 px-4 py-2 rounded-md">
                <p class="">Lihat detail fitur </p> <span class="pt-[3px]"><i class="ph-bold ph-caret-right "
                        id="arrowIcon"></i></span>
            </button>
            <p id="mobileDetails"
                class="mt-5 hidden  p-4 rounded-md border-0 !border-l-2 border-gray-500 bg-white  w-full md:!w-3/5 text-sm text-gray-500">
                Fitur buat cek semurah apa kalau transaksi di akela printis. Upload
                filemu dan biarkan
                kami
                menghitung. Tenang aja, file ini tidak akan tersimpan ke repository manapun jadi aman untuk
                turnitin dan
                lain-lain. Bagian ini juga sekaligus bagian untuk melakukan pemesanan dengan
                cara upload file, atur kebutuhanmu setelahnya pada bagian bawah, lalu muat hasilnya. hasil kemudian dapat
                langsung
                di
                oper ke admin akela (Minka)</p>
            <p class="mt-5 hidden md:block w-3/4 text-center text-sm text-gray-500">
                Fitur buat cek semurah apa kalau transaksi di akela printis. Upload
                filemu dan biarkan
                kami
                menghitung. Tenang aja, file ini tidak akan tersimpan ke repository manapun jadi aman untuk
                turnitin dan
                lain-lain. Bagian ini juga sekaligus bagian untuk melakukan pemesanan dengan
                cara upload file, atur kebutuhanmu di sebelah kanan, lalu muat hasilnya. hasil kemudian dapat langsung
                di
                oper ke admin akela (Minka)</p>


        </div>
        <script>
            document.getElementById('toggleDetails').addEventListener('click', function() {
                const details = document.getElementById('mobileDetails');
                const arrow = document.getElementById('arrowIcon');
                details.classList.toggle('hidden');
                arrow.classList.toggle('ph-caret-right');
                arrow.classList.toggle('ph-caret-down');
            });
        </script>
        <div class="col-span-3  md:mt-5 w-full px-4 md:!px-20">
            @if (isset($event))
                @include('components.cekTransaksi', ['diskon' => $event->diskon])
            @else
                @include('components.cekTransaksi', ['diskon' => 0])
            @endif
        </div>

    </div>
    @include('components.faq')
    <!-- Tombol Scroll to Top -->

    @include('components.toastSukses')

    <script>
        const right = document.getElementById('right');
        const left = document.getElementById('left');
        right.addEventListener("click", function() {
            let container = document.getElementById("scrollContainer");
            let cardWidth = container.children[0].offsetWidth + 20; // Lebar card + gap
            container.scrollLeft += cardWidth; // Scroll ke kanan satu card
        });
        left.addEventListener("click", function() {
            let container = document.getElementById("scrollContainer");
            let cardWidth = container.lastElementChild.offsetWidth + 20; // Lebar card + gap
            container.scrollLeft -= cardWidth; // Scroll ke kanan satu card
        });
        const testiRight = document.getElementById('testi-right');
        const testiLeft = document.getElementById('testi-left');


        testiRight.addEventListener("click", function() {
            let container = document.getElementById("testi");
            let cardWidth = container.children[0].offsetWidth + 16; // Lebar card + gap
            container.scrollLeft += cardWidth; // Scroll ke kanan satu card
        });
        testiLeft.addEventListener("click", function() {

            let container = document.getElementById("testi");
            let cardWidth = container.lastElementChild.offsetWidth + 16; // Lebar card + gap
            container.scrollLeft -= cardWidth; // Scroll ke kanan satu card
            console.log(cardWidth);
        });


        // Slider otomatis
        const slider = document.getElementById('slider');
        let index = 0;

        function moveSlider() {
            index++;
            slider.style.transform = `translateX(-${index * 100}%)`;
            slider.style.transition = 'transform 0.5s ease-in-out';

            // Jika mencapai batas, reset tanpa efek animasi
            if (index >= slider.children.length / 2) {
                setTimeout(() => {
                    index = 0;
                    slider.style.transition = 'none';
                    slider.style.transform = `translateX(0%)`;
                }, 500);
            }
        }

        setInterval(moveSlider, 3000); // Pindah setiap 3 detik
    </script>

    <style>

    </style>

    {{-- <div class="flex justify-center flex-col items-center mt-10 gap-2">
        <h1 class="text-2xl font-bold" >Langsung <span class="text-primary-500">Order</span> aja gk sih?</h1>
        <p>Klik aja di layanan yang diinginkan di atas, atau kalau mau nanya-nanya dulu boleh banget klik tombol di bawah ini</p>
        <a href="https://wa.me/6285342677431?text=Halo Kak,  nanya-nanya dulu dong" class="border mt-5 text-sm p-2 rounded text-white  hover:scale-110 bg-primary-600 transition-all hover:border-primary-500 hover:text-white">Nanya dulu min</a>
       </div> --}}

@endsection
