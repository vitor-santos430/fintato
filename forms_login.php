
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        input{
            width: 15%;
        }
    </style>
</head>
<body>
    <h1>Teste Login</h1>
    <form method="post">
        <input type="email" name="email" placeholder="E-mail" required> <br><br>
        <input type="password" name="senha" placeholder="Senha" required> <br><br>
        <button type="submit" name="entrar" style="cursor: pointer;">Entrar</button>
    </form>
    <?php
        if(isset($_POST['entrar'])){
            
            $ch = curl_init("http://localhost/fintato/api/usuario/login/");

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $dados = array(
                'email'=>$_POST['email'],
                'senha'=>$_POST['senha']
            );

            curl_setopt($ch, CURLOPT_POST, true);

            curl_setopt($ch, CURLOPT_POSTFIELDS, $dados);

            $resultado = curl_exec($ch);

            curl_close($ch);

            $retorno = json_decode($resultado,1);
            if(isset($retorno['dados']['msg'])){
                echo $retorno['dados']['msg'];
                session_start();
                $_SESSION['user'] = array(
                    'nome'=>$retorno['dados']['nome'],
                    'key'=>$retorno['dados']['accessKey'],
                    'id'=>$retorno['dados']['id']
                );

                header('location: painel.php');
            }else{
                echo $retorno['dados'];
            }
        }
    ?>
</body>
</html>