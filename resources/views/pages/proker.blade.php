@include('layouts.header')

<style>
.page-wrapper {
    max-width: 1000px;
    margin: 80px auto;
    padding: 0 20px;
    font-family: 'Segoe UI', sans-serif;
}

.title {
    text-align: center;
    font-size: 3rem;
    font-weight: 700;
}

.title-line {
    width: 80px;
    height: 4px;
    background: #000;
    margin: 15px auto 40px;
}

.tab-header {
    display: flex;
    justify-content: center;
    gap: 30px;
    margin-bottom: 40px;
}

.tab-btn {
    cursor: pointer;
    font-weight: 600;
    position: relative;
    padding-bottom: 6px;
}

.tab-btn::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 0;
    height: 2px;
    background: #000;
    transition: .3s;
}

.tab-btn.active::after {
    width: 100%;
}

.tab-wrapper {
    position: relative;
}

.tab-content {
    display: none;
    animation: fadeSlide .5s ease;
}

.tab-content.active {
    display: block;
}

.checklist {
    list-style: none;
    padding-left: 0;
}

.checklist > li {
    position: relative;
    padding-left: 28px;
    margin-bottom: 10px;
}

.checklist > li::before {
    content: "✔";
    position: absolute;
    left: 0;
    top: 0;
    color: #000;
    font-weight: bold;
}

.checklist ul {
    list-style: none;
    margin-top: 8px;
    padding-left: 22px;
}

.checklist ul li {
    position: relative;
    padding-left: 22px;
    margin-bottom: 6px;
    font-size: 0.95rem;
}

.checklist ul li::before {
    content: "–";
    position: absolute;
    left: 0;
    color: #666;
}


.soon {
    font-size: 0.85rem;
    color: #999;
}

@keyframes fadeSlide {
    from {
        opacity: 0;
        transform: translateY(15px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<div class="page-wrapper">
    <h1 class="title">Program Kerja</h1>
    <div class="title-line"></div>

    <div class="tab-header">
        <span class="tab-btn active" data-tab="pendidikan">Pendidikan</span>
        <span class="tab-btn" data-tab="wirausaha">Kewirausahaan</span>
        <span class="tab-btn" data-tab="sdm">Pengembangan SDM</span>
    </div>

    <div class="tab-wrapper">
        <div class="tab-content active" id="pendidikan">
            <h2>Pendidikan</h2>
            <ul class="checklist">
                <li>Kelas PKBM (Kejar Paket A,B,C)</li>
                <li>Self Improvement / Public Speaking</li>
                <li>Pelatihan Bahasa Asing:
                    <ul>
                        <li>Inggris</li>
                        <li>Jerman</li>
                        <li>Prancis</li>
                        <li>Mandarin</li>
                        <li>Arab</li>
                        <li>Turki</li>
                        <li>Korea</li>
                        <li>Thailand <span class="soon">(coming soon)</span></li>
                        <li>Isyarat <span class="soon">(coming soon)</span></li>
                        <li>Urdu <span class="soon">(coming soon)</span></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="tab-content" id="wirausaha">
            <h2>Kewirausahaan</h2>
            <ul class="checklist">
                <li>UMKM Go Export</li>
                <li>Business Matching dengan Buyer Dalam & Luar Negeri</li>
            </ul>
        </div>

        <div class="tab-content" id="sdm">
            <h2>Pengembangan SDM</h2>
            <ul class="checklist">
                <li>Pelatihan Keterampilan Teknis</li>
                <li>Pelatihan Kewirausahaan</li>
                <li>Pelatihan Soft Skills</li>
                <li>Pelatihan Literasi</li>
                <li>Pelatihan Pemberdayaan Sosial</li>
                <li>Kepemimpinan Lokal</li>
                <li>Program Pengembangan SDM</li>
                <li>Tujuan Akhir Program</li>
            </ul>
        </div>
    </div>
</div>

<script>
document.querySelectorAll('.tab-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
        document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));

        btn.classList.add('active');
        document.getElementById(btn.dataset.tab).classList.add('active');
    });
});
</script>

@include('layouts.footer')
