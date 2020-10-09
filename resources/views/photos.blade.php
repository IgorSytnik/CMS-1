@extends('layouts.tmplt')

@section('title-block')
Контейнер 
@endsection

@section('content')
<div class="grad">
    <div class="back">
        <header>
            <a id="name">{{$page->caption}}</a>
        </header>
        <div class="main">
            <div class="right_phot">

                <!-- @for($i = 0; $i < count($photo_category); $i++) -->
                <div class="pictures">
                    <?php 
                        for($j = 0; $j < count($photo_paths); $j++) {
                            if($photo_category[$i].id == $photo_paths[$j].cat_id) {
                                echo "
                                    <div class=\"pictures_main\" style=\"background-image: url(/images/Group_29.svg);\" data-img=\"{{ $photo_paths[$j]->path }}\">
                                        <a>{{ $photo_paths[$i]->cat_name }}</a>
                                    </div>";
                                break;
                            }
                        } 
                        for($j = 0; $j < count($photo_paths); $j++) {
                            if($photo_category[$i].id == $photo_paths[$j].cat_id) {
                                echo "
                                    <div class=\"pictures_sec\">
                                        <img src={{ $photo_paths[$j]->path }}>
                                    </div>";
                            }
                        } 
                    ?>
                    <script>
                        var list = document.querySelectorAll("div[data-img]");

                        for (var i = 0; i < list.length; i++) {
                            var url = list[i].getAttribute('data-img');
                            list[i].style.backgroundImage = "url('" + url + "')";
                        }
                    </script>
                </div>
                <!-- @endfor -->
            </div>
        </div>
    </div>

<!-- <div class="pictures">
    <div class="pictures_main" style="background-image: url(/images/Group_30.svg);">
        <a>Экзотические птицы</a>
    </div>
    <div class="pictures_sec">
        <img src="/images/Intersection_6.svg">
        <img src="/images/Intersection_5.svg">
    </div>
</div>
<div class="pictures">
    <div class="pictures_main" style="background-image: url(/images/Group_31.svg);">
        <a>Городские птицы</a>
    </div>
    <div class="pictures_sec">
        <img src="/images/Intersection_4.svg">
        <img src="/images/Intersection_3.svg">
    </div>
</div> -->


<!-- backup -->

<!-- <div class="grad">
    <div class="back">
        <header>
            <a id="name">ФОТОАРХИВ</a>
            <a style="text-align: center;">Фотографий, может, пока мало. Ждём пополнений от тебя ;)</a>
        </header>
        <div class="main">
            <div class="right_phot">
                <div class="pictures">
                    <div class="pictures_main" style="background-image: url(/images/Group_29.svg);">
                        <a>Природа</a>
                    </div>
                    <div class="pictures_sec">
                        <img src="/images/Intersection_7.svg">
                    </div>
                </div>
                <div class="pictures">
                    <div class="pictures_main" style="background-image: url(/images/Group_30.svg);">
                        <a>Экзотические птицы</a>
                    </div>
                    <div class="pictures_sec">
                        <img src="/images/Intersection_6.svg">
                        <img src="/images/Intersection_5.svg">
                        <img src="/images/Intersection_5.svg">
                        <img src="/images/Intersection_5.svg">
                        <img src="/images/Intersection_5.svg">
                        <img src="/images/Intersection_5.svg">
                        <img src="/images/Intersection_5.svg">
                        <img src="/images/Intersection_5.svg">
                        <img src="/images/Intersection_5.svg">
                        <img src="/images/Intersection_5.svg">
                        <img src="/images/Intersection_5.svg">
                        <img src="/images/Intersection_5.svg">
                        <img src="/images/Intersection_5.svg">
                        <img src="/images/Intersection_5.svg">
                        <img src="/images/Intersection_5.svg">
                        <img src="/images/Intersection_5.svg">
                        <img src="/images/Intersection_5.svg">
                        <img src="/images/Intersection_5.svg">
                        <img src="/images/Intersection_5.svg">
                        <img src="/images/Intersection_5.svg">
                        <img src="/images/Intersection_5.svg">
                        <img src="/images/Intersection_5.svg">
                        <img src="/images/Intersection_5.svg">
                        <img src="/images/Intersection_5.svg">
                        <img src="/images/Intersection_5.svg">
                        <img src="/images/Intersection_5.svg">
                        <img src="/images/Intersection_5.svg">
                        <img src="/images/Intersection_5.svg">
                        <img src="/images/Intersection_5.svg">
                        <img src="/images/Intersection_5.svg">
                    </div>
                </div>
                <div class="pictures">
                    <div class="pictures_main" style="background-image: url(/images/Group_31.svg);">
                        <a>Городские птицы</a>
                    </div>
                    <div class="pictures_sec">
                        <img src="/images/Intersection_4.svg">
                        <img src="/images/Intersection_3.svg">
                    </div>
                </div>
            </div>
        </div>
    </div> -->

@endsection