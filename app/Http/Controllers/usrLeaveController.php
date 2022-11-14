<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\leave;

class usrLeaveController extends Controller
{
    public function index()
    {
        /// mengambil data terakhir dan pagination 5 list
        $usrleave = leave::latest()->paginate(15);
        
        /// mengirimkan variabel $posts ke halaman views posts/index.blade.php
        /// include dengan number index
        return view('usrleave.index',compact('usrleave'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    public function create()
    {
        /// menampilkan halaman create
        return view('usrleave.create');
    }

    public function history()
    {
        /// menampilkan halaman history
        return view('usrleave.history');
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
            'action_date' => 'required',
        ]);
         
        /// insert setiap request dari form ke dalam database via model
        /// jika menggunakan metode ini, maka nama field dan nama form harus sama
        leave::create($request->all());
         
        /// redirect jika sukses menyimpan data
        return redirect()->route('usrleave.index')
                        ->with('success','Data created successfully.');
    }
  
    public function show(leave $leave)
    {
        /// dengan menggunakan resource, kita bisa memanfaatkan model sebagai parameter
        /// berdasarkan id yang dipilih
        /// href="{{ route('posts.show',$post->id) }}
        return view('usrleave.show',compact('usrleave'));
    }

  
    public function edit(leave $leave)
    {
        /// dengan menggunakan resource, kita bisa memanfaatkan model sebagai parameter
        /// berdasarkan id yang dipilih
        /// href="{{ route('posts.edit',$post->id) }}
        return view('usrleave.edit',compact('usrleave'));
    }
  
    public function update(Request $request, leave $leave)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'employee' => 'nullable',
            'leave_type' => 'required',
            'from_date' => 'nullable',
            'to_date' => 'nullable',
            'days' => 'nullable',
            'action_by' => 'required',
            'action_date' => 'nullable',
            'status' => 'required',
        ]);
         
        /// mengubah data berdasarkan request dan parameter yang dikirimkan
        $leave->update($request->all());
        
        /// setelah berhasil mengubah data
        return redirect()->route('usrleave.index')
                        ->with('success','Data updated successfully');
    }
  
    public function destroy(leave $leave)
    {
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
        $leave->delete();
  
        return redirect()->route('usrleave.index')
                        ->with('success','Record deleted successfully');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $leave = leave::where('nama', 'like', "%" . $keyword . "%")->paginate(5);
        return view('usrleave.index', compact('usrleave'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /*public function pilih(Request $request)
    {
        $keyword = $request->search;
        $user = User::where('nama', 'like', "%" . $keyword . "%")->paginate(5);
        return view('usrleave.index', compact('leave'))->with('i', (request()->input('page', 1) - 1) * 5);
    }*/
}
