<?php
class Mensagem
{
    public $id;
    public $nome;
    public $email;
    public $mensagem;
    public function __construct($id = false)
    {
        if ($id) {
            $this->id = $id;
        }
    }

    public function excluir()
    {
        $sql = "DELETE FROM comentarios WHERE id=". $this->id;
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=espacofios', 'root', '');
        $conexao->exec($sql); 
    }


}
?>
    