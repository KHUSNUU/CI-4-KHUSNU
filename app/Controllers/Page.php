<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        echo View("about");
    }
    public function contact()
    {   
        $data['name'] = "";
        echo View("contact", $data);
    }
    public function faqs()
    {
        $data['data_faqs'] = [
            [
				'question' => 'Apa itu PO Bus?',
				'answer' => 'Bagi orang yang kerap melakukan perjalanan jauh, bahkan lintas pulau seperti Jawa-Sumatera mungkin tak asing dengan nama-nama PO (Perusahaan Otobus) Bus pulau paling barat Indonesia ini.'
			],
			[
				'question' => 'Berapakah Izin trakyek PO. bus?',
				'answer' => 'Tarif izin penyelenggaraan angkutan orang dalam trayek meliputi, izin trayek lintas negara sesuai dengan perjanjian antar negara Rp5.000.000,00, izin trayek antar kabupaten / kota dan angkutan perkotaan yang melampaui wilayah satu provinsi untuk kendaraan berkapasitas sampai dengan 16 penumpang Rp1.000.000,00 dan kendaraan dengan 16 penumpang ke atas Rp5.000.000,00. Izin trayek perdesaan yang melewati satu wilayah provinsi Rp1.000.000,00.'
			],
			[
				'question' => 'Contoh surat izin usaha angkutan?',
				'answer' => 'Surat Permohonan.
                Fotocopy akta pendirian perusahaan dan Surat Izin Usaha Perusahaan (SIUP) bagi pemohon yang berbentuk badan usaha, akta pendirian koperasi bagi pemohon yang berbentuk koperasi
                Fotocopy KTP.
                Fotocopy NPWP.
                Memiliki surat izin gangguan bagi pemohon yang berbentuk badan usaha.
                Fotocopy STNK.
                Fotocopy Buku Uji Kendaraan Bermotor.
                Membuat dan menandatangani pernyataan kesanggupan untuk memiliki atau menguasai 5 (lima) kendaraan bermotor.
                Membuat dan menandatangani pernyataan kesanggupan untuk menyediakan fasilitas penyimpanan kendaraan.
                Denah/gambar lokasi'
			]
		];

    
        echo View("faqs", $data);
    }

}
