<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUS mania</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('about') ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('faqs') ?>">Faqs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-12">     
                <?php foreach ($data_faqs as $faq) : ?>
                    <h2 class="h2"><?= $faq['question'] ?></h2>
                    <p><?= $faq['answer'] ?></p>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="h2">Berapakah harga BUS baru sekarang?</h2>
                <p>Jika dijumlahkan dengan harga sasis, satu unit bus tanpa kursi, AC, toilet dan smoking room, banderol bus HD mulai dari Rp 1,3 miliar dan bus model SHD mulai dari Rp 1,9 miliar. Jika ditambah dengan bangku dan AC, setidaknya satu unit bus yang lengkap bisa dibanderol mulai Rp 2 miliar.</p>
                <h2 class="h2">Bagaimana Cara Membuat Pt. BUS untuk pemula?</h2>
                <p>1.Modal
                   2.Garasi
                   3.Perbaikan kerdaraan
                   4.izin operasi bus
                   5.Marketing bus
                </p>
                <h2 class="h2">Bagaimana Cara Membeli bus bekas yang bagus?</h2>
                <p>1.Perhatikan Mesin & Komponen AC
                   2.Lihat Sasis
                   3.Body
                   4.Pilih Unit Bus Bekas Pariwisata
                </p>
                <h2 class="h2">Apakah krue kabin itu perlu?</h2>
                <p>

Artikel ini telah tayang di Kompas.com dengan judul "Alasan Pengemudi Bus dan Kru Bus AKAP Wajib Pakai Seragam", Klik untuk baca: https://otomotif.kompas.com/read/2022/08/05/160100615/alasan-pengemudi-bus-dan-kru-bus-akap-wajib-pakai-seragam.
Penulis : Muhammad Fathan Radityasani
Editor : Azwar Ferdian

Kompascom+ baca berita tanpa iklan: https://kmp.im/plus6
Download aplikasi: https://kmp.im/app6</p>
            </div>
        </div>
    </div>

    <footer class="jumbotron jumbotron-fluid mt-5 mb-0">
		<div class="container text-center">www.pt.khusnu trans.com <?= Date('Y') ?></div>
	</footer>

    <!-- Jquery dan Bootsrap JS -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>

</html>
