<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
        
          
          
	
    <head>
        <?php auth('yes')?>
    	<title>SoftAudio</title>
        <?php include(DOCROOT.'/app/views/public/_inc_head.php');?>
        
        <?php
        $controller = new People_Controller();
        $controller->add();
        ?>

        <?php
        $controller = new People_Controller();
        $lista = $controller->search();
        ?>
     
    </head>
      
    <body>
        <?php include(DOCROOT.'/app/views/public/_inc_menu.php');?>
        
         <div class="container tabbable"> <!-- Only required for left/right tabs -->
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab1" data-toggle="tab">Listar Pacientes Cadastradas</a></li>
                <li><a href="#tab2" data-toggle="tab">Cadastrar Paciente</a></li>
            </ul>
            <div class="tab-content">
                <div class=" tab-pane active" id="tab1">
                   <p class="titulo">Listar Pacientes Cadastrados</p>
                   <?php default_messages()?>

                   

            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Nome Completo</th>
                        <th>CPF</th>
                        <th>Telefone</th>
                        <th>Celular</th>                        
                        <th>E-mail</th>
                        <th>Opções</th>

                    </tr>
                </thead>
                <tbody>
               
                <?php foreach ($lista as $pessoa):?>
                    <tr>
                        <td><?php echo $pessoa->nome?></td>
                        <td><?php echo $pessoa->cpf?></td> 
                        <td><?php echo $pessoa->tel?></td>
                        <td><?php echo $pessoa->cel?></td>
                        <td><?php echo $pessoa->email?></td>
                        <td>
                            <div align="center">
                                <a href="<?php echo WWWROOT?>/people/update/<?=$pessoa->id?>" class="btn btn-primary btn-small">Editar</a>&nbsp;&nbsp;
                                <a href="<?php echo WWWROOT?>/people/delete/<?=$pessoa->id?>"  class="btn btn-danger btn-small confirm">Excluir</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach?>
                </tbody>
            </table>
    	</div>
        <?php include(DOCROOT.'/app/views/public/_inc_scripts.php');?>
        <div class="tab-pane" id="tab2">
           
            <form action="" method="post" class="form-cadastro">
                <p class="titulo form-signin-heading">Novo(a) Paciente</p>

                <div class="controls">
                    <label class="control-label">Nome Completo*: </label>
                    <input type="text" name="nome" required placeholder="Nome Completo"  maxlength="80" class="span6"/>
           
                </div>
                <div class="controls controls-row" >
                    <label class="span2" >Data de Nascimento*: </label>
                    <label class="span2" >CPF*: </label> 
                    <label class="span2" >RG*: </label> 
                </div>
             
                 <div class="controls controls-row"> 
                    <input class="span2" type="date" name="dataNascimento" required placeholder="Data de Nascimento"/>
                    
                    <input class="span2" type="text" required name="cpf" placeholder="CPF"/>
                    <input class="span2" type="text" required name="rg" placeholder="RG"/>
                   
                             
                </div>

                 <div class="controls controls-row" >
                    <label class="span4" >Rua*: </label>
                    <label class="span2" >Número*: </label>
                    
                </div>
                <div class="controls controls-row">
                    <input class="span4" type="text" name="rua" maxlength="50" required placeholder="Rua"/>
                    <input class="span2" type="text" name="numero" required maxlength="5" placeholder="Número"/>  
                    
                </div>

                <div class="controls controls-row" >
                    <label class="span4">Bairro*: </label>
                    <label class="span1">CEP*: </label>
                </div>
                <div class="controls controls-row">
                    <input class="span4" type="text" name="bairro" maxlength="50" required placeholder="Bairro"/>
                    <input class="span2" type="text" name="cep" required placeholder="CEP"/>
                </div>
                <div class="controls">
                    <label class="control-label">Complemento: </label>
                    <input class="span6" type="text" name="complemento" maxlength="100" placeholder="Complemento"/>
                </div>
                
                <div class="controls controls-row" >
                    <label class="span4">Cidade*: </label>
                    <label class="span2">Estado*: </label>
                </div>

               <div class="controls controls-row" >
                    <input class="span4" type="text" name="cidade" required pmaxlength="80" laceholder="Cidade"/>
                     <select class="span2" type="text" name="estado" rows="5" required placeholder="Estado">
                                <option></option>
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
                    <input class="span3" type="text" name="tel" required placeholder="Telefone"/>
                    <input class="span3" type="text" name="cel" placeholder="Celular"/>
                </div>
                <div class="controls">
                    <label class="control-label">E-mail: </label>
                    <input class="span6" type="email" name="email" maxlength="50" placeholder="E-mail"/>
                </div>
                <br>
                   <center>
                        <button type="submit" class="btn btn-large btn-primary espaco-direita">Cadastrar</button>
                        <button type="reset" class="btn btn-large btn">Limpar</button>
                    <center>
                  
                
            </form>
        </div>
        <?php include(DOCROOT.'/app/views/public/_inc_scripts.php');?>
         <?php include(DOCROOT.'/app/views/public/_inc_footer.php');?>
        </div>
    </div>
   
       
    </body>

</html>
