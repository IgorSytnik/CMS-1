@extends('layouts.tmplt')

@section('title-block')
{{$caption}}
@endsection

@section('content')
<div class="grad">
    <div class="back">
        <header>
            <a id="name">{{$caption}}</a>
        </header>
        <div class="main">
            <div class="right_phot">

                @for($i = 0; $i < count($photo_category); $i++)
                <div class="pictures col-sm-4">
                    @for($j = 0; $j < count($photo_paths); $j++)
                        @if($photo_category[$i]->id == $photo_paths[$j]->cat_id)
                            <div class="pictures_main" style="background-image: url({{ $photo_paths[$j]->path }});"><a>
                                <div style="position: relative; width: 100%; background-image: linear-gradient(120deg, rgba(71, 71, 71, 0.9), rgba(71, 71, 71, 0.4)); padding: 1em;">
                                    {{ $photo_category[$i]->cat_name }}
                                </div>
                            </a></div>
                            <div class="pictures_sec">
                            @for($k = $j+1; $k < count($photo_paths); $k++)
                                @if($photo_category[$i]->id == $photo_paths[$k]->cat_id)
                                        <img src="{{ $photo_paths[$k]->path }}">
                                @endif
                            @endfor
                            </div>
                            @break;
                        @endif
                    @endfor
                </div>
                @endfor
                
            </div>
        </div>
    </div>
@endsection