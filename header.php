<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tim-Theme</title>
	<?php wp_head(); ?>
</head>
<?php if (is_home() ):

	$custom_classes = array('home_page', 'home_class');

	else: 

		$custom_classes = array('tier_page', 'tier_class');
	endif;

	?>

	<body <?php body_class($custom_classes); ?> >
		<?php wp_nav_menu(array('theme_location'=>'primary-header')); ?>

		<img src="<?php header_image(); ?>" height=" <?php echo get_custom_header()-> height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">