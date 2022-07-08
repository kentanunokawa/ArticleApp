<link rel="stylesheet" href="{{ asset('css/addMenu.css') }}">
<link href="{{ asset('js/show.js') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

@extends('layouts.app')

@section('content')
<div class="rapper">
    <div class="rapper_inner">
        <h4 class="add_menu_title"><span class="bi bi-pencil-square"></span>  作り方</h4>
        <div class="genre_area">
            <div class="genre_area_inner1">
                <div class="genre1">種類①：</div>
                <div>{{ $menu->genre1 }}</div>
            </div>
            <div class="genre_area_inner2">
                <div class="genre2">種類②：</div>
                <div>{{ $menu->genre2 }}</div>
            </div>
        </div>

        <div class="menu_area">
            <div class="menu_name"><span class="bi bi-flower3"></span> メニュー名称：</div>
            <div>{{ $menu->menu }}</div>
        </div>

        <div class="recipe_area">
            <div class="recipe"><span class="bi bi-flower3"></span> 作り方：</div>
            <div>{!! nl2br(e($menu->recipe)) !!}</div>
        </div>

        <div class="items">
            <a href="{{ route('delete',$menu->id) }}"><button class="delete_button" value="">削除</button></a>
            <a href="{{ route('edit',$menu->id) }}"><button class="edit_btn" value="">編集</button></a>
        </div>
    </div>
</div>
@endsection
