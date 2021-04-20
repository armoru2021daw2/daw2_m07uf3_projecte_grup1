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
        <form method="post" action="{{ route('empleats.update', $empleat->id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="nif">Nif</label>
                <input type="text" class="form-control" name="nif" value="{{ $empleat->nif }}" />
            </div>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" value="{{ $empleat->nom }}" />
            </div>
            <div class="form-group">
                <label for="cognoms">Cognoms</label>
                <input type="text" class="form-control" name="cognoms" value="{{ $empleat->cognoms }}" />
            </div>
            <div class="form-group">
                <label for="adreça">Adreça</label>
                <input type="text" class="form-control" name="adreça" value="{{ $empleat->adreça }}" />
            </div>
            <div class="form-group">
                <label for="poblacio">Poblacio</label>
                <input type="text" class="form-control" name="poblacio" value="{{ $empleat->poblacio }}" />
            </div>
            <div class="form-group">
                <label for="comarca">Comarca</label>
                <input type="text" class="form-control" name="comarca" value="{{ $empleat->comarca }}" />
            </div>
            <div class="form-group">
                <label for="telfix">Telèfon Fix</label>
                <input type="text" class="form-control" name="telfix" value="{{ $empleat->telfix }}" />
            </div>
            <div class="form-group">
                <label for="telf">Telèfon</label>
                <input type="text" class="form-control" name="telf" value="{{ $empleat->telf }}" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{ $empleat->email }}" />
            </div>
            <div class="form-group">
                <label for="dataingres">Data Ingres</label>
                <input type="text" class="form-control" name="dataingres" value="{{ $empleat->dataingres }}" />
            </div>

            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('empleats') }}">Accés directe a la Llista d'empleats</a
@endsection