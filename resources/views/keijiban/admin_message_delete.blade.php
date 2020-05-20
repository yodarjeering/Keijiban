@extends('layouts.keijibanapp')

@section('title','12ちゃんねる')

@section('content')
    <form action="/admin_message_delete" method="post">
        @csrf
        削除しますか。<br><br>
        <input type="hidden" name="id" value="{{$items->id}}">
        {{$items->content}}
        <br>
        <input type="submit" value="はい">
    </form>
    <button type="戻る" onclick="history.back()">戻る</button>
@endsection


@section('footer')
    copyright 2020 group b.
@endsection
