<?php

namespace App\Http\Controllers\admin;

use App\Models\MedecineBrand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MedicineBrandController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $cats = MedecineBrand::all();  
  
        return view('admin.pages.medicinebrand.index', compact('cats'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.medicinebrand.create');  
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
  
        $cat = new MedecineBrand;  
        $cat->name =  $request->get('name');
        $cat->save(); 
        return redirect('medecinebrand/index');
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
        $cat= MedecineBrand::find($id);  
         //$cat->name =  $request->get('name');
        //$cat->save(); 
     return view('admin.pages.medecinebrand.edit', compact('cat'));  
        
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
  
        $cat = MedecineBrand::find($id);  
        $cat->name =  $request->get('name');    
        $cat->save();
        return redirect('medecinebrand/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=MedecineBrand::find($id);  
        $cat->delete(); 
        return redirect('medecinebrand/index');
    }
}
