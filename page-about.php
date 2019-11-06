<?php
/**
 * Template Name: About Brother
 */
?>
<?php get_header(); ?>

<?php if (has_post_thumbnail()): ?>
    <img class="page-image" src="<?php echo kama_thumb_src('w=940 &h=346'); ?>" alt="">
<?php endif; ?>

<ul class="breadcrumbs">
    <li><?php the_title(); ?></li>
</ul>
<section class="section padding-right">
    <div class="main">
		<?php if (have_posts()): ?>
			<?php the_post(); ?>
            <h2 class="section__title"><?php the_title(); ?></h2>
            <div class="main-content main-content--banner">
				<?php the_content(); ?>
				<?php echo carbon_get_the_post_meta('crb_about_banner' . get_lang()); ?>
            </div>
		<?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>
