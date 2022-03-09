<form action="{{ route($route, $id) }}" method="post" id="delete_form_{{ $id }}">
  @csrf
  @method("delete")

  <button type="submit">Elimina</button>
</form>