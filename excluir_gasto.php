<?php
session_start();
$id_gasto = $_GET['id'];
$id_usuario = $_SESSION['user']['id'];

$ch = curl_init("http://localhost/fintato/api/despesa/deletar");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$dados = array(
    'id_usuario'=>$id_usuario,
    'id_gasto'=>$id_gasto
);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $dados);
$resultado = curl_exec($ch);

curl_close($ch);

echo "<script>alert('$resultado'); window.location.href = 'gastos.php';</script>";