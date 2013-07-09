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
        $pessoa = $dao->Retrieve('Person', $params[0]);

        $controller = new People_Controller();
        $controller->update($pessoa);

        ?>
    </head>
      
    <body>
         <?php include(DOCROOT.'/app/views/public/_inc_menu.php');?>
        <div class="container">
            

            <form action="" method="post" class="form-cadastro">
                <p class="titulo form-signin-heading">Editar Paciente</p>
                 <?php default_messages()?>
                <input type="hidden" name="pessoa" value="1" />

                 <div class="controls">
                    <label class="control-label">Nome Completo*: </label>
                    <input type="text" name="nome" required placeholder="Nome Completo" maxlength="80" class="span6" value="<?php echo $pessoa->nome?>"/>
                </div>
                <div class="controls controls-row " >
                    <label class="span2" >Data de Nascimento*: </label>
                    <label class="span2" >CPF: </label> 
                    <label class="span2" >RG: </label> 
                </div>
             
                 <div class="controls controls-row">  
                    <input class="span2" type="date" required name="dataNascimento" placeholder="Data de Nascimento" value="<?php echo $pessoa->dataNascimento?>"/>
                    <input class="span2" type="text" required name="cpf" placeholder="CPF" value="<?php echo $pessoa->cpf?>"/>
                    <input class="span2" type="text" required name="rg" placeholder="RG" value="<?php echo $pessoa->rg?>"/>
                </div>

                 <div class="controls controls-row" >
                    <label class="span4" >Rua*: </label>
                    <label class="span2" >Número*: </label>
                    
                </div>
                <div class="controls controls-row">
                    <input class="span4" type="text" name="rua" required maxlength="50" placeholder="Rua" value="<?php echo $pessoa->rua?>"/>
                    <input class="span2" type="text" name="numero" required placeholder="Número" value="<?php echo $pessoa->numero?>"/>  
                    
                </div>

                <div class="controls controls-row" >
                    <label class="span4">Bairro*: </label>
                    <label class="span1">CEP*: </label>
                </div>
                <div class="controls controls-row">
                    <input class="span4" type="text" name="bairro" required maxlength="50" placeholder="Bairro" value="<?php echo $pessoa->bairro?>"/>
                    <input class="span2" type="text" name="cep" required placeholder="CEP" value="<?php echo $pessoa->cep?>"/>
                </div>
                <div class="controls">
                    <label class="control-label">Complemento: </label>
                    <input class="span6" type="text" name="complemento" maxlength="100" placeholder="Complemento" value="<?php echo $pessoa->complemento?>"/>
                </div>

                <div class="controls controls-row" >
                    <label class="span4">Cidade*: </label>
                    <label class="span2">Estado*: </label>
                </div>

               <div class="controls controls-row" >
                    <input class="span4" type="text" name="cidade" required maxlength="80" placeholder="Cidade" value="<?php echo $pessoa->cidade?>"/>
                    <select class="span2" type="text" name="estado" rows="5" required placeholder="Estado">
                                <option value="<?php echo $pessoa->estado?>">-- <?php echo $pessoa->estado?> --</option>
                                 <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AM">AM</option>
                                <option value="AP">AP</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MG">MG</option>
                                <option value="MS">MS</option>
                                <option value="MT">MT</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="PR">PR</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RS">RS</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="SC">SC</option>
                                <option value="SE">SE</option>
                                <option value="SP">SP</option>
                                <option value="TO">TO</option>
                        </select>
                </div>

                <div class="controls controls-row" >
                   <label class="span3">Telefone*: </label>
                   <label class="span3">Celular: </label>
                </div>
                <div class="controls controls-row">
                    <input class="span3" type="text" name="tel" placeholder="Telefone" required value="<?php echo $pessoa->tel?>"/>
                    <input class="span3" type="text" name="cel" placeholder="Celular" value="<?php echo $pessoa->cel?>"/>
                </div>
                <div class="controls">
                    <label class="control-label">E-mail: </label>
                    <input class="span6" type="email" name="email" placeholder="E-mail" maxlength="50" value="<?php echo $pessoa->email?>"/>
                </div>
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