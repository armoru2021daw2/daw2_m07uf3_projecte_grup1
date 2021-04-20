@extends('disseny')

@section('content')

<h1>Llista d'Ongs</h1>
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
          <td>Cif</td>
          <td>Nom</td>
          <td>Adreça</td>
          <td>Poblacio</td>
          <td>Comarca</td>
          <td>Tipus ONG</td>
          <td>Declaració</td>
          <td>Action</td>
         
            
        </tr>
    </thead>
    <tbody>
        @foreach($ong as $ong)
        <tr>
            <td>{{$ong->id}}</td>
            <td>{{$ong->cif}}</td>
            <td>{{$ong->nom}}</td>
            <td>{{$ong->adreça}}</td>
            <td>{{$ong->poblacio}}</td>
            <td>{{$ong->comarca}}</td>
            <td>{{$ong->tipusong}}</td>
            <td>{{$ong->declaracio}}</td>
            <td class="text-left">
                <a href="{{ route('ong.edit', $ong ?? ''->id)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('ong.destroy', $ong ?? ''->id)}}" method="post" style="display: inline-block">
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
<br><a href="{{ url('ong/create') }}">Accés directe a la vista de creació d'ongs</a>
@endsection