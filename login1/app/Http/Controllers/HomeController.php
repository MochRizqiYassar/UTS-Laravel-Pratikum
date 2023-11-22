<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bunga;
use Illuminate\view\view;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index() : View
    // {
    //     return view('home');
    // }
    public function bunga() : View
    {
        $bunga = Bunga::get();

        return view('home', compact('bunga'));
    }

    public function user() : View //halaman user
    {
        $bunga = Bunga::get();

        return view('user', compact('bunga'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
    {
        $this->validate($request, [
            'nama' =>'required',
            'deskripsi' =>'required',
            'harga' =>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048' 
        ]);

        if($request->hasFile('image')) {
            $Gambar = $request->file('image');
            $namaGambar = time(). '.'.$Gambar->getClientOriginalExtension();
            $Gambar->storeAs('gambar', $namaGambar, 'public');
        }else {
            $namaGambar = null;
        }
        Bunga::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'image' => $namaGambar,
        ]);
        return redirect()->route('home')->with(['succes' => 'Data Berhasil Ditambakan']);
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bunga = Bunga::findOrFail($id);
        return view('edit', compact('bunga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'nama' =>'required',
            'deskripsi' =>'required',
            'harga' =>'required',
            'image' =>'image|mimes:png,jpg,jpeg|max:2048',
        ]);
        $bunga = Bunga::findOrFail($id);

        if($request->hasFile('image')) {
            if ($bunga->gambar) {
                Storage::delete('public/images/' . $bunga->gambar);
            }
            $Gambar = $request->file('image');
            $namaGambar = time() . '.' . $Gambar->getClientOriginalExtension();
            $Gambar->storeAs('gambar', $namaGambar, 'public');

            $bunga->gambar = $namaGambar;
        }
        $bunga->nama = $request->nama;
        $bunga->deskripsi = $request->deskripsi;
        $bunga->harga = $request->harga;
        $bunga->save();

        return redirect()->route('home')->with(['succes' => 'Data Berhasil Disimpan']);
        //
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bunga = Bunga::findOrFail($id);
        $bunga->delete();
        return redirect()->route('home')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
