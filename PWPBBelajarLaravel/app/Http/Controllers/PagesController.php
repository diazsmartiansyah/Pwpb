<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

   public function index(){
        return view('admin.index');
   }

   public function chart(){
        return view('admin.charts');
   }

   public function table(){
        return view('admin.tables');
   }


}
