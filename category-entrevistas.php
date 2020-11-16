<?php get_header();
$categories = get_the_category(get_the_ID());

?>

<div class="header-section bg-purple">
    <div class="container">
        <!-- <p class="subtitle">sem parar</p>
        <h2>a vida das mulheres na pandemia</h2> -->
        <h1><?php echo $categories[0]->name; ?></h1>
    </div>
</div>

<div class="container interview">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
        $post_id   = get_the_ID();
        $idade = get_field( 'idade_da_entrevistada', $post_id );
        $ocupacao = get_field( 'ocupacao_da_entrevistada', $post_id );
        $nome = get_field( 'nome_da_entrevistada', $post_id );
        $previa = get_field( 'previa_da_entrevista', $post_id );
    ?>
        <a href="<?php the_permalink(); ?>">
            <div class="box-article">
                <div class="row">
                    <div class="col-md-6 col-xs-12 pl-md-5">
                        <div class="title-purple"><?php echo $categories[0]->name; ?></div>
                        <div class="img-article-interview bg-img" style="background-image: url(<?php the_post_thumbnail_url()?>)"></div>
                    </div>
                    <div class="col-md-6 col-xs-12 pr-md-5">
                        <p class="text-article"><?php echo $previa; ?></p>
                        <div class="interviewee"><?php echo $nome; ?></div>
                        <div class="sub-interviewee"><?php echo $idade; ?> <?php echo $ocupacao; ?></div>
                    </div>
                </div>
            </div>
        </a>
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