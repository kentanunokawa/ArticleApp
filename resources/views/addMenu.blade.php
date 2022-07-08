<link rel="stylesheet" href="{{ asset('css/addMenu.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

@extends('layouts.app')

@section('content')
<div class="rapper">
    <div class="rapper_inner">
        <h4 class="add_menu_title"><span class="bi bi-pencil-square"></span>  新規お料理追加</h4>
        <form action="{{ route('store') }}" method="POST" class="form_group">
            @csrf
            <div class="genre_area">
                <div class="genre_area_inner1">
                    <div class="genre1">種類①：</div>
                    <select class="genre_pulldown" name="genre1">
                        @foreach ($genre1 as $genre)
                            <option value="{{ $genre }}">{{ $genre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="genre_area_inner2">
                    <div class="genre2">種類②：</div>
                    <select class="genre_pulldown" name="genre2">
                        @foreach ($genre2 as $genre)
                            <option value="{{ $genre }}">{{ $genre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="menu_area">
                <div class="menu_name"><span class="bi bi-flower3"></span> メニュー名称：</div>
                <input name="menu" type="text" class="menu_input" placeholder="お料理名を書いてね">
            </div>

            <div class="recipe_area">
                <div class="recipe"><span class="bi bi-flower3"></span> 作り方：</div>
                <textarea name="recipe" class="recipe_input" placeholder="作り方を書いてね"></textarea>
            </div>

            <div class="items">
                <a href="{{ route('top') }}"><input class="cancel_button" type="button"  value="キャンセル"></a>
                <input class="regist_button" type="submit" value="登録">
            </div>
        </form>
    </div>
</div>
@endsection
