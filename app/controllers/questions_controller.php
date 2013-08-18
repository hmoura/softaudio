<?php
class Questions_Controller extends App_Controller {
	function add() {
		if ($_POST) {
			global $MSG;
			
			var_dump ( $_POST );
			
			$question = new Question ( $_POST );
			
			$dao = new DAO ();
			
			if ($dao->Create ( $question )) {
				$MSG->success [] = '';
			} else {
				$MSG->error [] = 'Falha ao cadastrar';
			}
		}
	}
}
function search() {
	$dao = new DAO ();
	
	// método Retrieve() - Nome da classe e parâmetros de busca
	$lista = $dao->Retrieve ( 'Questions', 'where deleted_at is null order by id' );
	
	return $lista;
}
function update($question) {
	global $MSG;
	if ($_POST && @$_POST ['question']) 

	{
		$dao = new DAO (); // Classes referentes ao objeto ficam no plural :)
		
		$question->set ( 'question', $_POST ['question'] );
		
		if ($dao->Update ( $question )) {
			$MSG->edit [] = '';
		} else {
			$MSG->error [] = '';
		}
	}
}

?>
