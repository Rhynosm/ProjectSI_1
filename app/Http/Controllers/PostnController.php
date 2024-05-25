<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Postn;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class PostnController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $postn = Postn::all();

        //render view with posts
        //('pengguna.index')->with('pengguna', $data);
        return view('postn.index')->with('postn',$postn);
    }
    public function view_pdf()
    {
        $postn = Postn::all();
        $pdf = Pdf::loadView('pdf.postn', ['postn' => $postn]);
        return $pdf->download('postn.pdf');
    }

    /**
     * index
     *
     * @return View
     */
    public function create(): View
    {
        return view('postn.create');
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
            'namapel'     => 'required|min:1',
            'penyelenggara'     => 'required|min:1',
            'tanggalmulai'   => 'required|min:1',
            'tanggalberakhir' => 'required|min:1',
            'biaya'   => 'required|min:1'
        ]);

        //create post
        Postn::create([
            'namapel'     => $request->namapel,
            'penyelenggara'     => $request->penyelenggara,
            'tanggalmulai'   => $request->tanggalmulai,
            'tanggalberakhir' => $request->tanggalberakhir,
            'biaya'   => $request->biaya
        ]);

        //redirect to index
        return redirect()->route('postn.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $postn = Postn::findOrFail($id);

        //render view with post
        return view('postn.show', compact('postn'));
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
        $postn = Postn::findOrFail($id);

        //render view with post
        return view('postn.edit', compact('postn'));
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
            'namapel'     => 'required|min:1',
            'penyelenggara'     => 'required|min:1',
            'tanggalmulai'   => 'required|min:1',
            'tanggalberakhir' => 'required|min:1',
            'biaya'   => 'required|min:1'
        ]);

        //get post by ID
        $postn = Postn::findOrFail($id);

            $postn->update([
                'namapel'     => $request->namapel,
                'penyelenggara'     => $request->penyelenggara,
                'tanggalmulai'   => $request->tanggalmulai,
                'tanggalberakhir' => $request->tanggalberakhir,
                'biaya'   => $request->biaya
            ]);

        //redirect to index
        return redirect()->route('postn.index')->with(['success' => 'Data Berhasil Diubah!']);
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
        $postn = Postn::findOrFail($id);

        //delete post
        $postn->delete();

        //redirect to index
        return redirect()->route('postn.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}