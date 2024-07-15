<?php

namespace App\Http\Controllers;
use App\Models\Wachingplan;
use Illuminate\Http\Request;

class WashplanController extends Controller
{

    public function index(){
        return view('admin.layouts.wachingplans');
    }
    
}
