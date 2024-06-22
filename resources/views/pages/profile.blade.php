<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barokah NET | Profile</title>
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

    <nav class="z-[100] h-[100px] w-full transition-all duration-500">
        <div class="container static flex flex-wrap items-center h-full mx-auto -z-10 md:px-16">
            <div class="h-full px-5">
                <img src="{{ asset('assets/images/logo-barokahnet.svg') }}" alt="logo"
                    class="object-contain h-full w-44 logo md:w-52" />
            </div>
            <ul
                class="menu fixed top-0 w-[70%] shadow-sm h-screen md:h-max left-0 gap-y-7 px-5 flex flex-col flex-wrap py-6 z-50 md:bg-inherit md:ml-auto md:w-[60%] md:static  md:flex-row md:items-center md:justify-end md:gap-7 md:flex md:z-10">
                <img src="{{ asset('assets/images/logo-barokahnet.svg') }}" class="block object-contain w-48 md:hidden"
                    alt="logo">
                <div class="divider w-full h-[1px] bg-default-border-color md:hidden"></div>
                <li class="menu-item">
                    <a href="/#beranda"
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
                    <a href="/#produk"
                        class="relative font-medium after:absolute after:bottom-[-5px] after:left-0 after:h-[2px] after:w-0 after:rounded-md after:bg-primary after:transition-all after:duration-300 after:content-[''] hover:after:w-full">
                        Produk
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/#kontak"
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


    <section class="relative overflow-hidden bg-semi-sky-blue">
        <div class="container relative p-5 mx-auto md:p-10 ">

            <div class="mt-[80px] w-full static z-20 ">
                <img src="{{ asset('assets/images/bg-aboutme.jpeg') }}" alt="background"
                    class="bg-cover h-[200px] md:h-[425px] w-full rounded static z-50">
            </div>

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
                    <span class="block w-full h-[14px] mt-5 bg-primary" data-aos="fade-up" data-aos-delay="500"></span>
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
    </section>

    @include('layouts.footer')

    <div class="fixed z-50 flex flex-col chatwa-container bottom-3 right-3">
        <div
            class="shadow chatwa-wrapper transition-all duration-500 max-w-[350px] bg-white p-5 rounded flex-col gap-y-4">
            <div class="mb-2 text-xs chat-header">
                <p>Silahkan klik nomer kami di bawah untuk memulai percakapan di <span class="font-bold">Whatsapp</span>
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
            } else {
                nav.classList.remove("scrolled")
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
