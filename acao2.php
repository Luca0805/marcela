<?php
    require_once ("config.inc.php");
    $conexao = new PDO(MYSQL_DSN,MYSQL_USUARIO, MYSQL_SENHA);
    if (!$conexao){
    echo "erro ao conectar";
    die();
}
    else{
    // montar a consulta
    $consulta = 'INSERT INTO esporte(nome, descricao)
            VALUES(:nome, :descricao)';
    $query = $conexao -> prepare($consulta);
    $query->bindValue(':nome', $_POST['nome']);
    $query->bindValue(':descricao', $_POST['descricao']);

    //executar

    if ($query->execute())
    header("location:contatos.php?id=".$conexao->lastInsertID());

    else{
        echo "erro!";
    }
}