@extends('layouts.app')

@section('page_title', 'Detail')

@section('content')
<div class="detail_container">
    <div class="left_col">
        <a class="back_main_btn" href="/dashboard">Back</a>
    </div>
    <div class="right_col">
    <form action="">
        <button type="button"><i class="trash-can far fa-trash-alt"></i></button>
    </form>
    </div>
</div>


@endsection