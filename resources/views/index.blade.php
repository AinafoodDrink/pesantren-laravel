<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pondok Pesantren AS-SYAMSI</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Lateef&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/about/logo.png') }}">
    <style>
        :root {
            --primary-green: #155724;
            --accent-gold: #ffc107;
            --light-green: #f0f7f2;
        }

        body { 
    font-family: 'Poppins', sans-serif;
    scroll-behavior: smooth; 

    background-image: url('img/pon.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
}


        h1, h2, h3, .navbar-brand { font-family: 'Montserrat', sans-serif; }

        .navbar { background-color: var(--primary-green) !important; border-bottom: 3px solid var(--accent-gold); }
        .nav-link { font-weight: 500; transition: 0.3s; }
        .nav-link:hover { color: var(--accent-gold) !important; }

        .hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url("{{ asset('assets/img/pon.png') }}");
            background-size: cover;
            background-position: center;
            height: 100vh;
            color: white;
            display: flex;
            align-items: center;
            text-align: center;
        }

        section { padding: 100px 0; }
        .section-title { margin-bottom: 60px; position: relative; }
        .section-title h2::after {
            content: '';
            background: var(--accent-gold);
            height: 3px;
            width: 80px;
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }

        .custom-card {
            border: none;
            border-radius: 15px;
            transition: 0.3s;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }
        .custom-card:hover { transform: translateY(-10px); box-shadow: 0 15px 35px rgba(0,0,0,0.1); }
        .icon-box i { font-size: 50px; color: var(--primary-green); }

        footer { background-color: var(--primary-green); border-top: 5px solid var(--accent-gold); }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center" href="#">
            <img src="{{ asset('assets/img/about/logo.png') }}" alt="Logo" height="45" class="me-2">
            AS-SYAMSI
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto text-uppercase small">
                <li class="nav-item"><a class="nav-link" href="#beranda">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="#profil">Profil</a></li>
                <li class="nav-item"><a class="nav-link" href="#program">Program</a></li>
                <li class="nav-item"><a class="nav-link" href="#asatidzah">Asatidzah</a></li>
                <li class="nav-item"><a class="nav-link" href="#galeri">Galeri</a></li>
                <li class="nav-item ms-lg-3"><a class="btn btn-warning px-4 fw-bold" href="#pendaftaran">DAFTAR</a></li>
            </ul>
        </div>
    </div>
</nav>

<section id="beranda" class="hero">
    <div class="container text-center">
        <div class="mb-2">
            <h2 style="font-family: 'Amiri', serif; font-size: 2.5rem; color: var(--accent-gold);">
                بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيمِ
            </h2>
            <p class="mb-0" style="font-family: 'Lateef', cursive; font-size: 1.8rem; color: #ffffff; opacity: 0.9;">
                       السَّلَامُ عَلَيْكُمْ
            </h2>
            <p class="mb-0" style="font-family: 'Lateef', cursive; font-size: 1.8rem; color: #ffffff; opacity: 0.9;">
                     Selamat Datang Di        
                    </p>
        </div>

        <h1 class="display-3 fw-bold mb-3">Pondok Pesantren AS-SYAMSI</h1>
        <p class="lead fs-4 mb-4">Membentuk Generasi Qur’ani, Berakhlak Mulia, dan Mandiri di Era Modern.</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="#pendaftaran" class="btn btn-warning btn-lg px-5 fw-bold">Daftar Sekarang</a>
            <a href="#profil" class="btn btn-outline-light btn-lg px-5">Profil Pesantren</a>
        </div>
    </div>
</section>

<section id="profil">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-success">Profil Pesantren</h2>
            <div class="mx-auto" style="width: 80px; height: 3px; background: #ffc107;"></div>
            <p class="text-muted mt-3">Mengenal Lebih Dekat Pondok Pesantren AS-SYAMSI</p>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="position-relative">
                    <img src="{{ asset('assets/img/gambar.jpg') }}" class="img-fluid rounded-4 shadow-lg" alt="Foto Profil Pesantren">
                    <div class="position-absolute bottom-0 start-0 bg-success text-white p-3 rounded-end shadow" style="margin-bottom: 20px;">
                        <span class="fw-bold">Sejak 1908</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 ps-lg-5">
                <h3 class="fw-bold mb-3">Membangun Generasi Madani</h3>
                <p class="text-secondary mb-4">
                    Pondok Pesantren AS-SYAMSI merupakan lembaga pendidikan Islam yang berkomitmen dalam mencetak generasi santri yang berakhlakul karimah, berilmu, mandiri, dan berdaya saing. Pendidikan di pesantren ini tidak hanya menekankan pada penguasaan ilmu agama, tetapi juga pada pembentukan karakter santri agar memiliki kepribadian yang tangguh, disiplin, cerdas, serta berlandaskan nilai-nilai keislaman yang kuat.

Dalam proses pendidikannya, Pondok Pesantren AS-SYAMSI mengintegrasikan kurikulum salafiyah berbasis kitab kuning dengan sistem pendidikan formal modern yang terstruktur dan relevan dengan perkembangan zaman. Pendekatan ini bertujuan agar santri mampu memahami khazanah keilmuan Islam klasik secara mendalam, sekaligus memiliki wawasan intelektual dan keterampilan yang dibutuhkan dalam kehidupan bermasyarakat.

Selain pembelajaran di dalam kelas, pesantren juga menanamkan nilai-nilai kedisiplinan, tanggung jawab, kemandirian, dan kepemimpinan melalui kegiatan harian, pembinaan ibadah, serta program pengembangan diri santri. Dengan bimbingan para asatidz yang kompeten dan berpengalaman, Pondok Pesantren AS-SYAMSI berupaya menciptakan lingkungan pendidikan yang kondusif, religius, dan inspiratif sebagai bekal santri untuk menjadi insan yang bermanfaat bagi agama, bangsa, dan umat.
                </p>

                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <div class="d-flex align-items-center mb-2">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <h5 class="mb-0 fw-bold">Visi</h5>
                        </div>
                        <p class="small text-muted">Menjadi pusat unggulan pendidikan Islam yang mencetak generasi Mutafaqqih Fiddin (ahli agama), berakhlak mulia, dan kompeten dalam menghadapi tantangan zaman demi kemaslahatan umat.</p>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="d-flex align-items-center mb-2">
                            <i class="fas fa-bullseye text-warning me-2"></i>
                            <h5 class="mb-0 fw-bold">Misi</h5>
                        </div>
                        <p class="small text-muted">Tahfidz & Itqan: Menyelenggarakan program menghafal Al-Qur'an secara intensif dengan target kualitas hafalan yang mutqin (kuat).

Kajian Turats: Melestarikan budaya literasi kitab kuning (khazanah klasik Islam) melalui sistem pengajaran sorogan dan bandongan.

Modernisasi Pendidikan: Mengintegrasikan kurikulum pesantren dengan pendidikan formal dan penguasaan teknologi informasi.

Pribadi Mandiri: Membentuk karakter santri yang berjiwa entrepreneur (wirausaha) dan mandiri melalui program kecakapan hidup.</p>
                    </div>
                </div>

                <a href="#pendaftaran" class="btn btn-outline-success px-4 py-2 mt-2">
                    Selengkapnya <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="program" class="bg-light">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="fw-bold">Program Unggulan di pesantren kami</h2>
            <p>Pilar utama pendidikan di pesantren kami</p>
        </div>
        <div class="row g-4 text-center">
    <div class="col-md-4">
        <div class="custom-card bg-white p-0 h-100 overflow-hidden shadow-sm" style="border-radius: 15px;">
            <img src="{{ asset('assets/img/ima.jpg') }}" class="img-fluid" alt="Tahfidzul Qur'an" style="height: 200px; width: 100%; object-fit: cover;">
            
            <div class="p-4">
                <div class="icon-box mb-3 text-success"><i class="fas fa-quran fa-2x"></i></div>
                <h4 class="fw-bold">Tahfidzul Qur’an</h4>
                <p class="text-muted">Target hafalan mutqin 30 juz dengan bimbingan ustadz tersertifikasi.</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="custom-card bg-white p-0 h-100 overflow-hidden shadow-sm" style="border-radius: 15px;">
            <img src="{{ asset('assets/img/pen.jpg') }}" class="img-fluid" alt="Turats" style="height: 200px; width: 100%; object-fit: cover;">
            
            <div class="p-4">
                <div class="icon-box mb-3 text-success"><i class="fas fa-book-open-reader fa-2x"></i></div>
                <h4 class="fw-bold">Turats (Kitab Kuning)</h4>
                <p class="text-muted">Pendalaman Fiqih, Aqidah, dan Nahwu Shorof ala pesantren salaf.</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="custom-card bg-white p-0 h-100 overflow-hidden shadow-sm" style="border-radius: 15px;">
            <img src="{{ asset('assets/img/arab.jpg') }}" class="img-fluid" alt="IT & Bahasa" style="height: 200px; width: 100%; object-fit: cover;">
            
            <div class="p-4">
                <div class="icon-box mb-3 text-success"><i class="fas fa-laptop-code fa-2x"></i></div>
                <h4 class="fw-bold">IT & Bahasa</h4>
                <p class="text-muted">Penguasaan Bahasa Arab, Inggris, dan keterampilan digital masa kini.</p>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
</section>

<section id="asatidzah" class="bg-white">
    <div class="container text-center">
        <div class="section-title">
            <h2 class="fw-bold">Para Asatidzah</h2>
            <p>Dibimbing langsung oleh para pakar di bidangnya</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <img src="{{ asset('assets/img/syamsi.jpg') }}" class="rounded-circle mb-3" width="150" height="150" style="object-fit: cover;">
                <h5 class="fw-bold mb-1">KH.hj.Ahmad Syamsi</h5>
                <p class="text-success small">Pengasuh Pesantren</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('assets/img/zulfikar.png') }}" class="rounded-circle mb-3" width="150" height="150" style="object-fit: cover;">
                <h5 class="fw-bold mb-1">nyai.hj.Fatimah</h5>
                <p class="text-success small">pengasuh Putri</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('assets/img/zul.png') }}" class="rounded-circle mb-3" width="150" height="150" style="object-fit: cover;">
                <h5 class="fw-bold mb-1">Ustadz Zulfikar</h5>
                <p class="text-success small">Pembimbing Kitab Kuning</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('assets/img/syamsul.jpg') }}" class="rounded-circle mb-3" width="150" height="150" style="object-fit: cover;">
                <h5 class="fw-bold mb-1">Ustadz syamsul</h5>
                <p class="text-success small">Pembimbing Tahfidzul</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('assets/img/juned.jpg') }}" class="rounded-circle mb-3" width="150" height="150" style="object-fit: cover;">
                <h5 class="fw-bold mb-1">Ustadz juned</h5>
                <p class="text-success small">ust tugasan</p>
            </div>
        </div>
    </div>
</section>

<section id="galeri" class="bg-light">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="fw-bold">Galeri Kegiatan</h2>
            <p>Momen berharga aktivitas santri kami</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="custom-card">
                    <img src="{{ asset('assets/img/kajian.png') }}" class="img-fluid" alt="Kegiatan 1">
                    <div class="p-3 bg-white text-center">
                        <h6 class="fw-bold mb-1">Kajian Subuh</h6>
                        <small class="text-muted">Aktivitas rutin setiap pagi di Masjid.</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="custom-card">
                    <img src="{{ asset('assets/img/ser.jpg') }}" class="img-fluid" alt="Kegiatan 2">
                    <div class="p-3 bg-white text-center">
                        <h6 class="fw-bold mb-1">Setoran Hafalan</h6>
                        <small class="text-muted">Santri menyetorkan hafalan Qur'an harian.</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="custom-card">
                    <img src="{{ asset('assets/img/ii.jpg') }}" class="img-fluid" alt="Kegiatan 3">
                    <div class="p-3 bg-white text-center">
                        <h6 class="fw-bold mb-1">Ekstrakurikuler</h6>
                        <small class="text-muted">Pengembangan minat dan bakat santri.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="pendaftaran" class="bg-white">
    <div class="container text-center">
        <div class="section-title">
            <h2 class="fw-bold">Formulir Pendaftaran santri</h2>
            <p>Gabung bersama kami menjadi generasi unggul, berahklak, dan cerdas.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card p-4 shadow-sm rounded-4 text-start">
                    <form action="https://wa.me/6281234567890" method="get" target="_blank">
                        <div class="mb-3">
                            <label class="form-label fw-bold small">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control form-control-lg bg-light border-0" placeholder="Masukkan nama anda" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold small">alamat</label>
                            <input type="text" name="asal" class="form-control form-control-lg bg-light border-0" placeholder="Asal">
                        </div>
                        <div class="mb-4">
                            <label class="form-label fw-bold small">alasan ingin masuk ke sini</label>
                            <textarea name="pesan" class="form-control bg-light border-0" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg w-100 fw-bold">Kirim Via WhatsApp <i class="bi bi-whatsapp ms-2"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="py-5 text-white">
    <div class="container text-center">
        <div class="mb-4">
            <h3 class="fw-bold">AS-SYAMSI</h3>
            <p class="small text-white-50">📍 Alamat Lengkap Pesantren Anda Di Sini</p>
            <div class="d-flex justify-content-center gap-3 fs-4">
                <a href="#" class="text-white"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-white"><i class="bi bi-youtube"></i></a>
            </div>
        </div>
        <hr class="bg-white-50 my-4">
        <p class="small mb-0 opacity-50">&copy; {{ date('Y') }} Pondok Pesantren AS-SYAMSI. All Rights Reserved.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>