<link rel="stylesheet" href="{{ asset('css/top.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

@extends('layouts.app')

@section('content')
<div class="rapper">
    <div class="head_area">
        <h6><span class="bi bi-search"></span>検索</h6>
        <div class="head_area-flex">
            <form class="search" action="" method="POST" >
                <input type="text">
                <input type="submit" value="絞り込む">
            </form>
            <img src="" alt="">
        </div>
    </div>
    <div class="main_area">
        <div class="main_area-flex">
            <h4 class="title">お料理一覧</h4>
            <button class="create_button"><span class="bi bi-pencil-fill"></span> 新規追加</button>
        </div>
        <table class="main_table">
            <tr>
                <th>ID</th>
                <th class="main_table-data">種類①</th>
                <th class="main_table-data">種類②</th>
                <th>メニュー</th>
                <th>詳細</th>
                <th>作成日</th>
                <th>更新日</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
</div>
@endsection
@section('contentFotter')
@endsection
