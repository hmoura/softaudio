function valida( frm )
{
var nome = frm.nome.value ;
var msg = "" ;
if ( nome.search( /\s/g ) != -1 )
{
msg+= "Não é permitido espaços em branco\n" ;
nome = nome.replace( /\s/g , "" ) ;
}   
if ( nome.search( /[^a-z0-9]/i ) != -1 )
{
msg += "Não é permitido caracteres especiais" ;
nome = nome.replace( /[^a-z0-9]/gi , "" ) ;
}
if ( msg )
{
alert( msg ) ;
frm.nome.value = nome ;
return false ;
}
return true ;   
}