<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Marca</title>
</head>
<body>
    <div class="container" style="margin-top: 40px; width:500px;">
        <center>
            <h3>Marca do Produto</h3>
        </center>
        <form action="_inserir_fornecedor.php" method="post" style="margin-top: 20px">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" name="name" placeholder="Insira o nome da marca" autocomplete="off">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Insira o email" autocomplete="off">
                <label>Representante</label>
                <input type="text" class="form-control" name="representante" placeholder="Insira o representante" autocomplete="off">
            </div>
            <div style="text-align: center;">
                <a href="#" role="button" class="btn btn-primary btn-sm">Voltar ao menu</a>
                <button type="submit" id="botao" class="btn btn-success btn-sm">Adicionar</button>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>
</html>