<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Postq;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class PostqController extends Controller
{
    /**
    * index
    *
    * @return View
    */
   public function index(): View
   {
       //get posts
       $postq = Postq::all();

       //render view with posts
       return view('postq.index')->with('postq',$postq);
   }
   public function view_pdf()
   {
       $postq = Postq::all();
       $pdf = Pdf::loadView('pdf.postq', ['postq' => $postq]);
       return $pdf->download('postq.pdf');
   }
     /**
     * index
     *
     * @return View
     */
    public function create(): View
    {
        return view('postq.create');
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
            'pendtera'     => 'required|min:1',
            'namainstitusi'     => 'required|min:1',
            'tahunlulus'     => 'required|min:1',
            'gpa'     => 'required|min:1'
        ]);

        //create post
        Postq::create([
            'pendtera'     => $request->pendtera,
            'namainstitusi'     => $request->namainstitusi,
            'tahunlulus'     => $request->tahunlulus,
            'gpa'     => $request->gpa
        ]);

        //redirect to index
        return redirect()->route('postq.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $postq = Postq::findOrFail($id);

        //render view with post
        return view('postq.show', compact('postq'));
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
        $postq = Postq::findOrFail($id);

        //render view with post
        return view('postq.edit', compact('postq'));
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
            'pendtera'     => 'required|min:1',
            'namainstitusi'     => 'required|min:1',
            'tahunlulus'     => 'required|min:1',
            'gpa'     => 'required|min:1'
        ]);

        //get post by ID
        $postq = Postq::findOrFail($id);

            $postq->update([
                'pendtera'     => $request->pendtera,
                'namainstitusi'     => $request->namainstitusi,
                'tahunlulus'     => $request->tahunlulus,
                'gpa'     => $request->gpa
            ]);

        //redirect to index
        return redirect()->route('postq.index')->with(['success' => 'Data Berhasil Diubah!']);
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
        $postq = Postq::findOrFail($id);

        //delete post
        $postq->delete();

        //redirect to index
        return redirect()->route('postq.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
