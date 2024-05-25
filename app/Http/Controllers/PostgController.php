<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Postg;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class PostgController extends Controller
{
    /**
    * index
    *
    * @return View
    */
   public function index(): View
   {
       //get posts
       $postg = Postg::all();

       //render view with posts
       return view('postg.index')->with('postg',$postg);
   }
   public function view_pdf()
    {
        $postg = Postg::all();
        $pdf = Pdf::loadView('pdf.postg', ['postg' => $postg]);
        return $pdf->download('postg.pdf');
    }
     /**
     * index
     *
     * @return View
     */
    public function create(): View
    {
        return view('postg.create');
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
            'gaji'     => 'required|min:1',
            'grade'     => 'required|min:1'
        ]);

        //create post
        Postg::create([
            'gaji'     => $request->gaji,
            'grade'     => $request->grade
        ]);

        //redirect to index
        return redirect()->route('postg.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $postg = Postg::findOrFail($id);

        //render view with post
        return view('postg.show', compact('postg'));
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
        $postg = Postg::findOrFail($id);

        //render view with post
        return view('postg.edit', compact('postg'));
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
            'gaji'     => 'required|min:1',
            'grade'     => 'required|min:1'
        ]);

        //get post by ID
        $postg = Postg::findOrFail($id);

            $postg->update([
                'gaji'     => $request->gaji,
                'grade'     => $request->grade,
            ]);

        //redirect to index
        return redirect()->route('postg.index')->with(['success' => 'Data Berhasil Diubah!']);
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
        $postg = Postg::findOrFail($id);

        //delete post
        $postg->delete();

        //redirect to index
        return redirect()->route('postg.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
