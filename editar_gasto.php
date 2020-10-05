<?php
session_start();
$id_gasto = $_GET['id'];
$id_usuario = $_SESSION['user']['id'];
$access_key = $_SESSION['user']['key'];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "http://localhost/fintato/api/despesa/listarespecifica/$id_usuario/$id_gasto/$access_key");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$dados = json_decode(curl_exec($ch), 1);

curl_close($ch);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>editar gasto</title>
</head>
<body>
    <a href="gastos.php">VOLTAR</a>
    <h1>Editar Gasto</h1>
    <form method="post">
        <input type="text" name="titulo" value="<?= $dados['dados']['titulo'] ?>">
        <input type="date" name="data_gasto" value="<?= $dados['dados']['data_despesa'] ?>">
        <input type="text" name="valor" value="<?= str_replace('.',',',$dados['dados']['valor']) ?>">
        <button name="atualizar">Atualizar</button>
        <?php
            if(isset($_POST['atualizar'])){
                $ch = curl_init("http://localhost/fintato/api/despesa/editar");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $dados = array(
                    'id_usuario'=>$id_usuario,
                    'id_gasto'=>$id_gasto,
                    'titulo'=>$_POST['titulo'],
                    'valor'=>str_replace(',','.',$_POST['valor']),
                    'data_gasto'=>$_POST['data_gasto']
                );

                curl_setopt($ch, CURLOPT_POST, true);

                curl_setopt($ch, CURLOPT_POSTFIELDS, $dados);

                $resultado = curl_exec($ch);

                curl_close($ch);
                echo "<script>alert('$resultado'); window.location.href = 'gastos.php';</script>";
            }
        ?>
    </form>
</body>
</html>