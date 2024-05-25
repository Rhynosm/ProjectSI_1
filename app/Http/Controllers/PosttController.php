<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Postt;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class PosttController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $postt = Postt::all();

        //render view with posts
        //('pengguna.index')->with('pengguna', $data);
        return view('postt.index')->with('postt',$postt);
    }
    public function view_pdf()
    {
        $postt = Postt::all();
        $pdf = Pdf::loadView('pdf.postt', ['postt' => $postt]);
        return $pdf->download('postt.pdf');
    }

    /**
     * index
     *
     * @return View
     */
    public function create(): View
    {
        return view('postt.create');
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
            'namatunjangan'     => 'required|min:1',
            'keuntungan'     => 'required|min:1',
            'tanggalmulai'   => 'required|min:1',
            'tanggalberakhir' => 'required|min:1',
        ]);

        //create post
        Postt::create([
            'namatunjangan'     => $request->namatunjangan,
            'keuntungan'     => $request->keuntungan,
            'tanggalmulai'   => $request->tanggalmulai,
            'tanggalberakhir' => $request->tanggalberakhir,
        ]);

        //redirect to index
        return redirect()->route('postt.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $postt = Postt::findOrFail($id);

        //render view with post
        return view('postt.show', compact('postt'));
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
        $postt = Postt::findOrFail($id);

        //render view with post
        return view('postt.edit', compact('postt'));
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
            'namatunjangan'     => 'required|min:1',
            'keuntungan'     => 'required|min:1',
            'tanggalmulai'   => 'required|min:1',
            'tanggalberakhir' => 'required|min:1'
        ]);

        //get post by ID
        $postt = Postt::findOrFail($id);

            $postt->update([
                'namatunjangan'     => $request->namatunjangan,
                'keuntungan'     => $request->keuntungan,
                'tanggalmulai'   => $request->tanggalmulai,
                'tanggalberakhir' => $request->tanggalberakhir
            ]);

        //redirect to index
        return redirect()->route('postt.index')->with(['success' => 'Data Berhasil Diubah!']);
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
        $postt = Postt::findOrFail($id);


        //delete post
        $postt->delete();

        //redirect to index
        return redirect()->route('postt.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}