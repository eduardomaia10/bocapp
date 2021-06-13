<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body class="bg-dark text-white">
    <div class="container mt-5">
        <div class="row">
                <h1>Detalhes do Cliente</h1>
            <div class="col-md-12 px-0">
                <div class="backbtn justify-content-end d-flex mb-2">
                    <a href="{{ route('client.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i>  Voltar</a>
                </div>
            </div>
            <table class="table table-bordered table-striped table-hover text-dark bg-white">
                <tbody>
                    <tr>
                        <th>Item</th>
                        <td>{{ $client->id }}</td>
                    </tr>
                    <tr>
                        <th>Nome</th>
                        <td>{{ $client->name }}</td>
                    </tr>
                    <tr>
                        <th>CPF</th>
                        <td>{{ $client->cpf }}</td>
                    </tr>
                    <tr>
                        <th>Endereço</th>
                        <td>{{ $client->address }}</td>
                    </tr>
                    <tr>
                        <th>Cidade</th>
                        <td>{{ $client->city }}</td>
                    </tr>
                    <tr>
                        <th>Estado</th>
                        <td>{{ $client->state }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
