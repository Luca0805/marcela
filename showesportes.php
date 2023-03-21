<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once "config.inc.php"; ?>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <center>
    <?php echo "<table border=1>";?>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
        
            <?php
                $filtro = isset($_GET["filtro"]) ? $_GET["filtro"] : "";
                $conexao = new PDO(MYSQL_DSN,MYSQL_USUARIO, MYSQL_SENHA);
                $sql = $conexao->query("select * from esporte");
                while($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
                    //var_dump($linha);
                    echo "
                    <tr>
                        <td>{$linha["id"]}</td>
                        <td>{$linha["nome"]}</td>
                        <td>{$linha["descricao"]}</td>
                        <td><a href='acao_assoc.php?acao=edit&id={$linha["id"]}'>Edit</a></td>
                        <td><a href='acao_assoc.php?acao=delete&id={$linha["id"]}'>Delete</a></td>
                    </tr>
                    ";
                }
            ?>
    
    </table>
    <h1><a href="index.html">inicio</a></h1>
</center>    
</body>
</html>