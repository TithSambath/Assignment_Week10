<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function create(){
        return view('pages.create');
    }
    public function update(){
        return view('categories.update');
    }
    public function Delete(){
        return view('pages.delete');
    }
}
