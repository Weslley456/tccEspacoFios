<?php
class Produtos
{
    public $id;
    public $titulo;
    public $imagem;
    public $descricao;
    public $preco;

    public function __construct($id = false)
    {
        if ($id) {
            $this->id = $id;
            $this->carregar();
        }
    }

    public function listar()
    {
        $sql = "SELECT id, titulo, imagem, descricao, preco
                FROM produtos
                ORDER BY id";            
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=espacofios', 'root', '');
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;

    }

    public function prodexpandir()
    {
        $sql = "SELECT id, titulo, imagem, descricao, preco
                FROM produtos";   
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=espacofios', 'root', '');
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;     
    }

    public function inserir()
    {
        $sql = "INSERT INTO produtos (titulo, imagem, descricao, preco) VALUES (
            '" . $this->titulo . "', 
            '" . $this->imagem . "', 
            '" . $this->descricao . "', 
            '" . $this->preco . "')";
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=espacofios', 'root', '');
        $conexao->exec($sql); 
    }

    public function carregar()
    {
        $sql = "SELECT * FROM produtos WHERE id=". $this->id;
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=espacofios', 'root', '');
        $resultado = $conexao->query($sql);
        $linha = $resultado->fetch();
        $this->titulo = $linha['titulo'];
        $this->imagem = $linha['imagem'];
        $this->descricao = $linha['descricao'];
        $this->preco = $linha['preco'];
    }

    public function excluir()
    {
        $sql = "DELETE FROM produtos WHERE id=". $this->id;
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=espacofios', 'root', '');
        $conexao->exec($sql); 
    }

    public function consFio()
    {
        $sql = "SELECT id, titulo, imagem, descricao, preco
        FROM produtos
        ORDER BY id";   
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=espacofios', 'root', '');
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;     
    }

    public function atualizar()
    {
        $sql = "UPDATE produtos SET 
                    titulo = '$this->titulo' ,
                    imagem = '$this->imagem' ,
                    descricao = '$this->descricao' ,
                    preco = '$this->preco'            
                WHERE id = $this->id ";
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=espacofios', 'root', '');
        $conexao->exec($sql);
    }
}