<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\timesheet;

class usrtimesheetController extends Controller
{
    public function index()
    {
        /// mengambil data terakhir dan pagination 5 list
        $usrtimesheet = timesheet::latest()->paginate(15);
        
        /// mengirimkan variabel $posts ke halaman views posts/index.blade.php
        /// include dengan number index
        return view('usrtimesheet.index',compact('usrtimesheet'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    public function create()
    {
        /// menampilkan halaman create
        return view('usrtimesheet.create');
    }
  
    public function store(Request $request)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'nama' => 'required',
            'tanggal' => 'required',
            'proyek' => 'required',
            'tempat_kerja' => 'required',
            'waktu' => 'required',
            'waktu_out' => 'required',
            'aktivitas' => 'required',
        ]);
         
        /// insert setiap request dari form ke dalam database via model
        /// jika menggunakan metode ini, maka nama field dan nama form harus sama
        timesheet::create($request->all());
         
        /// redirect jika sukses menyimpan data
        return redirect()->route('usrtimesheet.index')
                        ->with('success','Timesheet created successfully.');
    }
  
    public function show(timesheet $timesheet)
    {
        /// dengan menggunakan resource, kita bisa memanfaatkan model sebagai parameter
        /// berdasarkan id yang dipilih
        /// href="{{ route('posts.show',$post->id) }}
        return view('usrtimesheet.show',compact('usrtimesheet'));
    }
  
    public function edit(timesheet $timesheet)
    {
        /// dengan menggunakan resource, kita bisa memanfaatkan model sebagai parameter
        /// berdasarkan id yang dipilih
        /// href="{{ route('posts.edit',$post->id) }}
        return view('usrtimesheet.edit',compact('usrtimesheet'));
    }
  
    public function update(Request $request, timesheet $timesheet)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'nama' => 'required',
            'tanggal' => 'required',
            'proyek' => 'required',
            'tempat_kerja' => 'required',
            'waktu' => 'required',
            'waktu_out' => 'required',
            'aktivitas' => 'required',
        ]);
         
        /// mengubah data berdasarkan request dan parameter yang dikirimkan
        $timesheet->update($request->all());
        
        /// setelah berhasil mengubah data
        return redirect()->route('usrtimesheet.index')
                        ->with('success','Timesheet updated successfully');
    }
  
    public function destroy(timesheet $timesheet)
    {
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
        $timesheet->delete();
  
        return redirect()->route('usrtimesheet.index')
                        ->with('success','Timesheet deleted successfully');
    }

    public function finding(Request $request)
    {
        $keyword = $request->finding;
        $usrtimesheet = timesheet::where('nama', 'like', "%" . $keyword . "%")->paginate(5);
        return view('usrtimesheet.index', compact('usrtimesheet'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
