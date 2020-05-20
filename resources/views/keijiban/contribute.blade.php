@extends('layouts.keijibanapp')

@section('title','12ちゃんねる')

@section('content')

    <form action="/keijiban/contribute" method="post">
        @csrf
        <input type="hidden" name="thread_name" value="{{$thread_name}}">
        <input type="text" name="text" value="{{$content ?? ''}}">
        <input type="submit" value="投稿する">
    </form>
    <br>
    <a href="/keijiban">戻る</a>
    <br>
@endsection

@section('footer')
    copyright 2020 groupB.
@endsection
