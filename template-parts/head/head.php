<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

	<?php
	if ( ! function_exists( '_wp_render_title_tag' ) ) {
		function theme_slug_render_title() {
			?>
            <title><?php wp_title( '|', true, 'right' ); ?></title>
			<?php
		}

		add_action( 'wp_head', 'theme_slug_render_title' );
	}
	?>
    <!-- Custom styles for this template -->
    <link href="<?php echo get_bloginfo( 'template_directory' ); ?>/index.css" rel="stylesheet">
    <!--  Header scripts  -->
    <script src="<?php echo get_bloginfo( 'template_directory' ); ?>/dist/header.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
</head>
