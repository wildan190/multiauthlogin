<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;


class inventoryController extends Controller
{
    public function index()
    {
        /// mengambil data terakhir dan pagination 5 list
        $inven = Inventory::latest()->paginate(15);
        
        /// mengirimkan variabel $posts ke halaman views posts/index.blade.php
        /// include dengan number index
        return view('inven.index',compact('inven'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    public function create()
    {
        /// menampilkan halaman create
        return view('inven.create');
    }

    public function history()
    {
        /// menampilkan halaman history
        return view('inven.history');
    }
  
    public function store(Request $request)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'employee' => 'required',
            'leave_type' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            'days' => 'required',
            'action_by' => 'required',
            'action_date' => 'required',
            'approval' => 'optional',
        ]);
         
        /// insert setiap request dari form ke dalam database via model
        /// jika menggunakan metode ini, maka nama field dan nama form harus sama
        Inventory::create($request->all());
         
        /// redirect jika sukses menyimpan data
        return redirect()->route('inven.index')
                        ->with('success','Data created successfully.');
    }
  
    public function show(Inventory $inven)
    {
        /// dengan menggunakan resource, kita bisa memanfaatkan model sebagai parameter
        /// berdasarkan id yang dipilih
        /// href="{{ route('posts.show',$post->id) }}
        return view('inven.show',compact('inven'));
    }

  
    public function edit(Inventory $inven)
    {
        /// dengan menggunakan resource, kita bisa memanfaatkan model sebagai parameter
        /// berdasarkan id yang dipilih
        /// href="{{ route('posts.edit',$post->id) }}
        return view('inven.edit',compact('inven'));
    }
  
    public function update(Request $request, Inventory $inven)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'employee' => 'required',
            'leave_type' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            'days' => 'required',
            'action_by' => 'required',
            'action_date' => 'required',
            'approval' => 'optional',
        ]);
         
        /// mengubah data berdasarkan request dan parameter yang dikirimkan
        $inven->update($request->all());
        
        /// setelah berhasil mengubah data
        return redirect()->route('inven.index')
                        ->with('success','Data updated successfully');
    }
  
    public function destroy(Inventory $inven)
    {
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
        $inven->delete();
  
        return redirect()->route('inven.index')
                        ->with('success','Record deleted successfully');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $inven = Inventory::where('nama', 'like', "%" . $keyword . "%")->paginate(5);
        return view('inven.index', compact('inven'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
