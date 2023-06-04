<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redis;

class HelloController extends Controller
{
  public function index() {
    $data = [
      'msg'=>'これはbladeを使ったサンプルだよ',
    ];
    return view('hello.index', $data);
  }
}