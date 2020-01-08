<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Client <?php echo $customer['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Name:</dt>
	<dd><?php echo $customer['name']; ?></dd>

	<dt>CPF / CNPJ:</dt>
	<dd><?php echo $customer['cpf_cnpj']; ?></dd>

	<dt>Birthdate:</dt>
	<dd><?php echo $customer['birthdate']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Address:</dt>
	<dd><?php echo $customer['address']; ?></dd>

	<dt>Hood:</dt>
	<dd><?php echo $customer['hood']; ?></dd>

	<dt>Zip Code:</dt>
	<dd><?php echo $customer['zip_code']; ?></dd>

	<dt>Created In:</dt>
	<dd><?php echo $customer['created']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>City:</dt>
	<dd><?php echo $customer['city']; ?></dd>

	<dt>Phone:</dt>
	<dd><?php echo $customer['phone']; ?></dd>

	<dt>Mobile:</dt>
	<dd><?php echo $customer['mobile']; ?></dd>

	<dt>State:</dt>
	<dd><?php echo $customer['state']; ?></dd>

	<dt>IE:</dt>
	<dd><?php echo $customer['ie']; ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-primary">Edit</a>
	  <a href="index.php" class="btn btn-default">Return</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>