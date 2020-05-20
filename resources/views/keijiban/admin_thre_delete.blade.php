@extends('layouts.keijibanapp')

@section('title','12ちゃんねる')

@section('menubar')
    管理者ページ
@endsection

@section('content')
    <form action="/keijiban/admin_thre_delete" method="post">
        @csrf
        削除しますか。<br><br>
        <input type="hidden" name="id" value="{{$items->id}}">
        {{$items->name}}
        <br>
        <input type="submit" value="はい">
    </form>
    <br>
    <button onclick="location.href='/keijiban/admin_index'">戻る</button>    <br>
@endsection


@section('footer')
    copyright 2020 group b.
@endsection
