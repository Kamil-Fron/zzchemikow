<?php get_header(); ?>

<div id="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post" id="post-<?php the_ID(); ?>">

<h1 class="post-title"><?php the_title(); ?></h1>

<div class="entry">
<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
</div>

<?php comments_template(); ?>

</div>
		<?php endwhile; endif; ?>
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>