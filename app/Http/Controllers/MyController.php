<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
  public function test()
  {
    $title = "This is titledd";
    $subtitle = "This subtitle";
    return view('test.test',['title' => $title,'subtitle' => $subtitle]);


  }
  public function index()
  {
    $title = "This is titledd";
    $subtitle = "This subtitle";
    return view('test.index',['title' => $title,'subtitle' => $subtitle]);


  }
}
