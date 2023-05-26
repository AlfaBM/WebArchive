@extends('template.admindashboard')
@section('title', 'DASHBOARD')
    
@section('content')
<section class="tabledata">
    <div class="row mx-2">
        <div class="col-sm-6 mb-3">
            <div class="card dash shadow">
                <div class="card-body">
                    <div class='user'>
                        <i class='bx bxs-book'></i>
                    </div>
                        <h1 class="card-title text-center">{{$mapel->count()}}</h1>
                        <p class="card-text text-center">Mata Pelajaran</p>
                </div>
            </div>
        </div>
        
        <div class="col-sm-6 mb-3">
            <div class="card dash shadow">
                <div class="card-body">
                    <div class='user'>
                        <i class='bx bxs-book-content'></i>
                    </div>
                        <h1 class="card-title text-center">{{$materi->count()}}</h1>
                        <p class="card-text text-center">Materi</p>
                </div>
             </div>
        </div>
    </div>
</section>
@endsection
