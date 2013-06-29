<?php

class People_Controller extends App_Controller{
	
    function add()
    {
        if ($_POST)
        {
            global $MSG;

            // 1. cria um array com os dados do objeto
            $data = array(
                'nome'            => $_POST['nome'],
                'cpf'             => $_POST['cpf'],
                'rg'              => $_POST['rg'],
                'data_nascimento' => $_POST['data_nascimento'],
                'rua'             => $_POST['rua'],
                'bairro'          => $_POST['bairro'],
                'complemento'     => $_POST['complemento'],
                'numero'          => $_POST['numero'],
                'cep'             => $_POST['cep'],
                'email'           => $_POST['email'],
                'cel'             => $_POST['cel'],
                'cidade'          => $_POST['cidade'],
                'estado'          => $_POST['estado'],
                'tel'             => $_POST['tel'],);
            // 2. instanciar o objeto passando como parâmetro os atributos
            $pessoa = new Person($data);

            // caso os índices do $_POST tenham os mesmos nomes dos atributos da classe
            // basta passar o $_POST inteiro como parâmetro,
            // mas lembre-se de passar todos os campos obrigatórios do banco
            // exceto id, created_at, updated_at e deleted_at que são automáticos.

            // 3. salvar com objeto DAO
            $dao = new DAO();

          if($dao->Create($pessoa))
          {
                $MSG->success[] = ' ';
          }

            
        }
    }

	function search()
	{
		$dao = new DAO();

		// método Retrieve() - Nome da classe e parâmetros de busca
        $lista = $dao->Retrieve('People', 'where deleted_at = "0000-00-00 00:00:00"  order by nome');

        return $lista;
	}

	function update($pessoa)
	{
         global $MSG;
        if ($_POST && @$_POST['pessoa'])
        {
        	$dao = new DAO();//Classes referentes ao objeto ficam no plural :)

            $pessoa->set('nome', $_POST['nome']);
            $pessoa->set('cpf', $_POST['cpf']);
            $pessoa->set('rg', $_POST['rg']);
            $pessoa->set('data_nascimento', $_POST['data_nascimento']);
            $pessoa->set('rua', $_POST['rua']);
            $pessoa->set('bairro', $_POST['bairro']);
            $pessoa->set('complemento', $_POST['complemento']);
            $pessoa->set('numero', $_POST['numero']);
            $pessoa->set('cep', $_POST['cep']);
            $pessoa->set('email', $_POST['email']);
            $pessoa->set('cel', $_POST['cel']);
            $pessoa->set('estado', $_POST['estado']);
            $pessoa->set('cidade', $_POST['cidade']);
            $pessoa->set('tel', $_POST['tel']);

           if($dao->Update($pessoa))
            {
                 $MSG->edit[] = '';
                
           }else
           {
                $MSG->error[] = '';
           }

            
        }
        
	}

}

?>

