<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Resignation;

class usrResignationController extends Controller
{
    public function index()
    {
        /// mengambil data terakhir dan pagination 5 list
        $usrresignation = resignation::latest()->paginate(15);
        
        /// mengirimkan variabel $posts ke halaman views posts/index.blade.php
        /// include dengan number index
        return view('usrresignation.index',compact('usrresignation'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    public function create()
    {
        /// menampilkan halaman create
        return view('usrresignation.create');
    }
  
    public function store(Request $request)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'nama' => 'required',
            'reason' => 'required',
            'rate' => 'required',
            'long_learn' => 'required',
        ]);
         
        /// insert setiap request dari form ke dalam database via model
        /// jika menggunakan metode ini, maka nama field dan nama form harus sama
        resignation::create($request->all());
         
        /// redirect jika sukses menyimpan data
        return redirect()->route('usrresignation.index')
                        ->with('success','resignation created successfully.');
    }
  
    public function show(resignation $resignation)
    {
        /// dengan menggunakan resource, kita bisa memanfaatkan model sebagai parameter
        /// berdasarkan id yang dipilih
        /// href="{{ route('posts.show',$post->id) }}
        return view('usrresignation.show',compact('usrresignation'));
    }
  
    public function edit(resignation $resignation)
    {
        /// dengan menggunakan resource, kita bisa memanfaatkan model sebagai parameter
        /// berdasarkan id yang dipilih
        /// href="{{ route('posts.edit',$post->id) }}
        return view('usrresignation.edit',compact('usrresignation'));
    }
  
    public function update(Request $request, resignation $resignation)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'nama' => 'nullable',
            'reason' => 'nullable',
            'rate' => 'nullable',
            'long_learn' => 'nullable',
            'status' => 'required',
        ]);
         
        /// mengubah data berdasarkan request dan parameter yang dikirimkan
        $resignation->update($request->all());
        
        /// setelah berhasil mengubah data
        return redirect()->route('usrresignation.index')
                        ->with('success','resignation updated successfully');
    }
  
    public function destroy(resignation $resignation)
    {
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
        $resignation->delete();
  
        return redirect()->route('usrresignation.index')
                        ->with('success','resignation deleted successfully');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $resignation = resignation::where('nama', 'like', "%" . $keyword . "%")->paginate(5);
        return view('usrresignation.index', compact('usrresignation'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
