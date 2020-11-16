<?php get_header();

$categories = get_the_category(get_the_ID());
?>

<div class="header-section bg-green">
    <div class="container">
        <h1><?php echo $categories[0]->name; ?></h1>
    </div>
</div>
<div class="container">
        
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
        $post_id   = get_the_ID();
        $link = get_field( 'link_do_botao', $post_id );
        $number = get_field( 'porcentagem', $post_id );
    ?>
        <div class="section-dados">
            <div class=row>
            <div class="col-md-4 col-12">
                <div class="large-number"><?php echo $number; ?></div>
                <h2 class="number-text"><?php the_title(); ?></h2>
                <a href="<?php echo $link; ?>" target="_blank"><div class="icon-plus mb-4"></div></a>
            </div>
            <div class="col-md-8 col-12">
                <?php the_post_thumbnail(); ?>
            </div>
            <!-- <div class="offset-md-2 col-md-8 col-12">
                <div class="border-dados"></div>
            </div> -->
            </div>
            
        </div>
    <?php endwhile ?>
    <?php else: ?>
        <div>
            <h2>Nada Encontrado</h2>
            <p>Erro 404</p>
            <p>Lamentamos mas não foram encontrados artigos.</p>
        </div>  
    <?php endif; ?>

</div>


<?php get_footer(); ?>