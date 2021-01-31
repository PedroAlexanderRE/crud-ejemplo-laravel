<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Empleados;

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
        Empleados::insert($data);
        return redirect('users');
    }
    public function destroy($id){
        Empleados::destroy($id);
        return redirect('users');
    }
    
    public function update(Request $request,$id){
        $data=request()->except('_token','_method');
        Empleados::where('id','=',$id)->update($data);
        return redirect('users');
    }

}
