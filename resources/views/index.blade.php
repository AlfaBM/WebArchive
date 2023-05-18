@extends('template.indextemplate')
@section('title', 'HOME')

@section('section')
      <!--Awal Landing-->
  <div id="landing-page">
    <h1>SINAU</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae iusto totam necessitatibus. Excepturi, alias
      fugit?</p>
    <a href="materi.html" class="btn btn-outline-light">Get Started</a>
  </div>
  <!--Akhir Landing-->

  <!--Awal Card Materi-->
  <section id="materi">
    <div class="container">
      <div class="row text-center mb-3 mt-5">
        {{-- <div class="col content-judul">
          <h2>MATERI</h2>
        </div> --}}
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4 mb-3">
          <div class="card cardes">
            <i class='bx bx-download text-center'></i>
            {{-- <img src="" class="card-img-top" alt="" /> --}}
            <div class="card-body">
              <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card cardes">
            <i class='bx bxs-book-reader text-center'></i>
            {{-- <img src="" class="card-img-top" alt="" /> --}}
            <div class="card-body">
              <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card cardes">
            <i class='bx bxs-graduation text-center'></i>
            {{-- <img src="" class="card-img-top" alt="" /> --}}
            <div class="card-body">
              <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
  </section>
  <!--Akhir Card Materi-->

  <!--Testimoni-->
  <section class="containers">
    <div class="testimonial mySwiper">
      <div class="testi-content swiper-wrapper">
        <div class="slide swiper-slide">
          <img src="/image/profile/profile-ilyas.jpeg" alt="image" class="image">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam nesciunt cupiditate iusto neque itaque
            quisquam odit omnis, nobis perspiciatis laborum deserunt labore. Perspiciatis officia earum dolorem,
            cupiditate eligendi doloribus ipsam.</p>

          <i class='bx bxs-quote-alt-left quote-icon'></i>

          <div class="details">
            <span class="name">Ilyasa Nanda Rahmadianto</span>
            <span class="job">Siswa</span>
          </div>
        </div>
        <div class="slide swiper-slide">
          <img src="/image/profile/profile-alfa.jpeg" alt="image" class="image">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam nesciunt cupiditate iusto neque itaque
            quisquam odit omnis, nobis perspiciatis laborum deserunt labore. Perspiciatis officia earum dolorem,
            cupiditate eligendi doloribus ipsam.</p>

          <i class='bx bxs-quote-alt-left quote-icon'></i>

          <div class="details">
            <span class="name">Alfa Berlio Muda</span>
            <span class="job">Siswa</span>
          </div>
        </div>
        <div class="slide swiper-slide">
          <img src="/image/profile/profile-victor.jpeg" alt="image" class="image">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam nesciunt cupiditate iusto neque itaque
            quisquam odit omnis, nobis perspiciatis laborum deserunt labore. Perspiciatis officia earum dolorem,
            cupiditate eligendi doloribus ipsam.</p>

          <i class='bx bxs-quote-alt-left quote-icon'></i>

          <div class="details">
            <span class="name">Victoria Lucky Mahendra</span>
            <span class="job">Siswa</span>
          </div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </section>
  <!--Akhir Testimoni-->

@endsection