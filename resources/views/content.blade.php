@extends('template.admindashboard')
@section('title', 'CONTENT')

@section('content')
    {{-- table konten --}}
    <div class="container pt-5">
        <div class="pt-5">
            <a type="button" class="btn btn-primary mb-2 ms-2 me-2" data-bs-toggle="modal" data-bs-target="#modalmapel">Tambah
                Mapel</a>
            <a type="button" class="btn btn-primary mb-2 ms-2 me-2" data-bs-toggle="modal" data-bs-target="#modalmateri">Tambah
                Materi</a>
            <a type="button" class="btn btn-primary mb-2 ms-2 me-2" data-bs-toggle="modal"
                data-bs-target="#modalcreate">Tambah
                Data</a>

            {{-- modal --}}
            @include('modal.mapel')
            @include('modal.materi')
            @include('modal.create')

            <div class="card">
                <div class="p-1">
                    <div class="card-body">
                        <div class="text-start d-flex" style="gap: 10px;">
                            <i class="fas fa-list"></i>
                            <p>List Content</p>
                        </div>

                        <div class="container text-center">
                            @if (Session::has('succestabl'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('succestabl') }}
                                </div>
                            @endif
                            @if (Session::has('succes'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('succes') }}
                                </div>
                            @endif
                            <div class="container  table-responsive-sm table-responsive-md table-responsive-lg">
                                <table class="table table-stripped table-hover table-sm">
                                    @if (sizeof($data))
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Mapel</th>
                                                <th>Materi</th>
                                                <th>File</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        @foreach ($data as $item)
                                            <tr class="data-row">

                                                <td>{{ $loop->iteration + $data->firstItem() - 1 }}</td>
                                                <td style="word-wrap: break-word; max-width:5vh">{{ $item->judul }}
                                                </td>
                                                <td>{{ $item->mapel->nama_mapel }}</td>
                                                <td>{{ $item->materi->nama_materi }}</td>
                                                <td> <a href="{{ url('/view', $item->id_buku) }}" target="_blank">pdf</a>
                                                </td>
                                                <td>
                                                    {{-- <form action="{{ route('content.destroy', $item->id_buku) }}"
                                                        method="POST"> --}}
                                                    <a class="btn" href="{{ route('content.edit', $item->id_buku) }}"><i
                                                            class="far fa-edit fa-lg" style="color: #04ff00;"></i></a>
                                                    {{-- @csrf
                                                        @method('DELETE') --}}
                                                    {{-- onclick="return confirm('Ingin menghapus data ?')" --}}
                                                    <a type="button" class="btn"
                                                        data-bs-toggle="modal" data-bs-target="#confirmdel{{$item->id_buku}}"><i
                                                            class="fas fa-trash-alt fa-lg" style="color: #ff2e2e;"></i></a>
                                                    @include('modal.confirmdel')
                                                    {{-- <button type="submit" class="btn" confirm="Are your sure?"><i
                                                                class="fas fa-trash-alt fa-lg"
                                                                style="color: #ff2e2e;"></i></button>
                                                    </form> --}}
                                                </td>
                                            </tr>
                                        @endforeach

                                </table>
                                <div class="d-flex">
                                    {{ $data->appends(['mapel' => $data2->currentPage(), 'materi' =>$data3->currentPage()])->withQueryString()->links() }}
                                </div>
                            @else
                                @if (request('search'))
                                    <p class="text-center">Judul Tidak Ada</p>
                                @else
                                    <p class="text-center">Data Tidak Ada</p>
                                @endif
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <div class="p-1">
                    <div class="card-body">
                        <div class="text-start d-flex" style="gap: 10px;">
                            <i class="fas fa-list"></i>
                            <p>List Mata Pelajaran</p>
                        </div>
                        <div class="container text-center">
                            <div class="container  table-responsive-sm table-responsive-md table-responsive-lg">
                                <table class="table table-stripped table-hover table-sm">


                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Gambar</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    @foreach ($data2 as $item)
                                        <tr class="data-row">

                                            <td>{{ $loop->iteration + $data2->firstItem() - 1 }}</td>
                                            <td style="word-wrap: break-word; max-width:5vh">
                                                {{ $item->nama_mapel }}
                                            </td>
                                            <td> <a href="{{ asset('storage/' . $item->gambar) }}"
                                                    target="_blank">Gambar</a> </td>
                                            <td>
                                                <a class="btn" href="{{ route('editmapel', $item->id_mapel) }}"><i
                                                        class="far fa-edit fa-lg" style="color: #04ff00;"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </table>
                                <div class="d-flex">
                                    {{ $data2->appends(['materi' => $data3->currentPage(), 'buku' =>$data->currentPage()])->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <div class="p-1">
                    <div class="card-body">
                        <div class="text-start d-flex" style="gap: 10px;">
                            <i class="fas fa-list"></i>
                            <p>List Materi</p>
                        </div>
                        <div class="container text-center">
                            <div class="container  table-responsive-sm table-responsive-md table-responsive-lg">
                                <table class="table table-stripped table-hover table-sm">


                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    @foreach ($data3 as $item)
                                        <tr class="data-row">

                                            <td>{{ $loop->iteration + $data3->firstItem() - 1 }}</td>
                                            <td style="word-wrap: break-word; max-width:5vh">
                                                {{ $item->nama_materi }}
                                            </td>
                                            <td>
                                                <a class="btn" href="{{ route('editmateri', $item->id_materi) }}"><i
                                                        class="far fa-edit fa-lg" style="color: #04ff00;"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </table>
                                <div class="d-flex">
                                    {{ $data3->appends(['mapel' => $data2->currentPage(), 'buku' =>$data->currentPage()])->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container p-5">

        </div>

    </div>
    </div>

@endsection

@push('sripct')
    @if ($errors->has('mapel') || $errors->has('materi') || $errors->has('file'))
        <script>
            window.onload = function() {
                let myModal = new bootstrap.Modal(document.getElementById('modalcreate'), {});
                myModal.show();
            }
        </script>
    @endif
    @if ($errors->has('gambar-mapel'))
        <script>
            window.onload = function() {
                let myModal = new bootstrap.Modal(document.getElementById('modalmapel'), {});
                myModal.show();
            }
        </script>
    @endif
@endpush
