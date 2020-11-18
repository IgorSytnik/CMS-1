@extends('layouts.tmplt')

@section('title-block')
{{ $caption }}
@endsection

@section('content')
<div class="list-grad">
    <div class="list-both">
        <div class="list-left">
            @if($code != 'Bruh')
                <a href="/{{ Request::segment(1) }}/{{ $parent }}/{{ $lan }}"><-

                @if($lan == 'en')
                Back
                @else
                Назад
                @endif

                </a>
            @endif
            @for($i = 0; $i < count($children); $i++)
                <a class="list-el" href="/{{ Request::segment(1) }}/{{ $children[$i]->code }}/{{ $lan }}">

                @if($lan == 'ua')
                {{ $children[$i]->caption_ua }}
                @elseif($lan == 'en')
                {{ $children[$i]->caption_en }}
                @else
                {{ $children[$i]->caption_ru }}
                @endif
                
                </a>
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