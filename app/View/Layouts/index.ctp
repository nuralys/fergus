<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Fergus</title>
		<link href="/css/style.css" rel="stylesheet" type="text/css">
		<meta id="viewport" name="viewport" content="width=device-width,initial-scale=1">
	</head>
	<body>
		<?php echo $this->element('header'); ?>
		<main class="main">
			<?php echo $this->Session->flash('good'); ?>
			<?php echo $this->Session->flash('bad'); ?>
			<?php echo $this->fetch('content'); ?>
		</main>
		<?php echo $this->element('footer'); ?>
	</body>
</html>