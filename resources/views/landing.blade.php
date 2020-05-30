@extends('layouts.tmplt')

@section('title-block')
Landing Page
@endsection

@section('content')

<!-- лендинг -->
<!-- по первому объекту -->
<div class="row frstsection">
    <div class="col-lg-8">
        <a href="{{ route('motobuying', $motos[0]->id)}}">
            <div class="landingIMG-motocycles aspect-ratio-3-5">
                <img src="{{ $motos[0]->image }}" class="foto1">
            </div>
        </a>
    </div>
    <div class="col-lg-4 scndsection">
        <a href="{{ route('motosnews', $news[0]->id)}}">
            <div class="foto2 landingIMG-motocycles aspect-ratio-3-5">
                <img src="{{ $news[0]->image }}">
            </div>
        </a>
        <a href="{{ route('motosacc', $accs[0]->id)}}">
            <div class="foto3 landingIMG-motocycles aspect-ratio-3-5">
                <img src="{{ $accs[0]->image }}">
            </div>
        </a>
    </div>
</div>

<div class="section">Аксесуари</div>

<!-- 3 аксесуара и ссылка на страницу аксесуаров -->
<div class="row">

    @for ($i = 0; $i < 3; $i++) @if ( $accs[$i] !=null) <div class="col-lg-3">
        <a href="{{ route('motosacc', $accs[$i]->id)}}">
            <div class="foto2 landingIMG-motocycles aspect-ratio-1-1">
                <img src="{{ $accs[$i]->image }}">
            </div>
        </a>
</div>
@endif
@endfor
<div class="col-lg-3 more">
    <a href="/accs">
        <div class="foto2 landingIMG-motocycles aspect-ratio-1-1">
            <img src="/images/rectangle1.png">
        </div>
    </a>
</div>
</div>


<!-- первый мотоцикл -->
@if ( $motos[0] != null)
<div class="section">НОВИНКИ</div>

<div class="col-lg-12">
    <a href="{{ route('motobuying', $motos[0]->id)}}">
        <div class="landingIMG-motocycles aspect-ratio-3-5">
            <img src="{{ $motos[0]->image }}">
        </div>
    </a>
</div>
@endif

<!-- список номвостей и мотоциклов по три -->
<div class="section">Останні новини</div>
<!-- костыль для вывода линии... -->
@if ( $news[0] != null)
<div class="row">

    <div class="col-lg-4">
        <a href="{{ route('motosnews', $news[0]->id)}}">
            <div class="landingIMG-motocycles aspect-ratio-3-5">
                <img src="{{ $news[0]->image }}" alt="Avatar" style="width:100%">
            </div>
        </a>
    </div>
    <div class="col-lg-8">
        <a href="{{ route('motosnews', $news[0]->id)}}" class="motoLand">
            <h5>{{ $news[0]->name }}</h5>
            <p>
                {{ $news[0]->intro }}
            </p>
        </a>
    </div>

</div>
@endif

<!-- продолжение вывода -->
@for ($i = 1; $i < 3; $i++) @if ( $news[$i] !=null) <div class="line">
    </div>
    <div class="row">

        <div class="col-lg-4">
            <a href="{{ route('motosnews', $news[$i]->id)}}">
                <div class="landingIMG-motocycles aspect-ratio-3-5">
                    <img src="{{ $news[$i]->image }}" alt="Avatar" style="width:100%">
                </div>
            </a>
        </div>
        <div class="col-lg-8">
            <a href="{{ route('motosnews', $news[$i]->id)}}" class="motoLand">
                <h5>{{ $news[$i]->name }}</h5>
                <p>
                    {{ $news[$i]->intro }}
                </p>
            </a>
        </div>

    </div>
    @endif
    @endfor

    <div class="section">МОТОЦИКЛИ</div>
    <!-- костыль для вывода линии... -->
    @if ( $motos[0] != null)
    <div class="row">

        <div class="col-lg-4">
            <a href="{{ route('motobuying', $motos[0]->id)}}">
                <div class="landingIMG-motocycles aspect-ratio-3-5">
                    <img src="{{ $motos[0]->image }}" alt="Avatar" style="width:100%">
                </div>
            </a>
        </div>
        <div class="col-lg-8">
            <a href="{{ route('motobuying', $motos[0]->id)}}" class="motoLand">
                <h5>{{ $motos[0]->name }}</h5>
                <p>Ціна: {{ $motos[0]->price }} грн
                </p>
            </a>
        </div>

    </div>
    @endif

    <!-- продолжение вывода -->
    @for ($i = 1; $i < 3; $i++) @if ( $motos[$i] !=null) <div class="line">
        </div>
        <div class="row">

            <div class="col-lg-4">
                <a href="{{ route('motobuying', $motos[$i]->id)}}">
                    <div class="landingIMG-motocycles aspect-ratio-3-5">
                        <img src="{{ $motos[$i]->image }}" alt="Avatar" style="width:100%">
                    </div>
                </a>
            </div>
            <div class="col-lg-8">
                <a href="{{ route('motobuying', $motos[$i]->id)}}" class="motoLand">
                    <h5>{{ $motos[$i]->name }}</h5>
                    <p>Ціна: {{ $motos[$i]->price }} грн
                    </p>
                </a>
            </div>

        </div>
        @endif
        @endfor

        @endsection