<?php
include_once('config.php');
?>
<?php
echo $nome = $_POST['nome'];
echo $cnpj = $_POST['cnpj'];
echo $inscestadual = $_POST['inscestadual'];
echo $responsavel = $_POST['responsavel'];
echo $cpf = $_POST['cpf'];
echo $rg = $_POST['rg'];
echo $endereço = $_POST['endereço'];
echo $complemento = $_POST['complemento'];
echo $bairro = $_POST['bairro'];
echo $cidade = $_POST['cidade'];
echo $estado = $_POST['estado'];
echo $celular = $_POST['celular'];
echo $email = $_POST['email'];
echo $obsevacoes = $_POST['obsevacoes'];
$sql = "INSERT INTO clientes (nome ,cnpj ,inscestadual ,responsavel ,cpf ,rg ,endereco ,complemento ,bairro ,cidade ,estado ,celular ,email ,obs)
VALUES('$nome' ,'$cnpj' ,'$inscestadual' ,'$responsavel' ,'$cpf' ,'$rg' ,'$endereco' ,'$complemento' ,'$bairro' ,'$cidade' ,'$estado' ,'$celular' ,'$email' ,'$obs') ";
of(mysqli_query($conn, $sql)){
    header("Location: addtbc.php");
}else{
    echo "Deu erro" . $sql . <"<br>" . mysql_error($conn);
}
mysqli_close($conn);
?>