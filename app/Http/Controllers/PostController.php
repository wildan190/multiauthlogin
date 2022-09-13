<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Post;
  
class PostController extends Controller
{
    public function index()
    {
        /// mengambil data terakhir dan pagination 5 list
        $posts = Post::latest()->paginate(5);
         
        /// mengirimkan variabel $posts ke halaman views posts/index.blade.php
        /// include dengan number index
        return view('posts.index',compact('posts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    public function create()
    {
        /// menampilkan halaman create
        return view('posts.create');
    }
  
    public function store(Request $request)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'cclient' => 'required',
            'adstype' => 'required',
            'size' => 'required',
            'address' => 'required',
        ]);
         
        /// insert setiap request dari form ke dalam database via model
        /// jika menggunakan metode ini, maka nama field dan nama form harus sama
        Post::create($request->all());
         
        /// redirect jika sukses menyimpan data
        return redirect()->route('posts.index')
                        ->with('success','Post created successfully.');
    }
  
    public function show(Post $post)
    {
        /// dengan menggunakan resource, kita bisa memanfaatkan model sebagai parameter
        /// berdasarkan id yang dipilih
        /// href="{{ route('posts.show',$post->id) }}
        return view('posts.show',compact('post'));
    }
  
    public function edit(Post $post)
    {
        /// dengan menggunakan resource, kita bisa memanfaatkan model sebagai parameter
        /// berdasarkan id yang dipilih
        /// href="{{ route('posts.edit',$post->id) }}
        return view('posts.edit',compact('post'));
    }
  
    public function update(Request $request, Post $post)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'cclient' => 'required',
            'adstype' => 'required',
            'size' => 'required',
            'address' => 'required',
        ]);
         
        /// mengubah data berdasarkan request dan parameter yang dikirimkan
        $post->update($request->all());
         
        /// setelah berhasil mengubah data
        return redirect()->route('posts.index')
                        ->with('success','Post updated successfully');
    }
  
    public function destroy(Post $post)
    {
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
        $post->delete();
  
        return redirect()->route('posts.index')
                        ->with('success','Post deleted successfully');
    }
}