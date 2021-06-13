<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cadastro de Produtos</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style type="text/css">
    .form-inline{
        display: inline;
    }
</style>
</head>
<body class="bg-dark">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{ route('product.create') }}" class="btn btn-success mb-2"><i class="fas fa-plus"></i> Cadastrar</a>;
                    <a href="{{  route('dashboard')  }}" class="btn btn-secondary mb-2" type="button"><i class="fas fa-arrow-left"></i>  Voltar</a>;
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3>Cadastro de Produtos</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead class="bg-secondary text-white">
                                <tr>
                                    <th>Item</th>
                                    <th>Nome do Produto</th>
                                    <th>Preço (R$)</th>
                                    <th>Detalhes</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($products) && $products->count())
                                @foreach($products as $key => $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->details }}</td>
                                        <td>
                                            <a href="{{ route('product.show',$product->id) }}" class="btn btn-info text-white"><i class="fas fa-eye"></i></a>
                                            <a href="{{ route('product.edit',$product->id) }} " class="btn btn-primary"><i class="fas fa-pen text-white"></i></a>
                                            <form method="POST" action="{{ route('product.delete',$product->id) }}" class="form-inline">
                                              @csrf
                                              @method('delete')
                                              <button type="submit" class="btn btn-danger btn-icon">
                                                <i class="far fa-trash-alt text-white" data-feather="delete"></i>
                                              </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                @else
                                    <tr>
                                        <td colspan="5" class="text-center"> <h3>Sem dados!</h3></td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        {!! $products->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
