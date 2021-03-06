<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>



<?php


if ($_POST)
{
	global $MSG;

	if($_POST['senha'] == $_POST['senhaC'])
	{
		$dados = array(
				'nome' => $_POST['nome'],
				'email' => $_POST['email'],
				'senha' => md5($_POST['senha']),

		);

		$usuario = new User($dados);


		if ($dao->Create($usuario))
		{
			$MSG->success[] = '';
		}
	} else {

		$MSG->error[] = '';

	}
}

?>
<script>
 function ver_senha(id)
        {
            var senha = document.getElementById(id);
            var senhaC = document.getElementById(id+'C');
            
            if (senha.value != senhaC.value)
            {
                senha.style.backgroundColor = "#FD5353";
                senhaC.style.backgroundColor = "#FD5353";

                botao.disabled = true;
                alert("Senha diferentes")
                return false;

            } else {
                botao.disabled = false;
            }
            senha.style.backgroundColor = "#88F79B";
            senhaC.style.backgroundColor = "#88F79B";

            return true;
        }

</script>

<?php
$usuarios = $dao->Retrieve('Users', 'order by nome');
?>
<title>SoftAudio</title>
<?php auth('yesa')?>
<?php include(DOCROOT.'/app/views/public/_inc_head.php');?>

</head>

<body>
	<?php include(DOCROOT.'/app/views/public/_inc_menu.php');?>
	<div class="container tabbable">
		<!-- Only required for left/right tabs -->
		<ul class="nav nav-tabs">
			<li class="active"><a href="#tab1" data-toggle="tab">Listar Usuários
					Cadastradas</a></li>
			<li><a href="#tab2" data-toggle="tab">Cadastrar Usúario</a></li>
		</ul>
		<div class="tab-content">
			<div class=" tab-pane active" id="tab1">
				<p class="titulo">Listar Usuários</p>
				<?php default_messages()?>
				<table class="table table-striped table-hover table-bordered">
					<thead>
						<tr>
							<th>Login</th>
							<th>E-mail</th>
							<th>Data de Cadastro</th>
							<th>Opções</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($usuarios as $usuario):?>
						<tr>
							<td><?php echo $usuario->nome?></td>
							<td><?php echo $usuario->email?></td>
							<td><?php echo strftime("%d/%m/%Y", strtotime($usuario->created_at))?>
							</td>
							<td>
								<div align="center">
									<a href="<?php echo WWWROOT?>/users/update/<?=$usuario->id?>"
										class="btn btn-primary btn-small">Editar</a>&nbsp;&nbsp; <a
										href="<?php echo WWWROOT?>/users/update-senha/<?=$usuario->id?>"
										class="btn btn-primary btn-small">Editar Senha</a>&nbsp;&nbsp;
									<a href="<?PHP echo WWWROOT?>/users/delete/<?=$usuario->id?>"
										class="btn btn-danger btn-small confirm">Excluir</a>

								</div>
							</td>
						</tr>
						<?php endforeach?>
					</tbody>
				</table>
			</div>

			<?php include(DOCROOT.'/app/views/public/_inc_scripts.php');?>
			<div class="tab-pane" id="tab2">


				<form action="" method="post" class="form-cadastro-medio" name="frm"
					id="frm" onsubmit="return valida( this );">
					<p class="titulo form-signin-heading">Novo Usuário</p>

					<label>Login*: </label> <input type="text" id="nome" maxlength="40"
						name="nome" required class="span4" /><br /> <label>Senha*: </label>
					<input type="password" name="senha" maxlength="30" id="senha"
						required class="span4" /><br /> <label>Confirma senha*: </label> <input
						type="password" name="senhaC" id="senhaC" maxlength="30"
						onchange="ver_senha('senha')" required class="span4" /><br /> <label>E-mail*:
					</label> <input type="email" name="email" required class="span4" /><br />

					<center>
						<button type="submit" name="botao" disabled id="botao"
							class="btn btn-large btn-primary espaco-direita">Cadastrar</button>
						<button type="reset" class="btn btn-large btn">Limpar</button>
						</center>
				
				</form>
			</div>
			<?php include(DOCROOT.'/app/views/public/_inc_scripts.php');?>
			<?php include(DOCROOT.'/app/views/public/_inc_footer.php');?>
		</div>
	</div>
</body>
</html>
