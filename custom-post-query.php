<?php 	
   $args = array( 'post_type' => 'post', 'posts_per_page' => -1 );	
   $the_query = new WP_Query( $args ); 				?>			
   <?php 				
   if ( $the_query->have_posts() ) : ?>	
   <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>	

// title,content,....code


--------------------------------------------------------------
-----------------------------------------------------------------
-------------------------------------------------------------------
<?php wp_reset_postdata();
   endwhile;?>			
   <?php else: ?>			
			
   <?php _e( 'Sorry, no posts matched your criteria.' ); ?>		
	
   <?php endif; ?>
