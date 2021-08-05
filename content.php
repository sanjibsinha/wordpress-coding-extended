<?php if(have_posts()): while(have_posts(  )): the_post();  ?>

<div class="row">

<div class="col-lg-3">This is Sidebar</div>

<div class="col-lg-9">

<article class="blog-post-title">
<?php the_title( ); ?>
</article>

<article class="blog-post">
    <?php the_content( ); ?>
</article>

</div>

</div>

<?php endwhile; else: endif; ?>