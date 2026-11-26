<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT Asri Tani Hijau - Tanaman sehat dari kebun kami di Lampung</title>
    <meta name="description" content="PT Asri Tani Hijau, UMKM tanaman hias, bibit buah dan sayur, serta pot dan media tanam dari Bandar Lampung.">
    <meta name="theme-color" content="#123524">
    <link rel="icon" href="{{ asset('img/logo.svg') }}" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,500..800&family=Instrument+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --kapur: #F1F4EA;
            --lumut: #E3EAD3;
            --hutan: #123524;
            --pakis: #3E7B4F;
            --daun: #8DBE6A;
            --kunyit: #F0B323;
            --bata: #C4543A;
            --lembut: #4F6556;
        }
        html { scroll-behavior: smooth; }
        body {
            font-family: 'Instrument Sans', system-ui, -apple-system, 'Segoe UI', sans-serif;
            font-size: 1.0625rem;
            line-height: 1.65;
            background: var(--kapur);
            color: var(--hutan);
        }
        h1, h2, h3, .tampil {
            font-family: 'Bricolage Grotesque', 'Instrument Sans', system-ui, sans-serif;
            letter-spacing: -0.025em;
            line-height: 1.05;
            font-weight: 700;
            color: inherit;
        }
        section { scroll-margin-top: 72px; }
        .jarak { padding-block: clamp(3.5rem, 8vw, 6.5rem); }
        :focus-visible { outline: 3px solid var(--pakis); outline-offset: 3px; }
        .gelap :focus-visible { outline-color: var(--kunyit); }

        /* tombol */
        .tombol {
            display: inline-block; padding: .85rem 1.6rem; border-radius: 999px;
            border: 2px solid var(--hutan); font-weight: 600; text-decoration: none;
            transition: background-color .2s, color .2s, border-color .2s;
        }
        .tombol-isi { background: var(--hutan); color: var(--kapur); }
        .tombol-isi:hover { background: var(--pakis); border-color: var(--pakis); color: var(--kapur); }
        .tombol-garis { background: transparent; color: var(--hutan); }
        .tombol-garis:hover { background: var(--hutan); color: var(--kapur); }

        /* navbar */
        .bar { background: rgba(241, 244, 234, .93); backdrop-filter: blur(8px); border-bottom: 1px solid rgba(18, 53, 36, .12); }
        .bar .navbar-brand { display: flex; align-items: center; gap: .6rem; font-family: 'Bricolage Grotesque', sans-serif; font-weight: 700; font-size: 1.2rem; letter-spacing: -.02em; color: var(--hutan); }
        .bar .nav-link { color: var(--hutan); font-weight: 500; }
        .bar .nav-link:hover { color: var(--pakis); }
        .bar .navbar-toggler { border-color: rgba(18, 53, 36, .35); }

        /* hero */
        .hero { padding: clamp(2.5rem, 6vw, 5rem) 0 clamp(3rem, 7vw, 6rem); }
        .hero h1 { font-size: clamp(2.7rem, 6.2vw, 5.4rem); font-weight: 800; margin-bottom: 1.5rem; }
        .hero .pengantar { max-width: 46ch; font-size: 1.2rem; color: var(--lembut); margin-bottom: 2rem; }
        .hero .info { margin: 2rem 0 0; font-size: .95rem; color: var(--lembut); }
        .lengkung { display: block; width: 100%; max-width: 400px; margin-inline: auto; height: auto; }
        .tumbuh { transform-box: fill-box; transform-origin: 50% 100%; animation: tumbuh 1.4s cubic-bezier(.2, .7, .2, 1) both; }
        @keyframes tumbuh { from { transform: scale(.7); opacity: 0; } to { transform: none; opacity: 1; } }

        /* tentang */
        .pernyataan { font-family: 'Bricolage Grotesque', sans-serif; font-weight: 600; font-size: clamp(1.9rem, 3.6vw, 3rem); line-height: 1.12; letter-spacing: -.02em; max-width: 22ch; margin: 0; }
        .badan-dua { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.25rem 2.25rem; margin-top: 2.25rem; }
        .badan-dua p { margin: 0; max-width: 40ch; }

        /* label profil usaha (seperti label tancap di pot) */
        .profil-wrap { position: relative; max-width: 400px; margin: 0 auto; padding-top: 44px; transform: rotate(1.8deg); transform-origin: 50% 0; transition: transform .6s ease; }
        .profil-wrap:hover { transform: rotate(0); }
        .profil-wrap::before { content: ""; position: absolute; z-index: 2; top: 0; left: 50%; width: 2px; height: 62px; margin-left: -1px; background: var(--kunyit); }
        .profil { position: relative; background: var(--hutan); color: var(--kapur); padding: 2.75rem 2rem 3.6rem; border-radius: 16px 16px 0 0; clip-path: polygon(0 0, 100% 0, 100% calc(100% - 34px), 50% 100%, 0 calc(100% - 34px)); }
        .profil::before { content: ""; position: absolute; top: 18px; left: 50%; width: 14px; height: 14px; margin-left: -7px; border-radius: 50%; background: var(--kapur); }
        .profil-nama { font-family: 'Bricolage Grotesque', sans-serif; font-weight: 700; font-size: 1.7rem; letter-spacing: -.02em; line-height: 1.1; margin: 0 0 1.25rem; }
        .profil-data { margin: 0; }
        .profil-data > div { padding: .9rem 0; border-top: 1px solid rgba(241, 244, 234, .2); }
        .profil-data dt { font-size: .9rem; font-weight: 500; color: var(--daun); }
        .profil-data dd { margin: 0; font-weight: 500; }

        /* produk */
        .produk { background: var(--lumut); }
        .rak-filter { display: flex; flex-wrap: wrap; gap: .25rem 1.6rem; margin: 1.75rem 0 2.75rem; }
        .tab {
            background: none; border: 0; padding: .25rem 0; font-weight: 600; font-size: 1.05rem; color: var(--lembut);
            text-decoration: underline; text-decoration-color: transparent; text-decoration-thickness: 4px; text-underline-offset: 7px;
            transition: color .2s, text-decoration-color .2s;
        }
        .tab:hover { color: var(--hutan); }
        .tab.aktif { color: var(--hutan); text-decoration-color: var(--kunyit); }
        .tab sup { font-weight: 500; margin-left: .15rem; }
        .daftar { display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 2.75rem 1.75rem; }
        .tanaman { display: block; width: 100%; text-align: left; background: none; border: 0; padding: 0; color: inherit; cursor: pointer; }
        .bingkai { display: block; position: relative; aspect-ratio: 4 / 5; border-radius: 999px 999px 14px 14px; overflow: hidden; background: var(--kapur); }
        .bingkai img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform .5s ease; }
        .tanaman:hover .bingkai img { transform: scale(1.05); }
        .kosong { display: flex; width: 100%; height: 100%; align-items: center; justify-content: center; background: var(--pakis); color: var(--daun); }
        .kosong svg { width: 30%; height: 30%; }
        .label-harga {
            position: absolute; left: 12px; bottom: 14px; display: inline-block;
            background: var(--kunyit); color: var(--hutan); font-weight: 700; font-size: .95rem; line-height: 1;
            padding: .6rem .9rem .6rem 1.7rem;
            clip-path: polygon(12px 0, 100% 0, 100% 100%, 12px 100%, 0 50%);
        }
        .label-harga::before { content: ""; position: absolute; left: 13px; top: 50%; width: 6px; height: 6px; margin-top: -3px; border-radius: 50%; background: var(--hutan); }
        .tanaman .nama { display: block; margin-top: 1rem; font-family: 'Bricolage Grotesque', sans-serif; font-size: 1.3rem; font-weight: 700; letter-spacing: -.02em; line-height: 1.15; }
        .meta { display: block; color: var(--lembut); font-size: .95rem; }

        /* modal detail */
        .kotak-detail { background: var(--kapur); border: 0; border-radius: 28px; overflow: hidden; position: relative; }
        .kotak-detail .btn-close { position: absolute; top: 1rem; right: 1rem; z-index: 3; }
        .kotak-detail .label-harga { position: relative; left: auto; bottom: auto; }
        .kotak-detail h2 { font-size: clamp(1.8rem, 3.4vw, 2.6rem); margin: .35rem 0 1rem; }

        /* testimoni */
        .gelap { background: var(--hutan); color: var(--kapur); }
        .gelap h2 { max-width: 18ch; font-size: clamp(2rem, 4.4vw, 3.4rem); margin-bottom: 3rem; }
        .kutipan-besar { margin: 0; }
        .kutipan-besar p { font-family: 'Bricolage Grotesque', sans-serif; font-weight: 600; font-size: clamp(1.5rem, 2.8vw, 2.2rem); line-height: 1.2; letter-spacing: -.02em; }
        .penilaian { display: inline-flex; gap: .2rem; margin-bottom: 1rem; color: var(--daun); }
        .daun-nilai { width: 1.1rem; height: 1.1rem; }
        .daun-nilai.mati { opacity: .25; }
        .oleh { margin: 0; font-size: .98rem; }
        .oleh .produk-dibeli { display: block; color: var(--daun); }
        .kutipan-kecil { list-style: none; margin: 0; padding: 0; }
        .kutipan-kecil li { padding: 1.5rem 0; border-top: 1px solid rgba(241, 244, 234, .22); }
        .kutipan-kecil li:first-child { border-top: 0; padding-top: 0; }
        .kutipan-kecil p { margin-bottom: .75rem; }

        /* kontak & footer */
        .kontak-judul { font-size: clamp(1.9rem, 4vw, 3.1rem); max-width: 20ch; margin: 0; }
        .rincian { margin: 0; }
        .rincian dt { font-size: .9rem; font-weight: 500; color: var(--lembut); }
        .rincian dd { margin: 0 0 1.25rem; font-weight: 500; }
        .rincian a { text-decoration-thickness: 2px; text-underline-offset: 4px; }
        .kaki { border-top: 1px solid rgba(18, 53, 36, .18); padding: 1.5rem 0 2rem; font-size: .92rem; color: var(--lembut); }
        .kaki .container { display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: .75rem 1.5rem; }
        .kaki .merek { display: flex; align-items: center; gap: .5rem; color: var(--hutan); font-weight: 600; }

        /* perjalanan tanaman (kartu interaktif) */
        .perjalanan { margin-top: clamp(3.5rem, 7vw, 5.5rem); }
        .lengkung-kecil { max-width: 320px; }
        .tahap { opacity: 0; transform: translateY(10px); transition: opacity .45s ease, transform .45s ease; }
        .tahap.aktif { opacity: 1; transform: none; }
        .perjalanan-judul { font-size: clamp(1.7rem, 3.2vw, 2.4rem); margin-bottom: 1.5rem; }
        .kartu-tahap { background: var(--lumut); border-radius: 20px; transition: background-color .3s, color .3s; }
        .kartu-tahap + .kartu-tahap { margin-top: .75rem; }
        .kartu-tahap:not(.aktif):hover { background: #D8E1C4; }
        .kartu-tahap.aktif { background: var(--hutan); color: var(--kapur); }
        .kartu-tahap.aktif :focus-visible { outline-color: var(--kunyit); }
        .kartu-tombol {
            display: flex; width: 100%; align-items: center; justify-content: space-between; gap: 1rem;
            background: none; border: 0; padding: 1.2rem 1.5rem; text-align: left; color: inherit; cursor: pointer;
            font-family: 'Bricolage Grotesque', sans-serif; font-weight: 700; font-size: 1.25rem; letter-spacing: -.02em; line-height: 1.2;
        }
        .kartu-tombol::after {
            content: "+"; flex: none; width: 1.9rem; height: 1.9rem; border-radius: 50%; border: 2px solid currentColor;
            display: flex; align-items: center; justify-content: center; font-family: 'Instrument Sans', sans-serif; font-weight: 500; line-height: 1;
        }
        .kartu-tahap.aktif .kartu-tombol::after { content: "\2212"; background: var(--kunyit); border-color: var(--kunyit); color: var(--hutan); }
        .kartu-isi { display: grid; grid-template-rows: 0fr; transition: grid-template-rows .35s ease; }
        .kartu-tahap.aktif .kartu-isi { grid-template-rows: 1fr; }
        .kartu-isi > div { overflow: hidden; }
        .kartu-isi p { margin: 0; padding: 0 1.5rem 1.4rem; max-width: 46ch; }

        @media (prefers-reduced-motion: reduce) {
            html { scroll-behavior: auto; }
            .tumbuh { animation: none; }
            .bingkai img { transition: none; }
            .tahap, .kartu-isi, .kartu-tahap, .profil-wrap { transition: none; }
        }
    </style>
</head>
<body>

{{-- ikon daun dipakai ulang (penilaian dan foto kosong) --}}
<svg width="0" height="0" style="position:absolute" aria-hidden="true" focusable="false">
    <symbol id="ikon-daun" viewBox="0 0 24 24"><path fill="currentColor" d="M4 20C4 11 9 5 20 4C20 14 15 20 4 20Z"/></symbol>
</svg>

{{-- NAVBAR --}}
<nav class="navbar navbar-expand-lg sticky-top bar">
    <div class="container">
        <a class="navbar-brand" href="#beranda">
            <img src="{{ asset('img/logo.svg') }}" alt="" height="40" width="40">
            Asri Tani Hijau
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Buka menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto gap-lg-3">
                <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="#produk">Produk</a></li>
                <li class="nav-item"><a class="nav-link" href="#testimoni">Testimoni</a></li>
                <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.produk.index') }}">Admin</a></li>
            </ul>
        </div>
    </div>
</nav>

{{-- HERO --}}
<header id="beranda" class="hero">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <h1>Tanaman sehat dari kebun kami di Lampung</h1>
                <p class="pengantar">Tanaman hias, bibit buah dan sayur, serta pot dan media tanam. Setiap tanaman kami pilih satu per satu sebelum sampai ke rumah Anda.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#produk" class="tombol tombol-isi">Lihat tanaman</a>
                    <a href="#tentang" class="tombol tombol-garis">Kenal kami</a>
                </div>
                <p class="info">Kebun di Bandar Lampung. Buka Senin sampai Sabtu, 08.00 sampai 17.00 WIB.</p>
            </div>
            <div class="col-lg-5">
                <svg class="lengkung" viewBox="0 0 400 520" role="img" aria-label="Ilustrasi tanaman dalam pot di bawah sinar matahari">
                    <defs>
                        <path id="daun" d="M0 0C30-38 92-38 130 0C92 38 30 38 0 0Z"/>
                        <clipPath id="klip"><path d="M0 520V200a200 200 0 0 1 400 0V520Z"/></clipPath>
                    </defs>
                    <path d="M0 520V200a200 200 0 0 1 400 0V520Z" fill="#123524"/>
                    <g clip-path="url(#klip)">
                        <circle cx="300" cy="118" r="40" fill="#F0B323"/>
                        <g class="tumbuh">
                            <g fill="none" stroke="#8DBE6A" stroke-width="5" stroke-linecap="round">
                                <path d="M200 410C190 340 120 300 95 232"/>
                                <path d="M200 410C200 330 205 240 200 150"/>
                                <path d="M200 410C215 340 280 300 305 235"/>
                                <path d="M200 410C180 385 150 355 130 322"/>
                                <path d="M200 410C220 385 250 355 270 322"/>
                            </g>
                            <use href="#daun" transform="translate(95 232) rotate(-115) scale(.95)" fill="#3E7B4F"/>
                            <use href="#daun" transform="translate(200 150) rotate(-90) scale(1.2)" fill="#8DBE6A"/>
                            <use href="#daun" transform="translate(305 235) rotate(-70)" fill="#3E7B4F"/>
                            <use href="#daun" transform="translate(130 322) rotate(-150) scale(.8)" fill="#8DBE6A"/>
                            <use href="#daun" transform="translate(270 322) rotate(-30) scale(.8)" fill="#8DBE6A"/>
                            <use href="#daun" transform="translate(200 290) rotate(200) scale(.7)" fill="#3E7B4F"/>
                            <use href="#daun" transform="translate(200 255) rotate(-20) scale(.7)" fill="#3E7B4F"/>
                        </g>
                        <path d="M128 404h144l-16 100h-112z" fill="#C4543A"/>
                        <rect x="120" y="396" width="160" height="26" rx="6" fill="#D4694B"/>
                    </g>
                </svg>
            </div>
        </div>
    </div>
</header>

{{-- TENTANG --}}
<section id="tentang" class="jarak">
    <div class="container">
        <div class="row g-5 align-items-start">
            <div class="col-lg-7">
                <p class="pernyataan">Kami menanam, merawat, dan mengirim sendiri. Tidak ada tanaman yang kami jual sebelum kami lihat tumbuh sehat.</p>
                <div class="badan-dua">
                    <p>PT Asri Tani Hijau adalah UMKM budidaya dan penjualan tanaman hias, bibit buah dan sayur, serta perlengkapan berkebun. Kami percaya setiap rumah berhak punya sudut hijau yang asri.</p>
                    <p>Tanaman dirawat langsung di kebun sendiri, dipilih satu per satu sebelum dikirim, dan disertai tips perawatan supaya tumbuh sehat di rumah Anda. Bibit unggul kami siapkan untuk mereka yang ingin menanam di pekarangan.</p>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-1">
                <div class="profil-wrap">
                    <div class="profil">
                        <p class="profil-nama">PT Asri Tani Hijau</p>
                        <dl class="profil-data">
                            <div><dt>Bidang usaha</dt><dd>Budidaya dan penjualan tanaman hias, bibit buah dan sayur, serta perlengkapan berkebun</dd></div>
                            <div><dt>Lokasi kebun</dt><dd>Bandar Lampung, Lampung</dd></div>
                            <div><dt>Yang tersedia</dt><dd>{{ $produk->count() }} produk dalam {{ $kategori->count() }} kategori</dd></div>
                            <div><dt>Layanan</dt><dd>Tips perawatan di setiap pesanan</dd></div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>

        {{-- Perjalanan tanaman: klik kartu untuk mengganti ilustrasi --}}
        <div class="row g-5 align-items-center perjalanan">
            <div class="col-lg-5">
                <svg class="lengkung lengkung-kecil" viewBox="0 0 300 380" aria-hidden="true" focusable="false">
                    <defs>
                        <path id="tetes" d="M0-9C4-3 7 0 7 4A7 7 0 0 1-7 4C-7 0-4-3 0-9Z"/>
                    </defs>
                    <path d="M0 380V150a150 150 0 0 1 300 0V380Z" fill="#123524"/>
                    <circle cx="228" cy="104" r="26" fill="#F0B323"/>
                    <path d="M0 380V318c40-14 80-18 150-18s110 4 150 18V380Z" fill="#6B4A35"/>

                    {{-- Menanam: tunas kecil dan biji --}}
                    <g class="tahap aktif">
                        <ellipse cx="108" cy="336" rx="6" ry="4" fill="#C9A66B"/>
                        <ellipse cx="196" cy="342" rx="6" ry="4" fill="#C9A66B"/>
                        <ellipse cx="160" cy="352" rx="6" ry="4" fill="#C9A66B"/>
                        <path d="M150 304V262" stroke="#8DBE6A" stroke-width="5" stroke-linecap="round" fill="none"/>
                        <use href="#daun" transform="translate(150 268) rotate(-150) scale(.38)" fill="#8DBE6A"/>
                        <use href="#daun" transform="translate(150 268) rotate(-30) scale(.38)" fill="#8DBE6A"/>
                    </g>

                    {{-- Merawat: tanaman tumbuh dan disiram --}}
                    <g class="tahap">
                        <path d="M150 304C150 270 150 240 150 196" stroke="#8DBE6A" stroke-width="5" stroke-linecap="round" fill="none"/>
                        <use href="#daun" transform="translate(150 272) rotate(-155) scale(.5)" fill="#3E7B4F"/>
                        <use href="#daun" transform="translate(150 272) rotate(-25) scale(.5)" fill="#3E7B4F"/>
                        <use href="#daun" transform="translate(150 236) rotate(-150) scale(.55)" fill="#8DBE6A"/>
                        <use href="#daun" transform="translate(150 236) rotate(-30) scale(.55)" fill="#8DBE6A"/>
                        <use href="#daun" transform="translate(150 196) rotate(-90) scale(.6)" fill="#8DBE6A"/>
                        <use href="#tetes" transform="translate(66 128)" fill="#9AD1E8"/>
                        <use href="#tetes" transform="translate(96 176)" fill="#9AD1E8"/>
                        <use href="#tetes" transform="translate(58 214)" fill="#9AD1E8"/>
                    </g>

                    {{-- Memilih: tanaman penuh dengan label harga --}}
                    <g class="tahap">
                        <path d="M150 304C150 260 150 210 150 150" stroke="#8DBE6A" stroke-width="5" stroke-linecap="round" fill="none"/>
                        <use href="#daun" transform="translate(150 280) rotate(-155) scale(.6)" fill="#3E7B4F"/>
                        <use href="#daun" transform="translate(150 280) rotate(-25) scale(.6)" fill="#3E7B4F"/>
                        <use href="#daun" transform="translate(150 242) rotate(-150) scale(.62)" fill="#8DBE6A"/>
                        <use href="#daun" transform="translate(150 242) rotate(-30) scale(.62)" fill="#8DBE6A"/>
                        <use href="#daun" transform="translate(150 204) rotate(-145) scale(.6)" fill="#3E7B4F"/>
                        <use href="#daun" transform="translate(150 204) rotate(-35) scale(.6)" fill="#3E7B4F"/>
                        <use href="#daun" transform="translate(150 150) rotate(-90) scale(.72)" fill="#8DBE6A"/>
                        <path d="M150 222C176 222 202 230 210 250" stroke="#F1F4EA" stroke-width="2" fill="none"/>
                        <g transform="translate(206 250)">
                            <path d="M-8 0H34L46 14L34 28H-8Z" fill="#F0B323"/>
                            <circle cx="-1" cy="14" r="2.5" fill="#123524"/>
                            <path d="M10 14l6 6 12-12" stroke="#123524" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                        </g>
                    </g>

                    {{-- Mengirim: tanaman dalam kardus dengan kartu tips --}}
                    <g class="tahap">
                        <path d="M150 268C150 244 150 214 150 190" stroke="#8DBE6A" stroke-width="5" stroke-linecap="round" fill="none"/>
                        <use href="#daun" transform="translate(150 236) rotate(-150) scale(.5)" fill="#8DBE6A"/>
                        <use href="#daun" transform="translate(150 236) rotate(-30) scale(.5)" fill="#8DBE6A"/>
                        <use href="#daun" transform="translate(150 190) rotate(-90) scale(.6)" fill="#3E7B4F"/>
                        <path d="M85 266L62 238H150V266Z" fill="#B4844A"/>
                        <path d="M215 266L238 238H150V266Z" fill="#B4844A"/>
                        <rect x="85" y="266" width="130" height="80" rx="4" fill="#C99A5B"/>
                        <rect x="118" y="290" width="64" height="34" rx="3" fill="#F1F4EA"/>
                        <path d="M127 301h46M127 311h30" stroke="#3E7B4F" stroke-width="3" stroke-linecap="round"/>
                    </g>
                </svg>
            </div>

            <div class="col-lg-7">
                <h3 class="perjalanan-judul">Dari kebun sampai ke rumah Anda</h3>

                <div class="kartu-tahap aktif">
                    <button type="button" class="kartu-tombol" data-tahap="0" aria-expanded="true">Menanam di kebun sendiri</button>
                    <div class="kartu-isi"><div><p>Bibit kami semai dan tanam sendiri di Bandar Lampung dengan media tanam organik, tanpa perantara.</p></div></div>
                </div>
                <div class="kartu-tahap">
                    <button type="button" class="kartu-tombol" data-tahap="1" aria-expanded="false">Merawat setiap hari</button>
                    <div class="kartu-isi"><div><p>Kami siram, beri pupuk, dan pantau pertumbuhannya sampai tanaman cukup kuat untuk dijual.</p></div></div>
                </div>
                <div class="kartu-tahap">
                    <button type="button" class="kartu-tombol" data-tahap="2" aria-expanded="false">Memilih satu per satu</button>
                    <div class="kartu-isi"><div><p>Hanya tanaman yang daunnya segar dan akarnya kuat yang kami beri label harga.</p></div></div>
                </div>
                <div class="kartu-tahap">
                    <button type="button" class="kartu-tombol" data-tahap="3" aria-expanded="false">Mengirim dengan aman</button>
                    <div class="kartu-isi"><div><p>Tanaman dikemas rapat dan disertai kartu tips perawatan supaya tumbuh sehat di rumah Anda.</p></div></div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- PRODUK --}}
<section id="produk" class="produk jarak">
    <div class="container">
        <h2 class="mb-0" style="font-size:clamp(2rem,4.4vw,3.4rem)">Yang ada di kebun kami sekarang</h2>

        <div class="rak-filter" role="group" aria-label="Filter kategori">
            <button type="button" class="tab aktif" data-filter="all" aria-pressed="true">Semua<sup>{{ $produk->count() }}</sup></button>
            @foreach ($kategori as $k)
                <button type="button" class="tab" data-filter="{{ $k->id }}" aria-pressed="false">{{ $k->nama }}<sup>{{ $k->produk_count }}</sup></button>
            @endforeach
        </div>

        <div class="daftar">
            @forelse ($produk as $p)
                <div class="item-produk" data-kategori="{{ $p->kategori_id }}">
                    <button type="button" class="tanaman"
                            data-bs-toggle="modal" data-bs-target="#modalDetail"
                            data-nama="{{ $p->nama }}"
                            data-kategori="{{ $p->kategori->nama }}"
                            data-harga="Rp {{ number_format($p->harga, 0, ',', '.') }}"
                            data-stok="{{ $p->stok }}"
                            data-deskripsi="{{ $p->deskripsi }}"
                            data-foto="{{ $p->foto_url }}">
                        <span class="bingkai">
                            @if ($p->foto_url)
                                <img src="{{ $p->foto_url }}" alt="{{ $p->nama }}" loading="lazy">
                            @else
                                <span class="kosong"><svg aria-hidden="true"><use href="#ikon-daun"/></svg></span>
                            @endif
                            <span class="label-harga">Rp {{ number_format($p->harga, 0, ',', '.') }}</span>
                        </span>
                        <span class="nama">{{ $p->nama }}</span>
                        <span class="meta">{{ $p->kategori->nama }}</span>
                        <span class="meta">Stok {{ $p->stok }}</span>
                    </button>
                </div>
            @empty
                <p>Belum ada produk. Tambahkan lewat halaman admin.</p>
            @endforelse
        </div>
    </div>
</section>

{{-- TESTIMONI --}}
<section id="testimoni" class="gelap jarak">
    <div class="container">
        <h2>Kata mereka yang sudah menanam</h2>

        @if ($testimoni->isEmpty())
            <p>Belum ada testimoni.</p>
        @else
            @php
                $utama = $testimoni->first();
                $lainnya = $testimoni->slice(1);
            @endphp
            <div class="row g-5">
                <div class="col-lg-6">
                    <figure class="kutipan-besar">
                        <span class="penilaian" role="img" aria-label="Penilaian {{ $utama->rating }} dari 5">
                            @for ($i = 1; $i <= 5; $i++)
                                <svg class="daun-nilai {{ $i > $utama->rating ? 'mati' : '' }}" aria-hidden="true"><use href="#ikon-daun"/></svg>
                            @endfor
                        </span>
                        <blockquote><p>“{{ $utama->pesan }}”</p></blockquote>
                        <figcaption class="oleh">
                            <strong>{{ $utama->nama }}</strong>, {{ $utama->kota }}
                            @if ($utama->produk)
                                <span class="produk-dibeli">Membeli {{ $utama->produk->nama }}</span>
                            @endif
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <ul class="kutipan-kecil">
                        @foreach ($lainnya as $t)
                            <li>
                                <span class="penilaian" role="img" aria-label="Penilaian {{ $t->rating }} dari 5">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <svg class="daun-nilai {{ $i > $t->rating ? 'mati' : '' }}" aria-hidden="true"><use href="#ikon-daun"/></svg>
                                    @endfor
                                </span>
                                <p>“{{ $t->pesan }}”</p>
                                <p class="oleh">
                                    <strong>{{ $t->nama }}</strong>, {{ $t->kota }}
                                    @if ($t->produk)
                                        <span class="produk-dibeli">Membeli {{ $t->produk->nama }}</span>
                                    @endif
                                </p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
    </div>
</section>

{{-- KONTAK --}}
<section id="kontak" class="jarak">
    <div class="container">
        <div class="row g-5 align-items-end">
            <div class="col-lg-7">
                <h2 class="kontak-judul">Mau tanya stok atau cara merawat tanaman? Datang ke kebun atau kirim email.</h2>
            </div>
            <div class="col-lg-5">
                <dl class="rincian">
                    <dt>Alamat</dt>
                    <dd>Bandar Lampung, Lampung</dd>
                    <dt>Jam buka</dt>
                    <dd>Senin sampai Sabtu, 08.00 sampai 17.00 WIB</dd>
                    <dt>Email</dt>
                    <dd><a href="mailto:info@asritanihijau.test">info@asritanihijau.test</a></dd>
                </dl>
            </div>
        </div>
    </div>
</section>

<footer class="kaki">
    <div class="container">
        <span class="merek"><img src="{{ asset('img/logo.svg') }}" alt="" height="28" width="28"> PT Asri Tani Hijau</span>
        <span>&copy; {{ date('Y') }} PT Asri Tani Hijau</span>
        <a href="{{ route('admin.produk.index') }}">Masuk ke admin</a>
    </div>
</footer>

{{-- MODAL DETAIL PRODUK --}}
<div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="mNama" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content kotak-detail">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            <div class="row g-0">
                <div class="col-md-5 p-4">
                    <span class="bingkai" style="background:var(--lumut)">
                        <img id="mFoto" src="" alt="" class="d-none">
                        <span id="mKosong" class="kosong d-none"><svg aria-hidden="true"><use href="#ikon-daun"/></svg></span>
                    </span>
                </div>
                <div class="col-md-7 p-4 p-md-5 d-flex flex-column">
                    <span id="mKategori" class="meta"></span>
                    <h2 id="mNama"></h2>
                    <p id="mDeskripsi"></p>
                    <div class="mt-auto d-flex align-items-center flex-wrap gap-3">
                        <span class="label-harga" id="mHarga"></span>
                        <span class="meta" id="mStok"></span>
                    </div>
                    <a href="#kontak" class="tombol tombol-isi align-self-start mt-4" data-bs-dismiss="modal">Tanya stok ini</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Kartu perjalanan tanaman: ganti kartu dan ilustrasi
    const kartuTahap = document.querySelectorAll('.kartu-tahap');
    const gambarTahap = document.querySelectorAll('.tahap');
    document.querySelectorAll('.kartu-tombol').forEach(function (tombol) {
        tombol.addEventListener('click', function () {
            const i = Number(tombol.dataset.tahap);
            kartuTahap.forEach(function (k, idx) {
                k.classList.toggle('aktif', idx === i);
                k.querySelector('.kartu-tombol').setAttribute('aria-expanded', idx === i);
            });
            gambarTahap.forEach(function (g, idx) { g.classList.toggle('aktif', idx === i); });
        });
    });

    // Filter produk berdasarkan kategori
    const tombolFilter = document.querySelectorAll('[data-filter]');
    tombolFilter.forEach(function (tombol) {
        tombol.addEventListener('click', function () {
            const f = tombol.dataset.filter;
            tombolFilter.forEach(function (b) {
                const aktif = b === tombol;
                b.classList.toggle('aktif', aktif);
                b.setAttribute('aria-pressed', aktif);
            });
            document.querySelectorAll('.item-produk').forEach(function (el) {
                el.classList.toggle('d-none', f !== 'all' && el.dataset.kategori !== f);
            });
        });
    });

    // Isi modal detail dari data produk
    document.getElementById('modalDetail').addEventListener('show.bs.modal', function (e) {
        const d = e.relatedTarget.dataset;
        document.getElementById('mNama').textContent = d.nama;
        document.getElementById('mKategori').textContent = d.kategori;
        document.getElementById('mHarga').textContent = d.harga;
        document.getElementById('mStok').textContent = 'Stok ' + d.stok;
        document.getElementById('mDeskripsi').textContent = d.deskripsi;

        const foto = document.getElementById('mFoto');
        const kosong = document.getElementById('mKosong');
        if (d.foto) {
            foto.src = d.foto;
            foto.alt = d.nama;
            foto.classList.remove('d-none');
            kosong.classList.add('d-none');
        } else {
            foto.classList.add('d-none');
            kosong.classList.remove('d-none');
        }
    });
</script>
</body>
</html>
