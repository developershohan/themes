<?php

/**
 * Template part for displaying post btn
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package finbest
 */

$finbest_blog_btn = get_theme_mod( 'finbest_blog_btn', 'Read More' );
$finbest_blog_btn_switch = get_theme_mod( 'finbest_blog_btn_switch', true );

?>
<?php if ( !empty( $finbest_blog_btn_switch ) ): ?>
<div class="tp-postbox-read-more">
    <a href="<?php the_permalink();?>" class="tp-postbox-btn"><i class="fa-solid fa-arrow-right"></i> <?php print esc_html( $finbest_blog_btn );?></a>
</div>
<?php endif;?>