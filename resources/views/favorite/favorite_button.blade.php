    @if (Auth::user()->is_favorite($micropost->id))
        {{-- unfavoriteボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-danger "]) !!}
        {!! Form::close() !!}
    @else
        {{-- favoriteボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-primary "]) !!}
        {!! Form::close() !!}
    @endif
