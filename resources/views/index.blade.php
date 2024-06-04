<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dhaha Prima</title>
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/logo.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <nav class="fixed top-0 z-[100] h-[100px] w-screen border-b-[1px] border-default-border-color bg-white p-0">
        <div class="container mx-auto flex h-full flex-wrap px-5 py-[24px] sm:px-10">
            <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="object-contain w-40 h-full" />
            <ul class="ml-auto hidden w-[40%] flex-1 flex-wrap items-center justify-end gap-[65px] md:flex">
                <li>
                    <a href="#"
                        class="relative font-medium after:absolute after:bottom-[-5px] after:left-0 after:h-[2px] after:w-0 after:rounded-md after:bg-primary after:transition-all after:duration-300 after:content-[''] hover:after:w-full">
                        Beranda
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="after:transition-all relative font-medium after:absolute after:bottom-[-5px] after:left-0 after:h-[2px] after:w-0 after:rounded-md after:bg-primary after:duration-300 after:content-[''] hover:after:w-full">
                        Testimoni
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="relative font-medium after:absolute after:bottom-[-5px] after:left-0 after:h-[2px] after:w-0 after:rounded-md after:bg-primary after:transition-all after:duration-300 after:content-[''] hover:after:w-full">
                        Layanan
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="relative font-medium after:absolute after:bottom-[-5px] after:left-0 after:h-[2px] after:w-0 after:rounded-md after:bg-primary after:transition-all after:duration-300 after:content-[''] hover:after:w-full">
                        Kontak
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <section id="beranda"
        class="mt-[100px] h-max w-full relative  sm:bg-none bg-contain bg-center bg-no-repeat pb-[100px]">
        <div
            class="absolute top-0 bottom-0 left-0 right-0 lg:hidden bg-[url('/public/assets/images/connected_wordl.svg')] bg-contain sm:bg-[center_top_8rem] md:bg-top bg-no-repeat">
        </div>
        <div class="absolute top-0 bottom-0 z-10 w-full h-full bg-white opacity-90">
        </div>
        <div class="container relative z-20 flex flex-wrap h-full p-5 mx-auto md:p-16 gap-y-8">
            <div class="flex flex-col justify-center lg:w-[50%] w-full">
                <p class="mb-2 text-xl font-normal text-gray-500 md:text-2xl lg:text-3xl ">
                    PT DHAHA PRIMA NET
                </p>
                <h1 class="text-2xl font-bold lg:text-5xl md:text-3xl lg:leading-[60px]">
                    Solusi Layanan Akses Internet Terbaik Di Kelasnya
                </h1>
                <p class="my-4 mb-6 text-[16px] font-normal">
                    Nikmati layanan akses internet fiber optic berkecapatan
                    tinggi dengan nyaman, aman & stabilitas di atas
                    rata-rata. Mulai Dari: Rp. 165.000 / Bulan
                </p>
                <a href="#kontak"
                    class="px-8 py-3 text-sm font-medium tracking-wide uppercase rounded-full md:text-lg w-max bg-primary">
                    Daftar Sekarang
                </a>
            </div>
            <div class="flex items-center justify-end w-full lg:w-[35%] ml-24">
                <img src="{{ asset('assets/images/connected_wordl.svg') }}" alt="background world"
                    class="w-0 lg:w-full" />
            </div>
        </div>
    </section>

    <section class="bg-semi-sky-blue">
        <div class="container relative mx-auto p-[18px] md:p-[50px]">
            <img src="{{ asset('assets/images/circle.svg') }}" alt="circle"
                class="absolute top-[-50px] w-[100px] z-10" />
            <div
                class="m-auto mt-[-120px] flex h-full min-h-[230px] w-full max-w-[900px] flex-col items-center justify-center rounded-bl-[50px] rounded-br rounded-tl rounded-tr-[50px] bg-secondary p-7 lg:px-[100px] text-white relative z-20">
                <p class="mb-4 text-lg font-bold lg:text-2xl">
                    "Dhaha Prima Hadir Menjangkau Seluruh Negeri"
                </p>
                <p class="md:text-center text-start text-xs leading-[22px]">
                    Kami bermitra dengan banyak perusahaan pengembang
                    infrastruktur telekomunikasi untuk membangun
                    infrastruktur dengan standar internasional dan
                    menyediakan layanan internet eksklusif berkualitas
                    premium untuk Perumahaan, Perkantoran, Perhotelan dan
                    Berbagai Macam Industri Lainnya. Kami hadir untuk
                    memberikan yang terbaik kepada seluruh pengguna layanan
                    kami di PERKOTAAN maupun di PERDESAAN, dari IBU KOTA
                    sampai PELOSOK NEGERI.
                </p>
            </div>

            <div class="mt-[80px] flex flex-col gap-[20px]">
                <div class="min-h-[50px] w-full rounded bg-white" data-aos="fade-up">
                    <div class="header flex border-b-[1px] border-default-border-color px-[28px] py-5">
                        <div class="flex gap-2">
                            <div class="red h-[20px] w-[20px] rounded-full bg-red-circle"></div>
                            <div class="red h-[20px] w-[20px] rounded-full bg-yellow-circle"></div>
                            <div class="red h-[20px] w-[20px] rounded-full bg-green-circle"></div>
                        </div>
                    </div>

                    <div class="body flex flex-wrap px-[28px] py-[35px]">
                        <div class="mb-5 flex w-full items-center justify-center md:mb-0 md:w-[25%]">
                            <div class="flex h-[180px] w-[250px] items-center justify-center rounded-lg bg-secondary">
                                <img src="{{ asset('assets/images/router-yellow.svg') }}" alt="icon" />
                            </div>
                        </div>
                        <div class="w-full md:w-[75%] md:pl-6 lg:pl-7">
                            <p class="mb-2 text-center text-[28px] font-bold md:text-start">
                                DHAHA PRIMA FIBER
                            </p>
                            <p class="text-[11px] leading-[22px]">
                                Dengan teknologi 100% optical network akses
                                internet dirumah anda secepat cahaya!
                                Layanan yang DHAHA PRIMA FIBER distribuskan
                                kerumah anda Tanpa Batasan Kuota (FUP) anda
                                tidak perlu khawatir kecepatan akses menurun
                                karena Batasan Kuota yang terlampaui,
                                kestabilan di atas rata-rata dengan dukungan
                                jaringan fully redundant network kami yang
                                terhubung ke p enyedia layanan terkemuka di
                                dunia seperti Google, META, CloudFlare, AWS,
                                ZenLayer, ByteDance dan lain sebagainya
                                menjadikan kegiatan digital di rumah anda
                                menjadi lebih cepat, stabil, aman dan
                                nyaman. Streaming Video tanpa Buffering,
                                Akses dan Scroll Sosial Media tanpa
                                hambatan, Meeting dan Belajar Online tanpa
                                kendala, Belanja ataupun Transaksi secara
                                Online dengan aman, bermain GAME tanpa
                                gangguan atau jeda, anti lag dan anti jitter
                                dengan latensi rendah. Berkegiatan digital
                                di rumah tanpa kekhawatiran dengan DHAHA
                                PRIMA FIBER.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="min-h-[50px] w-full rounded bg-white" data-aos="fade-up">
                    <div class="header flex border-b-[1px] border-default-border-color px-[28px] py-5">
                        <div class="flex gap-2">
                            <div class="red h-[20px] w-[20px] rounded-full bg-red-circle"></div>
                            <div class="red h-[20px] w-[20px] rounded-full bg-yellow-circle"></div>
                            <div class="red h-[20px] w-[20px] rounded-full bg-green-circle"></div>
                        </div>
                    </div>

                    <div class="body flex flex-wrap px-[28px] py-[35px]">
                        <div class="mb-5 flex w-full items-center justify-center md:mb-0 md:w-[25%]">
                            <div class="flex h-[180px] w-[250px] items-center justify-center rounded-lg bg-secondary">
                                <img src="{{ asset('assets/images/bank-yellow.svg') }}" alt="icon" />
                            </div>
                        </div>
                        <div class="w-full md:w-[75%] md:pl-6 lg:pl-7">
                            <p class="mb-2 text-center text-[28px] font-bold md:text-start">
                                DHAHA PRIMA CORPORATE
                            </p>
                            <p class="text-[11px] leading-[22px]">
                                Layanan akses internet berdedikasi untuk
                                kebutuhan perkantoran dan berbagai macam
                                industri skala menengah keatas yang
                                membutuhkan konektivitas eksklusif, dengan
                                dedicated bandwidth atau committed
                                bandwidth. DHAHA PRIMA CORPORATE menyediakan
                                bandwidth dengan sumber daya khusus CIR
                                (Committed Information Rate) 1:1 yang
                                dialokasikan dan diperuntukkan hanya untuk 1
                                pelanggan dengan kecepatan transmisi data
                                yang tinggi, stabil konsisten tanpa
                                fluktuasi serta garansi ketersediaan
                                jaringan dengan SLA (Service Level
                                Agreement) 99,8%. DHAHA PRIMA CORPORATE
                                didistribusikan melalui minimal 2 jalur
                                eksklusif (Redundant Link) pada backbone &
                                last mile sehingga dalam waktu yang sangat
                                singkat bilamana terjadi gangguan pada salah
                                satu jalur distribusi layanan, dengan cepat
                                akan digantikan oleh distribusi dari jalur
                                lainnya agar layanan tetap tersedia secara
                                optimal di sisi pengguna layanan DHAHA PRIMA
                                CORPORATE.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="min-h-[50px] w-full rounded bg-white" data-aos="fade-up">
                    <div class="header flex border-b-[1px] border-default-border-color px-[28px] py-5">
                        <div class="flex gap-2">
                            <div class="red h-[20px] w-[20px] rounded-full bg-red-circle"></div>
                            <div class="red h-[20px] w-[20px] rounded-full bg-yellow-circle"></div>
                            <div class="red h-[20px] w-[20px] rounded-full bg-green-circle"></div>
                        </div>
                    </div>

                    <div class="body flex flex-wrap px-[28px] py-[35px]">
                        <div class="mb-5 flex w-full items-center justify-center md:mb-0 md:w-[25%]">
                            <div class="flex h-[180px] w-[250px] items-center justify-center rounded-lg bg-secondary">
                                <img src="{{ asset('assets/images/base-station-yellow.svg') }}" alt="icon" />
                            </div>
                        </div>
                        <div class="w-full md:w-[75%] md:pl-6 lg:pl-7">
                            <p class="mb-2 text-center text-[28px] font-bold md:text-start">
                                DHAHA PRIMA HOSPITALITY
                            </p>
                            <p class="text-[11px] leading-[22px]">
                                Sebagai perusahaan yang memiliki produk
                                unggulan Managed Service Provider
                                Hospitality / Perhotelan, DHAHA PRIMA
                                HOSPITALITY MANAGED SERVICE memberikan
                                optimasi layanan akses internet, penyediaan
                                serta pengelolaan sumber daya informasi dan
                                teknologi baik berupa perangkat lunak dan
                                perangkat keras (software & hardware),
                                beserta sumber daya manusia yang dibutuhkan
                                ataupun memberikan edukasi kepada sumber
                                daya manusia yang sudah dimiliki oleh
                                pengguna layanan. DHAHA PRIMA HOSPITALITY
                                MANAGED SERVICE didukung oleh tenaga ahli
                                bersertifikasi profesional dan menggunakan
                                perangkat keras jaringan telekomunikasi
                                internet kelas dunia seperti JUNIPER, CISCO,
                                ARUBA, RUIJIE, UBIQUITY dan lain sebagainya
                                untuk menjamin layanan yang kami berikan
                                adalah layanan terbaik untuk tamu dan
                                customer hotel pengguna layanan DHAHA PRIMA
                                HOSPITALITY MANAGED SERVICE.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="lg:py-[70px] py-10 relative overflow-hidden">
        <div class="container relative flex flex-wrap gap-5 p-5 mx-auto mb-10 overflow-visible lg:p-5 lg:px-20">
            <div
                class="w-[350px] h-[350px] bg-primary rounded-full absolute top-[-200px] left-[-200px] blur-[150px] z-[-1]">
            </div>
            <div class="flex w-full items-center justify-center lg:w-[40%] ">
                <img src="{{ asset('assets/images/undraw_working_late_re_0c3y.svg') }}" alt="image"
                    class="w-[250px]">
            </div>
            <div class="flex flex-col flex-1  w-[60%] ">
                <p class="lg:text-4xl lg:leading-[52px] text-xl leading-8 font-bold mb-4">Mau Berlangganan Internet di
                    Rumah?
                    #DHAHAPRIMAinAJA
                </p>
                <p class="mb-6 text-xs leading-6 lg:text-sm">Era digital memberikan banyak kemudahan dalam
                    beraktivitas
                    sehari-hari,
                    seperti
                    meeting online,
                    belanja online, mengembangkan bisnis secara online, upload download, bermain game online,
                    menayangkan sesi live dan streaming. Layanan Internet DHAHA PRIMA FIBER hadir dengan kapasitas
                    bandwidth dan kecepatan akses internet secepat cahaya, biaya berlangganan yang terjangkau dengan
                    package yang bisa disesuaikan dengan kebutuhan. Memanjakan dan memberikan pengalaman terbaik kepada
                    setiap pengguna layanan Internet DHAHA PRIMA FIBER dalam kegiatan digital di Rumah 24 jam tanpa
                    perlu khawatir.</p>
                <div class="flex flex-col mb-4 lg:flex-row gap-y-4">
                    <div class="flex items-center flex-1 gap-2">
                        <img src="{{ asset('assets/images/circle-checklist.svg') }}" alt="checklist" class="w-7 h-7">
                        <p class="text-sm font-semibold">UPLOAD & DOWNLOAD SIMETRIS 1:1</p>
                    </div>
                    <div class="flex items-center flex-1 gap-2">
                        <img src="{{ asset('assets/images/circle-checklist.svg') }}" alt="checklist"
                            class="w-7 h-7">
                        <p class="text-sm font-semibold">UNLIMITED TANPA KUOTA / FUP</p>
                    </div>
                </div>
                <div class="flex flex-col mb-4 lg:flex-row gap-y-4">
                    <div class="flex items-center flex-1 gap-2">
                        <img src="{{ asset('assets/images/circle-checklist.svg') }}" alt="checklist"
                            class="w-7 h-7">
                        <p class="text-sm font-semibold">24 JAM CUSTOMER SERVICE</p>
                    </div>
                    <div class="flex items-center flex-1 gap-2">
                        <img src="{{ asset('assets/images/circle-checklist.svg') }}" alt="checklist"
                            class="w-7 h-7">
                        <p class="text-sm font-semibold">100% OPTICAL NETWORK</p>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="container relative flex flex-wrap-reverse gap-5 p-5 mx-auto mb-10 overflow-visible lg:p-5 lg:px-20">
            <img src="{{ asset('assets/images/multiple-circle-bg-secondary.svg') }}" alt="icon"
                class="absolute w-[100px] right-[-40px] top-0">

            <div class="flex flex-col flex-1 relative z-10 w-full lg:w-[60%]">
                <p class="lg:text-4xl lg:leading-[52px] leading-8 text-xl font-bold mb-4">Konektivitas Internet
                    Perhotelan
                    Kekinian
                </p>
                <p class="mb-6 text-xs leading-6 lg:text-sm">DHAHA PRIMA HOSPITALITY MANAGED SERVICE memberikan solusi
                    tepat guna
                    yang dapat disesuaikan dan aman untuk memenuhi kebutuhaan serta harapan staf dan tamu akan
                    konektivitas internet perhotelan yang kekinian. dengan kemampuan menjaga kualitas layanan tetap
                    sempurna pada jam sibuk, menyederhanakan manajemen operasional perangkat jaringan internet
                    perhotelan, dan menjamin keamanan lalu lintas data pada jaringan internet perhotelan. DHAHA PRIMA
                    HOSPITALITY MANAGED SERVICE memiliki jam terbang tinggi serta pengalaman panjang bertahun-tahun dan
                    didukung oleh tenaga ahli bersertifikasi profesional untuk memberikan solusi terbaik konektivitas
                    internet perhotelan kekinian.</p>
                <div class="flex flex-col mb-4 lg:flex-row gap-y-4">
                    <div class="flex items-center flex-1 gap-2">
                        <img src="{{ asset('assets/images/circle-checklist.svg') }}" alt="checklist"
                            class="w-7 h-7">
                        <p class="text-sm font-semibold">DUKUNGAN TEKNIS PENUH</p>
                    </div>
                    <div class="flex items-center flex-1 gap-2">
                        <img src="{{ asset('assets/images/circle-checklist.svg') }}" alt="checklist"
                            class="w-7 h-7">
                        <p class="text-sm font-semibold">HANDAL & HEMAT BIAYA</p>
                    </div>
                </div>
                <div class="flex flex-col mb-4 lg:flex-row gap-y-4">
                    <div class="flex items-center flex-1 gap-2">
                        <img src="{{ asset('assets/images/circle-checklist.svg') }}" alt="checklist"
                            class="w-7 h-7">
                        <p class="text-sm font-semibold">TEKNOLOGI KELAS DUNIA</p>
                    </div>
                    <div class="flex items-center flex-1 gap-2">
                        <img src="{{ asset('assets/images/circle-checklist.svg') }}" alt="checklist"
                            class="w-7 h-7">
                        <p class="text-sm font-semibold">100% TINGKAT KEPUASAN PELANGGAN</p>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center w-full lg:w-[40%] relative z-10 ">
                <img src="{{ asset('assets/images/best_place.svg') }}" alt="image"
                    class="w-[280px] md:w-[350px]">
            </div>
        </div>
    </section>


    <section class="bg-secondary">
        <div
            class="container flex flex-wrap items-center justify-center px-4 mx-auto text-white lg:px-10 lg:justify-center py-14 gap-y-4 gap-x-4">

            <div class="lg:max-w-[250px] max-w-[320px] h-[120px] w-full flex items-center gap-4">
                <div class="w-[40%]">
                    <div class="flex justify-center items-center w-[100px] h-[100px] border-4 rounded-full">
                        <p class="font-semibold ">100%</p>
                    </div>
                </div>
                <div class="flex flex-col justify-center w-[60%]">
                    <p class="font-light uppercase">fiber optic</p>
                    <p class="font-bold uppercase">Infra</p>
                </div>
            </div>

            <div class="lg:max-w-[250px] max-w-[320px] h-[120px] w-full flex  items-center gap-4  ">
                <div class="w-[40%]">
                    <div class="flex justify-center items-center w-[100px] h-[100px] border-4 rounded-full">
                        <p class="font-semibold ">100%</p>
                    </div>
                </div>
                <div class="flex flex-col justify-center w-[60%]">
                    <p class="font-light uppercase">TINGKAT</p>
                    <p class="font-bold uppercase">SLA</p>
                </div>
            </div>

            <div class="lg:max-w-[250px] max-w-[320px] h-[120px]  w-full flex  items-center  gap-4  ">
                <div class="w-[40%]">
                    <div class="flex justify-center items-center w-[100px] h-[100px] border-4 rounded-full">
                        <p class="font-semibold ">100%</p>
                    </div>
                </div>
                <div class="flex flex-col justify-center w-[60%]">
                    <p class="font-light uppercase">DUKUNGAN TEKNIS</p>
                    <p class="font-bold uppercase">24/7</p>
                </div>
            </div>

            <div class="lg:max-w-[250px] max-w-[320px] h-[120px]  w-full flex   items-center gap-4  ">
                <div class="w-[40%]">
                    <div class="flex justify-center items-center w-[100px] h-[100px] border-4 rounded-full">
                        <p class="font-semibold ">100%</p>
                    </div>
                </div>
                <div class="flex flex-col justify-center w-[60%]">
                    <p class="font-light uppercase">TANPA BATASAN</p>
                    <p class="font-bold uppercase">Kuota</p>
                </div>
            </div>
        </div>
    </section>


    {{-- Service Section --}}
    <section class="bg-semi-sky-blue">
        <div class="container px-5 py-20 mx-auto lg:py-20 lg:px-20">
            <p class="text-2xl font-semibold text-start md:text-center lg:text-4xl">Kami Persembahkan Beberapa Layanan
                Unggulan</p>
            <p class="mt-6 text-sm text-start md:text-center md:text-base">Berikut adalah produk dan layanan yang kami
                berikan dengan
                penuh
                dedikasi untuk
                memberikan solusi terbaik
                dan tepat guna.</p>

            <div class="flex flex-wrap items-center justify-center mt-10 lg:mt-20 gap-y-12 gap-x-5 lg:justify-evenly">
                {{-- Card Service 1 --}}
                <div class="card-service max-w-[350px] w-full min-h-[400px] h-full bg-white rounded p-10"
                    data-aos="fade-up">
                    <div class="w-[80px] h-[80px] flex items-center justify-center bg-bg-box-cyan-transparent rounded">
                        <img src="{{ asset('assets/images/global-line.svg') }}" alt="icon">
                    </div>
                    <p class="mt-6 font-semibold">INTERNET SERVICE PROVIDER</p>
                    <p class="mt-5 text-xs leading-6 text-custom-text-card">Jasa layanan sambungan internet yang dapat
                        disesuaikan
                        dengan kebutuhan
                        masing-masing, baik itu
                        layanan Internet Broadband dan Layanan Internet Dedicated untuk pengguna rumahan ataupun
                        kebutuhan berbagai macam industri</p>
                </div>
                {{-- Card Service 2 --}}
                <div data-aos="fade-up" data-aos-delay="200"
                    class="card-service max-w-[350px] w-full min-h-[400px] h-full bg-white rounded p-10">
                    <div
                        class="w-[80px] h-[80px] flex items-center justify-center bg-bg-box-purple-transparent rounded">
                        <img src="{{ asset('assets/images/server-line.svg') }}" alt="icon">
                    </div>
                    <p class="mt-6 font-semibold">CO LOCATION</p>
                    <p class="mt-5 text-xs leading-6 text-custom-text-card">Colocation (terkadang disebut sebagai
                        “Colo”) adalah layanan penyewaan ruang untuk penempatan server dan perangkat keras komputasi
                        lainnya seperti router, switch dan sebagainya pada fasilitas Datacenter yang kami kelola di
                        berbagai daerah.</p>
                </div>
                {{-- Card Service 3 --}}
                <div data-aos="fade-up" data-aos-delay="400"
                    class="card-service max-w-[350px] w-full min-h-[400px] h-full bg-white rounded p-10">
                    <div class="w-[80px] h-[80px] flex items-center justify-center bg-bg-box-blue-transparent rounded">
                        <img src="{{ asset('assets/images/router-line.svg') }}" alt="icon">
                    </div>
                    <p class="mt-6 font-semibold">MANAGED SERVICE INTERNET</p>
                    <p class="mt-5 text-xs leading-6 text-custom-text-card">JMerupakan solusi managed service internet
                        berupa layanan konektivitas internet, pemantauan serta pengelolaan jaringan di berbagai macam
                        indsutri secara end-to-end pada network device maupun carriage dengan proaktif dan realtime.</p>
                </div>
                {{-- Card Service 4 --}}
                <div data-aos="fade-up" data-aos-delay="600"
                    class="card-service max-w-[350px] w-full min-h-[400px] h-full bg-white rounded p-10">
                    <div class="w-[80px] h-[80px] flex items-center justify-center bg-bg-box-blue-transparent rounded">
                        <img src="{{ asset('assets/images/base-station-line.svg') }}" alt="icon">
                    </div>
                    <p class="mt-6 font-semibold">METRO-E, VPN & V-SAT</p>
                    <p class="mt-5 text-xs leading-6 text-custom-text-card">Digital Connectivity Service yang melayani
                        kebutuhan komunikasi atau konektivitas perusahaan dan berbagai macam industri yang memiliki
                        kantor pusat serta beberapa kantor cabang untuk dapat di hubungkan melalui Layanan METRO-E, VPN
                        & V-SAT.</p>
                </div>
                {{-- Card Service 5 --}}
                <div data-aos="fade-up" data-aos-delay="800"
                    class="card-service max-w-[350px] w-full min-h-[400px] h-full bg-white rounded p-10">
                    <div
                        class="w-[80px] h-[80px] flex items-center justify-center bg-bg-box-green-transparent rounded">
                        <img src="{{ asset('assets/images/cloud-line.svg') }}" alt="icon">
                    </div>
                    <p class="mt-6 font-semibold">CLOUD SERVICE</p>
                    <p class="mt-5 text-xs leading-6 text-custom-text-card">Layanan yang menawarkan ruang penyimpanan
                        yang bisa digunakan untuk keperluan dan kebutuhan satu entitas bisnis yang bersifat pribadi atau
                        eksklusif yang bisa di akses secara realtime dengan keamanan tingkat tinggi dan terjamin
                        kerahasiaannya.</p>
                </div>
                {{-- Card Service 6 --}}
                <div data-aos="fade-up" data-aos-delay="1000"
                    class="card-service max-w-[350px] w-full min-h-[400px] h-full bg-white rounded p-10">
                    <div
                        class="w-[80px] h-[80px] flex items-center justify-center bg-bg-box-yellow-transparent rounded">
                        <img src="{{ asset('assets/images/user-voice-line.svg') }}" alt="icon">
                    </div>
                    <p class="mt-6 font-semibold">IT CONSULTING & SERVICE</p>
                    <p class="mt-5 text-xs leading-6 text-custom-text-card">Adalah layanan konsultasi seputar IT dengan
                        tenaga ahli profesional dan berpengalaman untuk membantu dalam merancang, menerapkan,
                        optimalisasi, perbaikan serta pengelolan aset yang tepat guna dengan analisa yang akurat.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Company use our service --}}
    <section>
        <div class="container relative p-5 mx-auto overflow-hidden py-14 lg:p-20">
            <div class="circle-1 w-[500px] h-[85px] bg-primary blur-[180px] z-[-1] rotate-45 absolute left-0 top-52">
            </div>

            <div
                class="circle-1 w-[400px] h-[85px] bg-primary blur-[180px] z-[-1] rotate-[130deg] absolute right-10 top-96 ">
            </div>

            {{-- Row 1 --}}
            <div class="flex flex-col flex-wrap justify-start lg:flex-row lg:justify-between">
                <div class="lg:w-[45%] w-full ">
                    <p
                        class="text-xl md:text-3xl md:leading-10 font-bold mb-5 lg:text-4xl lg:leading-[52px] lg:mb-5 lg:font-semibold">
                        Berbagai
                        Industri yang
                        Menggunakan
                        Layanan Kami
                    </p>
                    <p class="mb-10 text-sm lg:text-xl lg:leading-8">Kami memiliki Sumber Daya Manusia profesional di
                        bidangnya dan
                        menggunakan
                        perangkat
                        telekomunikasi
                        yang diproduksi oleh perusahaan kelas dunia untuk memenuhi kebutuhan industri.</p>
                </div>
                <div class="lg:w-[50%] w-full flex flex-col items-center lg:items-start md:flex-row lg:flex-col gap-5">
                    <div data-aos="fade-up"
                        class="max-w-[340px] min-h-[85px] w-full h-[85px] flex p-5 bg-secondary rounded items-center gap-3">
                        <img src="{{ asset('assets/images/bxs-factory.svg') }}" alt="icon"
                            class="w-[50px] h-[50px]">
                        <p class="text-lg font-semibold text-white">Manufaktur</p>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="200"
                        class="max-w-[340px] min-h-[85px] w-full h-[85px] flex p-5 bg-secondary rounded items-center gap-3 m-auto">
                        <img src="{{ asset('assets/images/hospital-line.svg') }}" alt="icon"
                            class="w-[50px] h-[50px]">
                        <p class="text-lg font-semibold text-white">Kesehatan</p>
                    </div>
                </div>
            </div>
            {{-- Row 2 --}}
            <div class="flex flex-wrap justify-around gap-5 my-5 lg:justify-end lg:gap-7 md:mt-5 xl:mt-10">
                <div data-aos="fade-left"
                    class="max-w-[340px] min-h-[85px] w-full h-[85px] flex p-5 bg-secondary rounded items-center gap-3">
                    <img src="{{ asset('assets/images/truck-line.svg') }}" alt="icon" class="w-[50px] h-[50px]">
                    <p class="text-lg font-semibold text-white">Ekspedisi & Logistik</p>
                </div>
                <div data-aos="fade-left" data-aos-delay="200"
                    class="max-w-[340px] min-h-[85px] w-full h-[85px] flex p-5 bg-secondary rounded items-center gap-3">
                    <img src="{{ asset('assets/images/money-dollar-circle-line.svg') }}" alt="icon"
                        class="w-[50px] h-[50px]">
                    <p class="text-lg font-semibold text-white">Perbankan</p>
                </div>
                <div data-aos="fade-left" data-aos-delay="400"
                    class="max-w-[340px] min-h-[85px] w-full h-[85px] flex p-5 bg-secondary rounded items-center gap-3">
                    <img src="{{ asset('assets/images/building-line.svg') }}" alt="icon"
                        class="w-[50px] h-[50px]">
                    <p class="text-lg font-semibold text-white">Pemerintahan</p>
                </div>
            </div>
            {{-- Row 3 --}}
            <div class="flex flex-wrap justify-around gap-5 lg:justify-start lg:gap-7 lg:mt-10">
                <div data-aos="fade-right"
                    class="max-w-[340px] min-h-[85px] w-full h-[85px] flex p-5 bg-secondary rounded items-center gap-3">
                    <img src="{{ asset('assets/images/school-line.svg') }}" alt="icon"
                        class="w-[50px] h-[50px]">
                    <p class="text-lg font-semibold text-white">Pendidikan</p>
                </div>
                <div data-aos="fade-right" data-aos-delay="200"
                    class="max-w-[340px] min-h-[85px] w-full h-[85px] flex p-5 bg-secondary rounded items-center gap-3">
                    <img src="{{ asset('assets/images/home-office-line.svg') }}" alt="icon"
                        class="w-[50px] h-[50px]">
                    <p class="text-lg font-semibold text-white">Perumahan</p>
                </div>
                <div data-aos="fade-right" data-aos-delay="400"
                    class="max-w-[340px] min-h-[85px] w-full h-[85px] flex p-5 bg-secondary rounded items-center gap-3">
                    <img src="{{ asset('assets/images/store-3-line.svg') }}" alt="icon"
                        class="w-[50px] h-[50px]">
                    <p class="text-lg font-semibold text-white">Retail</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Price Cards --}}
    <section class="bg-semi-sky-blue">
        <div class="container p-5 mx-auto lg:p-20 lg:px-14 py-14 ">
            <div class="max-w-[640px] w-full mx-auto ">
                <p class="text-2xl font-semibold leading-9 text-start md:text-center md:text-3xl">Paket Internet DHAHA
                    PRIMA</p>
                <p class="mt-5 text-sm leading-6 md:text-center text-custom-text-card">Internet Secepat Cahaya dengan
                    harga
                    yang
                    sangat
                    terjangkau
                    dan terbaik di
                    kelasnya. Mulai dari Rp.
                    165.000 per bulan, mau berlangganan internet? #DHAHAPRIMAinAJA</p>
            </div>

            <div class="flex flex-wrap justify-around gap-1 mt-16 gap-y-10 w-100">
                @foreach ($priceCards as $priceCard)
                    <div class="price-card bg-white border max-w-[380px] w-full min-h-[500px] p-8">
                        <p class="mb-3 text-lg font-semibold">{{ $priceCard['title'] }}</p>
                        <p class="text-sm">{{ $priceCard['desc'] }}</p>
                        <div class="flex items-end gap-1 mt-5">
                            <p class="text-xl font-light">{{ $priceCard['price_arr']['rp'] }}</p>
                            <p class="text-4xl font-bold">{{ $priceCard['price_arr']['price'] }}</p>
                            <p class="text-xl font-light">{{ $priceCard['price_arr']['month'] }}</p>
                        </div>
                        <a href="#"
                            class="block w-full py-3 mt-5 tracking-wide text-center text-white rounded bg-primary">
                            Klik untuk berlangganan
                        </a>
                        <div class="w-full h-[1px] bg-default-border-color my-8"></div>
                        <div class="flex flex-col gap-2">
                            @foreach ($priceCard['features'] as $feature)
                                <div class="flex flex-wrap items-center gap-2">
                                    <img src="{{ asset('assets/images/check.svg') }}" alt="icon">
                                    <p class="text-xs">{{ $feature }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Review Cards --}}
    <section id="reviews" class="relative overflow-hidden bg-semi-sky-blue">
        <img src="{{ asset('assets/images/bg-circle-group-2.svg') }}" alt="icon"
            class="absolute top-80 lg:left-0 lg:top-0">
        <div class="w-[400px] h-[400px] rounded-full bg-primary absolute right-[-300px] lg:right-[-250px] top-[-50px]">
        </div>
        <div class="container relative z-10 p-5 mx-auto lg:p-10 ">
            <div class="max-w-[700px] mx-auto ">
                <p class="text-2xl font-semibold lg:text-center">DHAHA PRIMA Dipercaya Oleh 2000+ pengguna
                    internet
                    rumahan dan 200+
                    pelaku
                    usaha</p>
                <p class="mt-5 text-sm leading-6 lg:text-center">Layanan internet yang kami distribusikan sudah
                    digunakan dan
                    dipercayai oleh
                    ribuan
                    perumahan serta
                    ratusan pelaku usaha / industri dari berbagai macam bidang di Indonesia, layanan kami sudah terbukti
                    dapat diandalkan setiap saat serta mampu memenuhi ekspektasi pelanggan.</p>
            </div>

            <div class="relative z-10 flex mt-20 swiper">
                <div class="w-full pb-16 swiper-wrapper">
                    @foreach ($reviewCards as $reviewCard)
                        <div class="flex-col bg-white swiper-slide card-reviewflex">
                            <div class="flex-1 w-full p-8">
                                <p class="text-5xl text-primary">❝</p>
                                <p class="text-sm leading-6 text-custom-text-card">{{ $reviewCard['text'] }}</p>
                            </div>
                            <div
                                class="flex flex-wrap w-full p-8 border-t-[1px] border-default-border-color gap-4 footer">
                                <div class="xl:w-[20%] w-full flex items-center">
                                    <img src="{{ asset('assets/images/user-review-image.jpg') }}" alt="user-image"
                                        class="w-[70px] h-[70px] rounded object-cover">
                                </div>
                                <div class="xl:w-[75%] w-full flex flex-col gap-2 justify-center ">
                                    <div class="flex items-center gap-1">
                                        <img src="{{ asset('assets/images/star-icon.svg') }}" alt="icon"
                                            class="w-[20px] h-[20px]">
                                        <p class="font-semibold">5.0</p>
                                    </div>
                                    <p class="text-sm font-semibold">{{ $reviewCard['name'] }}</p>
                                    <p class="text-sm">{{ $reviewCard['job'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
                {{-- <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div> --}}
            </div>
        </div>
    </section>

    <footer class="bg-secondary">
        <div class="container px-10 pt-16 mx-auto lg:px-10">
            <div class="relative flex flex-wrap justify-between pb-8 top-footer">
                <div
                    class="bg-[url('/public/assets/images/bg-footer.svg')] bg-secondary top-0 left-0 right-0 bottom-0 bg-contain bg-no-repeat bg-center absolute">
                </div>
                <div class="absolute z-10 w-full h-full p-20 opacity-75 layer bg-secondary"></div>

                <div class="flex flex-col md:w-[55%] m-auto lg:w-[30%] gap-4 mb-5 z-10">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo"
                        class="w-[250px] md:m-auto lg:m-0">
                    <p style="line-height: 26px !important"
                        class="text-lg font-light text-white text-start md:text-center md:text-sm lg:text-start">
                        Solusi
                        Layanan Akses
                        Internet
                        Terbaik Di
                        Kelasnya,
                        Internet Secepat
                        Cahaya Hadir Untuk Anda.</p>
                </div>
                <div class="lg:w-[65%] flex flex-wrap flex-col md:flex-row justify-around gap-5 z-10">
                    <div class="flex flex-col flex-wrap lg:w-[20%] gap-3 text-white">
                        <p class="text-lg font-semibold">Layanan</p>
                        <span class="w-full mt-3">
                            <a href="" class="mt-3 text-sm font-light anchor-link ">
                                Internet
                                Service Provider </a>
                        </span>
                        <span class="w-full">
                            <a href="" class="mt-3 text-sm font-light anchor-link ">
                                Co Location</a>
                        </span>
                        <span class="w-full">
                            <a href="" class="mt-3 text-sm font-light anchor-link ">
                                Managed Service </a>
                        </span>
                        <span class="w-full">
                            <a href="" class="mt-3 text-sm font-light anchor-link ">
                                Metro-E,VPN,V-Sat</a>
                        </span>
                    </div>
                    <div class="flex flex-col lg:w-[20%] gap-3 text-white">
                        <p class="text-lg font-semibold">Halaman</p>
                        <a class="mt-3 text-sm font-light anchor-link">Beranda</a>
                        <a class="text-sm font-light anchor-link">Testimoni</a>
                        <a class="text-sm font-light anchor-link">Layanan</a>
                        <a class="text-sm font-light anchor-link">Kontak</a>
                    </div>
                    <div class="flex flex-col lg:w-[40%] gap-3 text-white">
                        <p class="text-lg font-semibold">Kontak</p>
                        <div class="flex flex-wrap gap-1 mt-3 ">
                            <p class="text-sm font-semibold">Alamat :</p>
                            <p class="text-sm font-extralight">Jl Ralarangan No.01 A, Desa Ketawang, Larangan,
                                Sumenep, Jawa Timur,
                                69462</p>
                        </div>
                        <div class="flex flex-wrap gap-1 ">
                            <p class="text-sm font-semibold">Email :</p>
                            <p class="text-sm font-extralight">cs@DhahaPrimaNet</p>
                        </div>
                        <div class="flex flex-wrap gap-1 ">
                            <p class="text-sm font-semibold">Telepon :</p>
                            <p class="text-sm font-extralight">+62817770044</p>
                        </div>
                        <div class="flex flex-wrap gap-1 ">
                            <p class="text-sm font-semibold">WhatsApp :</p>
                            <p class="text-sm font-extralight">+62817770044</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between py-5 bottom-footer">
                <div class="flex gap-5">
                    <a href="#" class="w-[20px] h-[20px]">
                        <img src="{{ asset('assets/images/facebook-icon.svg') }}" alt="icon">
                    </a>
                    <a href="#" class="w-[20px] h-[20px]">
                        <img src="{{ asset('assets/images/instagram-icon.svg') }}" alt="icon">
                    </a>
                    <a href="#" class="w-[20px] h-[20px]">
                        <img src="{{ asset('assets/images/twitter-x-icon.svg') }}" alt="icon">
                    </a>
                    <a href="#" class="w-[20px] h-[20px]">
                        <img src="{{ asset('assets/images/youtube-icon.svg') }}" alt="icon">
                    </a>
                </div>
                <p class="text-sm font-light text-white">© 2024 PT DHAHA PRIMA NET</p>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        AOS.init();
        const swiper = new Swiper('.swiper', {
            direction: 'horizontal',
            freeMode: true,
            loop: true,
            slidesPerView: 3,
            centeredSlides: true,
            spaceBetween: 40,

            keyboard: {
                enabled: true,
            },

            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },

            pagination: {
                el: '.swiper-pagination',
                dynamicBullets: true,
                clickable: true,
            },

            breakpoints: {
                1280: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 2,
                },
                320: {
                    slidesPerView: 1,
                },
            }
            // navigation: {
            //     nextEl: '.swiper-button-next',
            //     prevEl: '.swiper-button-prev',
            // },
        });
    </script>

</body>

</html>
