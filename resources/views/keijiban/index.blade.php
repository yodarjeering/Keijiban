@extends('layouts.keijibanapp')

@section('title', '12ちゃんねる')

@section('menubar')
    インデックスページ
@endsection

@section('content')
    <p>スレッドの作成</p>
    <form action="keijiban/messages" method="post">
        <label>スレッド名：</label>
        <input type="text" name="thread" value="{{old('thread')}}" size="100px">
        <input type="submit" value="作成">
    </form>



    <form action="keijiban" method="post">
        <label>スレッド名：</label>
        <input type="text" name="thread" value="{{old('thread')}}" size="100px">
        <input type="submit" value="検索">
    </form>

    @if(isset($items))
        <table>
            <tr><th>data</th><th>button</th></tr>
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
@endsection
@section('footer')
    copyright 2020 groupB.
@endsection
