@extends('layouts.tmplt')

@section('title-block')
{{ $caption }}
@endsection

@section('content')

<?php
    echo $main_content;
  ?>
@endsection