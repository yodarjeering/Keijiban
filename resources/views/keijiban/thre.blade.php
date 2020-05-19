@extends('layouts.keijibanapp')

@section('title','１２ちゃんねる')


@section('content')
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

    <form action="keijiban/messages" method="post">
        @csrf
        <input type="text" name="msg">
        <input type="submit" value="投稿する">
    </form>
    <tr>
        <th>form</th>
    </tr>
@endsection

@section('footer')
    copyright 2020 groupB.
@endsection
