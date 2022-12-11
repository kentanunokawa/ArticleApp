<link rel="stylesheet" href="{{ asset('css/top.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

@extends('layouts.app')

@section('content')
<div class="rapper">
    <div class="head_area">
        <h6><span class="bi bi-search"></span>  検索</h6>
        <div class="head_area-flex">
            <form class="search" action="{{ route('search') }}" method="GET" >
                <input type="text" name="keyword">
                <input type="submit" value="検索">
                <div>※まだ検索は実装できてない</div>
            </form>
            <img src="" alt="">
        </div>
    </div>
    <div class="main_area">
        <div class="main_area-flex">
            <h4 class="title"><span class="bi bi-book"></span>  お料理一覧</h4>
            <a href="{{ route('addMenu') }}"><button class="create_button"><span class="bi bi-plus-circle-fill"></span> 新規追加</button></a>
        </div>
        <table class="main_table">
            <tr>
                <th>id</th>
                <th class="main_table-data">種類①</th>
                <th class="main_table-data">種類②</th>
                <th>メニュー</th>
                <th>詳細</th>
                <th>作成日</th>
                <th>更新日</th>
            </tr>
            @foreach ($menus as $menu)
                <tr>
                    <td>{{ $menu->id }}</td>
                    <td>{{ $menu->genre1 }}</td>
                    <td>{{ $menu->genre2 }}</td>
                    <td>{{ $menu->menu }}</td>
                    <td><a href="{{ route('show' , $menu->id) }}">詳しく見る...</a></td>
                    <td>{{ $menu->created_at->format('Y/m/d') }}</td>
                    <td>{{ $menu->updated_at->format('Y/m/d') }}</td>
                </tr>
            @endforeach

        </table>
    </div>
    <div class="pagination">{{ $menus->links() }}</div>
</div>
@endsection
@section('contentFotter')
@endsection
