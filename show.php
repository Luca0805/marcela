<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        require_once "config.inc.php";
        $id = isset($_GET["id"]) ? $_GET["id"] : "";
        $conexao = new PDO(MYSQL_DSN,MYSQL_USUARIO, MYSQL_SENHA);
        $sql = $conexao->query("select * from aluno where aluno.id = '$id';");
        while($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
            echo "<table border=1>";
            echo "<tr><td><b>ID:</b> {$linha["id"]}</td><td><b>NOME:</b> {$linha["nome"]}</td><td><b>SOBRENOME:</b> {$linha["sobrenome"]}</td><td><b>EMAIL:</b> {$linha["email"]}</td><td><b>TELEFONE:</b> {$linha["telefone"]}</td></option>";
            echo "</table>";
        }
        
    ?>
    <h3>esporteS:</h3>
    <form action="acao_assoc.php" method="post">
        <input type="hidden" name="usu" id="usu" value="<?= $id; ?>">
        <h4><select name="esporte" id="esporte" onchange="clean()"><option id="void">---</option>
            <?php
                require_once "config.inc.php";
                $pais = isset($_GET["pais"]) ? $_GET["pais"] : "";
                $conexao = new PDO(MYSQL_DSN,MYSQL_USUARIO, MYSQL_SENHA);
                $sql = $conexao->query("select * from esporte where esporte.id not in (select esporte.id from aluno, atividades, esporte where aluno.id = atividades.id_aluno and atividades.id_esportes = esporte.id and aluno.id = $id);"); 
                while($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value='{$linha["id"]}'>{$linha["nome"]}</option>";
                }
            ?>
        </select><button type="submit" name="acao" id="acao" value="salvar" disabled="true">+</button></h4>   
    </form>
    <?php
        require_once "config.inc.php";
        $id = isset($_GET["id"]) ? $_GET["id"] : "";
        $conexao = new PDO(MYSQL_DSN,MYSQL_USUARIO, MYSQL_SENHA);
        $sql = $conexao->query("select esporte.id, esporte.nome, esporte.descricao from aluno, atividades, esporte where aluno.id = atividades.id_aluno and atividades.id_esportes = esporte.id and $id = aluno.id;");
        echo "<table border=1>";
        while($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
            //var_dump($linha);
            echo "
            <tr>
                <td>{$linha["id"]}</td>
                <td>{$linha["nome"]}</td>
                <td>{$linha["descricao"]}</td>
                <td><a href='acao_assoc.php?acao=delete&esporte={$linha["id"]}&usu=$id'>Delete</a></td>
            </tr>
            ";
        }
        echo "</table>";
        
    ?>
    <script>
        function clean() {
            var node = document.getElementById("void");
            if (node.parentNode) {
                node.parentNode.removeChild(node);
            }    
            var btn = document.getElementById("acao");
            btn.removeAttribute("disabled");
            console.log('oi');
        }
        
    </script>
</body>
</html>