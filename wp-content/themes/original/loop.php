<?php
    // 4行目から9行目までを繰り返して表示する
    if (have_posts() ) : while (have_posts() ) : the_post();
?>

<div class="post">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>     
    <?php the_content(); ?>
</div>

<?php
    endwhile;
    endif;
?>