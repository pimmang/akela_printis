@extends('layouts.main')
@section('title', 'Kontak')
@section('content')
    <div
        class="h-screen px-4 kontak w-full relative flex items-center justify-center text-center flex-col gap-4 bg-primary-100/50">
        <div class="-translate-y-full ">
            <h1 class="text-5xl md:!text-6xl font-bold">Get in Touch</h1>
            <p>Punya pertanyaan atau ingin cetak uu sekarang? Hubungi kami dan dapatkan layanan terbaik dengan cepat dan
                mudah!
                📩</p>
        </div>
        <div class="absolute w-full h-1/3   bg-gradient-to-t !from-gray-100 !to-transparent right-0 bottom-0 z-10">
        </div>
    </div>
    <div class="relative px-4 md:!px-40 w-full z-20">
        <div class="rounded-md bg-white p-3 shadow grid grid-cols-1 md:!grid-cols-3 -translate-y-1/3 md:!-translate-y-1/2">
            <div class="bg-primary-500 w-full rounded-lg p-6 text-white space-y-10 relative overflow-hidden">
                <div>
                    <h1 class="text-lg">Informasi kontak</h1>
                    <p class="text-sm text-white">Jangan ragu untuk menghubungi kami</p>
                </div>
                <div class="space-y-2 text-white">
                    <div class="flex items-center gap-2 ">
                        <div class="flex rounded-full h-5 w-5 justify-center items-center border border-white">
                            <i class="ph-fill ph-whatsapp-logo text-sm"></i>
                        </div>
                        <a href="" class="text-xs">
                            <p>+6285342677431</p>
                        </a>

                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex rounded-full h-5 w-5 justify-center items-center border border-white">
                            <i class="ph-fill ph-instagram-logo text-sm"></i>
                        </div>
                        <div class="flex rounded-full h-5 w-5 justify-center items-center border border-white">
                            <i class="ph-fill ph-tiktok-logo text-sm"></i>
                        </div>
                        <a href="" class="text-xs">
                            <p>akela_printis</p>
                        </a>

                    </div>
                </div>
                <div class="space-y-10 z-20 relative">


                    <div class="flex items-center gap-2  ">

                        <i class="ph-fill ph-envelope text-2xl"></i>

                        <a href="" class="text-xs">
                            <p>akelaprintis@gmail.com</p>
                        </a>
                    </div>
                    <div class="flex items-center gap-2 z-20 ">

                        <i class="ph-fill ph-map-pin text-2xl"></i>

                        <a href="" class="text-xs">
                            <p>Kera-kera, Tamalanrea, Makassar</p>
                        </a>
                    </div>
                </div>
                <div
                    class="h-52 w-52 from-primary-400 to-primary-500 absolute bottom-0 right-0 bg-linear-to-br rounded-full translate-x-10 translate-y-10 z-10">
                </div>
            </div>
            <div class="col-span-2 p-4 md:!p-10">
                <form id="contactForm" class="space-y-6 mt-5">
                    <!-- Nama & Email -->
                    <div class="grid grid-cols-1 md:!grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-600 font-medium mb-1">Your Name</label>
                            <input type="text" id="name"
                                class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-200"
                                placeholder="John Trangely" required>
                        </div>
                        <div>
                            <label class="block text-gray-600 font-medium mb-1">Your Email</label>
                            <input type="email" id="email"
                                class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-200"
                                placeholder="hello@domain.com">
                        </div>
                    </div>

                    <!-- Subjek -->
                    <div>
                        <label class="block text-gray-600 font-medium mb-1">Your Subject</label>
                        <input type="text" id="subject"
                            class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-200"
                            placeholder="I want to hire you quickly" required>
                    </div>

                    <!-- Pesan -->
                    <div>
                        <label class="block text-gray-600 font-medium mb-1">Message</label>
                        <textarea id="message" class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-200" rows="4"
                            placeholder="Write here your message" required></textarea>
                    </div>

                    <hr class="border-gray-300">

                    <!-- Tombol Kirim -->
                    <button type="button" onclick="sendToWhatsApp()"
                        class="w-full bg-primary-500 text-white p-3 rounded-lg font-semibold hover:bg-primary-600 transition">Send
                        Message</button>
                </form>
            </div>
        </div>
    </div>
    <div class=" px-4 md:!px-40  -translate-y-2/3 md:!-translate-y-1/2">
        <div class="border-primary-500 border shadow rounded-lg overflow-hidden h-100">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.8765267223343!2d119.47962137353862!3d-5.123590051857591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefdf012bcbf4f%3A0x997012db116e4c0a!2sAkela%20printis!5e0!3m2!1sen!2sid!4v1743095706465!5m2!1sen!2sid"
                width="100%" height="100%" style="border:2px;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
@endsection
