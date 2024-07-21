<?php

use common\models\TbKamar;
$kamars = TbKamar::find()->all();
?>

<div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0">
    <div class="row gx-0">
        <div class="col-lg-3 bg-dark d-none d-lg-block">
            <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                <h1 class="m-0 text-primary">Hotel Kami</h1>
            </a>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0 fixed-top">
                <a href="index.html" class="navbar-brand d-block">
                    <h1 class="m-3 text-primary">Hotel Kami</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="#index" class="nav-item nav-link">Beranda</a>
                        <a href="#about" class="nav-item nav-link">Tentang</a>
                        <a href="#room" class="nav-item nav-link">Kamar</a>
                        <a href="#service" class="nav-item nav-link">Fasilitas</a>
                        <!-- <a href="#booking" class="nav-item nav-link">Pesan Kamar</a> -->
                        <a href="#testimonial" class="nav-item nav-link">Kritik & Saran</a>
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Halaman</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="#booking" class="dropdown-item">Pesan Kamar</a>
                                <a href="#testimonial" class="dropdown-item">Testimoni</a>
                            </div>
                        </div> -->
                        <a href="#contact" class="nav-item nav-link">Kontak</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
        <!-- Header End -->


        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5" id="index">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="frontend/img/carousel-1.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Lobby Hotel</h6>
                                <h1 class="display-5 text-white mb-4 animated slideInDown">Rasakan Kemewahan, Nikmati Kenyamanan</h1>
                                <a href="#room" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Kamar kami</a>
                                <a href="#booking" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Pesan Kamar</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="frontend/img/carousel-2.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Kolam Renang</h6>
                                <h1 class="display-5 text-white mb-4 animated slideInDown">Rasakan Kemewahan, Nikmati Kenyamanan</h1>
                                <a href="#room" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Kamar Kami</a>
                                <a href="#booking" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Pesan Kamar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Booking Start -->
        <!-- Booking Start -->
        <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s" id="booking">
        <div class="container">
            <div class="bg-white shadow" style="padding: 35px;">
                <div class="row g-2">
                    <div class="col-md-15">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <div class="date">
                                    <label for="nik" class="form-label mb-2" >NIK</label>
                                    <input type="number" class="form-control" placeholder="NIK" id="nik" required autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="date">
                                    <label for="nama" class="form-label mb-2">Nama</label>
                                    <input type="text" class="form-control" placeholder="Nama" id="nama" required autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="date">
                                    <label for="alamat" class="form-label mb-2">Alamat</label>
                                    <input type="text" class="form-control" placeholder="Alamat" id="alamat" required autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="date">
                                    <label for="telepon" class="form-label mb-2">Nomor Telepon</label>
                                    <input type="number" class="form-control" placeholder="Nomor Telepon" id="telepon" required autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="date">
                                    <label for="bookingNoKamar" class="form-label mb-2">Nomor Kamar</label>
                                    <input type="text" class="form-control" placeholder="Nomor Kamar" id="bookingNoKamar" required autocomplete="off" readonly/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="date">
                                    <label for="bookingTipeKamar" class="form-label mb-2">Tipe Kamar</label>
                                    <input type="text" class="form-control" placeholder="Tipe Kamar" id="bookingTipeKamar" required autocomplete="off" readonly/>
                                </div>
                            </div>
                            <!-- <div class="col-md-3">
                                <div class="date">
                                    <label for="bookingTipeKamar" class="form-label mb-2">Tipe Kamar</label>
                                    <select class="form-control" required readonly>
                                        <option value="" disabled selected readonly>Tipe Kamar</option>
                                        <option value="Single Suite">Single Suite</option>
                                        <option value="Double Suite">Double Suite</option>
                                        <option value="Family Room">Family Room</option>
                                        <option value="Super Luxury">Super Luxury</option>
                                    </select>
                                </div>
                            </div> -->
                            <div class="col-md-3">
                                <div class="date">
                                    <label for="checkIn" class="form-label mb-2">Check-in</label>
                                    <input type="date" class="form-control" placeholder="Tanggal Check-in" id="checkIn" required autocomplete="off" value="<?= date('Y-m-d'); ?>"/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="date">
                                    <label for="checkOut" class="form-label mb-2">Check-out</label>

                                    <input type="date" class="form-control" placeholder="Tanggal Check-out" id="checkOut" required autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-md-3 d-none">
                                <div class="date">
                                    <label for="tanggal_transaksi" class="form-label mb-2">Tanggal Transaksi</label>
                                    <input type="date" class="form-control" placeholder="Tanggal Transaksi" id="tanggal_transaksi" required autocomplete="off" value="<?= date('Y-m-d'); ?>"/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="date">
                                    <label for="bookingHargaPerMalam" class="form-label mb-2">Harga Per Malam</label>
                                    <input type="number" class="form-control" placeholder="Harga per Malam" id="bookingHargaPerMalam" required autocomplete="off" readonly/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="date">
                                    <label for="totalHarga" class="form-label mb-2">Total Harga</label>
                                    <input type="number" class="form-control" placeholder="Total Harga" id="totalHarga" required autocomplete="off" readonly/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="date">
                                    <label for="statusSelect" class="form-label mb-2">Status</label>
                                    <select value="" id="statusSelect" class="form-control" required style="background-color: white; color: black;">
                                        <option value="" disabled selected>Status</option>
                                        <option value="Dipesan" style="background-color: white; color: black;">Dipesan</option>
                                        <option value="Dibatalkan" style="background-color: white; color: black;">Dibatalkan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="" class="form-label"></label>
                                <button class="btn btn-primary w-100 mt-2" onclick="submitBooking()">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Booking End -->
        <!-- Booking End -->


        <!-- About Start -->
        <div class="container-xxl py-5" id="about">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <!-- <h6 class="section-title text-start text-primary text-uppercase">Tentang Kami</h6> -->
                        <h1 class="mb-4 text-uppercase">Tentang <span class="text-primary">Kami</span></h1>
                        <p class="mb-4">Selamat datang di Hotel Kami, tempat di mana kenyamanan dan kehangatan bertemu. Terletak di kota Pekalongan, menawarkan akomodasi nyaman dan elegan dengan layanan yang dipersonalisasi untuk memenuhi setiap kebutuhan Anda. Di Hotel Kami, setiap tamu adalah prioritas kami. Tim kami yang ramah dan profesional selalu siap melayani dengan senyuman, memastikan Anda merasa seperti di rumah sendiri. Dengan fasilitas lengkap dan suasana yang menenangkan, kami berkomitmen untuk memberikan pengalaman menginap yang tak terlupakan.</p>
                        <div class="row g-3 pb-4">
                            <!-- <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="mb-0">Rooms</p>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="mb-0">Staffs</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="mb-0">Clients</p>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        
                        <a class="btn btn-primary py-3 px-5 mt-2" href="https://maps.app.goo.gl/P8h8enWJnHFCZJqi7" target="blank"> <i class="bi bi-geo-alt-fill"> G-MAPS </a></i>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="frontend/img/about-1.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="frontend/img/about-2.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="frontend/img/about-3.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="frontend/img/about-4.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Room Start -->
        <!-- Room Start -->
<div class="container-xxl py-5" id="room">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Kamar</h6>
            <h1 class="mb-5">KAMAR <span class="text-primary text-uppercase">Kami</span></h1>
        </div>
        <div class="row g-4">
            <?php foreach ($kamars as $kamar): ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="<?= Yii::getAlias('@web') ?>/frontend/img/<?= $kamar->gambar ?>" alt="">
                            <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Rp. <?= number_format($kamar->harga_per_malam, 0, ',', '.') ?>/Malam</small>
                        </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0"><?= $kamar->tipe_kamar ?></h5>
                                <div class="mt-1">
                                    <h6 id="statusKamar<?= $kamar->no_kamar ?>" class="<?= $kamar->status == 'Tersedia' ? 'text-success' : 'text-danger' ?>"><?= $kamar->status ?></h6>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <!-- Tambahkan detail lainnya sesuai dengan kebutuhan -->
                            </div>
                            <p class="text-body mb-3"><?= $kamar->keterangan ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex">
                                    <small class="fa fa-star text-primary me-1"></small>
                                    <small class="fa fa-star text-primary me-1"></small>
                                    <small class="fa fa-star text-primary me-1"></small>
                                    <small class="fa fa-star text-primary me-1"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <div class="d-flex">
                                    <button class="btn btn-sm btn-primary rounded py-2 px-4 me-2">No. <?= $kamar->no_kamar ?></button>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" 
                                    href="#booking"
                                    data-no-kamar="<?= $kamar->no_kamar ?>"
                                    data-tipe-kamar="<?= $kamar->tipe_kamar ?>"
                                    data-harga-per-malam="<?= $kamar->harga_per_malam ?>"
                                    data-status-kamar="<?= $kamar->status ?>"
                                    onclick="fillBookingForm(this)">Pesan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Room End -->
        <!-- Room End -->


        <!-- Video Start -->
        
        <!-- Video Start -->


        <!-- Service Start -->
        <div class="container-xxl py-5" id="service">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Fasilitas</h6>
                    <h1 class="mb-5">Fasilitas<span class="text-primary text-uppercase"> Kami</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" id="service">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-hotel fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Kamar</h5>
                            <p class="text-body mb-0">Hotel Kami menawarkan berbagai jenis kamar yang nyaman dan elegan, termasuk jenis kamar Single, Double, Family, dan Luxury, Setiap kamar dilengkapi dengan fasilitas modern.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s" id="service2">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-utensils fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Makanan & Restoran</h5>
                            <p class="text-body mb-0">Restoran kami menyajikan hidangan lokal dan internasional, Kami menggunakan bahan-bahan segar untuk menciptakan hidangan, Kami memiliki kafe yang nyaman untuk bersantai.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" id="service">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-spa fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Kebugaran</h5>
                            <p class="text-body mb-0">Anda dapat menikmati berbagai perawatan tubuh dan pijat untuk relaksasi, Kebugaran kami dilengkapi dengan peralatan modern untuk memastikan Anda tetap aktif dan bugar</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s" id="service">
                        <a class="service-item rounded" href="">
                         <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-swimmer fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Kolam Renang</h5>
                            <p class="text-body mb-0">Hotel Kami memiliki kolam renang outdoor yang luas dengan pemandangan indah, tempat untuk bersantai, kolam renang anak-anak yang aman dan menyenangkan keluarga.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s" id="service">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-glass-cheers fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Acara & Pesta</h5>
                            <p class="text-body mb-0">Apakah Anda merencanakan sesuatu? Hotel Kami memiliki ruang serbaguna yang dapat disesuaikan untuk berbagai acara. Tim kami akan membantu Anda dari dekorasi hingga catering.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s" id="service">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-dumbbell fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">GYM & Yoga</h5>
                            <p class="text-body mb-0">Dengan fasilitas gym kami yang lengkap dan kelas yoga yang menenangkan. Kami menawarkan berbagai kelas Kebugaran, mulai dari yoga, pilates, hingga latihan kardio intensif.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Testimonial Start -->
        <!-- <div class="container-xxl testimonial my-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s" id="testimonial">
            <div class="container">
                <div class="owl-carousel testimonial-carousel py-5">
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd et erat magna eos</p>
                        <div class="d-flex align-items-center">
                            
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Client Name</h6>
                              
                            </div>
                        </div>
                        
                    </div>
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd et erat magna eos</p>
                        <div class="d-flex align-items-center">
                         
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Client Name</h6>
                              
                            </div>
                        </div>
                        
                    </div>
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd et erat magna eos</p>
                        <div class="d-flex align-items-center">
                           
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Client Name</h6>
                              
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Testimonial End -->


        <!-- Team Start -->
        <!-- <div class="container-xxl py-5" id="team">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Team</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Staffs</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="frontend/img/team-1.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="frontend/img/team-2.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="frontend/img/team-3.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="frontend/img/team-4.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Team End -->


        <!-- Newsletter Start -->
        <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s" id="testimonial">
        <div class="row justify-content-center">
            <div class="col-lg-10 border rounded p-1">
                <div class="border rounded text-center p-1">
                    <div class="bg-white rounded text-center p-5">
                        <h4 class="mb-4 text-uppercase">Kritik & Saran</h4>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <form onsubmit="event.preventDefault(); submitFeedback();">
                                <div class="mb-3">
                                    <input id="email" class="form-control w-100 py-3 ps-4 pe-5" type="email" placeholder="Masukkan email" required>
                                </div>
                                <div class="mb-3">
                                    <textarea id="feedback" class="form-control w-100 py-3 ps-4 pe-5" rows="4" placeholder="Masukkan Kritik & Saran" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary py-2 px-3 mt-2">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Newsletter Start -->
        

        <!-- Footer Start -->
        <div class="container-fluid h-100 bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s" id="contact">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                    <div class="map-container" style="width: 100%; height: 215px;">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15843.807263591734!2d109.65386627567152!3d-6.89636694270091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70242587ee7b4f%3A0x2f83c7b8913f6364!2sGg%20II%2C%20Sapuro%20Kebulen%2C%20Kec.%20Pekalongan%20Bar.%2C%20Kota%20Pekalongan%2C%20Jawa%20Tengah%2051112!5e0!3m2!1sid!2sid!4v1721278365215!5m2!1sid!2sid"
        width="100%" 
        height="100%" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy"></iframe>
        
</div>

                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Kontak</h6>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. irian sapuro, Kota Pekalongan</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 851-8388-0875</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>hotelkami@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="row gy-5 g-4">
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Company</h6>
                                <a class="btn btn-link" href="#index">Beranda</a>
                                <a class="btn btn-link" href="#about">Tentang</a>
                                <a class="btn btn-link" href="#service">Fasilitas</a>
                                <a class="btn btn-link" href="#room">Kamar</a>
                                <a class="btn btn-link" href="#booking">Booking</a>
                                <a class="btn btn-link" href="#testimonial">Testimoni</a>
                             
                            </div>
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Fasilitas</h6>
                                <a class="btn btn-link" href="#service">Kamar</a>
                                <a class="btn btn-link" href="#service">Makanan & Restoran</a>
                                <a class="btn btn-link" href="#service">Kebugaran</a>
                                <a class="btn btn-link" href="#service">Kolam Renang</a>
                                <a class="btn btn-link" href="#service">Acara & Pesta</a>
                                <a class="btn btn-link" href="#service">GYM & Yoga</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Hotel Kami</a> 
							
							<!-- /*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/ -->
							Designed By <a class="border-bottom" href="#">Hotel Kami</a>
                            <br>Distributed By: <a class="border-bottom" href="#" target="_blank">Hotel Kami</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <!--   -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
   $(document).ready(function() {
    var sections = $('div[id]');
    var navLinks = $('.nav-link');
    var scrolling = false;

    $(window).on('scroll', function() {
        if (!scrolling) {
            scrolling = true;
            setTimeout(function() {
                var currentPosition = $(this).scrollTop();

                sections.each(function() {
                    var top = $(this).offset().top - 70,
                        bottom = top + $(this).outerHeight();

                    if (currentPosition >= top && currentPosition <= bottom) {
                        navLinks.removeClass('active');
                        $('.nav-link[href="#' + $(this).attr('id') + '"]').addClass('active');
                    }
                });

                scrolling = false;
            }, 1); // Adjust the delay time as needed
        }
    });

    navLinks.on('click', function(e) {
        e.preventDefault();
        var target = $(this).attr('href');
        var offset = $(target).offset().top - 60;

        $('html, body').stop().animate({
            scrollTop: offset
        }, 1, 'easeInOutExpo'); // Adjust animation duration and easing function as needed
    });
});

</script>

<script>
function fillBookingForm(button) {
    // Ambil data kamar dari atribut data
    var noKamar = button.getAttribute('data-no-kamar');
    var tipeKamar = button.getAttribute('data-tipe-kamar');
    var hargaPerMalam = button.getAttribute('data-harga-per-malam');

    // Isi field form dengan data kamar
    document.querySelector('input[placeholder="Nomor Kamar"]').value = noKamar;
    document.querySelector('select[placeholder="Tipe Kamar"]').value = tipeKamar;
    document.querySelector('input[placeholder="Harga per Malam"]').value = hargaPerMalam;

    // Hitung total harga
    calculateTotalPrice();
}

function calculateTotalPrice() {
    // Ambil harga per malam
    var hargaPerMalamInput = document.querySelector('input[placeholder="Harga per Malam"]');
    var hargaPerMalam = parseFloat(hargaPerMalamInput.value);
    
    // Ambil tanggal check-in dan check-out
    var checkinDateInput = document.querySelector('input[placeholder="Tanggal Check-in"]');
    var checkoutDateInput = document.querySelector('input[placeholder="Tanggal Check-out"]');
    var checkinDate = new Date(checkinDateInput.value);
    var checkoutDate = new Date(checkoutDateInput.value);

    console.log('Harga per Malam:', hargaPerMalam);
    console.log('Check-in Date:', checkinDate);
    console.log('Check-out Date:', checkoutDate);
    
    // Pastikan tanggal valid
    if (isNaN(checkinDate.getTime()) || isNaN(checkoutDate.getTime())) {
        console.log('Tanggal tidak valid');
        return;
    }

    // Hitung jumlah hari
    var timeDiff = checkoutDate - checkinDate;
    var daysDiff = Math.ceil(timeDiff / (1000 * 3600 * 24));

    console.log('Days Difference:', daysDiff);
    
    // Pastikan jumlah hari valid
    if (daysDiff <= 0) {
        console.log('Perbedaan hari tidak valid');
        return;
    }

    // Hitung total harga
    var totalHarga = hargaPerMalam * daysDiff;
    console.log('Total Harga:', totalHarga);

    // Isi field total harga
    document.querySelector('input[placeholder="Total Harga"]').value = totalHarga;
}

// Event listener untuk tanggal check-in dan check-out agar menghitung ulang total harga
document.querySelector('input[placeholder="Tanggal Check-in"]').addEventListener('change', calculateTotalPrice);
document.querySelector('input[placeholder="Tanggal Check-out"]').addEventListener('change', calculateTotalPrice);
</script>

<script>
// Fungsi untuk mereset form
function resetForm() {
    var inputs = document.querySelectorAll('.form-control');
    inputs.forEach(input => {
        if (input.type !== 'submit') {
            input.value = '';
        }
    });
}

// Event listener untuk dropdown status
document.getElementById('statusSelect').addEventListener('change', function() {
    if (this.value === 'Dibatalkan') {
        resetForm();
    }
});
</script>

<script>
function fillBookingForm(element) {
    var statusKamar = element.getAttribute('data-status-kamar');
    
    if (statusKamar !== 'Tersedia') {
        alert('Kamar tidak tersedia!');
        return;
    }
    
    document.getElementById('bookingNoKamar').value = element.getAttribute('data-no-kamar');
    document.getElementById('bookingTipeKamar').value = element.getAttribute('data-tipe-kamar');
    document.getElementById('bookingHargaPerMalam').value = element.getAttribute('data-harga-per-malam');
}

document.getElementById('submitBooking').addEventListener('click', function(event) {
    var statusKamar = document.getElementById('statusKamar' + document.getElementById('bookingNoKamar').value).innerText;
    
    if (statusKamar.trim() !== 'Tersedia') {
        event.preventDefault();
        alert('Kamar tidak tersedia!');
    }
});
</script>
<script>
        function submitBooking() {
            const nik = document.getElementById('nik').value;
            const nama = document.getElementById('nama').value;
            const alamat = document.getElementById('alamat').value;
            const telepon = document.getElementById('telepon').value;
            const noKamar = document.getElementById('bookingNoKamar').value;
            const tipeKamar = document.getElementById('bookingTipeKamar').value;
            const checkIn = document.getElementById('checkIn').value;
            const checkOut = document.getElementById('checkOut').value;
            const tgl_transaksi = document.getElementById('tanggal_transaksi').value;
            const hargaPerMalam = document.getElementById('bookingHargaPerMalam').value;
            const totalHarga = document.getElementById('totalHarga').value;
            const status = document.getElementById('statusSelect').value;

            const message = `NIK: ${nik}%0aNama: ${nama}%0aAlamat: ${alamat}%0aNomor Telepon: ${telepon}%0aNomor Kamar: ${noKamar}%0aTipe Kamar: ${tipeKamar}%0aTanggal Check-in: ${checkIn}%0aTanggal Check-out: ${checkOut}%0aTanggal Transaksi: ${tgl_transaksi}%0aHarga per Malam: ${hargaPerMalam}%0aTotal Harga: ${totalHarga}%0aStatus: ${status}`;

            const url = `https://wa.me/6285732082618?text=${message}`;

            window.open(url, '_blank');
        }
    </script>
    <script>
        function submitFeedback() {
            const email = document.getElementById('email').value;
            const feedback = document.getElementById('feedback').value;
            
            const message = `Email: ${email}%0aKritik dan Saran: ${feedback}`;

            const url = `https://wa.me/6285732082618?text=${message}`;

            window.open(url, '_blank');
        }
    </script>