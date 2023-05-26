@extends('template.indextemplate')
@section('title', 'MATERI')

@section('section')
    <div class="pt-5">
        <div class="container pt-5">
            @foreach ($data as $item)
                <ul>
                    <li>
                        <h1>{{ $item->materi->nama_materi }}</h1>
                        @foreach ($book as $item2)
                            @if ($item2->id_materi == $item->materi->id_materi)
                                <ul>
                                    <li>
                                        <h2>{{ $item2->judul }}</h2>
                                    </li>
                                </ul>
                            @endif
                        @endforeach
                    </li>
                </ul>
            @endforeach
        </div>
    </div>
@endsection
