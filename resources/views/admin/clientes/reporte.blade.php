<!DOCTYPE html>
<html>
<head>
    <title>Reporte de Clientes</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }
        h1{
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Reporte de Clientes</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Apellidos</th>
                <th>Nombres</th>
                <th>Correo</th>
                <th>Fecha de Creacion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->Apellidos }}</td>
                    <td>{{ $cliente->Nombres }}</td>
                    <td>{{ $cliente->Correo }}</td>
                    <td>{{ $cliente->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>