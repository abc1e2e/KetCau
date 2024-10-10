<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalInfomationController extends Controller
{
    public function index(){
        return view('legal_information');
    }
}
