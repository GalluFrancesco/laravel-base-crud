<form action="{{ route('comics.update', $comic->id) }}" method="post">
    @csrf
    @method('put')

    <div>
      <label class="form-label">Titolo</label>
      <input type="text" class="form-control" name="title" value="{{ $comic->title }}">
    </div>

    <div>
      <label class="form-label">Copertina</label>
      <input type="text" class="form-control" name="thumb" value="{{ $comic->thumb }}">
    </div>

    <div>
      <label class="form-label">Prezzo</label>
      <input type="number" class="form-control" name="price" value="{{ $comic->price }}">
    </div>

    <div>
      <label class="form-label">Serie</label>
      <input type="text" class="form-control" name="series" value="{{ $comic->series }}">
    </div>

    <div>
      <label class="form-label">data</label>
      <input type="text" class="form-control" name="sale_date" value="{{ $comic->sale_date }}">
    </div>

    <div>
      <label class="form-label">Tipo</label>
      <input type="text" class="form-control" name="type" value="{{ $comic->type }}">
    </div>

    <div>
      <textarea name="description" class="description" cols="30" rows="10" placeholder="Descrizione">"{{ $comic->description}}"</textarea>
    </div>

    <div>
      <button type="reset">Indietro</button>
      <button type="submit">Modifica</button>
    </div>
  </form>