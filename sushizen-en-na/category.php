<?php get_header(); ?>
<?php get_template_part( 'template-parts/gnav' ); ?>

<?php get_template_part( 'template-parts/gallery-header' ); ?>
<?php get_template_part( 'template-parts/gallery-archive-body', null, [ 'main_class' => 'category-gallery' ] ); ?>

</div>

<?php get_template_part( 'template-parts/footer' ); ?>