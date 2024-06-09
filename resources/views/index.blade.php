<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Barokah NET</title>
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/fav-icon.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
    {{-- Loader --}}
    <div id="loader-wrapper"
        class="fixed z-[200] flex items-center justify-center w-screen h-screen  bg-white transition-all ease-in-out duration-500">
        <div class="loading-wave">
            <div class="loading-bar"></div>
            <div class="loading-bar"></div>
            <div class="loading-bar"></div>
            <div class="loading-bar"></div>
        </div>
    </div>

    {{-- Navbar --}}
    <nav class="fixed top-0 z-[100] h-[100px] w-screen border-b-[1px] border-default-border-color bg-white">
        <div class="container static flex flex-wrap items-center h-full mx-auto md:px-16">
            <div class="static h-full px-5">
                <img src="{{ asset('assets/images/logo-barokahnet.svg') }}" alt="logo"
                    class="object-contain w-32 h-full md:w-52" />
            </div>
            <ul
                class="absolute gap-y-7 px-5 flex flex-col flex-wrap py-6 bg-white w-full md:ml-auto md:w-[60%] md:static md:flex-row md:items-center md:justify-end md:gap-7 md:flex menu z-[-1] md:z-10">
                <li class="menu-item">
                    <a href="#beranda"
                        class="relative font-medium after:absolute after:bottom-[-5px] after:left-0 after:h-[2px] after:w-0 after:rounded-md after:bg-primary after:transition-all after:duration-300 after:content-[''] hover:after:w-full">
                        Beranda
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#profile"
                        class="after:transition-all relative font-medium after:absolute after:bottom-[-5px] after:left-0 after:h-[2px] after:w-0 after:rounded-md after:bg-primary after:duration-300 after:content-[''] hover:after:w-full">
                        Profile
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#produk"
                        class="relative font-medium after:absolute after:bottom-[-5px] after:left-0 after:h-[2px] after:w-0 after:rounded-md after:bg-primary after:transition-all after:duration-300 after:content-[''] hover:after:w-full">
                        Produk
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#kontak"
                        class="relative font-medium after:absolute after:bottom-[-5px] after:left-0 after:h-[2px] after:w-0 after:rounded-md after:bg-primary after:transition-all after:duration-300 after:content-[''] hover:after:w-full">
                        Kontak
                    </a>
                </li>
            </ul>
            <div class="grid w-8 h-8 ml-auto mr-5 place-items-center md:hidden" onclick="toggleNavbar(event)">
                <i class="ri-menu-line ri-xl"></i>
            </div>
        </div>
    </nav>

    <section id="beranda" class="h-max w-full relative sm:bg-none bg-contain bg-center bg-no-repeat pb-[100px]">
        {{-- Background Mobile,Tablet --}}
        <div
            class="absolute top-0 bottom-0 left-0 right-0 xl:hidden bg-[url('/public/assets/images/connected_wordl.svg')] bg-contain bg-[center_top_4rem] md:bg-top bg-no-repeat">
        </div>

        {{-- Background Laptop,Desktop --}}
        <div
            class="absolute top-0 bottom-0 left-0 right-0  bg-[url('/public/assets/images/hero-section-pattern.svg')] bg-contain sm:bg-[center_top_8rem] hidden xl:inline md:bg-top bg-no-repeat">
        </div>

        <div class="absolute top-0 bottom-0 z-10 w-full h-full bg-white xl:hidden opacity-90">
        </div>

        <div
            class="container relative z-20 flex justify-around flex-wrap h-full p-5 mx-auto lg:p-16 pt-[120px] md:pt-[130px] lg:pt-[150px] gap-y-8">
            <div class="flex flex-col justify-center lg:w-[50%] w-full md:w-[55%]">
                <p data-aos="fade-right" data-aos-delay="800"
                    class="mb-2 text-xl font-bold text-secondary md:text-4xl lg:text-3xl ">
                    PT LINK DATA SUMBER BAROKAH
                </p>
                <h1 data-aos="fade-right" data-aos-delay="900"
                    class="text-2xl font-bold leading-8 md:leading-10 xl:leading-[64px] xl:text-5xl lg:leading-[58px] lg:text-4xl sm:text-3xl">
                    Solusi Layanan Akses <span
                        class="relative after:absolute after:content-[''] after:w-full after:h-1/3 after:left-0 after:bottom-0 after:bg-primary after:z-[-1]">Internet
                        Terbaik</span> Di Kelasnya
                </h1>
                <p data-aos="fade-right" data-aos-delay="1000" class="my-4 mb-6 text-[16px] font-normal">
                    Nikmati layanan akses internet fiber optic berkecapatan
                    tinggi dengan nyaman, aman & stabilitas di atas
                    rata-rata. Mulai Dari: Rp. 165.000 / Bulan
                </p>
                <div class="flex flex-wrap gap-5">
                    <a data-aos="fade-right" data-aos-delay="1100" href="https://wa.me/6281335964620" target="_blank"
                        class="flex items-center gap-2 px-5 py-2 text-sm font-medium tracking-wide text-white uppercase rounded-full w-max bg-primary">
                        <i class="text-xl ri-whatsapp-line"></i>
                        Daftar Sekarang
                    </a>
                    <a data-aos="fade-right" data-aos-delay="1100" href="#produk"
                        class="flex items-center gap-2 px-5 py-2 text-sm font-bold tracking-wide uppercase border-2 rounded-full border-primary w-max text-primary">
                        <i class="text-xl ri-router-line text-primary"></i>
                        Produk Kami
                    </a>
                </div>
            </div>
            <div class="flex items-center lg:justify-end w-full md:w-[35%] lg:w-[37%] lg:ml-24 my-8 md:my-0"
                data-aos="fade-up" data-aos-delay="900">
                <img src="{{ asset('assets/images/hero-img.svg') }}" alt="background world"
                    class="block w-full mx-auto" />
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container relative mx-auto p-[18px] md:p-[50px]">
            <img src="{{ asset('assets/images/circle.svg') }}" alt="circle"
                class="absolute top-[-50px] w-[100px] z-10" />

            <div id="profile" data-aos="fade-up" data-aos-delay="1200"
                class="m-auto mt-[-120px] flex h-full min-h-[230px] w-full max-w-[900px] flex-col items-center justify-center rounded-bl-[50px] rounded-br rounded-tl rounded-tr-[50px] bg-secondary p-7 lg:px-[100px] text-white relative z-20">
                <p class="mb-4 text-lg font-bold lg:text-2xl">
                    "BarokahNet Hadir Menjangkau Seluruh Negeri"
                </p>
                <p class="md:text-center text-start text-xs leading-[22px]">
                    Sebagai perusahan swasta yang bergerak di bidang layanan Internet (ISP)
                    dengan biaya murah dan terjangkau BarokahNet hadir untuk memenuhi kebutuhan masyarakat yang selama ini sulit mendapatkan akses internet.
                    Semoga kehadiran layanan jaringan internet murah ini bisa mempermudah banyak orang untuk mendapatkan akses internet dan menjawab semua kebutuhan masyarakat di era modern.
                </p>
            </div>

            {{-- <div class="mt-[80px] flex flex-col gap-[20px]">
                @foreach ($serviceCards_1 as $card)
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
                                <div
                                    class="flex h-[180px] w-[250px] items-center justify-center rounded-lg bg-secondary">
                                    <img src="{{ asset($card['icon']) }}" alt="icon" />
                                </div>
                            </div>
                            <div class="w-full md:w-[75%] md:pl-6 lg:pl-7">
                                <p class="mb-2 text-center text-[28px] font-bold md:text-start">
                                    {{ $card['title'] }}
                                </p>
                                <p class="text-[11px] leading-[22px]">
                                    {{ $card['desc'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> --}}
        </div>
    </section>

    <section class="lg:py-[70px] py-10 relative overflow-hidden">
        <div
            class="container relative flex flex-wrap p-5 mx-auto mb-10 overflow-visible gap-x-5 gap-y-10 lg:py-5 lg:px-20">

            <div
                class="w-[350px] h-[350px] bg-primary rounded-full absolute top-[-200px] right-[-200px] blur-[0] z-[-1]">
            </div>

            <div
                class="w-[350px] h-[350px] bg-primary rounded-full absolute bottom-[-320px] left-[-150px] blur-[0] z-[-1]">
            </div>

            <div class="flex w-full items-center justify-center lg:w-[40%] ">
                <img src="{{ asset('assets/images/undraw_working_late_re_0c3y.svg') }}" alt="image"
                    class="w-[300px] md:w-[350px]">
            </div>

            <div class="flex flex-col w-full lg:w-[55%] ">
                <p class="lg:text-4xl lg:leading-[52px] text-xl md:text-center lg:text-start leading-8 font-bold mb-4">
                    Mau Berlangganan
                    Internet di
                    Rumah?
                    <span class="text-primary">
                        #BAROKAHNETinAJA
                    </span>
                </p>
                <p class="mb-6 text-xs leading-6 md:leading-7 md:text-sm">Era digital memberikan banyak kemudahan dalam
                    beraktivitas
                    sehari-hari,
                    seperti
                    meeting online,
                    belanja online, mengembangkan bisnis secara online, upload download, bermain game online,
                    menayangkan sesi live dan streaming. Layanan Internet BarokahNet hadir dengan kapasitas
                    bandwidth dan kecepatan akses internet secepat cahaya, biaya berlangganan yang terjangkau dengan
                    package yang bisa disesuaikan dengan kebutuhan. Memanjakan dan memberikan pengalaman terbaik kepada
                    setiap pengguna layanan Internet BarokahNet FIBER dalam kegiatan digital di Rumah 24 jam tanpa
                    perlu khawatir.</p>
                <div class="flex flex-col mb-4 md:flex-row gap-y-4">
                    <div class="flex items-center flex-1 gap-2">
                        <img src="{{ asset('assets/images/circle-checklist.svg') }}" alt="checklist" class="w-7 h-7">
                        <p class="text-sm font-semibold">UPLOAD & DOWNLOAD SIMETRIS 1:1</p>
                    </div>
                    <div class="flex items-center flex-1 gap-2">
                        <img src="{{ asset('assets/images/circle-checklist.svg') }}" alt="checklist" class="w-7 h-7">
                        <p class="text-sm font-semibold">UNLIMITED TANPA KUOTA / FUP</p>
                    </div>
                </div>
                <div class="flex flex-col mb-4 md:flex-row gap-y-4">
                    <div class="flex items-center flex-1 gap-2">
                        <img src="{{ asset('assets/images/circle-checklist.svg') }}" alt="checklist" class="w-7 h-7">
                        <p class="text-sm font-semibold">24 JAM CUSTOMER SERVICE</p>
                    </div>
                    <div class="flex items-center flex-1 gap-2">
                        <img src="{{ asset('assets/images/circle-checklist.svg') }}" alt="checklist" class="w-7 h-7">
                        <p class="text-sm font-semibold">100% OPTICAL NETWORK</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div
            class="container relative flex flex-wrap-reverse gap-5 p-5 mx-auto mb-10 overflow-visible lg:p-5 lg:px-20">
            <img src="{{ asset('assets/images/multiple-circle-bg-secondary.svg') }}" alt="icon"
                class="absolute w-[100px] right-[-40px] top-0">

            <div class="flex flex-col flex-1 relative z-10 w-full lg:w-[60%]">
                <p class="lg:text-4xl lg:leading-[52px] leading-8 text-xl font-bold mb-4 md:text-center lg:text-start">
                    Konektivitas Internet
                    Perhotelan
                    Kekinian
                </p>
                <p class="mb-6 text-xs leading-6 md:leading-7 md:text-sm">DHAHA PRIMA HOSPITALITY MANAGED SERVICE
                    memberikan solusi
                    tepat guna
                    yang dapat disesuaikan dan aman untuk memenuhi kebutuhaan serta harapan staf dan tamu akan
                    konektivitas internet perhotelan yang kekinian. dengan kemampuan menjaga kualitas layanan tetap
                    sempurna pada jam sibuk, menyederhanakan manajemen operasional perangkat jaringan internet
                    perhotelan, dan menjamin keamanan lalu lintas data pada jaringan internet perhotelan. DHAHA PRIMA
                    HOSPITALITY MANAGED SERVICE memiliki jam terbang tinggi serta pengalaman panjang bertahun-tahun dan
                    didukung oleh tenaga ahli bersertifikasi profesional untuk memberikan solusi terbaik konektivitas
                    internet perhotelan kekinian.</p>
                <div class="flex flex-col mb-4 md:flex-row gap-y-4">
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
                <div class="flex flex-col mb-4 md:flex-row gap-y-4">
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
        </div> --}}
    </section>

    {{-- <section class="bg-secondary">
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
    </section> --}}

    {{-- Service Section --}}
    {{-- <section class="bg-semi-sky-blue">
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
    </section> --}}

    {{-- Company use our service --}}
    {{-- <section>
        <div class="container relative p-5 mx-auto overflow-hidden py-14 lg:p-20">
            <div class="circle-1 w-[500px] h-[85px] bg-primary blur-[180px] z-[-1] rotate-45 absolute left-0 top-52">
            </div>

            <div
                class="circle-1 w-[400px] h-[85px] bg-primary blur-[180px] z-[-1] rotate-[130deg] absolute right-10 top-96 ">
            </div>

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
    </section> --}}

    {{-- Price Cards --}}
    <section class="bg-semi-sky-blue" id="produk">
        <div class="container p-5 mx-auto pb-14 pt-[120px] lg:pt-[120px] lg:pb-20 lg:px-14">
            <div class="max-w-[640px] w-full mx-auto ">
                <p class="text-2xl font-semibold leading-9 text-start md:text-center md:text-3xl">Paket Internet
                    <span class="font-bold text-primary">BarokahNet</span>
                </p>
                <p class="mt-5 text-sm leading-6 md:text-center text-custom-text-card">Internet Secepat Cahaya dengan
                    harga
                    yang
                    sangat
                    terjangkau
                    dan terbaik di
                    kelasnya. Mulai dari Rp.
                    165.000 per bulan, mau berlangganan internet? <span class=" text-primary">#BAROKAHNETinAJA</span>
                </p>
            </div>

            <div class="flex flex-wrap justify-around gap-1 mt-16 gap-y-10 w-100">
                @foreach ($priceCards as $priceCard)
                    <div class="price-card bg-white border max-w-[350px] lg:max-w-[380px] w-full min-h-[500px] p-8"
                        data-aos="fade-up" data-aos-delay="{{ $priceCard['delay'] }}">
                        <p class="mb-3 text-lg font-semibold">{{ $priceCard['title'] }}</p>
                        <p class="text-sm">{{ $priceCard['desc'] }}</p>
                        <div class="flex items-end gap-1 mt-5">
                            <p class="text-xl font-light">{{ $priceCard['price_arr']['rp'] }}</p>
                            <p class="text-4xl font-bold">{{ $priceCard['price_arr']['price'] }}</p>
                            <p class="text-xl font-light">{{ $priceCard['price_arr']['month'] }}</p>
                        </div>
                        <a href="https://wa.me/6281335964620" target="_blank"
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
    {{-- <section id="reviews" class="relative overflow-hidden bg-semi-sky-blue">
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
            </div>
        </div>
    </section> --}}

    <footer class="bg-secondary" id="kontak">
        <div class="container px-5 pt-16 mx-auto lg:px-10">
            <div class="relative flex flex-wrap justify-between pb-8 top-footer">
                {{-- Background & Overlay --}}
                <div
                    class="bg-[url('/public/assets/images/bg-footer.svg')] bg-secondary top-0 left-0 right-0 bottom-0 bg-contain bg-no-repeat bg-center absolute">
                </div>
                <div class="absolute z-10 w-full h-full p-20 opacity-75 layer bg-secondary"></div>
                {{-- Background & Overlay --}}

                <div class="flex flex-col w-full mx-auto justify-center lg:w-[30%] gap-4 mb-5 z-10">
                    <img src="{{ asset('assets/images/logo-barokahnet-footer.svg') }}" alt="logo"
                        class="w-[250px] md:m-auto lg:m-0">
                    <p
                        class="text-base font-light leading-7 text-white text-start md:text-center md:text-sm lg:text-start">
                        Solusi
                        Layanan Akses
                        Internet
                        Terbaik Di
                        Kelasnya,
                        Internet Secepat
                        Cahaya Hadir Untuk Anda.</p>
                </div>

                <div
                    class="lg:w-[65%] w-full flex flex-wrap flex-col md:flex-row justify-around mt-5 lg:mt-0 gap-5 gap-y-10 z-10">
                    <div class="flex flex-col md:w-[40%] lg:w-[40%] gap-3 text-white">
                        <p class="text-lg font-semibold">Kontak</p>
                        <div class="flex flex-wrap gap-1 mt-3 ">
                            <p class="text-sm font-semibold">Alamat :</p>
                            <p class="text-sm font-extralight">Candi,Adan-adan RT 12 RW 05,Gurah,Kab Kediri,Jawa
                                Timur,64181</p>
                        </div>
                        <div class="flex flex-wrap gap-1 anchor-link ">
                            <p class="text-sm font-semibold">Email :</p>
                            <a href="https://wa.me/6281335964620 " target="_blank"
                                class="text-sm font-extralight">cs@BarokahNet</a>
                        </div>
                        <div class="flex flex-wrap gap-1 anchor-link">
                            <p class="text-sm font-semibold">Cs :</p>
                            <a href="https://wa.me/62817770044 " target="_blank" class="text-sm font-extralight">
                                +62 817-770-044</a>
                        </div>
                        <div class="flex flex-wrap gap-1 anchor-link">
                            <p class="text-sm font-semibold">HD :</p>
                            <a href="https://wa.me/62817770033 " target="_blank" class="text-sm font-extralight">
                                +62 817-770-033</a>
                        </div>
                    </div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15195.003405760319!2d112.117233!3d-7.771619000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e785b1946c19117%3A0xb0ecac15977ef548!2sPT.DHAHA%20PRIMA.NET!5e1!3m2!1sen!2sus!4v1717598914600!5m2!1sen!2sus"
                        class="md:w-full md:max-w-[320px] lg:w-[400px] h-[300px]" style="border:0;"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div
                class="flex flex-wrap justify-between gap-5 py-5 bottom-footer border-t-[1px] border-default-border-color">
                {{-- <div class="flex gap-5">
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
                </div> --}}
                <p class="text-sm font-light tracking-wider text-white ">© 2024 PT BAROKAH NET</p>
            </div>
        </div>
    </footer>

    <div class="fixed z-50 flex flex-col chatwa-container bottom-3 right-3">
        <div
            class="shadow chatwa-wrapper transition-all duration-500 max-w-[350px] bg-white p-5 rounded flex-col gap-y-4">
            <div class="mb-2 text-xs chat-header">
                <p>Silahkan klik nomer kami di bawah untuk memulai percakapan di <span
                        class="font-bold">Whatsapp</span></p>
            </div>
            <div class="flex flex-col chat-body gap-y-3">
                <a href="https://wa.me/+62817770044" target="_blank"
                    class="flex items-center gap-5 p-3 bg-semi-sky-blue">
                    <img src="{{ asset('assets/images/fav-icon.png') }}" alt="icon" class="w-8 h-8">
                    <p class="text-sm">+62 817-770-044</p>
                </a>
            </div>
        </div>
        <div class="flex items-center justify-end gap-3 p-2 contact-wa-btn">
            <div class="flex items-center h-8 px-3 bg-white rounded shadow info-chat">
                <p class="text-xs">Butuh bantuan? <span class="font-semibold">Hubungi kami</span></p>
            </div>
            <button type="button" onclick="toggleContactWA(event)"
                class="flex items-center justify-center rounded-full cursor-pointer bg-primary w-14 h-14">
                <i class="text-2xl text-white ri-whatsapp-line"></i>
            </button>
        </div>
    </div>


    {{-- <button onclick="toTop(this)"
        class="fixed z-50 grid w-12 h-12 rounded bg-primary bottom-8 right-8 place-items-center toTop">
        <i class="text-white ri-arrow-up-line"></i>
    </button> --}}

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const loader = document.querySelector("#loader-wrapper")
            setTimeout(() => {
                loader.classList.add("remove-loader")
                setTimeout(() => {
                    loader.remove()
                }, 5200);
            }, 800);
        })

        // window.onscroll = function() {
        //     scrollFunction()
        // };

        // function scrollFunction() {
        //     const btnToTop = document.querySelector(".toTop")
        //     if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        //         btnToTop.style.display = "grid";
        //     } else {
        //         btnToTop.style.display = "none";
        //     }
        // }

        AOS.init();
        // const swiper = new Swiper('.swiper', {
        //     direction: 'horizontal',
        //     freeMode: true,
        //     loop: true,
        //     slidesPerView: 3,
        //     centeredSlides: true,
        //     spaceBetween: 40,

        //     keyboard: {
        //         enabled: true,
        //     },

        //     autoplay: {
        //         delay: 2000,
        //         disableOnInteraction: false,
        //     },

        //     pagination: {
        //         el: '.swiper-pagination',
        //         dynamicBullets: true,
        //         clickable: true,
        //     },

        //     breakpoints: {
        //         1280: {
        //             slidesPerView: 3,
        //         },
        //         1024: {
        //             slidesPerView: 2,
        //         },
        //         768: {
        //             slidesPerView: 2,
        //         },
        //         320: {
        //             slidesPerView: 1,
        //         },
        //     }
        // });

        // function toTop() {
        //     document.body.scrollTop = 0;
        //     document.documentElement.scrollTop = 0;
        // }

        function toggleNavbar(e) {
            let menu = document.querySelector(".menu")
            let active = document.querySelector(".menu.active")
            if (active) {
                active.classList.remove("active")
            } else {
                menu.classList.add("active")
            }
        }

        const menuItem = document.querySelectorAll(".menu-item")
        menuItem.forEach((v, i) => {
            v.addEventListener("click", function() {
                let menu = document.querySelector(".menu")
                let active = document.querySelector(".menu.active")
                if (active) {
                    active.classList.remove("active")
                } else {
                    menu.classList.add("active")
                }
            })
        })

        function toggleContactWA(e) {
            let chatwaContainer = document.querySelector(".chatwa-container")
            let active = document.querySelector(".chatwa-container.active")
            if (active) {
                active.classList.remove("active")
            } else {
                chatwaContainer.classList.add("active")
            }
        }
    </script>

</body>

</html>
