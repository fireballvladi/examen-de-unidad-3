@extends('layouts.app')
@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Juego de Mesa</h2>
            </div>
            @if ($Juego->isEmpty())
                <div>No hay Mensajes</div>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre del juego</th>
                            <th>Numero de jugadores</th>
							 <th>Numero de piezas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Juego as $Juego)
                            <tr>
                                <td>{!! $Juego->id_juego !!}</td>
                                <td>{!! $Juego->Nombre_Juego !!}</td>
                                <td>{!! $Juego->Numero_Jugadores  !!}</td>
								<td>{!! $Juego->Numero_Piezas!!}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection