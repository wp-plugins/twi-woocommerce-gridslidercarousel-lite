<?php
return array(
 'id'          => 'twi_woo_mb_main',
 'types'       => array('twi_woo_g_car'),
 'title'       => __('Woocommerce Grid/Slider/Carousel', 'twi_awesome_woo_slider_carousel'),
 'priority'    => 'high',
 'template'    => array(
 	                    array(
							'type' => 'radiobutton',
							'name' => 'twi_woo_filter_main',
							'label' => __('Product filter option', 'twi_awesome_woo_slider_carousel'),
							'items' => array(
											array(
												'value' => 'twi_woo_cats',
												'label' => __('Woocommerce Categoies', 'twi_awesome_woo_slider_carousel'),
											),
											array(
												'value' => 'twi_woo_sepcial_cat',
												'label' => __('Special Category(Pro Version Only)', 'twi_awesome_woo_slider_carousel'),
											),						
										),
							'default' => array('twi_woo_cats'),
						),
						array(
							'name'    => 'cat',
							'type'    => 'select',
							'dependency' => array(
										'field' => 'twi_woo_filter_main',
										'function' => 'twi_woo_cat_filter_fun',
							),
							'label'   => __('Select Category', 'twi_awesome_woo_slider_carousel'),
										'items'   => array(
										'data' => array(
												array(
														'source' => 'function',
														'value'  => 'twi_get_categories',
													),
										),
								),
						  ),

								array(
										 'name'  => 'special_cat',
										 'type'  => 'select',
										 'label' => __('Special category', 'twi_awesome_woo_slider_carousel'),
										 'dependency' => array(
													'field' => 'twi_woo_filter_main',
													'function' => 'twi_woo_spe_filter_fun',
											),
										 'items' => array(
											array(
														'value' => 'featured',
														'label' => __('Featured', 'twi_awesome_woo_slider_carousel'),
											      ),
											      
											array(
														'value' => 'recent_view',
														'label' => __('Recently viewed products', 'twi_awesome_woo_slider_carousel'),
											      ),
											      
											array(
														'value' => 'pro_on_sale',
														'label' => __('Products on sale', 'twi_awesome_woo_slider_carousel'),
											      ), 
											
											array(
														'value' => 'recent_pro',
														'label' => __('Latest/Recent products', 'twi_awesome_woo_slider_carousel'),
												),
										   array(
														'value' => 'best_sellers',
														'label' => __('Best Sellers', 'twi_awesome_woo_slider_carousel'),
											      ),
											      
											array(
														'value' => 'top_rated',
														'label' => __('Top rated products', 'twi_awesome_woo_slider_carousel'),
											      ),											      
											      
											    ),
											    'default' => 'recent_pro',
									),
                                array(
											'type'    => 'slider',
											'name'    => 'per_page',
											'label'   => __('Show per page', 'twi_awesome_woo_slider_carousel'),
											'min'     => '1',
											'max'     => '100',
											'default' => '10'
								       ),

 	      			 array(
							'type' => 'radiobutton',
							'name' => 'twi_woo_g_c_style',
							'label' => __('Your Style', 'twi_awesome_woo_slider_carousel'),
							'items' => array(
											array(
												'value' => 'twi_woo_grid',
												'label' => __('Responsive Grid', 'twi_awesome_woo_slider_carousel'),
											),
											array(
												'value' => 'twi_woo_mansonry',
												'label' => __('Masonry Grid (Pinterest Style)(Pro Version Only)', 'twi_awesome_woo_slider_carousel'),
											),
											array(
												'value' => 'twi_woo_slider',
												'label' => __('Slider/Carousel', 'twi_awesome_woo_slider_carousel'),
											),
																	
										),
							'default' => array('twi_woo_grid'),
						),

 	      			 array(
							    'type' => 'group',
							    'repeating' => false,
							    'length' => 1,
							    'name' => 'twi_woo_grid_group',
							    'title' => __('Grid Settings', 'twi_awesome_woo_slider_carousel'),
							    'dependency' => array(
										'field' => 'twi_woo_g_c_style',
										'function' => 'twi_woo_st_dep_grid',
								),
							    'fields' => array(
									    array(
											'type' => 'select',
											'name' => 'twi_woo_grid_desktop_big',
											'label' => __('Large Desktops', 'twi_awesome_woo_slider_carousel'),
											'description' => __('Xlarge (1200px and larger)','twi_awesome_woo_slider_carousel'),
											'items' => array(
															array(
																'value' => '1',
																'label' => __('1', 'twi_awesome_woo_slider_carousel'),
															),
															array(
																'value' => '2',
																'label' => __('2', 'twi_awesome_woo_slider_carousel'),
															),
															array(
																'value' => '3',
																'label' => __('3', 'twi_awesome_woo_slider_carousel'),
															),
															array(
																'value' => '4',
																'label' => __('4', 'twi_awesome_woo_slider_carousel'),
															),
															array(
																'value' => '5',
																'label' => __('5', 'twi_awesome_woo_slider_carousel'),
															),
															array(
																'value' => '6',
																'label' => __('6', 'twi_awesome_woo_slider_carousel'),
															),
															array(
																'value' => '10',
																'label' => __('10', 'twi_awesome_woo_slider_carousel'),
															),
																					
														),
											'default' => array('5'),
										    ),
                                            
                                            array(
											'type' => 'select',
											'name' => 'twi_woo_grid_desktop',
											'label' => __('Desktops & tablets landscape', 'twi_awesome_woo_slider_carousel'),
											'description' => __('Large (960px to 1199px)','twi_awesome_woo_slider_carousel'),
											'items' => array(
															array(
																'value' => '1',
																'label' => __('1', 'twi_awesome_woo_slider_carousel'),
															),
															array(
																'value' => '2',
																'label' => __('2', 'twi_awesome_woo_slider_carousel'),
															),
															array(
																'value' => '3',
																'label' => __('3', 'twi_awesome_woo_slider_carousel'),
															),
															array(
																'value' => '4',
																'label' => __('4', 'twi_awesome_woo_slider_carousel'),
															),
															array(
																'value' => '5',
																'label' => __('5', 'twi_awesome_woo_slider_carousel'),
															),
															array(
																'value' => '6',
																'label' => __('6', 'twi_awesome_woo_slider_carousel'),
															),
															array(
																'value' => '10',
																'label' => __('10', 'twi_awesome_woo_slider_carousel'),
															),
																					
														),
											'default' => array('4'),
										    ),
       

                                         array(
											'type' => 'select',
											'name' => 'twi_woo_grid_tablet',
											'label' => __('Tablets portrait', 'twi_awesome_woo_slider_carousel'),
											'description' => __('Medium (768px to 959px)','twi_awesome_woo_slider_carousel'),
											'items' => array(
															array(
																'value' => '1',
																'label' => __('1', 'twi_awesome_woo_slider_carousel'),
															),
															array(
																'value' => '2',
																'label' => __('2', 'twi_awesome_woo_slider_carousel'),
															),
															array(
																'value' => '3',
																'label' => __('3', 'twi_awesome_woo_slider_carousel'),
															),
															array(
																'value' => '4',
																'label' => __('4', 'twi_awesome_woo_slider_carousel'),
															),
															array(
																'value' => '5',
																'label' => __('5', 'twi_awesome_woo_slider_carousel'),
															),
															array(
																'value' => '6',
																'label' => __('6', 'twi_awesome_woo_slider_carousel'),
															),
															array(
																'value' => '10',
																'label' => __('10', 'twi_awesome_woo_slider_carousel'),
															),
																					
														),
											'default' => array('3'),
										    ),

                                            array(
											'type' => 'select',
											'name' => 'twi_woo_grid_phone_big',
											'label' => __('Phones landscape', 'twi_awesome_woo_slider_carousel'),
											'description' => __('Small (480px to 767px)','twi_awesome_woo_slider_carousel'),
											'items' => array(
															array(
																'value' => '1',
																'label' => __('1', 'twi_awesome_woo_slider_carousel'),
															),
															array(
																'value' => '2',
																'label' => __('2', 'twi_awesome_woo_slider_carousel'),
															),
															array(
																'value' => '3',
																'label' => __('3', 'twi_awesome_woo_slider_carousel'),
															),
															array(
																'value' => '4',
																'label' => __('4', 'twi_awesome_woo_slider_carousel'),
															),
															array(
																'value' => '5',
																'label' => __('5', 'twi_awesome_woo_slider_carousel'),
															),
															array(
																'value' => '6',
																'label' => __('6', 'twi_awesome_woo_slider_carousel'),
															),
															array(
																'value' => '10',
																'label' => __('10', 'twi_awesome_woo_slider_carousel'),
															),
																					
														),
											'default' => array('2'),
										    ),
                                            
                                            array(
											'type' => 'select',
											'name' => 'twi_woo_grid_phone',
											'label' => __('Phones portrait', 'twi_awesome_woo_slider_carousel'),
											'description' => __('Mini (up to 479px)','twi_awesome_woo_slider_carousel'),
											'items' => array(
															array(
																'value' => '1',
																'label' => __('1', 'twi_awesome_woo_slider_carousel'),
															),
															array(
																'value' => '2',
																'label' => __('2', 'twi_awesome_woo_slider_carousel'),
															),
															array(
																'value' => '3',
																'label' => __('3', 'twi_awesome_woo_slider_carousel'),
															),
															array(
																'value' => '4',
																'label' => __('4', 'twi_awesome_woo_slider_carousel'),
															),
															array(
																'value' => '5',
																'label' => __('5', 'twi_awesome_woo_slider_carousel'),
															),
															array(
																'value' => '6',
																'label' => __('6', 'twi_awesome_woo_slider_carousel'),
															),
															array(
																'value' => '10',
																'label' => __('10', 'twi_awesome_woo_slider_carousel'),
															),
																					
														),
											'default' => array('1'),
										    ),
                                          
                                           array(
											'type' => 'radiobutton',
											'name' => 'pagination',
											'label' => __('Pagination(Pro Version Only)', 'twi_awesome_woo_slider_carousel'),
											'items' => array(
												            array(
																'value' => 'yes',
																'label' => __('Yes', 'twi_awesome_woo_slider_carousel'),
															),
															array(
																'value' => 'no',
																'label' => __('No', 'twi_awesome_woo_slider_carousel'),
															),					
														),
											'default' => array('yes'),
										    ),
                                            
                                            array(
												'type' => 'radiobutton',
												'name' => 'twi_woo_grid_gap',
												'label' => __('Gap Between Grids(Pro Version Only)', 'twi_awesome_woo_slider_carousel'),
												'items' => array(
																array(
																	'value' => 'normal',
																	'label' => __('Normal', 'twi_awesome_woo_slider_carousel'),
																),
																array(
																	'value' => 'medium',
																	'label' => __('Medium', 'twi_awesome_woo_slider_carousel'),
																),
																array(
																	'value' => 'small',
																	'label' => __('Small', 'twi_awesome_woo_slider_carousel'),
																),
																array(
																	'value' => 'collapse',
																	'label' => __('Collapse', 'twi_awesome_woo_slider_carousel'),
																),
																						
															),
												'default' => array('normal'),
											    ),

							        ),
							    ),

                        
                         	  array(
							    'type' => 'group',
							    'repeating' => false,
							    'length' => 1,
							    'name' => 'twi_carousel_group',
							    'title' => __('Slider/Carousel Settings(Pro Version Only)', 'twi_awesome_woo_slider_carousel'),
							    'dependency' => array(
										'field' => 'twi_woo_g_c_style',
										'function' => 'twi_slider_dep',
								),
							    'fields' => array(
							    	      array(
											        'type' => 'slider',
											        'name' => 'large_desktop',
											        'label' => __('Large Desktops', 'twi_awesome_woo_slider_carousel'),
											        'description' => __('Xlarge (1200px and larger)','twi_awesome_woo_slider_carousel'),
											        'min' => '1',
											        'max' => '12',
											        'step' => '1',
											        'default' => '5',
											),
                                            array(
											        'type' => 'slider',
											        'name' => 'desktop',
											        'label' => __('Desktops & tablets landscape', 'twi_awesome_woo_slider_carousel'),
											        'description' => __('Large (960px to 1199px)','twi_awesome_woo_slider_carousel'),
											        'min' => '1',
											        'max' => '12',
											        'step' => '1',
											        'default' => '4',
											),
                                        
	                                        array(
											        'type' => 'slider',
											        'name' => 'tablet',
											        'label' => __('Tablets portrait', 'twi_awesome_woo_slider_carousel'),
												    'description' => __('Medium (768px to 959px)','twi_awesome_woo_slider_carousel'),
											        'min' => '1',
											        'max' => '12',
											        'step' => '1',
											        'default' => '3',
											),

                                            array(
										        'type' => 'slider',
										        'name' => 'phone_big',
										        'label' => __('Phones landscape', 'twi_awesome_woo_slider_carousel'),
										        'description' => __('Small (480px to 767px)', 'twi_awesome_woo_slider_carousel'),
										        'min' => '1',
										        'max' => '12',
										        'step' => '1',
										        'default' => '2',
										    ),

                                            array(
										        'type' => 'slider',
										        'name' => 'phone',
										        'label' => __('Phones portrait', 'twi_awesome_woo_slider_carousel'),
										        'description' => __('Mini (up to 479px)', 'twi_awesome_woo_slider_carousel'),
										        'min' => '1',
										        'max' => '6',
										        'step' => '1',
										        'default' => '1',
										    ),

										    array(
											'type' => 'radiobutton',
											'name' => 'autoplay',
											'label' => __('Autoplay', 'twi_awesome_woo_slider_carousel'),
											'items' => array(
												            array(
																'value' => 'true',
																'label' => __('Yes', 'twi_awesome_woo_slider_carousel'),
															),
															array(
																'value' => 'false',
																'label' => __('No', 'twi_awesome_woo_slider_carousel'),
															),					
														),
											'default' => array('true'),
										    ),
                                          
           //                                 array(
											// 'type' => 'radiobutton',
											// 'name' => 'car_page',
											// 'label' => __('Pagination(Pro Version Only)', 'twi_awesome_woo_slider_carousel'),
											// 'items' => array(
											// 	            array(
											// 					'value' => 'yes',
											// 					'label' => __('Yes', 'twi_awesome_woo_slider_carousel'),
											// 				),
											// 				array(
											// 					'value' => 'no',
											// 					'label' => __('No', 'twi_awesome_woo_slider_carousel'),
											// 				),					
											// 			),
											// 'default' => array('yes'),
										 //    ),
                                            
           //                                  array(
											// 	'type' => 'radiobutton',
											// 	'name' => 'items_gap',
											// 	'label' => __('Gap Between Grids(Pro Version Only)', 'twi_awesome_woo_slider_carousel'),
											// 	'items' => array(
											// 					array(
											// 						'value' => 'normal',
											// 						'label' => __('Normal', 'twi_awesome_woo_slider_carousel'),
											// 					),
											// 					array(
											// 						'value' => 'medium',
											// 						'label' => __('Medium', 'twi_awesome_woo_slider_carousel'),
											// 					),
											// 					array(
											// 						'value' => 'small',
											// 						'label' => __('Small', 'twi_awesome_woo_slider_carousel'),
											// 					),
											// 					array(
											// 						'value' => 'collapse',
											// 						'label' => __('Collapse', 'twi_awesome_woo_slider_carousel'),
											// 					),
																						
											// 				),
											// 	'default' => array('normal'),
											//     ),
									array(
								        'type' => 'notebox',
								        'name' => 'nb_1',
								        'label' => __('Carousel/Slider Others Advanced Options', 'twi_awesome_woo_slider_carousel'),
								        'description' => __('<a href="http://codecanyon.net/item/woocommerce-product-slidercarouselgrid/7928428?ref=twibd" target="_blank"><img src="'.TWI_AWESOME_WOO_SLIDER_CAROUSEL_URL.'/images/pro_version.jpg"></a><h3><a href="http://codecanyon.net/item/woocommerce-product-slidercarouselgrid/7928428?ref=twibd" target="_blank">Buy Now</a></h3>', 'vp_textdomain'),
								        'status' => 'success',
							       ),

							        ),
							    ),


 	      			   array(
							'type' => 'radiobutton',
							'name' => 'twi_pro_orderby',
							'label' => __('Product Orderby(Pro Version Only)', 'twi_awesome_woo_slider_carousel'),
							'items' => array(
								            array(
												'value' => 'title',
												'label' => __('Title', 'twi_awesome_woo_slider_carousel'),
											),
											array(
												'value' => 'price',
												'label' => __('Price', 'twi_awesome_woo_slider_carousel'),
											),
											array(
												'value' => 'sku',
												'label' => __('SKU', 'twi_awesome_woo_slider_carousel'),
											),	
											array(
												'value' => 'date',
												'label' => __('Date', 'twi_awesome_woo_slider_carousel'),
											),					
										),
							'default' => array('title'),
						),

 	      			   array(
							'type' => 'radiobutton',
							'name' => 'twi_pro_order',
							'label' => __('Product Order(Pro Version Only)', 'twi_awesome_woo_slider_carousel'),
							'items' => array(
								            array(
												'value' => 'asc',
												'label' => __('Ascending', 'twi_awesome_woo_slider_carousel'),
											),
											array(
												'value' => 'desc',
												'label' => __('Descending', 'twi_awesome_woo_slider_carousel'),
											),					
										),
							'default' => array('desc'),
						),

 	      			   array(
									'type' => 'radiobutton',
									'name' => 'title',
									'label' => __('Title Show', 'twi_awesome_woo_slider_carousel'),
									'items' => array(
										            array(
														'value' => 'yes',
														'label' => __('Yes', 'twi_awesome_woo_slider_carousel'),
													),
													array(
														'value' => 'no',
														'label' => __('No', 'twi_awesome_woo_slider_carousel'),
													),					
												),
									'default' => array('yes'),
								),

 	      			   array(
									'type' => 'radiobutton',
									'name' => 'price_h_s',
									'label' => __('Price Show', 'twi_awesome_woo_slider_carousel'),
									'items' => array(
										            array(
														'value' => 'yes',
														'label' => __('Yes', 'twi_awesome_woo_slider_carousel'),
													),
													array(
														'value' => 'no',
														'label' => __('No', 'twi_awesome_woo_slider_carousel'),
													),					
												),
									'default' => array('yes'),
								),

 	      			   array(
									'type' => 'radiobutton',
									'name' => 'cart',
									'label' => __('Cart Show', 'twi_awesome_woo_slider_carousel'),
									'items' => array(
										            array(
														'value' => 'yes',
														'label' => __('Yes', 'twi_awesome_woo_slider_carousel'),
													),
													array(
														'value' => 'no',
														'label' => __('No', 'twi_awesome_woo_slider_carousel'),
													),					
												),
									'default' => array('yes'),
								),

 	      			   array(
									'type' => 'radiobutton',
									'name' => 'rating',
									'label' => __('Rating Show', 'twi_awesome_woo_slider_carousel'),
									'items' => array(
										            array(
														'value' => 'yes',
														'label' => __('Yes', 'twi_awesome_woo_slider_carousel'),
													),
													array(
														'value' => 'no',
														'label' => __('No', 'twi_awesome_woo_slider_carousel'),
													),					
												),
									'default' => array('yes'),
								),

 	      			   array(
									'type' => 'radiobutton',
									'name' => 'forced_full_screen',
									'label' => __('Forced Full Screen(Pro Version Only)', 'twi_awesome_woo_slider_carousel'),
									'items' => array(
										            array(
														'value' => 'yes',
														'label' => __('Yes', 'twi_awesome_woo_slider_carousel'),
													),
													array(
														'value' => 'no',
														'label' => __('No', 'twi_awesome_woo_slider_carousel'),
													),					
												),
									'default' => array('no'),
					  ),

 	      			   array(
							    'type' => 'group',
							    'repeating' => false,
							    'length' => 1,
							    'name' => 'twi_woo_rib_main',
							    'title' => __('Ribbon/Label Settings', 'twi_awesome_woo_slider_carousel'),
							    'fields' => array(
							    	array(
										'type' => 'radiobutton',
										'name' => 'twi_rib_dis',
										'label' => __('Ribbon/Label Display', 'twi_awesome_woo_slider_carousel'),
										'items' => array(
											            array(
															'value' => 'yes',
															'label' => __('Yes', 'twi_awesome_woo_slider_carousel'),
														),
														array(
															'value' => 'no',
															'label' => __('No', 'twi_awesome_woo_slider_carousel'),
														),					
													),
										     'default' => array('yes'),
					                     ),
							    	array(
										'type' => 'radiobutton',
										'name' => 'twi_sales_rib_pos',
										'label' => __('Sales Ribbon Position', 'twi_awesome_woo_slider_carousel'),
										'items' => array(
											            array(
															'value' => '',
															'label' => __('Left', 'twi_awesome_woo_slider_carousel'),
														),
														array(
															'value' => 'right',
															'label' => __('Right', 'twi_awesome_woo_slider_carousel'),
														),					
													),
										'default' => array('left'),
					                ),
					    
					                array(
										'type' => 'radiobutton',
										'name' => 'twi_fe_lab_pos',
										'label' => __('Featured Label Position', 'twi_awesome_woo_slider_carousel'),
										'items' => array(
											            array(
															'value' => 'left',
															'label' => __('Left', 'twi_awesome_woo_slider_carousel'),
														),
														array(
															'value' => 'right',
															'label' => __('Right', 'twi_awesome_woo_slider_carousel'),
														),					
													),
										'default' => array('right'),
					                ),
					                array(
								        'type' => 'notebox',
								        'name' => 'nb_1',
								        'label' => __('Unlimitted Color settings', 'twi_awesome_woo_slider_carousel'),
								        'description' => __('<a href="http://codecanyon.net/item/woocommerce-product-slidercarouselgrid/7928428?ref=twibd" target="_blank"><img src="'.TWI_AWESOME_WOO_SLIDER_CAROUSEL_URL.'/images/pro_version.jpg"></a><h3><a href="http://codecanyon.net/item/woocommerce-product-slidercarouselgrid/7928428?ref=twibd" target="_blank">Buy Now</a></h3>', 'vp_textdomain'),
								        'status' => 'success',
							       ),
							    ),
							),

                               array(
									'type' => 'radiobutton',
									'name' => 'twi_temp_style',
									'label' => __('Template Styles With Live Preview', 'twi_awesome_woo_slider_carousel'),
									'items' => array(
												  array(
													'value' => 'normal',
													'label' => __('Normal Style', 'twi_awesome_woo_slider_carousel'),
												   ),
												   array(
														'value' => 'woo_style',
														'label' => __('Woocommerce Style (Not Suitable for all themes)', 'twi_awesome_woo_slider_carousel'),
													),
													array(
														'value' => 'hover',
														'label' => __('Hover Effects(Pro Version Only)', 'twi_awesome_woo_slider_carousel'),
													),
													array(
													    'value' => 'overlay',
														'label' => __('Overlay(Pro Version Only)', 'twi_awesome_woo_slider_carousel'),
													),
													array(
													    'value' => 'slide',
														'label' => __('Slide Effects(Pro Version Only)', 'twi_awesome_woo_slider_carousel'),
													),
													array(
													    'value' => 'slide',
														'label' => __('Only Image(Pro Version Only)', 'twi_awesome_woo_slider_carousel'),
													),
																						
															),
								    'default' => array('normal'),
								),
             

                                array(
								        'type' => 'notebox',
								        'name' => 'nb_1',
								        'label' => __('Live Preview and More Advanced Features', 'twi_awesome_woo_slider_carousel'),
								        'description' => __('<a href="http://codecanyon.net/item/woocommerce-product-slidercarouselgrid/7928428?ref=twibd" target="_blank"><img src="'.TWI_AWESOME_WOO_SLIDER_CAROUSEL_URL.'/images/pro_version.jpg"></a><h3><a href="http://codecanyon.net/item/woocommerce-product-slidercarouselgrid/7928428?ref=twibd" target="_blank">Buy Now</a></h3>', 'vp_textdomain'),
								        'status' => 'success',
							       ),
 	),
 );
?>