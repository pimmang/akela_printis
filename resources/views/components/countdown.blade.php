<div class="flex items-center flex-col  text-center p-4 pt-10 md:!p-20 gap-8 md:gap-10">
    <h1 class="text-2xl  lg:!text-4xl font-bold align-middle w-full md:!w-3/4">Buruan! <span
            class="text-primary-500">Kesempatan</span> Ini Hanya Berlaku Hingga Waktu Habis! </h1>
    <section class="flex flex-col items-center justify-center w-full h-fit bg-gray-100">
        <div class="flex md:gap-5 justify-between w-full md:!justify-center" id="countdown">
            <div class="flex flex-col items-center bg-white p-5 md:!p-8 rounded-lg shadow">
                <div id="days" class="text-2xl md:!text-6xl font-bold text-gray-900"></div>
                <p class="text-primaray-600 font-bold text-xs md:text-sm">Hari</p>
            </div>

            <div class="text-2xl md:!text-6xl font-bold text-gray-900  py-8">:</div>
            <div class="flex flex-col items-center bg-white p-5 md:!p-8 rounded-lg shadow">
                <div id="hours" class="text-2xl md:!text-6xl font-bold text-gray-900"></div>
                <p class="text-primray-600 font-bold text-xs md:text-sm">Jam</p>
            </div>

            <div class="text-2xl md:!text-6xl font-bold text-gray-900 py-8">:</div>
            <div class="flex flex-col items-center bg-white p-5 md:!p-8 rounded-lg shadow">
                <div id="minutes" class="text-2xl md:!text-6xl font-bold text-gray-900"></div>
                <p class="text-primray-600 font-bold text-xs md:text-sm">Menit</p>
            </div>

            <div class="text-2xl md:!text-6xl font-bold text-gray-900 py-8">:</div>
            <div class="flex flex-col items-center bg-white p-5 md:!p-8 rounded-lg shadow">
                <div id="seconds" class="text-2xl md:!text-6xl font-bold text-gray-900"></div>
                <p class="text-primray-600 font-bold text-xs md:text-sm">Detik</p>
            </div>

        </div>

    </section>
    @if (isset($event))
        <div class="w-full md:w-1/2 text-center">
            <p class=" align-middle mb-8 "> Segera lakukan pemesanan atau amankan slotmu! dan dapatkan diskon sampai
            </p>
            <div class="flex w-full justify-center">
                <p class=" align-middle font-black text-8xl text-primary-500">
                    {{ $event->diskon }}</p>
                <p class=" align-middle font-black text-xl text-primary-500">%</p>
            </div>
        </div>
    @else
        <div class="w-full md:w-1/2 text-center">
            <p class=" align-middle mb-8 "> Mohon maaf
            </p>
            <div class="flex w-full justify-center">
                <p class=" align-middle font-black text-3xl md:!text-6xl  text-primary-500">
                    Event telah berakhir</p>
                {{-- <p class=" align-middle font-black text-xl text-primary-500">%</p> --}}
            </div>
        </div>
    @endif

    <div class="flex gap-4 flex-col-reverse  justify-center w-full text-sm md:flex-row">
        <a href="https://wa.me/6285342677431?text=Halo Kak, Mau tanya-tanya dulu"
            class="w-full md:!w-fit  transition-all text-success border hover:bg-success hover:border-success hover:text-white font-medium p-2 px-4 rounded-md text-center  flex items-center gap-1 justify-center"><i
                class="ph-fill ph-whatsapp-logo text-xs md:!text-lg"></i>Tanya minka</a>
        <button data-modal-target="amankanSlot" data-modal-toggle="amankanSlot" {{ isset($event) ? '' : 'disabled' }}
            class="w-full md:!w-fit  cursor-pointer border border-primary-600 text-primary-600 hover:bg-primary-300 disabled:bg-primary-300 disabled:text-white disabled:border-primary-300 hover:text-white hover:border-primary-300 transition-all p-2 px-4 rounded-md text-center  flex items-center gap-1 justify-center"><i
                class="ph-fill ph-list-plus text-xs md:!text-lg"></i>Amankan Slot Sekarang, Bayar Nanti!</button>
        <a href="#simulasi" onclick="muncul()"
            class="w-full md:!w-fit  bg-primary-500 hover:bg-primary-300 transition-all p-2 px-4 rounded-md text-center text-white flex items-center gap-1 justify-center"><i
                class="ph-fill ph-list-plus text-xs md:!text-lg"></i> Pesan sekarang</a>

    </div>
    <!-- Main modal -->
    <div id="amankanSlot" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0  z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-xl  max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm ">
                <!-- Modal header -->
                <div
                    class="flex items-start text-start gap-5 justify-between p-4 md:p-5 border-b rounded-t  border-gray-200">
                    <div class="space-y-5">
                        <h3 class="text-xl font-semibold text-gray-900 ">
                            Amankan slot diskonmu sekarang, pesan saat butuh
                        </h3>
                        <p class="text-gray-500 text-sm">Berlaku untuk satu kali transaksi</p>
                    </div>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                        data-modal-hide="amankanSlot">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5" action="/booking-diskon" method="post">
                    @csrf
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="nama"
                                class="block mb-2 text-sm font-medium text-gray-900 text-start ">Nama</label>
                            <input type="text" name="nama" id="nama"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                                placeholder="Masukan nama kamu" required autocomplete="off">
                        </div>
                        <div class="col-span-2">
                            <label for="wa" class="block mb-2 text-sm font-medium text-gray-900 text-start ">No.
                                Whatsapp</label>
                            <input type="number" name="wa" id="wa"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                                placeholder="085342677431" required autocomplete>
                        </div>

                        <input type="number" name="event" id="event" value="{{ $event->id }}" hidden
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                            placeholder="085342677431" required autocomplete>
                    </div>
                    <button type="submit"
                        class="text-white w-full justify-center inline-flex items-center bg-primary-600 hover:bg-primary-500 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Amankan sekarang
                    </button>
                </form>
            </div>
        </div>
    </div>

</div>



<script>
    let countdownElement = document.getElementById("countdown");

    function startCountdown(targetDate) {
        let now = new Date().getTime(); // Waktu sekarang dalam milidetik
        let targetTime = new Date(targetDate).getTime(); // Waktu target dalam milidetik
        let timeLeft = (targetTime - now) / 1000; // Selisih dalam detik

        function updateCountdown() {
            let days = Math.floor(timeLeft / (24 * 60 * 60));
            let hours = Math.floor((timeLeft % (24 * 60 * 60)) / (60 * 60));
            let minutes = Math.floor((timeLeft % (60 * 60)) / 60);
            let seconds = Math.floor(timeLeft % 60);



            document.getElementById("days").textContent = `${String(days).padStart(2, '0')}`;
            document.getElementById("hours").textContent = `${String(hours).padStart(2, '0')}`;
            document.getElementById("minutes").textContent = `${String(minutes).padStart(2, '0')}`;
            document.getElementById("seconds").textContent = `${String(seconds).padStart(2, '0')}`;



            if (timeLeft <= 0) {
                clearInterval(countdownInterval);
                countdownElement.innerHTML =
                    `
                <div class="flex flex-col items-center bg-white p-5 md:!p-8 rounded-lg shadow">
                <div id="days" class="text-2xl md:!text-6xl font-bold text-gray-900">00</div>
                <p class="text-primray-600 font-bold text-xs md:text-sm">Hari</p>
            </div>

            <div class="text-2xl md:!text-6xl font-bold text-gray-900  py-8">:</div>
            <div class="flex flex-col items-center bg-white p-5 md:!p-8 rounded-lg shadow">
                <div id="hours" class="text-2xl md:!text-6xl font-bold text-gray-900">00</div>
                <p class="text-primray-600 font-bold text-xs md:text-sm">Jam</p>
            </div>

            <div class="text-2xl md:!text-6xl font-bold text-gray-900 py-8">:</div>
            <div class="flex flex-col items-center bg-white p-5 md:!p-8 rounded-lg shadow">
                <div id="minutes" class="text-2xl md:!text-6xl font-bold text-gray-900">00</div>
                <p class="text-primray-600 font-bold text-xs md:text-sm">Menit</p>
            </div>

            <div class="text-2xl md:!text-6xl font-bold text-gray-900 py-8">:</div>
            <div class="flex flex-col items-center bg-white p-5 md:!p-8 rounded-lg shadow">
                <div id="seconds" class="text-2xl md:!text-6xl font-bold text-gray-900">00</div>
                <p class="text-primray-600 font-bold text-xs md:text-sm">Detik</p>
            </div>

                `;
            }
            timeLeft--;
        }

        updateCountdown(); // Jalankan sekali agar tidak ada delay pertama
        let countdownInterval = setInterval(updateCountdown, 1000);
    }

    document.addEventListener("DOMContentLoaded", function() {
        @if (isset($event))
            let target = new Date("{{ $event->event_berakhir_at }}").getTime();
        @else
            let target = new Date("March 30, 2025 18:08:00").getTime();
        @endif

        let now = new Date().getTime();
        if (now < target) {
            startCountdown(target);
        } else {
            countdownElement.innerHTML =
                `
               <div class="flex flex-col items-center bg-white p-5 md:!p-8 rounded-lg shadow">
                <div id="days" class="text-2xl md:!text-6xl font-bold text-gray-900">00</div>
                <p class="text-primray-600 font-bold text-xs md:text-sm">Hari</p>
            </div>

            <div class="text-2xl md:!text-6xl font-bold text-gray-900  py-8">:</div>
            <div class="flex flex-col items-center bg-white p-5 md:!p-8 rounded-lg shadow">
                <div id="hours" class="text-2xl md:!text-6xl font-bold text-gray-900">00</div>
                <p class="text-primray-600 font-bold text-xs md:text-sm">Jam</p>
            </div>

            <div class="text-2xl md:!text-6xl font-bold text-gray-900 py-8">:</div>
            <div class="flex flex-col items-center bg-white p-5 md:!p-8 rounded-lg shadow">
                <div id="minutes" class="text-2xl md:!text-6xl font-bold text-gray-900">00</div>
                <p class="text-primray-600 font-bold text-xs md:text-sm">Menit</p>
            </div>

            <div class="text-2xl md:!text-6xl font-bold text-gray-900 py-8">:</div>
            <div class="flex flex-col items-center bg-white p-5 md:!p-8 rounded-lg shadow">
                <div id="seconds" class="text-2xl md:!text-6xl font-bold text-gray-900">00</div>
                <p class="text-primray-600 font-bold text-xs md:text-sm">Detik</p>
            </div>

                `;
        }

    });
</script>
