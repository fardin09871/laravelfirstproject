<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'MVP.N' }}</title>
    <link rel="stylesheet" href="/css/style.css">




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .navbar-custom {
            background: #ffffff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .navbar-nav .nav-link {
            font-weight: 600;
            color: #222 !important;
            padding: 12px 20px;
            position: relative;
            transition: 0.25s;
        }
/* Reset default */
.nav-link::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 0;
    height: 2px;
    background: #000;
    transition: .3s;
}


.nav-link:hover::after {
    width: 100%;
}


.nav-link.active::after {
    width: 0;
}


        .navbar-brand img {
            width: 50px;
            height: auto;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">

        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('assets/img/mvpn.png') }}" class="me-2">
            <span class="fw-bold">MVP.N</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('index1') ? 'active' : '' }}" href="/">Beranda</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('tentang') ? 'active' : '' }}" href="/tentang">Tentang Kami</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('visimisi') ? 'active' : '' }}" href="/visimisi">Visi & Misi</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('struktur') ? 'active' : '' }}" href="/struktur">Struktur Komunitas</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('proker') ? 'active' : 'proker' }}" href="/proker">Program Kerja</a> 
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dokumentasi') ? 'active' : 'dokumentasi' }}" href="/dokumentasi">Galeri</a> 
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('kemitraan') ? active : 'kemitraan' }}" href="/mitra">Kemitraan</a>

                 <li class="nav-item">
                    <a class="nav-link {{ Request::is('kerjasama') ? 'active' : '' }}" href="/kerjasama">Kerjasama</a>
                </li>
            </ul>
        </div>

    </div>
</nav>

