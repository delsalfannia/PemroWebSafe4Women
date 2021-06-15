<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Join Campaign</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-space-dynamic.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
</head>
<body>
      <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="<?= BASEURL?>" class="logo">
              <h4>SAFE4WOMEN</span></h4>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="<?= BASEURL;?>" class="active">Home</a></li>
              <li class="scroll-to-section"><div class="main-red-button"><a href="<?= BASEURL;?>/join">Join</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header><br>
  <div class= "join">
              <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="row">
                        <div class="col-lg-7 align-self-center">
                          <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                            <h1>Form Join Campaign</h1>
                            <p>Front Perempuan Indonesia merupakan komunitas yang bergerak untuk menyuarakan aksi kesetaraan terutama untuk membela perempuan dan segala hak-haknya.<br> Saat ini di Indonesia sudah banyak kejadian yang melecehkan wanita dan kurang adanya tanggapan positif dari pemerintah, oleh karena itu mari suarakan pendapatmu dengan mengikuti campaign ini:<br>
                                1. Follow Instagram @frontperempuan<br>
                                2. Unduh poster di bio ig<br>
                                3. Upload poster di instagrammu<br>
                                4. Upload di 5 grup wa/line<br>
                                5. Ikuti konferensi di live youtube tanggal 13 jam 13.00

                            </p>
                          </div>
                        </div>
                        <div class="col-lg-5">
                          <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src= "assets/images/n6.jpg" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        <div class = container mb-3 >
            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s" >
                <form action="<?= BASEURL ?>/join/tambah" method="POST" enctype = "multipart/form-data">
                        <div class="form-group row">
                            <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNama" name="nama" placeholder="Nama" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputUmur" class="col-sm-2 col-form-label">Umur</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="inputUmur" name="umur" placeholder="Umur" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputAlamat" name="alamat" placeholder="Alamat" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputInstansi" class="col-sm-2 col-form-label">Instansi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputInstansi" name="instansi" placeholder="Instansi" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div>
                            <label for="inputMengikuti" class="col-sm-5 col-form-label">Bukti Follow IG @frontperempuan</label>
                            <div class="col-sm-3">
                                <input type="file" class="form-control" id="inputMengikuti" name="file_ssig" required>
                            </div>
                        </div><br>
                        <div>
                            <label for="inputMengikuti" class="col-sm-5 col-form-label">Bukti Upload Poster</label>
                            <div class="col-sm-3">
                                <input type="file" class="form-control" id="inputPoster" name="file_ssposter" required>
                            </div>
                        </div><br>
                        <div>
                            <label for="inputMengikuti" class="col-sm-5 col-form-label">Bukti Share di WA/Line</label>
                            <div class="col-sm-3">
                                <input type="file" class="form-control" id="inputShare" name="file_ssshare" required>
                            </div>
                        </div><br>
                        <div>
                            <label for="inputMengikuti" class="col-sm-5 col-form-label">Bukti Mengikuti Live Streaming </label>
                            <div class="col-sm-3">
                                <input type="file" class="form-control" id="inputIkut" name="file_ssikut" required>
                            </div>
                        </div><br>
                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#kirimform">
                            Kirim
                        </button>
                </form>
            </div>
        </div>
    </div>

        <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/templatemo-custom.js"></script>
</body>
</html>