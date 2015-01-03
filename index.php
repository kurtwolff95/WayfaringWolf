<div id="container">
<?php get_header(); ?> 
    <div id="content">
		<?php /* Top post navigation */ ?>
		<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>

		<?php } ?>
		
		<?php /* The Loop — with comments! */ ?>
		<?php while ( have_posts() ) : the_post() ?>

		<?php /* Create a div with a unique ID thanks to the_ID() and semantic classes with post_class() */ ?>
		                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php /* an h2 title */ ?>
		                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'hbd-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		                    <span class="entry-date"><h2><span class="published" title="<?php the_time('d-m-y') ?>"><?php the_time('d-m-y'); ?></span></h2></span>
		<?php /* Microformatted, translatable post meta */ ?>

		<?php /* The entry content */ ?>
		                    <div class="entry-content">
		<?php the_content( __( 'Read onwards', 'hbd-theme' )  ); ?>
		<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'hbd-theme' ) . '&after=</div>') ?>
		<?php edit_post_link( __( 'Edit', 'hbd-theme' ), "\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t\n" ) ?>
		                    </div><!-- .entry-content -->

		<?php /* Microformatted category and tag links along with a comments link */ ?>
		                    <div class="entry-utility">
		                    </div><!-- #entry-utility -->
		                </div><!-- #post-<?php the_ID(); ?> -->

		<?php /* Close up the post div and then end the loop with endwhile */ ?>      

		<?php endwhile; ?>
		
		<?php /* Bottom post navigation */ ?>
		<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
		                <div id="nav-below" class="navigation">
		                    <span class="olderposts">
		                    	<?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'hbd-theme' )); ?>
		                    </span>
		                    <span class="newerposts">
		                    	<?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'hbd-theme' )); ?>
		                    </span>
		                </div><!-- #nav-below -->
		<?php } ?>
    </div><!-- #content -->
	<?php get_sidebar(); ?>
<?php get_footer(); ?>