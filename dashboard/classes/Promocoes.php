<?php
class Promocoes
{
    public $id;
    public $nomeCliente;
    public $senha;
    public $produto;
    public $preco;
    public $qtdeProdutos;
    public $observacoes;
    public $titulo;

    public function __construct($id = false)
    {
        if ($id) {
            $this->id = $id;
        }
    }
    
    public function listar()
    {
        $sql = "SELECT id, nomeCliente, produto, preco
                FROM promocoes 
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
        $sql = "INSERT INTO promocoes (id, nomeCliente, senha, produto, preco, qtdeProdutos, observacoes, titulo) VALUES (
            '" . $this->id . "', 
            '" . $this->nomeCliente . "', 
            '" . $this->senha . "',
            '" . $this->produto . "',
            '" . $this->preco . "',
            '" . $this->qtdeProdutos . "',
            '" . $this->observacoes . "',
            '" . $this->titulo . "')";
        //echo $sql;
        //die();
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=espacofios', 'root', '');
        $conexao->exec($sql); 
    }

    public function excluir()
    {
        $sql = "DELETE FROM promocoes WHERE id=". $this->id;
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=espacofios', 'root', '');
        $conexao->exec($sql); 
    }
}