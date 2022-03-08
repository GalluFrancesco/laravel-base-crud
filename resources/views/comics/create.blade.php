<form action="{{ route('comics.store') }}" method="post">
    @csrf

    <div>
      <label class="form-label">Titolo</label>
      <input type="text" class="form-control" name="title">
    </div>

    <div>
      <label class="form-label">Copertina</label>
      <input type="text" class="form-control" name="thumb">
    </div>

    <div>
      <label class="form-label">Prezzo</label>
      <input type="number" class="form-control" name="price">
    </div>

    <div>
      <label class="form-label">Serie</label>
      <input type="text" class="form-control" name="series">
    </div>

    <div>
      <label class="form-label">data</label>
      <input type="text" class="form-control" name="sale_date">
    </div>

    <div>
      <label class="form-label">Tipo</label>
      <input type="text" class="form-control" name="type">
    </div>

    <div>
      <textarea name="description" class="description" cols="30" rows="10" placeholder="Descrizione"></textarea>
    </div>

    <div>
      <button type="reset">Indietro</button>
      <button type="submit">Crea</button>
    </div>
  </form>