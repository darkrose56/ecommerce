<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    function create(){
        return view('employee.create');
    }
    function store(Request $request){
        Employee::create($request->all());
    }

    function index(){
        $data=Employee::all();
        return view('employee.index',compact('data'));
//        dd($data);
    }
}
