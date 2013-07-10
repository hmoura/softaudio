<div class="container">
    <a  titulo="SoftAudio" href="<?php echo WWWROOT?>">
        <img align="left" src="http://softaudio.com.br/softaudio/webroot/img/logo.svg">
    </a>
    <a titulo="SoftAudio" href="<?php echo WWWROOT?>">
        <p class="topo-titulo" align="center">SoftAudio</p> <!--Tentar pro o nome um pouco para a esquerda--> 
    </a>    
</div>
<div class="container">
    <div class="navbar">
        <div class="navbar-inner">
            
            <ul class="nav nav-pills">
               <li class="dropdown"><a href="<?php echo WWWROOT?>/people">Paciente</a></li>
              
                <li class="divider-vertical"></li>
                <li class="dropdown"><a href="<?php echo WWWROOT?>/occupations">Função</a></li>
                       
                  
                <li class="divider-vertical"></li>
                 <li class="dropdown"><a href="<?php echo WWWROOT?>/workers">Profissional</a></li>
             
                <li class="divider-vertical"></li>
                 <li class="dropdown"><a href="<?php echo WWWROOT?>/users">Usuário</a></li>
           
                <li class="divider-vertical"></li>
                <?php if ($_SESSION):?>
                    <li class="dropdown nome-login">Seja bem vindo(a) <?php echo $_SESSION['nome']?> - </li>
                    <li><a href="<?php echo WWWROOT?>/session/logout">Sair</a></li>
                <?php else:?>
                    <li><a href="<?php echo WWWROOT?>/session/login">Login</a></li>
                <?php endif;?>
            </ul>
        </div>
    </div>
</div>