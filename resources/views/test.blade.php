@extends('template.admindashboard')
@section('title', 'Content')

@section('content')
    {{-- @include('test2') --}}
    <div class="card mb-5 pt-5">
        <div class="container p-5">
            <div class="card-body">
                <div class="text-start d-flex" style="gap: 10px;">
                    <i class="fas fa-list"></i>
                    <p>List Content</p>
                </div>

                <div class="main text-center">
                    <div class="table-responsive-sm table-responsive-md table-responsive-lg">
                        @if (sizeof($data))
                            <table class="table table-stripped table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th>no</th>
                                        <th>judul</th>
                                        <th>mapel</th>
                                        <th>materi</th>
                                        <th>file</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr class="data-row">

                                            <td>{{ $loop->iteration + $data->firstItem() - 1 }}</td>
                                            <td class="judul">{{ $item->judul }}</td>
                                            <td>{{ $item->mapel->nama_mapel }}</td>
                                            <td>{{ $item->materi->nama_materi }}</td>
                                            <td style="word-wrap: break-word; max-width:5vh"> <a
                                                    href="{{ url('/view', $item->id_buku) }}" target="_blank">pdf</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('content.destroy', $item->id_buku) }}"
                                                    method="POST">
                                                    {{-- <a class="btn"
                                                                href="{{ route('content.edit', $item->id_buku) }}"></a> --}}
                                                    <a type="button" class="btn editbtn" data-bs-toggle="modal"
                                                        data-bs-target="#modaledit" data-id="{{ $item->id_buku }}"><i
                                                            class="far fa-edit fa-lg" style="color: #04ff00;"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn"
                                                        onclick="return confirm('Ingin menghapus data ?')"><i
                                                            class="fas fa-trash-alt fa-lg"
                                                            style="color: #ff2e2e;"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $data->links('pagination::bootstrap-5') !!}
                        @else
                            <p class="text-center">Judul Tidak Ada</p>
                        @endif
                        {{-- {!! $data->appends(Request::except('page'))->links() !!} --}}
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
    
@endsection
