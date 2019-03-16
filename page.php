<?php /* Template Name: Page */ ?>
<?php get_header(); ?>
<div class="content container pt-xl-4 pt-lg-4 pt-md-2 pt-sm-2 pt-1">
    <div class="row">
        <div class="col-md">
			<?php while ( have_posts() ) : the_post(); ?>
                <h1 class="page-title"><?php the_title(); ?></h1>
				<?php the_content(); ?>
			<?php endwhile; ?>
        </div>
        <?php get_sidebar() ?>
    </div>
</div>
<?php get_footer(); ?>
