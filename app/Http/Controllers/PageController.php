<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    protected $priceCards = [
        [
            'title' => "DHAHA PRIMA FIBER 12 Mbps",
            'desc' => 'Biaya Registrasi & Instalasi Rp.165.000',
            'price_arr' => [
                'rp' => "Rp.",
                'price' => "165.000",
                'month' => "/bln"
            ],
            'features' => [
                'Bandwidth 12 Mbps',
                'Download & Upload Simetris 1:1',
                'Tanpa Batas Kuota (FUP)',
                'Dukungan Teknis 24/7',
                'IP Dinamis',
                '100% Fiber Optic',
                'Harga Sudah Termasuk Pajak / PPN 11%'
            ]
        ],
        [
            'title' => "DHAHA PRIMA FIBER 25 Mbps",
            'desc' => 'Biaya Registrasi & Instalasi Rp.250.000',
            'price_arr' => [
                'rp' => "Rp.",
                'price' => "250.000",
                'month' => "/bln"
            ],
            'features' => [
                'Bandwidth 12 Mbps',
                'Download & Upload Simetris 1:1',
                'Tanpa Batas Kuota (FUP)',
                'Dukungan Teknis 24/7',
                'IP Dinamis',
                '100% Fiber Optic',
                'Harga Sudah Termasuk Pajak / PPN 11%'
            ]
        ],
        [
            'title' => "DHAHA PRIMA FIBER 30 Mbps",
            'desc' => 'Biaya Registrasi & Instalasi Rp.275.000',
            'price_arr' => [
                'rp' => "Rp.",
                'price' => "275.000",
                'month' => "/bln"
            ],
            'features' => [
                'Bandwidth 12 Mbps',
                'Download & Upload Simetris 1:1',
                'Tanpa Batas Kuota (FUP)',
                'Dukungan Teknis 24/7',
                'IP Dinamis',
                '100% Fiber Optic',
                'Harga Sudah Termasuk Pajak / PPN 11%'
            ]
        ],
        [
            'title' => "DHAHA PRIMA FIBER 50 Mbps",
            'desc' => 'Biaya Registrasi & Instalasi Rp.300.000',
            'price_arr' => [
                'rp' => "Rp.",
                'price' => "300.000",
                'month' => "/bln"
            ],
            'features' => [
                'Bandwidth 12 Mbps',
                'Download & Upload Simetris 1:1',
                'Tanpa Batas Kuota (FUP)',
                'Dukungan Teknis 24/7',
                'IP Dinamis',
                '100% Fiber Optic',
                'Harga Sudah Termasuk Pajak / PPN 11%'
            ]
        ],
        [
            'title' => "DHAHA PRIMA FIBER 75 Mbps",
            'desc' => 'Biaya Registrasi & Instalasi Rp.375.000',
            'price_arr' => [
                'rp' => "Rp.",
                'price' => "375.000",
                'month' => "/bln"
            ],
            'features' => [
                'Bandwidth 12 Mbps',
                'Download & Upload Simetris 1:1',
                'Tanpa Batas Kuota (FUP)',
                'Dukungan Teknis 24/7',
                'IP Dinamis',
                '100% Fiber Optic',
                'Harga Sudah Termasuk Pajak / PPN 11%'
            ]
        ],
        [
            'title' => "DHAHA PRIMA 100 Mbps",
            'desc' => 'Biaya Registrasi & Instalasi Rp.400.000',
            'price_arr' => [
                'rp' => "Rp.",
                'price' => "400.000",
                'month' => "/bln"
            ],
            'features' => [
                'Bandwidth 12 Mbps',
                'Download & Upload Simetris 1:1',
                'Tanpa Batas Kuota (FUP)',
                'Dukungan Teknis 24/7',
                'IP Dinamis',
                '100% Fiber Optic',
                'Harga Sudah Termasuk Pajak / PPN 11%'
            ]
        ],
        [
            'title' => "DHAHA PRIMA CORPORATE",
            'desc' => 'Biaya Registrasi & Instalasi Rp. Hubungi CS / Sales & Marketing Bosti',
            'price_arr' => [
                'rp' => "Rp.",
                'price' => "Hubungi CS",
                'month' => ""
            ],
            'features' => [
                'Dedicated Bandwidth',
                'Download & Upload Simetris 1:1',
                'Tanpa Batas Kuota (FUP)',
                'Dukungan Teknis 24/7',
                'IP Dinamis',
                '100% Fiber Optic',
                'Harga Sudah Termasuk Pajak / PPN 11%'
            ]
        ],
        [
            'title' => "DHAHA PRIMA HOSPITALITY MS",
            'desc' => 'Biaya Registrasi & Instalasi Rp. Hubungi CS / Sales & Marketing Bosti',
            'price_arr' => [
                'rp' => "Rp.",
                'price' => "Hubungi CS",
                'month' => ""
            ],
            'features' => [
                'Gratis Biaya Konsultasi',
                'Download & Upload Simetris 1:1',
                'Tanpa Batas Kuota (FUP)',
                'Dukungan Teknis 24/7',
                'IP Dinamis',
                '100% Fiber Optic',
                'Harga Sudah Termasuk Pajak / PPN 11%'
            ]
        ],
        [
            'title' => "DHAHA PRIMA Metro-E & V-SAT",
            'desc' => 'Biaya Registrasi & Instalasi Rp. Hubungi CS / Sales & Marketing Bosti',
            'price_arr' => [
                'rp' => "Rp.",
                'price' => "Hubungi CS",
                'month' => ""
            ],
            'features' => [
                'Gratis Biaya Konsultasi',
                'Download & Upload Simetris 1:1',
                'Tanpa Batas Kuota (FUP)',
                'Dukungan Teknis 24/7',
                'IP Dinamis',
                '100% Fiber Optic',
                'Harga Sudah Termasuk Pajak / PPN 11%'
            ]
        ],
    ];

    protected $reviewCards = [
        [
            'text' => '"Layanan BOSTI FIBER yang ada dirumah kami sungguh sangat memuaskan, akses ke berbagai macam situs baik itu sosial media, streaming video dan bermain game sangat lancar. kecepatan download dan upload sesuai paket layanan, kami sekeluarga puas menggunakan layanan BOSTI FIBER."',
            'name' => 'Muhammad Pratama Aditya',
            'job' => "Gamer's (Pelanggan Rumahan)"
        ],
        [
            'text' => '"Pengalaman yang sangat berkesan ketika berkonsultasi dengan tenaga ahli dari BOSTI untuk memberikan solusi terkait permasalahan jaringan di kantor kami, informasi terkait kendala yang di jelaskan kepada kami sangat jelas, solusi serta penanganan sangat penuh perhitungan, cepat dan efektif."',
            'name' => 'Sindu Aryasatya',
            'job' => "STAFF IT (Pelanggan IT Consult & Service)"
        ],
        [
            'text' => '"Sebelumnya keluhan terkait internet yang tersedia sebagai fasilitas untuk tamu hotel kami sangat tinggi karena kendala teknis, Alhamdulillah sekarang kami menggunakan Layanan BOSTI HOSPITALITY MANAGED SERVICE keluhan pelanggan menurun drastis bahkan nyaris tanpa keluhan."',
            'name' => 'Indra Prayoga',
            'job' => "GM HOTEL (Pelanggan Hospitality)"
        ],
        [
            'text' => '"Perusahaan kami bergerak dalam industri retail, kami mengandalkan stabilitas dan kecepatan akses layanan internet untuk menunjang kebutuhan telekomunikasi juga kebutuhan transfer data antar cabang dan kantor pusat, sejauh ini sangat baik pelayanan BOSTI CORPORATE."',
            'name' => 'Evan Setiyawan',
            'job' => "CEO & FOUNDER (Pelanggan Corporate)"
        ],
    ];

    public function index()
    {
        return view("index", [
            'priceCards' => $this->priceCards,
            'reviewCards' => $this->reviewCards
        ]);
    }
}
