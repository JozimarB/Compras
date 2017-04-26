@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Associados</div>

                <div class="panel-body">

                    <table class="table table-responsive table-striped"> 
                      <thead>
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>Data Nascimento</th>
                      </thead>
                      <body>              
                    @foreach($associados as $cada_associado)
                      <tr>
                        <td>{{ $cada_associado->nome}}</td>
                        <td>{{ $cada_associado->numero}}</td>
                        <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d h:s:m',$cada_associado->data_nascimento)->format('d/m/Y') }}
                        </td>
                      <tr>                      
                    @endforeach
                    </body>

                    </table>                    

                   <!-- {{$associados->render()}} -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
