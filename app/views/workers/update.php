<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	
    <head>
        <?php auth('yes')?>
    	<title>SoftAudio</title>
        <?php include(DOCROOT.'/app/views/public/_inc_head.php');?>


        <?php
        // $params = variável de sistema que traz parâmetros da URL
        $profissional = $dao->Retrieve('Worker', $params[0]);

        $controller = new Workers_Controller();
        $controller->update($profissional);
        $controller = new Occupations_Controller();
        $funcao = $controller->search();
        ?>
    </head>

    <body>
         <?php include(DOCROOT.'/app/views/public/_inc_menu.php');?>
        <div class="container">
            

            <form action="" method="post" class="form-cadastro">
                <p class="titulo">Editar Profissional</p>
                 <?php default_messages()?>
                <input type="hidden" name="profissional" value="1" />


                <div class="controls">
                    <label class="control-label">Nome Completo*: </label>
                    <input type="text" name="nome" maxlength="80" placeholder="Nome Completo" class="span6" required value="<?php echo $profissional->nome?>"/>
                </div>
                
                <div class="controls controls-row " >
                    <label class="span3" >Função*: </label>
                    <label class="span3" >Data de Nascimento*:</label> 
                </div>

                <div class="controls controls-row">  

                    <select class="span3" type="text" required name="idOccupations" placeholder="Função">
                      <!-- Buscar chave estrangeira -->
                        <?php foreach ($funcao as $ocupacao):
                        if ($profissional->idOccupations == $ocupacao->id) {?> 
                        <option value="<?php echo $profissional->idOccupations?>">-- <?php echo $ocupacao->tipoOcupacao?> --</option>
                        <?php } endforeach?>
                       
                        <!-- Buscar outros campos -->
                        <?php foreach ($funcao as $ocupacao):?> 
                            <?php echo "<option value=".$ocupacao->id.">".$ocupacao->tipoOcupacao."</option>"?>
                        <?php endforeach?>
                      
                    </select>
                    <input class="span3" type="date" name="dataNascimento" required placeholder="Data de Nascimento" value="<?php echo $profissional->dataNascimento?>"/>
                </div>
            
                <div class="controls controls-row"> 
                <label class="span2">CPF*: </label> 
                <label class="span2">RG*: </label>
                <label class="span2">CR: </label>
                </div>
                <div class="controls controls-row"> 
                <input class="span2" type="text" name="cpf" placeholder="CPF" required value="<?php echo $profissional->cpf?>"/>
                <input class="span2" type="text" name="rg" placeholder="RG" required value="<?php echo $profissional->rg?>" />
                <input class="span2" type="text" name="cr" placeholder="CR" value="<?php echo $profissional->cr?>"/>
                </div>
                <div class="controls controls-row" >
                    <label class="span4" >Rua*: </label>
                    <label class="span2" >Número*: </label>
                    
                </div>
                <div class="controls controls-row">
                    <input class="span4" type="text" name="rua" placeholder="Rua" maxlength="50" required value="<?php echo $profissional->rua?>" />
                    <input class="span2" type="text" name="numero" placeholder="Número" required value="<?php echo $profissional->numero?>" />  
                    
                </div>

                 <div class="controls controls-row" >
                    <label class="span4">Bairro*: </label>
                    <label class="span1">CEP*: </label>
                </div>
               
                <div class="controls controls-row">
                    <input class="span4" type="text" name="bairro" placeholder="Bairro" maxlength="50" required value="<?php echo $profissional->bairro?>" />
                    <input class="span2" type="text" name="cep" placeholder="CEP" required value="<?php echo $profissional->cep?>"/>
                </div>

                <div class="controls">
                    <label class="control-label">Complemento: </label>
                    <input class="span6" type="text" name="complemento" maxlength="100" placeholder="Complemento" value="<?php echo $profissional->complemento?>" />
                </div>

               <div class="controls controls-row" >
                    <label class="span4">Cidade*: </label>
                    <label class="span2">Estado*: </label>
                </div>

               <div class="controls controls-row" >
                    <input class="span4" type="text" name="cidade" placeholder="Cidade" maxlength="80" required value="<?php echo $profissional->cidade?>" />
                      <select class="span2" type="text" name="estado" rows="5" required placeholder="Estado">
                                <option value="<?php echo $profissional->estado?>">-- <?php echo $profissional->estado?> --</option>
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
                    <input class="span3" type="text" name="tel" placeholder="Telefone" required value="<?php echo $profissional->tel?>"/>
                    <input class="span3" type="text" name="cel" placeholder="Celular" value="<?php echo $profissional->cel?>"/>
                </div>
                <div class="controls">
                    <label class="control-label">E-mail: </label>
                    <input class="span6" type="email" name="email" placeholder="E-mail" maxlength="80" value="<?php echo $profissional->email?>"/>
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

















