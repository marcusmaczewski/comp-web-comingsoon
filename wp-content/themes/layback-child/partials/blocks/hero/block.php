<?php

	add_action('acf/init', 'lb_register_hero');
	function lb_register_hero()
	{

	    // check function exists.
	    if( function_exists('acf_register_block_type') )
	    {

	    	$title 					= __('Hero', 'layback');
	    	$description 			= __('Hero Block', 'layback');
	    	$tags 					=	array('hero');
	    	$align 					= array('wide', 'full');
	    	$render 				= 'hero_block_render_callback';

	        // register a testimonial block.
	        acf_register_block_type(array(
	            'name'              => basename(__DIR__),
				'title'             => $title,
				'description'       => $description,
				'keywords'			=> $tags,
				'icon'              => '',
				'category'          => 'layback',
//					'post_types' 		=> array('post', 'page'),
				'supports' 			=> array(
					'mode'			=> 'auto',
					'align'			=> $align,
				),
				'render_callback'   => $render,
				'enqueue_style' 	=> get_stylesheet_directory_uri() . '/partials/blocks/' . basename(__DIR__) . '/style.css',
				'enqueue_script' 	=> get_stylesheet_directory_uri() . '/partials/blocks/' . basename(__DIR__) . '/script.js',
	        ));
	    }
	}

	function hero_block_render_callback( $block, $content = '', $is_preview = false, $post_id = 0 )
	{

		/* Add all variables in the top
		-------------------------------------------------- */

		$block_name			= substr($block['name'], 4);
		$block_id 			= $block['id'];
		$block_title 		= strtolower(str_replace(" ","_",$block['title']));
		$block_filename 	= pathinfo(__FILE__, PATHINFO_FILENAME);

		$products_partners = true;
		
		if( !empty($block['align']) ) {
			$block_align 	= $block['align'];
		}

	  ?>
	
	    <div id="<?php echo $block_id; ?>" class="lb-block <?php if( !empty($block_align) ) { echo 'align-' . $block_align; } ?> block-<?php echo $block_name; ?>">

			<div class="meteor_container">
				<div class="meteor"></div>
			</div>

			<div class="inner">
				<div class="wrapper">

					<div class="title">
						<?php _e( 'We make cool products. Like <b>really</b> cool.', 'layback' ); ?>
					</div>

					<div class="actions">
						<button class="btn round"><?php _e( 'Get in touch', 'layback' ); ?></button>
					</div>

				</div>
			</div>

			<?php if($products_partners) : ?>
				<div class="products_and_partners">
					<div class="title"><?php _e( 'Products & Partners', 'layback' ); ?></div>
					<div class="slider">
						<?php
							for ($i=0; $i < 10 ; $i++) { 
								?>
									<div class="slider_item"></div>
								<?php
							}
						?>
					</div>
				</div>
			<?php endif; ?>

			<div class="lines">
				<?php
				
					for ($i=0; $i <= 5; $i++) { 
						?>
							<div class="line"></div>
						<?php
					}
				
				?>
			</div>

			<div class="earth">
				<?php
				
					$path = get_stylesheet_directory_uri() . '/partials/blocks/' . $block_name . '/earth.png';
				?>
				<img src="<?php echo $path; ?>" alt="Earth">
			</div>
	    </div>
    
    <?php }