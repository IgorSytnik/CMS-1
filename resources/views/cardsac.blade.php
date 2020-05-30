@extends('layouts.tmplt')

@section('title-block')
Landing Page
@endsection

@section('content')

<!-- список аксессуаров -->
<div class="row">
    @foreach ($accs as $acc)

    @if ( $acc != null)
    <div class="col-lg-6">
        <a href="{{ route('motosacc', $acc->id)}}" id="ref">
            <div class="card">
                <img src="{{ $acc->image }}" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>{{ $acc->name }}</b></h4>
                    <p>Ціна: {{ $acc->price }} грн</p>
                    <p>Розмір: {{ $acc->price }}</p>
                </div>
            </div>
        </a>
    </div>
    @endif
    @endforeach

</div>

@endsection