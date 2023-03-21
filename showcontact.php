<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once "config.inc.php"; ?>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php echo "<table border=1>";?>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Email</th>
            <th>Data Nasc.</th>
            <th>Telefone</th>
            <th>Cidade</th>
            <th>Observação</th>
            <th>Detalhes</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
        
            <?php
                $filtro = isset($_GET["filtro"]) ? $_GET["filtro"] : "";
                $conexao = new PDO(MYSQL_DSN,MYSQL_USUARIO, MYSQL_SENHA);
                $sql = $conexao->query("select aluno.id, aluno.nome as nome, aluno.sobrenome as sobrenome, aluno.email as email, aluno.niver as niver, aluno.telefone as telefone, 
                aluno.observa as observa, cidade.nome as cidade from aluno, cidade where aluno.cidade = cidade.id;");
                while($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
                    //var_dump($linha);
                    echo "
                    <tr>
                        <td>{$linha["id"]}</td>
                        <td>{$linha["nome"]}</td>
                        <td>{$linha["sobrenome"]}</td>
                        <td>{$linha["email"]}</td>
                        <td>{$linha["niver"]}</td>
                        <td>{$linha["telefone"]}</td>
                        <td>{$linha["cidade"]}</td>
                        <td>{$linha["observa"]}</td>
                        <td><a href='show.php?id={$linha["id"]}'>Info</a></td>
                        <td><a href='acao.php?acao=edit&id={$linha["id"]}'>Edit</a></td>
                        <td><a href='acao.php?acao=delete&id={$linha["id"]}'>Delete</a></td>
                    </tr>
                    ";
                }
            ?>
        
    </table>

    <h1><a href="index.html">Inicio</a></h1>
</body>
</html>