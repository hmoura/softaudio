<?php

class Anamnesiss_Controller extends App_Controller{
	
    function add()
    {
        if ($_POST)
         
        { 
          global $MSG;
        
              var_dump($_POST);

            // 1. cria um array com os dados do objeto
           // $data = array(
           //     'tipoOcupacao'            => $_POST['tipoOcupacao'],
           //   );
            // 2. instanciar o objeto passando como parâmetro os atributos
            $ocupacao = new Occupation($_POST);

            // caso os índices do $_POST tenham os mesmos nomes dos atributos da classe
            // basta passar o $_POST inteiro como parâmetro, 
            // mas lembre-se de passar todos os campos obrigatórios do banco
            // exceto id, created_at, updated_at e deleted_at que são automáticos.

            // 3. salvar com objeto DAO
            $dao = new DAO();

        if($dao->Create($ocupacao))
        {
             $MSG->success[] = ''; 
        }else
        {
             $MSG->error[] = 'Falha ao cadastrar';
        }
        
         
          
            
        }

    }

	function search()
	{
		$dao = new DAO();

		// método Retrieve() - Nome da classe e parâmetros de busca
        $funcao = $dao->Retrieve('Occupations', 'where deleted_at is null order by tipoOcupacao');

        return $funcao;
	}

 
	function update($ocupacao)
	{
        global $MSG;
        if ($_POST && @$_POST['ocupacao'])
            
        {
        	$dao = new DAO();//Classes referentes ao objeto ficam no plural :)

            $ocupacao->set('tipoOcupacao', $_POST['tipoOcupacao']);

            
           if($dao->Update($ocupacao))
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

