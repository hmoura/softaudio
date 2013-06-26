<?php
$funcao = $dao->Retrieve('Occupation', $params[0]);
$dao->Delete($funcao);//Usando a DELETE apaga da aplicação e mantem no banco; REMOVE apaga na aplicação e no banco.
header('location:'.WWWROOT.'/occupations');
?>