<?php

namespace App\Http\Controllers;

use App\Models\Merchandise;
use Illuminate\Http\Request;

class MerchandiseController extends Controller
{
    public function index(){
        $merchandises = Merchandise::orderBy('id')->get();

        return view('merchandise.index', ['merchandises'=>$merchandises]);
}
}
