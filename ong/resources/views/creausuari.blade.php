@extends('disseny')

@section('content')

<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou usuari
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
      <form method="post" action="{{ route('usuaris.store') }}">
          <div class="form-group">
              @csrf
              <label for="nom">Nom Usuari</label>
              <input type="text" class="form-control" name="nomusuari"/>
          </div>
          <div class="form-group">
              <label for="contra">Contrassenya</label>
              <input type="password" class="form-control" name="contra"/>
          </div>
          <div class="form-group">
              <label for="Nom">Nom</label>
              <input type="text" class="form-control" name="nom"/>
          </div>
          <div class="form-group">
              <label for="cognoms">Cognoms</label>
              <input type="text" class="form-control" name="cognoms"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="telf">Telèfon</label>
              <input type="tel" class="form-control" name="telf"/>
          </div>
          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="{{ url('usuaris') }}">Accés directe a la Llista d'usuaris</a>
@endsection