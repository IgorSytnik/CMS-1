@extends('layouts.tmplt')

@section('title-block')
Landing Page
@endsection

@section('content')

<!-- страница аксесуар -->
<div class="separator">ОПИС</div>

<div class="description">
    <!-- описание -->
    <div class="row">
        <div class="col-lg-6">
            <a class="acc">
                <p>Назва:</br> <span class="font-weight-bold">{{ $acc->name }}</p>
                <p>Тип:</br> <span class="font-weight-bold">{{ $acc->type }}</p>
                <p>Розмір:</br> <span class="font-weight-bold">{{ $acc->size }}</p>
            </a>
        </div>

        <div class="col-lg-6">
            <div class="IMG-buying">
                <img src="{{ $acc->image }}">
            </div>
        </div>

    </div>

    <div class="separator">Ціна: {{ $acc->price }} грн</div>
    <!-- кнопка -->
    <div class="price">

        <a class="semi-transparent-button" href="#">ПРИДБАТИ</a>

    </div>
</div>

@endsection