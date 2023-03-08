<?php
    class AcoesDatabase{
        public $conexao;

        public function __construct($conexao){
            $this->conexao = $conexao;
        }

        public function userExist($email){
            $query = 'Select * from users where usuario = :email';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':email', $email);
            $stmt->execute();
            return $stmt->fetch();
        }
        public function insertUser($email, $senha){
            try {
                $query = 'INSERT INTO users (usuario, senha)
                VALUES (:usuario, :senha); ';
                $stmt2 = $this->conexao->prepare($query);
                $stmt2->bindValue(':usuario', $email);
                $stmt2->bindValue(':senha', md5($senha));
                $stmt2->execute();
                echo 'Cadatrso realizado com sucesso';
                exit;
            } catch (PDOException $e) {
                echo $e;
            }    
        }

    }
?>