<?php

namespace App\Http\Controllers\admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $cats = Service::all();  
  
        return view('admin.pages.service.index', compact('cats'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.service.create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /*   $request->validate([  
            'name'=>'required',  
        ]);   */
  
        $cat = new Service;  


                $cat->name = $request->get('name');
        $cat->charge =    $request->get('charge');
         $cat->description =   $request->get('description');
         $cat->payment =   $request->get('payment');
         $cat->employee =   $request->get('employee');
         $cat->customer =   $request->get('customer');
         $cat->date =   $request->get('date');
         $cat->details =   $request->get('details');    
        $cat->save(); 
        return redirect('service/index');
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
        $cat= Service::find($id);  
     return view('admin.pages.service.edit', compact('cat'));  
        
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
        /*  $request->validate([  
            'name'=>'required',  
             
        ]);   */
  
        $cat = Service::find($id);  

        $cat->name = $request->get('name');
        $cat->charge =    $request->get('charge');
         $cat->description =   $request->get('description');
         $cat->payment =   $request->get('payment');
         $cat->employee =   $request->get('employee');
         $cat->customer =   $request->get('customer');
         $cat->date =   $request->get('date');
         $cat->details =   $request->get('details');    
        $cat->save();
        return redirect('service/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=Service::find($id);  
        $cat->delete(); 
        return redirect('service/index');
    }
}
