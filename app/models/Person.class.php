<?php
class Person extends Common
{
    public $id;
    public $nome;
    public $cpf;
    public $rg;
    public $data_nascimento;
    public $rua;
    public $bairro;
    public $complemento;
    public $numero;
    public $cep;
    public $email;
    public $cel;
    public $tel;
    public $estado;
    public $cidade;
    public $created_at;
    public $updated_at;
    public $deleted_at;
    
    public $rel;
    
    function __construct($params=NULL)
    {
        $this->constructor($params);
        $dao = new DAO();
        $this->rel = $dao->get_related($this);
        return $this;
    }
}
?>
