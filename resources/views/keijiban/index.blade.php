@extends('layouts.keijibanapp')

@section('title', '12ちゃんねる')

@section('menubar')
    インデックスページ
@endsection

@section('content')
    <p>スレッドの作成</p>
    <form action="/keijiban/thre" method="post">
        <label>スレッド名：</label>
        @csrf
        <input type="hidden" name="post_type" value="create">
        <input type="text" name="thread" size="100px">
        <input type="submit" value="作成">
    </form>

    <br>
    <br>
    <form action="/keijiban" method="post">
        <label>スレッド名：</label>
        @csrf
        <input type="hidden" name="post_type" value="search">
        <input type="text" name="input" value="{{$input ?? ''}}" size="100px">
        <input type="submit" value="検索">
    </form>

    @if(isset($items))
        <ul>
            @foreach($items as $item)
                <li>
                    <div>{{$item->date}}</div>
                    <a href="/keijiban/thre?thread_id={{$item->id}}">{{$item->name}}</a>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
@section('footer')
    copyright 2020 groupB.
@endsection
