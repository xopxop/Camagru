<?php require APPROOT . '/views/inc/header.php'; ?>
	<div class="row">
		<div class="col-md-6">
			<h1>Pictures</h1>
		</div>
		<div class="col-md-6">
			<a href="<?php echo URLROOT; ?>/pictures/add" class="btn btn-primary pull-right">
			Add Pictures
			</a>
		</div>
	</div>
	<?php foreach($data['pictures'] as $picture) : ?>
		<div class="card card-body-mb-3">
			<h4 class="card-title"><?php echo $picture->data ?></h4>
		</div>
	<?php endforeach; ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>