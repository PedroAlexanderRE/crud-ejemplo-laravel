<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Empleados;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    public function index(){
        $employees=Empleados::get();
        return view('users',compact('employees'));
    }

    public function show($id){
        return view('employee', [
            'employee' => Empleados::findOrFail($id)
        ]);
        
    }

    public function store(Request $request){
        $data=request()->except('_token');

        if($request->hasFile('image')){
            $data['image']=$request->file('image')->store('images','public');
        }
        Empleados::insert($data);
       
        return redirect('users');
    }
    
    
    public function update(Request $request,$id){
        $data=request()->except('_token','_method');

        if($request->hasFile('image')){

            $employee= Empleados::findOrFail($id);

            Storage::delete('public/'.$employee->image);
            
            $data['image']=$request->file('image')->store('images','public');
        }
        Empleados::where('id','=',$id)->update($data);
        return redirect('users');
    }
    
    public function destroy($id){
        Empleados::destroy($id);
        return redirect('users');
    }
}
