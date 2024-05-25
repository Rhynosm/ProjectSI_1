<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Postp;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class PostpController extends Controller
{
    /**
    * index
    *
    * @return View
    */
   public function index(): View
   {
       //get posts
       $postp = Postp::all();

       //render view with posts
       return view('postp.index')->with('postp',$postp);
   }
   public function view_pdf()
    {
        $postp = Postp::all();
        $pdf = Pdf::loadView('pdf.postp', ['postp' => $postp]);
        return $pdf->download('postp.pdf');
    }
     /**
     * index
     *
     * @return View
     */
    public function create(): View
    {
        return view('postp.create');
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
            'password'     => 'required|min:1',
            'username'     => 'required|min:1'
        ]);

        //create post
        Postp::create([
            'password'     => $request->password,
            'username'     => $request->username
        ]);

        //redirect to index
        return redirect()->route('postp.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $postp = Postp::findOrFail($id);

        //render view with post
        return view('postp.show', compact('postp'));
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
        $postp = Postp::findOrFail($id);

        //render view with post
        return view('postp.edit', compact('postp'));
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
            'password'     => 'required|min:1',
            'username'     => 'required|min:1'
        ]);

        //get post by ID
        $postp = Postp::findOrFail($id);

            $postp->update([
                'password'     => $request->password,
                'username'     => $request->username,
            ]);

        //redirect to index
        return redirect()->route('postp.index')->with(['success' => 'Data Berhasil Diubah!']);
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
        $postp = Postp::findOrFail($id);

        //delete post
        $postp->delete();

        //redirect to index
        return redirect()->route('postp.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
