<?
$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

//Consulta

$sql = "SELECT `nome`, `email` , `senha` FROM `usuarios` WHERE id = $id";
$query = $mysqli->query($sql);

while ($dados = $query->fetch_assoc()) {
	$id  = $dados["id"];
	$nome  = $dados["nome"];
	$email = $dados["email"];
    $senha = $dados["senha"];
    }
    
    ?>

    <form id ="formulario" name="formulario" method="post" action="saveEdit.php">
	<input type="text" readonly name="id" id="id" value="<?php echo $id;?>" /><br>
    <input type="text" name="nome" id="nome" value="<?php echo $nome;?>" /><br>
    <input type="text" name="email" id="email" value="<?php echo $email;?>" /><br>
    <input type="text" name="senha" id="senha" value="<?php echo $senha;?>" /><br>

    <input type="submit" onClick="return confirm('Deseja atualizar o registro?');" name="Submit" value="SALVAR ALTERAÇÕES" id="button-form" />
 </form>
    ;


