<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/icon" href="{{asset('images/gambar/header.jpeg')}}">
    <script data-ad-client="ca-pub-5338248122853142" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Pateron Indonesia</title>
    <!-- bootstrap -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{asset('css/style2.css')}}" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  </head>
  <body>
    <div class="ilustration-black">
      <img src="{{asset('svg/ilustration.svg')}}" alt="background" width="100%" id="top-ilustration"/>
    </div>
    <header>
      <div class="navbar">
        <div class="logo">
          <img src="{{asset('images/gambar/pateron2.png')}}" alt="Logo Pateron" width="150" />
        </div>
        <div class="menu-toggle" style="width:64px;height:64px;">
          <img src="{{asset('images/gambar/toggle-menu.png')}}" alt="toggle-menu" width="35" id="toggle-menu">

        </div>
        <nav id="navbar">
            <img src="{{asset('images/gambar/cancel.png')}}" alt="cancel" width="30" id="close">
          <ul>
            <li><a class="scroll" href="#fitur-pateron">Fitur</a></li>
            <li><a class="scroll" href="#keunggulan-pateron">Keunggulan</a></li>
            <li><a class="scroll" href="#mentor">Mentor</a></li>
            <li><a class="scroll" href="#tentang-pateron">Tentang Kami</a></li>
            <li>
              <a href="{{url('/login')}}"><button class="btn btn-warning" id="login">login</button></a
              >
            </li>
          </ul>
        </nav>
      </div>
      <div class="container">
        <div class="row mt-5" id="title-header">
          <div class="col-lg-6 col-md-6 col-sm-12 col-12 left-side">
            <p
              data-aos="fade-down"
              data-aos-duration="500"
              data-aos-delay="500"
              >Pateron</p
            >
            <hr data-aos="fade" data-aos-duration="500" data-aos-delay="500" />
            <h1 data-aos="zoom-in-down" data-aos-duration="1000">
              Your Education Platform
            </h1>
            <p data-aos="fade-up" data-aos-duration="600" data-aos-delay="840">
              Pateron adalah platfrom pendidikan sebagai partner dan solusi
              belajar masa kini
            </p>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-12 right-side">
            <img
              id="image-hero"
              src="{{asset('images/gambar/ilustration.png')}}"
              alt="ilustration-image"
              height="410"
              data-aos="fade-up"
              data-aos-duration="1000"
              data-aos-delay="500"
            />
          </div>
        </div>
        <div
          class="daftar"
          data-aos="fade-up"
          data-aos-duration="800"
          data-aos-delay="1250"
        >
          <a href="{{url('/register-peserta')}}">Daftar</a>
        </div>
      </div>
    </header>
    <div class="container mt-5">
      <div class="row wrapper" id="fitur-pateron">
        <div
          class="col-lg-3 col-md-6 col-sm-6 col-12 mt-3"
          data-aos="fade-down"
          data-aos-duration="750"
          data-aos-easing="ease-in-out"
        >
          <div class="fitur">
            <h5 class="text-center">Program Unggulan</h5>
            <center>
              <img src="{{asset('images/gambar/program.png')}}" alt="studiying" height="120" />
            </center>
            <p>
              Pateron memiliki 2 program yaitu Free Program dan Premium Program
            </p>
          </div>
        </div>
        <div
          class="col-lg-3 col-md-6 col-sm-6 col-12 mt-3"
          data-aos="fade-down"
          data-aos-duration="750"
          data-aos-delay="500"
          data-aos-easing="ease-in-out"
        >
          <div class="fitur">
            <h5 class="text-center">Pattryout</h5>
            <center>
              <img src="{{asset('images/gambar/pattryout.png')}}" alt="pattryout" height="120" />
            </center>
            <p>
              Berbagai Try Out gratis untuk mengasah kesiapan dalam menghadapi
              ujian
            </p>
          </div>
        </div>
        <div
          class="col-lg-3 col-md-6 col-sm-6 col-12 mt-3"
          data-aos="fade-down"
          data-aos-duration="750"
          data-aos-delay="1000"
          data-aos-easing="ease-in-out"
        >
          <div class="fitur">
            <h5 class="text-center">Patgrub</h5>
            <center>
              <img src="{{asset('images/gambar/patgrub.png')}}" alt="patgrub" height="120" />
            </center>
            <p>
              Membentuk grub belajar yang dibimbing langsung oleh mentor Pateron
            </p>
          </div>
        </div>
        <div
          class="col-lg-3 col-md-6 col-sm-6 col-12 mt-3"
          data-aos="fade-down"
          data-aos-duration="750"
          data-aos-delay="1250"
          data-aos-easing="ease-in-out"
        >
          <div class="fitur">
            <h5 class="text-center">Patshare</h5>
            <center>
              <img src="{{asset('images/gambar/patshare.png')}}" alt="patshare" height="120" />
            </center>
            <p>
              Berbagai materi gratis dapat didownload langsung di website
              Pateron
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Keunggulan -->
    <section class="keunggulan" id="keunggulan-pateron">
      <div class="container">
        <h4 class="text-center" data-aos="fade-up" data-aos-duration="750">
          Apa sih yang kamu dapatkan jika bergabung dengan Pateron?
        </h4>
        <center>
          <hr
            width="550"
            data-aos="fade"
            data-aos-duration="750"
            data-aos-delay="500"
          />
        </center>
        <div class="row mt-5">
          <div
            class="col-lg-8 col-md-8 col-sm-12 col-12 offset-lg-2 offset-md-2 row-keunggulan"
            data-aos="fade-down"
            data-aos-duration="1000"
            data-aos-delay="100"
          >
            <p>
              1. Dibimbing oleh para Mentor Alumni Olimpiade yang ada di
              UI(Universitas Indonesia), ITB(Institut Teknologi Bandung), dan
              UGM(Universitas Gadjah Mada).
            </p>
          </div>
          <div
            class="col-lg-8 col-md-8 col-sm-12 col-12 offset-lg-2 offset-md-2 row-keunggulan"
            data-aos="fade-down"
            data-aos-duration="750"
            data-aos-delay="300"
          >
            <p>2. Soal dengan High level of Problem.</p>
          </div>
          <div
            class="col-lg-8 col-md-8 col-sm-12 col-12 offset-lg-2 offset-md-2 row-keunggulan"
            data-aos="fade-down"
            data-aos-duration="750"
            data-aos-delay="500"
          >
            <p>
              3. Konsultasi Jurusan dengan Orang yang diterima Langsung Seleksi
              SBMPTN & SNMPTN.
            </p>
          </div>
          <div
            class="col-lg-8 col-md-8 col-sm-12 col-12 offset-lg-2 offset-md-2 row-keunggulan"
            data-aos="fade-down"
            data-aos-duration="750"
            data-aos-delay="840"
          >
            <p>
              4. Prediksi Jurusan dengan Sistem Pass & Grade yang dapat Membantu
              Kamu Lolos Jurusan Favorit Kamu.
            </p>
          </div>
          <div
            class="col-lg-8 col-md-8 col-sm-12 col-12 offset-lg-2 offset-md-2 row-keunggulan"
            data-aos="fade-down"
            data-aos-duration="750"
            data-aos-delay="1000"
          >
            <p>
              5. Silabus Belajar Super Ambis dari Pateron yang telah
              Mengantarkan Alumni Pateron Masuk Jurusan Favoritnya.
            </p>
          </div>
          <div
            class="col-lg-8 col-md-8 col-sm-12 col-12 offset-lg-2 offset-md-2 row-keunggulan"
            data-aos="fade-down"
            data-aos-duration="750"
            data-aos-delay="1300"
          >
            <p>
              6. Metode Belajar dengan Olympyad Concept.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Pricing -->
    <!-- <section class="pricing">
      <div class="container">
        <h4 class="text-center" data-aos="fade-up"
        data-aos-duration="750">Daftar Sekarang</h4>
        <center>
          <hr
            width="550"
            data-aos="fade"
            data-aos-duration="750"
            data-aos-delay="500"
          />
        </center>
        <div class="row" style="height:550px;">
          <div
            class="col-lg-4 col-md-12 col-sm-12 col-12 offset-lg-2 pricing-pa1eron"
            data-aos="fade-left"
            data-aos-duration="750"
          >
            <div class="all-pricing free-program">
              <h3 class="text-center">Free Program</h3>
              <div class="price text-center">
                <p class="text-left rp">Rp.</p>
                <h1>0</h1>
                <p class="nikmati">Nikmati berbagai layanan gratis dari 
                  Pateron yaitu </p>
                <div class="fitur-free mt-3">
                  <ol>
                    <li>
                      Pattryout
                    </li>
                    <li>
                      Patshare
                    </li>
                    <li>
                      Patgrup
                    </li>
                  </ol>
                </div>
                <div class="btn btn-primary" style="margin-top: 60px;">Daftar Sekarang</div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12 col-12 pricing-pateron"
          data-aos="fade-left"
          data-aos-duration="750"
          data-aos-delay="500">
            <div class="all-pricing premium-program">
              <h3 class="text-center">Premium Program</h3>
              <div class="price text-center">
                <p class="text-left rp">Rp.</p>
                <h1>200k</h1>
                <p class="nikmati">Nikmati berbagai layanan Premium dari 
                    Pateron yaitu </p>
                <div class="fitur-premium mt-3">
                  <ol>
                    <li>
                      Pattryout
                    </li>
                    <li>
                      Patshare
                    </li>
                    <li>
                      Patgrup
                    </li>
                    <li>
                      Premium Tryout
                    </li>
                    <li>
                      Pembinaan Pateron
                    </li>
                  </ol>
                </div>
                <div class="btn btn-primary">Daftar Sekarang</div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <div class="mt-5" id="mentor"></div>
        <h4 class="text-center" data-aos="fade-up"
        data-aos-duration="750">Mentor Mentor Tim Pateron</h4>
        <center>
          <hr
            width="550"
            id="hr-mentor"
            data-aos="fade"
            data-aos-duration="750"
            data-aos-delay="500"
          />
        </center>
        <div class="row mentor">
            <div class="col-lg-2 col-md-4 col-sm-6 col-12 mentors">
              <div class="paramentor"                     
              data-aos="fade-up"
              data-aos-duration="750">
                  <div class="photo">
                    <img src="https://image.flaticon.com/icons/svg/149/149071.svg" alt="avatar" width="84" >
                  </div>
                  <h5 class="text-center">Rifky Krismantoro</h5>
                  <p class="text-center">Teknik Industri ITB</p>
              </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12 mentors">
              <div class="paramentor"
              data-aos="fade-up"
              data-aos-duration="750"
              data-aos-delay="250">
                  <div class="photo">
                    <img src="https://image.flaticon.com/icons/svg/149/149071.svg" alt="avatar" width="84">
                  </div>
                  <h5 class="text-center">Ananta Bryan T. W.</h5>
                  <p class="text-center">Kedokteran UGM</p>
              </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12 mentors">
              <div class="paramentor"
              data-aos="fade-up"
              data-aos-duration="750"
              data-aos-delay="350">
                  <div class="photo">
                    <img src="https://image.flaticon.com/icons/svg/149/149071.svg" alt="avatar" width="84">
                  </div> 
                  <h5 class="text-center">Agnes Olivya Mariadi</h5>
                  <p class="text-center">STAN</p>
              </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12 mentors">
              <div class="paramentor"
              data-aos="fade-up"
              data-aos-duration="750"
              data-aos-delay="450">
                  <div class="photo">
                    <img src="https://image.flaticon.com/icons/svg/149/149071.svg" alt="avatar" width="84">
                  </div> 
                  <h5 class="text-center">Alma Aulia</h5>
                  <p class="text-center">Arsitektur ITB</p>
              </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12 mentors">
              <div class="paramentor"
              data-aos="fade-up"
              data-aos-duration="750"
              data-aos-delay="550">
                  <div class="photo">
                    <img src="https://image.flaticon.com/icons/svg/149/149071.svg" alt="avatar" width="84">
                  </div> 
                  <h5 class="text-center">Bima Prasetya</h5>
                  <p class="text-center">Teknik Kimia UGM</p>
              </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12 mentors">
              <div class="paramentor"
              data-aos="fade-up"
              data-aos-duration="750"
              data-aos-delay="650">
                  <div class="photo">
                    <img src="https://image.flaticon.com/icons/svg/149/149071.svg" alt="avatar" width="84">
                  </div> 
                  <h5 class="text-center">Alfina Damayanti</h5>
                  <p class="text-center">Kehutanan UGM</p>
              </div>
            </div>
          </div>
    </div>
    <!-- <section class="sosmed">
      asdas
    </section> -->
    <div class="footer" id="tentang-pateron">
      <div class="row">
          <div class="col-lg-2 col-md-6 col-sm-12 col-12 offset-lg-4">
            <a href="https://instagram.com/pateron_indonesia" target="_blank">
              <img src="https://image.flaticon.com/icons/svg/124/124027.svg" alt="Line" width="30"/>
              <b>@xny8252j</b>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <a href="https://instagram.com/pateron_indonesia" target="_blank">
              <img src="https://image.flaticon.com/icons/svg/1409/1409946.svg" alt="Instagram" width="30"/>
              <b>@pateron_indonesia</b>
            </a>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-4 offset-lg-4">
              <p class="text-center">2019 Copyright | Pateron</p>
          </div>
      </div>
    </div>
  </body>
  <!-- Bootstrap -->
  <script
    src="./js/jquery.js"
  ></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"
  ></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="js/menu-toggle.js"></script>
  <script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
  integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
  crossorigin="anonymous"></script>
  <script src="js/easing.js"></script>
  <script>
      $(".scroll").on("click", function(e){
        e.preventDefault();
        let href = $(this).attr("href");
        let target = $(href);
        $('html, body').animate({
          scrollTop: target.offset().top - 100
        }, 500, 'easeInExpo');
        $("#navbar").css("left", "100%")
      })
  </script>
</html>
