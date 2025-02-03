@extends('landing-page.layouts.app')

@section('content')
<!-- BEGIN: Hero Section -->
<section id="hero" class="hero section dark-background">
    <div id="hero-carousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">
        
        <!-- slide 1 -->
        <div class="carousel-item active">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span id="nama_perusahaan"></span></h2>
                <p class="animate__animated animate__fadeInUp" id="profile_singkat"></p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
        </div>

        <!-- slide 2 -->
        <div class="carousel-item">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Visi <span id="visi_nama_perusahaan"></span></h2>
                <p class="animate__animated animate__fadeInUp" id="visi"></p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
        </div>

        <!-- slide 2 -->
        <div class="carousel-item">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Misi <span id="misi_nama_perusahaan"></span></h2>
                <p class="animate__animated animate__fadeInUp" id="misi"></p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
        </div>

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
            <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
            <use xlink:href="#wave-path" x="50" y="3"></use>
        </g>
        <g class="wave2">
            <use xlink:href="#wave-path" x="50" y="0"></use>
        </g>
        <g class="wave3">
            <use xlink:href="#wave-path" x="50" y="9"></use>
        </g>
    </svg>
    
</section>
<!-- END: Hero Section -->

<!-- BEGIN: About Section -->
<section id="about-company" class="about section">
    <!-- BEGIN: Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>who we are</p>
    </div>
    <!-- END: Section Title -->

    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                <p id="profile_perusahaan">
                </p>
                <ul id="list">
                    <li><i class="bi bi-check2-circle"></i><span>Graduation</span></li>
                    <li><i class="bi bi-check2-circle"></i><span>Prewedding</span></li>
                    <li><i class="bi bi-check2-circle"></i><span>Engagement</span></li>
                    <li><i class="bi bi-check2-circle"></i><span>Event</span></li>
                    <li><i class="bi bi-check2-circle"></i><span>Product</span></li>
                </ul>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <p id="deskripsi"></p>
                <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>
    
</section>
<!-- END: About Section -->

<!-- BEGIN: Features Section -->
<section id="features" class="features section">
    <div class="container">
        <!-- BEGIN: Tab Nav -->
        <ul class="nav nav-tabs row d-flex" data-aos="fade-up" data-aos-delay="100">
            <li class="nav-item col-3">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                    <i class="bi bi-binoculars"></i>
                    <h4 class="d-none d-lg-block">Graduation</h4>
                </a>
            </li>
            <li class="nav-item col-3">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                    <i class="bi bi-box-seam"></i>
                    <h4 class="d-none d-lg-block">Product</h4>
                </a>
            </li>
            <li class="nav-item col-3">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                    <i class="bi bi-brightness-high"></i>
                    <h4 class="d-none d-lg-block">Engagement</h4>
                </a>
            </li>
            <li class="nav-item col-3">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
                    <i class="bi bi-command"></i>
                    <h4 class="d-none d-lg-block">Prewedding</h4>
                </a>
            </li>
        </ul>
        <!-- END: Tab Nav -->
        
        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
            <!-- BEGIN: Content Graduation Photoshot -->
            <div class="tab-pane fade active show" id="features-tab-1">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                        <h3>Graduation Photoshot</h3>
                        <p class="fst-italic">
                            Wisuda merupakan momen yang di tunggu oleh semua mahasiswa ketika melaksanakan atau mengambil jenjang perkuliahan.
                            Banyak momen yang tidak ingin terlewatkan ketika mahasiswa melakukan prosesi wisuda. Oleh karena itu, kami menyediakan
                            jasa foto wisuda yang akan membantu anda dalam pengambilan momen wisuda anda bersama keluarga. Apasih yg di dapatkan dari jasa foto wisuda ini ?
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i><span>Limited Editing</span></li>
                            <li><i class="bi bi-check2-all"></i><span>All Soft File</span></li>
                            <li><i class="bi bi-check2-all"></i><span>Direct Pose</span></li>
                        </ul>
                        <p>
                            Tunggu apa lagi ? segera booking layanan kami untuk momen wisuda anda. Dapatkan promo yang menarik. Kami senantiasa bekerja secara profesional dan menjunjung tinggi tingkat kepuasan dari pelayanan kami. #makeyourbestmomentwithus
                        </p>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="assets/img/wisuda1.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <!-- END: Content Graduation Photoshot -->

            <!-- BEGIN: Content Product Photoshot -->
            <div class="tab-pane fade" id="features-tab-2">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                        <h3>Product Photoshot</h3>
                        <p class="fst-italic">
                            Jika rebranding menjadi prioritas bisnis anda, kami hadir untuk memberikan dukungan visual yang kuat. Dengan sentuhan profesional, foto produk kami akan memperkuat
                            identitas baru yang ingin anda hadirkan kepada pelanggan
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i><span>Limited Editing</span></li>
                            <li><i class="bi bi-check2-all"></i><span>All Soft File</span></li>
                            <li><i class="bi bi-check2-all"></i><span>Direct Pose</span></li>
                            <li><i class="bi bi-check2-all"></i><span>Book Editing</span></li>
                        </ul>
                        <p>
                            Tunggu apa lagi ? segera booking layanan kami untuk foto produk anda. Dapatkan promo yang menarik. Kami senantiasa bekerja secara profesional dan menjunjung tinggi tingkat kepuasan dari pelayanan kami. #makeyourbestmomentwithus
                        </p>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="assets/img/produk1.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <!-- END: Content Product Photoshot -->

            <!-- BEGIN: Content Engagement Photoshot -->
            <div class="tab-pane fade" id="features-tab-3">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                        <h3>Engagement Photoshot</h3>
                        <p>
                            Abadikan momen bahagia Anda dengan layanan foto lamaran yang spesial dari kami. Kami hadir untuk memastikan setiap senyuman, tatapan, dan momen manis Anda terekam dalam foto-foto yang penuh makna
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i><span>Limited Editing</span></li>
                            <li><i class="bi bi-check2-all"></i><span>All Soft File</span></li>
                            <li><i class="bi bi-check2-all"></i><span>Direct Pose</span></li>
                        </ul>
                        <p class="fst-italic">
                            Tunggu apa lagi ? segera booking layanan kami untuk foto produk anda. Dapatkan promo yang menarik. Kami senantiasa bekerja secara profesional dan menjunjung tinggi tingkat kepuasan dari pelayanan kami. #makeyourbestmomentwithus
                        </p>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="assets/img/lamaran1.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <!-- END: Content Engagement Photoshot -->

            <!-- BEGIN: Content Prewedding Photoshot -->
            <div class="tab-pane fade" id="features-tab-4">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                        <h3>Prewedding Photoshot</h3>
                        <p>
                            Abadikan momen sebelum hari besar Anda dengan layanan foto prewedding yang romantis dan penuh makna. Kami akan membantu menciptakan konsep yang sesuai dengan kepribadian dan cerita cinta Anda, memastikan foto-foto yang akan dikenang sepanjang hidup
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i><span>Limited Editing</span></li>
                            <li><i class="bi bi-check2-all"></i><span>All Soft File</span></li>
                            <li><i class="bi bi-check2-all"></i><span>Direct Pose</span></li>
                        </ul>
                        <p class="fst-italic">
                            Tunggu apa lagi ? segera booking layanan kami untuk foto produk anda. Dapatkan promo yang menarik. Kami senantiasa bekerja secara profesional dan menjunjung tinggi tingkat kepuasan dari pelayanan kami. #makeyourbestmomentwithus
                        </p>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="assets/img/prewed1.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <!-- END: Content Prewedding Photoshot -->


        </div>
    </div>
</section>
<!-- END: Features Section -->

<!-- BEGIN: Call to Action Section -->
<section id="call-to-action" class="call-to-action section dark-background">
    <div class="container">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-xl-9 text-center text-xl-start">
                <h3>Fotografi dengan Makna!</h3>
                <p>"Jadikan setiap momen dalam hidup Anda lebih dari sekadar kenangan—biarkan foto-foto yang penuh makna menjadi cerita abadi. Kami siap membantu Anda menciptakan keindahan di setiap jepretan. Percayakan momen istimewa Anda kepada kami!"</p>
            </div>
            <div class="col-xl-3 cta-btn-container text-center">
                <a href="#" class="cta-btn align-middle">Hubungi Kami!</a>
            </div>
        </div>
    </div>
</section>
<!-- END: Call to Action Section -->

<!-- BEGIN: Service Section -->
<section id="benefits" class="services section">

    <!-- BEGIN: Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Benefits</h2>
        <p>What we do offer</p>
    </div>
    <!-- END: Section Title -->

    <div class="container">
        <div class="row gy-4">

            <!-- BEGIN: Service 1 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-cash-stack" style="color: #0dcaf0"></i>
                    </div>
                    <a href="" class="stretched-link">
                        <h3>Affordable Prices</h3>
                    </a>
                    <p>Ambara Journey memberikan harga yang terjangkau untuk memenuhi kebutuhan konten / rebranding / wisuda kalian</p>
                </div>
            </div>
            <!-- END: Service 1 -->

            <!-- BEGIN: Service 2 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-calendar4-week" style="color: #fd7e14"></i>
                    </div>
                    <a href="" class="stretched-link">
                        <h3>Flexible Dates</h3>
                    </a>
                    <p>Ambara Journey siap untuk memberikan jasa layanan kami di tanggal mana pun yang di inginkan oleh klien kami</p>
                </div>
            </div>
            <!-- END: Service 2 -->

            <!-- BEGIN: Service 3 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-chat-text" style="color: #fd7e14"></i>
                    </div>
                    <a href="" class="stretched-link">
                        <h3>Flexible Chat</h3>
                    </a>
                    <p>Ambara Journey menyediakan layanan yang bisa di booking melalui whatsapp atau bisa DM melalui instagram kami @ambarajourney.sby</p>
                </div>
            </div>
            <!-- END: Service 3 -->

            <!-- BEGIN: Service 4 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-credit-card-2-front" style="color: #df1529"></i>
                    </div>
                    <a href="" class="stretched-link">
                        <h3>Flexible Payment</h3>
                    </a>
                    <p>Pembayaran untuk jasa layanan kami sangat fleksibel. Dapat di lakukan secara transfer atau cash dan pelunasan dapat di lakukan ketika project telah selesai di edit</p>
                </div>
            </div>
            <!-- END: Service 4 -->

            <!-- BEGIN: Service 5 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-globe" style="color: #6610f2"></i>
                    </div>
                    <a href="" class="stretched-link">
                        <h3>Criticism and Suggestions</h3>
                    </a>
                    <p>Ambara Journey tentunya menerima segala macam saran dan kritik selama pelayanan kami berlangsung sebagai bahan evaluasi kami</p>
                </div>
            </div>
            <!-- END: Service 5 -->

            <!-- BEGIN: Service 6 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-clock" style="color: #6610f2"></i>
                    </div>
                    <a href="" class="stretched-link">
                        <h3>Time Management</h3>
                    </a>
                    <p>Tepat waktu adalah prioritas kami, mulai dari pemotretan hingga editing. Kami pastikan hasil foto berkualitas siap sesuai jadwal. Percayakan momen Anda pada layanan profesional kami!</p>
                </div>
            </div>
            <!-- END: Service 6 -->
            
        </div>
    </div>

</section>
<!-- END: Service Section -->

<!-- BEGIN: portfolio Section -->
<section id="portfolio" class="portfolio section">
    <!-- BEGIN: Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Potofolio</h2>
        <p>What we've done</p>
    </div>
    <!-- END: Section Title -->

    <div class="container">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
            <!-- BEGIN: portfolio Filters -->
            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-graduation">Graduation</li>
                <li data-filter=".filter-prewedding">Prewedding</li>
                <li data-filter=".filter-engagement">Engagement</li>
                <li data-filter=".filter-product">Product</li>
                <li data-filter=".filter-event">Event</li>
            </ul>
            <!-- END: portfolio Filters -->

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                <!-- BEGIN: Portfolio Graduation UT -->
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-graduation">
                    <img src="assets/img/portfolio-wisuda/universitas-terbuka/name-zamliha/wisuda-zamliha-9.jpg" alt="" class="img-fluid">
                    <div class="portfolio-info">
                        <h4>Graduation Photoshot</h4>
                        <p>Universitas Terbuka Surabaya</p>
                        <a href="assets/img/portfolio-wisuda/universitas-terbuka/name-zamliha/wisuda-zamliha-9.jpg" title="Terbuka University Graduation" data-gallery="portfolio-gallery-graduation" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div>
                <!-- END: Portfolio Graduation UT 1 -->

                <!-- BEGIN: Portfolio Product 1 -->
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                    <img src="assets/img/portfolio-product/product-pentol/product-pentol-1.jpg" alt="" class="img-fluid">
                    <div class="portfolio-info">
                        <h4>Product Photoshot</h4>
                        <p>Pentol Product by Bara</p>
                        <a href="assets/img/portfolio-product/product-pentol/product-pentol-1.jpg" title="Pentol Product by Bara" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div>
                <!-- END: Portfolio Product 1 -->

                <!-- BEGIN: Portfolio Prewedding 1 -->
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-prewedding">
                    <img src="assets/img/portfolio-prewedding/prewedding-mbak-lisa/prewed-lisa-1.jpg" alt="" class="img-fluid">
                    <div class="portfolio-info">
                        <h4>Prewedding Photoshot</h4>
                        <p>Prewedding Kak Lisa</p>
                        <a href="assets/img/portfolio-prewedding/prewedding-mbak-lisa/prewed-lisa-1.jpg" title="Prewedding by Lisa" data-gallery="portfolio-gallery-prewedding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div>
                <!-- END: Portfolio Prewedding 1 -->

                <!-- BEGIN: Portfolio Engagement 1 -->
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-engagement">
                    <img src="assets/img/portfolio-engagement/engagement-1.jpg" alt="" class="img-fluid">
                    <div class="portfolio-info">
                        <h4>Engagement Photoshot</h4>
                        <p>Engagement Mas Rahmat & Mbak Tiara</p>
                        <a href="assets/img/portfolio-engagement/engagement-1.jpg" title="Engagement by Mas Rahmat & Mbak Tiara" data-gallery="portfolio-gallery-engagement" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div>
                <!-- END: Portfolio Engagement 1 -->

            </div>
        </div>
    </div>
</section>
<!-- END: portfolio Section -->

<!-- BEGIN: Testimonial Section -->
<section id="testimonials" class="testimonials section">
    <!-- BEGIN: Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>What ther are saying about us</p>
    </div>
    <!-- END: Section Title -->

    <!-- BEGIN: Testimonial Content -->
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper init-swiper">
            <script type="appliaction/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                        "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                    },
                    "breakpoints": {
                        "320": {
                            "slidesPerView": 1,
                            "spaceBetween": 40
                        },
                        "1200": {
                            "slidesPerView": 3,
                            "spaceBetween": 10
                        }
                    }
                }
            </script>
            <div class="swiper-wrapper">

                <!-- BEGIN: Testimonial Item 1 -->
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-1.jpg" alt="" class="testimonial-img">
                        <h3>Dimas Lamena</h3>
                        <h4>Mahasiswa &amp; Graduation Photoshot</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Fotonya bagus sekali, pelayanan juga oke, pokoknya manteb lah!</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div>
                <!-- END: Testimonial Item 1 --> 

                <!-- BEGIN: Testimonial Item 2 -->
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-2.jpg" alt="" class="testimonial-img">
                        <h3>Baruna Eka Septi</h3>
                        <h4>Mahasiswa &amp; Graduation Photoshot</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>KEREEENNNN!</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div>
                <!-- END: Testimonial Item 2 --> 

                <!-- BEGIN: Testimonial Item 3 -->
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-3.jpg" alt="" class="testimonial-img">
                        <h3>Sukuna</h3>
                        <h4>Mahasiswa &amp; Graduation Photoshot</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>KEREEENNNN!</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div>
                <!-- END: Testimonial Item 3 --> 

                <!-- BEGIN: Testimonial Item 4 -->
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-4.jpg" alt="" class="testimonial-img">
                        <h3>Sukuna</h3>
                        <h4>Mahasiswa &amp; Graduation Photoshot</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>KEREEENNNN!</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div>
                <!-- END: Testimonial Item 4 --> 
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- END: Testimonial Content -->
</section>
<!-- END: Testimonial Section -->

<!-- BEGIN: Pricing Section -->
<section id="pricing" class="pricing section">

    <!-- BEGIN: Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Pricing</h2>
        <p>Affordable pricing, premium quality</p>
    </div>
    <!-- END: Section Title -->

    <div class="container">
        <div class="row gy-3">

            <!-- BEGIN: Pricing Item Graduation Normal Price -->
            <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="pricing-item">
                    <h3>Graduation Photoshot</h3>
                    <h4><sup>Rp.</sup>350.000<span> / Hour</span></h4>
                    <ul>
                        <li>All soft file share on drive</li>
                        <li>Limited Best Edited</li>
                        <li>Direct Pose</li>
                        <li>Free Transport in All Cities</li>
                    </ul>
                    <div class="btn-wrap">
                        <a href="#" class="btn-buy">Booking Now</a>
                    </div>
                </div>
            </div>
            <!-- END: Pricing Item Graduation Normal Price -->

            <!-- BEGIN: Pricing Item Product -->
            <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="pricing-item featured">
                    <h3>Product Photoshot</h3>
                    <h4><sup>Rp.</sup>20.000<span> / Item</span></h4>
                    <ul>
                        <li>All soft file share on drive</li>
                        <li>Best Edited</li>
                        <li>Direct Pose</li>
                        <li>Without Time Limit</li>
                    </ul>
                    <div class="btn-wrap">
                        <a href="#" class="btn-buy">Booking Now</a>
                    </div>
                </div>
            </div>
            <!-- END: Pricing Item Product -->

            <!-- BEGIN: Pricing Item Engagement -->
            <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="pricing-item">
                    <h3>Engagement Photoshot</h3>
                    <h4><sup>Rp.</sup>800.000<span> / 4 Hour</span></h4>
                    <ul>
                        <li>All soft file share on drive</li>
                        <li>Limited Best Edited</li>
                        <li>Direct Pose</li>
                        <li>Free Transport in All Cities</li>
                    </ul>
                    <div class="btn-wrap">
                        <a href="#" class="btn-buy">Booking Now</a>
                    </div>
                </div>
            </div>
            <!-- END: Pricing Item Engagement -->

            <!-- BEGIN: Pricing Item Graduation Promo Price -->
            <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="pricing-item">
                    <span class="advanced">Promo</span>
                    <h3>Graduation Photoshot</h3>
                    <h4><sup>Rp.</sup>250.000<span> / Hour</span></h4>
                    <ul>
                        <li>All soft file share on drive</li>
                        <li>Limited Best Edited</li>
                        <li>Direct Pose</li>
                        <li>Free Transport in All Cities</li>
                    </ul>
                    <div class="btn-wrap">
                        <a href="#" class="btn-buy">Booking Now</a>
                    </div>
                </div>
            </div>
            <!-- END: Pricing Item Graduation Promo Price -->
            
        </div>
    </div>
    
</section>
<!-- END: Pricing Section -->

<!-- BEGIN: Faq Section -->
<section id="faq" class="faq section">
    
    <!-- BEGIN: Section Titel -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions by Customers</h2>
        <p>Some Frequently Asked Questions</p>
    </div>
    <!-- END: Section Titel -->

    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-12">
                <div class="custom-accordion" id="accordion-faq">

                    <!-- BEGIN: Accordion-Item -->
                    <div class="accordion-item">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-1">
                                Apakah saya bisa meminta revisi hasil editan ?
                            </button>
                        </h2>
                        <div id="collapse-faq-1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-faq">
                            <div class="accordion-body">
                                Tentu saja boleh. Karena tidak semua customer kami bisa sesuai dengan hasil editan dari kami. Kami memberikan hasil editan dengan standart-edit. Jika customer kurang menyukai hasil editan kami, customer boleh memberikan revisi editan yang diinginkan.
                            </div>
                        </div>
                    </div>
                    <!-- END: Accordion-Item -->

                    <!-- BEGIN: Accordion-Item -->
                    <div class="accordion-item">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-2">
                                Bagaimana untuk pembayarannya ?
                            </button>
                        </h2>
                        <div id="collapse-faq-2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion-faq">
                            <div class="accordion-body">
                                Tenang saja, untuk pembayarannya bisa dilakukan DP terlebih dahulu atau sesudah editan di berikan ke customer. Pembayaran dapat berupa cash / transfer looo.
                            </div>
                        </div>
                    </div>
                    <!-- END: Accordion-Item -->

                    <!-- BEGIN: Accordion-Item -->
                    <div class="accordion-item">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-3">
                                Nanti waktu foto, apakah di arahkan juga ?
                            </button>
                        </h2>
                        <div id="collapse-faq-3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion-faq">
                            <div class="accordion-body">
                                Tentu donggg. Setiap foto apapun itu, kami akan mengarahkan customer kami sesuai dengan moodboard yang telah kami buat.
                            </div>
                        </div>
                    </div>
                    <!-- END: Accordion-Item -->

                </div>
            </div>
        </div>
    </div>
    
</section>
<!-- END: Faq Section -->

<!-- BEGIN: Team Section -->
<section id="team" class="team section">

    <!-- BEGIN: Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Passion Behind Every Shot</p>
    </div>
    <!-- END: Section Title -->

    <div class="container">
        <div class="row gy-4">

            <!-- BEGIN: Team Member -->
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="team-member">
                    <div class="member-img">
                        <img src="assets/img/team/team-abi.jpg" alt="" class="img-fluid">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Abi Rafdi</h4>
                        <span>Photographer</span>
                    </div>
                </div>
            </div>
            <!-- END: Team Member -->

            <!-- BEGIN: Team Member -->
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="team-member">
                    <div class="member-img">
                        <img src="assets/img/team/team-endar.jpg" alt="" class="img-fluid">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Endar Dharma</h4>
                        <span>Photographer / Videographer</span>
                    </div>
                </div>
            </div>
            <!-- END: Team Member -->

            <!-- BEGIN: Team Member -->
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="team-member">
                    <div class="member-img">
                        <img src="assets/img/team/team-apet.jpg" alt="" class="img-fluid">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Hafidz Sirojul</h4>
                        <span>Photographer</span>
                    </div>
                </div>
            </div>
            <!-- END: Team Member -->

            <!-- BEGIN: Team Member -->
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="team-member">
                    <div class="member-img">
                        <img src="assets/img/team/team-riko.jpg" alt="" class="img-fluid">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Eriko Andrianto</h4>
                        <span>Editor</span>
                    </div>
                </div>
            </div>
            <!-- END: Team Member -->
            
        </div>
    </div>
    
</section>
<!-- END: Team Section -->

<!-- BEGIN: Contact Section -->
<section id="contact" class="contact section">
    
    <!-- BEGIN: Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Contact Us</p>
    </div>
    <!-- END: Section Title -->

    <div class="container" data-aos="fade" data-aos-delay="100">
        <div class="row gy-4">

            <div class="col-lg-4">
                <!-- BEGIN: Info Item -->
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                    <div>
                        <h3>Address</h3>
                        <p>Perumahan Griya Kencana Asri, Surabaya Timur</p>
                    </div>
                </div>
                <!-- END: Info Item -->

                <!-- BEGIN: Info Item -->
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-telephone flex-shrink-0"></i>
                    <div>
                        <h3>Call Us</h3>
                        <p>+62 812-3422-9801</p>
                    </div>
                </div>
                <!-- END: Info Item -->

                <!-- BEGIN: Info Item -->
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-telephone flex-shrink-0"></i>
                    <div>
                        <h3>Email Us</h3>
                        <p>ambarajourney@gmail.com</p>
                    </div>
                </div>
                <!-- END: Info Item -->
            </div>

            <!-- BEGIN: Contact Form -->
            <div class="col-lg-8">
                <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <input type="text" name="nama" class="form-control" id="form-control" placeholder="Masukkan Nama Anda" required>    
                        </div>

                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" placeholder="Masukkan Email Anda" required>
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="pesan"  rows="6" placeholder="Masukkan Pesan Anda" required></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Pesan anda telah dikirim. Terimakasih atas Pesan Anda!</div>

                            <button type="submit">Kirim</button>
                        </div>
                        
                    </div>
                </form>
            </div>
            <!-- END: Contact Form -->
            
        </div>
    </div>
        
</section>
<!-- END: Contact Section -->
@endsection

@push('get-info-perusahaan')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {

        // get cookie
        function getCookie(name) {
            var cookieName = name + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var cookieArray = decodedCookie.split(';');

            for (var i = 0; i < cookieArray.length; i++)
            {
                var cookie = cookieArray[i];
                while (cookie.charAt(0) ===  ' ')
                {
                    cookie = cookie.substring(1);
                }

                if (cookie.indexOf(cookieName) === 0)
                {
                    return cookie.substring(cookieName.length, cookie.length);
                }
            }
        }

        var token = getCookie('token');
        console.log('Token Get Info: ', token);

        jQuery.ajax({
            url: 'http://127.0.0.1:8000/api/informasi-perusahaan/get-selected-data',
            method: 'GET',
            headers: {
                'Authorization': 'Bearer ' + token
            },
            success: function(response) {
                if (response) {
                    $('#nama_perusahaan').text(response.nama_perusahaan);
                    $('#header_nama_perusahaan').text(response.nama_perusahaan);
                    $('#visi_nama_perusahaan').text(response.nama_perusahaan);
                    $('#misi_nama_perusahaan').text(response.nama_perusahaan);
                    $('#profile_singkat').text(response.profile_singkat);
                    $('#visi').text(response.visi);
                    $('#misi').text(response.misi);
                    $('#profile_perusahaan').text(response.profile_perusahaan);
                    $('#deskripsi').text(response.deskripsi);
                } else {
                    console.log('Data tidak ada');
                }
            },
            error: function(xhr, status, error) {
                console.error('Error: ', error);
            }
        });
    
    });
    
</script>
@endpush