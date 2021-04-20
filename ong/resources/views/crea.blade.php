@extends('disseny')

@section('content')

<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou ong
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif
      <form method="post" action="{{ route('ong.store') }}">
          <div class="form-group">
              @csrf
              <label for="cif">Cif</label>
                <input type="text" class="form-control" name="cif"/>
            </div>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom"/>
            </div>
            <div class="form-group">
                <label for="adreça">Adreça</label>
                <input type="text" class="form-control" name="adreça"/>
            </div>
            <div class="form-group">
                <label for="poblacio">Població</label>
                <input type="text" class="form-control" name="poblacio"/>
            </div>
            <div class="form-group">
                <label for="comarca">Comarca</label>
                <input type="text" class="form-control" name="comarca"/>
            </div>
            <div class="form-group">
                <label for="tipusong">Tipus ONG</label>
                <input type="text" class="form-control" name="tipusong"/>
            </div>
            <div class="form-group">
                <label for="declaracio">Declaració</label>
                <input type="text" class="form-control" name="declaracio"/>
            </div>
          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="{{ url('ong') }}">Accés directe a la Llista d'ong</a>
@endsection