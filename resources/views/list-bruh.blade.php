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
                        <div class="alias-all">
                            @foreach ($aliases as $alias)
                                <div class="alias">
                                    <a class="" href="/{{ Request::segment(1) }}/{{ $alias->code }}/{{ $lan }}">
                                        <?php
                                            if($lan == 'ua') {
                                                echo $alias->caption_ua;
                                                echo $alias->main_content_ua;
                                            } elseif($lan == 'en') {
                                                echo $alias->caption_en;
                                                echo $alias->main_content_en;
                                            } else {
                                                echo $alias->caption_ru;
                                                echo $alias->main_content_ru;
                                            }
                                        ?>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection