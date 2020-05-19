@extends('layouts.keijibanapp')

@section('title','12ちゃんねる')

@section('menubar')
    管理者ページ
@endsection

@section('content')
    @if ($item != null)
        <tr>
            <th>検索</th>>
            <td>
                <form action="/admin_index" method="post">
                    <input type="text" name="searchname">
                    <input type="subimit" name="search" value="検索">
                </form>
            </td>
        @foreach($item as $items)
            @csrf
            <tr>
                <th>
                    <form method="post" name="form1" action="/admin_index/admin_thread">
                        <input type="hidden" name="thread_ID" value={{$items->id}}>
                        <input type = "submit" value="{{$items->name}}">
                    </form>
                </th>
                <th>
                    <form action="/admin_index" method="post">
                        <input type =hidden name="thread_ID" value="{{$items->id}}">
                        <input type="submit" name="delete" value="削除">
                    </form>
                </th>
            </tr>
            </table>
        @endforeach
    @endif
@endsection


@section('footer')
    copyright 2020 group b.
@endsection
