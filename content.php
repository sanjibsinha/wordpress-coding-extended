<div class="container py-5">
     <!-- First Row [Statistics]-->
     <h2 class="font-weight-bold mb-2">Latest Posts</h2>
    <p class="font-italic text-muted mb-4">Get Latest Posts from all Categories.</p>
    
    <div class="row pb-5">
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card rounded shadow-sm border-0">
            <?php 
                  
                  $worldPosts = new WP_Query(array(

                    'posts_per_page' => 1,
                    'category_name' => 'Flutter'

                  ));

                      while ($worldPosts->have_posts()) {
                      $worldPosts->the_post(); ?>
                <div class="card-body p-5">
                
                      <i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
                    <h5><?php the_title( ); ?></h5>
                    <p class="small text-muted font-italic">
                    <?php echo wp_trim_words( get_the_content(), 12 ); ?>
                        </p>
                        <p class="small text-muted font-italic">
                        <a href="<?php the_permalink( ); ?>" class="font-weight-bold text-dark pt-2"
                    >Read Article</a>
                        </p>
                        
                    <div class="progress rounded-pill">
                        <div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;" class="progress-bar rounded-pill"></div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card rounded shadow-sm border-0">
            <?php 
                  
                  $worldPosts = new WP_Query(array(

                    'posts_per_page' => 1,
                    'category_name' => 'WordPress'

                  ));

                      while ($worldPosts->have_posts()) {
                      $worldPosts->the_post(); ?>
                <div class="card-body p-5">
                
                      <i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
                    <h5><?php the_title( ); ?></h5>
                    <p class="small text-muted font-italic">
                    <?php echo wp_trim_words( get_the_content(), 12 ); ?>
                        </p>
                        <p class="small text-muted font-italic">
                        <a href="<?php the_permalink( ); ?>" class="font-weight-bold text-dark pt-2"
                    >Read Article</a>
                        </p>
                        
                    <div class="progress rounded-pill">
                        <div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;" class="progress-bar rounded-pill"></div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>


        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card rounded shadow-sm border-0">
            <?php 
                  
                  $worldPosts = new WP_Query(array(

                    'posts_per_page' => 1,
                    'category_name' => 'PHP'

                  ));

                      while ($worldPosts->have_posts()) {
                      $worldPosts->the_post(); ?>
                      
                <div class="card-body p-5">
                
                      <i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
                    <h5><?php the_title( ); ?></h5>
                    <p class="small text-muted font-italic">
                    <?php echo wp_trim_words( get_the_content(), 12 ); ?>
                        </p>
                        <p class="small text-muted font-italic">
                        <a href="<?php the_permalink( ); ?>" class="font-weight-bold text-dark pt-2"
                    >Read Article</a>
                        </p>
                        
                    <div class="progress rounded-pill">
                        <div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;" class="progress-bar rounded-pill"></div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

        <!-- Card -->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card rounded shadow-sm border-0">
            <?php 
                  
                  $worldPosts = new WP_Query(array(

                    'posts_per_page' => 1,
                    'category_name' => 'Dart'

                  ));

                      while ($worldPosts->have_posts()) {
                      $worldPosts->the_post(); ?>
                <div class="card-body p-5">
                
                      <i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
                    <h5><?php the_title( ); ?></h5>
                    <p class="small text-muted font-italic">
                    <?php echo wp_trim_words( get_the_content(), 12 ); ?>
                        </p>
                        <p class="small text-muted font-italic">
                        <a href="<?php the_permalink( ); ?>" class="font-weight-bold text-dark pt-2"
                    >Read Article</a>
                        </p>
                        
                    <div class="progress rounded-pill">
                        <div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;" class="progress-bar rounded-pill"></div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>



    </div>
</div>