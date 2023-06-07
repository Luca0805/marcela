<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require "../../conf/conexao.php";
    ?>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>bem vindo</title>
</head>
<body>
    <form action="" method="get"><input type="text" class="form-control" name="filtro" id="filtro">
        <input type="submit" class="btn btn-secondary" value="pesquisar">
    </form>
    <?php echo "<table class='table-secondary'>";?>
        <legend>Alunos(ou nao)</legend>
        <tr>
            <th>id</th>
            <th>nome</th>
            <th>rg</th>
            <th>login</th>
            <th>senha</th>
            <th>matricula</th>
            <th>turma</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
    
        <?php
            $filtro = isset($_GET["filtro"]) ? $_GET["filtro"] : "";
            $conexao = Conexao::getInstance();
            $sql = $conexao->query("SELECT * FROM aluno WHERE aluno.nome like '$filtro%';");
            while($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
                //var_dump($linha);
                echo "
                <tr>
                    <td>{$linha["id"]}</td>
                    <td>{$linha["nome"]}</td>
                    <td>{$linha["rg"]}</td>
                    <td>{$linha["login"]}</td>
                    <td>{$linha["senha"]}</td>
                    <td>{$linha["matricula"]}</td>
                    <td>{$linha["turma"]}</td>
                    <td><a href='cad.php?acao=editar&id={$linha["id"]}&&tipo=1'>Edit</a></td>
                    <td><a href='acao.php?acao=deletar&id={$linha["id"]}&&tipo=1'>Delete</a></td>
                </tr>
                ";
            }
        ?>
    
    </table>
    <a href="cadAluno.php">cadastro aluno</a>
    <?php echo "<table class='table-secondary'>";?>
        <legend>servidor</legend>
        <tr>
            <th>id</th>
            <th>nome</th>
            <th>rg</th>
            <th>login</th>
            <th>senha</th>
            <th>matricula</th>
            <th>turma</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        
<?php
                $filtro = isset($_GET["filtro"]) ? $_GET["filtro"] : "";
                $conexao = Conexao::getInstance();
                $sql = $conexao->query("SELECT * FROM servidor WHERE servidor.nome like '$filtro%';");
                while($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
          echo "<tr>
                <td>{$linha["id"]}</td>
                <td>{$linha["nome"]}</td>
                <td>{$linha["rg"]}</td>
                <td>{$linha["login"]}</td>
                <td>{$linha["senha"]}</td>
                <td>{$linha["siape"]}</td>
                <td>{$linha["dtAdmissao"]}</td>
                <td><a href='cad.php?acao=editar&id={$linha["id"]}&&tipo=2'>Edit</a></td>
                <td><a href='acao.php?acao=deletar&id={$linha["id"]}&&tipo=2'>Delete</a></td>
             </tr>
         ";
        }
?>
        
    </table>
    <a href="cadServidor.php">cadastro servidor</a>
</body>
</html>