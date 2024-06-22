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
    <nav class="z-[100] h-[100px] w-full transition-all duration-500">
        <div class="container static flex flex-wrap items-center h-full mx-auto -z-10 md:px-16">
            <div class="h-full px-5">
                <img src="{{ asset('assets/images/logo-barokahnet-footer.svg') }}" alt="logo"
                    class="object-contain h-full w-44 logo md:w-52" />
            </div>
            <ul
                class="menu fixed top-0 w-[70%] shadow-sm h-screen md:h-max left-0 gap-y-7 px-5 flex flex-col flex-wrap py-6 z-50 md:bg-inherit md:ml-auto md:w-[60%] md:static text-white md:flex-row md:items-center md:justify-end md:gap-7 md:flex md:z-10">
                <img src="{{ asset('assets/images/logo-barokahnet.svg') }}" class="block object-contain w-48 md:hidden"
                    alt="logo">
                <div class="divider w-full h-[1px] bg-default-border-color md:hidden"></div>
                <li class="menu-item">
                    <a href="#beranda"
                        class="relative font-medium after:absolute after:bottom-[-5px] after:left-0 after:h-[2px] after:w-0 after:rounded-md after:bg-primary after:transition-all after:duration-300 after:content-[''] hover:after:w-full">
                        Beranda
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/profile"
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
                <i class="ri-menu-line ri-xl" id="hamburger-icon"></i>
            </div>
        </div>
    </nav>

    <section id="beranda"
        class="h-max w-full relative bg-[url('/public/assets/images/bg-hero.svg')] bg-cover bg-center bg-no-repeat pb-[100px] overflow-hidden ">
        <div class="bg-layer"></div>
        <img src="{{ asset('assets/images/wave-home.svg') }}"
            class="wave-home absolute w-screen left-0 bottom-[-20px] md:bottom-[-30px] lg:bottom-[-100px]"
            alt="wave-bg">
        <div
            class="container relative z-20 flex justify-around flex-wrap h-full p-5 mx-auto lg:p-16 pt-[120px] md:pt-[130px] lg:pt-[150px] gap-y-8 ">
            <div class="flex flex-col justify-center lg:w-[50%] w-full md:w-[55%]">
                {{-- <div class="-z-10">
                    <div
                        class="rounded-full w-[300px] h-[300px] bg-primary-300 absolute  top-[-120px] right-[-150px] md:left-[50%] grid place-items-center">
                        <div class="rounded-full w-[200px] h-[200px] bg-primary-500 grid place-items-center z-10">
                            <div class="rounded-full w-[100px] h-[100px] bg-primary"></div>
                        </div>
                    </div>
                </div>

                <div class="-z-10">
                    <div
                        class="rounded-full w-[300px] h-[300px] bg-primary-300 absolute  bottom-[-150px] md:bottom-[-250px] right-[5%] grid place-items-center">
                        <div class="rounded-full w-[200px] h-[200px] bg-primary-500 grid place-items-center z-10">
                            <div class="rounded-full w-[100px] h-[100px] bg-primary"></div>
                        </div>
                    </div>
                </div>

                <div class="-z-10">
                    <div
                        class="w-[200px] h-[200px] blur-[180px] bg-primary absolute top-[30%] md:top-[50%] left-[-100px]">
                    </div>
                </div> --}}

                {{-- <img src="{{ asset('assets/images/bg-hero.svg') }}" alt=""> --}}

                <p data-aos="fade-right" data-aos-delay="800"
                    class="mb-2 text-xl font-medium text-white md:text-2xl lg:text-3xl ">
                    INTERNET SERVICE PROVIDER
                </p>
                <h1 data-aos="fade-right" data-aos-delay="900"
                    class="text-2xl font-bold leading-8 md:leading-10 xl:leading-[64px] xl:text-5xl lg:leading-[58px] lg:text-4xl sm:text-3xl text-white">
                    PT Link<span class="text-primary"> Data Sumber Barokah</span>
                </h1>
                <p data-aos="fade-right" data-aos-delay="1000" class="my-4 mb-6 text-[16px] font-normal text-white">
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
                        class="flex items-center gap-2 px-5 py-2 text-sm font-bold tracking-wide text-white uppercase border-2 rounded-full border-primary w-max">
                        <i class="text-xl text-white ri-router-line"></i>
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

    <section class="relative bg-semi-sky-blue">
        <div class="container relative mx-auto p-[18px] md:p-[50px] md:pb-0 ">
            <img src="{{ asset('assets/images/circle.svg') }}" alt="circle"
                class="absolute top-[-50px] w-[100px] z-10" />

            <div data-aos="fade-up" data-aos-delay="1200"
                class="m-auto mt-[-120px] flex h-full min-h-[230px] w-full max-w-[900px] flex-col items-center justify-center rounded-bl-[50px] rounded-br rounded-tl rounded-tr-[50px] bg-secondary p-7 lg:px-[100px] text-white relative z-20">
                <p class="mb-4 text-lg font-bold lg:text-2xl">
                    "BarokahNet Hadir Menjangkau Seluruh Negeri"
                </p>
                <p class="md:text-center text-start text-xs leading-[22px]">
                    Sebagai perusahan swasta yang bergerak di bidang layanan Internet (ISP)
                    dengan biaya murah dan terjangkau BarokahNet hadir untuk memenuhi kebutuhan masyarakat yang selama
                    ini sulit mendapatkan akses internet.
                    Semoga kehadiran layanan jaringan internet murah ini bisa mempermudah banyak orang untuk mendapatkan
                    akses internet dan menjawab semua kebutuhan masyarakat di era modern.
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

    <section class="relative overflow-hidden bg-semi-sky-blue">
        <div class="container relative p-5 mx-auto md:p-10 ">

            {{-- <div class="mt-[80px] w-full static z-20 ">
                <img src="{{ asset('assets/images/bg-aboutme.jpeg') }}" alt="background"
                    class="bg-cover h-[200px] md:h-[425px] w-full rounded static z-50">
            </div> --}}

            <div class="relative z-10 py-20 pb-[120px]">

                <div class="absolute top-[250px] left-[-200px] ">
                    <div class="rounded-full w-[300px] h-[300px] bg-primary-300  grid place-items-center ">
                        <div class="rounded-full w-[200px] h-[200px] bg-primary-500 grid place-items-center z-10">
                            <div class="rounded-full w-[100px] h-[100px] bg-primary"></div>
                        </div>
                    </div>
                </div>
                <div class="absolute top-[450px] left-[-200px] ">
                    <div class="rounded-full w-[300px] h-[300px] bg-primary-300  grid place-items-center ">
                        <div class="rounded-full w-[200px] h-[200px] bg-primary-500 grid place-items-center z-10">
                            <div class="rounded-full w-[100px] h-[100px] bg-primary"></div>
                        </div>
                    </div>
                </div>

                {{-- <img src="{{ asset('assets/images/blob-hotspot.svg') }}" class="absolute right-[30%] top-8"
                    alt="blob-hotspot">
                <img src="{{ asset('assets/images/blob-router.svg') }}" class="absolute right-[0%] top-8"
                    alt="blob-router"> --}}

                <div
                    class="absolute right-[-50px] md:right-[-150px] top-[130px] md:top-[-50px] lg:right-0 lg:top-[-80px]">
                    <img src="{{ asset('assets/images/papper-plane.svg') }}" alt="image"
                        class="w-[300px] h-[300px] md:w-[400px] md:h-[400px] lg:w-[500px] lg:h-[450px]">
                </div>

                <div class="max-w-[300px] w-full">
                    <p class="text-3xl font-normal md:text-4xl" data-aos="fade-right">Tentang kami</p>
                    <p class="mt-3 ml-5 text-4xl font-semibold md:text-5xl text-primary" data-aos="fade-right"
                        data-aos-delay="300">BarokahNet</p>
                    <span class="block w-full h-[14px] mt-5 bg-primary" data-aos="fade-up"
                        data-aos-delay="500"></span>
                </div>

                <div class="card-aboutme md:w-[90%] ml-auto mt-[160px] md:mt-16 bg-white relative z-50 shadow-sm cursor-pointer"
                    data-aos="fade-up">


                    <div class="p-8 border-b-[1px] header border-default-border-color">
                        <div class="flex gap-5">
                            <div class="w-6 h-6 bg-red-500 rounded-full"></div>
                            <div class="w-6 h-6 bg-yellow-500 rounded-full"></div>
                            <div class="w-6 h-6 bg-green-600 rounded-full"></div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-0 px-8 body">
                        <div class="text-[48px] text-primary">❝</div>
                        <p class="m-0 text-xs leading-6 md:leading-8 md:text-sm text-custom-text-card">“ Saat ini
                            internet menjadi
                            kebutuhan
                            sehari-hari
                            manusia
                            modern.
                            Tidak hanya untuk
                            kepentingan usaha, bisnis, atau pendidikan, internet juga dibutuhkan untuk interaksi dalam
                            kehidupan sehari-hari seperti penggunaan media sosial dan lainnya. Minimnya fasilitas dan
                            jaringan internet yang sulit dijangkau, terutama di beberapa wilayah di Madura, khususnya
                            Kabupaten Sumenep, membuat sebagian masyarakat masih kesulitan untuk berinteraksi di dunia
                            maya. Kalaupun ada beberapa provider yang memberikan layanan internet, harganya masih cukup
                            mahal. Sebagai perusahan swasta yang bergerak di bidang layanan Internet (ISP) dengan biaya
                            murah dan terjangkau BarokahNet hadir untuk memenuhi kebutuhan masyarakat yang selama ini
                            sulit mendapatkan akses internet. Semoga kehadiran layanan jaringan internet murah ini bisa
                            mempermudah banyak orang untuk mendapatkan akses internet dan menjawab semua kebutuhan
                            masyarakat di era modern. “</p>
                        <div class="flex items-center justify-between my-2 ">
                            <a href="{{ url('profile') }}"
                                class="m-0 text-base font-medium text-primary hover:opacity-80 h-max">Read More <i
                                    class="text-base ri-arrow-right-line"></i> </a>
                            <p class="text-[48px] text-primary h-max">❞</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/images/wave-about-me.svg') }}"
            class="z-20 wave-aboutme w-screen absolute bottom-0 left-0 lg:bottom-[-50px]" alt="wave-aboutme">
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
                        <img src="{{ asset('assets/images/circle-checklist.svg') }}" alt="checklist"
                            class="w-7 h-7">
                        <p class="text-sm font-semibold">UPLOAD & DOWNLOAD SIMETRIS 1:1</p>
                    </div>
                    <div class="flex items-center flex-1 gap-2">
                        <img src="{{ asset('assets/images/circle-checklist.svg') }}" alt="checklist"
                            class="w-7 h-7">
                        <p class="text-sm font-semibold">UNLIMITED TANPA KUOTA / FUP</p>
                    </div>
                </div>
                <div class="flex flex-col mb-4 md:flex-row gap-y-4">
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

    </section>

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
                        <a href="https://wa.me/+62817770044" target="_blank"
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

    {{-- Footer --}}
    @include('layouts.footer')

    <div class="fixed z-50 flex flex-col chatwa-container bottom-3 right-3">
        <div
            class="shadow chatwa-wrapper transition-all duration-500 max-w-[350px] bg-white p-5 rounded flex-col gap-y-4">
            <div class="mb-2 text-xs chat-header">
                <p>Silahkan klik nomer kami di bawah untuk memulai percakapan di <span
                        class="font-bold">Whatsapp</span>
                </p>
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

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        AOS.init();

        document.addEventListener("DOMContentLoaded", function() {
            const loader = document.querySelector("#loader-wrapper")
            setTimeout(() => {
                loader.classList.add("remove-loader")
                setTimeout(() => {
                    loader.remove()
                }, 5200);
            }, 800);
        })

        window.onscroll = function() {
            let nav = document.querySelector("nav")
            let nav_image = nav.querySelector(".logo")
            let top = window.pageYOffset;
            if (top > 100) {
                nav.classList.add("scrolled")
                nav_image.src = "{{ asset('assets/images/logo-barokahnet.svg') }}"
            } else {
                nav.classList.remove("scrolled")
                nav_image.src = "{{ asset('assets/images/logo-barokahnet-footer.svg') }}"
            }
        };

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
