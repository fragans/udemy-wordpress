<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fragans
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
        <?php
        if (is_singular()) :
            the_title('<h3 class="entry-title">', '</h3>');
        else :
            the_title('<h3 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>');
        endif;

        if ('post' === get_post_type()) : ?>

        <div class="post-details">
			
            <span class="fa fa-user"></span><?php the_author(); ?>
			<span class="fa fa-clock-o"></span> <time><?php the_time(); ?></time>
			
            <span class="fa fa-folder"></span><?php the_category(', '); ?>
			<span class="fa fa-tags"></span> <?php the_tags(); ?>
			
            <div class="post-comments-badge">
                <a href=""><span class="fa glyphicon-comments">
                        <?php comments_number(0, 1, '%'); ?></span></a>
            </div>
            <?php edit_post_link('Edit', '<div> <i class="fa fa-pencil"></i>', '</div>'); ?>
        </div>

        <?php endif; ?>
    </header><!-- .entry-header -->

    

    
	<?php if (has_post_thumbnail()) : ?>
		<div class="post-image">
			<?php the_post_thumbnail(); ?>
		</div>
	<?php endif ?>
    
    <div class="post-excerpt">
        <?php the_excerpt();?>
	</div>
	
</article><!-- #post-<?php the_ID(); ?> --> 