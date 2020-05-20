@extends('layouts.keijibanapp')

@section('title', '12ちゃんねる')

@section('content')
    <form action="/keijiban/admin_thre" method="post">
        @csrf
        <input type="text" name="input" value ="{{$input}}">
        <input type="submit" value="find">
    </form>

    <h2>{{$thread->name}}</h2>
    @if(isset($items))
        <table>
            <tr><th>data</th></tr>
            @php
                $number = 1;
            @endphp
            @foreach($items as $item)
                <tr>
                    <a href="/keijiban/admin_message_delete?message_id={{$item->id}}">
                        <td>$number++ . ': '{{$item->getData()}}</td></a>
                </tr>
            @endforeach
        </table>
    @endif
    <a href="/keijiban">戻る</a>
@endsection

@section('footer')
    copyright 2020 groupB.
@endsection
