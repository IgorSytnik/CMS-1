@extends('layouts.tmplt')

@section('title-block')
{{$page->caption}}
@endsection

@section('content')
<?php echo "$page->main_content" ?>
@endsection