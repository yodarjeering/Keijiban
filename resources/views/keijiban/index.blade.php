@extends('layouts.keijibanapp')

@section('title', '12ちゃんねる')

@section('menubar')
    インデックスページ
@endsection

@section('content')
    <p>スレッドの作成</p>
    <form action="/keijiban/thre" method="post">
        <label>スレッド名：</label>
        <input type="text" name="thread" size="100px">
        <input type="submit" value="作成">
    </form>

    <br>
    <br>

    <form action="/keijiban" method="post">
        <label>スレッド名：</label>
        <input type="text" name="input" value="{{$input ?? ''}}" size="100px">
        <input type="submit" value="検索">
    </form>

    @if(isset($items))
        @foreach($items as $item)
            <li>
                <div>{{$item->date}}</div>
                <a href="/keijiban/thre?thread_id={{$item->id}}">{{$item->name}}</a>
            </li>
        @endforeach
    @endif
@endsection
@section('footer')
    copyright 2020 groupB.
@endsection
