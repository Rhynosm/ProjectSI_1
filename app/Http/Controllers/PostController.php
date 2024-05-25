<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Post;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class PostController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $posts = Post::all();

        //render view with posts
        //('pengguna.index')->with('pengguna', $data);
        return view('posts.index')->with('posts',$posts);
    }
    public function view_pdf()
    {
        $posts = Post::all();
        $pdf = Pdf::loadView('pdf.posts', ['posts' => $posts]);
        return $pdf->download('posts.pdf');
    }

    /**
     * index
     *
     * @return View
     */
    public function create(): View
    {
        return view('posts.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'Nama'     => 'required|min:1',
            'Email'     => 'required|min:1',
            'notelp'   => 'required|min:1',
            'tglmasuk' => 'required|min:1',
            'jabatan'   => 'required|min:1',
            'alamat'   => 'required|min:1'
        ]);

        //create post
        Post::create([
            'Nama'     => $request->Nama,
            'Email'     => $request->Email,
            'notelp'   => $request->notelp,
            'tglmasuk' => $request->tglmasuk,
            'jabatan'   => $request->jabatan,
            'alamat'   => $request->alamat
        ]);

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    
    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //render view with post
        return view('posts.show', compact('post'));
    }
  
    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //render view with post
        return view('posts.edit', compact('post'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'Nama'     => 'required|min:1',
            'Email'     => 'required|min:1',
            'notelp'   => 'required|min:1',
            'tglmasuk' => 'required|min:1',
            'jabatan'   => 'required|min:1',
            'alamat'   => 'required|min:1'
        ]);

        //get post by ID
        $post = Post::findOrFail($id);

            $post->update([
                'Nama'     => $request->Nama,
                'Email'     => $request->Email,
                'notelp'   => $request->notelp,
                'tglmasuk' => $request->tglmasuk,
                'jabatan'   => $request->jabatan,
                'alamat'   => $request->alamat
            ]);

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
     /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}