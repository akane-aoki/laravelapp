@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文のコンテンツだよ</p>
  <p>必要なだけ書けるよ</p>
  @component('components.message')
    @slot('msg_title')
    CAUTION!
    @endslot

    @slot('msg_content')
    これはメッセージの表示だよ
    @endslot
  @endcomponent
@endsection

@section('footer')
copyright 2023 aoki.
@endsection
