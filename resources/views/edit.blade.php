@extends('layouts.tmplt-admin')

@section('title-block')
Edit page "{{ $page->code }}"
@endsection

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="container">
  <div class="column justify-content-center">
      <form class="column justify-content-center" action="/page/{{ $page->code }}" method="POST">
        @method('PUT')
        @csrf
        <p class="col-6"><b>Edit page "{{ $page->code }}"</b></p>
        <div class="col-6">code
          <p><textarea class="form-control" name="code" placeholder="">{{ $page->code }}</textarea></p>
        </div>
        <div class="col-6">caption_ru
          <p><textarea class="form-control" name="caption_ru" placeholder="">{{ $page->caption_ru }}</textarea></p>
        </div>
        <div class="col-6">caption_ua
          <p><textarea class="form-control" name="caption_ua" placeholder="">{{ $page->caption_ua }}</textarea></p>
        </div>
        <div class="col-6">caption_en
          <p><textarea class="form-control" name="caption_en" placeholder="">{{ $page->caption_en }}</textarea></p>
        </div>
        <div class="col-6">parent
          <p><textarea class="form-control" name="parent" placeholder="">{{ $page->parent }}</textarea></p>
        </div>
        <label for="order_by">Order_by</label>
        <select id="order_by" name="order_by">
          @if($page->order_by == 'created_at')
            <option value="created_at">created_at</option>
            <option value="caption">caption</option>
          @else
            <option value="caption">caption</option>
            <option value="created_at">created_at</option>
          @endif
        </select>
        <div class="col">main_content_ru
          <p><textarea class="form-control" name="main_content_ru" placeholder="">{{ $page->main_content_ru }}</textarea></p>
        </div>
        <div class="col">main_content_ua
          <p><textarea class="form-control" name="main_content_ua" placeholder="">{{ $page->main_content_ua }}</textarea></p>
        </div>
        <div class="col">main_content_en
          <p><textarea class="form-control" name="main_content_en" placeholder="">{{ $page->main_content_en }}</textarea></p>
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
            <input type="hidden" value="{{$parent}}" name="parent">
            <p><input type="submit" value="back"></p>
          </form>
        </div>
    </div>
  </div>
</div>
@endsection