@extends('layouts.keijibanapp')

@section('title', '12ちゃんねる')

@section('content')
    <form action="/keijiban/admin_thre" method="post">
        @csrf
        <input type="hidden" name="thread_id" value="{{$thread->id}}">
        <input type="text" name="input" value ="{{$input ?? ''}}">
        <input type="submit" value="検索">
    </form>

    <h2>{{$thread->name}}</h2>
    @if(isset($items))
        @php
            $number = 1;
        @endphp
        <table>
            @foreach($items as $item)
                <tr>
                    <th>{{$number++}}: {{$item->getData()}}</th>
                    <td><a href="/keijiban/admin_message_delete?id={{$item->id}}">削除</a></td>
                </tr>
            @endforeach
        </table>
    @endif
    <br>
    <button type="戻る" onclick="history.back()">戻る</button>
    <br>
@endsection

@section('footer')
    copyright 2020 groupB.
@endsection
