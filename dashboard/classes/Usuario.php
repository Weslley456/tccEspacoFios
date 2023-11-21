<?php
class Usuario
{
    public $id;
    public $nome;
    public $email;
    public $senha;
    public $cpf;
    public $cidade;
    public $celular;
    public function __construct($id = false)
    {
        if ($id) {
            $this->id = $id;
        }
    }
    
    public function listar()
    {
        $sql = "SELECT id, nome, celular, email
                FROM usuario 
                ORDER BY id";   
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=espacofios', 'root', '');
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        //echo "<pre>";
        //print_r($lista);
        //echo "</pre>";
        //die(); 
        return $lista;       
    }

    public function inserir()
    {
        $sql = "INSERT INTO usuario (nome, email, senha, cpf, cidade, celular) VALUES (
            '" . $this->nome . "', 
            '" . $this->email . "',
            '" . base64_encode($this->senha) . "',
            '" . base64_encode($this->cpf) . "',
            '" . $this->cidade . "',
            '" . $this->celular . "')";
        //echo $sql;
        //die();
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=espacofios', 'root', '');
        $conexao->exec($sql); 
    }

    public function excluir()
    {
        $sql = "DELETE FROM usuario WHERE id=". $this->id;
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=espacofios', 'root', '');
        $conexao->exec($sql); 
    }

    public function carregar()
    {
        $sql = "SELECT * FROM clientes WHERE id=". $this->id;
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=espacofios', 'root', '');
        $resultado = $conexao->query($sql);
        $linha = $resultado->fetch();
        $this->nome = $linha['nome'];
        $this->email = $linha['email'];
        $this->senha = $linha['senha'];
        $this->celular = $linha['celular'];
        $this->cpf = $linha['cpf'];
        $this->cidade = $linha['cidade'];
    }

    public function atualizar()
    {
        $sql = "UPDATE usuario SET 
                    nome = '$this->nome' ,
                    email = '$this->email' ,
                    senha = '$this->senha' ,
                    celular = '$this->celular' ,
                    cpf = '$this->cpf' ,
                    cidade = '$this->cidade'   
                WHERE id = $this->id ";
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=espacofios', 'root', '');
        $conexao->exec($sql);
    }

}