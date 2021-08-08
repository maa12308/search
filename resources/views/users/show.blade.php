@extends('layouts.app')

@section('content')
   <div class="user-profile">
        <div class="icon text-center">
            <img class="rounded img-fluid" src="{{ Gravatar::get($user->email, ['size' => 100]) }}" alt="">
        </div>
        <div class="name text-center">
            <h1>{{ $user->name }}</h1>
        </div>
        <div class="status text-center">
            <ul>
                <li>
                    <div class="status-label">WANT</div>
                    <div id="want-count" class="status-value">
                        {{ $count_want }}
                    </div>
                </li>
               
            </ul>
        </div>
    </div>
    @include('items.items', ['items' => $items])
    {!! $items->render() !!}
@endsection