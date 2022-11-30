<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accounting;

class usrAccountingController extends Controller
{
    public function index()
    {
        /// mengambil data terakhir dan pagination 5 list
        $usraccounting = accounting::latest()->paginate(15);
        
        /// mengirimkan variabel $posts ke halaman views posts/index.blade.php
        /// include dengan number index
        return view('usraccounting.index',compact('usraccounting'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    public function create()
    {
        /// menampilkan halaman create
        return view('usraccounting.create');
    }
  
    public function store(Request $request)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'cash' => 'required',
            'tools' => 'required',
            'equipment' => 'required',
            'debt' => 'required',
            'details' => 'required',
        ]);
         
        /// insert setiap request dari form ke dalam database via model
        /// jika menggunakan metode ini, maka nama field dan nama form harus sama
        accounting::create($request->all());
         
        /// redirect jika sukses menyimpan data
        return redirect()->route('usraccounting.index')
                        ->with('success','accounting created successfully.');
    }
  
    public function show(accounting $accounting)
    {
        /// dengan menggunakan resource, kita bisa memanfaatkan model sebagai parameter
        /// berdasarkan id yang dipilih
        /// href="{{ route('posts.show',$post->id) }}
        return view('usraccounting.show',compact('usraccounting'));
    }
  
    public function edit(accounting $usraccounting)
    {
        /// dengan menggunakan resource, kita bisa memanfaatkan model sebagai parameter
        /// berdasarkan id yang dipilih
        /// href="{{ route('posts.edit',$post->id) }}
        return view('usraccounting.edit',compact('usraccounting'));
    }
  
    public function update(Request $request, accounting $usraccounting)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'cash' => 'nullable',
            'tools' => 'nullable',
            'equipment' => 'nullable',
            'debt' => 'nullable',
            'details' => 'nullable',
        ]);
         
        /// mengubah data berdasarkan request dan parameter yang dikirimkan
        $usraccounting->update($request->all());
        
        /// setelah berhasil mengubah data
        return redirect()->route('usraccounting.index')
                        ->with('success','accounting updated successfully');
    }
  
    public function destroy(accounting $usraccounting)
    {
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
        $usraccounting->delete();
  
        return redirect()->route('usraccounting.index')
                        ->with('success','accounting deleted successfully');
    }

    public function cari_data_filter(Request $request)
    {
        $keyword = $request->cari_data_filter;
        $accounting = accounting::where('nama', 'like', "%" . $keyword . "%")->paginate(5);
        return view('accounting.index', compact('accounting'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
