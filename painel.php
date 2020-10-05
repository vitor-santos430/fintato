<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <link rel="stylesheet" href="css/painel.css">
</head>
<body><?php session_start(); ?>
    <h1>Painel - <?= $_SESSION['user']['nome'] ?></h1>
    <a href="forms_editar.php">Editar Dados do Usuário</a>
    <br>
    <a href="forms_login.php">SAIR</a>
    <br>
    <br>
    <div class="container">
        <a href="receitas.php" class="link-card">
            <div class="card">
                <div class="title-card">
                    Receitas
                </div>
                <div class="body-card">
                    Adicione, Edite e Análise as Receitas
                </div>
            </div>
        </a>
        <a href="gastos.php" class="link-card">
            <div class="card">
                <div class="title-card">
                    Gastos
                </div>
                <div class="body-card">
                    Adicione, Edite e Análise os Gastos
                </div>
            </div>
        </a>
    </div>
    
</body>
</html>