@extends('disseny')

@section('content')

<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou soci
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
      <form method="post" action="{{ route('socis.store') }}">
          <div class="form-group">
              @csrf
              <label for="nif">Nif</label>
                <input type="text" class="form-control" name="nif"/>
            </div>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom"/>
            </div>
            <div class="form-group">
                <label for="cognoms">Cognoms</label>
                <input type="text" class="form-control" name="cognoms"/>
            </div>
            <div class="form-group">
                <label for="adreça">Adreça</label>
                <input type="text" class="form-control" name="adreça"/>
            </div>
            <div class="form-group">
                <label for="poblacio">Poblacio</label>
                <input type="text" class="form-control" name="poblacio"/>
            </div>
            <div class="form-group">
                <label for="comarca">Comarca</label>
                <input type="text" class="form-control" name="comarca"/>
            </div>
            <div class="form-group">
                <label for="telfix">Telèfon Fix</label>
                <input type="text" class="form-control" name="telfix"/>
            </div>
            <div class="form-group">
                <label for="telf">Telèfon</label>
                <input type="text" class="form-control" name="telf"/>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email"/>
            </div>
            <div class="form-group">
                <label for="datalta">Data Alta</label>
                <input type="text" class="form-control" name="datalta"/>
            </div>
            <div class="form-group">
                <label for="quota">Quota</label>
                <input type="text" class="form-control" name="quota"/>
            </div>
            <div class="form-group">
                <label for="aportacio">Aportació</label>
                <input type="text" class="form-control" name="aportacio"/>
            </div>
          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="{{ url('socis') }}">Accés directe a la Llista de socis</a>
@endsection