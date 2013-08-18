<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
        
          
          
	
    <head>
        <?php auth('yes')?>
    	<title>SoftAudio</title>
        <?php include(DOCROOT.'/app/views/public/_inc_head.php');?>
        
        <?php
        $controller = new Questions_Controller();
        $controller->add();
        ?>

        
     
    </head>
      
    <body>
        <?php include(DOCROOT.'/app/views/public/_inc_menu.php');?>
        
                 <?php include(DOCROOT.'/app/views/public/_inc_scripts.php');?>
                
        <?php include(DOCROOT.'/app/views/public/_inc_scripts.php');?>
         <?php include(DOCROOT.'/app/views/public/_inc_footer.php');?>
        </div>
    </div>
   
       
    </body>

</html>
