<?php

namespace App\Http\Controllers\admin;

use App\Models\MedecineCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MedicineCategoryController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $cats = MedecineCategory::all();  
  
        return view('admin.pages.medicinecategory.index', compact('cats'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.medicinecategory.create');  
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
  
        $cat = new MedecineCategory;  
        $cat->name =  $request->get('name');
        $cat->save(); 
        return redirect('medecinecategory/index');
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
        $cat= MedecineCategory::find($id);  
     return view('admin.pages.medicinecategory.edit', compact('cat'));  
        
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
  
        $cat = MedecineCategory::find($id);  
        $cat->name =  $request->get('name');    
        $cat->save();
        return redirect('medecinecategory/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=MedecineCategory::find($id);  
        $cat->delete(); 
        return redirect('medecinecategory/index');
    }
}
