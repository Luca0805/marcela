<?php
    require_once "config.inc.php";
    $acao = isset($_POST["acao"]) ? $_POST["acao"] : $_GET["acao"];
    switch ($acao) {
        case 'salvar':
            salvar();
            break;
        
        case 'delete':
            delete();
            break;
        default:
            # code...
            break;
    }
    function salvar(){
        $esporte = isset($_POST["esporte"]) ? $_POST["esporte"] : "";
        $usu = isset($_POST["usu"]) ? $_POST["usu"] : "";
        $conexao = new PDO(MYSQL_DSN,MYSQL_USUARIO, MYSQL_SENHA);
        $sql = $conexao->query("insert into atividades values ($usu, $esporte);");
        header("location:show.php?id=$usu");
    }
    function delete(){
        $esporte = isset($_GET["esporte"]) ? $_GET["esporte"] : "";
        $usu = isset($_GET["usu"]) ? $_GET["usu"] : "";
        $conexao = new PDO(MYSQL_DSN,MYSQL_USUARIO, MYSQL_SENHA);
        $sql = $conexao->prepare("delete from atividades where id_esportes = $esporte;");
        $sql->execute();
        header("location:show.php?id=$usu");
    }
?>