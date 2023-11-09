<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset("style.css") }}">
    <link rel="stylesheet" href="{{ asset("mobile.css") }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="assets/logoblack.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    
    <title>Indiego</title>
</head>
<body>
    <div id="navHome">
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
        <div class="container">
          <img src="assets/logowhite.png" alt="">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link active" aria-current="page" href="index.html">Beranda</a>
              <a class="nav-link" href="#artikel">Artikel</a>
              <a class="nav-link" href="#testimoni">Testimoni</a>
              <a class="nav-link" href="#galeri">Galeri</a>
              <a class="nav-link" href="#paket">Paket</a>
              <a class="nav-link" href="https://wa.me/+6289680758385">Hubungi Kami</a>
            </div>
          </div>
        </div>
      </nav>
    </div>

    <section id="banner">
        <div class="swiper bannerSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide active">
                  <img class="img-banner" src="assets/banner5.jpg" alt="">
                  <div class="banner-caption">
                    <img src="assets/logowhite.png" alt=""><br>
                    <h3>Apa itu Indiego ?</h1>
                    <p>
                      Ruang untuk dapat lebih mengerti tentang gambaran diri, yang sering tidak kita sadari dikarenakan banyaknya distraksi serta ambisi diri yang membuat kita kurang memahami kebutuhan diri.
                    </p> 
                    <a href="{{route('konseling.create')}}" type="button" class="btn btn-light" style="
                      padding: 20px 25px;
                      font-size: 22px;
                      border-radius: 10px;
                      margin-top:52px;
                  ">Trial Konsultasi Gratis</a>
                  </div>
                 
                </div>
                <div class="swiper-slide">
                  <img class="img-banner" src="assets/banner1.jpg" alt="">
                  <div class="banner-caption">
                    <img src="assets/logowhite.png" alt=""><br>
                    <h3>Konseling</h1>
                    <p>
                      Alur hidup yang dilalui oleh setiap individu akan menciptakan keunikan potensi. Memahami alam bawah sadar yang terbentuk oleh alur hidup akan dapat merubah negative behaviour dalam diri untuk menjadi potensi unik yang juga merupakan value diri.
                    </p> 
                    <a href="{{route('konseling.create')}}" type="button" class="btn btn-light" style="
                      padding: 20px 25px;
                      font-size: 22px;
                      border-radius: 10px;
                      margin-top:52px;
                  ">Trial Konsultasi Gratis</a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <img class="img-banner" src="assets/banner4.jpg" alt="">
                  <div class="banner-caption">
                    <img src="assets/logowhite.png" alt=""><br>
                    <h3>Tumbuh Kembang Anak</h1>
                    <p>
                      Buah hati bagaikan bayangan dari pantulan cermin disekitarnya Sudahkah kita memahami Mengenali jenis cermin yang mereka gunakan akan dapat mengerti bagaimana wujud bayangan yang dihasilkan.
                    </p> 
                    <a href="{{route('konseling.create')}}" type="button" class="btn btn-light" style="
                      padding: 20px 25px;
                      font-size: 22px;
                      border-radius: 10px;
                      margin-top:52px;
                  ">Trial Konsultasi Gratis</a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <img class="img-banner" src="assets/banner2.jpg" alt="">
                  <div class="banner-caption">
                    <img src="assets/logowhite.png" alt=""><br>
                    <h3>HRD</h1>
                    <p>
                      Ilmu mengenai psikologi saat ini sangat mudah untuk diakses, sehingga banyak calon Apakah perusahaanmu salah satu yang pernah terkecoh? Tertarik mencoba dengan metode sixsence? Analisis berdasarkan sixsence merupakan keahlian kami dalam rekrutmen maupun pengembangan human resource.
                    </p> 
                    <a href="{{route('konseling.create')}}" type="button" class="btn btn-light" style="
                      padding: 20px 25px;
                      font-size: 22px;
                      border-radius: 10px;
                      margin-top:52px;
                  ">Trial Konsultasi Gratis</a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <img class="img-banner" src="assets/banner3.jpg" alt="">
                  <div class="banner-caption">
                    <img src="assets/logowhite.png" alt=""><br>
                    <h3>Property Consultant</h1>
                    <p>
                      Beberapa Agama dan budaya mengajarkan hal mengenai properti berhati - hati dalam memiliki properti sebagai aset diri karena bisa jadi properti yang kita akan miliki berenergi negatif Ubah keberuntungan bisa melalui properti, tertarik?
                    </p> 
                    <a href="{{route('konseling.create')}}" type="button" class="btn btn-light" style="
                      padding: 20px 25px;
                      font-size: 22px;
                      border-radius: 10px;
                      margin-top:52px;
                  ">Trial Konsultasi Gratis</a>
                  </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section id="artikel">
      <div class="container">
        <div class="row">
          <h3>Artikel Kami</h3>
          <hr>
        </div>
        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper thumbSwiper2">
          <div class="swiper-wrapper">
            @foreach ($artikels as $artikel)
            <div class="swiper-slide">
              <a href="{{ route('artikel.show',$artikel->id) }}" target="_blank"><img src="/images/{{ $artikel->image }}" /></a>
              <div class="caption-swiper">
                <h3>{{ $artikel->judul }}</h3>
                <p>{{ $artikel->narasi }}</p>
              </div>
            </div>
            @endforeach
            
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div thumbsSlider="" class="swiper galeriSwiper">
          <div class="swiper-wrapper">
            @foreach ($artikels as $artikel)
            <div class="swiper-slide">
              <img src="/images/{{ $artikel->image }}">
            </div>
            @endforeach
            {{-- <div class="swiper-slide">
              <img src="assets/dampaktoxic.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="assets/tentanganxiety.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="assets/strategitoxic.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="assets/toxicparentsmonster.jpg" />
            </div> --}}
          </div>
        </div>
      </div>
    </section>

    <section id="testimoni">
      <div class="container">
        <div class="row">
          <h3>Testimoni</h3>
        </div>
      </div>
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5"></button>
        </div>
        <div class="carousel-inner">

          <div class="carousel-item active">
            <div class="container">
              <div class="row align-items-start">
                <div class="col-4 col-lg-3 carousel-left">
                  <img src="assets/Vika.jpg" alt="">
                </div>
                <div class="col-6 col-lg-7 carousel-right">
                  <h5>Vika Matin, <span class="umur">30th</span></h5>
                  <hr>
                  <h6>Entrepreneur</h6>
                  <p class="text-caption">Apa kata Vika tentang kami?</p>
                  <p class="text-caption">
                    ”Bingung banget punya anak 2 deketan usia dg segala dramanya tapi sulit nemu solusi tiap masalahnya. takut salah treatment ke anak, karena setiap anak itu berbeda. enak sama diego ga perlu cerita. tinggal pasang muka dia dah beberin semua hal yg kita bahkan ga sadar. thanks mas. u become a solution.”
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="container">
              <div class="row align-items-start">
                <div class="col-4 col-lg-3 carousel-left">
                  <img src="assets/Dean.jpg" alt="">
                </div>
                <div class="col-6 col-lg-7 carousel-right">
                  <h5>Dean, <span class="umur">36th</span></h5>
                  <hr>
                  <h6>Architect</h6>
                  <p class="text-caption">Apa kata Dean tentang kami?</p>
                  <p class="text-caption">
                    ”I consult with indiego about many things, ranging from projects, family, friendships, even finances. The counseling is very helpful in making decisions, even though the sharing method is unique to me. We tell a little story and they immediately respond with real time character sketches, what kind of face are we "presenting" which is our condition at that time that will be examined. For those who are curious, please try it, you will be surprised with a "how come he knows" respond and they will hel to find a solution. Good luck for "indiego" through "cerita diego".”
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="container">
              <div class="row align-items-start">
                <div class="col-4 col-lg-3 carousel-left">
                  <img src="assets/Dienar.jpg" alt="">
                </div>
                <div class="col-6 col-lg-7 carousel-right">
                  <h5>Dienar, <span class="umur">30th</span></h5>
                  <hr>
                  <h6>Enterpreneur</h6>
                  <p class="text-caption">Apa kata Dienar tentang kami?</p>
                  <p class="text-caption">
                    ”Konseling sama Indiego itu enak banget, konseling tapi rasanya kaya curhat ke temen. Pendengar yg sangat baik, solving problem nya tidak menggurui, saran yang diberikan praktikal semua, bukan cuma sekedar teori yg bikin kita bingung harus mulai dari mana. Rasanya nyaman, karena tidak ada judgement, pendekatannya sesuai dengan karakter kita. Dan gak terburu-buru. Selalu menguatkan, bahwa ini semua adalah proses.”
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="container">
              <div class="row align-items-start">
                <div class="col-4 col-lg-3 carousel-left">
                  <img src="assets/Dhiana.jpg" alt="">
                </div>
                <div class="col-6 col-lg-7 carousel-right">
                  <h5>Dhiana, <span class="umur">40th</span></h5>
                  <hr>
                  <h6>HR & GA manager</h6>
                  <p class="text-caption">Apa kata Dean tentang kami?</p>
                  <p class="text-caption">
                    ”I’m amazed, they can define our personal strengths and weaknesses from facial sketches. So it's easier to develop and focus on the abilities that we have, the gifts from God. Great talent..😃👍👌”  
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="container">
              <div class="row align-items-start">
                <div class="col-4 col-lg-3 carousel-left">
                  <img src="assets/Ophie.jpg" alt="">
                </div>
                <div class="col-6 col-lg-7 carousel-right">
                  <h5>Oghie, <span class="umur">33th</span></h5>
                  <hr>
                  <h6>Construction Business Owner</h6>
                  <p class="text-caption">Apa kata Oghie tentang kami?</p>
                  <p class="text-caption">
                    "Sebagai owner ada aja hal teknis yang sebenernya gampang tapi sulit ditentukan. Jadi kami punya peluang untuk mengisi jabatan strategis malah bimbang untuk milih siapa yang pas pada posisi tersebut. Alhamdulillah ketemu juga solusinya biar gak puyeng karena pasti ada efeknya jika menempatkan orang yang mungkin pas tapi hasilnya zonk. Makasih loh udah di filter karyawan ku. Jadi gak bimbang naro orang lg ini."  
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="container">
              <div class="row align-items-start">
                <div class="col-4 col-lg-3 carousel-left">
                  <img src="assets/wira.jpg" alt="">
                </div>
                <div class="col-6 col-lg-7 carousel-right">
                  <h5>Wira, <span class="umur">25th</span></h5>
                  <hr>
                  <h6>Public university staff</h6>
                  <p class="text-caption">Apa kata Wira tentang kami?</p>
                  <p class="text-caption">
                    "As a person who’s currently entering my 20’s, I have to know myself more and discover my best potential. With Diego, I can evolve to a better version of myself. With their sketch, I’m constantly reminded of who I was at that point and what traits of me that can be developed more to reach my best potential. This helps me to achieve more in life as I grow to be the best version of me. Thank you, Diego."  
                  </p>
                </div>
              </div>
            </div>
          </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <section id="galeri">
      <div class="container">
          <h3>Galeri Indiego</h3>
          <hr>
      </div>
        <div class="img-galeri">
          <a href="#img1">
            <img src="assets/galeri1.jpg" alt="">
          </a>
          <a href="#img2">
            <img src="assets/galeri2.jpg" alt="">
          </a>
          <a href="#img3">
            <img src="assets/galeri3.jpg" alt="">
          </a>
          <a href="#img4">
            <img src="assets/galeri4.jpg" alt="">
          </a>
          <a href="#img5">
            <img src="assets/galeri5.jpg" alt="">
          </a>
          <a href="#img6">
            <img src="assets/galeri6.jpg" alt="">
          </a>
          <a href="#img7">
            <img src="assets/galeri7.jpg" alt="">
          </a>
          <a href="#img8">
            <img src="assets/galeri8.jpg" alt="">
          </a>
          <a href="#img9">
            <img src="assets/galeri9.jpg" alt="">
          </a>
          <a href="#img10">
            <img src="assets/galeri10.jpg" alt="">
          </a>
          <a href="#img11">
            <img src="assets/galeri11.jpg" alt="">
          </a>
          <a href="#img12">
            <img src="assets/galeri12.jpg" alt="">
          </a>
          <a href="#img13">
            <img src="assets/galeri13.jpg" alt="">
          </a>
          <a href="#img14">
            <img src="assets/galeri14.jpg" alt="">
          </a>
        </div>
      
      <a href="#galeri" class="lightbox" id="img1">
        <span style="background-image: url('assets/galeri1.jpg')"></span>
      </a>
      <a href="#galeri" class="lightbox" id="img2">
        <span style="background-image: url('assets/galeri2.jpg')"></span>
      </a>
      <a href="#galeri" class="lightbox" id="img3">
        <span style="background-image: url('assets/galeri3.jpg')"></span>
      </a>
      <a href="#galeri" class="lightbox" id="img4">
        <span style="background-image: url('assets/galeri4.jpg')"></span>
      </a>
      <a href="#galeri" class="lightbox" id="img5">
        <span style="background-image: url('assets/galeri5.jpg')"></span>
      </a>
      <a href="#galeri" class="lightbox" id="img6">
        <span style="background-image: url('assets/galeri6.jpg')"></span>
      </a>
      <a href="#galeri" class="lightbox" id="img7">
        <span style="background-image: url('assets/galeri7.jpg')"></span>
      </a>
      <a href="#galeri" class="lightbox" id="img8">
        <span style="background-image: url('assets/galeri8.jpg')"></span>
      </a>
      <a href="#galeri" class="lightbox" id="img9">
        <span style="background-image: url('assets/galeri9.jpg')"></span>
      </a>
      <a href="#galeri" class="lightbox" id="img10">
        <span style="background-image: url('assets/galeri10.jpg')"></span>
      </a>
      <a href="#galeri" class="lightbox" id="img11">
        <span style="background-image: url('assets/galeri11.jpg')"></span>
      </a>
      <a href="#galeri" class="lightbox" id="img12">
        <span style="background-image: url('assets/galeri12.jpg')"></span>
      </a>
      <a href="#galeri" class="lightbox" id="img13">
        <span style="background-image: url('assets/galeri13.jpg')"></span>
      </a>
      <a href="#galeri" class="lightbox" id="img14">
        <span style="background-image: url('assets/galeri14.jpg')"></span>
      </a>
    </section>

    <section id="paket">
      <div class="container">
        <div class="row sub-title">
          <h3>Paket Kami</h3>
          <hr>
        </div>
        <div class="flex">
          <div class="card mb-3 " style="max-width: 1540px; border-radius:16px">
            <div class="row g-0" >
              <div class="col-md-4 position-relative roundedpic" style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%), url('assets/konseling.jpeg');background-size: cover; background-repeat: no-repeat; height:230px">
               <div class="position-absolute top-50 start-50 translate-middle"><p class="text-white fs-3 " style="font-weight: 300" >Konseling</p></div>
              </div>
              <div class="col-md-8 roundedcontent" style="background-color: rgb(40, 40, 40) ; ">
                <div class="card-body">
                 
                  <p class="card-text text-white" style="
                  color: #FFF;
                  font-size: 20px;
                  font-style: normal;
                  font-weight: 500;
                  line-height: 48px; /* 170.588% */
                  margin-bottom:40px">“ Dalam pengembangan diri kita perlu permasalahan dan kebutuhan dasar. Cara untuk memperolehnya, Indiego akan melakukan ”</p>

                  <div class="cta" style="
                  display: flex;
                  justify-content: end;
                  
                  align-content:end">
                    <a href="{{route('konseling.create')}}" class="text-white" style="
                    display: flex;
                    width:160px;
                    padding: 10px 14px;
                    justify-content: center;
                    align-items: center;
                    gap: 10px;
                    flex-shrink: 0;
                    border-radius: 100px;
                    border: 2px solid #FFF;
                    
                    ">Konsultasi</a>
                    <a href="{{route('konseling.create')}}" class="text-dark" style="
                    display: flex;
                    width:160px;
                    padding: 10px 14px;
                    justify-content: center;
                    align-items: center;
                    gap: 10px;
                    flex-shrink: 0;
                    border-radius: 100px;
                    /* border:  solid #FFF; */
                    background-color:white
                    ">Order</a>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>

          <div class="card mb-3 " style="max-width: 1540px; border-radius:16px">
            <div class="row g-0" >
              <div class="col-md-4 position-relative roundedpic" style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%), url('assets/hrdpaket.jpg');background-size: cover; background-repeat: no-repeat; height:230px">
               <div class="position-absolute top-50 start-50 translate-middle"><p class="text-white fs-3 " style="font-weight: 300" >HRD</p></div>
              </div>
              <div class="col-md-8 roundedcontent" style="background-color: rgb(40, 40, 40) ; ">
                <div class="card-body">
                 
                  <p class="card-text text-white" style="
                  color: #FFF;
                  font-size: 20px;
                  font-style: normal;
                  font-weight: 500;
                  line-height: 48px; /* 170.588% */
                  margin-bottom:40px">“ Karyawan pintar belum bisa mengembangkan perusahaan, namun menempatkan Karyawan yang tepat memberi dampak yang besar ”</p>

                  <div class="cta" style="
                  display: flex;
                  justify-content: end;
                  
                  align-content:end">
                    <a href="{{route('konseling.create')}}" class="text-white" style="
                    display: flex;
                    width:160px;
                    padding: 10px 14px;
                    justify-content: center;
                    align-items: center;
                    gap: 10px;
                    flex-shrink: 0;
                    border-radius: 100px;
                    border: 2px solid #FFF;
                    
                    ">Konsultasi</a>
                    <a href="{{route('konseling.create')}}" class="text-dark" style="
                    display: flex;
                    width:160px;
                    padding: 10px 14px;
                    justify-content: center;
                    align-items: center;
                    gap: 10px;
                    flex-shrink: 0;
                    border-radius: 100px;
                    /* border:  solid #FFF; */
                    background-color:white
                    ">Order</a>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>

          <div class="card mb-3 " style="max-width: 1540px; border-radius:16px">
            <div class="row g-0" >
              <div class="col-md-4 position-relative roundedpic" style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%), url('assets/tumbuhkembang.jpg');background-size: cover; background-repeat: no-repeat; height:230px">
                <div style=" display:flex; justify-content:center; align-items: center; margin-top:90px"><p class="text-white fs-2 " style="font-weight: 300" style="width: 200px">Tumbuh Kembang Anak</p></div>
              </div>
              <div class="col-md-8 roundedcontent" style="background-color: rgb(40, 40, 40) ; ">
                <div class="card-body">
                 
                  <p class="card-text text-white" style="
                  color: #FFF;
                  font-size: 20px;
                  font-style: normal;
                  font-weight: 500;
                  line-height: 48px; /* 170.588% */
                  margin-bottom:40px">“ Tumbuh kembang anak sangat dipengaruhi perasaannya, sayangnya anak belum mampu menceritakannya, Indiego akan membantu dengan ”</p>

                  <div class="cta" style="
                  display: flex;
                  justify-content: end;
                  
                  align-content:end">
                    <a href="{{route('konseling.create')}}" class="text-white" style="
                    display: flex;
                    width:160px;
                    padding: 10px 14px;
                    justify-content: center;
                    align-items: center;
                    gap: 10px;
                    flex-shrink: 0;
                    border-radius: 100px;
                    border: 2px solid #FFF;
                    
                    ">Konsultasi</a>
                    <a href="{{route('konseling.create')}}" class="text-dark" style="
                    display: flex;
                    width:160px;
                    padding: 10px 14px;
                    justify-content: center;
                    align-items: center;
                    gap: 10px;
                    flex-shrink: 0;
                    border-radius: 100px;
                    /* border:  solid #FFF; */
                    background-color:white
                    ">Order</a>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>

          <div class="card mb-3 " style="max-width: 1540px; border-radius:16px">
            <div class="row g-0" >
              <div class="col-md-4 position-relative roundedpic" style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%), url('assets/properti.jpg');background-size: cover; background-repeat: no-repeat; height:230px">
               <div style=" display:flex; justify-content:center; align-items: center; margin-top:90px"><p class="text-white fs-2 " style="font-weight: 300" style="width: 200px">Konsultasi Properti</p></div>
              </div>
              <div class="col-md-8 roundedcontent" style="background-color: rgb(40, 40, 40) ; ">
                <div class="card-body">
                 
                  <p class="card-text text-white" style="
                  color: #FFF;
                  font-size: 20px;
                  font-style: normal;
                  font-weight: 500;
                  line-height: 48px; /* 170.588% */
                  margin-bottom:40px">“ Pencarian dan pengoptimalan energi positif properti merupakan goals Dari konsultasi properti, dengan melakukan tahapan ”</p>

                  <div class="cta" style="
                  display: flex;
                  justify-content: end;
                  
                  align-content:end">
                    <a href="{{route('konseling.create')}}" class="text-white" style="
                    display: flex;
                    width:160px;
                    padding: 10px 14px;
                    justify-content: center;
                    align-items: center;
                    gap: 10px;
                    flex-shrink: 0;
                    border-radius: 100px;
                    border: 2px solid #FFF;
                    
                    ">Konsultasi</a>
                    <a href="{{route('konseling.create')}}" class="text-dark" style="
                    display: flex;
                    width:160px;
                    padding: 10px 14px;
                    justify-content: center;
                    align-items: center;
                    gap: 10px;
                    flex-shrink: 0;
                    border-radius: 100px;
                    /* border:  solid #FFF; */
                    background-color:white
                    ">Order</a>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section id="footer">
        <div class="container">
          <div class="row">
            <div class="col-4 col-lg-4 logo-footer">
              <h5>Indiego.com</h5>
              <p class="text-in">Alamat Perusahaan</p>
              <img src="assets/logowhite.png" alt="">
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
              <a class="medsos" href="#">
                <span><img src="./assets/fb.png" alt="">
                Facebook</span>
              </a>
              <br>
              <a class="medsos" href="#">
                <img src="./assets/ig.png" alt="">
                <span>Instagram</span>
              </a>
              <br>
              <a class="medsos" href="#">
                <img src="./assets/email.png" alt="">
                <span>Email</span>
              </a>
            </div>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="{{ asset("script.js") }}"></script>
</body>
</html>