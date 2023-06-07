<?php
class Database{
    public function criarConexao(){
            try{
                require_once("../../conf/conexao.php");
                $conexao = Conexao::getInstance();
                return $conexao;
            } catch(PDOException $e){
                echo ('erro no conectar');
            }
        }
    public function executar($sql, $par){
            $conexao = $this->criarConexao();
            $comando = $this->prepararComando($conexao, $sql, $par);
            return $comando->execute();
            } 

    public function prepararComando($con, $sql, $par){
            try{
                $comando = $con->prepare($sql);
            foreach($par as $chave=>$valor){
                $comando->bindValue($chave, $valor);
            } return $comando;
        }
            catch(PDOException $e){
            echo "erro: ".$e->erroInfo;
        }
    }
    public function excluir(){
 
            $sql = 'DELETE FROM usuario WHERE id = :id';
            $params = array(':id'=>$id);
            $this->prepararComando($conexao, $sql, $params);
            $this->executar();
        }
        public function atualizar(){}
        public function listar(){}



    }

?>