<?php

namespace App\Http\Controllers\admin;

use App\Models\Medecine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MedicineController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $cats = Medecine::all();  
  
        return view('admin.pages.medicine.index', compact('cats'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.medicine.create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([  
            'name'=>'required',  
        ]);  
  
        $cat = new Medecine;  

        $cat->name =  $request->get('name');
        $cat->code =  $request->get('code');
        $cat->brand =  $request->get('brand');
        $cat->description =  $request->get('description');
        $cat->type =  $request->get('type');
        $cat->stock =  $request->get('stock');
        $cat->category =  $request->get('category');
        $cat->barcode =  $request->get('barcode');
        $cat->expiration =  $request->get('expiration');
        $cat->unit =  $request->get('unit');
        $cat->image =  $request->get('image');
        $cat->save(); 
        return redirect('medecine/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat= Medecine::find($id);  
     return view('admin.pages.medicine.edit', compact('cat'));  
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([  
            'name'=>'required',  
             
        ]);  
  
        $cat = Medecine::find($id);  
          $cat->name =  $request->get('name');
        $cat->code =  $request->get('code');
        $cat->brand =  $request->get('brand');
        $cat->description =  $request->get('description');
        $cat->type =  $request->get('type');
        $cat->stock =  $request->get('stock');
        $cat->category =  $request->get('category');
        $cat->barcode =  $request->get('barcode');
        $cat->expiration =  $request->get('expiration');
        $cat->unit =  $request->get('unit');
        $cat->image =  $request->get('image');   
        $cat->save();
        return redirect('medecine/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=Medecine::find($id);  
        $cat->delete(); 
        return redirect('medecine/index');
    }
}
