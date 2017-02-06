<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index(){
      $menuSections = Section::where('level', 1)
                              ->where('topnav_back', 1)->get();
      return view('backend.index', compact('menuSections'));
    }
}
