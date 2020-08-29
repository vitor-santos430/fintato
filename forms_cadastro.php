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
    <h1>Teste cadastro</h1>
    <form method="post">
        <input type="text" name="nome" placeholder="Nome" required> <br><br>
        <input type="email" name="email" placeholder="E-mail" required> <br><br>
        <input type="password" name="senha" placeholder="Senha" required> <br><br>
        <button type="submit" name="cadastrar" style="cursor: pointer;">Cadastrar</button>
    </form>
    <?php
        if(isset($_POST['cadastrar'])){
            
            $ch = curl_init("http://localhost/fintato/api/usuario/cadastrar/");

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $dados = array(
                'nome'=>$_POST['nome'],
                'email'=>$_POST['email'],
                'senha'=>$_POST['senha']
            );

            curl_setopt($ch, CURLOPT_POST, true);

            curl_setopt($ch, CURLOPT_POSTFIELDS, $dados);

            
            
            curl_exec($ch);
            
            
            curl_close($ch);

            echo "<br><a href='forms_login.php'>Fazer login</a>";
        }
    ?>
</body>
</html>