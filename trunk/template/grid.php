<?php
  // Woocommerce Default
  if($twi_temp_style == 'woo_style'):
?>
<ul class="products twi-grid twi-grid-width-xlarge-1-<?php echo $xlarge; ?> twi-grid-width-large-1-<?php echo $large; ?> twi-grid-width-medium-1-<?php echo $medium; ?> twi-grid-width-small-1-<?php echo $small; ?> twi-grid-width-1-<?php echo $default; ?>">
	<?php
		// add_filter('woocommerce_get_catalog_ordering_query_args', 'am_woocommerce_catalog_orderby');
		// function am_woocommerce_catalog_orderby( $query_args ) {
		//     $query_args['meta_key'] = '_price';
		//     $query_args['orderby'] = 'meta_value_num';
		//     $query_args['order'] = 'desc'; 
		//     return $query_args;
		// }
	if($twi_woo_cats == null){
    
	     $query_args = array(
                        'post_type' => 'product',
						'post_status' => 'publish',
						'ignore_sticky_posts'   => 1,
						'posts_per_page' => $twi_woo_per_page
         );
	 }else{
	    $query_args = array(
			'post_type' => 'product',
			'post_status' => 'publish',
			'tax_query' => array(
							array(
								'taxonomy' => 'product_cat',
								'field' => 'slug',
								'terms' => $twi_woo_cats
								)
							),
			'ignore_sticky_posts'   => 1,
			'posts_per_page' => $twi_woo_per_page
		);
	}
		$loop = new WP_Query( $query_args );
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
				wc_get_template_part( 'content', 'product' );
			endwhile;
		} else {
			echo __( 'No products found' );
		}
		wp_reset_postdata();
	?>
</ul><!--/.products-->

<?php
   endif;
  // Responsive Grids
  if($twi_temp_style == 'normal'):
?>
<ul class="twi-grid twi-grid-width-xlarge-1-<?php echo $xlarge; ?> twi-grid-width-large-1-<?php echo $large; ?> twi-grid-width-medium-1-<?php echo $medium; ?> twi-grid-width-small-1-<?php echo $small; ?> twi-grid-width-1-<?php echo $default; ?> twi-grid-medium twi-grid-match" data-twi-grid-margin>
	<?php
	if($twi_woo_cats == null){
    
	     $query_args = array(
                        'post_type' => 'product',
						'post_status' => 'publish',
						'ignore_sticky_posts'   => 1,
						'posts_per_page' => $twi_woo_per_page
         );
	 }else{
	    $query_args = array(
			'post_type' => 'product',
			'post_status' => 'publish',
			'tax_query' => array(
							array(
								'taxonomy' => 'product_cat',
								'field' => 'slug',
								'terms' => $twi_woo_cats
								)
							),
			'ignore_sticky_posts'   => 1,
			'posts_per_page' => $twi_woo_per_page
		);
	}
	$loop = new WP_Query( $query_args );
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
		global $product;
	?>
	<li>
		<div class="twi-panel twi-panel-box">
			<?php 
			   if($rib_dis == 'yes'){
			      require (TWI_AWESOME_WOO_SLIDER_CAROUSEL_DIR .'/template/rib/rib.php'); 
			   }
			?>
		    <div class="twi-panel-teaser <?php if( !$product->is_featured() && ($product->is_on_sale() || !$product->is_in_stock()) ){ echo 'twi-rib'; } if(!$product->is_featured() && ($product->is_on_sale() && !$product->is_in_stock()) ){echo "undefine"; } ?>">
			    	<a href="<?php echo get_permalink(); ?>">
			        <?php if(has_post_thumbnail()) {
				            echo get_the_post_thumbnail($loop->post->ID, 'shop_single' ); 
				         }else{ 
				         	echo woocommerce_placeholder_img( 'shop_single' );
				        } 
			        ?>
			        </a>
		    </div>
		    <div class="twi-details">
			    <h3 class="twi_pro_title">
				    <a href="<?php echo get_permalink(); ?>">
				        <?php echo get_the_title(); ?>
				     </a>
			     </h3>
			     <div class="twi-price"><?php echo $product->get_price_html(); ?></div>
			     <div class="twi-rating"><?php echo $product->get_rating_html(); ?></div>
			     <div class="twi-cart twi-ui label green"><a href="<?php echo $product->add_to_cart_url(); ?>"><?php echo $product->add_to_cart_text(); ?></a></div>
		   </div>
		</div>
	</li>
	<?php 
      endwhile;
		} else {
			echo __( 'No products found' );
		}
	wp_reset_postdata();
	?>
</ul>
<?php endif; ?>