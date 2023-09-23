<?php

namespace App\Http\Controllers\admin;

use App\Models\Expense;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExpenseController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $cats = Expense::all();  
  
        return view('admin.pages.expense.index', compact('cats'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.expense.create');  
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
  
        $cat = new Expense;  
        $cat->name =  $request->get('name');
        $cat->supplier =  $request->get('supplier');
        $cat->date =  $request->get('date');
        $cat->amount =  $request->get('amount');
        $cat->note =  $request->get('note');
        $cat->save(); 
        return redirect('expense/index');
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
        $cat= Expense::find($id);  
     return view('admin.pages.expense.edit', compact('cat'));  
        
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
  
        $cat = Expense::find($id);  
                $cat->name =  $request->get('name');
        $cat->supplier =  $request->get('supplier');
        $cat->date =  $request->get('date');
        $cat->amount =  $request->get('amount');
        $cat->note =  $request->get('note');   
        $cat->save();
        return redirect('expense/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=Expense::find($id);  
        $cat->delete(); 
        return redirect('expense/index');
    }
}
