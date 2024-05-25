<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Postj;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class PostjController extends Controller
{
    /**
    * index
    *
    * @return View
    */
   public function index(): View
   {
       //get posts
       $postj = Postj::all();

       //render view with posts
       return view('postj.index')->with('postj',$postj);
   }
   public function view_pdf()
    {
        $postj = Postj::all();
        $pdf = Pdf::loadView('pdf.postj', ['postj' => $postj]);
        return $pdf->download('postj.pdf');
    }
     /**
     * index
     *
     * @return View
     */
    public function create(): View
    {
        return view('postj.create');
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
            'jenis'     => 'required|min:1',
            'keterangan'     => 'required|min:1',
        ]);

        //create post
        Postj::create([
            'jenis'     => $request->jenis,
            'keterangan'     => $request->keterangan
        ]);

        //redirect to index
        return redirect()->route('postj.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $postj = Postj::findOrFail($id);

        //render view with post
        return view('postj.show', compact('postj'));
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
        $postj = Postj::findOrFail($id);

        //render view with post
        return view('postj.edit', compact('postj'));
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
            'jenis'     => 'required|min:1',
            'keterangan'     => 'required|min:1',
        ]);

        //get post by ID
        $postj = Postj::findOrFail($id);

            $postj->update([
                'jenis'     => $request->jenis,
            'keterangan'     => $request->keterangan
            ]);

        //redirect to index
        return redirect()->route('postj.index')->with(['success' => 'Data Berhasil Diubah!']);
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
        $postj = Postj::findOrFail($id);

        //delete post
        $postj->delete();

        //redirect to index
        return redirect()->route('postj.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
