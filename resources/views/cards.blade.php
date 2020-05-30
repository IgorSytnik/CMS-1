@extends('layouts.tmplt')

@section('title-block')
Landing Page
@endsection

@section('content')

<!-- список мотоциклов -->
<div class="row">
    @foreach ($motos as $moto)

    @if ( $moto != null)
    <div class="col-lg-6">
        <a href="{{ route('motobuying', $moto->id)}}" id="ref">
            <div class="card">
                <img src="{{ $moto->image }}" alt="Avatar">
                <div class="container">
                    <h4><b>{{ $moto->name }}</b></h4>
                    <p>Ціна: {{ $moto->price }} грн</p>
                </div>
            </div>
        </a>
    </div>
    @endif
    @endforeach

</div>

@endsection