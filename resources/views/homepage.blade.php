<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>ALSAVA - PT Alsava Teknologi Indonesia</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('images/logo-alsava.ico') }}">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">

        <!--Material Icon -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/materialdesignicons.min.css') }}" />

        <!-- Custom  sCss -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />

    </head>

    <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="78">

        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky-dark" id="sticky">
            <div class="container-fluid">
                <!-- LOGO -->
                <a class="logo text-uppercase" href="#home">
                    <img src="images/alsava-2-light.png" alt="" class="logo-light" height="21" />
                    <img src="images/alsava-2-dark.png" alt="" class="logo-dark" height="21" />
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mx-auto navbar-center" id="mySidenav">
                        <li class="nav-item">
                            <a href="#home" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about-us" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="#visi-misi" class="nav-link">Visi Misi</a>
                        </li>
                        <li class="nav-item">
                            <a href="#layanan" class="nav-link">Layanan</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link">Contact</a>
                        </li>
                    </ul>
                    <!-- <button class="btn btn-info navbar-btn">Try for Free</button> -->
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- home start -->
        <section class="bg-home bg-gradient" id="home">
            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="home-title mo-mb-20">
                                    <h1 class="mb-4 text-white">Alsava Teknologi Indonesia, One Stop IT Solution</h1>
                                    <!-- <p class="text-white-50 home-desc mb-5"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </p> -->
                                </div>
                            </div>
                            <div class="col-xl-4 offset-xl-2 col-lg-5 offset-lg-1 col-md-7">
                                <div class="home-img position-relative">
                                    <!-- <img src="images/home-img.png" alt="" class="home-first-img">
                                    <img src="images/home-img.png" alt="" class="home-second-img mx-auto d-block">
                                    <img src="images/home-img.png" alt="" class="home-third-img"> -->
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container-fluid -->
                </div>
            </div>
        </section>
        <!-- home end -->

        <!-- clients start -->
        <section>
            <div class="container-fluid">
                <div class="clients p-4 bg-white">
                    <div class="row">
                        <div class="col-md">
                            <div class="client-images">
                                <img src="images/icons/remote-desktop-2.png" alt="logo-img" class="mx-auto img-fluid d-block">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="client-images">
                                <img src="images/icons/react-2.png" alt="logo-img" class="mx-auto img-fluid d-block">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="client-images">
                                <img src="images/icons/xml.png" alt="logo-img" class="mx-auto img-fluid d-block">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="client-images">
                                <img src="images/icons/cloud-key-outline.png" alt="logo-img" class="mx-auto img-fluid d-block">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="client-images">
                                <img src="images/icons/chart-box-multiple.png" alt="logo-img" class="mx-auto img-fluid d-block">
                            </div>
                        </div>
                    </div> <!-- end row -->
                </div>
            </div> <!-- end container-fluid -->
        </section>
        <!-- clients end -->

        <!-- about us start -->
        <section class="section" id="about-us">
            <div class="container-fluid">

                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-4 pb-1">
                            <h3>About Us</h3>
                            <!-- <p class="text-muted"> Example. </p> -->
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="feature-img">
                            <img src="images/features-img/img-2.png" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5 features-content">
                            <div class="features-icon mb-4">
                                <i class="mdi mdi-domain h4 text-white text-center"></i>
                            </div>
                            <h3 class="mb-3">PT. Alsava Teknologi Indonesia</h3>
                            <p class="text-muted mb-4">
                                Merupakan perusahaan yang bergerak dalam bidang <strong>Teknologi Informasi</strong>, kami membantu
                                menyelesaikan permasalahan klien hingga benar benar tuntas sehingga dapat disebut 
                                <strong>"One Stop IT Solution"</strong>. Alsava menawarkan berbagai layanan inovatif untuk memenuhi
                                 kebutuhan klien, dengan fokus utama pada: <strong>Pengembangan Web, Aplikasi Mobile, Keamanan Siber 
                                Internet of Things (IoT) dan Desain UI/UX.</strong>
                            </p>
                            <!-- <a href="#" class="btn btn-primary btn-sm">Learn More <i class="mdi mdi-arrow-right"></i></a> -->
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row align-items-center mt-5">
                    <div class="col-lg-6">
                        <div class="p-5 features-content">
                            <div class="features-icon mb-4">
                                <i class="mdi mdi-cellphone-link h4 text-white text-center"></i>
                            </div>
                            <h3 class="mb-3">Alsava Teknologi Indonesia</h3>
                            <p class="text-muted mb-4">
                            Hadir sebagai mitra anda yang handal dalam memberikan solusi teknologi yang responsif dan 
                            terkini. Selain itu, perusahaan kami juga menonjolkan layanan seperti; Pemeliharaan sistem, 
                            Konsultasi IT, dan Solusi kustom pada setiap permasalahan anda serta memastikan kelancaran 
                            operasional dengan memberikan panduan strategis untuk pertumbuhan bisnis. Dengan visi menjadi 
                            perusahaan teknologi terdepan yang memberikan solusi berkelanjutan, Alsava Teknologi Indonesia 
                            <strong>memprioritaskan kualitas tinggi dan kepuasan klien,</strong> menjadikan kami bisa 
                            menjadi pilihan utama untuk menjadi mitra anda. 
                            </p>
                            <!-- <a href="#" class="btn btn-primary btn-sm">Learn More <i class="mdi mdi-arrow-right"></i></a> -->
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="feature-img">
                            <img src="images/features-img/img-1.png" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </section>
        <!-- about us end -->

        <!-- visi misi  start -->
        <section class="section" id="visi-misi">
            <div class="container-fluid">

                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-5">
                            <h3>Visi Misi</h3>
                            <!-- <p class="text-muted">At solmen va esser necessi far uniform grammatica.</p> -->
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-5 offset-lg-1">
                        <!-- Question/Answer -->
                        <div>
                            <div class="faq-question-q-box"><span class="mdi mdi-auto-fix"></span></div>
                            <h4 class="faq-question">Visi</h4>
                            <p class="faq-answer mb-4 pb-1 text-muted">
                                Menjadi perusahaan teknologi terdepan yang memberikan solusi inovatif dan berkelanjutan.
                            </p>
                        </div>

                    </div>
                    <!--/col-lg-5 -->

                    <div class="col-lg-5">
                        <!-- Question/Answer -->
                        <div>
                            <div class="faq-question-q-box"><span class="mdi mdi-circle-slice-8"></span></div>
                            <h4 class="faq-question">Misi</h4>
                            <p class="faq-answer mb-4 pb-1 text-muted">
                                Memberikan layanan berkualitas tinggi yang memenuhi harapan klien dan berkontribusi pada kemajuan teknologi informasi secara global. Melalui layanan-layanan ini, PT. Alsava Teknologi Indonesia berkomitmen untuk bekerja sama dengan klien dengan menghadirkan
                                solusi teknologi yang membawa nilai tambah dan kesuksesan bagi bisnis anda.
                            </p>
                        </div>

                    </div>
                    <!--/col-lg-5-->
                </div>
                <!-- end row -->

            </div> <!-- end container-fluid -->
        </section>
        <!-- visi misi end -->

        <!-- layanan start -->
        <section class="section-sm" id="layanan">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-4 pb-1">
                            <h3 class="mb-3">Layanan</h3>
                            <!-- <p class="text-muted">The clean and well commented code allows easy customization of the theme.It's designed for describing your app, agency or business.</p> -->
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="features-box">
                            <div class="features-img mb-4">
                                <img src="images/icons/layers.png" alt="">
                            </div>
                            <h4 class="mb-2">Desain UI/UX</h4>
                            <!-- <p class="text-muted">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p> -->
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="features-box">
                            <div class="features-img mb-4">
                                <img src="images/icons/tablet-cellphone.png" alt="">
                            </div>
                            <h4 class="mb-2">Pengembangan Aplikasi Mobile</h4>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="features-box">
                            <div class="features-img mb-4">
                                <img src="images/icons/browserscript.png" alt="">
                            </div>
                            <h4 class="mb-2">Pengembangan Web</h4>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-4 col-md-6">
                        <div class="features-box">
                            <div class="features-img mb-4">
                                <img src="images/icons/shield-half-full.png" alt="">
                            </div>
                            <h4 class="mb-3">Keamanan Siber</h4>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="features-box">
                            <div class="features-img mb-4">
                                <img src="images/icons/cloudspread.png" alt="">
                            </div>
                            <h4 class="mb-3">Internet of Things</h4>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="features-box">
                            <div class="features-img mb-4">
                                <img src="images/icons/paperdesk.png" alt="">
                            </div>
                            <h4 class="mb-3">Layanan Pemeliharaan</h4>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="features-box">
                            <div class="features-img mb-4">
                                <img src="images/icons/datatext.png" alt="">
                            </div>
                            <h4 class="mb-3">Konsultan IT</h4>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="features-box">
                            <div class="features-img mb-4">
                                <img src="images/icons/datawork.png" alt="">
                            </div>
                            <h4 class="mb-3">Kostumisasi Sistem</h4>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div> <!-- end container-fluid -->
        </section>
        <!-- layanan end -->

        <!-- web dev start -->
        <section class="section bg-light" id="web-dev">
            <div class="container-fluid">

                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-4 pb-1">
                            <h3>Pengembangan Web</h3>
                            <!-- <p class="text-muted">The clean and well commented code allows easy customization of the theme.It's designed for describing your app, agency or business.</p> -->
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="feature-img">
                            <img src="images/features-img/img-3.png" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5 features-content">
                            <div class="features-icon mb-4">
                                <i class="mdi mdi-web h4 text-white text-center"></i>
                            </div>
                            <h3 class="mb-3">Alsava dapat memberikan solusi yang inovatif untuk website anda</h3>
                            <p class="text-muted mb-4">
                                Dengan pengalaman yang baik dan ahli dalam pengembangan website, kami dapat menghadirkan website yang tidak hanya bekerja dengan baik namun juga memberikan kesan tersendiri untuk para pengunjung website. Tidak hanya pengembangan website, kami memastikan website berjalan dengan sempurna dan tetap aman dengan pemeliharaan berkala.
                            </p>
                            <!-- <a href="#" class="btn btn-primary btn-sm">Learn More <i class="mdi mdi-arrow-right"></i></a> -->
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row align-items-center mt-5">
                    <div class="col-lg-6">
                        <div class="p-5 features-content">
                            <div class="features-icon mb-4">
                                <i class="mdi mdi-remote-desktop h4 text-white text-center"></i>
                            </div>
                            <!-- <h3 class="mb-3">Explore the new world of creativity</h3> -->
                            <!-- <p class="text-muted mb-4"></p> -->
                            <ul class="list-unstyled pricing-list mt-4">
                                <li>
                                    <i class="mdi mdi-monitor-dashboard"></i>
                                    <p>Web Development</p>
                                    <p>Alsava memberikan website dengan struktur yang matang, mudah untuk digunakan atau dipelihara dan tentunya aman.</p>
                                </li>
                                <li>
                                    <i class="mdi mdi-cloud-sync"></i>
                                    <p>Cloud Service</p>
                                    <p>Dengan ini bisnis anda mendapatkan fleksibilitas yang lebih tinggi untuk mengakses data perusahaan atau penyimpanan.</p>
                                </li>
                                <li>
                                    <i class="mdi mdi-sync"></i>
                                    <p>System Integration</p>
                                    <p>Dengan Alsava integrasi antar sistem bisnis yang anda jalankan akan lebih efisien dalam sisi operasional, tentunya dengan pelayanan yang profesional, unggul dan berkesan baik.</p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="feature-img">
                            <img src="images/features-img/img-2.png" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </section>
        <!-- web dev end -->

        <!-- mobile start -->
        <section class="section pb-0 bg-gradientmobile" id="mobile">
            <div class="bg-shape">
                <img src="images/bg-shape.png" alt="" class="img-fluid mx-auto d-block">
            </div>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-4">
                            <h3 class="text-white">Pengembangan Aplikasi Mobile</h3>
                            <p class="text-white-50">Pada Pengembangan Aplikasi Mobile ini, kami memberikan layanan pembuatan aplikasi yang menarik, kreatif, memberikan pengalaman terbaik pada pengguna serta tidak mengesampingkan tujuan bisnis yang diinginkan. Alsava menghadirkan aplikasi yang dapat bekerja pada sistem operasi iOS dan Android yang berkualitas tinggi serta mudah untuk digunakan.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div class="pricing-plan bg-white p-4 mt-4">
                                    <div class="pricing-header text-center">
                                        <h5 class="plan-title text-uppercase mb-4">Basis Android</h5>
                                        <!-- <h1><sup><small>$</small></sup>49</h1>
                                        <div class="plan-duration text-muted">Per License</div> -->
                                        <img src="images/icons/android.png" alt="" class="">
                                    </div>
                                    <ul class="list-unstyled pricing-list mt-4">
                                        <li>
                                            <i class="mdi mdi-album"></i>
                                            <p>Dengan bekal yang sangat baik dalam proses pembuatan aplikasi berbasis Android membuat kami sangat yakin dengan kepuasan klien.</p>
                                        </li>
                                    </ul>
                                    <!-- <div class="text-center mt-5">
                                        <a href="#" class="btn btn-primary">Purchase Now</a>
                                    </div> -->
                                </div>
                            </div> <!-- end col -->

                            <div class="col-lg-4">
                                <div class="pricing-plan active p-4 mt-4">
                                    <!-- <span class="lable">Popular</span> -->
                                    <div class="pricing-header text-white text-center">
                                        <h5 class="plan-title text-white text-uppercase mb-4">Flutter dan React Native</h5>
                                        <!-- <h1 class=" text-white"><sup><small>$</small></sup>149</h1>
                                        <div class="plan-duration">Per License</div> -->
                                        <img src="images/icons/browserscript.png" alt="" class="">
                                    </div>
                                    <ul class="list-unstyled text-white pricing-list mt-4">
                                        <li>
                                            <i class="mdi mdi-album"></i>
                                            <p>Kami mengusung single-codebase dengan Flutter and React Native untuk membuat Cross-platform mobile Application atau satu aplikasi untuk dua platform yang berbeda.</p>
                                        </li>
                                    </ul>
                                    <!-- <div class="text-center mt-5">
                                        <a href="#" class="btn shadow btn-light">Purchase Now</a>
                                    </div> -->
                                    <div class="mt-5 pricing-header text-white text-center">
                                        <h5 class="plan-title text-white text-uppercase mb-4">Progressive Web Apps</h5>
                                        <!-- <h1 class=" text-white"><sup><small>$</small></sup>149</h1>
                                        <div class="plan-duration">Per License</div> -->
                                        <img src="images/icons/webdesign.png" alt="" class="">
                                    </div>
                                    <ul class="list-unstyled text-white pricing-list mt-4">
                                        <li>
                                            <i class="mdi mdi-album"></i>
                                            <p>Kami memberikan layanan baik berbasis desktop maupun mobile yang berperforma baik dengan pengunjung.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div> <!-- end col -->

                            <div class="col-lg-4">
                                <div class="pricing-plan bg-white p-4 mt-4">
                                    <div class="pricing-header text-center">
                                        <h5 class="plan-title text-uppercase mb-4">Basis IOS</h5>
                                        <!-- <h1><sup><small>$</small></sup>999</h1>
                                        <div class="plan-duration text-muted">Per License</div> -->
                                        <img src="images/icons/apple-ios.png" alt="" class="">
                                    </div>
                                    <ul class="list-unstyled pricing-list mt-4">
                                        <li>
                                            <i class="mdi mdi-album"></i>
                                            <p>Tim kami merupakan tim yang ahli dalam penanganan bahasa coding iOS (Swift, Dart) Programming.</p>
                                        </li>
                                    </ul>
                                    <!-- <div class="text-center mt-5">
                                        <a href="#" class="btn btn-primary">Purchase Now</a>
                                    </div> -->
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div> <!-- end col-xl-10 -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </section>
        <!-- mobile end -->

        <!-- cybersecurity start -->
        <section class="section bg-light" id="cybersecurity">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-4">
                            <h3>Keamanan Siber (Cyber Security)</h3>
                            <p class="text-muted">
                                Kejahatan siber sangat marak terjadi pada masa kini, maka dari itu kami menghadirkan pengamanan untuk data diri serta aset penting pada bisnis anda dengan layanan yang kami berikan.
                            </p>
                            <p class="text-muted">
                                Sistem pengamanan yang kami berikan bukan hanya berbasis teknologi, namun juga meliputi tim yang bekerja dengan sigap saat terjadi indikasi peretasan terhadap data diri maupun aset pada bisnis anda. Alsava menjamin data dan aset anda aman dari serangan siber.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="testi-box mt-4">
                            <div class="testi-desc bg-white p-4">
                                <p class="text-muted mb-0">Hal ini adalah upaya perlindungan data yang tersimpan pada cloud dengan menggunakan enkripsi data, pengelolaan akses yang ketat serta pemantauan setiap saat atas aktivitas yang mencurigakan baik menggunakan keamanan 2-faktor atau pengawasan langsung.</p>
                            </div>
                            <div class="p-4">
                                <div class="testi-img float-start me-2">
                                    <img src="images/icons/cloudkey.png" alt="" class="rounded-circle">
                                </div>
                                <div>
                                    <h5 class="mb-0">Cloud Security</h5>
                                    <!-- <p class="text-muted m-0"><small>- Ubold User</small></p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="testi-box mt-4">
                            <div class="testi-desc bg-white p-4">
                                <p class="text-muted mb-0">Pengamanan network security menggunakan sistem layaknya anti-virus atau rekayasa firewall untuk mendeteksi ancaman yang muncul dari malware.</p>
                            </div>
                            <div class="p-4">
                                <div class="testi-img float-start me-2">
                                    <img src="images/icons/optimnetwork.png" alt="" class="rounded-circle">
                                </div>
                                <div>
                                    <h5 class="mb-0">Network Security</h5>
                                    <p class="text-muted m-0"><small>- Ubold User</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="testi-box mt-4">
                            <div class="testi-desc bg-white p-4">
                                <p class="text-muted mb-0">Keamanan aplikasi sangat diperlukan dalam pembuatan ataupun pembaruan aplikasi tersebut, layanan ini dapat digunakan pada saat pembuatan maupun pemeliharaan supaya dapat mengidentifikasi dan memperbaiki keamanan sistem yang ada.</p>
                            </div>
                            <div class="p-4">
                                <div class="testi-img float-start me-2">
                                    <img src="images/icons/shield-half-full.png" alt="" class="rounded-circle">
                                </div>
                                <div>
                                    <h5 class="mb-0">Application Security</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div> 
                <!-- end row -->
            </div> 
            <!-- end container-fluid -->
        </section>
        <!-- cybersecurity end -->

        <!-- iot start -->
        <section class="section" id="iot">
            <div class="bg-shape">
                <img src="images/bg-shape-light.png" alt="" class="img-fluid mx-auto d-block">
            </div>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-4 pb-1">
                            <h3 class="mb-3">INTERNET OF THINGS (IOT)</h3>
                            <p class="text-muted">Untuk sebuah bisnis, efektivitas merupakan hal yang sangat diperhatikan, maka kami menghadirkan layanan Internet of Things atau bisa disebut loT. Alsava merancang loT dengan handal untuk memberikan sistem operasional pada bisnis anda yang lebih efisien serta dapat diandalkan. Sesuai dengan penamaannya "Internet of Things, internet untuk segalanya".
                                </p>
                            <p> KOMPONEN: </p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg">
                        <!-- Question/Answer -->
                        <div>
                            <div class="faq-question-q-box"><span class="mdi mdi-auto-fix"></span></div>
                            <p class="faq-answer mb-4 pb-1 text-muted">Sensing and Embed</p>
                        </div>

                    </div>
                    <!--/col-lg-5 -->

                    <div class="col-lg">
                        <!-- Question/Answer -->
                        <div>
                            <div class="faq-question-q-box"><span class="mdi mdi-auto-fix"></span></div>
                            <p class="faq-answer mb-4 pb-1 text-muted">Konektivitas</p>
                        </div>

                    </div>
                    <!--/col-lg-5-->

                    <div class="col-lg">
                        <!-- Question/Answer -->
                        <div>
                            <div class="faq-question-q-box"><span class="mdi mdi-auto-fix"></span></div>
                            <p class="faq-answer mb-4 pb-1 text-muted">IoT Cloud</p>
                        </div>

                    </div>
                    <!--/col-lg-5 -->

                    <div class="col-lg">
                        <!-- Question/Answer -->
                        <div>
                            <div class="faq-question-q-box"><span class="mdi mdi-auto-fix"></span></div>
                            <p class="faq-answer mb-4 pb-1 text-muted">IoT Data Analytics</p>
                        </div>

                    </div>
                    <!--/col-lg-5-->

                    <div class="col-lg">
                        <!-- Question/Answer -->
                        <div>
                            <div class="faq-question-q-box"><span class="mdi mdi-auto-fix"></span></div>
                            <p class="faq-answer mb-4 pb-1 text-muted">Perangkat Pendukung</p>
                        </div>

                    </div>
                    <!--/col-lg-5 -->

                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="features-box">
                            <div class="features-img mb-4">
                                <img src="images/icons/condos.png" alt="">
                            </div>
                            <h4 class="mb-2">Smart Home / Smart Office</h4>
                            <p class="text-muted">Dengan IoT hal-hal dalam keseharian anda di rumah maupun kantor akan menjadi lebih efisien berkat pengendalian yang sangat mudah dan aman sekalipun dalam jarak yang jauh.</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="features-box">
                            <div class="features-img mb-4">
                                <img src="images/icons/hexagon.png" alt="">
                            </div>
                            <h4 class="mb-2">Sistem Keamanan Biometrik</h4>
                            <p class="text-muted">Sistem ini sudah marak digunakan pada kantor maupun rumah. Sistem ini berguna untuk menandai kehadiran seseorang atau mengijinkan akses hanya pada orang yang berwenang. Teknologi biometrik memanfaatkan sidik jari, suara, mata dan pengenalan wajah. Menggunakan sistem ini, hasil yang diberikan jauh lebih baik dikarenakan adanya data yang terkait satu sama lain yang lebih aman.</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="features-box">
                            <div class="features-img mb-4">
                                <img src="images/icons/cloudspread.png" alt="">
                            </div>
                            <h4 class="mb-2">Kostumisasi IoT</h4>
                            <p class="text-muted">Sesuai kebutuhan klien, kami juga menyediakan kostumisasi sesuai kebutuhan bisnis anda seperti; sistem manajemen hotel terintegrasi, sistem manajemen parkir yang terintegrasi digital, dll.</p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div> <!-- end container-fluid -->
        </section>
        <!-- iot end -->

        <!-- ui/ux start -->
        <section class="section" id="ui-ux">
            <div class="container-fluid">

                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-4 pb-1">
                            <h3>Desain UI/UX</h3>
                            <p class="text-muted">User Interface dan User Experience atau sering disebut UI/UX, merupakan penghubung antara pengguna dan sistem operasi yang kami berikan. Alsava memfokuskan pada kombinasi tampilan sistem yang terkini serta fungsi yang baik sehingga produk yang kami berikan dapat memenuhi tujuan bisnis dari industri manapun.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="feature-img">
                            <img src="images/features-img/img-6.png" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5 features-content">
                            <div class="features-icon mb-4">
                                <i class="mdi mdi-drawing h4 text-white text-center"></i>
                            </div>
                            <h3 class="mb-3">Dalam komunikasi desain dan visual, Alsava merupakan tempat yang tepat dengan layanan;</h3>
                            <ul class="list-unstyled pricing-list mt-4">
                                <li>
                                    <i class="mdi mdi-monitor-dashboard"></i>
                                    <p>Arsitektur Informasi</p>
                                    <p>Kami menghubungkan pengguna melalui konten yang dilihat seperti desain halaman, pengalaman pengguna serta pemetaan fitur.</p>
                                </li>
                                <li>
                                    <i class="mdi mdi-monitor-dashboard"></i>
                                    <p>User Experience Design</p>
                                    <p>User Experience/UX berperan penting pada pengguna maka dari itu kami menghadirkan pengalaman yang intuitif serta menarik untuk seluruh pengguna.</p>
                                </li>
                                <li>
                                    <i class="mdi mdi-monitor-dashboard"></i>
                                    <p>Interaction Design</p>
                                    <p>Kami fokus untuk memanjakan pengguna dengan menghadirkan interaksi yang mudah serta efisien.</p>
                                </li>
                                <li>
                                    <i class="mdi mdi-monitor-dashboard"></i>
                                    <p>Desain Visual</p>
                                    <p>Kami menempatkan desain yang indah untuk menarik penglihatan para pengguna.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row align-items-center mt-5">
                    <div class="col-lg-6">
                        <div class="p-5 features-content">
                            <div class="features-icon mb-4">
                                <i class="mdi mdi-auto-fix h4 text-white text-center"></i>
                            </div>
                            <h3 class="mb-3">Hal-hal penting yang kami perhatikan untuk mencapai kesuksesan;</h3>
                            <ul class="list-unstyled pricing-list mt-4">
                                <li>
                                    <i class="mdi mdi-monitor-dashboard"></i>
                                    <p>Penanganan baik pada status sistem.</p>
                                </li>
                                <li>
                                    <i class="mdi mdi-monitor-dashboard"></i>
                                    <p>Kesesuaian antara sistem dengan pengguna. </p>
                                </li>
                                <li>
                                    <i class="mdi mdi-monitor-dashboard"></i>
                                    <p>Desain yang mudah digunakan oleh para pengguna.</p>
                                </li>
                                <li>
                                    <i class="mdi mdi-monitor-dashboard"></i>
                                    <p>Standarisasi yang baik dan konsistensi yang teguh.</p>
                                </li>
                                <li>
                                    <i class="mdi mdi-monitor-dashboard"></i>
                                    <p>Memastikan tidak adanya error dan preventif terhadap hal tersebut.</p>
                                </li>
                                <li>
                                    <i class="mdi mdi-monitor-dashboard"></i>
                                    <p>Penanganan sedini mungkin terhadap masalah.</p>
                                </li>
                                <li>
                                    <i class="mdi mdi-monitor-dashboard"></i>
                                    <p>Estetika yang indah dan desain yang minimalis. </p>
                                </li>
                                <li>
                                    <i class="mdi mdi-monitor-dashboard"></i>
                                    <p>Fleksibel dan Efisien</p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="feature-img">
                            <img src="images/features-img/img-5.png" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </section>
        <!-- uiux end -->

        <!-- konsultasi start -->
        <section class="section bg-light" id="konsultasi">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-4 pb-1">
                            <h3 class="mb-3">Konsultasi dan Kostumisasi.</h3>
                            <p class="text-muted">Konsultan kami memberikan arahan yang menuju pada kesuksesan bisnis dengan strategi terbaik. Alsava menggabungkan strategi dan eksekusi produk teknologi yang baik untuk mendapatkan kepuasan klien serta pengguna produk teknologi. Keputusan yang didapatkan oleh hubungan klien dengan Alsava akan menghasilkan produk yang kreatif, mudah digunakan dan aman.</p>
                            <p class="text-muted">Dengan itu kami dapat memberikan penyelesaian kasus yang terbaik. Layanan yang kami berikan kepada klien adalah;</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="features-box">
                            <div class="features-img mb-4">
                                <img src="images/icons/layers.png" alt="">
                            </div>
                            <h4 class="mb-2">Informasi Audit Sistem</h4>
                            <p class="text-muted">Kami memberikan teknis yang tepat dengan pengalaman dan fleksibilitas yang tinggi untuk mendapatkan solusi yang tepat untuk berbagai macam bisnis.</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="features-box">
                            <div class="features-img mb-4">
                                <img src="images/icons/core.png" alt="">
                            </div>
                            <h4 class="mb-2">Konsultasi Teknis</h4>
                            <p class="text-muted">Penanganan teknis pada masalah-masalah yang mungkin terjadi pada bisnis yang sedang berlangsung.</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="features-box">
                            <div class="features-img mb-4">
                                <img src="images/icons/paperdesk.png" alt="">
                            </div>
                            <h4 class="mb-2">IT Training</h4>
                            <p class="text-muted">Kami memberikan pelatihan teknis dan non-teknis untuk mendapatkan hasil memuaskan pada bisnis anda serta membentuk tim yang berkapabilitas penuh pada lapangan kerja.</p>
                        </div>
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div> <!-- end container-fluid -->
        </section>
        <!-- konsultasi end -->

        <!-- maint sistem start -->
        <section class="section" id="maintenance">
            <div class="container-fluid">

                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-4 pb-1">
                            <h3>Pemeliharaan Sistem</h3>
                            <p class="text-muted">Brand Monitoring, Web and Mobile Analytics, Data analytics and Visualization.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row align-items-center mt-5">
                    <div class="col-lg-6">
                        <div class="p-5 features-content">
                            <div class="features-icon mb-4">
                                <i class="mdi mdi-deskphone h4 text-white text-center"></i>
                            </div>
                            <h3 class="mb-3">Alsava memberikan</h3>
                            <p class="text-muted mb-4">
                                Dukungan cepat untuk memperbaiki adanya masalah pada sistem anda. Tidak hanya memperbaiki suatu masalah, kami juga memberikan analisis terhadap beberapa area yang membutuhkan pemeliharaan atau pengembangan sistem. Hal tersebut dilakukan agar pengguna dapat mendapatkan pengalaman terbaik sehingga berujung pada pertumbuhan bisnis dan kesuksesan yang dituju.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="feature-img">
                            <img src="images/features-img/img-4.png" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="feature-img">
                            <img src="images/features-img/img-3.png" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5 features-content">
                            <div class="features-icon mb-4">
                                <i class="mdi mdi-desktop-mac text-white text-center"></i>
                            </div>
                            <h3 class="mb-3">Alsava membantu klien</h3>
                            <p class="text-muted mb-4">
                                Untuk memberikan analisis terhadap website atau aplikasi apakah sudah baik atau masih memerlukan peningkatan fitur. Hal-hal yang kami perhatikan adalah; Pengunjung Halaman, Persentase Ketertarikan Produk, Penambahan ke Keranjang, Proses pada Halaman Pembelian dan Pembelian Akhir. Masing-masing memberikan data yang valid untuk menunjang analisis yang diberikan pada klien apakah memerlukan pengembangan atau sudah cukup baik.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div>
            <!-- end container-fluid -->
        </section>
        <!-- maint sistem end -->

        <!-- contact start -->
        <section class="section pb-0 bg-gradientuiux" id="contact">
            <div class="bg-shape">
                <img src="images/bg-shape-light.png" alt="" class="img-fluid mx-auto d-block">
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title text-center mb-4">
                            <h3 class="text-white">Contact Us</h3>
                            <!-- <p class="text-white-50">Please fill out the following form and we will get back to you shortly</p> -->
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="contact-content text-center mt-4">
                            <div class="contact-icon mb-2">
                                <i class="mdi mdi-email-outline text-info h2"></i>
                            </div>
                            <div class="contact-details text-white">
                                <h6 class="text-white">E-mail</h6>
                                <p class="text-white-50">alsavaindonesia@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-md-4">
                        <div class="contact-content text-center mt-4">
                            <div class="contact-icon mb-2">
                                <i class="mdi mdi-cellphone-iphone text-info h2"></i>
                            </div>
                            <div class="contact-details">
                                <h6 class="text-white">Phone</h6>
                                <p class="text-white-50">012-345-6789</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-md-4">
                        <div class="contact-content text-center mt-4">
                            <div class="contact-icon mb-2">
                                <i class="mdi mdi-map-marker text-info h2"></i>
                            </div>
                            <div class="contact-details">
                                <h6 class="text-white">Address</h6>
                                <p class="text-white-50">SCBD Jakarta, Indonesia</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-lg-10">

                        <div class="custom-form p-5 bg-white">
                            <span id="error-msg"></span>
                            <form method="get" name="myForm" action="#" >
                                <!-- <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input name="name" id="name" type="text" class="form-control" placeholder="Enter your name...">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email address</label>
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Enter your email...">
                                        </div>
                                    </div>
                                </div> -->
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="subject" class="form-label">Subject</label>
                                            <input name="subject" id="subject" type="text" class="form-control" placeholder="Enter Subject...">
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="comments" class="form-label">Message</label>
                                            <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Enter your message..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-lg-12 text-end">
                                        <input type="button" id="submit" name="send" class="submitBnt btn btn-danger" value="Send Message" onclick="validateForm()">
                                    </div>
                                </div>
                                <!-- end row -->
                            </form>
                        </div>
                        <!-- end custom-form -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </section>
        <!-- contact end -->

        <!-- cta start -->
        <!-- <section class="section-sm bg-light">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-9">
                        <h3 class="mb-0 mo-mb-20">We also customize the theme as per your needs</h3>
                    </div>
                    <div class="col-md-3">
                        <div class="text-md-end">
                            <a href="#" class="btn btn-outline-dark btn-rounded"><i class="mdi mdi-email-outline me-1"></i> Contact Us</a>
                        </div>
                    </div>
                </div> -->
                <!-- end row -->
            <!-- </div> -->
            <!-- end container-fluid -->
        <!-- </section> -->
        <!-- cta end -->

        <!-- footer start -->
        <footer class="bg-dark footer">
            <div class="container-fluid">
                <div class="row mb-5">
                    <div class="col-lg-4">
                        <div class="pe-lg-4">
                            <div class="mb-4">
                                <img src="images/alsava-2-light.png" alt="" height="20">
                            </div>
                            <p class="text-white-50">Alsava Teknologi Indonesia, One Stop IT Solution</p>
                            <!-- <p class="text-white-50 mb-4 mb-lg-0">Ubold is a fully featured premium admin template built on top of awesome Bootstrap 5, modern web technology HTML5, CSS3 and jQuery.</p> -->
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6"></div>
                    <div class="col-lg-2 col-md-6"></div>
                    
                    <div class="col-lg-2 col-md-6">
                        <div class="footer-list">
                            <p class="text-white mb-2 footer-list-title">About</p>
                            <ul class="list-unstyled">
                                <li><a href="#home"><i class="mdi mdi-chevron-right me-2"></i>Home</a></li>
                                <li><a href="#about-us"><i class="mdi mdi-chevron-right me-2"></i>About Us</a></li>
                                <li><a href="#visi-misi"><i class="mdi mdi-chevron-right me-2"></i>Visi dan Misi</a></li>
                                <li><a href="#layanan"><i class="mdi mdi-chevron-right me-2"></i>Layanan</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6">
                        <div class="footer-list">
                            <p class="text-white mb-2 footer-list-title">Social</p>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="mdi mdi-instagram me-2"></i>Instagram </a></li>
                                <li><a href="#"><i class="mdi mdi-facebook me-2"></i>Facebook</a></li>
                                <li><a href="#"><i class="mdi mdi-linkedin me-2"></i>LinkedIn</a></li>
                                <li><a href="#"><i class="mdi mdi-youtube me-2"></i>Youtube</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- <div class="col-lg-2 col-md-6">
                        <div class="footer-list">
                            <p class="text-white mb-2 footer-list-title">Support</p>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="mdi mdi-chevron-right me-2"></i>Help & Support</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right me-2"></i>Privacy Policy</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right me-2"></i>Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div> -->
                    
                    <!-- <div class="col-lg-2 col-md-6">
                        <div class="footer-list">
                            <p class="text-white mb-2 footer-list-title">More Info</p>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="mdi mdi-chevron-right me-2"></i>Pricing</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right me-2"></i>For Marketing</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right me-2"></i>For Agencies</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right me-2"></i>Our Apps</a></li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="float-start pull-none">
                            <p class="text-white-50"><script>document.write(new Date().getFullYear())</script> &copy;Alsava. <a href="#" target="_blank" class="text-white-50">PT Alsava Teknologi Indonesia</a> </p>
                            <!-- <p class="text-white-50">2015 - 2020 © Alsava. Design by <a href="https://coderthemes.com/" target="_blank" class="text-white-50">Coderthemes</a> </p> -->
                        </div>
                        <div class="float-end pull-none">
                            <ul class="list-inline social-links">
                                <li class="list-inline-item text-white-50">
                                    Social :
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- container-fluid -->
        </footer>
        <!-- footer end -->
        
        <!-- Back to top -->    
        <!-- <a href="#" class="back-to-top" id="back-to-top"> <i class="mdi mdi-chevron-up"> </i> </a> -->
        <!-- Back to top -->
        <a href="#" onclick="topFunction()" class="back-to-top-btn btn btn-primary" id="back-to-top-btn"><i class="mdi mdi-chevron-up"></i></a>

        <!-- javascript -->
        
        <script src="js/bootstrap.bundle.min.js"></script>
    
        <!-- custom js -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>

</html>