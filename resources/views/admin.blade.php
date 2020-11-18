@extends('layouts.tmplt-admin')

@section('title-block')
admin-panel
@endsection

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <!-- <div class="container"> -->
        @if( $parent !=  '_top')
        <form action="/page" method="GET">
            <input type="hidden" value="{{$grandparent}}" name="parent">
            <input type="submit" value="back">
        </form>
        @endif
        <div class="admin-table">
            <div class="admin-row top-row">
                <div class="col-1 table-line-side">
                    id
                </div>
                <div class="col-2 table-line-side">
                    code
                </div>
                <div class="col-1 table-line-side">
                    caption_ru
                </div>
                <div class="col-1 table-line-side">
                    caption_ua
                </div>
                <div class="col-1 table-line-side">
                    caption_en
                </div>
                <div class="col-1 table-line-side">
                    order_by
                </div>
                <div class="col-3 table-date">
                    <div class="col-6 table-line-side">
                        created_at
                    </div>
                    <div class="col-6 table-line-side">
                        updated_at
                    </div>
                </div>
                <div class="col-2">
                </div>
            </div>
            <?php $c = 0 ?>
            @for($i = 0; $i < count($page); $i++)
            @if( $page[$i]->parent ==  $parent)
                <?php 
                if($c&1) { echo '<div class="admin-row">'; } 
                else { echo '<div class="admin-row-grey">'; }
                $c++;
                ?>
                    <div class="col-1 table-line-side admin-id">
                        {{ $page[$i]->id }} 
                        <form action="/page" method="GET">
                            <input type="hidden" value="{{$page[$i]->code}}" name="parent">
                            <input type="submit" value="tree">
                        </form>
                    </div>
                    <div class="col-2 table-line-side">
                        /{{ $page[$i]->code }} 
                    </div>
                    <div class="col-1 table-line-side">
                        {{ $page[$i]->caption_ru }} 
                    </div>
                    <div class="col-1 table-line-side">
                        {{ $page[$i]->caption_ua }} 
                    </div>
                    <div class="col-1 table-line-side">
                        {{ $page[$i]->caption_en }} 
                    </div>
                    <div class="col-1 table-line-side">
                        {{ $page[$i]->order_by }}
                    </div>
                    <div class="col-3 table-date">
                        <div class="col table-line-side">
                            {{ $page[$i]->created_at }} 
                        </div>
                        <div class="col table-line-side">
                            {{ $page[$i]->updated_at }} 
                        </div>
                    </div>
                    <div class="row col-2 buttons">
                        <form class="column justify-content-center" action="/page/{{ $page[$i]->code }}" method="GET">
                            <p class=""><input type="submit" value="show"></p>
                        </form>
                        <form class="column justify-content-center" action="/page/{{ $page[$i]->code }}/edit" method="GET">
                            <p class=""><input type="submit" value="edit"></p>
                        </form>
                        <form class="column justify-content-center" action="/page/{{ $page[$i]->code }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <p class=""><input type="submit" value="delete" onclick="return confirm('Are you sure you want to delete the \'{{ $page[$i]->code }}\' page?')"></p>
                        </form>
                    </div>
                </div>
            @endif
            @endfor
            <div class="col admin-row bot-row">
                <div class="col-2">
                    <form class="column justify-content-center" action="/page/create" method="GET">
                        <input type="hidden" value="{{$parent}}" name="parent">
                        <p class="col-4"><input type="submit" value="create"></p>
                    </form>
                </div>
                @if($parent !=  '_top')
                <div class="col-2 admin-order">
                    <a>order_by:</a>
                    <form class="col-6 justify-content-center" action="/page/{{ $parent }}" method="POST">
                        @method('PUT')
                        @csrf
                        <input type="hidden" value="do" name="do">
                        <input type="hidden" value="created_at" name="order_by">
                        <p class=""><input type="submit" value="created_at"></p>
                    </form>
                    <form class="col-6 justify-content-center" action="/page/{{ $parent }}" method="POST">
                        @method('PUT')
                        @csrf
                        <input type="hidden" value="do" name="do">
                        <input type="hidden" value="caption" name="order_by">
                        <p class=""><input type="submit" value="caption"></p>
                    </form>
                </div>
                @endif
            </div>
        </div>
    <!-- </div> -->
</body>
</html>
@endsection