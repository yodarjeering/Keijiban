@extends('layouts.keijibanapp')

@section('title','１２ちゃんねる')


@section('content')
    @if(isset($items))
        <ul>
            @foreach($items as $item)
                <li>
                    <div>{{$item->getData()}}</div>
                </li>
            @endforeach
        </ul>
    @endif

    <form action="keijiban/messages" method="post">
        @csrf
        <input type="text" name="msg">
        <input type="submit" value="投稿する">
    </form>
@endsection

@section('footer')
    copyright 2020 groupB.
@endsection
