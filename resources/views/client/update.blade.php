<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body class="bg-dark">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3>Alterar Cliente</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('client.update',$client->id) }}" method="POST" enctype="multipart/form-data">
                                 @csrf
                                 @method('PUT')
                                 <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="pname">Nome do Cliente</label>
                                            <input type="text" class="form-control" name="name" id="pname" value="{{ $client->name }}">
                                        </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="pcpf">CPF</label>
                                            <input type="number" class="form-control" name="cpf" id="pcpf" value="{{ $client->cpf }}">
                                        </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="paddress">Endereço do Cliente</label>
                                            <textarea class="form-control" rows="3" name="address" id="paddress">{{ $client->address }}</textarea>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="pcity">Cidade</label>
                                            <input type="text" class="form-control" name="city" id="pcity" value="{{ $client->city }}">
                                        </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="pstate">Estado</label>
                                            <input type="text" class="form-control" name="state" id="pstate" value="{{ $client->state }}">
                                        </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-success" type="submit"><i class="far fa-save"></i>  Salvar</button>
                                        <a href="{{  route('client.index')  }}" class="btn btn-secondary" type="button"><i class="fas fa-arrow-left"></i>  Voltar</a>
                                    </div>
                                 </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
