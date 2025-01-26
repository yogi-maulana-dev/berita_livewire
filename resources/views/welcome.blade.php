<x-frontend-layout>

    <div class="popupAdsHome fixed w-screen bottom-0 flex justify-center items-end z-999 bg-transparent">
        <a href="https://wa.me/qr/SDU5OTAAKNITC1"
            class="max-w-[90vw] lg:max-w-[80vw] flex flex-col justify-center items-center relative z-999">
            <div
                class="closePopupHome p-1 bg-red-600 rounded-full absolute -top-10 right-0 hover:bg-red-800 hover:text-white cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M18 6l-12 12"></path>
                    <path d="M6 6l12 12"></path>
                </svg>
            </div>
            <img class="max-h-[90vh] w-auto" src="laravel-filemanager/photos/IKLAN/IMG-20241118-WA0000.jpg"
                alt="">
        </a>
    </div>

    <!-- {{-- parallax image mobile and tablet --}} -->


    <div class="">
        <h5 class="text-center font-xs font-normal text-white bg-bluelampro dark:bg-neutral-900 sm:hidden">
            Geser ke atas
        </h5>
    </div>
    <div class="sticky top-0 z-20 max-h-32.5">
        <div class="flex justify-between items-center max-w-screen h-20 bg-white dark:bg-thdark px-2 md:px-10 lg:px-24">
            <div class="h-full inline-flex space-x-2 justify-items-center">
                <button id="menuBtn" class="p-2 hidden lg:block"><i
                        class="ti ti-menu-2 text-3xl text-bluelampro dark:text-redlampro"></i></button>
                <a aria-label="Back to homepage" href="index.html" class="h-full">
                    <img src="frontend/assets/img/logox.jpeg" alt="" class="block dark:hidden h-full" />
                    <img src="frontend/assets/img/dark-lampungpro.png" alt=""
                        class="hidden dark:block h-full" />
                </a>
            </div>
            <div class="inline-flex space-x-2">
                <button id="searchBtn" class="p-2 hidden lg:block"><i
                        class="ti ti-search text-3xl text-bluelampro dark:text-redlampro"></i></button>
                <a aria-label="go to lampung pro tv" href="video.html" class="p-2 hidden lg:block"><i
                        class="ti ti-video text-3xl text-bluelampro dark:text-redlampro"></i></a>
                <button id="lightBtn" class="p-2"><i class="ti ti-sun text-3xl text-redlampro"></i></button>
                <button id="darkBtn" class="p-2"><i class="ti ti-moon-stars text-3xl text-purple-500"></i></button>
                <button aria-label="toggle dark mode" id="mediaBtn" class="p-2"><i
                        class="ti ti-circle-half-2 text-3xl text-redlampro dark:text-purple-500"></i></button>
            </div>
        </div>

        <!-- {{-- menu --}} -->
        <!-- <div class="flex overflow-auto max-w-screen md:justify-center font-extrabold text-sm uppercase px-2 bg-white dark:bg-gray-600 text-black dark:text-white space-x-3 h-8 border border-solid border-black">
                    <a href="https://Taring.co/kategori/news/Ekonomi" class="flex text-center items-center whitespace-nowrap">Ekonomi</a>
                    <a href="https://Taring.co/kategori/news/Olahraga" class="flex text-center items-center whitespace-nowrap">Olahraga</a>
                    <a href="https://Taring.co/kategori/news/Rileks" class="flex text-center items-center whitespace-nowrap">Rileks</a>
                    <a href="https://Taring.co/kategori/news/Politik" class="flex text-center items-center whitespace-nowrap">Politik</a>
                    <a href="https://Taring.co/kategori/news/Kemitraan" class="flex text-center items-center whitespace-nowrap">Kemitraan</a>
                    <a href="https://Taring.co/kategori/news/Humaniora" class="flex text-center items-center whitespace-nowrap">Humaniora</a>
                    <a href="https://Taring.co/kategori/news/Lampung Raya" class="flex text-center items-center whitespace-nowrap">Lampung Raya</a>
                    <a href="https://Taring.co/kategori/news/Nasional" class="flex text-center items-center whitespace-nowrap">Nasional</a>
            </div> -->

        <!-- {{-- menu custom --}} -->
        <div
            class="flex overflow-auto max-w-screen md:justify-center font-extrabold text-sm uppercase px-2 bg-white dark:bg-gray-600 text-black dark:text-white space-x-3 h-8">
            <a href="kategori/news/News%20Update/index.html"
                class="flex text-center items-center whitespace-nowrap">NewsCC</a>
            <a href="kategori/news/Ekbis/index.html" class="flex text-center items-center whitespace-nowrap">Ekbis</a>

            {{--  <a href="kategori/news/SOSOK/index.html" class="flex text-center items-center whitespace-nowrap">Sosok</a>
            <a href="kategori/news/Produk%20Halal/index.html"
                class="flex text-center items-center whitespace-nowrap">Halal</a>
            <a href="kategori/news/Jalan%20Jalan/index.html"
                class="flex text-center items-center whitespace-nowrap">Pelesir</a>
            <a href="kategori/news/Olahraga/index.html"
                class="flex text-center items-center whitespace-nowrap">Olahraga</a>
            <a href="kategori/news/Nasional/index.html"
                class="flex text-center items-center whitespace-nowrap">Nasional</a>
            <a href="kategori/news/Lampung%20Raya/index.html"
                class="flex text-center items-center whitespace-nowrap">Daerah</a>
            <a href="kategori/news/Otomotif/index.html"
                class="flex text-center items-center whitespace-nowrap">Otomotif</a>  --}}
        </div>


        <marquee direction="left" class="bg-white text-black text-xs">
            <a
                href="news/dosen-polinela-prodi-hortikultura-berhasil-kembangkan-budidaya-tanaman-ciplukan-dengan-metode-vegetatif.html">
                Dosen Polinela Prodi Hortikultura Berhasil Kembangkan Budidaya Tanaman Ciplukan dengan Metode
                Vegetatif
            </a>
            <a href="news/smkn-rawajitu-timur-sukses-laksanakan-ujian-semester-ganjil-berbasis-teknologi-android.html">
                SMKN Rawajitu Timur Sukses Laksanakan Ujian Semester Ganjil Berbasis Teknologi Android </a>
            <a href="news/kapolres-lampung-selatan-beri-tali-asih-ke-petugas-pengamanan-di-pilkada-2024.html">
                Kapolres Lampung Selatan Beri Tali Asih ke Petugas Pengamanan di Pilkada 2024 </a>
            <a
                href="news/jasad-pria-tak-dikenal-ditemukan-di-bekas-pos-sekuriti-pt-lambang-jaya-natar-ini-ciri-cirinya.html">
                Jasad Pria tak Dikenal Ditemukan di Bekas Pos Sekuriti PT Lambang Jaya Natar, ini Ciri-cirinya </a>
            <a
                href="news/november-2024-bps-lampung-catat-ekonomi-lampung-alami-inflasi-0-42-persen-harga-bawang-inflasi-tertinggi.html">
                November 2024, BPS Lampung Catat Ekonomi Lampung Alami Inflasi 0,42 Persen, Harga Bawang Inflasi
                Tertinggi </a>
            <a
                href="news/ini-alasan-kamu-lanjutkan-kuliah-magister-bahasa-inggris-di-universitas-teknokrat-indonesia.html">
                Ini Alasan Kamu Lanjutkan Kuliah Magister Bahasa Inggris di Universitas Teknokrat Indonesia </a>
            <a href="news/gelombang-laut-tinggi-dan-angin-kencang-bpbd-imbau-nelayan-lampung-selatan-tak-melaut.html">
                Gelombang Laut Tinggi dan Angin Kencang, BPBD Imbau Nelayan Lampung Selatan tak Melaut </a>
            <a
                href="news/mahasiswa-universitas-teknokrat-indonesia-prodi-teknologi-informasi-dilatih-jiwa-kepemimpinan.html">
                Mahasiswa Universitas Teknokrat Indonesia Prodi Teknologi Informasi Dilatih Jiwa Kepemimpinan </a>
            <a
                href="news/universitas-teknokrat-indonesia-dan-grand-elty-krakatoa-resort-teken-mou-dalam-peningkatan-kapasitas-pendidikan.html">
                Universitas Teknokrat Indonesia dan Grand Elty Krakatoa Resort Teken MoU dalam Peningkatan Kapasitas
                Pendidikan </a>
            <a
                href="news/kenal-di-aplikasi-oknum-anggota-brimob-di-lampung-terlibat-kasus-asusila-ke-remaja-putri-asal-tanggamus.html">
                Kenal di Aplikasi, Oknum Anggota Brimob di Lampung Terlibat Kasus Asusila ke Remaja Putri Asal
                Tanggamus
            </a>
        </marquee>
    </div>
    <div id="mobileSearch"
        class="hidden z-40 bg-white/95 dark:bg-black/95 dark:text-white h-screen p-4 fixed inset-x-0 top-0 -translate-y-full transition-all">
        <form action="https://Taring.co/cari" method="get" class="flex flex-col gap-10">
            <div class="flex justify-end">
                <a href="#" id="closeSearch"
                    class="border-2 border-redlampro text-redlampro hover:bg-redlampro hover:text-black rounded-md p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M18 6l-12 12" />
                        <path d="M6 6l12 12" />
                    </svg>
                </a>
            </div>
            <div
                class="p-2 px-4 border-2 dark:border-redlampro border-bluelampro rounded-lg shadow-lg w-full space-x-2 flex items-center">
                <input type="text" id="mTextField" name="title"
                    class="w-full bg-transparent text-base focus:outline-none" placeholder="Cari...">
                <button aria-label="cari" class="focus:outline-none" type="submit"><i
                        class="ti ti-search dark:text-redlampro text-bluelampro"></i></button>
            </div>
        </form>

        <!-- <div class="p-2 my-2">
    <h4 class="uppercase border-b-4 border-redlampro w-fit font-bold">Pencarian Terkini</h4>
    <div class="flex flex-col space-y-4 py-4">
      <div class="inline-flex items-center space-x-4"><button aria-label="buka berita" class="ti ti-trash text-red-600"></button>
        <h5>BBM Naik</h5>
      </div>
      <div class="inline-flex items-center space-x-4"><button aria-label="buka berita" class="ti ti-trash text-red-600"></button>
        <h5>Minyak Masih Saja Mahal</h5>
      </div>
      <div class="inline-flex items-center space-x-4"><button aria-label="buka berita" class="ti ti-trash text-red-600"></button>
        <h5>Lampung Memanggil</h5>
      </div>
      <div class="inline-flex items-center space-x-4"><button aria-label="buka berita" class="ti ti-trash text-red-600"></button>
        <h5>E-Voting Pringsewu</h5>
      </div>
    </div>
  </div> -->
    </div>
    <div id="gridView"
        class="z-40 w-70 no-scrollbar pb-10 bg-white/95 dark:bg-black/95 dark:text-white h-screen p-4 fixed top-0 -translate-x-full transition-all overflow-auto">
        <div class="flex justify-end">
            <a href="#" id="closeMenu"
                class="border-2 border-redlampro text-redlampro hover:bg-redlampro hover:text-black rounded-md p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M18 6l-12 12" />
                    <path d="M6 6l12 12" />
                </svg>
            </a>
        </div>
        <div class="my-2 text-lg">
            <h4 class="uppercase border-b-4 border-redlampro w-fit font-bold">Kanal</h4>
            <div class="py-4 flex flex-col gap-2">
                <!-- {{-- menu custom --}} -->
                <a href="kategori/news/News%20Update/index.html"
                    class="flex text-center items-center whitespace-nowrap">NewDDs</a>

                <div class="group flex flex-col">
                    <p class="flex flex-row cursor-pointer">
                        Ekonomi <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M6 9l6 6l6 -6" />
                        </svg>
                    </p>
                    <div class="hidden z-[99] top-0 left-0 group-hover:flex flex-col bg-white dark:bg-gray-600">
                        <a href="kategori/news/AGROBISNIS.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">AGROBISNIS</a>
                        <a href="kategori/news/EKBIS.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">EKBIS</a>
                        <a href="kategori/news/Lampung%20Terang.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Lampung
                            Terang</a>
                        <a href="kategori/news/Lampung%20Sehat.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Lampung
                            Sehat</a>
                        <a href="kategori/news/Lowongan%20Kerja.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Lowongan
                            Kerja</a>
                    </div>
                </div>
                <div class="flex">
                    <a href="kategori/news/Olahraga.html"
                        class="flex text-center items-center whitespace-nowrap">Olahraga</a>
                </div>
                <div class="group flex flex-col">
                    <p class="flex flex-row cursor-pointer">
                        Rileks <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M6 9l6 6l6 -6" />
                        </svg>
                    </p>
                    <div class="hidden z-[99] top-0 left-0 group-hover:flex flex-col bg-white dark:bg-gray-600">
                        <a href="kategori/news/Jalan%20Jalan.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Jalan
                            Jalan</a>
                        <a href="kategori/news/Produk%20Halal.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Produk
                            Halal</a>
                        <a href="kategori/news/Sosok.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Sosok</a>
                        <a href="kategori/news/Paket%20Wisata.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Paket
                            Wisata</a>
                        <a href="kategori/news/Hotel.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Hotel</a>
                        <a href="kategori/news/Love%20Story.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Love
                            Story</a>
                    </div>
                </div>
                <div class="flex">
                    <a href="kategori/news/Politik.html"
                        class="flex text-center items-center whitespace-nowrap">Politik</a>
                </div>
                <div class="group flex flex-col">
                    <p class="flex flex-row cursor-pointer">
                        Kemitraan <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M6 9l6 6l6 -6" />
                        </svg>
                    </p>
                    <div class="hidden z-[99] top-0 left-0 group-hover:flex flex-col bg-white dark:bg-gray-600">
                        <a href="kategori/news/Advetorial.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Advetorial</a>
                        <a href="kategori/news/Malahayati.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Malahayati</a>
                        <a href="kategori/news/Teknokrat.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Teknokrat</a>
                        <a href="kategori/news/BPJS%20Kesehatan.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">BPJS
                            Kesehatan</a>
                        <a href="kategori/news/Kominfo%20LamSel.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Kominfo
                            LamSel</a>
                        <a href="kategori/news/Kominfo%20Lampung.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Kominfo
                            Lampung</a>
                        <a href="kategori/news/Sosok%20Midi.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Sosok
                            Midi</a>
                        <a href="kategori/news/RSUDAM.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">RSUDAM</a>
                        <a href="kategori/news/Honda.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Honda</a>
                        <a href="kategori/news/Bank%20Lampung.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Bank
                            Lampung</a>
                        <a href="kategori/news/Darmajaya.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Darmajaya</a>
                        <a href="kategori/news/Unila.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Unila</a>
                        <a href="kategori/news/Polinela.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Polinela</a>
                        <a href="kategori/news/Universitas%20Terbuka.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Universitas
                            Terbuka</a>
                        <a href="kategori/news/PLN.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">PLN</a>
                        <a href="kategori/news/Kominfo%20Balam.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Kominfo
                            Balam</a>
                    </div>
                </div>
                <div class="group flex flex-col">
                    <p class="flex flex-row cursor-pointer">
                        Humaniora <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M6 9l6 6l6 -6" />
                        </svg>
                    </p>
                    <div class="hidden z-[99] top-0 left-0 group-hover:flex flex-col bg-white dark:bg-gray-600">
                        <a href="kategori/news/Kesehatan.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Kesehatan</a>
                        <a href="kategori/news/Pendidikan.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Pendidikan</a>
                        <a href="kategori/news/Gaya%20Hidup.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Gaya
                            Hidup</a>
                        <a href="kategori/news/Lampung%20Bicara.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Lampung
                            Bicara</a>
                        <a href="kategori/news/Dialog%20Konstruksi.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Dialog
                            Konstruksi</a>
                    </div>
                </div>
                <div class="group flex flex-col">
                    <p class="flex flex-row cursor-pointer">
                        Lampung Raya <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M6 9l6 6l6 -6" />
                        </svg>
                    </p>
                    <div class="hidden z-[99] top-0 left-0 group-hover:flex flex-col bg-white dark:bg-gray-600">
                        <a href="kategori/news/Bandar%20Lampung.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Bandar
                            Lampung</a>
                        <a href="kategori/news/Lampung%20Selatan.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Lampung
                            Selatan</a>
                        <a href="kategori/news/Pesawaran.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Pesawaran</a>
                        <a href="kategori/news/Pringsewu.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Pringsewu</a>
                        <a href="kategori/news/Lampung%20Barat.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Lampung
                            Barat</a>
                        <a href="kategori/news/Lampung%20Utara.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Lampung
                            Utara</a>
                        <a href="kategori/news/Lampung%20Tengah.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Lampung
                            Tengah</a>
                        <a href="kategori/news/Lampung%20Timur.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Lampung
                            Timur</a>
                        <a href="kategori/news/Mesuji.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Mesuji</a>
                        <a href="kategori/news/Pesisir%20Barat.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Pesisir
                            Barat</a>
                        <a href="kategori/news/Tanggamus.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Tanggamus</a>
                        <a href="kategori/news/Tulang%20Bawang.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Tulang
                            Bawang</a>
                        <a href="kategori/news/Tubaba.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Tubaba</a>
                        <a href="kategori/news/Way%20Kanan.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Way
                            Kanan</a>
                        <a href="kategori/news/Metro.html"
                            class="flex text-center items-center px-5 py-2 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap ">Metro</a>
                    </div>
                </div>
                <div class="flex">
                    <a href="kategori/news/Nasional.html"
                        class="flex text-center items-center whitespace-nowrap">Nasional</a>
                </div>
            </div>
        </div>
    </div>
    <div class="z-50 fixed bottom-0 w-screen h-14 bg-white dark:bg-scdark flex justify-evenly lg:hidden">
        <a aria-label="Kembali Ke Homepage" media="all" href="index.html" id="mHomeBtn"
            class="p-2 px-3 my-auto"><i class="ti ti-home text-3xl text-bluelampro dark:text-redlampro"></i></a>
        <button aria-label="Tombol Pencarian" id="mSearchBtn" class="p-2 px-3 my-auto"><i
                class="ti ti-search text-3xl text-bluelampro dark:text-redlampro"></i></button>
        <button aria-label="Buka Menu" id="mGridBtn" class="p-2 px-3 my-auto"><i
                class="ti ti-layout-grid text-3xl text-bluelampro dark:text-redlampro"></i></button>
        <a aria-label="Pergi Menuju Lampung Pro TV" media="all" href="video.html" id="mVideoBtn"
            class="p-2 px-3 my-auto"><i class="ti ti-video text-3xl text-bluelampro dark:text-redlampro"></i></a>
    </div>
    <div class="flex flex-col place-content-center bg-gray-100 dark:bg-thdark">
        <!-- {{-- left page test on md and above view --}} -->
        <div class="flex md:flex-row place-content-center bg-gray-100 dark:bg-thdark">
            <div class="w-full md:w-7/12 lg:w-3/6 bg-gray-100 dark:bg-thdark lg:border-r-4 border-transparent mt-3">
                <!-- @yield('content') -->
                <!-- {{-- horizontal scroll headline --}} -->
                <div class="my-3 bg-gray-100 dark:bg-thdark">
                    <style>
                        #lgHeadline {
                            background-image: url('laravel-filemanager/photos/WhatsApp%20Image%202024-12-02%20at%2020.07.06.jpg');
                            border-radius: 9px;
                        }

                        @media only screen and (min-width: 768px) {
                            #lgHeadline {
                                background-image: url('laravel-filemanager/photos/WhatsApp%20Image%202024-12-02%20at%2020.07.06.jpg');
                            }
                        }
                    </style>

                    <a href="news/dosen-polinela-prodi-hortikultura-berhasil-kembangkan-budidaya-tanaman-ciplukan-dengan-metode-vegetatif.html"
                        id="lgHeadline"
                        class="transition-all ascpect-video lg:flex flex-col justify-between visible mx-4 hidden lg:mx-2 lg:visible h-90 bg-no-repeat bg-cover bg-center rounded-lg">
                        <div
                            class="transition-all ascpect-video lg:flex flex-col justify-between hidden lg:visible h-90 bg-no-repeat bg-cover bg-center rounded-lg">
                            <h3
                                class="font-normal text-white text-lg w-fit h-fit px-2 m-6 bg-redlampro rounded-full uppercase">
                                Headline</h3>
                            <p id="titleHeadline"
                                class="transition-all font-light text-3xl p-6 text-white rounded-b-lg"
                                style='background: rgb(0,0,0);
background: -moz-linear-gradient(0deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.9472163865546218) 34%, rgba(0,0,0,0.6615021008403361) 69%, rgba(0,0,0,0) 100%);
background: -webkit-linear-gradient(0deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.9472163865546218) 34%, rgba(0,0,0,0.6615021008403361) 69%, rgba(0,0,0,0) 100%);
background: linear-gradient(0deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.9472163865546218) 34%, rgba(0,0,0,0.6615021008403361) 69%, rgba(0,0,0,0) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#000000",endColorstr="#000000",GradientType=1);'>
                                Dosen Polinela Prodi Hortikultura Berhasil Kembangkan Budidaya Tanaman Ciplukan
                                dengan
                                Metode Vegetatif</p>
                        </div>
                    </a>

                    <div class="hidden lg:flex lg:visible flex-row p-2 space-x-2 rounded-lg justify-center">
                        <a aria-label="foto berita Dosen Polinela Prodi Hortikultura Berhasil Kembangkan Budidaya Tanaman Ciplukan dengan Metode Vegetatif"
                            media="all"
                            href="news/dosen-polinela-prodi-hortikultura-berhasil-kembangkan-budidaya-tanaman-ciplukan-dengan-metode-vegetatif.html"
                            onmouseover="headlineID(`url('laravel-filemanager/photos/WhatsApp%20Image%202024-12-02%20at%2020.07.06.jpg')`, `Dosen Polinela Prodi Hortikultura Berhasil Kembangkan Budidaya Tanaman Ciplukan dengan Metode Vegetatif`,`https://Taring.co/news/dosen-polinela-prodi-hortikultura-berhasil-kembangkan-budidaya-tanaman-ciplukan-dengan-metode-vegetatif`)"
                            class="flex w-1/6 h-20 bg-no-repeat bg-cover bg-center rounded-lg shadow-sm"
                            style="background-image: url('laravel-filemanager/photos/WhatsApp%20Image%202024-12-02%20at%2020.07.06.jpg')"></a>
                        <a aria-label="foto berita SMKN Rawajitu Timur Sukses Laksanakan Ujian Semester Ganjil Berbasis Teknologi Android"
                            media="all"
                            href="news/smkn-rawajitu-timur-sukses-laksanakan-ujian-semester-ganjil-berbasis-teknologi-android.html"
                            onmouseover="headlineID(`url('laravel-filemanager/photos/33/Nafian/IMG-20241202-WA0029.jpg')`, `SMKN Rawajitu Timur Sukses Laksanakan Ujian Semester Ganjil Berbasis Teknologi Android`,`https://Taring.co/news/smkn-rawajitu-timur-sukses-laksanakan-ujian-semester-ganjil-berbasis-teknologi-android`)"
                            class="flex w-1/6 h-20 bg-no-repeat bg-cover bg-center rounded-lg shadow-sm"
                            style="background-image: url('laravel-filemanager/photos/33/Nafian/IMG-20241202-WA0029.jpg')"></a>
                        <a aria-label="foto berita Kapolres Lampung Selatan Beri Tali Asih ke Petugas Pengamanan di Pilkada 2024"
                            media="all"
                            href="news/kapolres-lampung-selatan-beri-tali-asih-ke-petugas-pengamanan-di-pilkada-2024.html"
                            onmouseover="headlineID(`url('laravel-filemanager/photos/35/Lamsel/IMG-20241202-WA0020.jpg')`, `Kapolres Lampung Selatan Beri Tali Asih ke Petugas Pengamanan di Pilkada 2024`,`https://Taring.co/news/kapolres-lampung-selatan-beri-tali-asih-ke-petugas-pengamanan-di-pilkada-2024`)"
                            class="flex w-1/6 h-20 bg-no-repeat bg-cover bg-center rounded-lg shadow-sm"
                            style="background-image: url('laravel-filemanager/photos/35/Lamsel/IMG-20241202-WA0020.jpg')"></a>
                        <a aria-label="foto berita Jasad Pria tak Dikenal Ditemukan di Bekas Pos Sekuriti PT Lambang Jaya Natar, ini Ciri-cirinya"
                            media="all"
                            href="news/jasad-pria-tak-dikenal-ditemukan-di-bekas-pos-sekuriti-pt-lambang-jaya-natar-ini-ciri-cirinya.html"
                            onmouseover="headlineID(`url('laravel-filemanager/photos/LAMSEL1/02JASAD.jpg')`, `Jasad Pria tak Dikenal Ditemukan di Bekas Pos Sekuriti PT Lambang Jaya Natar, ini Ciri-cirinya`,`https://Taring.co/news/jasad-pria-tak-dikenal-ditemukan-di-bekas-pos-sekuriti-pt-lambang-jaya-natar-ini-ciri-cirinya`)"
                            class="flex w-1/6 h-20 bg-no-repeat bg-cover bg-center rounded-lg shadow-sm"
                            style="background-image: url('laravel-filemanager/photos/LAMSEL1/02JASAD.jpg')"></a>
                        <a aria-label="foto berita November 2024, BPS Lampung Catat Ekonomi Lampung Alami Inflasi 0,42 Persen, Harga Bawang Inflasi Tertinggi"
                            media="all"
                            href="news/november-2024-bps-lampung-catat-ekonomi-lampung-alami-inflasi-0-42-persen-harga-bawang-inflasi-tertinggi.html"
                            onmouseover="headlineID(`url('laravel-filemanager/photos/33/PKL/StickItImage_1733130414580.jpg')`, `November 2024, BPS Lampung Catat Ekonomi Lampung Alami Inflasi 0,42 Persen, Harga Bawang Inflasi Tertinggi`,`https://Taring.co/news/november-2024-bps-lampung-catat-ekonomi-lampung-alami-inflasi-0-42-persen-harga-bawang-inflasi-tertinggi`)"
                            class="flex w-1/6 h-20 bg-no-repeat bg-cover bg-center rounded-lg shadow-sm"
                            style="background-image: url('laravel-filemanager/photos/33/PKL/StickItImage_1733130414580.jpg')"></a>
                        <a aria-label="foto berita Ini Alasan Kamu Lanjutkan Kuliah Magister Bahasa Inggris di Universitas Teknokrat Indonesia"
                            media="all"
                            href="news/ini-alasan-kamu-lanjutkan-kuliah-magister-bahasa-inggris-di-universitas-teknokrat-indonesia.html"
                            onmouseover="headlineID(`url('laravel-filemanager/photos/Teknokrat/IMG-20240407-WA0039(1.html).jpg')`, `Ini Alasan Kamu Lanjutkan Kuliah Magister Bahasa Inggris di Universitas Teknokrat Indonesia`,`https://Taring.co/news/ini-alasan-kamu-lanjutkan-kuliah-magister-bahasa-inggris-di-universitas-teknokrat-indonesia`)"
                            class="flex w-1/6 h-20 bg-no-repeat bg-cover bg-center rounded-lg shadow-sm"
                            style="background-image: url('laravel-filemanager/photos/Teknokrat/IMG-20240407-WA0039(1.html).jpg')"></a>
                    </div>

                    <div class="flex gap-3 snap-x snap-mandatory overflow-x-auto px-3 py-2 no-scrollbar lg:hidden">
                        <a aria-label="lihat berita Dosen Polinela Prodi Hortikultura Berhasil Kembangkan Budidaya Tanaman Ciplukan dengan Metode Vegetatif"
                            media="all"
                            href="news/dosen-polinela-prodi-hortikultura-berhasil-kembangkan-budidaya-tanaman-ciplukan-dengan-metode-vegetatif.html"
                            class="snap-start scroll-mx-6 shrink-0 overflow-hidden cursor-pointer bg-cover rounded-lg w-50">
                            <div class="flex rounded-lg aspect-video bg-no-repeat bg-cover bg-center py-2"
                                style="background-image: url('laravel-filemanager/photos/WhatsApp%20Image%202024-12-02%20at%2020.07.06.jpg')">
                                <h5
                                    class="uppercase text-xs font-semibold text-white bg-redlampro h-fit ml-2 px-2 py-0.5 rounded-full">
                                    Headline</h5>
                            </div>
                            <h4 class="font-light text-black dark:text-white p-2 text-sm">Dosen Polinela Prodi
                                Hortikultura Berhasil Kembangkan Budidaya Tanaman Ciplukan...</h4>
                        </a>
                        <a aria-label="lihat berita SMKN Rawajitu Timur Sukses Laksanakan Ujian Semester Ganjil Berbasis Teknologi Android"
                            media="all"
                            href="news/smkn-rawajitu-timur-sukses-laksanakan-ujian-semester-ganjil-berbasis-teknologi-android.html"
                            class="snap-start scroll-mx-6 shrink-0 overflow-hidden cursor-pointer bg-cover rounded-lg w-50">
                            <div class="flex rounded-lg aspect-video bg-no-repeat bg-cover bg-center py-2"
                                style="background-image: url('laravel-filemanager/photos/33/Nafian/IMG-20241202-WA0029.jpg')">
                                <h5
                                    class="uppercase text-xs font-semibold text-white bg-redlampro h-fit ml-2 px-2 py-0.5 rounded-full">
                                    Headline</h5>
                            </div>
                            <h4 class="font-light text-black dark:text-white p-2 text-sm">SMKN Rawajitu Timur
                                Sukses
                                Laksanakan Ujian Semester Ganjil Berbasis...</h4>
                        </a>
                        <a aria-label="lihat berita Kapolres Lampung Selatan Beri Tali Asih ke Petugas Pengamanan di Pilkada 2024"
                            media="all"
                            href="news/kapolres-lampung-selatan-beri-tali-asih-ke-petugas-pengamanan-di-pilkada-2024.html"
                            class="snap-start scroll-mx-6 shrink-0 overflow-hidden cursor-pointer bg-cover rounded-lg w-50">
                            <div class="flex rounded-lg aspect-video bg-no-repeat bg-cover bg-center py-2"
                                style="background-image: url('laravel-filemanager/photos/35/Lamsel/IMG-20241202-WA0020.jpg')">
                                <h5
                                    class="uppercase text-xs font-semibold text-white bg-redlampro h-fit ml-2 px-2 py-0.5 rounded-full">
                                    Headline</h5>
                            </div>
                            <h4 class="font-light text-black dark:text-white p-2 text-sm">Kapolres Lampung Selatan
                                Beri
                                Tali Asih ke Petugas Pengamanan...</h4>
                        </a>
                        <a aria-label="lihat berita Jasad Pria tak Dikenal Ditemukan di Bekas Pos Sekuriti PT Lambang Jaya Natar, ini Ciri-cirinya"
                            media="all"
                            href="news/jasad-pria-tak-dikenal-ditemukan-di-bekas-pos-sekuriti-pt-lambang-jaya-natar-ini-ciri-cirinya.html"
                            class="snap-start scroll-mx-6 shrink-0 overflow-hidden cursor-pointer bg-cover rounded-lg w-50">
                            <div class="flex rounded-lg aspect-video bg-no-repeat bg-cover bg-center py-2"
                                style="background-image: url('laravel-filemanager/photos/LAMSEL1/02JASAD.jpg')">
                                <h5
                                    class="uppercase text-xs font-semibold text-white bg-redlampro h-fit ml-2 px-2 py-0.5 rounded-full">
                                    Headline</h5>
                            </div>
                            <h4 class="font-light text-black dark:text-white p-2 text-sm">Jasad Pria tak Dikenal
                                Ditemukan di Bekas Pos Sekuriti...</h4>
                        </a>
                        <a aria-label="lihat berita November 2024, BPS Lampung Catat Ekonomi Lampung Alami Inflasi 0,42 Persen, Harga Bawang Inflasi Tertinggi"
                            media="all"
                            href="news/november-2024-bps-lampung-catat-ekonomi-lampung-alami-inflasi-0-42-persen-harga-bawang-inflasi-tertinggi.html"
                            class="snap-start scroll-mx-6 shrink-0 overflow-hidden cursor-pointer bg-cover rounded-lg w-50">
                            <div class="flex rounded-lg aspect-video bg-no-repeat bg-cover bg-center py-2"
                                style="background-image: url('laravel-filemanager/photos/33/PKL/StickItImage_1733130414580.jpg')">
                                <h5
                                    class="uppercase text-xs font-semibold text-white bg-redlampro h-fit ml-2 px-2 py-0.5 rounded-full">
                                    Headline</h5>
                            </div>
                            <h4 class="font-light text-black dark:text-white p-2 text-sm">November 2024, BPS
                                Lampung
                                Catat Ekonomi Lampung Alami Inflasi...</h4>
                        </a>
                        <a aria-label="lihat berita Ini Alasan Kamu Lanjutkan Kuliah Magister Bahasa Inggris di Universitas Teknokrat Indonesia"
                            media="all"
                            href="news/ini-alasan-kamu-lanjutkan-kuliah-magister-bahasa-inggris-di-universitas-teknokrat-indonesia.html"
                            class="snap-start scroll-mx-6 shrink-0 overflow-hidden cursor-pointer bg-cover rounded-lg w-50">
                            <div class="flex rounded-lg aspect-video bg-no-repeat bg-cover bg-center py-2"
                                style="background-image: url('laravel-filemanager/photos/Teknokrat/IMG-20240407-WA0039(1.html).jpg')">
                                <h5
                                    class="uppercase text-xs font-semibold text-white bg-redlampro h-fit ml-2 px-2 py-0.5 rounded-full">
                                    Headline</h5>
                            </div>
                            <h4 class="font-light text-black dark:text-white p-2 text-sm">Ini Alasan Kamu Lanjutkan
                                Kuliah Magister Bahasa Inggris di...</h4>
                        </a>
                    </div>
                </div>
                <!-- {{-- iklan --}} -->
                <div class="flex justify-center px-2 py-1 bg-gray-100 dark:bg-thdark dark:text-white">
                </div>

                <!-- {{-- Terkini --}} -->
                <div class="flex flex-col gap-3 bg-gray-100 dark:bg-thdark dark:text-white py-1 mx-3">
                    <h4
                        class="uppercase border-b-4 border-bluelampro dark:border-redlampro w-fit font-bold mx-2 lg:text-lg">
                        terkini</h4>
                    <div class="flex justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                        <div class="flex flex-col justify-between m-2 w-full">
                            <a media="all"
                                href="news/dosen-polinela-prodi-hortikultura-berhasil-kembangkan-budidaya-tanaman-ciplukan-dengan-metode-vegetatif.html"
                                class="font-normal">Dosen Polinela Prodi Hortikultura Berhasil Kembangkan Budidaya
                                Tanaman Ciplukan dengan Metode Vegetatif</a>
                            <div class="flex justify-between">
                                <p class="text-xs font-light"><i class="ti ti-eye"></i> 107</p>
                                <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024</p>
                            </div>
                        </div>
                        <img class="rounded-lg h-25 md:h-30 aspect-square lg:aspect-video object-cover m-2 ml-0"
                            src="laravel-filemanager/photos/WhatsApp%20Image%202024-12-02%20at%2020.07.06.jpg" />
                    </div>
                    <div class="flex justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                        <div class="flex flex-col justify-between m-2 w-full">
                            <a media="all"
                                href="news/smkn-rawajitu-timur-sukses-laksanakan-ujian-semester-ganjil-berbasis-teknologi-android.html"
                                class="font-normal">SMKN Rawajitu Timur Sukses Laksanakan Ujian Semester Ganjil
                                Berbasis Teknologi Android</a>
                            <div class="flex justify-between">
                                <p class="text-xs font-light"><i class="ti ti-eye"></i> 170</p>
                                <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024</p>
                            </div>
                        </div>
                        <img class="rounded-lg h-25 md:h-30 aspect-square lg:aspect-video object-cover m-2 ml-0"
                            src="laravel-filemanager/photos/33/Nafian/IMG-20241202-WA0029.jpg" />
                    </div>
                    <div class="flex justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                        <div class="flex flex-col justify-between m-2 w-full">
                            <a media="all"
                                href="news/kapolres-lampung-selatan-beri-tali-asih-ke-petugas-pengamanan-di-pilkada-2024.html"
                                class="font-normal">Kapolres Lampung Selatan Beri Tali Asih ke Petugas Pengamanan
                                di
                                Pilkada 2024</a>
                            <div class="flex justify-between">
                                <p class="text-xs font-light"><i class="ti ti-eye"></i> 108</p>
                                <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024</p>
                            </div>
                        </div>
                        <img class="rounded-lg h-25 md:h-30 aspect-square lg:aspect-video object-cover m-2 ml-0"
                            src="laravel-filemanager/photos/35/Lamsel/IMG-20241202-WA0020.jpg" />
                    </div>
                    <div class="flex justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                        <div class="flex flex-col justify-between m-2 w-full">
                            <a media="all"
                                href="news/jasad-pria-tak-dikenal-ditemukan-di-bekas-pos-sekuriti-pt-lambang-jaya-natar-ini-ciri-cirinya.html"
                                class="font-normal">Jasad Pria tak Dikenal Ditemukan di Bekas Pos Sekuriti PT
                                Lambang
                                Jaya Natar, ini Ciri-cirinya</a>
                            <div class="flex justify-between">
                                <p class="text-xs font-light"><i class="ti ti-eye"></i> 171</p>
                                <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024</p>
                            </div>
                        </div>
                        <img class="rounded-lg h-25 md:h-30 aspect-square lg:aspect-video object-cover m-2 ml-0"
                            src="laravel-filemanager/photos/LAMSEL1/02JASAD.jpg" />
                    </div>
                    <div class="flex justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                        <div class="flex flex-col justify-between m-2 w-full">
                            <a media="all"
                                href="news/november-2024-bps-lampung-catat-ekonomi-lampung-alami-inflasi-0-42-persen-harga-bawang-inflasi-tertinggi.html"
                                class="font-normal">November 2024, BPS Lampung Catat Ekonomi Lampung Alami Inflasi
                                0,42
                                Persen, Harga Bawang Inflasi Tertinggi</a>
                            <div class="flex justify-between">
                                <p class="text-xs font-light"><i class="ti ti-eye"></i> 108</p>
                                <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024</p>
                            </div>
                        </div>
                        <img class="rounded-lg h-25 md:h-30 aspect-square lg:aspect-video object-cover m-2 ml-0"
                            src="laravel-filemanager/photos/33/PKL/StickItImage_1733130414580.jpg" />
                    </div>
                </div>
                <!-- {{-- Sorotan Mobile --}} -->
                <div class="lg:hidden">
                    <div class="flex justify-center px-2 py-1 bg-gray-100 dark:bg-thdark max-w-screen">
                    </div>

                    <div class="flex flex-col gap-3 bg-gray-100 text-black dark:bg-thdark dark:text-white py-1 mx-3">
                        <!-- <div class="sticky top-[8rem] text-lg z-10 uppercase border-b-4 border-bluelampro dark:border-redlampro p-2 pb-1 font-bold bg-gray-100 dark:bg-thdark dark:text-white"> -->
                        <div
                            class="uppercase border-b-4 border-bluelampro dark:border-redlampro w-fit font-bold mx-2 lg:text-lg">
                            <h4>Sorotan</h4>
                        </div>
                        <div class="flex justify-between h-content w-full bg-white dark:bg-scdark shadow rounded-lg">
                            <div class="flex flex-col justify-between m-2 w-full">
                                <a media="all"href="news/dosen-polinela-prodi-hortikultura-berhasil-kembangkan-budidaya-tanaman-ciplukan-dengan-metode-vegetatif.html"
                                    class="font-normal">Dosen Polinela Prodi Hortikultura Berhasil Kembangkan
                                    Budidaya
                                    Tanaman Ciplukan dengan Metode Vegetatif</a>
                                <div class="flex justify-between items-center pt-2">
                                    <p
                                        class="uppercase text-xs font-normal bg-redlampro text-white w-fit px-2 py-0.5 rounded-full">
                                        Polinela</p>
                                    <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024
                                    </p>
                                </div>
                            </div>
                            <img aria-label="thumbnail"
                                class="rounded-lg h-25 md:h-30 aspect-square object-cover m-2 ml-0 rounded-lg"
                                src="laravel-filemanager/photos/WhatsApp%20Image%202024-12-02%20at%2020.07.06.jpg" />
                        </div>
                        <div class="flex justify-between h-content w-full bg-white dark:bg-scdark shadow rounded-lg">
                            <div class="flex flex-col justify-between m-2 w-full">
                                <a media="all"href="news/smkn-rawajitu-timur-sukses-laksanakan-ujian-semester-ganjil-berbasis-teknologi-android.html"
                                    class="font-normal">SMKN Rawajitu Timur Sukses Laksanakan Ujian Semester Ganjil
                                    Berbasis Teknologi Android</a>
                                <div class="flex justify-between items-center pt-2">
                                    <p
                                        class="uppercase text-xs font-normal bg-redlampro text-white w-fit px-2 py-0.5 rounded-full">
                                        Tulang Bawang</p>
                                    <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024
                                    </p>
                                </div>
                            </div>
                            <img aria-label="thumbnail"
                                class="rounded-lg h-25 md:h-30 aspect-square object-cover m-2 ml-0 rounded-lg"
                                src="laravel-filemanager/photos/33/Nafian/IMG-20241202-WA0029.jpg" />
                        </div>
                        <div class="flex justify-between h-content w-full bg-white dark:bg-scdark shadow rounded-lg">
                            <div class="flex flex-col justify-between m-2 w-full">
                                <a media="all"href="news/kapolres-lampung-selatan-beri-tali-asih-ke-petugas-pengamanan-di-pilkada-2024.html"
                                    class="font-normal">Kapolres Lampung Selatan Beri Tali Asih ke Petugas
                                    Pengamanan
                                    di Pilkada 2024</a>
                                <div class="flex justify-between items-center pt-2">
                                    <p
                                        class="uppercase text-xs font-normal bg-redlampro text-white w-fit px-2 py-0.5 rounded-full">
                                        Tulang Bawang</p>
                                    <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024
                                    </p>
                                </div>
                            </div>
                            <img aria-label="thumbnail"
                                class="rounded-lg h-25 md:h-30 aspect-square object-cover m-2 ml-0 rounded-lg"
                                src="laravel-filemanager/photos/35/Lamsel/IMG-20241202-WA0020.jpg" />
                        </div>
                        <div class="flex justify-between h-content w-full bg-white dark:bg-scdark shadow rounded-lg">
                            <div class="flex flex-col justify-between m-2 w-full">
                                <a media="all"href="news/jasad-pria-tak-dikenal-ditemukan-di-bekas-pos-sekuriti-pt-lambang-jaya-natar-ini-ciri-cirinya.html"
                                    class="font-normal">Jasad Pria tak Dikenal Ditemukan di Bekas Pos Sekuriti PT
                                    Lambang Jaya Natar, ini Ciri-cirinya</a>
                                <div class="flex justify-between items-center pt-2">
                                    <p
                                        class="uppercase text-xs font-normal bg-redlampro text-white w-fit px-2 py-0.5 rounded-full">
                                        Lampung Selatan</p>
                                    <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024
                                    </p>
                                </div>
                            </div>
                            <img aria-label="thumbnail"
                                class="rounded-lg h-25 md:h-30 aspect-square object-cover m-2 ml-0 rounded-lg"
                                src="laravel-filemanager/photos/LAMSEL1/02JASAD.jpg" />
                        </div>
                        <div class="flex justify-between h-content w-full bg-white dark:bg-scdark shadow rounded-lg">
                            <div class="flex flex-col justify-between m-2 w-full">
                                <a media="all"href="news/november-2024-bps-lampung-catat-ekonomi-lampung-alami-inflasi-0-42-persen-harga-bawang-inflasi-tertinggi.html"
                                    class="font-normal">November 2024, BPS Lampung Catat Ekonomi Lampung Alami
                                    Inflasi
                                    0,42 Persen, Harga Bawang Inflasi Tertinggi</a>
                                <div class="flex justify-between items-center pt-2">
                                    <p
                                        class="uppercase text-xs font-normal bg-redlampro text-white w-fit px-2 py-0.5 rounded-full">
                                        Ekonomi</p>
                                    <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024
                                    </p>
                                </div>
                            </div>
                            <img aria-label="thumbnail"
                                class="rounded-lg h-25 md:h-30 aspect-square object-cover m-2 ml-0 rounded-lg"
                                src="laravel-filemanager/photos/33/PKL/StickItImage_1733130414580.jpg" />
                        </div>
                    </div>
                </div>

                <!-- {{-- Ikalan video --}} -->
                <div class="flex justify-center px-2 py-1 bg-gray-100 dark:bg-thdark h-80 max-w-screen rounded-lg ">
                    <iframe src="https://www.youtube.com/embed/1oKpPasJmFM" class="w-full h-full rounded-lg"
                        frameborder="0" allowfullscreen></iframe>
                </div>

                <!-- {{-- Populer Mobile --}} -->
                <div class="lg:hidden">
                    <div class="flex flex-col gap-3 bg-gray-100 text-black dark:bg-thdark dark:text-white py-1 mx-3">
                        <!-- <div class="sticky top-[8rem] text-lg z-10 uppercase border-b-4 border-bluelampro dark:border-redlampro p-2 pb-1 font-bold bg-gray-100 dark:bg-thdark dark:text-white"> -->
                        <div
                            class="uppercase border-b-4 border-bluelampro dark:border-redlampro w-fit font-bold mx-2 lg:text-lg">
                            <h4>Terpopuler</h4>
                        </div>
                        <div
                            class="flex flex-row gap-3 p-2 justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                            <div class="flex flex-col justify-between w-full">
                                <a media="all"
                                    href="news/hitung-cepat-rakata-di-pilkada-lampung-timur-2024-ella---azwar-unggul-61-59-persen-dari-dawam---ketut.html"
                                    class="font-normal">Hitung Cepat Rakata di Pilkada Lampung Timur 2024, Ella -
                                    Azwar
                                    Unggul...</a>
                                <div class="flex justify-between items-center pt-2">
                                    <p
                                        class="uppercase text-xs font-normal bg-redlampro text-white w-fit px-2 py-0.5 rounded-full">
                                        Lampung Timur</p>
                                    <div class="flex justify-between gap-3">
                                        <p class="text-xs font-light"><i class="ti ti-eye"></i> 7345</p>
                                        <p class="text-xs font-light hidden lg:block"><i
                                                class="ti ti-calendar-event"></i> 27-Nov-2024</p>
                                    </div>
                                </div>
                            </div>
                            <img alt="thumbnail" class="h-25 md:h-30 aspect-square object-cover m-2 ml-0 rounded-lg"
                                src="laravel-filemanager/photos/35/2politik/IMG-20241127-WA0066.jpg" />
                        </div>
                        <div
                            class="flex flex-row gap-3 p-2 justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                            <div class="flex flex-col justify-between w-full">
                                <a media="all"
                                    href="news/warga-bandar-lampung-temukan-bayi-di-dekat-bak-sampah-tinggalkan-wasiat-baru-lulus-kuliah.html"
                                    class="font-normal">Warga Bandar Lampung Temukan Bayi di Dekat Bak Sampah,
                                    Tinggalkan Wasiat Baru...</a>
                                <div class="flex justify-between items-center pt-2">
                                    <p
                                        class="uppercase text-xs font-normal bg-redlampro text-white w-fit px-2 py-0.5 rounded-full">
                                        Bandar Lampung</p>
                                    <div class="flex justify-between gap-3">
                                        <p class="text-xs font-light"><i class="ti ti-eye"></i> 4837</p>
                                        <p class="text-xs font-light hidden lg:block"><i
                                                class="ti ti-calendar-event"></i> 26-Nov-2024</p>
                                    </div>
                                </div>
                            </div>
                            <img alt="thumbnail" class="h-25 md:h-30 aspect-square object-cover m-2 ml-0 rounded-lg"
                                src="laravel-filemanager/photos/35/Kriminal/IMG-20241126-WA0030.jpg" />
                        </div>
                        <div
                            class="flex flex-row gap-3 p-2 justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                            <div class="flex flex-col justify-between w-full">
                                <a media="all"
                                    href="news/hitung-cepat-rakata-di-pilkada-pesawaran-2024-paslon-aries-sandi---supriyanto-ungguli-nanda---antonius.html"
                                    class="font-normal">Hitung Cepat Rakata di Pilkada Pesawaran 2024, Paslon Aries
                                    Sandi - Supriyanto...</a>
                                <div class="flex justify-between items-center pt-2">
                                    <p
                                        class="uppercase text-xs font-normal bg-redlampro text-white w-fit px-2 py-0.5 rounded-full">
                                        Pesawaran</p>
                                    <div class="flex justify-between gap-3">
                                        <p class="text-xs font-light"><i class="ti ti-eye"></i> 2854</p>
                                        <p class="text-xs font-light hidden lg:block"><i
                                                class="ti ti-calendar-event"></i> 27-Nov-2024</p>
                                    </div>
                                </div>
                            </div>
                            <img alt="thumbnail" class="h-25 md:h-30 aspect-square object-cover m-2 ml-0 rounded-lg"
                                src="laravel-filemanager/photos/35/2politik/IMG-20241127-WA0073.jpg" />
                        </div>
                        <div
                            class="flex flex-row gap-3 p-2 justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                            <div class="flex flex-col justify-between w-full">
                                <a media="all"
                                    href="news/data-akhir-hitung-cepat-rakata-di-pilkada-tubaba-novriwan---nadirsyah-unggul-37-67-persen-warga-pilih-kotak-kosong.html"
                                    class="font-normal">Data Akhir Hitung Cepat Rakata di Pilkada Tubaba, Novriwan
                                    -
                                    Nadirsyah Unggul,...</a>
                                <div class="flex justify-between items-center pt-2">
                                    <p
                                        class="uppercase text-xs font-normal bg-redlampro text-white w-fit px-2 py-0.5 rounded-full">
                                        Tubaba</p>
                                    <div class="flex justify-between gap-3">
                                        <p class="text-xs font-light"><i class="ti ti-eye"></i> 2328</p>
                                        <p class="text-xs font-light hidden lg:block"><i
                                                class="ti ti-calendar-event"></i> 28-Nov-2024</p>
                                    </div>
                                </div>
                            </div>
                            <img alt="thumbnail" class="h-25 md:h-30 aspect-square object-cover m-2 ml-0 rounded-lg"
                                src="laravel-filemanager/photos/35/2politik/StickItImage_1732748340943.jpg" />
                        </div>
                        <div
                            class="flex flex-row gap-3 p-2 justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                            <div class="flex flex-col justify-between w-full">
                                <a media="all"
                                    href="news/hitung-cepat-rakata-di-pilkada-lampung-tengah-2024-paslon-ardito---komang-koheri-unggul-69-persen.html"
                                    class="font-normal">Hitung Cepat Rakata di Pilkada Lampung Tengah 2024, Paslon
                                    Ardito - Komang...</a>
                                <div class="flex justify-between items-center pt-2">
                                    <p
                                        class="uppercase text-xs font-normal bg-redlampro text-white w-fit px-2 py-0.5 rounded-full">
                                        Lampung Tengah</p>
                                    <div class="flex justify-between gap-3">
                                        <p class="text-xs font-light"><i class="ti ti-eye"></i> 2080</p>
                                        <p class="text-xs font-light hidden lg:block"><i
                                                class="ti ti-calendar-event"></i> 27-Nov-2024</p>
                                    </div>
                                </div>
                            </div>
                            <img alt="thumbnail" class="h-25 md:h-30 aspect-square object-cover m-2 ml-0 rounded-lg"
                                src="laravel-filemanager/photos/35/2politik/StickItImage_1732697767762.jpg" />
                        </div>
                    </div>
                </div>

                <!-- {{-- Terkini Lainnya 1 Desktop --}} -->
                <div class="hidden lg:flex lg:items-center">
                    <div class="flex flex-col gap-3 bg-gray-100 dark:bg-thdark dark:text-white py-1 mx-3">
                        <h4
                            class="uppercase border-b-4 border-bluelampro dark:border-redlampro w-fit font-bold mx-2 lg:text-lg">
                        </h4>
                        <div class="flex justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                            <div class="flex flex-col justify-between m-2 w-full">
                                <a media="all"
                                    href="news/ini-alasan-kamu-lanjutkan-kuliah-magister-bahasa-inggris-di-universitas-teknokrat-indonesia.html"
                                    class="font-normal">Ini Alasan Kamu Lanjutkan Kuliah Magister Bahasa Inggris di
                                    Universitas Teknokrat Indonesia</a>
                                <div class="flex justify-between">
                                    <p class="text-xs font-light"><i class="ti ti-eye"></i> 110</p>
                                    <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024
                                    </p>
                                </div>
                            </div>
                            <img class="rounded-lg h-25 md:h-30 aspect-square lg:aspect-video object-cover m-2 ml-0"
                                src="laravel-filemanager/photos/Teknokrat/IMG-20240407-WA0039(1).jpg" />
                        </div>
                        <div class="flex justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                            <div class="flex flex-col justify-between m-2 w-full">
                                <a media="all"
                                    href="news/gelombang-laut-tinggi-dan-angin-kencang-bpbd-imbau-nelayan-lampung-selatan-tak-melaut.html"
                                    class="font-normal">Gelombang Laut Tinggi dan Angin Kencang, BPBD Imbau Nelayan
                                    Lampung Selatan tak Melaut</a>
                                <div class="flex justify-between">
                                    <p class="text-xs font-light"><i class="ti ti-eye"></i> 130</p>
                                    <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024
                                    </p>
                                </div>
                            </div>
                            <img class="rounded-lg h-25 md:h-30 aspect-square lg:aspect-video object-cover m-2 ml-0"
                                src="laravel-filemanager/photos/LAMSEL1/02CUACA.jpg" />
                        </div>
                        <div class="flex justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                            <div class="flex flex-col justify-between m-2 w-full">
                                <a media="all"
                                    href="news/mahasiswa-universitas-teknokrat-indonesia-prodi-teknologi-informasi-dilatih-jiwa-kepemimpinan.html"
                                    class="font-normal">Mahasiswa Universitas Teknokrat Indonesia Prodi Teknologi
                                    Informasi Dilatih Jiwa Kepemimpinan</a>
                                <div class="flex justify-between">
                                    <p class="text-xs font-light"><i class="ti ti-eye"></i> 106</p>
                                    <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024
                                    </p>
                                </div>
                            </div>
                            <img class="rounded-lg h-25 md:h-30 aspect-square lg:aspect-video object-cover m-2 ml-0"
                                src="laravel-filemanager/photos/Teknokrat_3/Teknokrat-021224.jpg" />
                        </div>
                        <div class="flex justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                            <div class="flex flex-col justify-between m-2 w-full">
                                <a media="all"
                                    href="news/universitas-teknokrat-indonesia-dan-grand-elty-krakatoa-resort-teken-mou-dalam-peningkatan-kapasitas-pendidikan.html"
                                    class="font-normal">Universitas Teknokrat Indonesia dan Grand Elty Krakatoa
                                    Resort
                                    Teken MoU dalam Peningkatan Kapasitas Pendidikan</a>
                                <div class="flex justify-between">
                                    <p class="text-xs font-light"><i class="ti ti-eye"></i> 106</p>
                                    <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024
                                    </p>
                                </div>
                            </div>
                            <img class="rounded-lg h-25 md:h-30 aspect-square lg:aspect-video object-cover m-2 ml-0"
                                src="laravel-filemanager/photos/Teknokrat_3/WhatsApp%20Image%202024-12-02%20at%2014.31.49.jpg" />
                        </div>
                        <div class="flex justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                            <div class="flex flex-col justify-between m-2 w-full">
                                <a media="all"
                                    href="news/kenal-di-aplikasi-oknum-anggota-brimob-di-lampung-terlibat-kasus-asusila-ke-remaja-putri-asal-tanggamus.html"
                                    class="font-normal">Kenal di Aplikasi, Oknum Anggota Brimob di Lampung Terlibat
                                    Kasus Asusila ke Remaja Putri Asal Tanggamus</a>
                                <div class="flex justify-between">
                                    <p class="text-xs font-light"><i class="ti ti-eye"></i> 486</p>
                                    <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024
                                    </p>
                                </div>
                            </div>
                            <img class="rounded-lg h-25 md:h-30 aspect-square lg:aspect-video object-cover m-2 ml-0"
                                src="laravel-filemanager/photos/35/Laka/StickItImage_1733124098018.jpg" />
                        </div>

                    </div>
                </div>

                <!-- {{-- iklan --}} -->
                <div class="flex justify-center px-2 py-1 bg-gray-100 dark:bg-thdark max-w-screen">
                </div>

                <!-- {{-- Video Terkini --}} -->
                <div class="flex flex-col justify-center gap-5 mt-5">
                    <a aria-label="lihat berita Dprd Gelar Sidang Paripurna Istimewa Peringatan Hut Ke-11 Pesisir Barat"
                        media="all" href="video/6eYvbeSLoFQ9uVJ0ZrwGf96NBf72Ze94ZABa.html"
                        class="relative cursor-pointer bg-cover rounded-lg w-[95%] mx-auto">
                        <img class="absolute top-[50%] translate-x-[-50%] translate-y-[-50%] left-[50%] w-30"
                            src="frontend/assets/images/logo/youtube.svg" alt="youtube logo">
                        <div class="flex flex-col justify-end rounded-lg aspect-video bg-no-repeat bg-cover bg-center"
                            style="background-image: url('laravel-filemanager/photos/PESISIR%20BARAT/dprdpesibar.jpg')">
                            <h4 class="font-light rounded-b-md bg-scdark text-white p-2 text">Dprd Gelar Sidang
                                Paripurna Istimewa Peringatan Hut Ke-11 Pesisir Barat</h4>
                        </div>
                    </a>
                    <div class="flex gap-3 snap-x snap-mandatory overflow-x-auto px-3 py-2 no-scrollbar">
                        <a aria-label="lihat berita Pembukaan WSL Krui Pro 2024 Berlangsung Meriah" media="all"
                            href="video/P61TRlDtcpHySYt9NPH5GdX6qx0pzFAah5ly.html"
                            class="snap-start scroll-mx-6 shrink-0 overflow-hidden cursor-pointer bg-cover rounded-lg w-50">
                            <div class="flex justify-center items-center rounded-lg aspect-video bg-no-repeat bg-cover bg-center py-2"
                                style="background-image: url('laravel-filemanager/photos/PESISIR%20BARAT/kruipro.jpg')">
                                <img class="w-20" src="frontend/assets/images/logo/youtube.svg" alt="youtube logo">
                            </div>
                            <h4 class="font-light text-black dark:text-white p-2 text-xs">Pembukaan WSL Krui Pro
                                2024
                                Berlangsung Meriah</h4>
                        </a>
                        <a aria-label="lihat berita Piala Dunia U-17: Digempur Habis-habisan, Timnas Indonesia U-17 Tahan Imbang Ekuador di Laga Perdana"
                            media="all" href="video/eqg2XnBboM76TWvh2LjIcBe3U4DtJzF0NNV1.html"
                            class="snap-start scroll-mx-6 shrink-0 overflow-hidden cursor-pointer bg-cover rounded-lg w-50">
                            <div class="flex justify-center items-center rounded-lg aspect-video bg-no-repeat bg-cover bg-center py-2"
                                style="background-image: url('laravel-filemanager/photos/4/AGUSTUS23/10timnas.jpg')">
                                <img class="w-20" src="frontend/assets/images/logo/youtube.svg" alt="youtube logo">
                            </div>
                            <h4 class="font-light text-black dark:text-white p-2 text-xs">Piala Dunia U-17:
                                Digempur
                                Habis-habisan, Timnas Indonesia U-17 Tahan...</h4>
                        </a>
                        <a aria-label="lihat berita Nekat Belanja Pakai Uang Palsu, Pria Asal Menggala Tulang Bawang ini Ditangkap Polisi"
                            media="all" href="video/XEsmt7JW6giAElU7x6EwBpgWH6sQf1shT9GM.html"
                            class="snap-start scroll-mx-6 shrink-0 overflow-hidden cursor-pointer bg-cover rounded-lg w-50">
                            <div class="flex justify-center items-center rounded-lg aspect-video bg-no-repeat bg-cover bg-center py-2"
                                style="background-image: url('laravel-filemanager/photos/4/AGUSTUS23/02upal.jpg')">
                                <img class="w-20" src="frontend/assets/images/logo/youtube.svg" alt="youtube logo">
                            </div>
                            <h4 class="font-light text-black dark:text-white p-2 text-xs">Nekat Belanja Pakai Uang
                                Palsu, Pria Asal Menggala Tulang...</h4>
                        </a>
                        <a aria-label="lihat berita Universitas Terbuka Bandar Lampung, Kerja Bisa Kuliah Bisa"
                            media="all" href="video/vHCgfgafSuS9GRUxqwK3py8x5x21y4BTjqVJ.html"
                            class="snap-start scroll-mx-6 shrink-0 overflow-hidden cursor-pointer bg-cover rounded-lg w-50">
                            <div class="flex justify-center items-center rounded-lg aspect-video bg-no-repeat bg-cover bg-center py-2"
                                style="background-image: url('laravel-filemanager/photos/28/utpodcast.jpg')">
                                <img class="w-20" src="frontend/assets/images/logo/youtube.svg" alt="youtube logo">
                            </div>
                            <h4 class="font-light text-black dark:text-white p-2 text-xs">Universitas Terbuka
                                Bandar
                                Lampung, Kerja Bisa Kuliah Bisa</h4>
                        </a>
                    </div>
                </div>

                <!-- {{-- Terkini Lainnya 1 Mobile --}} -->
                <div class="lg:hidden">
                    <div class="flex justify-center px-2 py-1 bg-gray-100 dark:bg-thdark max-w-screen">
                    </div>
                    <div class="flex flex-col gap-3 bg-gray-100 dark:bg-thdark dark:text-white py-1 mx-3">
                        <h4
                            class="uppercase border-b-4 border-bluelampro dark:border-redlampro w-fit font-bold mx-2 lg:text-lg">
                        </h4>
                        <div class="flex justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                            <div class="flex flex-col justify-between m-2 w-full">
                                <a media="all"
                                    href="news/ini-alasan-kamu-lanjutkan-kuliah-magister-bahasa-inggris-di-universitas-teknokrat-indonesia.html"
                                    class="font-normal">Ini Alasan Kamu Lanjutkan Kuliah Magister Bahasa Inggris di
                                    Universitas Teknokrat Indonesia</a>
                                <div class="flex justify-between">
                                    <p class="text-xs font-light"><i class="ti ti-eye"></i> 110</p>
                                    <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024
                                    </p>
                                </div>
                            </div>
                            <img class="rounded-lg h-25 md:h-30 aspect-square lg:aspect-video object-cover m-2 ml-0"
                                src="laravel-filemanager/photos/Teknokrat/IMG-20240407-WA0039(1).jpg" />
                        </div>
                        <div class="flex justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                            <div class="flex flex-col justify-between m-2 w-full">
                                <a media="all"
                                    href="news/gelombang-laut-tinggi-dan-angin-kencang-bpbd-imbau-nelayan-lampung-selatan-tak-melaut.html"
                                    class="font-normal">Gelombang Laut Tinggi dan Angin Kencang, BPBD Imbau Nelayan
                                    Lampung Selatan tak Melaut</a>
                                <div class="flex justify-between">
                                    <p class="text-xs font-light"><i class="ti ti-eye"></i> 130</p>
                                    <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024
                                    </p>
                                </div>
                            </div>
                            <img class="rounded-lg h-25 md:h-30 aspect-square lg:aspect-video object-cover m-2 ml-0"
                                src="laravel-filemanager/photos/LAMSEL1/02CUACA.jpg" />
                        </div>
                        <div class="flex justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                            <div class="flex flex-col justify-between m-2 w-full">
                                <a media="all"
                                    href="news/mahasiswa-universitas-teknokrat-indonesia-prodi-teknologi-informasi-dilatih-jiwa-kepemimpinan.html"
                                    class="font-normal">Mahasiswa Universitas Teknokrat Indonesia Prodi Teknologi
                                    Informasi Dilatih Jiwa Kepemimpinan</a>
                                <div class="flex justify-between">
                                    <p class="text-xs font-light"><i class="ti ti-eye"></i> 106</p>
                                    <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024
                                    </p>
                                </div>
                            </div>
                            <img class="rounded-lg h-25 md:h-30 aspect-square lg:aspect-video object-cover m-2 ml-0"
                                src="laravel-filemanager/photos/Teknokrat_3/Teknokrat-021224.jpg" />
                        </div>
                        <div class="flex justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                            <div class="flex flex-col justify-between m-2 w-full">
                                <a media="all"
                                    href="news/universitas-teknokrat-indonesia-dan-grand-elty-krakatoa-resort-teken-mou-dalam-peningkatan-kapasitas-pendidikan.html"
                                    class="font-normal">Universitas Teknokrat Indonesia dan Grand Elty Krakatoa
                                    Resort
                                    Teken MoU dalam Peningkatan Kapasitas Pendidikan</a>
                                <div class="flex justify-between">
                                    <p class="text-xs font-light"><i class="ti ti-eye"></i> 106</p>
                                    <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024
                                    </p>
                                </div>
                            </div>
                            <img class="rounded-lg h-25 md:h-30 aspect-square lg:aspect-video object-cover m-2 ml-0"
                                src="laravel-filemanager/photos/Teknokrat_3/WhatsApp%20Image%202024-12-02%20at%2014.31.49.jpg" />
                        </div>
                        <div class="flex justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                            <div class="flex flex-col justify-between m-2 w-full">
                                <a media="all"
                                    href="news/kenal-di-aplikasi-oknum-anggota-brimob-di-lampung-terlibat-kasus-asusila-ke-remaja-putri-asal-tanggamus.html"
                                    class="font-normal">Kenal di Aplikasi, Oknum Anggota Brimob di Lampung Terlibat
                                    Kasus Asusila ke Remaja Putri Asal Tanggamus</a>
                                <div class="flex justify-between">
                                    <p class="text-xs font-light"><i class="ti ti-eye"></i> 486</p>
                                    <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024
                                    </p>
                                </div>
                            </div>
                            <img class="rounded-lg h-25 md:h-30 aspect-square lg:aspect-video object-cover m-2 ml-0"
                                src="laravel-filemanager/photos/35/Laka/StickItImage_1733124098018.jpg" />
                        </div>

                    </div>
                </div>

                <!-- {{-- iklan --}} -->
                <div class="md:hidden">
                    <div class="flex justify-center px-2 py-1 bg-gray-100 dark:bg-thdark max-w-screen">
                    </div>
                    <!-- {{-- Terkini Lainnya Carousel 2 --}} -->
                    <div class="flex flex-col gap-3 bg-gray-100 dark:bg-thdark dark:text-white py-1 mx-3">
                        <h4
                            class="uppercase border-b-4 border-bluelampro dark:border-redlampro w-fit font-bold mx-2 lg:text-lg">
                        </h4>
                        <div class="w-full flex gap-2 snap-x snap-mandatory overflow-x-auto no-scrollbar">
                            <a media="all"
                                href="news/kepala-sman-1-pesisir-selatan-pesisir-barat-raih-gelar-kepala-sekolah-inovatif-pgri-2024.html"
                                class="shadow snap-start bg-white rounded-lg dark:bg-scdark scroll-mx-6 shrink-0 overflow-hidden cursor-pointer h-content">
                                <div class="flex justify-between h-fit w-72 md:w-96">
                                    <img class="aspect-square object-cover rounded-lg bg-center m-2 mr-0 h-32"
                                        src="laravel-filemanager/photos/PESISIR%20BARAT/02JUARA.jpg" alt="" />
                                    <h3 class="text-sm font-normal m-2 md:text-lg lg:text-xl">Kepala SMAN 1 Pesisir
                                        Selatan Pesisir Barat Raih Gelar Kepala Sekolah Inovatif PGRI 2024</h3>
                                </div>
                            </a>
                            <a media="all"
                                href="news/granat-aktif-ditemukan-di-lahan-kosong-desa-banjar-masin-baradatu-way-kanan-diledakkan-gegana-brimob-lampung.html"
                                class="shadow snap-start bg-white rounded-lg dark:bg-scdark scroll-mx-6 shrink-0 overflow-hidden cursor-pointer h-content">
                                <div class="flex justify-between h-fit w-72 md:w-96">
                                    <img class="aspect-square object-cover rounded-lg bg-center m-2 mr-0 h-32"
                                        src="laravel-filemanager/photos/WAY%20KANAN/02GRANAT.jpg" alt="" />
                                    <h3 class="text-sm font-normal m-2 md:text-lg lg:text-xl">Granat Aktif
                                        Ditemukan di
                                        Lahan Kosong Desa Banjar Masin Baradatu Way Kanan, Diledakkan Gegana Brimob
                                        Lampung</h3>
                                </div>
                            </a>
                            <a media="all"
                                href="news/mudahkan-siswa-akses-soal-smpn-satu-atap-1-rawajitu-timur-laksanakan-ujian-semester-pakai-sistem-barcode.html"
                                class="shadow snap-start bg-white rounded-lg dark:bg-scdark scroll-mx-6 shrink-0 overflow-hidden cursor-pointer h-content">
                                <div class="flex justify-between h-fit w-72 md:w-96">
                                    <img class="aspect-square object-cover rounded-lg bg-center m-2 mr-0 h-32"
                                        src="laravel-filemanager/photos/33/Nafian/IMG-20241202-WA0009.jpg"
                                        alt="" />
                                    <h3 class="text-sm font-normal m-2 md:text-lg lg:text-xl">Mudahkan Siswa Akses
                                        Soal, SMPN Satu Atap 1 Rawajitu Timur Laksanakan Ujian Semester Pakai Sistem
                                        Barcode</h3>
                                </div>
                            </a>
                            <a media="all"
                                href="news/smpn-2-rawajitu-timur-sukses-laksanakan-sumatif-akhir-semester-ganjil-berbasis-android.html"
                                class="shadow snap-start bg-white rounded-lg dark:bg-scdark scroll-mx-6 shrink-0 overflow-hidden cursor-pointer h-content">
                                <div class="flex justify-between h-fit w-72 md:w-96">
                                    <img class="aspect-square object-cover rounded-lg bg-center m-2 mr-0 h-32"
                                        src="laravel-filemanager/photos/33/Nafian/IMG-20241202-WA0007.jpg"
                                        alt="" />
                                    <h3 class="text-sm font-normal m-2 md:text-lg lg:text-xl">SMPN 2 Rawajitu Timur
                                        Sukses Laksanakan Sumatif Akhir Semester Ganjil Berbasis Android</h3>
                                </div>
                            </a>
                            <a media="all"
                                href="news/pasca-pilkada-kapolda-lampung-gas-sikat-kasus-korupsi-hingga-pencucian-uang-sesuai-arahan-presiden.html"
                                class="shadow snap-start bg-white rounded-lg dark:bg-scdark scroll-mx-6 shrink-0 overflow-hidden cursor-pointer h-content">
                                <div class="flex justify-between h-fit w-72 md:w-96">
                                    <img class="aspect-square object-cover rounded-lg bg-center m-2 mr-0 h-32"
                                        src="laravel-filemanager/photos/35/Balam/StickItImage_1732846758687.jpg"
                                        alt="" />
                                    <h3 class="text-sm font-normal m-2 md:text-lg lg:text-xl">Pasca Pilkada,
                                        Kapolda
                                        Lampung Gas Sikat Kasus Korupsi Hingga Pencucian Uang Sesuai Arahan Presiden
                                    </h3>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="flex flex-col gap-3 bg-gray-100 dark:bg-thdark dark:text-white mx-3 py-1">
                        <div
                            class="sticky top-[8rem] text-lg flex justify-between items-center z-10 border-b-4 border-bluelampro dark:border-redlampro p-2 pb-1 bg-gray-100 dark:bg-thdark">
                            <!-- <div class="uppercase border-b-4 border-bluelampro dark:border-redlampro w-fit font-bold mx-2 lg:text-lg">  -->
                            <h4 class="uppercase font-bold dark:text-white">Kopi Pahit</h4>
                            <a aria-label="Buka Kategori Kopi Pahit" media="all"
                                href="kategori/KOPI%20PAHIT/news.html"
                                class="text-sm font-medium text-bluelampro dark:text-redlampro">Artikel Lainnya</a>
                        </div>
                        <div
                            class="flex flex-row items-center gap-3 px-4 py-2 rounded-lg justify-between h-content w-full bg-white dark:bg-scdark p-3 shadow">
                            <img class="h-20 aspect-square object-cover rounded-full"
                                src="laravel-filemanager/photos/Balam/16amir.jpg" />
                            <div class="flex flex-col gap-3">
                                <div class="flex flex-col justify-between">
                                    <a aria-label="Lihat Berita Pilgub Lampung, Peruntungan Arinal Djunaidi Berhenti di Hari Rabu"
                                        media="all"
                                        href="news/pilgub-lampung-peruntungan-arinal-djunaidi-berhenti-di-hari-rabu.html"
                                        class="font-medium">Pilgub Lampung, Peruntungan Arinal Djunaidi Berhenti
                                        di...</a>
                                    <p class="text-xs dark:text-gray-400 font-normal">Saya yakin kekalahan Arinal
                                        bersama 10 bupati/walikota di Lampung...</p>
                                </div>
                                <div class="flex justify-between items-center">
                                    <p class="text-gray-800 dark:text-gray-300 text-xs font-thin"><i
                                            class="ti ti-eye"></i> 457</p>
                                    <!-- <p class="text-gray-800 dark:text-gray-300 text-xs font-thin"><i class="ti ti-calendar-event"></i> 30 Nov 2024</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- {{-- iklan dekstop --}} -->
                <div
                    class="justify-center hidden lg:flex lg:items-center px-2 py-1 bg-gray-100 dark:bg-thdark max-w-screen">
                </div>

                <!-- {{-- Terkini Lainnya 2 Dekstop --}} -->
                <div class="hidden lg:flex lg:items-center">
                    <div class="flex flex-col gap-3 bg-gray-100 dark:bg-thdark dark:text-white py-1 mx-3">
                        <h4
                            class="uppercase border-b-4 border-bluelampro dark:border-redlampro w-fit font-bold mx-2 lg:text-lg">
                        </h4>
                        <div class="flex justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                            <div class="flex flex-col justify-between m-2 w-full">
                                <a media="all"
                                    href="news/kepala-sman-1-pesisir-selatan-pesisir-barat-raih-gelar-kepala-sekolah-inovatif-pgri-2024.html"
                                    class="font-normal">Kepala SMAN 1 Pesisir Selatan Pesisir Barat Raih Gelar
                                    Kepala
                                    Sekolah Inovatif PGRI 2024</a>
                                <div class="flex justify-between">
                                    <p class="text-xs font-light"><i class="ti ti-eye"></i> 346</p>
                                    <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024
                                    </p>
                                </div>
                            </div>
                            <img class="rounded-lg h-25 md:h-30 aspect-square lg:aspect-video object-cover m-2 ml-0"
                                src="laravel-filemanager/photos/PESISIR%20BARAT/02JUARA.jpg" />
                        </div>
                        <div class="flex justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                            <div class="flex flex-col justify-between m-2 w-full">
                                <a media="all"
                                    href="news/granat-aktif-ditemukan-di-lahan-kosong-desa-banjar-masin-baradatu-way-kanan-diledakkan-gegana-brimob-lampung.html"
                                    class="font-normal">Granat Aktif Ditemukan di Lahan Kosong Desa Banjar Masin
                                    Baradatu Way Kanan, Diledakkan Gegana Brimob Lampung</a>
                                <div class="flex justify-between">
                                    <p class="text-xs font-light"><i class="ti ti-eye"></i> 140</p>
                                    <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024
                                    </p>
                                </div>
                            </div>
                            <img class="rounded-lg h-25 md:h-30 aspect-square lg:aspect-video object-cover m-2 ml-0"
                                src="laravel-filemanager/photos/WAY%20KANAN/02GRANAT.jpg" />
                        </div>
                        <div class="flex justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                            <div class="flex flex-col justify-between m-2 w-full">
                                <a media="all"
                                    href="news/mudahkan-siswa-akses-soal-smpn-satu-atap-1-rawajitu-timur-laksanakan-ujian-semester-pakai-sistem-barcode.html"
                                    class="font-normal">Mudahkan Siswa Akses Soal, SMPN Satu Atap 1 Rawajitu Timur
                                    Laksanakan Ujian Semester Pakai Sistem Barcode</a>
                                <div class="flex justify-between">
                                    <p class="text-xs font-light"><i class="ti ti-eye"></i> 173</p>
                                    <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024
                                    </p>
                                </div>
                            </div>
                            <img class="rounded-lg h-25 md:h-30 aspect-square lg:aspect-video object-cover m-2 ml-0"
                                src="laravel-filemanager/photos/33/Nafian/IMG-20241202-WA0009.jpg" />
                        </div>
                        <div class="flex justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                            <div class="flex flex-col justify-between m-2 w-full">
                                <a media="all"
                                    href="news/smpn-2-rawajitu-timur-sukses-laksanakan-sumatif-akhir-semester-ganjil-berbasis-android.html"
                                    class="font-normal">SMPN 2 Rawajitu Timur Sukses Laksanakan Sumatif Akhir
                                    Semester
                                    Ganjil Berbasis Android</a>
                                <div class="flex justify-between">
                                    <p class="text-xs font-light"><i class="ti ti-eye"></i> 119</p>
                                    <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024
                                    </p>
                                </div>
                            </div>
                            <img class="rounded-lg h-25 md:h-30 aspect-square lg:aspect-video object-cover m-2 ml-0"
                                src="laravel-filemanager/photos/33/Nafian/IMG-20241202-WA0007.jpg" />
                        </div>
                        <div class="flex justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                            <div class="flex flex-col justify-between m-2 w-full">
                                <a media="all"
                                    href="news/pasca-pilkada-kapolda-lampung-gas-sikat-kasus-korupsi-hingga-pencucian-uang-sesuai-arahan-presiden.html"
                                    class="font-normal">Pasca Pilkada, Kapolda Lampung Gas Sikat Kasus Korupsi
                                    Hingga
                                    Pencucian Uang Sesuai Arahan Presiden</a>
                                <div class="flex justify-between">
                                    <p class="text-xs font-light"><i class="ti ti-eye"></i> 120</p>
                                    <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024
                                    </p>
                                </div>
                            </div>
                            <img class="rounded-lg h-25 md:h-30 aspect-square lg:aspect-video object-cover m-2 ml-0"
                                src="laravel-filemanager/photos/35/Balam/StickItImage_1732846758687.jpg" />
                        </div>

                    </div>
                </div>

                <!-- {{-- iklan --}} -->
                <div class="flex justify-center px-2 py-1 bg-gray-100 dark:bg-thdark max-w-screen">
                    <a aria-label="banner iklan" media="all" href="#" target="_blank"
                        rel="noopener noreferrer">
                        <img src="laravel-filemanager/photos/Banklampung/IMG-20240522-WA0110.jpg" alt=""
                            class="object-contain" />
                    </a>
                </div>

                <!-- {{-- Terkini Lainnya --}} -->
                <div class="flex flex-col gap-3 bg-gray-100 dark:bg-thdark dark:text-white py-1 mx-3">
                    <h4
                        class="uppercase border-b-4 border-bluelampro dark:border-redlampro w-fit font-bold mx-2 lg:text-lg">
                        terkini_lainnya</h4>
                    <div class="flex justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                        <div class="flex flex-col justify-between m-2 w-full">
                            <a media="all"
                                href="news/unila-raih-penghargaan-tax-center-terbaik-dari-dirjen-pajak-tiga-mahasiswa-borong-juara-relawan-pajak-negeri-2024.html"
                                class="font-normal">Unila Raih Penghargaan Tax Center Terbaik dari Dirjen Pajak,
                                Tiga
                                Mahasiswa Borong Juara Relawan Pajak Negeri 2024</a>
                            <div class="flex justify-between">
                                <p class="text-xs font-light"><i class="ti ti-eye"></i> 111</p>
                                <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024
                                </p>
                            </div>
                        </div>
                        <img class="rounded-lg h-25 md:h-30 aspect-square lg:aspect-video object-cover m-2 ml-0"
                            src="laravel-filemanager/photos/35/Pendidikan/WhatsApp-Image-2024-11-28-at-09.02.14-1-1068x801.jpg" />
                    </div>
                    <div class="flex justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                        <div class="flex flex-col justify-between m-2 w-full">
                            <a media="all"
                                href="news/pilkada-2024-di-lampung-aman-dan-damai-kapolda-beri-penghargaan-ke-paslon-pemenang-tanpa-euforia-berlebih.html"
                                class="font-normal">Pilkada 2024 di Lampung Aman dan Damai, Kapolda Beri
                                Penghargaan
                                ke Paslon Pemenang Tanpa Euforia Berlebih</a>
                            <div class="flex justify-between">
                                <p class="text-xs font-light"><i class="ti ti-eye"></i> 113</p>
                                <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024
                                </p>
                            </div>
                        </div>
                        <img class="rounded-lg h-25 md:h-30 aspect-square lg:aspect-video object-cover m-2 ml-0"
                            src="laravel-filemanager/photos/35/2politik/IMG-20241202-WA0004.jpg" />
                    </div>
                    <div class="flex justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                        <div class="flex flex-col justify-between m-2 w-full">
                            <a media="all"
                                href="news/hendak-dikirim-ke-natar-polda-lampung-gagalkan-penyelundupan-4-354-burung-ilegal-di-tol-terbanggi-besar.html"
                                class="font-normal">Hendak Dikirim ke Natar, Polda Lampung Gagalkan Penyelundupan
                                4.354 Burung Ilegal di Tol Terbanggi Besar</a>
                            <div class="flex justify-between">
                                <p class="text-xs font-light"><i class="ti ti-eye"></i> 124</p>
                                <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024
                                </p>
                            </div>
                        </div>
                        <img class="rounded-lg h-25 md:h-30 aspect-square lg:aspect-video object-cover m-2 ml-0"
                            src="laravel-filemanager/photos/35/Kriminal/StickItImage_1733097133743.jpg" />
                    </div>
                    <div class="flex justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                        <div class="flex flex-col justify-between m-2 w-full">
                            <a media="all"
                                href="news/bupati-agus-istiqlal-kembali-serahkan-surat-perjanjian-kerja-pppk-tahap-dua.html"
                                class="font-normal">Bupati Agus Istiqlal Kembali Serahkan Surat Perjanjian Kerja
                                PPPK
                                Tahap Dua</a>
                            <div class="flex justify-between">
                                <p class="text-xs font-light"><i class="ti ti-eye"></i> 106</p>
                                <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 12-Aug-2024
                                </p>
                            </div>
                        </div>
                        <img class="rounded-lg h-25 md:h-30 aspect-square lg:aspect-video object-cover m-2 ml-0"
                            src="laravel-filemanager/photos/PESISIR%20BARAT/3A6DD4E9-F425-479F-9462-9ABACC98B20C_241201095033.jpg" />
                    </div>
                    <div class="flex justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                        <div class="flex flex-col justify-between m-2 w-full">
                            <a media="all"
                                href="news/bupati-agus-istiqlal-sambut-kepulangan-jamaah-haji-asal-pesisir-barat.html"
                                class="font-normal">Bupati Agus Istiqlal Sambut Kepulangan Jamaah Haji Asal
                                Pesisir
                                Barat</a>
                            <div class="flex justify-between">
                                <p class="text-xs font-light"><i class="ti ti-eye"></i> 104</p>
                                <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 22-Jul-2024
                                </p>
                            </div>
                        </div>
                        <img class="rounded-lg h-25 md:h-30 aspect-square lg:aspect-video object-cover m-2 ml-0"
                            src="laravel-filemanager/photos/PESISIR%20BARAT/IMG-20240721-WA0021.jpg" />
                    </div>

                </div>
            </div>

            <!-- {{-- left page on md and above view --}} -->
            <div class="w-0 md:w-5/12 lg:w-2/6 hidden md:block bg-gray-100 dark:bg-thdark space-y-4">
                <div class="flex justify-center px-2 py-1 bg-gray-100 dark:bg-thdark max-w-screen">
                </div>
                <div class="flex flex-col gap-3 bg-gray-100 dark:bg-thdark dark:text-white mx-3 py-1">
                    <div
                        class="sticky top-[8rem] text-lg flex justify-between items-center z-10 border-b-4 border-bluelampro dark:border-redlampro p-2 pb-1 bg-gray-100 dark:bg-thdark">
                        <!-- <div class="uppercase border-b-4 border-bluelampro dark:border-redlampro w-fit font-bold mx-2 lg:text-lg">  -->
                        <h4 class="uppercase font-bold dark:text-white">Kopi Pahit</h4>
                        <a aria-label="Buka Kategori Kopi Pahit" media="all"
                            href="kategori/KOPI%20PAHIT/news.html"
                            class="text-sm font-medium text-bluelampro dark:text-redlampro">Artikel Lainnya</a>
                    </div>
                    <div
                        class="flex flex-row items-center gap-3 px-4 py-2 rounded-lg justify-between h-content w-full bg-white dark:bg-scdark p-3 shadow">
                        <img class="h-20 aspect-square object-cover rounded-full"
                            src="laravel-filemanager/photos/Balam/16amir.jpg" />
                        <div class="flex flex-col gap-3">
                            <div class="flex flex-col justify-between">
                                <a aria-label="Lihat Berita Pilgub Lampung, Peruntungan Arinal Djunaidi Berhenti di Hari Rabu"
                                    media="all"
                                    href="news/pilgub-lampung-peruntungan-arinal-djunaidi-berhenti-di-hari-rabu.html"
                                    class="font-medium">Pilgub Lampung, Peruntungan Arinal Djunaidi Berhenti
                                    di...</a>
                                <p class="text-xs dark:text-gray-400 font-normal">Saya yakin kekalahan Arinal
                                    bersama
                                    10 bupati/walikota di Lampung...</p>
                            </div>
                            <div class="flex justify-between items-center">
                                <p class="text-gray-800 dark:text-gray-300 text-xs font-thin"><i
                                        class="ti ti-eye"></i> 457</p>
                                <!-- <p class="text-gray-800 dark:text-gray-300 text-xs font-thin"><i class="ti ti-calendar-event"></i> 30 Nov 2024</p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="flex-col gap-3 bg-gray-100 dark:bg-thdark dark:text-white mx-3 py-1 hidden lg:flex">
    <h4 class="uppercase border-b-4 border-bluelampro dark:border-redlampro w-fit font-bold mx-2 lg:text-lg">Politik</h4>
            <div class="shadow flex justify-between h-content w-full rounded-lg bg-white dark:bg-scdark">
            <div class="flex flex-col justify-between m-2 w-full">
                <a aria-label="Lihat Berita Pilkada 2024 di Lampung Aman dan Damai, Kapolda Beri Penghargaan ke Paslon Pemenang Tanpa Euforia Berlebih" media="all" href="https://Taring.co/news/pilkada-2024-di-lampung-aman-dan-damai-kapolda-beri-penghargaan-ke-paslon-pemenang-tanpa-euforia-berlebih" class="font-normal">
                    Pilkada 2024 di Lampung Aman dan Damai, Kapolda Beri Penghargaan...                </a>
                <div class="flex justify-between">
                    <p class="text-xs font-light"><i class="ti ti-eye"></i>113</p>
                    <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024</p>
                </div>
            </div>
            <img alt="" class="h-25 md:h-30 aspect-square lg:aspect-video object-cover ml-0 rounded-lg" src="https://Taring.co/laravel-filemanager/photos/35/2politik/IMG-20241202-WA0004.jpg" />
        </div>
            <div class="shadow flex justify-between h-content w-full rounded-lg bg-white dark:bg-scdark">
            <div class="flex flex-col justify-between m-2 w-full">
                <a aria-label="Lihat Berita Hitung Cepat Pilgub Lampung Diyakini Akurat, Jaga Nusantara Lampung Harapkan Mirza - Jihan Bisa Percepat Kemajuan Pesantren" media="all" href="https://Taring.co/news/hitung-cepat-pilgub-lampung-diyakini-akurat-jaga-nusantara-lampung-harapkan-mirza---jihan-bisa-percepat-kemajuan-pesantren" class="font-normal">
                    Hitung Cepat Pilgub Lampung Diyakini Akurat, Jaga Nusantara Lampung Harapkan...                </a>
                <div class="flex justify-between">
                    <p class="text-xs font-light"><i class="ti ti-eye"></i>111</p>
                    <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 01-Dec-2024</p>
                </div>
            </div>
            <img alt="" class="h-25 md:h-30 aspect-square lg:aspect-video object-cover ml-0 rounded-lg" src="https://Taring.co/laravel-filemanager/photos/35/2politik/IMG-20241130-WA0034.jpg" />
        </div>
            <div class="shadow flex justify-between h-content w-full rounded-lg bg-white dark:bg-scdark">
            <div class="flex flex-col justify-between m-2 w-full">
                <a aria-label="Lihat Berita Bawaslu Lampung Belum Temukan Laporan Dugaan Pelanggaran TSM Pasca Coblosan Pilkada 2024" media="all" href="https://Taring.co/news/bawaslu-lampung-belum-temukan-laporan-dugaan-pelanggaran-tsm-pasca-coblosan-pilkada-2024" class="font-normal">
                    Bawaslu Lampung Belum Temukan Laporan Dugaan Pelanggaran TSM Pasca Coblosan...                </a>
                <div class="flex justify-between">
                    <p class="text-xs font-light"><i class="ti ti-eye"></i>159</p>
                    <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 29-Nov-2024</p>
                </div>
            </div>
            <img alt="" class="h-25 md:h-30 aspect-square lg:aspect-video object-cover ml-0 rounded-lg" src="https://Taring.co/laravel-filemanager/photos/35/2politik/StickItImage_1732857350583.jpg" />
        </div>
            <div class="shadow flex justify-between h-content w-full rounded-lg bg-white dark:bg-scdark">
            <div class="flex flex-col justify-between m-2 w-full">
                <a aria-label="Lihat Berita Pasca Coblosan dan Hitung Cepat Pilkada, Kapolda Lampung Warning Paslon dan Pendukung Tak Bikin Gaduh" media="all" href="https://Taring.co/news/pasca-coblosan-dan-hitung-cepat-pilkada-kapolda-lampung-warning-paslon-dan-pendukung-tak-bikin-gaduh" class="font-normal">
                    Pasca Coblosan dan Hitung Cepat Pilkada, Kapolda Lampung Warning Paslon...                </a>
                <div class="flex justify-between">
                    <p class="text-xs font-light"><i class="ti ti-eye"></i>106</p>
                    <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 29-Nov-2024</p>
                </div>
            </div>
            <img alt="" class="h-25 md:h-30 aspect-square lg:aspect-video object-cover ml-0 rounded-lg" src="https://Taring.co/laravel-filemanager/photos/35/Balam/StickItImage_1732846758687.jpg" />
        </div>
            <div class="shadow flex justify-between h-content w-full rounded-lg bg-white dark:bg-scdark">
            <div class="flex flex-col justify-between m-2 w-full">
                <a aria-label="Lihat Berita Bersyukur Unggul Hitung Cepat di Pilgub Lampung 2024, Tim Pemenangan Mirza-Jihan Tunggu Hasil Resmi KPU" media="all" href="https://Taring.co/news/bersyukur-unggul-hitung-cepat-di-pilgub-lampung-2024-tim-pemenangan-mirza-jihan-tunggu-hasil-resmi-kpu" class="font-normal">
                    Bersyukur Unggul Hitung Cepat di Pilgub Lampung 2024, Tim Pemenangan...                </a>
                <div class="flex justify-between">
                    <p class="text-xs font-light"><i class="ti ti-eye"></i>123</p>
                    <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 28-Nov-2024</p>
                </div>
            </div>
            <img alt="" class="h-25 md:h-30 aspect-square lg:aspect-video object-cover ml-0 rounded-lg" src="https://Taring.co/laravel-filemanager/photos/35/Politik/Pilgub/IMG-20241128-WA0019.jpg" />
        </div>
    </div> -->
                <div class="flex justify-center px-2 py-1 bg-gray-100 dark:bg-thdark max-w-screen">
                </div>
                <div class="flex flex-col gap-3 bg-gray-100 text-black dark:bg-thdark dark:text-white py-1 mx-3">
                    <!-- <div class="sticky top-[8rem] text-lg z-10 uppercase border-b-4 border-bluelampro dark:border-redlampro p-2 pb-1 font-bold bg-gray-100 dark:bg-thdark dark:text-white"> -->
                    <div
                        class="uppercase border-b-4 border-bluelampro dark:border-redlampro w-fit font-bold mx-2 lg:text-lg">
                        <h4>Terpopuler</h4>
                    </div>
                    <div
                        class="flex flex-row gap-3 p-2 justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                        <div class="flex flex-col justify-between w-full">
                            <a media="all"
                                href="news/hitung-cepat-rakata-di-pilkada-lampung-timur-2024-ella---azwar-unggul-61-59-persen-dari-dawam---ketut.html"
                                class="font-normal">Hitung Cepat Rakata di Pilkada Lampung Timur 2024, Ella -
                                Azwar
                                Unggul...</a>
                            <div class="flex justify-between items-center pt-2">
                                <p
                                    class="uppercase text-xs font-normal bg-redlampro text-white w-fit px-2 py-0.5 rounded-full">
                                    Lampung Timur</p>
                                <div class="flex justify-between gap-3">
                                    <p class="text-xs font-light"><i class="ti ti-eye"></i> 7345</p>
                                    <p class="text-xs font-light hidden lg:block"><i
                                            class="ti ti-calendar-event"></i> 27-Nov-2024</p>
                                </div>
                            </div>
                        </div>
                        <img alt="thumbnail" class="h-25 md:h-30 aspect-square object-cover m-2 ml-0 rounded-lg"
                            src="laravel-filemanager/photos/35/2politik/IMG-20241127-WA0066.jpg" />
                    </div>
                    <div
                        class="flex flex-row gap-3 p-2 justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                        <div class="flex flex-col justify-between w-full">
                            <a media="all"
                                href="news/warga-bandar-lampung-temukan-bayi-di-dekat-bak-sampah-tinggalkan-wasiat-baru-lulus-kuliah.html"
                                class="font-normal">Warga Bandar Lampung Temukan Bayi di Dekat Bak Sampah,
                                Tinggalkan
                                Wasiat Baru...</a>
                            <div class="flex justify-between items-center pt-2">
                                <p
                                    class="uppercase text-xs font-normal bg-redlampro text-white w-fit px-2 py-0.5 rounded-full">
                                    Bandar Lampung</p>
                                <div class="flex justify-between gap-3">
                                    <p class="text-xs font-light"><i class="ti ti-eye"></i> 4837</p>
                                    <p class="text-xs font-light hidden lg:block"><i
                                            class="ti ti-calendar-event"></i> 26-Nov-2024</p>
                                </div>
                            </div>
                        </div>
                        <img alt="thumbnail" class="h-25 md:h-30 aspect-square object-cover m-2 ml-0 rounded-lg"
                            src="laravel-filemanager/photos/35/Kriminal/IMG-20241126-WA0030.jpg" />
                    </div>
                    <div
                        class="flex flex-row gap-3 p-2 justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                        <div class="flex flex-col justify-between w-full">
                            <a media="all"
                                href="news/hitung-cepat-rakata-di-pilkada-pesawaran-2024-paslon-aries-sandi---supriyanto-ungguli-nanda---antonius.html"
                                class="font-normal">Hitung Cepat Rakata di Pilkada Pesawaran 2024, Paslon Aries
                                Sandi
                                - Supriyanto...</a>
                            <div class="flex justify-between items-center pt-2">
                                <p
                                    class="uppercase text-xs font-normal bg-redlampro text-white w-fit px-2 py-0.5 rounded-full">
                                    Pesawaran</p>
                                <div class="flex justify-between gap-3">
                                    <p class="text-xs font-light"><i class="ti ti-eye"></i> 2854</p>
                                    <p class="text-xs font-light hidden lg:block"><i
                                            class="ti ti-calendar-event"></i> 27-Nov-2024</p>
                                </div>
                            </div>
                        </div>
                        <img alt="thumbnail" class="h-25 md:h-30 aspect-square object-cover m-2 ml-0 rounded-lg"
                            src="laravel-filemanager/photos/35/2politik/IMG-20241127-WA0073.jpg" />
                    </div>
                    <div
                        class="flex flex-row gap-3 p-2 justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                        <div class="flex flex-col justify-between w-full">
                            <a media="all"
                                href="news/data-akhir-hitung-cepat-rakata-di-pilkada-tubaba-novriwan---nadirsyah-unggul-37-67-persen-warga-pilih-kotak-kosong.html"
                                class="font-normal">Data Akhir Hitung Cepat Rakata di Pilkada Tubaba, Novriwan -
                                Nadirsyah Unggul,...</a>
                            <div class="flex justify-between items-center pt-2">
                                <p
                                    class="uppercase text-xs font-normal bg-redlampro text-white w-fit px-2 py-0.5 rounded-full">
                                    Tubaba</p>
                                <div class="flex justify-between gap-3">
                                    <p class="text-xs font-light"><i class="ti ti-eye"></i> 2328</p>
                                    <p class="text-xs font-light hidden lg:block"><i
                                            class="ti ti-calendar-event"></i> 28-Nov-2024</p>
                                </div>
                            </div>
                        </div>
                        <img alt="thumbnail" class="h-25 md:h-30 aspect-square object-cover m-2 ml-0 rounded-lg"
                            src="laravel-filemanager/photos/35/2politik/StickItImage_1732748340943.jpg" />
                    </div>
                    <div
                        class="flex flex-row gap-3 p-2 justify-between h-content w-full bg-white rounded-lg dark:bg-scdark shadow">
                        <div class="flex flex-col justify-between w-full">
                            <a media="all"
                                href="news/hitung-cepat-rakata-di-pilkada-lampung-tengah-2024-paslon-ardito---komang-koheri-unggul-69-persen.html"
                                class="font-normal">Hitung Cepat Rakata di Pilkada Lampung Tengah 2024, Paslon
                                Ardito
                                - Komang...</a>
                            <div class="flex justify-between items-center pt-2">
                                <p
                                    class="uppercase text-xs font-normal bg-redlampro text-white w-fit px-2 py-0.5 rounded-full">
                                    Lampung Tengah</p>
                                <div class="flex justify-between gap-3">
                                    <p class="text-xs font-light"><i class="ti ti-eye"></i> 2080</p>
                                    <p class="text-xs font-light hidden lg:block"><i
                                            class="ti ti-calendar-event"></i> 27-Nov-2024</p>
                                </div>
                            </div>
                        </div>
                        <img alt="thumbnail" class="h-25 md:h-30 aspect-square object-cover m-2 ml-0 rounded-lg"
                            src="laravel-filemanager/photos/35/2politik/StickItImage_1732697767762.jpg" />
                    </div>
                </div>

                <!-- <div class="flex-col gap-3 bg-gray-100 dark:bg-thdark dark:text-white mx-3 py-1 hidden lg:flex">
    <h4 class="uppercase border-b-4 border-bluelampro dark:border-redlampro w-fit font-bold mx-2 lg:text-lg">Tokoh</h4>
    </div> -->
                <div class="flex justify-center px-2 py-1 bg-gray-100 dark:bg-thdark max-w-screen">
                </div>
                <div class="flex flex-col gap-3 bg-gray-100 text-black dark:bg-thdark dark:text-white py-1 mx-3">
                    <!-- <div class="sticky top-[8rem] text-lg z-10 uppercase border-b-4 border-bluelampro dark:border-redlampro p-2 pb-1 font-bold bg-gray-100 dark:bg-thdark dark:text-white"> -->
                    <div
                        class="uppercase border-b-4 border-bluelampro dark:border-redlampro w-fit font-bold mx-2 lg:text-lg">
                        <h4>Sorotan</h4>
                    </div>
                    <div class="flex justify-between h-content w-full bg-white dark:bg-scdark shadow rounded-lg">
                        <div class="flex flex-col justify-between m-2 w-full">
                            <a media="all"href="news/dosen-polinela-prodi-hortikultura-berhasil-kembangkan-budidaya-tanaman-ciplukan-dengan-metode-vegetatif.html"
                                class="font-normal">Dosen Polinela Prodi Hortikultura Berhasil Kembangkan Budidaya
                                Tanaman Ciplukan dengan Metode Vegetatif</a>
                            <div class="flex justify-between items-center pt-2">
                                <p
                                    class="uppercase text-xs font-normal bg-redlampro text-white w-fit px-2 py-0.5 rounded-full">
                                    Polinela</p>
                                <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024
                                </p>
                            </div>
                        </div>
                        <img aria-label="thumbnail"
                            class="rounded-lg h-25 md:h-30 aspect-square object-cover m-2 ml-0 rounded-lg"
                            src="laravel-filemanager/photos/WhatsApp%20Image%202024-12-02%20at%2020.07.06.jpg" />
                    </div>
                    <div class="flex justify-between h-content w-full bg-white dark:bg-scdark shadow rounded-lg">
                        <div class="flex flex-col justify-between m-2 w-full">
                            <a media="all"href="news/smkn-rawajitu-timur-sukses-laksanakan-ujian-semester-ganjil-berbasis-teknologi-android.html"
                                class="font-normal">SMKN Rawajitu Timur Sukses Laksanakan Ujian Semester Ganjil
                                Berbasis Teknologi Android</a>
                            <div class="flex justify-between items-center pt-2">
                                <p
                                    class="uppercase text-xs font-normal bg-redlampro text-white w-fit px-2 py-0.5 rounded-full">
                                    Tulang Bawang</p>
                                <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024
                                </p>
                            </div>
                        </div>
                        <img aria-label="thumbnail"
                            class="rounded-lg h-25 md:h-30 aspect-square object-cover m-2 ml-0 rounded-lg"
                            src="laravel-filemanager/photos/33/Nafian/IMG-20241202-WA0029.jpg" />
                    </div>
                    <div class="flex justify-between h-content w-full bg-white dark:bg-scdark shadow rounded-lg">
                        <div class="flex flex-col justify-between m-2 w-full">
                            <a media="all"href="news/kapolres-lampung-selatan-beri-tali-asih-ke-petugas-pengamanan-di-pilkada-2024.html"
                                class="font-normal">Kapolres Lampung Selatan Beri Tali Asih ke Petugas Pengamanan
                                di
                                Pilkada 2024</a>
                            <div class="flex justify-between items-center pt-2">
                                <p
                                    class="uppercase text-xs font-normal bg-redlampro text-white w-fit px-2 py-0.5 rounded-full">
                                    Tulang Bawang</p>
                                <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024
                                </p>
                            </div>
                        </div>
                        <img aria-label="thumbnail"
                            class="rounded-lg h-25 md:h-30 aspect-square object-cover m-2 ml-0 rounded-lg"
                            src="laravel-filemanager/photos/35/Lamsel/IMG-20241202-WA0020.jpg" />
                    </div>
                    <div class="flex justify-between h-content w-full bg-white dark:bg-scdark shadow rounded-lg">
                        <div class="flex flex-col justify-between m-2 w-full">
                            <a media="all"href="news/jasad-pria-tak-dikenal-ditemukan-di-bekas-pos-sekuriti-pt-lambang-jaya-natar-ini-ciri-cirinya.html"
                                class="font-normal">Jasad Pria tak Dikenal Ditemukan di Bekas Pos Sekuriti PT
                                Lambang
                                Jaya Natar, ini Ciri-cirinya</a>
                            <div class="flex justify-between items-center pt-2">
                                <p
                                    class="uppercase text-xs font-normal bg-redlampro text-white w-fit px-2 py-0.5 rounded-full">
                                    Lampung Selatan</p>
                                <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024
                                </p>
                            </div>
                        </div>
                        <img aria-label="thumbnail"
                            class="rounded-lg h-25 md:h-30 aspect-square object-cover m-2 ml-0 rounded-lg"
                            src="laravel-filemanager/photos/LAMSEL1/02JASAD.jpg" />
                    </div>
                    <div class="flex justify-between h-content w-full bg-white dark:bg-scdark shadow rounded-lg">
                        <div class="flex flex-col justify-between m-2 w-full">
                            <a media="all"href="news/november-2024-bps-lampung-catat-ekonomi-lampung-alami-inflasi-0-42-persen-harga-bawang-inflasi-tertinggi.html"
                                class="font-normal">November 2024, BPS Lampung Catat Ekonomi Lampung Alami Inflasi
                                0,42 Persen, Harga Bawang Inflasi Tertinggi</a>
                            <div class="flex justify-between items-center pt-2">
                                <p
                                    class="uppercase text-xs font-normal bg-redlampro text-white w-fit px-2 py-0.5 rounded-full">
                                    Ekonomi</p>
                                <p class="text-xs font-light"><i class="ti ti-calendar-event"></i> 02-Dec-2024
                                </p>
                            </div>
                        </div>
                        <img aria-label="thumbnail"
                            class="rounded-lg h-25 md:h-30 aspect-square object-cover m-2 ml-0 rounded-lg"
                            src="laravel-filemanager/photos/33/PKL/StickItImage_1733130414580.jpg" />
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-3 bg-gray-100 text-black dark:bg-thdark dark:text-white py-1 mx-3">
            <div class="flex justify-between items-center mx-2">
            </div>
            <div class="p-2 flex flex-col rounded-lg bg-white dark:bg-scdark" style="gap: 2rem;">
                <ul class="list-group">
                    <li class="flex justify-center" style="padding-bottom: 1rem;">
                        <div class="uppercase border-b-4 border-bluelampro dark:border-redlampro w-fit font-bold">
                            Mitra</div>
                    </li>
                    <li class="pb-1 flex justify-center" style="flex-wrap: wrap;">
                        <a aria-label="Mitra" media="all" href="https://unila.ac.id/" target="blank">
                            <p class="font-normal px-1 pb-1">Universitas Lampung</p>
                        </a>
                        <a aria-label="Mitra" media="all" href="http://malahayati.ac.id/" target="blank">
                            <p class="font-normal px-1 pb-1">Universitas Malahayati</p>
                        </a>
                        <a aria-label="Mitra" media="all" href="http://polinela.ac.id/" target="blank">
                            <p class="font-normal px-1 pb-1">Politeknik Negeri Lampung</p>
                        </a>
                        <a aria-label="Mitra" media="all" href="https://www.darmajaya.ac.id/" target="blank">
                            <p class="font-normal px-1 pb-1">IIB Darmajaya</p>
                        </a>
                        <a aria-label="Mitra" media="all" href="https://teknokrat.ac.id/" target="blank">
                            <p class="font-normal px-1 pb-1">Universitas Teknokrat Indonesia</p>
                        </a>
                        <a aria-label="Mitra" media="all" href="https://umitra.ac.id/" target="blank">
                            <p class="font-normal px-1 pb-1">Umitra Lampung</p>
                        </a>
                        <a aria-label="Mitra" media="all" href="https://rsudam.lampungprov.go.id/"
                            target="blank">
                            <p class="font-normal px-1 pb-1">RSUDAM Provinsi Lampung</p>
                        </a>
                        <a aria-label="Mitra" media="all" href="https://tunashondapramuka.com/"
                            target="blank">
                            <p class="font-normal px-1 pb-1">TDM Honda Lampung</p>
                        </a>
                        <a aria-label="Mitra" media="all" href="https://banklampung.co.id/" target="blank">
                            <p class="font-normal px-1 pb-1">Bank Lampung</p>
                        </a>
                        <a aria-label="Mitra" media="all" href="https://setwan-dprd.lampungprov.go.id/"
                            target="blank">
                            <p class="font-normal px-1 pb-1">DPRD Provinsi Lampung</p>
                        </a>
                        <a aria-label="Mitra" media="all" href="https://dprd-bandarlampung.go.id/"
                            target="blank">
                            <p class="font-normal px-1 pb-1">DPRD Kota Bandar Lampung</p>
                        </a>
                        <a aria-label="Mitra" media="all" href="https://dprd.metrokota.go.id/"
                            target="blank">
                            <p class="font-normal px-1 pb-1">DPRD Kota Metro</p>
                        </a>
                        <a aria-label="Mitra" media="all" href="https://www.lampungprov.go.id/"
                            target="blank">
                            <p class="font-normal px-1 pb-1">Pemrov Lampung</p>
                        </a>
                        <a aria-label="Mitra" media="all" href="https://bandarlampungkota.go.id/"
                            target="blank">
                            <p class="font-normal px-1 pb-1">Pemkot Bandar Lampung</p>
                        </a>
                        <a aria-label="Mitra" media="all" href="https://www.lampungselatankab.go.id/"
                            target="blank">
                            <p class="font-normal px-1 pb-1">Pemkab Lampung Selatan</p>
                        </a>
                        <a aria-label="Mitra" media="all" href="https://pesisirbaratkab.go.id/"
                            target="blank">
                            <p class="font-normal px-1 pb-1">Pemkab Pesisir Barat</p>
                        </a>
                        <a aria-label="Mitra" media="all" href="https://pesawarankab.go.id/" target="blank">
                            <p class="font-normal px-1 pb-1">Pemkab Pesawaran</p>
                        </a>
                        <a aria-label="Mitra" media="all" href="https://web.lampungtengahkab.go.id/"
                            target="blank">
                            <p class="font-normal px-1 pb-1">Pemkab Lampung Tengah</p>
                        </a>
                        <a aria-label="Mitra" media="all" href="https://metrokota.go.id/" target="blank">
                            <p class="font-normal px-1 pb-1">Pemkot Kota Metro</p>
                        </a>
                        <a aria-label="Mitra" media="all" href="https://mesujikab.go.id/" target="blank">
                            <p class="font-normal px-1 pb-1">Pemkab Mesuji</p>
                        </a>
                        <a aria-label="Mitra" media="all" href="https://tulangbawangbaratkab.go.id/"
                            target="blank">
                            <p class="font-normal px-1 pb-1">Pemkab Tulangbawang Barat</p>
                        </a>
                    </li>
                </ul>
                <ul class="list-group">
                    <li class="flex justify-center" style="padding-bottom: 1rem;">
                        <div class="uppercase border-b-4 border-bluelampro dark:border-redlampro w-fit font-bold">
                            Network</div>
                    </li>
                    <li class="pb-1 flex justify-center" style="flex-wrap: wrap;">
                        <a aria-label="Network" media="all"
                            href="https://www.suara.com/partner/content/lampungpro" target="blank">
                            <p class="font-normal px-1 pb-1">Suaradotcom</p>
                        </a>
                        <a aria-label="Network" media="all" href="https://klikpositif.com/" target="blank">
                            <p class="font-normal px-1 pb-1">Klikpositif</p>
                        </a>
                        <a aria-label="Network" media="all" href="https://siberindo.co/" target="blank">
                            <p class="font-normal px-1 pb-1">Siberindo</p>
                        </a>
                        <a aria-label="Network" media="all" href="https://www.goindonesia.co/"
                            target="blank">
                            <p class="font-normal px-1 pb-1">Goindonesia</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div
            class="py-5 mb-20 lg:mb-5 lg:py-2 h-content max-w-screen px-2 bg-white dark:bg-scdark m-2 rounded-lg lg:px-20">
            <div
                class="flex flex-col lg:flex-row gap-3 lg:gap-0 space-y-2 px-2 pb-4 content-center lg:justify-between">
                <img src="frontend/assets/img/logopx.jpeg" alt="" srcset=""
                    class="px-7 lg:px-0 mx-auto lg:mx-2 h-20 w-fit">
                <div class="flex justify-evenly items-center px-7 lg:px-0 lg:space-x-2">
                    <div
                        class="bg-blue-300 dark:bg-blue-800 h-10 aspect-square rounded-lg items-center flex justify-center">
                        <a aria-label="Buka Facebook Lampung Pro" media="all" target="_blank"
                            href="https://facebook.com/LampungPro/?ref=bookmarks"><i
                                class="ti ti-brand-facebook font-bold text-2xl text-blue-700 dark:text-blue-200"></i></a>
                    </div>
                    <div
                        class="bg-rose-200 dark:bg-rose-800 h-10 aspect-square rounded-lg items-center flex justify-center">
                        <a aria-label="Buka Instagram Lampung Pro" media="all" target="_blank"
                            href="https://www.instagram.com/lampungpro/"><i
                                class="ti ti-brand-instagram font-bold text-2xl text-rose-700 dark:text-rose-200"></i></a>
                    </div>
                    <div
                        class="bg-sky-300 dark:bg-sky-700 h-10 aspect-square rounded-lg items-center flex justify-center">
                        <a aria-label="Buka Twitter Lampung Pro" media="all" target="_blank"
                            href="https://twitter.com/infolampungpro"><i
                                class="ti ti-brand-twitter font-bold text-2xl text-sky-700 dark:text-sky-200"></i></a>
                    </div>
                    <div
                        class="bg-black dark:bg-black h-10 aspect-square rounded-lg items-center flex justify-center">
                        <a aria-label="Buka Tiktok Lampung Pro" media="all" target="_blank"
                            href="https://www.tiktok.com/@infolampungpro?lang=id-ID"><i
                                class="ti ti-brand-tiktok font-bold text-2xl text-white dark:text-white"></i></a>
                    </div>
                    <div
                        class="bg-rose-200 dark:bg-rose-800 h-10 aspect-square rounded-lg items-center flex justify-center">
                        <a aria-label="Buka Youtube Lampung Pro" media="all" target="_blank"
                            href="https://www.youtube.com/@LampungPro"><i
                                class="ti ti-brand-youtube font-bold text-2xl text-rose-700 dark:text-rose-200"></i></a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="flex flex-col-reverse lg:flex-row justify-between items-center gap-2">
                <p class="text-center dark:text-white font-light text-sm">Copyright ©2024 lampungproco. All rights
                    reserved</p>
                <div
                    class="flex gap-3 lg:w-3/6 flex-col md:flex-row items-center lg:justify-between text-bluelampro dark:text-redlampro uppercase font-medium text-base p-2 text-center whitespace-nowrap">
                    <a aria-label="Buka Tentang kami" media="all" href="news/tentang-kami.html">Tentang
                        kami</a>
                    <a aria-label="Buka Tentang kami" media="all" href="news/disclaimer.html">Disclaimer</a>
                    <a aria-label="Buka Tentang kami" media="all" href="news/pedoman-siber.html">Pedoman
                        siber</a>
                    <a aria-label="Buka Tentang kami" media="all" href="news/kerjasama.html">Kerjasama</a>
                </div>
            </div>
        </div>
    </div>


    <script src="frontend/assets/js/jquery-3.7.1.min.js"></script>
    <script src="frontend/assets/js/function.button.js"></script>
    <script src="frontend/assets/js/headline.js"></script>


    <script>
        let btnClosePopupHome = document.querySelector('.closePopupHome')
        let popupAdsHome = document.querySelector('.popupAdsHome')

        let btnClosePopupAds = document.querySelector('.closePopupAds')
        let popupAds = document.querySelector('.popupAds')

        if (popupAds != null) {
            setTimeout(() => {
                btnClosePopupAds.classList.remove('hidden')
            }, 1000)

            btnClosePopupAds.addEventListener('click', (e) => {
                e.preventDefault()
                popupAds.remove()
            })
        }

        if (popupAdsHome != null) {
            btnClosePopupHome.addEventListener('click', (e) => {
                e.preventDefault()
                popupAdsHome.remove()
            })
        }
    </script>
</x-frontend-layout>
