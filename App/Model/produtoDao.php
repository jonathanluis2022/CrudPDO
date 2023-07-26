<?php
     namespace App\Model ;

    class ProdutoDao {
        
        public function create(Produto $p) {//instancio dentro do metodo create

            $sql = 'INSERT INTO produtos(nome, descricao) VALUES(?, ?)';

            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $p->getnome());
            $stmt->bindValue(2, $p->getDescricao());
            $stmt->execute();
        }

        public function read() {
            $sql = 'SELECT * FROM produtos';

            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->execute();

            if($stmt->rowCount() > 0): //si houver algum registro 
                $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                return $result ;
            else:
                return [];
            endif;
        }

        public function update(Produto $p) {

            $sql = 'UPDATE produtos SET nome = ? , descricao = ? WHERE id = ? ';

            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1 , $p->getNome());
            $stmt->bindValue(2 , $p->getDescricao());
            $stmt->bindValue(3 , $p->getiD());
            $stmt->execute();
            
        }

        public function delete($id) {
            
            $sql = 'DELETE FROM produtos WHERE id = ?';

            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
        }
    }