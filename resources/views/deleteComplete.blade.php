<link rel="stylesheet" href="{{ asset('css/addComplete.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

@extends('layouts.app')

@section('content')
<div class="rapper">
    <div class="complete_message"><h4>お料理が削除されました！  <i class="bi bi-piggy-bank"></i><i class="bi bi-piggy-bank"></i><i class="bi bi-piggy-bank"></i>...</h4></div>
    <div class="back_link">
        <a href="{{ route('top') }}"><button class="back_index_button">一覧ページに戻る</button></a>
    </div>
</div>
@endsection
