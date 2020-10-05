<?php
session_start();
$id = $_SESSION['user']['id'];

$retorno = file_get_contents("http://localhost/fintato/api/receita/listar/$id");

$retorno = json_decode($retorno, 1);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/receitas.css">
</head>
<body>
    <a href="painel.php">Voltar</a>
    <h1>Receitas</h1>
    
    <div class="container">
        <a href="#modal" class="link-btn-add">
            <div class="btn-add">+</div>
        </a>
    </div>

    <div id="modal" class="modal" tabindex="-1">
        <a href="#fechar" title="Fechar" class="fechar"></a>
        <div class="modal__content">
            <a href="#" class="modal__close" aria-label="Fechar">x</a>
            <h2>Adicionar Receita</h2>
            
            <form method="post">
                <input type="text" placeholder="Título" name="titulo">
                <input type="date" name="data_receita" id="">
                <input type="text" placeholder="R$ 120,00" name="valor" id="">
                <button style="cursor: pointer;" name="registrar">Registrar</button>
            </form>
            <?php
                if(isset($_POST['registrar'])){
                    $ch = curl_init("http://localhost/fintato/api/receita/registrar");
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $dados = array(
                        'id_usuario'=>$id,
                        'titulo'=>$_POST['titulo'],
                        'valor'=>str_replace(',','.',$_POST['valor']),
                        'data_receita'=>$_POST['data_receita']
                    );

                    curl_setopt($ch, CURLOPT_POST, true);

                    curl_setopt($ch, CURLOPT_POSTFIELDS, $dados);

                    $resultado = curl_exec($ch);

                    curl_close($ch);
                    echo "<script>alert('$resultado'); window.location.href = 'receitas.php';</script>";
                }
            ?>
        </div>
        
    </div>

    <table border=1>
        <thead>
            <th>Título</th>
            <th>Valor</th>
            <th>Data</th>
        </thead>
        <?php
        if($retorno['status'] == 'erro'){
            echo $retorno['dados'];
        }else{
            foreach($retorno['dados'] as $dado){
                ?>
                <tr>
                    <td><?= $dado['titulo'] ?></td>
                    <td><?= "R$".str_replace(".",",",$dado['valor']) ?></td>
                    <td><?= date("d/m/Y", strtotime($dado['data_receita'])) ?></td>
                    <td><a href="editar_receita.php?id=<?=$dado['id_receita']?>"> Editar </a> </td>
                    <td> <a href="excluir_receita.php?id=<?=$dado['id_receita']?>"> Excluir </a> </td>
                </tr>
                <?php
            }
        }
        ?>
    </table>
</body>
</html>