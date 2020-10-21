@extends('layouts.tmplt')

@section('title-block')
{{ $caption }}
@endsection

@section('content')
<div class="list-grad">
    <div class="list-both">
        <div class="list-left">
            @if($code != 'Bruh')
                <a href="{{ $parent }}"><-Назад</a>
            @endif
            @for($i = 0; $i < count($children); $i++)
                <a class="list-el" href="{{ $children[$i]->code }}">{{ $children[$i]->caption_ru }}</a>
            @endfor
        </div>
        <div class="list-right">
            <div class="main">
                <div class="right_cont">
                    <div class="grad_rect">
                    <?php
                        echo $main_content;
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection