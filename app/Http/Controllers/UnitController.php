<?php

namespace App\Http\Controllers;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    
    public function index(){
        $units = Unit::orderBy('id')->get();

        return view('unit.index', ['units'=>$units]);
    }
}
