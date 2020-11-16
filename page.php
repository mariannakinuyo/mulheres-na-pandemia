<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="header-section bg-black page">
        <div class="container">
            <h1 class=""><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="container">
        <div class="col-md-8 col-12 pt-5">
            <?php the_content(); ?>
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



<?php get_footer(); ?>
