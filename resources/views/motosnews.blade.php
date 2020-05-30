@extends('layouts.tmplt')

@section('title-block')
Landing Page
@endsection

@section('content')

<!-- страница новость -->
<div class="parallax1" id="px">
    <div class="parallax" id="px" data-img="{{ $new->image }}">
    </div>
</div>

<script>
var list = document.querySelectorAll("div[data-img]");

for (var i = 0; i < list.length; i++) {
    var url = list[i].getAttribute('data-img');
    list[i].style.backgroundImage = "url('" + url + "')";
}
</script>

<!-- название новости -->
<div class="separator">{{ $new->name }}</div>

<div class="description">
    <div class="row">

        <div class="col-lg-12">
            <!-- текст новости -->
            <p>
                <?php echo "$new->intro" ?><br>
                <?php echo "$new->contents" ?>
            </p>
        </div>

    </div>
</div>

@endsection