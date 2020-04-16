<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>

<body class="container">
    <h2>Cadastro</h2>
    <form action="cadPessoa.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Endereço de email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email" name="login">
            <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="senha">
        </div>
        <div class="form-group">
            <label for="exampleInputNome">Nome</label>
            <input type="nome" class="form-control" id="exampleInputNome" placeholder="Nome" name="nome">
        </div>
        <div class="form-group">
            <label for="exampleInputVeiculo">Veiculo</label>
            <input type="veiculo" class="form-control" id="exampleInputVeiculo" placeholder="Veiculo" name="veiculo">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="termo"required>
            <label class="form-check-label" for="exampleCheck1">Aceito os Termos</label>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</body>

</html>