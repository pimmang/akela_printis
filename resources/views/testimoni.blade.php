@extends('layouts.main')
@section('title', 'testimoni')
@section('content')
    @if ($errors->any())
        @include('components.toastEror', ['errors' => $errors])
    @endif

    @if (session('success'))
        @include('components.toastSukses2', ['message' => session('success')])
    @endif
    <div class="h-screen flex flex-col items-center justify-start pt-20 md:!justify-center relative testi px-4">
        <div class="md:!-translate-y-full ">
            {{-- <p>{{ session('success') }}  tes</p> --}}
            <h1 class="text-6xl text-start md:!text-center font-black">Sudah dipercaya banyak Mahasiswa </h1>
            <h1 class="text-2xl md:!text-4xl text-start md:!text-center font-bold text-primary-600 ">Untuk urusan percetakan
                skripsi dan tugas-tugasnya
            </h1>
        </div>

        <div class="w-full overflow-hidden bottom-0 absolute z-20">
            <div class="gap-4 animate-marquee w-fit flex">
                @foreach ($testimonis as $testimoni)
                    <div class=" p-1 odd:pt-10 even:pb-10">
                        <div class="h-fit w-64 rounded-lg flex-none bg-white shadow p-4 flex flex-col items-center">
                            <img src="{{ $testimoni->foto ? '/storage/' . $testimoni->foto : 'https://cdn-icons-png.flaticon.com/512/3135/3135715.png' }}"
                                alt="Profile" class="w-20 h-20 rounded-full mb-2">
                            <div x-data="{ rating: {{ $testimoni->rating ?? 4 }} }" class="flex items-center space-x-1 mb-2">
                                <template x-for="i in 5">
                                    <svg :class="i <= rating ? 'text-yellow-400' : 'text-gray-300'"
                                        class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.959a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.37 2.448a1 1 0 00-.364 1.118l1.287 3.959c.3.921-.755 1.688-1.54 1.118l-3.37-2.448a1 1 0 00-1.175 0l-3.37 2.448c-.785.57-1.84-.197-1.54-1.118l1.287-3.959a1 1 0 00-.364-1.118L2.075 9.386c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.286-3.959z" />
                                    </svg>
                                </template>
                            </div>
                            <p class="text-sm text-gray-600 text-center">{{ $testimoni->testimoni }}"</p>
                            <p class="font-semibold mt-2 text-center">-{{ $testimoni->nama }}, {{ $testimoni->fakultas }}
                            </p>
                        </div>
                    </div>
                @endforeach
                @foreach ($testimonis as $testimoni)
                    <div class=" p-1 odd:pt-10 even:pb-10">
                        <div class="h-fit w-64 rounded-lg flex-none bg-white shadow p-4 flex flex-col items-center">
                            <img src="{{ $testimoni->foto ? '/storage/' . $testimoni->foto : 'https://cdn-icons-png.flaticon.com/512/3135/3135715.png' }}"
                                alt="Profile" class="w-20 h-20 rounded-full mb-2">
                            <div x-data="{ rating: {{ $testimoni->rating ?? 4 }} }" class="flex items-center space-x-1 mb-2">
                                <template x-for="i in 5">
                                    <svg :class="i <= rating ? 'text-yellow-400' : 'text-gray-300'"
                                        class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.959a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.37 2.448a1 1 0 00-.364 1.118l1.287 3.959c.3.921-.755 1.688-1.54 1.118l-3.37-2.448a1 1 0 00-1.175 0l-3.37 2.448c-.785.57-1.84-.197-1.54-1.118l1.287-3.959a1 1 0 00-.364-1.118L2.075 9.386c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.286-3.959z" />
                                    </svg>
                                </template>
                            </div>
                            <p class="text-sm text-gray-600 text-center">{{ $testimoni->testimoni }}"</p>
                            <p class="font-semibold mt-2 text-center">-{{ $testimoni->nama }}, {{ $testimoni->fakultas }}
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="absolute w-full h-1/3   bg-gradient-to-t !from-gray-100 !to-transparent right-0 bottom-0 z-10">
        </div>

    </div>

    <div class="w-full p-4 text-center md:!text-start md:!p-20 flex justify-center flex-col items-center">
        <h1 class="font-bold text-4xl md:!text-5xl">Apa yang <span class="text-primary-600">pelanggan</span> kami katakan
        </h1>
        <div class="columns-2 sm:columns-2 md:columns-3 lg:columns-4 pt-4 gap-4 mt-10">
            @foreach ($testimoniLengkaps as $testimoniLengkap)
                <div x-data="{ rating: {{ $testimoniLengkap->rating }} }"
                    class="w-full mx-auto bg-white shadow-lg rounded-lg h-fit break-inside-avoid mb-4">
                    <div class="  p-4 flex flex-col items-center text-center">
                        <!-- Foto Pelanggan -->
                        <img src="{{ $testimoniLengkap->foto ? '/storage/' . $testimoniLengkap->foto : 'https://cdn-icons-png.flaticon.com/512/3135/3135715.png' }}"
                            class="w-20 h-20 rounded-full object-cover border-2 border-gray-300 shadow-md">

                        <!-- Nama Pelanggan -->
                        <h3 class="mt-3 text-lg font-semibold">{{ $testimoniLengkap->nama }}</h3>
                        <p class="text-sm text-gray-500">Fakultas {{ $testimoniLengkap->fakultas }}</p>
                        <!-- Rating Bintang -->
                        <div class="flex mt-2">
                            <template x-for="star in 5">
                                <svg :class="star <= rating ? 'text-yellow-400' : 'text-gray-300'"
                                    class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M12 .587l3.668 7.429L24 9.75l-6 5.858 1.416 8.543L12 18.897l-7.416 5.254L6 15.608 0 9.75l8.332-1.734L12 .587z" />
                                </svg>
                            </template>
                        </div>

                        <!-- Isi Testimoni -->
                        <p class="mt-3 text-gray-600 italic text-sm">{{ $testimoniLengkap->testimoni }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-4 w-full flex justify-end">
            <div>
                {{ $testimoniLengkaps->links() }}
            </div>
        </div>
    </div>
    <div class="flex px-4 md:!px-20 w-full pt-10 md:!pt-0 ">
        <div class=" rounded-md w-full flex flex-col md:!flex-row  justify-between gap-4">
            <div class="w-full md:!w-1/2  md:!pe-10  md:!space-y-10">
                <h1 class="text-gray-900 font-bold text-center md:!text-start text-4xl md:!text-6xl">Kami ingin <span
                        class="text-primary-600">mendengar</span>
                    dari Anda!</h1>
                <p class="text-gray-500 text-center md:!text-start">Ulasan Anda tidak hanya membantu kami menjadi lebih
                    baik, tetapi juga membantu
                    orang lain dalam membuat keputusan yang tepat!</p>
            </div>
            <div class="w-full md:!w-1/2 mx-auto p-6 bg-white shadow-lg rounded-2xl mb-20">
                <h2 class="text-xl font-semibold text-center mb-4">Tambah Testimoni</h2>
                <form action="/kirim-testi" method="POST" class="space-y-4" enctype="multipart/form-data">
                    @csrf

                    <div x-data="{ photoPreview: null }" class="flex items-center justify-center flex-col gap-4 ">
                        <!-- Preview Gambar -->
                        <img :src="photoPreview || 'https://cdn-icons-png.flaticon.com/512/3135/3135715.png'"
                            class=" w-[100px] h-[100px]  object-cover object-top border rounded-full border-gray-300 shadow-md">

                        <div class="h-fit flex-grow">
                            <label class="block text-sm font-medium">Foto (Opsional)</label>
                            <!-- Input File yang Disembunyikan -->
                            <input type="file" name="foto" id="foto" class="hidden"
                                @change="let file = $event.target.files[0]; 
                                 photoPreview = file ? URL.createObjectURL(file) : null">

                            <!-- Label yang Bertindak sebagai Tombol Upload -->
                            <label for="foto"
                                class="cursor-pointer block mt-2 border !w-full bg-white border-primary-600 text-primary-600 px-4 py-2 rounded-lg hover:bg-primary-600 hover:text-white transition">
                                Pilih Foto
                            </label>
                        </div>
                    </div>

                    <!-- Rating Bintang dengan Alpine.js -->
                    <div x-data="{ rating: {{ old('rating', 0) }} }">
                        <div class="flex space-x-1 mt-1 w-full justify-center">
                            @for ($i = 1; $i <= 5; $i++)
                                <button type="button" @click="rating = {{ $i }}"
                                    class="text-gray-300 transition text-6xl "
                                    :class="{ 'text-yellow-500': rating >= {{ $i }} }">
                                    <svg class="w-12 h-12 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 .587l3.668 7.429L24 9.75l-6 5.858 1.416 8.543L12 18.897l-7.416 5.254L6 15.608 0 9.75l8.332-1.734L12 .587z" />
                                    </svg>
                                </button>
                            @endfor
                        </div>
                        <input type="hidden" name="rating" x-model="rating">
                    </div>

                    <!-- Input Nama -->
                    <div>
                        <label class="block text-sm font-medium">Nama</label>
                        <input type="text" name="nama"
                            class="w-full mt-1 p-2 border rounded-lg focus:ring focus:ring-blue-200"
                            placeholder="Masukkan nama Anda" required value="{{ old('nama') }}">
                    </div>

                    <!-- Input Fakultas -->
                    <div>
                        <label class="block text-sm font-medium">Fakultas</label>
                        <input type="text" name="fakultas"
                            class="w-full mt-1 p-2 border rounded-lg focus:ring focus:ring-blue-200"
                            placeholder="Masukkan fakultas Anda" required value="{{ old('fakultas') }}">
                    </div>

                    <!-- Input Testimoni -->
                    <div>
                        <label class="block text-sm font-medium">Testimoni</label>
                        <textarea name="testimoni" class="w-full mt-1 p-2 border rounded-lg focus:ring focus:ring-blue-200" rows="3"
                            placeholder="Bagikan pengalaman Anda" required>{{ old('testimoni') }}</textarea>
                    </div>

                    <!-- Tombol Submit -->
                    <button type="submit"
                        class="w-full bg-primary-600 text-white py-2 rounded-lg hover:bg-primary-400 transition">
                        Kirim Testimoni
                    </button>
                </form>
            </div>
        </div>
    </div>



    {{-- <div class="text-center py-12 bg-primary-600 text-white mb-20">
        <h2 class="text-3xl font-bold">Siap Cetak Skripsi & Tugasmu dengan Cepat?</h2>
        <p class="text-lg mt-2">Pesan sekarang dan nikmati layanan cetak terbaik untuk mahasiswa!</p>
        <a href="/#simulasi" onclick="muncul()"
            class="mt-6 inline-block bg-white text-primary-600 font-semibold px-6 py-3 rounded-full shadow-md hover:bg-gray-200 transition">
            Pesan Sekarang
        </a>
    </div> --}}

    <style>
        @keyframes marquee {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        .animate-marquee {
            display: flex;
            animation: marquee 15s linear infinite;
        }
    </style>
@endsection
