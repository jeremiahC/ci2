<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<style type='text/css'>
</style>
</head>

<div id="wrapper">
	<?php echo $this->load->view('auth/pages/admin/dashboard'); ?>
		<div class="page-wrapper">
		
		<?php echo $this->session->flashdata('msg'); ?>
			
		<?php echo $output; ?>
		</div>
</div>