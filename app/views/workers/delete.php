<?php
$profissional = $dao->Retrieve('Worker', $params[0]);
$dao->Delete($profissional);//Usando a DELETE apaga da aplicação e mantem no banco; REMOVE apaga na aplicação e no banco.
header('location:'.WWWROOT.'/workers');
?>