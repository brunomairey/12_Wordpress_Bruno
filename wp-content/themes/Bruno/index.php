<?php get_header(); ?>
 
<!-- All dynamic content will come in here -->
	<div class="container">

	<h2><?php bloginfo('name'); ?></h2>
	<h5><?php bloginfo('description'); ?></h5>


	<div class="row row-cols-4 my-5 mx-2 justify-content-around">



       <?php if(have_posts()) : ?> <!--  If there are posts available  -->

       <?php while(have_posts()) : the_post(); ?> <!-- if there are posts, iterate the posts in the loop
-->


<div class="card border-dark mx-1 mb-4">
      		 
      		 	 <div class="card h-100 text-white bg-secondary">
      		 	 	    <div class="card-header bg-dark align-middle">
							     <h5><b><a href="<?php the_permalink(); ?>"><!--retrieves URL for the permalink-->
          					<?php the_title(); ?> <!--retrieves blog title-->
       						</a></b></h5>
        					</div>
      
            				<img  class="card-img-top" src="<?php the_post_thumbnail(array(400,250)); ?>
            				
      				

        					<div class="card-body">
            					<!-- <b><h4 class="card-title"><?= $row['name'] ?></h4></b> -->
                    
            					<h6 class="card-text">
            						<p><?php the_time('F j, Y H:i'); ?></p><!--retrieves date blog entry was created-->

      								 <p> <?php the_author(); ?></p><!--retrieves author of blog entry-->
       
        							 <?php the_excerpt(); ?><!--retrieves excerpt-->
       							
                     </h6>
        					</div>
        				
        			</div>
        		</div>
    
   

       <?php endwhile; ?><!--end the while loop-->

       <?php else :?> <!-- if no posts are found then: -->

       <p>No posts found</p>  <!-- no posts found displayed -->
       <?php endif; ?> <!-- end if -->
   </div>
</div>

<!--  <?php wp_footer(); ?> -->
   <?php get_footer(); ?>
</body>
</html>