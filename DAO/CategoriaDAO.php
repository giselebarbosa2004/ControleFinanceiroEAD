<?php

require_once 'Conexao.php';
require_once 'UtilDAO.php';

class CategoriaDAO extends Conexao{

    public function CadastrarCategoria($nome){
        if(trim($nome) == ''){
            return 0;
        }
        //1 passo: criar uma variável que receberá o obj de conexao
        $conexao = parent::retornaConexao();

        //2 passo:criar uma variável que receberá o texto do comando SQL que deverá ser executada no BD
        $comando_sql = 'insert into tb_categoria
                        (nome_categoria, id_usuario)
                        values (?, ?);';

        //3 Passo: Criar um obj que será config. e levado no BD para ser executado
        $sql = new PDOStatement();
        
        //4 Passo: Colocar dentro do obj $sql a conexão preparada para executar o comando_sql
        $sql = $conexao->prepare($comando_sql);

        //5 Passo: Verificar se no comando_sql eu tenho ? para ser configurado. Se tiver, configurar os bindValues
        $sql->bindValue(1, $nome);
        $sql->bindValue(2, UtilDAO::CodigoLogado());
      
        try{

            //6 Passo: executar no BD
            $sql->execute();

            return 1;

        } catch(Exception $ex) {
            echo $ex->getMessage();
            return -1;
        }
    }

    public function AlterarCategoria($nome, $idCategoria){
        
        if(trim($nome) == '' || $idCategoria == ''){
            return 0;
        }

        $conexao = parent::retornaConexao();
        $comando_sql = 'update tb_categoria
                           set nome_categoria = ?
                         where id_categoria = ?
                           and id_usuario = ?';

        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql);                   
       
        $sql->bindValue(1, $nome);
        $sql->bindValue(2, $idCategoria);
        $sql->bindValue(3, UtilDAO::CodigoLogado());

        try {

            $sql->execute();
            return 1;

        } catch (Exception $ex) {
          echo $ex->getMessage();  
          return - 1;

        }

    }

    public function ExcluirCategoria($idCategoria){

        if($idCategoria == ''){
            return 0;
        }

        $conexao = parent::retornaConexao();

        $comando_sql = 'delete 
                        from tb_categoria
                        where id_categoria = ?
                         and id_usuario = ?';

        $sql = new PDOStatement();
        
        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $idCategoria);
        $sql->bindValue(2, UtilDAO::CodigoLogado());

        try{
           $sql->execute();

           return 1;
        }catch(Exception $ex){
           return -4;

        }


    }

    public function ConsultarCategoria(){
        $conexao = parent::retornaConexao();

        $comando_sql = 'select id_categoria,
                               nome_categoria
                          from tb_categoria
                          where id_usuario = ? order by nome_categoria ASC';
                         
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql);
        
        $sql->bindValue(1, UtilDAO::CodigoLogado());

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchALL();

    }

    public function DetalharCategoria($idCategoria){
        $conexao = parent::retornaConexao();
        $comando_sql = 'select id_categoria,
                               nome_categoria
                          from tb_categoria
                         where id_categoria = ?
                           and id_usuario = ?'; 
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql); 
        $sql->bindValue(1, $idCategoria);
        $sql->bindValue(2, UtilDAO::CodigoLogado());
        
        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }
}


