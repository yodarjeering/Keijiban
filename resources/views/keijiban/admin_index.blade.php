@extends('layouts.keijibanapp')

@section('title','12ちゃんねる')

@section('menubar')
    管理者ページ
@endsection

@section('content')
    <form action="/keijiban/admin_index" method="post">
        <label>スレッド名：</label>
        @csrf
        <input type="hidden" name="post_type" value="search">
        <input type="text" name="input" value="{{$input ?? ''}}" size="70px">
        <input type="submit" value="検索">
    </form>

    @if(isset($items))
        <table>
            @foreach($items as $item)
                <tr>
                    <th><a href="/keijiban/admin_thre?thread_id={{$item->id}}">{{$item->name}}</a></th>
                    <td><a href="/keijiban/admin_thre_delete?id={{$item->id}}">削除</a></td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection


@section('footer')
    copyright 2020 group b.
@endsection
