<?php

class Workers_Controller extends App_Controller{

    function add()
    {
        if ($_POST)
        {
           var_dump($_POST);
            global $MSG;

        /*
               // 1. cria um array com os dados do objeto
            $data = array(
                'nome'            => $_POST['nome'],
                'idOccupations'   => $_POST['idOccupations'],
                'cpf'             => $_POST['cpf'],
                'rg'              => $_POST['rg'],
                'dataNascimento'  => $_POST['dataNascimento'],
                'cr'              => $_POST['cr'],
                'rua'             => $_POST['rua'],
                'bairro'          => $_POST['bairro'],
                'complemento'     => $_POST['complemento'],
                'numero'          => $_POST['numero'],
                'cep'             => $_POST['cep'],
                'cidade'          => $_POST['cidade'],
                'estado'          => $_POST['estado'],
                'email'           => $_POST['email'],
                'cel'             => $_POST['cel'],
                'tel'             => $_POST['tel'],);
            */

            // 2. instanciar o objeto passando como parâmetro os atributos
            //$profissional = new Worker($data);
            $profissional = new Worker($_POST);

            // caso os índices do $_POST tenham os mesmos nomes dos atributos da classe
            // basta passar o $_POST inteiro como parâmetro, 
            // mas lembre-se de passar todos os campos obrigatórios do banco
            // exceto id, created_at, updated_at e deleted_at que são automáticos.

            // 3. salvar com objeto DAO
            $dao = new DAO();

            

          if ($dao->Create($profissional))
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
        $lista = $dao->Retrieve('Workers', 'where deleted_at is null order by nome');

        return $lista;
    }

    function update($profissional)
    {    global $MSG;
        if ($_POST && @$_POST['profissional'])
        {
            var_dump($_POST);
            $dao = new DAO();
            $profissional->set('nome', $_POST['nome']);
            $profissional->set('rg', $_POST['rg']);
            $profissional->set('idOccupations', $_POST['idOccupations']);
            $profissional->set('cpf', $_POST['cpf']);
            $profissional->set('dataNascimento', $_POST['dataNascimento']);
            $profissional->set('cr', $_POST['cr']);
            $profissional->set('cel',$_POST['cel']);
            $profissional->set('tel', $_POST['tel']);
            $profissional->set('email', $_POST['email']);
            $profissional->set('rua', $_POST['rua']);
            $profissional->set('bairro', $_POST['bairro']);
            $profissional->set('cep', $_POST['cep']);
            $profissional->set('complemento', $_POST['complemento']);
            $profissional->set('numero', $_POST['numero']);
            $profissional->set('cidade', $_POST['cidade']);
            $profissional->set('estado', $_POST['estado']);


            if($dao->Update($profissional))
             {
                 $MSG->edit[] = ''
;                
           }else
           {
                $MSG->error[] = '';
           }

            
        }
    }

}

?>