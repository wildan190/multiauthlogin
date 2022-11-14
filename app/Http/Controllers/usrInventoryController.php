<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class usrInventoryController extends Controller
{
    public function index()
    {
        /// mengambil data terakhir dan pagination 5 list
        $usrinventory = Inventory::latest()->paginate(15);
        
        /// mengirimkan variabel $posts ke halaman views posts/index.blade.php
        /// include dengan number index
        return view('usrinventory.index',compact('usrinventory'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    public function create()
    {
        /// menampilkan halaman create
        return view('usrinventory.create');
    }


    public function history()
    {
        /// menampilkan halaman history
        return view('usrinventory.history');
    }
  
    public function store(Request $request)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'kd_barang' => 'required',
            'kategori' => 'required',
            'nama_barang' => 'required',
            'jml_barang' => 'required',
            'tgl_input' => 'required',
            'note' => 'nullable',
        ]);
         
        /// insert setiap request dari form ke dalam database via model
        /// jika menggunakan metode ini, maka nama field dan nama form harus sama
        Inventory::create($request->all());
         
        /// redirect jika sukses menyimpan data
        return redirect()->route('usrinventory.index')
                        ->with('success','Data created successfully.');
    }
  
    public function show(Inventory $inventory)
    {
        /// dengan menggunakan resource, kita bisa memanfaatkan model sebagai parameter
        /// berdasarkan id yang dipilih
        /// href="{{ route('posts.show',$post->id) }}
        return view('usrinventory.show',compact('usrinventory'));
    }

  
    public function edit(Inventory $inventory)
    {
        /// dengan menggunakan resource, kita bisa memanfaatkan model sebagai parameter
        /// berdasarkan id yang dipilih
        /// href="{{ route('posts.edit',$post->id) }}
        return view('usrinventory.edit',compact('usrinventory'));
    }

  
    public function update(Request $request, Inventory $inventory)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'kd_barang' => 'required',
            'kategori' => 'required',
            'nama_barang' => 'required',
            'jml_barang' => 'required',
            'tgl_input' => 'required',
            'note' => 'nullable',
        ]);
         
        /// mengubah data berdasarkan request dan parameter yang dikirimkan
        $inventory->update($request->all());
        
        /// setelah berhasil mengubah data
        return redirect()->route('usrinventory.index')
                        ->with('success','Data updated successfully');
    }
  
    public function destroy(Inventory $inventory)
    {
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
        $inventory->delete();
  
        return redirect()->route('usrinventory.index')
                        ->with('success','Record deleted successfully');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $inventory = Inventory::where('nama_barang', 'like', "%" . $keyword . "%")->paginate(5);
        return view('usrinventory.index', compact('usrinventory'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function filter(Request $request)
    {
        $keyword = $request->search;
        $inventory = Inventory::where('kategori', 'like', "%" . $keyword . "%")->paginate(5);
        return view('usrinventory.index', compact('usrinventory'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
