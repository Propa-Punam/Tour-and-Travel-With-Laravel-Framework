<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class newController extends Controller
{
    public function index(){
    return view('index');
}
public function faq(){
return view('faq_view');
}

}
