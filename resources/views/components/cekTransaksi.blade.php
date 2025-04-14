  <div class="w-full grid  grid-cols-1 md:grid-cols-2 gap-4 ">
      <div class="flex flex-col items-center bg-white rounded-lg p-4 w-full">
          <div class="flex flex-col gap-2 w-full h-full">
              <div id="dropArea"
                  class="flex flex-grow h-full items-center justify-center w-full border-2 border-primary-400 border-dashed rounded-lg p-8  bg-primary-100/70">
                  <div class="rounded-lg flex items-center flex-col justify-center gap-3">
                      <div class=" relative">
                          <i class="ph-fill ph-file-plus text-6xl text-gray-500"></i>
                          <div
                              class="absolute bottom-0 right-0  translate-y-2 translate-x-1 rounded-full h-8 w-8 bg-primary-700 ">
                              <div class="flex items-center justify-center w-full h-full"><i
                                      class="ph-fill ph-upload-simple  text-lg text-white"></i>
                              </div>
                          </div>
                      </div>
                      <input type="file" name="fileInput" id="fileInput" class="hidden" accept="application/pdf">
                      <p class="text-center">Drag and Drop file here or <label for="fileInput"
                              class="underline font-semibold text-primary-700 cursor-pointer">Choose File</label></p>

                  </div>
              </div>
              <div class="flex justify-between  text-gray-500 w-full mb-2">
                  <p>Supported format : PDF</p>
                  <p>Maximum size : - </p>
              </div>
          </div>
          <div id="namaFile"
              class="flex gap-3 bg-white  rounded-lg w-full transition-all duration-500  h-fit items-center relative">

          </div>
      </div>
      {{-- <div class="d-flex flex-column align-items-center justify-content-center hidden">
          <p>Masukan Jumlah Rangkap</p>
          <input id="rangkap" type="text" class="border border-black" />
      </div> --}}
      <div class="flex flex-col  gap-2 w-full">

          <div class="rounded-lg bg-white grid grid-cols-1 md:grid-cols-2  p-4 gap-6">
              <div class="md:col-span-2">
                  <h1 class="font-semibold text-lg">Atur dulu ya
                  </h1>
                  <p class="text-gray-500 text-sm">Biar makin sesuai sama kebutuhanmu (isi yang diperlukan saja)</p>
              </div>

              <div class="">
                  <div class="flex items-start md:items-center justify-between mb-2">
                      <p class="block  text-sm font-medium text-gray-900">Timbal baliknya mulai dari?</p>
                      <i data-modal-target="default-modal" data-modal-toggle="default-modal"
                          class="ph ph-question "></i>
                      <!-- Main modal -->
                      <div id="default-modal" tabindex="-1" aria-hidden="true"
                          class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0  z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                          <div class="relative p-4 w-2xl  max-h-full">
                              <!-- Modal content -->
                              <div class="relative bg-white rounded-lg shadow-sm ">
                                  <!-- Modal header -->
                                  <div
                                      class="flex items-center justify-between p-4 md:p-5 border-b rounded-t  border-gray-200">
                                      <h3 class="text-xl font-semibold text-gray-900 ">
                                          Petunjuk
                                      </h3>
                                      <button type="button"
                                          class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                                          data-modal-hide="default-modal">
                                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                              fill="none" viewBox="0 0 14 14">
                                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                          </svg>
                                          <span class="sr-only">Close modal</span>
                                      </button>
                                  </div>
                                  <!-- Modal body -->
                                  <div class="p-4 md:p-5 space-y-4">
                                      <img src="/img/petunjuk halaman.png" alt="petunjuk" class="w-full">
                                      <p class="text-base leading-relaxed text-gray-500 ">
                                          Masukan halaman pdf seperti di atas ya, bukan halaman filenya.
                                      </p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="flex justify-between items-center gap-8">
                      <input type="number" id="tb" name="dari" disabled
                          class="bg-white border  border-gray-300 disabled:bg-gray-50 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
                          placeholder="Halaman (Kosongkan jika tidak TB)" />
                  </div>
                  {{-- <div class="flex justify-between items-center gap-8">
                      <label for="jilid" class="block mb-2 text-sm font-medium text-gray-900">Print dari halaman berapa</label>
                      <input type="text" id="halaman" name="halaman"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
                          placeholder="Halaman (Kosongkan jika tidak TB)" required />
                  </div> --}}
              </div>


              <div>
                  <label for="rangkap" class="block mb-2 text-sm font-medium text-gray-900">Printnya berapa
                      rangkap?</label>
                  <input type="number" id="rangkap" name="dari" disabled value="1"
                      class="bg-white border border-gray-300 disabled:bg-gray-50 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
                      placeholder="Jumlah rangkap print" />
              </div>
              <div>
                  <label for="jilid" class="block mb-2 text-sm font-medium text-gray-900">Jenis jilid</label>
                  <select id="jilid" disabled
                      class="bg-white border disabled:bg-gray-50 border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 accent-primary-500">
                      <option selected value="tidak">Tidak dijilid</option>
                      <option value="Skripsi">Hard Cover (Skripsi)</option>
                      <option value="Antero">Antero biasa</option>
                      <option value="Antero Laminating">Antero laminating</option>
                      <option value="Lakban">Mika + Lakban</option>
                  </select>
              </div>
              <div>
                  <label for="rangkapJilid" class="block mb-2 text-sm font-medium text-gray-900">Jilidnya berapa
                      rangkap?</label>
                  <input type="number" id="rangkapJilid" name="dari" disabled
                      class="bg-white border disabled:bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
                      placeholder="Jumlah jilid" />
              </div>
              <div>
                  <p class="block mb-2 text-sm font-medium text-gray-900">Jenis kertas?</p>
                  <div
                      class=" w-full bg-white border border-gray-300 h-fit rounded-lg grid grid-cols-2 overflow-hidden">
                      <div class="flex items-center border-0 border-r border-r-gray-300">
                          <input checked id="default-radio-3" type="radio" value="HVS" name="kertas"
                              class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 focus:ring-primary-500 hidden peer ">
                          <label for="default-radio-3"
                              class=" text-sm font-medium p-2.5 text-gray-500 peer-checked:bg-primary-500 peer-checked:text-white transition duration-200 w-full">HVS</label>
                      </div>
                      <div class="flex items-center">
                          <input id="default-radio-4" type="radio" value="Glossy" name="kertas"
                              class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 focus:ring-primary-500 hidden peer ">
                          <label for="default-radio-4"
                              class="text-sm font-medium p-2.5 text-gray-500 peer-checked:bg-primary-500 peer-checked:text-white transition duration-200 w-full">Glossy</label>
                      </div>
                  </div>
              </div>
              <div>
                  <p class="block mb-2 text-sm font-medium text-gray-900">Tambah burning CD?</p>
                  <div
                      class="w-full bg-white border border-gray-300 h-fit rounded-lg grid grid-cols-2 overflow-hidden">
                      <div class="flex items-center">
                          <input checked id="default-radio-2" type="radio" value="0" name="cd"
                              class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 focus:ring-primary-500 hidden peer ">
                          <label for="default-radio-2"
                              class="text-sm font-medium p-2.5 text-gray-500 peer-checked:bg-primary-500 peer-checked:text-white transition duration-200 w-full ">Tidak</label>
                      </div>
                      <div class="flex items-center">
                          <input id="default-radio-1" type="radio" value="1" name="cd"
                              class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 focus:ring-primary-500 hidden peer ">
                          <label for="default-radio-1"
                              class="text-sm font-medium p-2.5 text-gray-500 peer-checked:bg-primary-500 peer-checked:text-white transition duration-200 w-full ">Tambah</label>
                      </div>
                  </div>
              </div>

              <div>
                  <label for="rangkapCD" class="block mb-2 text-sm font-medium text-gray-900">CD-nya berapa
                      buah?</label>
                  <input type="number" id="rangkapCD" name="dari" disabled
                      class="bg-white border disabled:bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
                      placeholder="Jumlah CD" />
              </div>




              <div class="flex justify-end md:col-span-2 gap-4">
                  <button data-modal-target="hasil-modal" data-modal-toggle="hasil-modal" disabled
                      id="lihatHasilButton"
                      class="p-3 text-sm w-full bg-primary-500 text-white rounded-md hover:bg-primary-300 disabled:cursor-default disabled:bg-primary-300 transition-all cursor-pointer ">Lihat
                      hasil</button>
              </div>
              <div id="hasil-modal" tabindex="-1" aria-hidden="true"
                  class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0  z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                  <div class="relative p-4 w-2xl  max-h-full">
                      <!-- Modal content -->
                      <div class="relative bg-white rounded-lg shadow-sm ">
                          <!-- Modal header -->
                          <button type="button"
                              class="text-gray-400 absolute right-4 top-4 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                              data-modal-hide="hasil-modal">
                              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                  fill="none" viewBox="0 0 14 14">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                              </svg>
                              <span class="sr-only">Close modal</span>
                          </button>

                          <!-- Modal body -->
                          <div class="w-full col-span-2 rounded-lg bg-white shadow p-4 flex items-center flex-col"
                              id="result">

                          </div>
                      </div>
                  </div>
              </div>

          </div>


      </div>

      {{-- <div class="col-span-2 flex justify-center w-full">

      </div> --}}





      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
      </script>

      <script>
          let fileInput = document.getElementById("fileInput");
          let resultDiv = document.getElementById("result");
          let dropArea = document.getElementById("dropArea");
          let rangkap = document.getElementById("rangkap");
          let halamanTB = document.getElementById("tb");
          let jilid = document.getElementById("jilid");
          let namaFile = document.getElementById("namaFile");
          let lihatHasil = document.getElementById('lihatHasilButton');
          let kertasPilihan = 'HVS';
          let cd = document.querySelectorAll('input[name="cd"]');
          let kertas = document.querySelectorAll('input[name="kertas"]');

          let mauCD = 0;
          let jumlahCD = document.getElementById("rangkapCD");
          let jumlahJilid = document.getElementById("rangkapJilid");


          validasiJumlah = document.querySelectorAll('input[type="number"]');

          validasiJumlah.forEach(inputan => {
              inputan.addEventListener("input", function() {
                  if (this.value < 0) {
                      this.value = 0;
                  }
              });
          });



          function getSelectedCDValue() {
              let selectedValue = document.querySelector('input[name="cd"]:checked').value;
              return selectedValue;
          }

          function getSelectedKertasValue() {
              let kertasSelectedValue = document.querySelector('input[name="kertas"]:checked').value;
              return kertasSelectedValue;
          }


          let totalPages = 0;
          let uploadedFile = null;
          // let jenisJilid = "tidak";

          function hapusFile() {
              fileInput.value = "";

              namaFile.classList.add('fade-out');
              uploadedFile = null;

              setTimeout(() => {
                  namaFile.classList.remove('p-4');
                  namaFile.classList.add('p-0');
                  namaFile.classList.remove('border');
                  namaFile.classList.add('border-0');
                  namaFile.innerHTML = ""

              }, 500);
              tambahDisable();
          }

          function applyFilter() {
              let pageNum = halamanTB.value;
              if (!uploadedFile) {
                  alert('Upload file dulu dong :)');
              } else {
                  alert('gitu dong :)');
              }
          }

          function reset() {
              // uploadedFile = null;
          }


          function showLoading() {
              namaFile.classList.add('p-4');
              namaFile.classList.remove('fade-out');
              lihatHasil.setAttribute('disabled', 'true');
              namaFile.classList.add('border');
              namaFile.classList.add('border-gray-400');
              namaFile.innerHTML =
                  `
                 <div id="loading" class="flex items-center justify-center w-full h-10  rounded-lg   ">
                  <div class="flex items-start justify-center space-x-4 mb-4  px-5">
                      <div class="relative h-0 w-[15px] bounceball"></div>
                      <div class="relative h-0 w-[15px] bounceball"></div>
                      <div class="relative h-0 w-[15px] bounceball"></div>
                  </div>
              </div>
              `

          }



          function updateResult(totalPages, TTBColorPages, TTBBlackWhitePages, TBColorPages, TBBlackWhitePages, jenisJilid,
              kertas,
              jumlahJilid, mauCD, jumlahCD, multiplier =
              1) {
              let total = totalPages * multiplier;
              let tidakTimbalBalikBerwarna = TTBColorPages * multiplier;
              let tidakTimbalBalikHitamPutih = TTBBlackWhitePages * multiplier;
              let timbalBalikBerwarna = TBColorPages * multiplier;
              let timbalBalikHitamPutih = TBBlackWhitePages * multiplier;
              let jenisKertas = kertas;
              let hargaJilid = 0;
              let ongkosKirim = 0;
              //   alert(jenisKertas);

              let hargaHitamPutih = 0;
              let hargaBerwarna = 0;
              let hargaTBHitamPutih = 0;
              let hargaTBBerwarna = 0;
              let hargaCD = 14000;

              if (jenisKertas == "HVS") {
                  hargaHitamPutih = 350;
                  hargaBerwarna = 500;
                  hargaTBHitamPutih = 300;
                  hargaTBBerwarna = 450;
              }
              if (jenisKertas == "Glossy") {
                  hargaHitamPutih = 1200;
                  hargaBerwarna = 1400;
                  hargaTBHitamPutih = 1000;
                  hargaTBBerwarna = 1200;
                  hargaCD = 0;
              }

              let totalLembarPerJilid = totalPages;
              if (timbalBalikBerwarna || timbalBalikHitamPutih) {
                  totalLembarPerJilid = Math.ceil((TBColorPages + TBBlackWhitePages) / 2) +
                      TTBColorPages +
                      TTBBlackWhitePages;
              }

              if (jenisJilid == 'Skripsi') {
                  if (totalLembarPerJilid < 50) {
                      hargaJilid = 20000;
                  } else if (totalLembarPerJilid > 50 && totalLembarPerJilid < 80) {
                      hargaJilid = 22000;
                  } else if (totalLembarPerJilid > 80 && totalLembarPerJilid < 150) {
                      hargaJilid = 25000;
                  } else if (totalLembarPerJilid > 150) {
                      hargaJilid = 30000;
                  }
              } else if (jenisJilid == 'Antero') {
                  if (totalLembarPerJilid < 100) {
                      hargaJilid = 8000;
                  } else if (totalLembarPerJilid > 100 && totalLembarPerJilid < 120) {
                      hargaJilid = 10000;
                  } else if (totalLembarPerJilid > 120 && totalLembarPerJilid < 150) {
                      hargaJilid = 13000;
                  } else if (totalLembarPerJilid > 150) {
                      hargaJilid = 16000;
                  }
              } else if (jenisJilid == 'Antero Laminating') {
                  if (totalLembarPerJilid < 100) {
                      hargaJilid = 12000;
                  } else if (totalLembarPerJilid > 100 && totalLembarPerJilid < 120) {
                      hargaJilid = 14000;
                  } else if (totalLembarPerJilid > 120 && totalLembarPerJilid < 150) {
                      hargaJilid = 16000;
                  } else if (totalLembarPerJilid > 150) {
                      hargaJilid = 20000;
                  }
              } else if (jenisJilid == 'Lakban') {
                  hargaJilid = 4000;
              }


              let HargaTidakTimbalBalikBerwarna = tidakTimbalBalikBerwarna * hargaBerwarna;
              let HargaTidakTimbalBalikHitamPutih = tidakTimbalBalikHitamPutih * hargaHitamPutih;
              let HargaTimbalBalikBerwarna = timbalBalikBerwarna * hargaTBBerwarna;
              let HargaTimbalBalikHitamPutih = timbalBalikHitamPutih * hargaTBHitamPutih;
              let totalHargaJilid = (jumlahJilid || multiplier) * hargaJilid;
              let totalHargaCD = 0;
              if (mauCD == 1) {
                  totalHargaCD = jumlahCD * hargaCD;
              }

              let subTotalHarga = HargaTidakTimbalBalikBerwarna + HargaTidakTimbalBalikHitamPutih + HargaTimbalBalikBerwarna +
                  HargaTimbalBalikHitamPutih + totalHargaJilid + totalHargaCD;
              if (subTotalHarga < 15000) {
                  ongkosKirim = 5000;
              }
              let banyakDiskon = {{ $diskon }} / 100;
              let diskon = Math.round(subTotalHarga * banyakDiskon);
              let totalHarga = subTotalHarga - diskon + ongkosKirim;

              resultDiv.innerHTML = `
              <h1 class="text-center w-full font-bold text-4xl text-gray-900 border-0  pt-6">
                  Rp ${totalHarga.toLocaleString("id-ID")}</h1>
                  <p class = "text-sm text-gray-500 pb-6">Kertas : ${jenisKertas}</p>
              <div class="w-full flex flex-col gap-2 mt-2">
                  <hr class="border-dashed">
                   ${HargaTidakTimbalBalikHitamPutih > 0 ? `
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <div class="text-sm">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <p class="text-gray-700 font-medium text-sm">Print Hitam Putih </p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <div class="flex justify-between items-center">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <p class="text-gray-500 font-medium"> ${tidakTimbalBalikHitamPutih} x ${hargaHitamPutih.toLocaleString("id-ID")} </p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <p class="text-gray-500 font-medium"> ${HargaTidakTimbalBalikHitamPutih.toLocaleString("id-ID")}</p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 `:''}
                          ${HargaTidakTimbalBalikBerwarna > 0 ? `
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <div class="text-sm">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <p class="text-gray-700 font-medium text-sm">Print Berwarna </p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <div class="flex justify-between items-center">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <p class="text-gray-500 font-medium"> ${tidakTimbalBalikBerwarna} x ${hargaBerwarna.toLocaleString("id-ID")}</p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <p class="text-gray-500 font-medium">${HargaTidakTimbalBalikBerwarna.toLocaleString("id-ID")}</p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            `:''}
                  ${HargaTimbalBalikHitamPutih > 0 ? `
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <div class="text-sm">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <p class="text-gray-700 font-medium text-sm">Print Hitam Putih (Timbal Balik) </p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <div class="flex justify-between items-center">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <p class="text-gray-500 font-medium"> ${timbalBalikHitamPutih} x ${hargaTBHitamPutih.toLocaleString("id-ID")}</p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <p class="text-gray-500 font-medium">${HargaTimbalBalikHitamPutih.toLocaleString("id-ID")}</p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            `:''}
                         ${HargaTimbalBalikHitamPutih > 0 ? `
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <div class="text-sm">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <p class="text-gray-700 font-medium text-sm">Print Berwarna (Timbal Balik) </p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <div class="flex justify-between items-center">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <p class="text-gray-500 font-medium"> ${timbalBalikBerwarna} x ${hargaTBBerwarna.toLocaleString("id-ID")}</p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <p class="text-gray-500 font-medium"> ${HargaTimbalBalikBerwarna.toLocaleString("id-ID")}</p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      `:''}
                    ${totalHargaJilid > 0 ? `
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <div class="text-sm">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <p class="text-gray-700 font-medium text-sm">Jilid ${jilid.value}</p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <div class="flex justify-between items-center">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <p class="text-gray-500 font-medium"> ${jumlahJilid} x ${hargaJilid.toLocaleString("id-ID")}</p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <p class="text-gray-500 font-medium"> ${totalHargaJilid.toLocaleString("id-ID")}</p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ` : ''}
                    ${totalHargaCD > 0 ? `
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <div class="text-sm">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <p class="text-gray-700 font-medium text-sm">Burning CD</p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <div class="flex justify-between items-center">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <p class="text-gray-500 font-medium"> ${jumlahCD} x 14.000</p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <p class="text-gray-500 font-medium"> ${totalHargaCD.toLocaleString("id-ID")}</p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ` : ''}
                  <hr class="border-dashed">
                  <div>
                      <div class="flex justify-between items-center">
                          <p class="text-gray-700 font-medium"> Subtotal</p>
                          <p class="text-gray-700 font-medium"> ${subTotalHarga.toLocaleString("id-ID")}</p>
                      </div>
                      <div class="flex justify-between items-center">
                          <p class="text-gray-700 font-medium">Diskon ({{ $diskon }}%)</p>
                          <p class="text-gray-700 font-medium"> -${diskon.toLocaleString("id-ID")}</p>
                      </div>
                      <div class="flex justify-between items-center">
                          <p class="text-gray-700 font-medium">Ongkos kirim</p>
                          <p class="text-gray-700 font-medium"> ${ongkosKirim.toLocaleString("id-ID")}</p>
                      </div>
                  </div>
                  <hr class="border-dashed">
                  <div class="flex justify-between items-center">
                      <p class="text-gray-700 font-medium"> Total</p>
                      <p class="text-gray-700 font-medium"> ${totalHarga.toLocaleString("id-ID")}</p>
                  </div>
              </div>
              <a href="#" id = "whatsappLink"
                  class="w-full mt-2 bg-green-500 hover:bg-green-300 transition-all p-2 rounded-md text-center text-white flex items-center gap-1 justify-center"><i
                      class="ph-fill ph-whatsapp-logo text-lg"></i> Oper ke Minka</a>
                      
          `;

              document.getElementById("whatsappLink").addEventListener("click", function() {
                  let nomorWA = "6285342677431"; // Ganti dengan nomor tujuan (format internasional, tanpa "+")
                  let formatRupiah = (number) => new Intl.NumberFormat("id-ID", {
                      style: "currency",
                      currency: "IDR",
                      minimumFractionDigits: 0,
                      maximumFractionDigits: 0
                  }).format(number);

                  let pesan = "Halo kak, saya ingin melakukan pemesanan:\n\n";

                  if (HargaTidakTimbalBalikHitamPutih > 0) {
                      pesan +=
                          `*Print tidak timbal balik hitam putih:* ${tidakTimbalBalikHitamPutih} x 350 = ${formatRupiah(HargaTidakTimbalBalikHitamPutih)}\n`;
                  }
                  if (HargaTidakTimbalBalikBerwarna > 0) {
                      pesan +=
                          `*Print tidak timbal balik berwarna:* ${tidakTimbalBalikBerwarna} x 500 = ${formatRupiah(HargaTidakTimbalBalikBerwarna)}\n`;
                  }
                  if (HargaTimbalBalikBerwarna > 0) {
                      pesan +=
                          `*Print timbal balik berwarna:* ${timbalBalikBerwarna} x 450 = ${formatRupiah(HargaTimbalBalikBerwarna)}\n`;
                  }
                  if (HargaTimbalBalikHitamPutih > 0) {
                      pesan +=
                          `*Print timbal balik hitam putih:* ${timbalBalikHitamPutih} x 300 = ${formatRupiah(HargaTimbalBalikHitamPutih)}\n`;
                  }
                  if (totalHargaJilid > 0) {
                      pesan +=
                          `*Jilid ${jilid.value}:* ${jumlahJilid} x ${formatRupiah(hargaJilid)} = ${formatRupiah(totalHargaJilid)}\n`;
                  }
                  if (totalHargaCD > 0) {
                      pesan += `*Burning CD:* ${jumlahCD} x ${formatRupiah(14000)} = ${formatRupiah(totalHargaCD)}\n`;
                  }

                  // Tambahkan subtotal, diskon, dan total jika ada
                  if (subTotalHarga > 0) {
                      pesan += `\n*Subtotal:* ${formatRupiah(subTotalHarga)}\n`;
                  }
                  if (diskon > 0) {
                      pesan += `*Diskon:* ${formatRupiah(diskon)}\n`;
                  }
                  if (ongkosKirim > 0) {
                      pesan += `*Ongkos kirim:* ${formatRupiah(ongkosKirim)} (area Unhas dan sekitarnya)\n`;
                  }
                  if (ongkosKirim == 0) {
                      pesan += `*Ongkos kirim: Gratis (area Unhas dan sekitarnya)* \n`;
                  }
                  if (totalHarga > 0) {
                      pesan += `*Total:* ${formatRupiah(totalHarga)}\n\n`;
                  }
                  if (halamanTB.value) {
                      pesan += `*NB: Timbal balik mulai dari halaman ${halamanTB.value}*\n`;
                  } else {
                      pesan += `*NB: Tidak timbal balik ${multiplier} rangkap*\n`;
                  }


                  pesan += `\nJenis kertas : ${jenisKertas}`;
                  pesan += "\nMohon konfirmasinya. Terima kasih!";
                  let encodedPesan = encodeURIComponent(pesan);
                  let whatsappURL = `https://wa.me/${nomorWA}?text=${encodedPesan}`;
                  window.open(whatsappURL, "_blank");
              });

          }

          function updateNamaPdf(nama, ukuran, total) {


              namaFile.innerHTML = `
              <img src="/img/pdf.svg" alt="" class="h-10 w-10">
              <div>
                  <p>${nama}</p>
                  <p class="text-gray-500 text-xs">${ukuran} / ${total} Halaman</p>
              </div>
              <i class="ph ph-x absolute top-4 right-4 cursor-pointer" onclick="hapusFile()"></i>
              `
          }

          async function analyzePDF(file, halaman) {
              if (file.type !== "application/pdf") {
                  alert("Masukkan file PDF yang valid.");
                  return;
              }
              showLoading();
              let fileReader = new FileReader();

              fileReader.onload = async function() {
                  const typedArray = new Uint8Array(this.result);
                  const pdf = await pdfjsLib.getDocument(typedArray).promise;
                  totalPages = pdf.numPages;
                  let TTBColorPages = 0;
                  let TTBBlackWhitePages = 0;
                  let TBColorPages = 0;
                  let TBBlackWhitePages = 0;

                  if (halamanTB.value == "") {
                      for (let pageNum = halaman; pageNum <= totalPages; pageNum++) {
                          const page = await pdf.getPage(pageNum);
                          const viewport = page.getViewport({
                              scale: 1.0
                          });
                          const canvas = document.createElement("canvas");
                          const context = canvas.getContext("2d");

                          canvas.width = viewport.width;
                          canvas.height = viewport.height;

                          await page.render({
                              canvasContext: context,
                              viewport
                          }).promise;

                          if (isPageColor(context)) {
                              TTBColorPages++;
                          } else {
                              TTBBlackWhitePages++;
                          }
                      }
                  } else {
                      for (let pageNum = 1; pageNum < halaman; pageNum++) {
                          const page = await pdf.getPage(pageNum);
                          const viewport = page.getViewport({
                              scale: 1.0
                          });
                          const canvas = document.createElement("canvas");
                          const context = canvas.getContext("2d");

                          canvas.width = viewport.width;
                          canvas.height = viewport.height;

                          await page.render({
                              canvasContext: context,
                              viewport
                          }).promise;

                          if (isPageColor(context)) {
                              TTBColorPages++;
                          } else {
                              TTBBlackWhitePages++;
                          }
                      }
                      for (let pageNum = halaman; pageNum <= totalPages; pageNum++) {
                          const page = await pdf.getPage(pageNum);
                          const viewport = page.getViewport({
                              scale: 1.0
                          });
                          const canvas = document.createElement("canvas");
                          const context = canvas.getContext("2d");

                          canvas.width = viewport.width;
                          canvas.height = viewport.height;

                          await page.render({
                              canvasContext: context,
                              viewport
                          }).promise;

                          if (isPageColor(context)) {
                              TBColorPages++;
                          } else {
                              TBBlackWhitePages++;
                          }
                      }
                  }



                  updateResult(totalPages, TTBColorPages, TTBBlackWhitePages, TBColorPages, TBBlackWhitePages,
                      jilid.value, kertasPilihan, jumlahJilid.value, mauCD, jumlahCD.value);

                  rangkap.addEventListener("input", () => {
                      jumlahJilid.value = rangkap.value;
                      let multiplier = parseInt(rangkap.value) || 1;
                      updateResult(totalPages, TTBColorPages, TTBBlackWhitePages, TBColorPages,
                          TBBlackWhitePages, jilid.value, kertasPilihan, jumlahJilid.value, mauCD,
                          jumlahCD.value,
                          multiplier);
                  });
                  jilid.addEventListener('change', () => {
                      //   alert('ubah jilid');
                      let multiplier = parseInt(rangkap.value) || 1;
                      jumlahJilid.removeAttribute("disabled");
                      jumlahJilid.value = rangkap.value;
                      updateResult(totalPages, TTBColorPages, TTBBlackWhitePages, TBColorPages,
                          TBBlackWhitePages, jilid.value, kertasPilihan, jumlahJilid.value, mauCD,
                          jumlahCD.value,
                          multiplier);
                  });
                  cd.forEach(radio => {
                      radio.addEventListener("change", function() {
                          mauCD = getSelectedCDValue();
                          let multiplier = parseInt(rangkap.value) || 1;
                          if (mauCD == 1) {
                              jumlahCD.removeAttribute("disabled");
                              jumlahCD.classList.add("bg-white");
                              jumlahCD.classList.remove("bg-gray-50");
                              jumlahCD.value = 1;
                              updateResult(totalPages, TTBColorPages, TTBBlackWhitePages,
                                  TBColorPages,
                                  TBBlackWhitePages, jilid.value, kertasPilihan, jumlahJilid
                                  .value, kertasPilihan, mauCD,
                                  jumlahCD.value,
                                  multiplier);
                          }

                      });
                  });
                  kertas.forEach(radio => {
                      radio.addEventListener("change", function() {
                          let multiplier = parseInt(rangkap.value) || 1;
                          kertasPilihan = getSelectedKertasValue();
                          updateResult(totalPages, TTBColorPages, TTBBlackWhitePages,
                              TBColorPages,
                              TBBlackWhitePages, jilid.value, kertasPilihan, jumlahJilid
                              .value, mauCD,
                              jumlahCD.value,
                              multiplier);

                      });
                  });

                  jumlahJilid.addEventListener('input', () => {
                      let multiplier = parseInt(rangkap.value) || 1;
                      updateResult(totalPages, TTBColorPages, TTBBlackWhitePages, TBColorPages,
                          TBBlackWhitePages, jilid.value, kertasPilihan, jumlahJilid.value, mauCD,
                          jumlahCD.value,
                          multiplier);
                  });
                  jumlahCD.addEventListener('input', () => {
                      let multiplier = parseInt(rangkap.value) || 1;
                      updateResult(totalPages, TTBColorPages, TTBBlackWhitePages, TBColorPages,
                          TBBlackWhitePages, jilid.value, kertasPilihan, jumlahJilid.value, mauCD,
                          jumlahCD.value,
                          multiplier);
                  });
                  updateNamaPdf(uploadedFile.name, formatFileSize(uploadedFile.size), totalPages);
                  hapusDisable();

              };

              fileReader.readAsArrayBuffer(file);
          }

          function isPageColor(context, threshold = 0.01, colorTolerance = 10) {
              const imageData = context.getImageData(0, 0, context.canvas.width, context.canvas.height);
              const data = imageData.data;
              const totalPixels = data.length / 4;

              let colorPixelCount = 0;

              for (let i = 0; i < data.length; i += 4) {
                  const r = data[i];
                  const g = data[i + 1];
                  const b = data[i + 2];

                  // Cek apakah piksel ini dianggap "berwarna"
                  if (Math.abs(r - g) > colorTolerance || Math.abs(r - b) > colorTolerance || Math.abs(g - b) >
                      colorTolerance) {
                      colorPixelCount++;
                  }
              }

              // Hitung persentase piksel berwarna
              const colorRatio = colorPixelCount / totalPixels;

              // Jika jumlah piksel berwarna melebihi threshold, anggap gambar berwarna
              return colorRatio > threshold;
          }


          fileInput.addEventListener("change", () => {
              uploadedFile = fileInput.files[0];
              analyzePDF(uploadedFile, 1);
          })

          function hapusDisable() {
              halamanTB.removeAttribute("disabled");
              jilid.removeAttribute("disabled");
              rangkap.removeAttribute("disabled");
              lihatHasil.removeAttribute('disabled');
          }

          function tambahDisable() {
              halamanTB.setAttribute("disabled", "true");
              jilid.setAttribute("disabled", "true");
              rangkap.setAttribute("disabled", "true");
              lihatHasil.setAttribute('disabled', "true");
              jumlahJilid.setAttribute('disabled', "true");
              jumlahCD.setAttribute('disabled', "true");
          }

          halamanTB.addEventListener("input", () => {
              addFilter();
          })


          function addFilter() {
              // console.log(parseInt(halamanTB.value))
              if (halamanTB.value == "") {
                  analyzePDF(uploadedFile, 1)
              } else {
                  analyzePDF(uploadedFile, parseInt(halamanTB.value))
              }
          }

          function formatFileSize(size) {
              if (size < 1024) {
                  return size + " B"; // Byte
              } else if (size < 1024 * 1024) {
                  return (size / 1024).toFixed(2) + " KB"; // Kilobyte
              } else {
                  return (size / (1024 * 1024)).toFixed(2) + " MB"; // Megabyte
              }
          }

          function dropIcon() {

              dropArea.innerHTML =
                  `
             <div class="rounded-lg flex items-center flex-col justify-center gap-3">
                    <div class="rotate-180">
                        <i class="ph-fill ph-hand-deposit text-6xl text-gray-500"></i>
                    </div>
                    <p>Lepaskan saya..</p>
             </div>
            `
          }

          function dragIcon() {
              dropArea.innerHTML =
                  `
             <div class="rounded-lg flex items-center flex-col justify-center gap-3">
                      <div class=" relative">
                          <i class="ph-fill ph-file-plus text-6xl text-gray-500"></i>
                          <div
                              class="absolute bottom-0 right-0  translate-y-2 translate-x-1 rounded-full h-8 w-8 bg-primary-700 ">
                              <div class="flex items-center justify-center w-full h-full"><i
                                      class="ph-fill ph-upload-simple  text-lg text-white"></i>
                              </div>
                          </div>
                      </div>
                      <input type="file" name="fileInput" id="fileInput" class="hidden" accept="application/pdf">
                      <p>Drag and Drop file here or <label for="fileInput"
                              class="underline font-semibold text-primary-700 cursor-pointer">Choose File</label></p>

                  </div>
            `
          }

          dropArea.addEventListener("dragover", (event) => {
              event.preventDefault();
              dropArea.classList.add("bg-primary-200/70");
              dropIcon();
          });

          dropArea.addEventListener("dragleave", () => {
              dropArea.classList.remove("bg-primary-200/70");
              dragIcon();
          });

          dropArea.addEventListener("drop", (event) => {
              event.preventDefault();
              dropArea.classList.remove("bg-primary-200/70");
              dragIcon();
              uploadedFile = event.dataTransfer.files[0];
              // updateNamaPdf(uploadedFile.name, formatFileSize(uploadedFile.size));
              hapusDisable();
              analyzePDF(uploadedFile, 1);
          });
      </script>

  </div>
