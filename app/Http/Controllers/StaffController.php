<?php

namespace App\Http\Controllers;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    function create(){
        return view('staff.create');
    }
    function store(Request $request){
        Staff::create($request->all());
    }
}
