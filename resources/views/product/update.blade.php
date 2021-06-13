<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                            <h3>Alterar Produto</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                                 @csrf
                                 @method('PUT')
                                 <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="pname">Nome do Produto</label>
                                            <input type="text" class="form-control" name="name" id="pname" value="{{ $product->name }}">
                                        </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="pprice">Preço do Produto (R$)</label>
                                            <input type="number" step="0.010" class="form-control" name="price" id="pprice" value="{{ $product->price }}">
                                        </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="pdetails">Detalhes do Produto</label>
                                            <textarea class="form-control" rows="3" name="details" id="pdetails">{{ $product->details }}</textarea>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-success" type="submit"><i class="far fa-save"></i>  Salvar</button>
                                        <a href="{{  route('product.index')  }}" class="btn btn-secondary" type="button"><i class="fas fa-arrow-left"></i>  Voltar</a>
                                    </div>
                                 </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script>
        document.getElementById("ppreco").addEventListener("change", function(){
       this.value = parseFloat(this.value).toFixed(2);
    });
    </script>
</html>
