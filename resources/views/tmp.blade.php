@extends('layouts.tmplt')

@section('title-block')
<<<<<<< HEAD
{{ $caption }}
@endsection

@section('content')

<?php
    echo $main_content;
  ?>
=======
{{$page->caption}}
@endsection

@section('content')
<?php echo "$page->main_content" ?>
>>>>>>> a556ca4250e0a1978785d6ef1e3998923f09c9a8
@endsection