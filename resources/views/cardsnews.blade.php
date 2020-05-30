@extends('layouts.tmplt')

@section('title-block')
Landing Page
@endsection

@section('content')

<!-- список новостей -->
<!-- костыль для вывода линии -->
<!-- вывод первого елемента -->
<div class="separator">Новини</div>
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

<!-- вывод остальных -->
<?php $count=0 ?>
@foreach ($news as $new1)
<?php  if ( $count == 0 ) { $new1 = next($news); } $count++;?>
@if ( $new1 != null)
<!-- вывод линии -->
<div class="line"></div>

<div class="row">
    <div class="col-lg-4">
        <a href="{{ route('motosnews', $new1->id)}}">
            <div class="landingIMG-motocycles aspect-ratio-3-5">
                <img src="{{ $new1->image }}" alt="Avatar" style="width:100%">
            </div>
        </a>
    </div>
    <div class="col-lg-8">
        <a href="{{ route('motosnews', $new1->id)}}" class="motoLand">
            <h5>{{ $new1->name }}</h5>
            <p>
                {{ $new1->intro }}
            </p>
        </a>
    </div>
</div>
@endif
@endforeach


@endsection