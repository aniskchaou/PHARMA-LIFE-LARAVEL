<?php

namespace App\Http\Controllers\admin;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $cats = Employee::all();  
  
        return view('admin.pages.employee.index', compact('cats'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.employee.create');  
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

  
        $cat = new Employee;  
        $cat->name =  $request->get('name');
        $cat->code =  $request->get('code');
        $cat->date =  $request->get('date');
        $cat->address =  $request->get('address');
        $cat->telephone =  $request->get('telephone');
        $cat->email =  $request->get('email');
        $cat->salarytype =  $request->get('salarytype');


        $cat->save(); 
        return redirect('employee/index');
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
        $cat= Employee::find($id);  
     return view('admin.pages.employee.edit', compact('cat'));  
        
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
  
        $cat = Employee::find($id);  
                $cat->name =  $request->get('name');
        $cat->date =  $request->get('date');
        $cat->address =  $request->get('address');
        $cat->telephone =  $request->get('telephone');
        $cat->email =  $request->get('email');
        $cat->salarytype =  $request->get('salarytype');    
        $cat->save();
        return redirect('employee/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=Employee::find($id);  
        $cat->delete(); 
        return redirect('employee/index');
    }
}
