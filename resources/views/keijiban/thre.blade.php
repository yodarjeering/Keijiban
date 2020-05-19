@extends('layouts.keijibanapp')

@section('title','１２ちゃんねる')


@section('content')
    <table>
        <tr><th>$thread_name</th></tr>
        @foreach($items as $item)
            <tr>
                <td>{{$item->getData()}}</td>
            </tr>
        @endforeach
    </table>
    <form action="keijiban/messages" method="post">
        <input type="text" name = "msg">
        <input type="submit" value="投稿する">
    </form>
    <tr><th>form</th></tr>
@endsection

@section('footer')
    copyright 2020 groupB.
@endsection
