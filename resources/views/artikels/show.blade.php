<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset("../../style.css") }}">
    <link rel="stylesheet" href="{{ asset("../../mobile.css") }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="../../../assets/logoblack.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <title>{{ $artikel->judul }}</title>
</head>
<body>
  <div id="navArtikel">
    <nav class="navbar navbar-expand-lg bg-body-dark navbar-dark sticky-top">
      <div class="container">
        <img src="../../../assets/logowhite.png" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Beranda</a>
            <a class="nav-link" href="{{ url('/#artikel') }}">Artikel</a>
            <a class="nav-link" href="{{ url('/#testimoni') }}">Tetimoni</a>
            <a class="nav-link" href="{{ url('/#galeri') }}">Galeri</a>
            <a class="nav-link" href="{{ url('/#paket') }}">Paket</a>
            <a class="nav-link" href="{{ url('/#footer') }}">Hubungi Kami</a>
          </div>
        </div>
      </div>
    </nav>
  </div>

    <section id="content">
        <div class="container">
            <div class="row">
                <h2 class="title-artikel">{{ $artikel->judul }}</h3>
            </div>
            <div class="row ">
                <img src="/images/{{ $artikel->image }}" class="img-artikel" alt="">
                {{-- <p class="source-artikel">Source : Unsplash.com/Chinh Le Luc</p> --}}
            </div>
            <article>
                <p>{{ $artikel->narasi }}</p>
              </article>
              <br>
              <a href="{{ url('/') }}"><i class='bx bx-chevrons-left'></i> Kembali ke halaman sebelumnya</a>
        </div>
    </section>
    
    <section id="footer">
      <div class="container">
        <div class="row">
          <div class="col-4 col-lg-4 logo-footer">
            <h5>Indiego.com</h5>
            <p class="text-in">Alamat Perusahaan</p>
            <img src="../../../assets/logowhite.png" alt="">
          </div>

          <div class="col-8 col-lg-5 whatsapp-contact">
            <h5>Whatsapp Business</h5>
            <br>
            <p class="text-in">
                Hubungi kami via WhatsApp dan booking jadwal konsultasimu sekarang!
            </p>
            <a href="https://wa.me/+6289680758385" target="_blank" class="btn btn-wa">Whatsapp kami !</a>
          </div>

          <div class="col-12 col-lg-3 hubungi-kami">
            <h5>Media Sosial :</h5>
            <br>
            <a href="#">
              <img src="../../../assets/fb.png" alt="">
              Facebook
            </a>
            <br>
            <a href="#">
              <img src="../../../assets/ig.png" alt="">
              Instagram
            </a>
            <br>
            <a href="#">
              <img src="../../../assets/email.png" alt="">
              Email
            </a>
          </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="{{ asset("../../script.js") }}"></script>
</body>
</html>