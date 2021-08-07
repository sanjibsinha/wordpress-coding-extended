<main class="container">

<div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Latest Posts
      </h3>
      <?php
      
      if(have_posts(  )): while(have_posts(  )): the_post(  );
      
      ?>

      <article class="blog-post">
        <h2 class="blog-post-title"><?php the_title( ); ?></h2>
        <p class="blog-post-meta"><?php the_time( 'd.m.y' ) ?>
         <a href="#"><?php the_author_posts_link(); ?></a></p>
         <p class="blog-post-meta">
         <?php echo get_the_category_list(', '); ?>
         </p>
         <p>
	        <?php
          if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
              the_post_thumbnail( 'full' );
          }
          ?>
		      </p>
          <p class="small text-muted font-italic">
                    <?php the_content( ); ?>
          </p>
        </article>

      <?php endwhile; else: endif; ?>
    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">About</h4>
          <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Archives</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="#">March 2021</a></li>
            <li><a href="#">February 2021</a></li>
            <li><a href="#">January 2021</a></li>
            <li><a href="#">December 2020</a></li>
            <li><a href="#">November 2020</a></li>
            <li><a href="#">October 2020</a></li>
            <li><a href="#">September 2020</a></li>
            <li><a href="#">August 2020</a></li>
            <li><a href="#">July 2020</a></li>
            <li><a href="#">June 2020</a></li>
            <li><a href="#">May 2020</a></li>
            <li><a href="#">April 2020</a></li>
          </ol>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</main>