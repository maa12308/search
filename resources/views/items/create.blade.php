@extends('layouts.app')

@section('content')

@if (Auth::check())
 <div class="search">
        <div class="row">
            <div class="text-center">
                {!! Form::open(['route' => 'items.create', 'method' => 'get', 'class' => 'form-inline']) !!}
                    <div class="form-group">
                        {!! Form::text('keyword', $keyword, ['class' => 'form-control input-lg', 'placeholder' => 'キーワードを入力', 'size' => 40]) !!}
                    </div>
                    {!! Form::submit('商品を検索', ['class' => 'btn btn-success btn-lg']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    

    @include('items.items', ['items' => $items])
 @else
 
 <div class="center jumbotron">
            <div class="text-center">
                <h1></h1>
                <a href="{{ route('signup.get') }}" class="btn btn-success btn-lg">search</a
            </div>
    </div>
 
 @endif
    
@endsection