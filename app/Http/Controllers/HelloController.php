<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redis;

class HelloController extends Controller
{
  public function index(Request $request)
  {
    return view('hello.index');
  }

  public function post(Request $request)
  {
    return view('hello.index', ['msg' => $request->msg]);
  }
}
