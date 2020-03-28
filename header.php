<!DOCTYPE html>
	<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>
			<?php wp_title('>', true, 'right'); ?>
			<?php bloginfo('name'); ?>
		</title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header>
			<h1>
				<a href="<?php echo home_url(); ?>"><?php bloginfo('name') ?></a>
			</h1>
		</header>