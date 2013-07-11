<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	
    <head>
        <?php auth('yes')?>
    	<title>SoftAudio</title>
        <?php include(DOCROOT.'/app/views/public/_inc_head.php');?>

        <style type="text/css">
        .comment-title{
            text-transform: capitalize;
            background: #f0f0f0;
            padding: 10px;
            margin: 0;
            border: 1px solid #ddd;
        }
        </style>

        <?php
        // $params = variável de sistema que traz parâmetros da URL
        $usuario = $dao->Retrieve('User', $params[0]);

        $controller = new Users_Controller();
        $controller->update_senha($usuario);

        ?>
    </head>
      
    <body>
         <?php include(DOCROOT.'/app/views/public/_inc_menu.php');?>
        <div class="container">
            

            <form action="" method="post" class="form-cadastro-medio">
                <p class="titulo">Editar Usuário</p>
                 <?php default_messages()?>
                <input type="hidden" name="usuario" value="1" />

                <label>Senha: </label>
                    <input type="password" name="senha" maxlength="30" class="span4" required value="<?php echo $usuario->senha?>" /><br />
                <br>
                <center>
                    <button type="submit" class="btn btn-large btn-primary">Confirmar</button>
                <center>
            </form>
        </div>
        <?php include(DOCROOT.'/app/views/public/_inc_scripts.php');?> <!-- Para por a barra de menu -->
         <?php include(DOCROOT.'/app/views/public/_inc_footer.php');?>
      
    </body>
</html>

















