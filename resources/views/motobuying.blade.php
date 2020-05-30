@extends('layouts.tmplt')

@section('title-block')
Landing Page
@endsection

@section('content')

<!-- страница мотоцикл -->
<div class="parallax1" id="px">
    <div class="parallax" id="px" data-img="{{ $moto->image }}">
        <h2>{{ $moto->name }}</h2>
    </div>
</div>

<!-- скрипт для фона div мотоциклa сверху -->
<script>
var list = document.querySelectorAll("div[data-img]");

for (var i = 0; i < list.length; i++) {
    var url = list[i].getAttribute('data-img');
    list[i].style.backgroundImage = "url('" + url + "')";
}
</script>

<div class="separator">ОПИС</div>
<!-- описание -->

<div class="description">
    <div class="row">

        <div class="col-lg-6">
            <p><?php echo"$moto->description" ?>
            </p>
        </div>

        <div class="col-lg-6">
            <div class="IMG-buying">
                <img src="{{ $moto->image2 }}">
            </div>
        </div>

    </div>

    <div class="separator">Ціна: {{ $moto->price }} грн</div>

    <div class="price">
        <!-- кнопка -->

        <a class="semi-transparent-button" href="#">ПРИДБАТИ</a>

    </div>
</div>

@endsection