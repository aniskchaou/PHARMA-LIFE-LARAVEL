<?php

namespace App\Http\Controllers\admin;

use App\Models\Sale;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SaleController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $cats = Sale::all();  
  
        return view('admin.pages.sale.index', compact('cats'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.sale.create');  
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
  
        $cat = new Sale;  

        $cat->name =  $request->get('name');
        $cat->date =  $request->get('date');
        $cat->customer =  $request->get('customer');
        $cat->reference =  $request->get('reference');
        $cat->amount =  $request->get('amount');
        $cat->save(); 
        return redirect('sale/index');
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
        $cat= Sale::find($id);  
     return view('admin.pages.sale.edit', compact('cat'));  
        
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
  
        $cat = Sale::find($id);  
                $cat->name =  $request->get('name');
        $cat->date =  $request->get('date');
        $cat->customer =  $request->get('customer');
        $cat->reference =  $request->get('reference');
        $cat->amount =  $request->get('amount');   
        $cat->save();
        return redirect('sale/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=Sale::find($id);  
        $cat->delete(); 
        return redirect('sale/index');
    }
}
