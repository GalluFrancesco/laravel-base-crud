@dump($comics)

@foreach($comics as $comic)
    <h4><a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></h4>
@endforeach

<hr>

<a href="{{ route('comics.create') }}"><button>Aggiungi Fumetto</button></a>