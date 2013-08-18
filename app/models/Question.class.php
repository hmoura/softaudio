<?php

class Question extends  Common
{
	public $id;
	public $questions;
	public $created_at;
	public $deleted_at;
	public $updated_at;
	
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
