@extends("pages.layouts.app")
<table>
    <tr>
        <th>Diputado</th>
        <th>Perfil</th>
    </tr>
    @foreach($data as $item)
        <tr>
            <td>{{$item->apaterno}} {{$item->apaterno}} {{$item->nombres}}</td>
            <td><a href="{{route("diputadasydiputados.show", $item->id)}}">ir</a> </td>
        </tr>
    @endforeach
</table>
