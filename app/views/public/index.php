<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <?php auth('yes')?>
    	<title>SoftAudio</title>
        <?php include(DOCROOT.'/app/views/public/_inc_head.php');?>
    </head>
      
    <body>
        <?php include(DOCROOT.'/app/views/public/_inc_menu.php');?>
        <div class="container">
            <div align="center">
            	<p class="topo-titulo">Bem vindo(a) ao projeto SoftAudio!</p>
                <br><br>
                <img class="text-center" src="http://softaudio.com.br/softaudio/webroot/img/construcao.png">
            </div>
        </div>
        <?php include(DOCROOT.'/app/views/public/_inc_scripts.php');?>
        <?php include(DOCROOT.'/app/views/public/_inc_footer.php');?>
    </body>
</html>
