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
        <form method="post" action="{{ route('socis.update', $soci->id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="nif">Nif</label>
                <input type="text" class="form-control" name="nif" value="{{ $soci->nif }}" />
            </div>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" value="{{ $soci->nom }}" />
            </div>
            <div class="form-group">
                <label for="cognoms">Cognoms</label>
                <input type="text" class="form-control" name="cognoms" value="{{ $soci->cognoms }}" />
            </div>
            <div class="form-group">
                <label for="adreça">Adreça</label>
                <input type="text" class="form-control" name="adreça" value="{{ $soci->adreça }}" />
            </div>
            <div class="form-group">
                <label for="poblacio">Poblacio</label>
                <input type="text" class="form-control" name="poblacio" value="{{ $soci->poblacio }}" />
            </div>
            <div class="form-group">
                <label for="comarca">Comarca</label>
                <input type="text" class="form-control" name="comarca" value="{{ $soci->comarca }}" />
            </div>
            <div class="form-group">
                <label for="telfix">Telèfon Fix</label>
                <input type="text" class="form-control" name="telfix" value="{{ $soci->telfix }}" />
            </div>
            <div class="form-group">
                <label for="telf">Telèfon</label>
                <input type="text" class="form-control" name="telf" value="{{ $soci->telf }}" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{ $soci->email }}" />
            </div>
            <div class="form-group">
                <label for="datalta">Data Alta</label>
                <input type="text" class="form-control" name="datalta" value="{{ $soci->datalta }}" />
            </div>
            <div class="form-group">
                <label for="quota">Quota</label>
                <input type="text" class="form-control" name="quota" value="{{ $soci->quota }}" />
            </div>
            <div class="form-group">
                <label for="aportacio">Aportació</label>
                <input type="text" class="form-control" name="aportacio" value="{{ $soci->aportacio }}" />
            </div>

            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('socis') }}">Accés directe a la Llista de socis</a
@endsection