<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header('locaton: forms_login.php');
    }else{
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL,"http://localhost/fintato/api/usuario/listarUsuarioEspecifico/".$_SESSION['user']['id']."/".$_SESSION['user']['key']);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $dados = json_decode(curl_exec($ch),1);
        curl_close($ch);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            width: 15%;
        }
    </style>
</head>
<body>
    <h1>Teste Atualizar dados</h1>
    <form method="post">
        <input type="text" name="nome" placeholder="Nome" value="<?= $dados['dados']['nome'] ?>" required> <br><br>
        <input type="email" name="email" placeholder="E-mail" value="<?= $dados['dados']['email'] ?>" required> <br><br>
        <input type="password" name="senha" placeholder="Nova senha" > <br><br>
        <button type="submit" name="atualizar" style="cursor: pointer;">Atualizar</button>
    </form>
    <?php
        if(isset($_POST['atualizar'])){
            
            $ch = curl_init("http://localhost/fintato/api/usuario/editardados/");

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $dados = array(
                'id'=>$_SESSION['user']['id'],
                'nome'=>$_POST['nome'],
                'email'=>$_POST['email'],
                'senha'=>$_POST['senha']
            );

            curl_setopt($ch, CURLOPT_POST, true);

            curl_setopt($ch, CURLOPT_POSTFIELDS, $dados);

            print_r(curl_exec($ch));

            curl_close($ch);

            header('location: forms_editar.php?id='.$_SESSION['user']['id']);
        }
    ?>
</body>
</html>