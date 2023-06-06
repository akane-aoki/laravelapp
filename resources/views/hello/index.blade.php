@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文のコンテンツだよ</p>
  <p>これは、<middleware>google.com</middleware>へのリンクだよ</p>
  <p>これは、<middleware>yahoo.co.jp</middleware>へのリンクだよ</p>
@endsection

@section('footer')
copyright 2023 aoki.
@endsection
