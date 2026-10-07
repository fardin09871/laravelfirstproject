@include('layouts.header')

<style>
.struktur-wrapper {
    max-width: 920px;
    margin: 0 auto;
}

.accordion-item {
    border: none;
    margin-bottom: 16px;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 8px 24px rgba(0,0,0,0.08);
}

.accordion-button {
    font-weight: 700;
    padding: 18px 24px;
    background: #fff;
    transition: 0.3s;
}

.accordion-button:not(.collapsed) {
    background: #f8f9fa;
    color: #000;
}

.accordion-body {
    animation: fadeSlide 0.6s ease;
}

/* ===== CARD ===== */
.member-card {
    background: #fff;
    border-radius: 14px;
    overflow: hidden;
    transition: 0.35s ease;
    box-shadow: 0 6px 18px rgba(0,0,0,0.08);
}

.member-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 14px 30px rgba(0,0,0,0.15);
}

.member-photo {
    width: 100%;
    height: 210px;
    object-fit: cover;
    background: #eee;
}

.member-info {
    padding: 18px;
    text-align: center;
}

.member-info h5 {
    font-weight: 700;
    margin-bottom: 4px;
}

.member-info p {
    color: #777;
    margin-bottom: 10px;
}

@keyframes fadeSlide {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<div class="container py-5" style="margin-top:100px">
    <h2 class="text-center fw-bold mb-5">Struktur Komunitas</h2>

    <div class="struktur-wrapper">
        <div class="accordion" id="strukturAccordion">

            {{-- BOD --}}
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#bod">
                        Board Of Director
                    </button>
                </h2>
                <div id="bod" class="accordion-collapse collapse show" data-bs-parent="#strukturAccordion">
                    <div class="accordion-body">
                        <div class="row justify-content-center g-4">
                            <div class="col-md-5 col-sm-8">
                                <div class="member-card">
                                    <img class="member-photo" src="{{ asset('assets/img/pres1.png') }}">
                                    <div class="member-info">
                                        <h5>Indra A. Oktariawan</h5>
                                        <p>President</p>
                                        <a href="https://www.instagram.com/oktariawanindra?igsh=MWNkZG1kZGE1NHZrZg==" class="btn btn-sm btn-danger">Instagram</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-8">
                                <div class="member-card">
                                    <img class="member-photo" src="{{ asset('assets/img/wapres.png') }}">
                                    <div class="member-info">
                                        <h5>Ani Yuliani</h5>
                                        <p>Vice President</p>
                                        <a href="https://www.instagram.com/aniyuliani2020?igsh=MWRwMWR4emJqY3E0aQ==
" class="btn btn-sm btn-danger">Instagram</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- SEKRETARIS --}}
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sekretaris">
                        Sekretaris
                    </button>
                </h2>
                <div id="sekretaris" class="accordion-collapse collapse" data-bs-parent="#strukturAccordion">
                    <div class="accordion-body">
                        <div class="row justify-content-center g-4">
                            <div class="col-md-5 col-sm-8">
                                <div class="member-card">
                                    <img class="member-photo" src="{{ asset('assets/img/sekre1.png') }}">
                                    <div class="member-info">
                                        <h5>Putri Wardhany</h5>
                                        <p>Sekretaris</p>
                                        <a href="https://www.instagram.com/__putriwardha?igsh=MXh6NThjZWxha3BhaA==" class="btn btn-sm btn-danger">Instagram</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-8">
                                <div class="member-card">
                                    <img class="member-photo" src="{{ asset('assets/img/sekre2.png') }}">
                                    <div class="member-info">
                                        <h5>Maria C. Maharani</h5>
                                        <p> Wakil Sekretaris</p>
                                        <a href="https://www.instagram.com/raanisti?igsh=MWEyMmN0N3JuOXY0Zg==
" class="btn btn-sm btn-danger">Instagram</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- EKONOMI --}}
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#ekonomi">
                        Direktorat Hubungan Ekonomi & Regional
                    </button>
                </h2>
                <div id="ekonomi" class="accordion-collapse collapse" data-bs-parent="#strukturAccordion">
                    <div class="accordion-body">
                        <div class="row justify-content-center g-4">
                            <div class="col-md-5 col-sm-8">
                                <div class="member-card">
                                    <img class="member-photo" src="{{ asset('assets/img/direktorat.png') }}">
                                    <div class="member-info">
                                        <h5>Susanty</h5>
                                        <p>Direktorat</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-8">
                                <div class="member-card">
                                    <img class="member-photo" src="{{ asset('assets/img/wakildirektorat.png') }}">
                                    <div class="member-info">
                                        <h5>Ajeng Fimara</h5>
                                        <p>Wakil Direktorat</p>
                                        <a href="https://www.instagram.com/ajengfsbtr_?igsh=Y3oxaThqZWJ3dnJ1
" class="btn btn-sm btn-danger">Instagram</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- INTERNASIONAL --}}
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#internasional">
                        Direktorat Hubungan Internasional
                    </button>
                </h2>
                <div id="internasional" class="accordion-collapse collapse" data-bs-parent="#strukturAccordion">
                    <div class="accordion-body">
                        <div class="row justify-content-center g-4">
                            <div class="col-md-5 col-sm-8">
                                <div class="member-card">
                                    <img class="member-photo" src="{{ asset('assets/img/hi asean.jpeg') }}">
                                    <div class="member-info">
                                        <h5>DR.(C). Ramdani Murdiana</h5>
                                        <p>Hubungan Internasional ASEAN</p>
                                        <a href="https://www.instagram.com/walikutay?igsh=dDB0YTNvd3A3cWJh
" class="btn btn-sm btn-danger">Instagram</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-8">
                                <div class="member-card">
                                    <img class="member-photo" src="{{ asset('assets/img/hi tim.png') }}">
                                    <div class="member-info">
                                        <h5>Budi Suranto</h5>
                                        <p>Hubungan Internasional Timur Tengah</p>
                                        <a href="#" class="btn btn-sm btn-danger">Instagram</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- IT DEVELOPMENT --}}
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#itdev">
                        IT Development
                    </button>
                </h2>
                <div id="itdev" class="accordion-collapse collapse" data-bs-parent="#strukturAccordion">
                    <div class="accordion-body">
                        <div class="row justify-content-center g-4">
                            <div class="col-md-5 col-sm-8">
                                <div class="member-card">
                                    <img class="member-photo" src="{{ asset('assets/img/it.jpeg') }}">
                                    <div class="member-info">
                                        <h5>Fardin Muhammad Azis</h5>
                                        <p>Frontend Web Developer</p>
                                        <a href="https://www.instagram.com/swsevrydy_/" class="btn btn-sm btn-danger">
                                            Instagram
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>

@include('layouts.footer')
