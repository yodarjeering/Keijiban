@extends('layouts.keijibanapp')

@section('title','12ちゃんねる')

@section('content')
    @if(isset($items))

        <h2>{{$thread_name}}</h2>

        <ul>
            @foreach($items as $item)
                <li>
                    <div>{{$item->getData()}}</div>
                </li>
            @endforeach
        </ul>
    @endif

    <form action="/keijiban/thre" method="post">
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
