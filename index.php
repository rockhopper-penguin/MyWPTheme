<!DOCTYPE html>
	<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
		<title>
			<?php bloginfo('name'); ?>
		</title>
	</head>
	<body>
		<header>
			<h1>
				<a href="<?php echo home_url(); ?>"><?php bloginfo('name') ?></a>
			</h1>
		</header>
		<footer>
			<small>&copy;<?php bloginfo('name') ?>. This WordPress theme developed by <a href="https://github.com/rockhopper-penguin" target="_blank">Rockhopper-Penguin</a>.</small>
		</footer>
	</body>
</html>