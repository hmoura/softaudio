<?php
class Anamnesis extends Common
{
    public $id;
    public $pergunta;
    public $reposta;
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
