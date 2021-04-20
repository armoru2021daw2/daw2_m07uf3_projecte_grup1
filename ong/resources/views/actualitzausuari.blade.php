@extends('disseny')

@section('content')


<div class="card mt-5">
    <div class="card-header">
        Actualització de dades
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
        <form method="post" action="{{ route('usuaris.update', $usuari->id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="nomusuari">Nom Usuari</label>
                <input type="text" class="form-control" name="nomusuari" value="{{ $usuari->nomusuari }}" />
            </div>
            <div class="form-group">
                <label for="contra">Contrassenya</label>
                <input type="password" class="form-control" name="contra" value="{{ $usuari->contra }}" />
            </div>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" value="{{ $usuari->nom }}" />
            </div>
            <div class="form-group">
                <label for="cognoms">Cognoms</label>
                <input type="text" class="form-control" name="cognoms" value="{{ $usuari->cognoms }}" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{ $usuari->email }}" />
            </div>
            <div class="form-group">
                <label for="telf">Telèfon</label>
                <input type="text" class="form-control" name="telf" value="{{ $usuari->telf }}" />
            </div>

            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('usuaris') }}">Accés directe a la Llista d'usuaris</a
@endsection