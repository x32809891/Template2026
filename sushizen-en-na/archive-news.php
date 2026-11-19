<?php get_header(); ?>
<?php get_template_part( 'template-parts/gnav' ); ?>

<?php get_template_part( 'template-parts/news-header' ); ?>

	<?php get_template_part( 'template-parts/news-archive-body', null, [ 'main_class' => 'archive-news' ] ); ?>

</div>

<?php get_template_part( 'template-parts/footer' ); ?>