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
                                        <a href="{{ url('/pdf', $item2->id_buku) }}" target="_blank">{{ $item2->judul }}</a>
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
