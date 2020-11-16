<?php get_header();
$categories = get_the_category(get_the_ID());
?>

<div class="header-section bg-red">
    <div class="container">
        <!-- <p class="subtitle">sem parar</p>
        <h2>a vida das mulheres na pandemia</h2> -->
        <h1><?php echo $categories[0]->name; ?></h1>
    </div>
</div>

<section class="analises-feministas">
    <div class="container">
        <div class="row">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
            $post_id   = get_the_ID();
            $resumo = get_field( 'resumo_do_artigo', get_the_ID() );
            $autor = get_field( 'autor', get_the_ID() );
        ?>
            <div class="col-md-6 col-xs-12 pr-md-5">
                <a href="<?php the_permalink(); ?>">
                    <div class="box-article">
                        <div class="title-red">Artigo</div>
                        <div class="img-article bg-img" style="background-image: url(<?php the_post_thumbnail_url()?>)" >
                        </div>
                        <!-- <img class="img-article" src="http://mulheresnapandeia.local/wp-content/uploads/2020/07/ilustra-analises.jpg" alt=""> -->
                        <p class="text-article"><?php the_title(); ?></p>
                        <div class="sub-interviewee">
                            <?php echo $resumo; ?>
                        </div>
                        <div class="author">
                            <?php echo $autor; ?>
                        </div>
                    </div>
                </a>
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
</section>



<?php get_footer(); ?>