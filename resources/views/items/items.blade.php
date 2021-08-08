@if ($items)
    <div class="row">
        @foreach ($items as $item)
                <div class="col-md-3 col-sm-4 col-12">
            <div class="card">
                <img src="{{ $item->image_url }}" class="card-img-top" alt="カードの画像">
                    <div class="card-body">
                        <a href="{{ $item->url }}" target="_blank">{{ $item->name }}</a>
                        
                        <div class="buttons text-center">
                            @if (Auth::check())
                                @if (Auth::user()->is_wanting($item->code))
                                    {!! Form::open(['route' => 'item_user.dont_want', 'method' => 'delete']) !!}
                                        {!! Form::hidden('itemCode', $item->code) !!}
                                        {!! Form::submit('Unwant', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                @else
                                    {!! Form::open(['route' => 'item_user.want']) !!}
                                        {!! Form::hidden('itemCode', $item->code) !!}
                                        {!! Form::submit('Want', ['class' => 'btn btn-primary']) !!}
                                    {!! Form::close() !!}
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif