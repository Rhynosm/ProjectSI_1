<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Posta;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class PostaController extends Controller
{
    /**
    * index
    *
    * @return View
    */
   public function index(): View
   {
       //get posts
       $posta = Posta::all();

       //render view with posts
       return view('posta.index')->with('posta',$posta);
   }
   public function view_pdf()
    {
        $posta = Posta::all();
        $pdf = Pdf::loadView('pdf.posta', ['posta' => $posta]);
        return $pdf->download('posta.pdf');
    }
     /**
     * index
     *
     * @return View
     */
    public function create(): View
    {
        return view('posta.create');
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
            'tglhadir'     => 'required|min:1',
            'waktuhadir'     => 'required|min:1'
        ]);

        //create post
        Posta::create([
            'tglhadir'     => $request->tglhadir,
            'waktuhadir'     => $request->waktuhadir
        ]);

        //redirect to index
        return redirect()->route('posta.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $posta = Posta::findOrFail($id);

        //render view with post
        return view('posta.show', compact('posta'));
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
        $posta = Posta::findOrFail($id);

        //render view with post
        return view('posta.edit', compact('posta'));
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
            'tglhadir'     => 'required|min:1',
            'waktuhadir'     => 'required|min:1'
        ]);

        //get post by ID
        $posta = Posta::findOrFail($id);

            $posta->update([
                'tglhadir'     => $request->tglhadir,
                'waktuhadir'     => $request->waktuhadir,
            ]);

        //redirect to index
        return redirect()->route('posta.index')->with(['success' => 'Data Berhasil Diubah!']);
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
        $posta = Posta::findOrFail($id);

        //delete post
        $posta->delete();

        //redirect to index
        return redirect()->route('posta.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
