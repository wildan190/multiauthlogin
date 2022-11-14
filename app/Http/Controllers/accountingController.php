<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\Accounting;

class accountingController extends Controller
{
    public function index()
    {
        return view('accounting.index');
    }

    public function create()
    {
        /// menampilkan halaman create
        return view('accounting.create');
    }


    /*
    public function index()
    {
        /// mengambil data terakhir dan pagination 5 list
        $accounting = accounting::latest()->paginate(15);
        
        /// mengirimkan variabel $posts ke halaman views posts/index.blade.php
        /// include dengan number index
        return view('accounting.index',compact('accounting'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    public function create()
    {
        /// menampilkan halaman create
        return view('accounting.create');
    }
  
    public function store(Request $request)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'nama' => 'required',
            'reason' => 'required',
            'rate' => 'required',
            'long_learn' => 'required',
            'signature' => 'required',
        ]);
         
        /// insert setiap request dari form ke dalam database via model
        /// jika menggunakan metode ini, maka nama field dan nama form harus sama
        accounting::create($request->all());
         
        /// redirect jika sukses menyimpan data
        return redirect()->route('accounting.index')
                        ->with('success','accounting created successfully.');
    }
  
    public function show(accounting $accounting)
    {
        /// dengan menggunakan resource, kita bisa memanfaatkan model sebagai parameter
        /// berdasarkan id yang dipilih
        /// href="{{ route('posts.show',$post->id) }}
        return view('accounting.show',compact('accounting'));
    }
  
    public function edit(accounting $accounting)
    {
        /// dengan menggunakan resource, kita bisa memanfaatkan model sebagai parameter
        /// berdasarkan id yang dipilih
        /// href="{{ route('posts.edit',$post->id) }}
        return view('accounting.edit',compact('accounting'));
    }
  
    public function update(Request $request, accounting $accounting)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'nama' => 'required',
            'reason' => 'required',
            'rate' => 'required',
            'long_learn' => 'required',
            'signature' => 'required',
        ]);
         
        /// mengubah data berdasarkan request dan parameter yang dikirimkan
        $accounting->update($request->all());
        
        /// setelah berhasil mengubah data
        return redirect()->route('accounting.index')
                        ->with('success','accounting updated successfully');
    }
  
    public function destroy(accounting $accounting)
    {
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
        $accounting->delete();
  
        return redirect()->route('accounting.index')
                        ->with('success','accounting deleted successfully');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $accounting = accounting::where('nama', 'like', "%" . $keyword . "%")->paginate(5);
        return view('accounting.index', compact('accounting'))->with('i', (request()->input('page', 1) - 1) * 5);
    }*/
}
