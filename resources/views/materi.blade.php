@extends('template.indextemplate')
@section('title', 'MATERI')

@section('section')
    <!--Isi Content-->

    @foreach ($data as $item)
        <section id="isi-materi">
            <div class="container">
                <div class="card cardmtr">
                    <div class="box"
                        style="position: absolute;
  top: 20px;
  left: 20px;
  right: 20px;
  bottom: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
  background-image: url({{ asset('storage/' . $item->gambar) }});
  background-size: cover;
  border: 2px solid white;
  border-radius: 15px;
  box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
  transition: 0.5s;
  overflow: hidden;">
                        <div class="content">
                            <h3>{{ $item->nama_mapel }}</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit laudantium tempora
                                reiciendis nam
                                libero ipsa consectetur officia eius odio sint?</p>
                            <a href="{{ route('submateri.show', $item->id_mapel) }}">Read More</a>
                        </div>
                    </div>
                </div>
        </section>
    @endforeach


    {{-- <div class="card card1 cardmtr">
        <div class="box">
          <div class="content">
            <h3>Matematika</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit laudantium tempora reiciendis nam
              libero ipsa consectetur officia eius odio sint?</p>
            <a href="#">Read More</a>
          </div>
        </div>
      </div>

      <div class="card card2 cardmtr">
        <div class="box">
          <div class="content">
            <h3>Biologi</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit laudantium tempora reiciendis nam
              libero ipsa consectetur officia eius odio sint?</p>
            <a href="#">Read More</a>
          </div>
        </div>
      </div>

      <div class="card card3 cardmtr">
        <div class="box">
          <div class="content">
            <h3>Fisika</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit laudantium tempora reiciendis nam
              libero ipsa consectetur officia eius odio sint?</p>
            <a href="#">Read More</a>
          </div>
        </div>
      </div>

      <div class="card card4 cardmtr">
        <div class="box">
          <div class="content">
            <h3>Kimia</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit laudantium tempora reiciendis nam
              libero ipsa consectetur officia eius odio sint?</p>
            <a href="#">Read More</a>
          </div>
        </div>
      </div>
    </div> --}}
    <!--Akhir Content-->
@endsection
