<html lang="en">
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
    <link href="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/css/index.css" rel="stylesheet">
    <!--  Header scripts  -->
    <script src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/js/header.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
</head>
<body>
<header id="home" class="header" itemtype="http://schema.org/WPHeader" style="min-height: 90px;">
    <nav class="navbar navbar-expand-md navbar-light" id="main-nav" style="min-height: 90px;">
        <a class="navbar-brand" href="/">
			<?php
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$image          = wp_get_attachment_image_src( $custom_logo_id, 'full' );
			?>
            <img src="<?php echo $image[0]; ?>" alt="<?php echo get_bloginfo( 'name', 'raw' ) ?>">
        </a><!-- /.navbar-brand -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!--			--><?php
			//			wp_nav_menu( array(
			//				'theme_location' => 'header-menu',
			//				'depth'          => 2, // 1 = no dropdowns, 2 = with dropdowns.
			//				'menu_class'     => 'navbar-nav mr-auto',
			//				'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
			//				'walker'         => new WP_Bootstrap_Navwalker(),
			//			) );
			//			?>
            <ul id="menu-main-menu" class="navbar-nav mr-auto">
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-24"
                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item active menu-item-24 nav-item">
                    <a title="Home" href="/" class="nav-link">Home</a></li>
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-21"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21 nav-item"><a
                            title="Sample Page" href="http://127.0.0.1:9000/?page_id=2" class="nav-link">Sample Page</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
