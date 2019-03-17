<div class="col-md-2-5 offset-md-1 sidebar">
    <div class="row join bg-scouts-yellow pl-4 pr-4 pt-4 pb-4">
        <h4>Join Scouts today</h4>
        <p>
            Aged 6+? Join Scouting today in just a few clicks. Start here.
        </p>
        <div class="m-auto">
            <a href="/?page_id=<?= get_option( "sfl_fom_target" ) ?>" id="sfl_fom"
               class="btn btn-big btn-big-border btn-scouts-blue">Find out more</a>
        </div>
    </div>
    <div class="row pt-md-4">
        <div class="card">
            <div class="card-header bg-scouts-green">
                More in this section
            </div>
            <div class="card-body section-pages">
				<?php
				$ancestors     = get_post_ancestors( $post->ID );
				$root_ancestor = end( $ancestors );
				$pages_args    = array(
					'child_of' => $root_ancestor,
					'title_li' => '<a href="' . get_page_link($root_ancestor) . '">' . get_post($root_ancestor)->post_title . '</a>'
				);
				$hierarchy     = wp_list_pages( $pages_args );
				print_r( $hierarchy );
				?>
                <!--				--><?php //print_r( get_post_ancestors( 2 ) ) ?>
            </div>
        </div>
    </div>
</div>
