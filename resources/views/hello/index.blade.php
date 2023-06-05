@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文のコンテンツだよ</p>
  <p>必要なだけ書けるよ</p>
@endsection

@section('footer')
copyright 2023 aoki.
@endsection
