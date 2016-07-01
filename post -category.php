<?php
					  global $post; 
					  $category = get_the_category($post->ID); 
					  $categoryName= $category[0]->name; 
					  echo $categoryName; 
					 // Get the ID of a given category
					  $category_id = get_cat_ID( $categoryName );
					 $category_link = get_category_link( $category_id );
					 echo $category_link;
					?>
