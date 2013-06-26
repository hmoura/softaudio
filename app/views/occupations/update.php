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
        $ocupacao = $dao->Retrieve('Occupation', $params[0]);

        $controller = new Occupations_Controller();
        $controller->update($ocupacao);

        ?>
    </head>
      
    <body>
         <?php include(DOCROOT.'/app/views/public/_inc_menu.php');?>
        <div class="container">
             <?php default_messages()?>
            <form action="" method="post" class="form-cadastro-pequeno">
               

                <p class="titulo">Editar Função</p>

                <input type="hidden" name="ocupacao" value="1" />

                <label>Função: </label>
                <input type="text" name="tipoOcupacao" required value="<?php echo $ocupacao->tipoOcupacao?>" /><br />

                <br>
                <center>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                <center>
            </form>
        </div>
        <?php include(DOCROOT.'/app/views/public/_inc_scripts.php');?> <!-- Para por a barra de menu -->
         <?php include(DOCROOT.'/app/views/public/_inc_footer.php');?>
      
    </body>
</html>

















