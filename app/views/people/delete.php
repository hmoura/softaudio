<?php
$pessoa = $dao->Retrieve('Person', $params[0]);
$dao->Delete($pessoa);//Usando a DELETE apaga da aplicação e mantem no banco; REMOVE apaga na aplicação e no banco.
header('location:'.WWWROOT.'/people');
?>