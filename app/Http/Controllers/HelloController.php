<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redis;

class HelloController extends Controller
{
  public function index()
  {
    $data = [
      ['name'=>'たろう', 'mail'=>'taro@com'],
      ['name'=>'はなこ', 'mail'=>'hanako@com'],
      ['name'=>'さちこ', 'mail'=>'sachiko@com']
    ];
    return view('hello.index', ['data' => $data]);
  }

  public function post(Request $request)
  {
    return view('hello.index', ['msg' => $request->msg]);
  }
}
