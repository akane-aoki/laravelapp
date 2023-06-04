<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redis;

class HelloController extends Controller
{
  public function index($id='zero') {
    $data = [
      'msg'=>'これはコントローラから渡されたメッセージだよ',
      'id'=>$id
    ];
    return view('hello.index', $data);
  }
}