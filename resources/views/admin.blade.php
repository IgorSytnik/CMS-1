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
    <div class="container">
        <div class="admin-table">
            <div class="admin-row top-row">
                <div class="col-1 table-line-side">
                    id
                </div>
                <div class="col-1 table-line-side">
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
                <div class="col-2 table-line-side">
                    created_at
                </div>
                <div class="col-2 table-line-side">
                    updated_at
                </div>
                <div class="col-3">
                </div>
            </div>
            @for($i = 0; $i < count($page); $i++)
                @if($i&1)
                    <div class="admin-row">
                @else
                    <div class="admin-row-grey">
                @endif
                    <div class="col-1 table-line-side">
                        {{ $page[$i]->id }} 
                    </div>
                    <div class="col-1 table-line-side">
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
                    <div class="col-2 table-line-side">
                        {{ $page[$i]->created_at }} 
                    </div>
                    <div class="col-2 table-line-side">
                        {{ $page[$i]->updated_at }} 
                    </div>
                    <div class="row col-3 buttons">
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
            @endfor
            <div class="col admin-row bot-row">
                <form action="/page/create" method="GET">
                    <p class="col-4"><input type="submit" value="create"></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
@endsection