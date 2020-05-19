@extends('layouts.keijibanapp')

@section('title', '12ちゃんねる')

@section('menubar')
    管理者用書き込み編集ページ
@endsection

@section('content')
    <form action="/keijiban/admin/messages" method="post">
        @csrf
        <input type="text" name="input" value ="{{$input}}">
        <input type="submit" value="find">
    </form>
    @if(isset($item))
    <table>
        <tr><th>data</th><th>button</th></tr>
        @php
        $nuber = 1;
        @endphp
        @foreach($items as $item)
            <tr>
                <form action="/keijiban/admin/messages" method="post">
                    <td>$number++ . ': '{{$item->content}} . {{$item->time}}</td>
                    <td><input type="submit" name="message{{$item->id}} "value="delete"></td>
                </form>
            </tr>
        @endforeach
    </table>
    @endif
    <input type="button" onclick="history.back()" value="back">
@endsection

@section('footer')
    copyright 2020 groupB.
@endsection
