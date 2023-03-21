Atividades: 
    <select name="esporte" id="esporte">
        <?php 
           buscar(); 
        ?>
    </select>
<button type="submit">+</button>
<?php
    require_once ("config.inc.php");
    function buscar(){
        require_once ("config.inc.php");
        $conexao = new PDO(MYSQL_DSN,MYSQL_USUARIO, MYSQL_SENHA);
        $sql = $conexao->query("select * from esporte");
        $id = isset($_GET["id"]) ? $_GET["id"] : 0;
        while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
            if ($id == 0) {
                echo "<option value='{$linha["id"]}'>{$linha["nome"]} - {$linha["descricao"]}</option>";
            }else{
                
            }
            
        }
    }
    function esporte($id){
        require_once ("config.inc.php");
        $conexao = new PDO(MYSQL_DSN,MYSQL_USUARIO, MYSQL_SENHA);
        $sql = $conexao->query("select * from aluno natural join atividades natural join esporte where aluno.id = atividades.id_aluno");
    }
?>
