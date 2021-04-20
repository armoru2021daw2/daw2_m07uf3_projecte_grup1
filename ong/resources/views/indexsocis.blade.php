@extends('disseny')

@section('content')

<h1>Llista de socis</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td># ID</td>
          <td>Nif</td>
          <td>Nom</td>
          <td>Cognoms</td>
          <td>Adreça</td>
          <td>Població</td>
          <td>Comarca</td>
          <td>Telèfon Fix</td>
          <td>Telèfon</td>
          <td>Email</td>
          <td>Data Alta</td>
          <td>Quota</td>
          <td>Aportació</td>
        </tr>
    </thead>
    <tbody>
        @foreach($soci as $soc)
        <tr>
            <td>{{$soc->id}}</td>
            <td>{{$soc->nif}}</td>
            <td>{{$soc->nom}}</td>
            <td>{{$soc->cognoms}}</td>
            <td>{{$soc->adreça}}</td>
            <td>{{$soc->poblacio}}</td>
            <td>{{$soc->comarca}}</td>
            <td>{{$soc->telfix}}</td>
            <td>{{$soc->telf}}</td>
            <td>{{$soc->email}}</td>
            <td>{{$soc->datalta}}</td>
            <td>{{$soc->quota}}</td>
            <td>{{$soc->aportacio}}</td>
            <td class="text-left">
                <a href="{{ route('socis.edit', $soc->id)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('socis.destroy', $soc->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
<br><a href="{{ url('socis/create') }}">Accés directe a la vista de creació de socis</a>
@endsection