<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;


class InventoryController extends Controller
{
    public function index()
    {
        /// mengambil data terakhir dan pagination 5 list
        $inventory = Inventory::latest()->paginate(15);
        
        /// mengirimkan variabel $posts ke halaman views posts/index.blade.php
        /// include dengan number index
        return view('inventory.index',compact('inventory'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    public function create()
    {
        /// menampilkan halaman create
        return view('inventory.create');
    }

    public function edit()
    {
        /// menampilkan halaman create
        return view('inventory.edit');
    }

    public function history()
    {
        /// menampilkan halaman history
        return view('inventory.history');
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
        return redirect()->route('inventory.index')
                        ->with('success','Data created successfully.');
    }
  
    public function show(Inventory $inventory)
    {
        /// dengan menggunakan resource, kita bisa memanfaatkan model sebagai parameter
        /// berdasarkan id yang dipilih
        /// href="{{ route('posts.show',$post->id) }}
        return view('inventory.show',compact('inventory'));
    }

  
    public function ubah(Inventory $inventory)
    {
        /// dengan menggunakan resource, kita bisa memanfaatkan model sebagai parameter
        /// berdasarkan id yang dipilih
        /// href="{{ route('posts.edit',$post->id) }}
        return view('inventory.edit',compact('inventory'));
    }

  
    public function update(Request $request, Inventory $inventory)
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
        $inventory->update($request->all());
        
        /// setelah berhasil mengubah data
        return redirect()->route('inventory.index')
                        ->with('success','Data updated successfully');
    }
  
    public function destroy(Inventory $inventory)
    {
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
        $inventory->delete();
  
        return redirect()->route('inventory.index')
                        ->with('success','Record deleted successfully');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $inventory = Inventory::where('nama', 'like', "%" . $keyword . "%")->paginate(5);
        return view('inventory.index', compact('inventory'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
