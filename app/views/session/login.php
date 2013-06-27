<?php
if ($_POST)
{
    global $MSG;
    $dados = array(
        'nome' => $_POST['nome'],
        'senha' => md5($_POST['senha']),
        'deleted_at' => ('0000-00-00 00:00:00')
        
    );

     
    
    $usuario = $dao->Retrieve('Users', $dados);//se colocar o terceiro parametro ele retorna a string da pesquisa

    
    if ($usuario)
    {
        
        $_SESSION['id'] = $usuario->id;
        $_SESSION['nome'] = $usuario->nome;
        $_SESSION['email'] = $usuario->email;


        
        redirect_to();
          
    }
    else
    {
        $MSG->error[] = 'Erro ao logar. Verifique os dados e tente novamente.';
    }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <?php auth('no')?>
    	<title>SoftAudio</title>
        <?php include(DOCROOT.'/app/views/public/_inc_head.php');?>
    </head>
      
    <body>
        <?php include(DOCROOT.'/app/views/public/_inc_menu.php');?>
        <div class="container" >
        	  <?php default_messages()?>
            <form action="" method="post" class="form-cadastro-medio">
                <p class="titulo form-signin-heading" align="center">Login</p><br>
                <label>Login:</label>
                <input type="text" class="span4" required name="nome" id="nome" /><br>

                <label>Senha:</label>
                <input type="password" class="span4" required name="senha" /><br><br>
               
                <center>
                    <button type="submit" align="center" class="btn btn-large btn-primary espaco-direita">Entrar</button>
                    <button type="reset" class="btn-large btn">Limpar</button>
                <center>

            </form>
        	
        </div>
        <?php include(DOCROOT.'/app/views/public/_inc_scripts.php');?>
         <?php include(DOCROOT.'/app/views/public/_inc_footer.php');?>
      <!--  <script type="text/javascript">
        $(document).ready(function(){
            $("#nome").focus();
        });
        </script> -->
    </body>
</html>
