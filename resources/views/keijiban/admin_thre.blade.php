@extends('layouts.keijibanapp')

@section('title', '12ちゃんねる')

@section('content')
    <form action="/keijiban/admin_thre" method="post">
        @csrf
        <input type="text" name="input" value ="{{$input ?? ''}}">
        <input type="submit" value="find">
    </form>

    <h2>{{$thread->name}}</h2>
    @if(isset($items))
        @php
            $number = 1;
        @endphp
        <table>
            <tr><th>data</th></tr>
            @foreach($items as $item)
                <tr>
                        <td><a href="/keijiban/admin_message_delete?id={{$item->id}}">{{$number++}}: {{$item->getData()}}</a></td>
                </tr>
            @endforeach
        </table>
    @endif
    <a href="/keijiban/admin_index">戻る</a>
@endsection

@section('footer')
    copyright 2020 groupB.
@endsection
