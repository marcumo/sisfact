@extends('layer')

@section('content')

        <script type="text/javascript">
          $(document).ready(function(){
              $('#grid').DataTable();
          });
        </script>

<div>
    <table id="grid" class="table">
        <thead class="thead-default">
            <tr>
                <th>Ítem</a></th>
                <th>Empresa</th>
                <th>Sistema Eléctrico</th>
                <th>Código</th>
                <th>Sector Típico</th>
                <th>N° de Usuarios</th>
                <th>Tolerancia SAIFI</th>
                <th>SAIFIp Año anterior</th>
                <th>SAIFIp Año actual</th>
                <th>Tolerancia SAIDI</th>
                <th>SAIDIp Año anterior</th>
                <th>SAIDIp Año actual</th>
                <th>Situación</th>
                <th>Sede Regional</th>
            </tr>
        </thead>

        <tbody>
              @foreach ($sistemas as $sistemas)
            <tr>
                <td>{{ $sistemas->id }}</td>
                <td>{{ $sistemas->EMPRESA }}</td>
                <td>{{ $sistemas->NOMBRE_SISTEMA }}</td>
                <td>{{ $sistemas->CODIGO }}</td>
                <td>{{ $sistemas->SECTOR_TIPICO }}</td>
                <td>{{ $sistemas->NUMERO_DE_USUARIOS }}</td>
                <td>{{ $sistemas->TOL_SAIFI }}</td>
                <td>{{ $sistemas->SAIFIPanterior }}</td>
                <td>{{ $sistemas->SAIFIPactual }}</td>
                <td>{{ $sistemas->TOL_SAIDI }}</td>
                <td>{{ $sistemas->SAIDIPanterior }}</td>
                <td>{{ $sistemas->SAIDIPactual }}</td>
                <td>{{ $sistemas->SITUACION }}</td>
                <td>{{ $sistemas->SEDE }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



@endsection
