<?php
    require_once ("config.inc.php");
    $conexao = new PDO(MYSQL_DSN,MYSQL_USUARIO, MYSQL_SENHA);
    echo "<a href='index.html'> inicio</h1> <br><br>    ";
    if (!$conexao){
    echo "erro ao conectar";
    die();
}
    else{
    // montar a consulta
    $consulta = 'INSERT INTO aluno(nome, sobrenome,email,telefone,niver,cidade,observa,vivo)
            VALUES(:nome, :sobrenome, :email, :telefone, :niver, :cidade, :observa, :vivo)';
    $query = $conexao -> prepare($consulta);
    $query->bindValue(':nome', $_POST['nome']);
    $query->bindValue(':sobrenome', $_POST['sobrenome']);
    $query->bindValue(':email', $_POST['email']);
    $query->bindValue(':telefone', $_POST['telefone']);
    $query->bindValue(':niver', $_POST['niver']);
    $query->bindValue(':cidade', $_POST['cidade']);
    $query->bindValue(':observa', $_POST['observa']);
    $query->bindValue(':vivo', $_POST['vivo']== 'on'?1:0);

    //executar

    if ($query->execute())
    echo 'Registro feito com sucesso! cadastro n°'. $conexao->lastInsertID();
        else{
        echo "erro!";
    }
}