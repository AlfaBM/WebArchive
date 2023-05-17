<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\mapel;
use App\Models\materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class contentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request->input('search'));
        if ($request->input('search')) {
            $data = book::where(('judul'), 'LIKE', '%' . $request->input('search') . '%')->paginate(8);
        } else {
            $data = book::Display()->paginate(8);
        }
        // dd($data);
        $data2 = mapel::Mapelget();
        $data3 = materi::Materiget();

        return view('/content', [
            'data' => $data,
            'data2' => $data2,
            'data3' => $data3
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->input("nama-mapel")) {
            $mapel = new mapel;

            $mapel->nama_mapel = $request->input('nama-mapel');
            $mapel->save();

            session()->flash('succes', 'Mapel berhasil ditambah');
        }

        if ($request->input("nama-materi")) {
            $materi = new materi;

            $materi->nama_materi = $request->input('nama-materi');
            $materi->save();

            session()->flash('succes', 'materi berhasil ditambah');
        }

        if ($request->input("judul")) {
            $book = new book;

            $validasi = $request->validate([
                'file' => 'mimes:pdf',
                'mapel' => 'required',
                'materi' => 'required'
            ]);
           
            $path = $request->file('file')->storeAs('public/file', time() . '.pdf');
            $filepath = preg_replace('/public\//', '', $path);

            $book->judul = $request->input('judul');
            $book->id_mapel = $request->input('mapel');
            $book->id_materi = $request->input('materi');
            $book->data = $filepath;
            $book->save();

            session()->flash('succes', 'Data berhasil ditambah');
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = book::where('id_buku', $id)->first();
        return view('/edit', [
            'data' => $data,
            'data2' => mapel::Mapelget(),
            'data3' => materi::Materiget()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bookup = book::where('id_buku', $id)->first();;
        // dd($request);
        $request->validate([
            'file' => 'mimes:pdf',
            'mapel' => 'required',
            'materi' => 'required'
        ]);

        if($request->file('file')){
            $fileold = $bookup->data;
            // dd($fileold);

            preg_match(
                '/file\/([A-Za-z0-9]*).(pdf|PDF)*/',
                $fileold,
                $filenew
            );
            // dd($filenew);
            $newname = $filenew[1].'.'. $filenew[2];
            $newpath = $request->file('file')->storeAs('public/file', $newname);
            $filepath = preg_replace('/public\//', '', $newpath);
            $bookup->data = $filepath;
        }
        
        $bookup->judul = $request->input('judul');
        $bookup->id_mapel = $request->input('mapel');
        $bookup->id_materi = $request->input('materi');
        // dd($bookup);
        $bookup->save();

        session()->flash('succestabl', 'Data berhasil diedit');
        return to_route('content.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = book::where('id_buku', $id);
        // dd($content->first());
        $file = $content->first();

        // dd(file::exists(public_path($path)));
        File::delete(public_path('storage/' . $file->data));
        $content->delete();

        session()->flash('succestabl', 'Data berhasil dihapus');
        return back();
    }

    public function pdfstream($id)
    {
        $data = book::where('id_buku', $id)->first();
        return view('/pdfview', [
            'file' => $data
        ]);
    }
}