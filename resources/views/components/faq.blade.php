<div class="flex flex-col px-4 md:!px-20 gap-10 pb-20 md:!flex-row mt-20 "  id="faq">
    <div class=" space-y-10 w-full md:!w-2/5">
        <h1 class="text-4xl md:text-5xl text-gray-900 font-bold text-center md:!text-start">Ada yang ingin <span class="text-primary-500"> ditanyakan? </span></h1>
        <p class="text-sm text-gray-600 text-center md:!text-start ">Jangan khawatir! Kami telah mengumpulkan pertanyaan yang paling sering diajukan
            agar kamu bisa mendapatkan jawaban dengan cepat. Jika masih ada yang belum jelas, tim kami siap membantu!
        </p>
        {{-- <p class=" p-4 rounded-md border-0 md:hidden !border-l-2 border-gray-500 bg-white  w-full md:!w-3/5 text-sm text-gray-500">Jangan khawatir! Kami telah mengumpulkan pertanyaan yang paling sering diajukan
            agar kamu bisa mendapatkan jawaban dengan cepat. Jika masih ada yang belum jelas, tim kami siap membantu!
        </p> --}}

    </div>
    <section class="w-full md:!w-3/5 px-4">
        <div class="space-y-4">
            <div class="border-b pb-2">
                <button class="w-full text-left flex justify-between items-center py-2 font-medium"
                    onclick="toggleFAQ(1)">
                    Apa layanan yang ditawarkan?
                    <span class="icon">+</span>
                </button>
                <p id="faq1" class="hidden text-gray-600">Kami menawarkan layanan percetakan skripsi, offset, dan
                    layanan
                    flowebox.</p>
            </div>
            <div class="border-b pb-2">
                <button class="w-full text-left flex justify-between items-center py-2 font-medium"
                    onclick="toggleFAQ(2)">
                    Apakah tersedia layanan delivery?
                    <span class="icon">+</span>
                </button>
                <p id="faq2" class="hidden text-gray-600">Ya, kami menyediakan layanan delivery. Khusus daerah
                    sekitar Unhas terdapat gratis ongkir jika pemesanan di atas 15rb Rupiah. Daerah diluar unhas akan
                    mengikuti tarif Gosend, Grab, dll, sedangkan daerah sekitaran Unhas saat pemesanan dibawah 15rb akan
                    dikenakan ongkir 5rb Rupiah.
                </p>
            </div>
            <div class="border-b pb-2">
                <button class="w-full text-left flex justify-between items-center py-2 font-medium"
                    onclick="toggleFAQ(3)">
                    Bagaimana cara memesan?
                    <span class="icon">+</span>
                </button>
                <p id="faq3" class="hidden text-gray-600">Anda bisa memesan melalui website kami, menghubungi
                    whatsapp, atau datang langsung
                    ke toko. Pesanan di atas 50rb Rupiah harus melakukan pelunasan terlebih dahulu sebelum pesanan dapat
                    diproses. Terdapat gratis ongkir untuk daerah Unhas untuk pemesanan di atas 15rb Rupiah</p>
            </div>
            <div class="border-b pb-2">
                <button class="w-full text-left flex justify-between items-center py-2 font-medium"
                    onclick="toggleFAQ(4)">
                    Berapa lama proses percetakan skripsi?
                    <span class="icon">+</span>
                </button>
                <p id="faq4" class="hidden text-gray-600">Percetakan skripsi termasuk print dan jilid biasanya
                    memakan waktu 1-3 jam tergantung jumlah halaman dan berapa rangkap yang akan dijilid.</p>
            </div>
            <div class="border-b pb-2">
                <button class="w-full text-left flex justify-between items-center py-2 font-medium"
                    onclick="toggleFAQ(5)">
                    Metode pembayaran apa saja yang diterima?
                    <span class="icon">+</span>
                </button>
                <p id="faq5" class="hidden text-gray-600">akela printis menerima berbagai jenis pembayaran termasuk
                    e-wallet, bank transfer ( BRI, BNI, Mandiri, CIMB, dan BSI), Qris, dan tunai</p>
            </div>
            <div class="border-b pb-2">
                <button class="w-full text-left flex justify-between items-center py-2 font-medium"
                    onclick="toggleFAQ(6)">
                    Apakah ada diskon untuk pemesanan dalam jumlah banyak?
                    <span class="icon">+</span>
                </button>
                <p id="faq6" class="hidden text-gray-600">Ya, terdapat diskon untuk pemesanan dalam jumlah banyak,
                    misalkan pencetakan laporan lengkap, laporan akhir, skripsi, dan lain-lain dalam jumlah banyak</p>
            </div>
        </div>
    </section>
</div>
<script>
    function toggleFAQ(id) {
        let answer = document.getElementById('faq' + id);
        let icon = answer.previousElementSibling.querySelector('.icon');
        if (answer.classList.contains('hidden')) {
            answer.classList.remove('hidden');
            icon.textContent = '-';
        } else {
            answer.classList.add('hidden');
            icon.textContent = '+';
        }
    }
</script>
