<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Pet <?php echo $customer['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome:</dt>
	<dd><?php echo $customer['nome']; ?></dd>

	<dt>Idade:</dt>
	<dd><?php echo $customer['idade']; ?></dd>

	<dt>Responsavel :</dt>
	<dd><?php echo $customer['responsavel']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Endereço:</dt>
	<dd><?php echo $customer['endereco']; ?></dd>

	<dt>Telefone:</dt>
	<dd><?php echo $customer['contato']; ?></dd>

	<dt>Observacao:</dt>
	<dd><?php echo $customer['obs']; ?></dd>

	<!-- <dt>Data de Cadastro:</dt>
	<dd><?php echo $customer['created']; ?></dd> -->
</dl>

<!-- <dl class="dl-horizontal">
	<dt>Cidade:</dt>
	<dd><?php echo $customer['city']; ?></dd>

	<dt>Telefone:</dt>
	<dd><?php echo $customer['phone']; ?></dd>

	<dt>Celular:</dt>
	<dd><?php echo $customer['mobile']; ?></dd>

	<dt>UF:</dt>
	<dd><?php echo $customer['state']; ?></dd>

	<dt>Inscrição Estadual:</dt>
	<dd><?php echo $customer['ie']; ?></dd>
</dl> -->

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>