<?php get_header(); ?>

<article <?php post_class('page-body container'); ?> id="page-body">

	<div class="row">
	
	    <main class="page-content">

	    	<?php $image = get_field('hero_image'); ?>
	    	<div class="hero">
				<img class="img-responsive" src="<?php echo $image['url']; ?>" width="1366" />
				<div class="overlay"></div>

				<div class="hero-content">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-light.png" alt="HW Building &amp; Remodeling Logo" data-sr="enter bottom" />
					<h2 data-sr="enter bottom"><?php the_field('hero_text'); ?></h2>
				</div>
			</div>

	    	<div id="about" class="content-section">
	    		<div class="row">
		    		<div class="col-md-8 col-md-offset-2">
		    			<?php the_field( 'content_section' ); ?>
		    		</div>
		    	</div>
	    	</div>

	    	<div id="services" class="content-section">
	    		<div class="content-container">

	    			<?php if(get_field('services')) : ?>
					<ul class="row button-image--container clear--both">
						<?php while(have_rows('services') ) : the_row(); ?>
							<li class="col-xs-12 col-sm-6 service-box" data-sr='enter bottom'>
								<div class="button-image">
									<h4 class="button-image--name"><span><?php the_sub_field('service_name'); ?></span></h4>
									<img class="img-responsive" src="<?php the_sub_field('service_image'); ?>" alt="<?php the_sub_field('service_name'); ?>">
				                    <div class="button-image--desc">
				                    	<?php the_sub_field('service_description');; ?>
				                    </div>
								</div><!-- .button-image end -->
							</li><!-- .col end -->
						<?php endwhile; ?>
					</ul><!-- .row end -->
					<?php endif; ?>

	    		</div>
	    	</div>

	    	<?php 
            $testimonials = new WP_Query( array(
                'post_type'      => 'testimonial',
                'orderby'        => 'date',
                'order'          => 'DESC',
                'meta_key'       => 'featured',
                'meta_value'     => 1
            ));

            if( $testimonials->have_posts() ): ?>
	    	<div id="testimonials" class="content-section">
	    		<div class="row">
		    		<div class="col-md-8 col-md-offset-2">
	                   	
	                   	<h2>What Our Clients are Saying:</h2>

						<div class="testimonial-slider" id="testimonial-slider">
							<?php
							while( $testimonials->have_posts() ): $testimonials->the_post();
								$post_id         = get_the_ID();
								$client_name     = get_post_meta($post_id, 'client_name',true);
								$company_name    = get_post_meta($post_id, 'company_name',true); ?>
				
								<div class="testimonial-slider__content--item">
					
									<div class="testimonial-texts">
										<?php the_content(); ?>
									</div>
									<span class="testimonial-author"><?php echo $client_name; ?></span>
									<?php if ( !empty($company_name) ) : ?>
									<span class="testimonial-company"><?php echo $company_name; ?></span>
									<?php endif; ?>
								
								</div><!-- item end -->
							<?php endwhile; ?>
						</div><!-- testimonial slider end -->
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					</div>
				</div>
    		</div>
            <?php endif; wp_reset_postdata(); ?>	    		
	
	    	<div id="contact" class="content-section">
	    		<div class="row">
		    		<div class="col-md-10 col-md-offset-1">
						<?php the_field( 'contact_section' ); ?>
					</div>
				</div>
			</div>
                        	
	    </main>
	
	</div>

</article>

<?php get_footer(); ?>