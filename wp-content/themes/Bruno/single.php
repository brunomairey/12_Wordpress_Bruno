<?php get_header(); ?>
   
<div class="container">

<?php if(have_posts()) : ?> <!--  If there are posts available  -->

       <?php while(have_posts()) : the_post(); ?> <!-- if there are posts, iterate the posts in the loop
-->
    <div class="card border-dark mx-1 my-4">
           
        <div class="card text-white bg-secondary">
              <div class="card-header bg-dark align-middle">
              <h5><b>  <?php the_author(); ?> 
                  <span class="text-right" style="float: right"><?php the_time('F j, Y g:i a'); ?></span></b></h5>
              </div>
             
                
                    <img class="card-img-top" src="<?php if(has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                    <?php endif; ?>
               
  
                  

              <div class="card-body">
                      <b><h3 class="card-title"> <?php the_title(); ?> </h3></b>
                      <h6 class="card-text">
                
                    <p> <?php the_content(); ?></p>
                    <p><?php comments_template(); ?></p>
                                            
                     
                    </h6>
                 
              </div>
       </div>
    </div> 
    <?php endwhile; ?><!--end the while loop-->

       <?php else :?> <!-- if no posts are found then: -->

       <p>No posts found</p>
       <?php endif; ?> <!-- end if --></div>




