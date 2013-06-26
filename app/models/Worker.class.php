<?php
class Worker extends Common
{
    public $id;
    public $idOccupations;
    public $nome;
    public $cpf;
    public $rg;
    public $dataNascimento;
    public $cr;
    public $cel;
    public $tel;
    public $email;
    public $rua;
    public $bairro;
    public $complemento;
    public $cidade;
    public $estado;
    public $numero;
    public $cep;
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
