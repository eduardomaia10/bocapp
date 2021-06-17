<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vendas</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body class="bg-dark">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a data-bs-toggle="modal" data-bs-target="#modalcreate" class="btn btn-success mb-2"><i class="fas fa-plus"></i> + Cadastrar</a>
                    <!-- Modal Create -->
                    <div class="modal fade" id="modalcreate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalcreateLabel">Inserir Venda</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('sale.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="pdate">Data</label>
                                                    <input type="date" class="form-control" name="date" id="pdate">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="pclient">Cliente</label>
                                                    <input type="text" class="form-control" name="client" id="pclient">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="pqtd">Quantidade</label>
                                                    <input type="number" class="form-control" name="qtd" id="pqtd">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="pproduct">Produto</label>
                                                    <input type="text" class="form-control" name="product" id="pproduct">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="ptotal">Total (R$)</label>
                                                    <input type="number" class="form-control" name="total" id="ptotal">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-success" type="submit">Salvar</button>
                                            <a href="{{  route('sale.index')  }}" class="btn btn-secondary" type="button"><i class="fas fa-arrow-left"></i>  Voltar</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{  route('dashboard')  }}" class="btn btn-secondary mb-2" type="button"><i class="fas fa-arrow-left"></i>  Voltar</a>;
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3><strong>Vendas</strong></h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive table-sm table-striped">
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th>Item</th>
                                    <th>Data</th>
                                    <th>Cliente</th>
                                    <th>Quantidade</th>
                                    <th>Produto</th>
                                    <th>Total (R$)</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($sales) && $sales->count())
                                @foreach($sales as $key => $sale)
                                <tr>
                                    <td>{{ $sale->id }}</td>
                                    <td>{{ date('d/m/Y', strtotime($sale->date)) }}</td>
                                    <td>{{ $sale->client }}</td>
                                    <td>{{ $sale->qtd }}</td>
                                    <td>{{ $sale->product }}</td>
                                    <td>{{ $sale->total }}</td>
                                    <td>
                                        <a data-bs-toggle="modal" data-bs-target="#modalshow" title="Visualizar Registro"><i class="bi bi-search text-primary"></i></a>
                                        <!-- Modal Show -->
                                        <div class="modal fade" id="modalshow" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalshowLabel">Visualizar Venda</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <table class="table table-bordered table-striped table-hover text-dark bg-white">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Item</th>
                                                                    <td>{{ $sale->id }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Data</th>
                                                                    <td>{{ date('d/m/Y', strtotime($sale->date)) }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Cliente</th>
                                                                    <td>{{ $sale->client }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Quantidade</th>
                                                                    <td>{{ $sale->qtd }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Produto</th>
                                                                    <td>{{ $sale->product }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Total</th>
                                                                    <td>{{ $sale->total }}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <a href="{{ route('sale.edit',$sale->id) }} " title="Editar Registro"><i class="bi bi-pencil-square text-primary"></i></a> --}}
                                        <a data-bs-toggle="modal" data-bs-target="#modaledit" title="Editar Registro"><i class="bi bi-pencil-square text-primary"></i></a>
                                        <!-- Modal Edit -->
                                        <div class="modal fade" id="modaledit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalshowLabel">Editar Venda</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('sale.update',$sale->id) }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="row">
                                                               <div class="col-md-12">
                                                                   <div class="form-group">
                                                                       <label for="pdata">Data</label>
                                                                       <input type="date" class="form-control" name="date" id="pdate" value="{{ date('Y-m-d', strtotime($sale->date)) }}">
                                                                   </div>
                                                               </div>
                                                            </div>
                                                            <div class="row">
                                                               <div class="col-md-12">
                                                                   <div class="form-group">
                                                                       <label for="pclient">Cliente</label>
                                                                       <input type="text" class="form-control" name="client" id="pclient" value="{{ $sale->client }}">
                                                                   </div>
                                                               </div>
                                                            </div>
                                                            <div class="row">
                                                               <div class="col-md-12">
                                                                   <div class="form-group">
                                                                       <label for="pqtd">Quantidade</label>
                                                                       <input type="number" class="form-control" name="qtd" id="pqtd" value="{{ $sale->qtd }}">
                                                                   </div>
                                                               </div>
                                                            </div>
                                                            <div class="row">
                                                               <div class="col-md-12">
                                                                   <div class="form-group">
                                                                       <label for="pproduct">Produto</label>
                                                                       <input type="text" class="form-control" name="product" id="pproduct" value="{{ $sale->product }}">
                                                                   </div>
                                                               </div>
                                                            </div>
                                                            <div class="row">
                                                               <div class="col-md-12">
                                                                   <div class="form-group">
                                                                       <label for="ptotal">Total</label>
                                                                       <input type="number" class="form-control" name="total" id="ptotal" value="{{ $sale->total }}">
                                                                   </div>
                                                               </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-success" type="submit"><i class="far fa-save"></i>  Salvar</button>
                                                                <a href="{{  route('sale.index')  }}" class="btn btn-secondary" type="button"><i class="fas fa-arrow-left"></i>  Voltar</a>
                                                            </div>
                                                       </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a data-bs-toggle="modal" data-bs-target="#modalexcluir" title="Excluir Registro"><i class="bi bi-trash text-danger"></i></a>
                                        <!-- Modal Excluir -->
                                        <div class="modal fade" id="modalexcluir" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalexcluirLabel">Atenção!!!</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Deseja excluir o registro?
                                                        <table class="table table-bordered table-striped table-hover text-dark bg-white">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Item</th>
                                                                    <td>{{ $sale->id }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Data</th>
                                                                    <td>{{ date('d/m/Y', strtotime($sale->date)) }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Cliente</th>
                                                                    <td>{{ $sale->client }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Quantidade</th>
                                                                    <td>{{ $sale->qtd }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Produto</th>
                                                                    <td>{{ $sale->product }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Total (R$)</th>
                                                                    <td>{{ $sale->total }}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                        <form method="POST" action="{{ route('sale.delete',$sale->id) }}">
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
                                <li class="page-item"><a class="page-link" href="/sale">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="/sale?page=1">1</a></li>
                                <li class="page-item"><a class="page-link" href="/sale?page=2">2</a></li>
                                <li class="page-item"><a class="page-link" href="/sale?page=3">3</a></li>
                                <li class="page-item"><a class="page-link" href="/sale?page=3">Next</a></li>
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
