<?php
/**
*  
*/
class Users_Controller extends App_Controller{
	

/*	function search()
	{
		$dao = new DAO();

		// método Retrieve() - Nome da classe e parâmetros de busca
        $lista = $dao->Retrieve('Users', 'all');

        return $lista;
	}*/

	function update($usuario)
	{   global $MSG;
        if ($_POST && @$_POST['usuario'])
        {
        	$dao = new DAO();
            $usuario->set('nome', $_POST['nome']);
            $usuario->set('email', $_POST['email']);
            $usuario->set('senha', md5($_POST['senha']));
           // var_dump($_POST); //Para mostrar se estar mesmo gravando

            if($dao->Update($usuario))
                {
                 $MSG->editado[] = '';
                
           }else
           {
                $MSG->error[] = '';
           }

        }
	}


 
}

?>