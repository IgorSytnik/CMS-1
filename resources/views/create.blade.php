@extends('layouts.tmplt-admin')

@section('title-block')
Create page
@endsection

@section('content')
<div class="container">
  <div class="column justify-content-center">
      <form class="column justify-content-center form-group" action="/page" method="POST">
        @csrf
        <p class="col"><b>Create page</b></p>
        <div class="col-6">code
          <p><textarea class="form-control" name="code" placeholder="">@if (old('code')){{ old('code') }}@endif</textarea></p>
        </div>
        <div class="col-6">caption_ru
          <p><textarea class="form-control" name="caption_ru" placeholder="">@if (old('caption_ru')){{ old('caption_ru') }}@endif</textarea></p>
        </div>
        <div class="col-6">caption_ua
          <p><textarea class="form-control" name="caption_ua" placeholder="">@if (old('caption_ua')){{ old('caption_ua') }}@endif</textarea></p>
        </div>
        <div class="col-6">caption_en
          <p><textarea class="form-control" name="caption_en" placeholder="">@if (old('caption_en')){{ old('caption_en') }}@endif</textarea></p>
        </div>
        <div class="col">main_content_ru
          <p><textarea class="form-control" name="main_content_ru" placeholder="">@if (old('main_content_ru')){{ old('main_content_ru') }}@endif</textarea></p>
        </div>
        <div class="col">main_content_ua
          <p><textarea class="form-control" name="main_content_ua" placeholder="">@if (old('main_content_ua')){{ old('main_content_ua') }}@endif</textarea></p>
        </div>
        <div class="col">main_content_en
          <p><textarea class="form-control" name="main_content_en" placeholder="">@if (old('main_content_en')){{ old('main_content_en') }}@endif</textarea></p>
        </div>
        @if ($errors->any())
            <div class="err col-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row col-3 justify-content-around">
          <p class=""><input type="submit" value="Submit"></p>
      </form>
          <form class="" action="/page" method="GET">
            <p><input type="submit" value="cancel"></p>
          </form>
        </div>
    </div>
  </div>
</div>
@endsection
            