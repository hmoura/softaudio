<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	
    <head>
        <?php auth('yes')?>
    	<title>SoftAudio</title>
        
        <?php include(DOCROOT.'/app/views/public/_inc_head.php');?>
        <?php

        $controller = new Occupations_Controller();
        $controller->add();
       
        ?>
        

        <?php
        $controller = new Occupations_Controller();
        $funcao = $controller->search();
        ?>


    </head>
      
    <body>
        <?php include(DOCROOT.'/app/views/public/_inc_menu.php');?>

        <div class="container tabbable"> <!-- Only required for left/right tabs -->
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab1" data-toggle="tab">Listar Funções Cadastradas</a></li>
                <li><a href="#tab2" data-toggle="tab">Cadastrar Função</a></li>
            </ul>
            <div class="tab-content">
                <div class=" tab-pane active" id="tab1">
                    <p class="titulo">Listar Funções Cadastradas</p>

                
                    <?php default_messages()?>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Função</th>
                        <th>Data de Cadastro</th>
                        <th>Opções</th>

                    </tr>
                </thead>
                <tbody>
               
                <?php foreach ($funcao as $ocupacao):?>
                    <tr>
                        <td><?php echo $ocupacao->tipoOcupacao?></td>
                        <td><?php echo strftime("%d/%m/%Y", strtotime($ocupacao->created_at))?></td><!--strftime("%d/%m/%Y %H:%M:%S", strtotime($hora))-->
                        <td>
                            <div align="center">
                                <a href="<?php echo WWWROOT?>/occupations/update/<?=$ocupacao->id?>" class="btn btn-primary btn-small">Editar</a>
                                <a href="<?php echo WWWROOT?>/occupations/delete/<?=$ocupacao->id?>"  class="btn btn-danger btn-small confirm">Excluir</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach?>
                </tbody>
            </table>
        </div>
        <?php include(DOCROOT.'/app/views/public/_inc_scripts.php');?>
        <div class="tab-pane" id="tab2">
             

            

            <form action="" method="post" class="form-cadastro-pequeno">
                <p class="titulo form-signin-heading">Nova Função</p>

                <label>Função*: </label>
                <input type="text" required name="tipoOcupacao" /><br />
                <br>
                <center>
                    <button type="submit" class="btn btn-primary espaco-direita">Cadastrar</button>
                    <button type="reset" class="btn">Limpar</button>
                <center>

            </form>
         </div>
        <?php include(DOCROOT.'/app/views/public/_inc_scripts.php');?> 
        <?php include(DOCROOT.'/app/views/public/_inc_footer.php');?>
                </div>
            </div>
        
        	
    </body>
</html>

<!--

 
    <div class="tabbable"> Only required for left/right tabs 
    <ul class="nav nav-tabs">
    <li class="active"><a href="#tab1" data-toggle="tab">Section 1</a></li>
    <li><a href="#tab2" data-toggle="tab">Section 2</a></li>
    </ul>

    <div class="tab-content">
    <div class="tab-pane active" id="tab1">
    <p>I'm in Section 1.</p>
    </div>
    <div class="tab-pane" id="tab2">
    <p>Howdy, I'm in Section 2.</p>
    </div>
    </div>
    </div>-->