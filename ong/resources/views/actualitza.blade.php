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
        <form method="post" action="{{ route('ong.update', $ong->id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="cif">Cif</label>
                <input type="text" class="form-control" name="cif" value="{{ $ong->cif }}" />
            </div>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" value="{{ $ong->nom }}" />
            </div>
            <div class="form-group">
                <label for="adreça">Adreça</label>
                <input type="text" class="form-control" name="adreça" value="{{ $ong->adreça }}" />
            </div>
            <div class="form-group">
                <label for="poblacio">Població</label>
                <input type="text" class="form-control" name="poblacio" value="{{ $ong->poblacio }}" />
            </div>
            <div class="form-group">
                <label for="comarca">Comarca</label>
                <input type="text" class="form-control" name="comarca" value="{{ $ong->comarca }}" />
            </div>
            <div class="form-group">
                <label for="tipusong">Tipus ONG</label>
                <input type="text" class="form-control" name="tipusong" value="{{ $ong->tipusong }}" />
            </div>
            <div class="form-group">
                <label for="declaracio">Declaració</label>
                <input type="text" class="form-control" name="declaracio" value="{{ $ong->declaracio }}" />
            </div>

            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('ong') }}">Accés directe a la Llista d'ongs</a
@endsection