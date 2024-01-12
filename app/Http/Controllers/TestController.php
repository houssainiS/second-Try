<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
   public function firstAction(){
    $localname="houssaini";
    $books= ["PHP","JAVA","CSS"];

    return view('test',['name'=>$localname,'books'=>$books]);

   }
}
 