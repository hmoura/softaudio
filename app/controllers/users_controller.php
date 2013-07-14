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
           // var_dump($_POST); //Para mostrar se estar mesmo gravando

            if($dao->Update($usuario))
                {
                 $MSG->edit[] = '';
                
           }else
           {
                $MSG->error[] = '';
           }

        }
	}

  function update_senha($usuario)
  {   global $MSG;
        if ($_POST && @$_POST['usuario'])
        {
          if ($_POST['senha'] == $_POST['senhaC']){
            $dao = new DAO();
            $usuario->set('senha', md5($_POST['senha']));
           // var_dump($_POST); //Para mostrar se estar mesmo gravando

            if($dao->Update($usuario))
                {
                 
                
                  $MSG->edit[] = '';
                   //header( 'Location: http://softaudio.com.br/softaudio/users' ) ;
                
           }else
           {
                $MSG->error[] = 'Falha ao cadastrar registro';
           }
         }else
         {
          $MSG->error[] = 'Senha não confere !';
         }

        }
  }


 
}

?>