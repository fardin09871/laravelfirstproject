@include('layouts.header')

<section class="py-5"></section>
    <div class="container">
        <div class="row align-items-center">

            <div class="col-md-7" style="text-align: justify; 
                        animation: fadeInLeft 1.5s ease forwards; 
                        opacity: 0;">
                <h1 style="font-size: 3rem; font-weight: bold; color: #333;" class="mb-4">Tentang Kami</h1>
                <p style="font-size: 1.2rem; color: #555; line-height: 1.6;">
                    Muda Visioner Penggerak Nasional adalah komunitas non-profit yang dibentuk untuk memberdayakan generasi muda agar berkontribusi pada pembangunan dan kemajuan wilayah.
                <p style="font-size: 1.2rem; color: #555; line-height: 1.6;">
                    Program kami melibatkan pelatihan, pendidikan, dan penyediaan wadah bagi pemuda untuk mengembangkan ide-ide kreatif dan inovatif. Didirikan di Sukabumi pada tahun 2023, MVP.N lahir dari pemikiran putera-puteri daerah dan alumni diaspora sebagai bentuk pengabdian untuk generasi selanjutnya.
                <p style="font-size: 1.2rem; color: #555; line-height: 1.6;">
                    Kami hadir secara independen untuk menjawab kebutuhan pemuda Indonesia untuk terlibat aktif dalam proses pembangunan dan menjadi agen perubahan bagi masa depan bangsa.
                </p>
            </div>

            
            <div class="col-md-5 text-center" 
                 style="animation: fadeInUp 1.5s ease forwards; opacity: 0;">
                <img src="{{ asset('assets/img/mvpn.png') }}" 
                     alt="Logo" 
                     style="max-width: 100%; height: auto; width: 550px;">
            </div>

        </div>
    </div>
</section>


<style>
@keyframes fadeInLeft {
    0% { opacity: 0; transform: translateX(-50px); }
    100% { opacity: 1; transform: translateX(0); }
}

@keyframes fadeInUp {
    0% { opacity: 0; transform: translateY(50px); }
    100% { opacity: 1; transform: translateY(0); }
}
</style>

@include('layouts.footer')
