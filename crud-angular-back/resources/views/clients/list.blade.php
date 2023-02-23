<h1>Lista de clientes</h1>

<table border="1" >
    <tr>
        <th>id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Documento</th>
        <th>Email</th>
    </tr>
    @foreach($clients as $client)
    <tr>
        <td>{{$client->id}}</td>
        <td>{{$client->firstname}}</td>
        <td>{{$client->lastname}}</td>
        <td>{{$client->document}}</td>
        <td>{{$client->email}}</td>
    </tr>
    @endforeach
</table>
