<?php get_header();

$post_id   = get_the_ID();
$categories = get_the_category($post_id);

if ( $categories[0]->name === 'Relatório' ) {
    $cor = "bg-yellow";
} elseif ( $categories[0]->name === 'Reportagem' ) {
    $cor = "bg-green";
} elseif ( $categories[0]->name === 'Entrevistas' ) {
    $cor = "bg-purple";
}

$link = get_field( 'link_do_botao', $post_id );
?>

<div class="header-section <?php echo $cor; ?>">
    <div class="container">
        <h1><?php echo $categories[0]->name; ?></h1>
    </div>
</div>

<article>
    <div class="container">
        <div class="row">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="col-md-8 offset-md-2 mt-5">
                    <?php the_post_thumbnail(); ?>
                    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                    <?php the_content(); ?>
                    <a href="<?php echo $link; ?>" target="_blank"><div class="big-button <?php echo $cor; ?>">clique para acessar</div></a>
                </div>
                
            <?php endwhile ?>
                 
            <?php else: ?>
                 
            <?php endif; ?>
        </div>
    </div>
</article>

<?php get_footer(); ?>
