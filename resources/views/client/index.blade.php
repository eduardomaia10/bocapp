<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Clientes</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body class="bg-dark">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{ route('client.create') }}" class="btn btn-success mb-2"><i class="fas fa-plus"></i> + Cadastrar</a>;
                    <a href="{{  route('dashboard')  }}" class="btn btn-secondary mb-2" type="button"><i class="fas fa-arrow-left"></i>  Voltar</a>;
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3><strong>Cadastro de Clientes</strong></h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive table-sm table-striped">
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th>Item</th>
                                    <th>Nome do Cliente</th>
                                    <th>CPF</th>
                                    <th>Endereço</th>
                                    <th>Cidade</th>
                                    <th>Estado</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($clients) && $clients->count())
                                @foreach($clients as $key => $client)
                                <tr>
                                    <td>{{ $client->id }}</td>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->cpf }}</td>
                                    <td>{{ $client->address }}</td>
                                    <td>{{ $client->city }}</td>
                                    <td>{{ $client->state }}</td>
                                    <td>
                                        <a href="{{ route('client.show',$client->id) }}" title="Visualizar Registro"><i class="bi bi-search"></i></a>
                                        <a href="{{ route('client.edit',$client->id) }} " title="Editar Registro"><i class="bi bi-pencil-square text-primary"></i></a>
                                        <a data-bs-toggle="modal" data-bs-target="#staticBackdrop" title="Excluir Registro"><i class="bi bi-trash text-danger"></i></a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Atenção!!!</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Deseja excluir o registro?
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
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                        <form method="POST" action="{{ route('client.delete',$client->id) }}">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-danger">Excluir</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="7" class="text-center"> <h3>Sem dados!</h3></td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                              <li class="page-item"><a class="page-link" href="/client">Previous</a></li>
                              <li class="page-item"><a class="page-link" href="/client?page=1">1</a></li>
                              <li class="page-item"><a class="page-link" href="/client?page=2">2</a></li>
                              <li class="page-item"><a class="page-link" href="/client?page=3">3</a></li>
                              <li class="page-item"><a class="page-link" href="/client?page=3">Next</a></li>
                            </ul>
                          </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
-->










</html>
