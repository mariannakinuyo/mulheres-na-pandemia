<?php get_header();

$post_id   = get_the_ID();
$categories = get_the_category($post_id);

if ( $categories[0]->name === 'Relatório' ) {
    $cor = "yellow";
} elseif ( $categories[0]->name === 'Reportagem' ) {
    $cor = "green";
} elseif ( $categories[0]->name === 'Entrevistas' ) {
    $cor = "purple";
} elseif ( $categories[0]->name === 'Análises feministas' ) {
    $cor = "red";
} else {
    $cor = "black";
}

$category_link = get_category_link( $categories[0] );
?>

<?php if ( $categories[0]->name === 'Entrevistas' || $categories[0]->name === 'Análises feministas' ) { ?>
    <div class="pt-5"></div>

<?php } else { ?>
    <div class="header-section bg-<?php echo $cor; ?>">
        <div class="container">
            <!-- <p class="subtitle">sem parar</p>
            <h2>a vida das mulheres na pandemia</h2> -->
            <h1><?php echo $categories[0]->name; ?></h1>
        </div>
    </div>
<?php } ?>


<?php if ( $categories[0]->name === 'Entrevistas' || $categories[0]->name === 'Análises feministas' ) { ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
        $linha = get_field( 'linha_fina', get_the_ID() );
    ?>
    <article class="single-analises">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-12 mt-5">
                    <a href="<?php echo $category_link ; ?>" title="<?php echo $categories[0]->name; ?>" class="<?php echo $cor; ?> navegation-section mb-5">
                        < <?php echo $categories[0]->name; ?>
                    </a>
                    <h2><?php the_title(); ?></h2>

                    <div class="thumb">
                       <?php the_post_thumbnail(); ?>
                    </div>
                    <!-- <img src="http://mulheresnapandeia.local/wp-content/uploads/2020/07/ilustra-analises.jpg" alt="" class="w-50"> -->
                    <div class="linha-fina">
                        <?php echo $linha; ?>
                    </div>
                    <?php the_content(); ?>

                </div>
            </div>
        </div>

    </article>
    <?php endwhile ?>
                    
    <?php else: ?>
        <div>
            <h2>Nada Encontrado</h2>
            <p>Erro 404</p>
            <p>Lamentamos mas não foram encontrados artigos.</p>
        </div>  
        
    <?php endif; ?>

<?php } else { ?>
    <article>
        <div class="container">
            <div class="row">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                    $link = get_field( 'link_do_botao', $post_id );
                ?>

                    <div class="col-md-8 offset-md-2 mt-5">
                        <div class="text-center thumb"><?php the_post_thumbnail(); ?></div>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                        <div class="text-center d-none d-md-block">
                            <a href="<?php echo $link; ?>" target="_blank"><button class="big-button bg-<?php echo $cor; ?>">Clique para acessar o relatório na integra</button></a>
                        </div>
                        <div class="text-center d-md-none">
                            <a href="<?php echo $link; ?>" target="_blank"><button class="big-button bg-<?php echo $cor; ?>">Clique para acessar o relatório</button></a>
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
        </div>
    </article>
<?php } ?>

<?php get_footer(); ?>
