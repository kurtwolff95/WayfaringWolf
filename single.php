<div id="container">
  <?php get_header(); ?>
  <div id="content">
    <?php the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="entry-utility">
        <?php edit_post_link( __( 'Edit this page', 'hbd-theme' ), "\n\t\t\t\t\t<span class=\"edit-link\">", "</span>" ) ?>
      </div><!-- .entry-utility -->    
      <h1 class="entry-title single-title"><?php the_title(); ?></h1>
      <div class="entry-content">
        <div class="contentcontainer">
          <?php the_content(); ?>
        </div>
      </div><!-- .entry-content -->
      <div id="nav-below" class="navigation">
        <p class="previousentry"><?php previous_post_link( '%link', '<span class="meta-nav previousentry">&laquo Previous Entry</span>' ) ?></p>
        <p class="nextentry"><?php next_post_link( '%link', '<span class="meta-nav nextentry">Next Entry &raquo;</span>' ) ?></p>
      </div><!-- #nav-below -->
      <?php comments_template('', true); ?>
    </div><!-- #post-ID -->
  </div><!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>