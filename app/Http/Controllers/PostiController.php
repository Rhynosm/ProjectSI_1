<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Posti;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class PostiController extends Controller
{
    /**
    * index
    *
    * @return View
    */
   public function index(): View
   {
       //get posts
       $posti = Posti::all();

       //render view with posts
       return view('posti.index')->with('posti',$posti);
   }
   public function view_pdf()
    {
        $posti = Posti::all();
        $pdf = Pdf::loadView('pdf.posti', ['posti' => $posti]);
        return $pdf->download('posti.pdf');
    }
     /**
     * index
     *
     * @return View
     */
    public function create(): View
    {
        return view('posti.create');
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
            'status'     => 'required|min:1',
            'alasan'     => 'required|min:1',
            'durasi'     => 'required|min:1'
        ]);

        //create post
        Posti::create([
            'status'     => $request->status,
            'alasan'     => $request->alasan,
            'durasi'     => $request->durasi
        ]);

        //redirect to index
        return redirect()->route('posti.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $posti = Posti::findOrFail($id);

        //render view with post
        return view('posti.show', compact('posti'));
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
        $posti = Posti::findOrFail($id);

        //render view with post
        return view('posti.edit', compact('posti'));
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
            'status'     => 'required|min:1',
            'alasan'     => 'required|min:1',
            'durasi'     => 'required|min:1'
        ]);

        //get post by ID
        $posti = Posti::findOrFail($id);

            $posti->update([
                'status'     => $request->status,
                'alasan'     => $request->alasan,
                'durasi'     => $request->durasi
            ]);

        //redirect to index
        return redirect()->route('posti.index')->with(['success' => 'Data Berhasil Diubah!']);
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
        $posti = Posti::findOrFail($id);

        //delete post
        $posti->delete();

        //redirect to index
        return redirect()->route('posti.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
