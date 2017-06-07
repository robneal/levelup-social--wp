<?php get_header(); ?>


	<section id="visualLead" class="visual-lead">

		<div class="wrapper">
			<div class="visual-lead__content-container">
				<h1 class="visual-lead__description">
					<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; else : ?> 
						<?php _e( 'Whoops. It looks like there was an error retrieving the page - "Homepage"  '); ?>
					<?php endif; ?> 
				</h1>

				<a href="#work-with-us" class="btn btn--white visual-lead__btn">Work With Us</a>
			</div>
			<div class="visual-lead__down-arrow">
				<a href="#our-services">▼</a>
			</div>

		</div>
	</section>


	<section id="our-services" class=" our-services page-section">
		<div class="wrapper">
			
			<h2 class="section-title">Our Services</h2>
			
			<div class="our-services__items-group">
				<div class="our-services__items-group__item">
					<h4 id="wwu-social-media" class="our-services__items-group__item__title">Social Media Management</h4>
					
					<!-- <img src="#"/>
					<img src="#"/>
					<img src="#"/> -->

					<hr class="seperator__short seperator__short--thick" />

					<p class="our-services__items-group__item__description">
						We can create custom content for your social media page(s) to
						help you build rich customer experiences online.
					</p>
					
					<p class="our-services__items-group__item__description">
						Our team can be in charge of distributing professional content on a 
						consistent rate that fits your needs.
					</p>

					<p class="our-services__items-group__item__description">
						We will engage with your customers to create long lasting 
						relationships that grow your brand and business. 
					</p>

					<a href="under-construction" class="btn btn--white">See case studies</a>
				</div>

				<div class="our-services__items-group__item">
					<h4 id="wwu-digital-advertising" class="our-services__items-group__item__title">Digital Advertising</h4>
					
					<!-- <img src="#"/>
					<img src="#"/>
					<img src="#"/> -->

					<hr class="seperator__short seperator__short--thick" />

					<p class="our-services__items-group__item__description">
						We design and produce highly targeted digital promotions to 
						accomplish your business goals.
					</p>
					
					<p class="our-services__items-group__item__description">
						Using targeted tools like Google ads and Facebook ads we allow
						you to reach customers based on their intent or interest.
					</p>

					<p class="our-services__items-group__item__description">
						By doing so you stay relevant to your customers and send your
						ads where their attention is. 
					</p>

					<a href="under-construction" class="btn btn--white">See case studies</a>
				</div>

				<div class="our-services__items-group__item">
					<h4 id="wwu-web-dev" class="our-services__items-group__item__title">Web Development</h4>
					
					<!-- <img src="#"/>
					<img src="#"/>
					<img src="#"/> -->

					<hr class="seperator__short seperator__short--thick" />

					<p class="our-services__items-group__item__description">
						We specialize in building mobile first, responsive websites
						with industry standard features.
					</p>
					
					<p class="our-services__items-group__item__description">
						Our extroverted developers and designers will work with you create a
						solution that fits your needs.
					</p>

					<p class="our-services__items-group__item__description">
						And no matter the scale of your project every line of code 
						is written with your needs in mind.
					</p>

					<a href="under-construction" class="btn btn--white">See case studies</a>
				</div>			
			</div>

		</div>	
	</section>

	<section id="testimonials" class=" testimonials page-section page-section--brown">
		<div class="wrapper">
			
			<h2 class="section-title">
				We <img class="section-title__image--heart" src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/heart.svg" />
				our clients
			</h2>

			<h3 class="section-subtitle">Some Brand's we've worked with</h3> 
			
			<hr class="seperator__short seperator__short--thin seperator__short--white" />
			
			<div class="testimonials__brand-logos">
				
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logos/AthensGyro.svg" />
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logos/BetterATA.svg" />
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logos/Dumont.svg" />
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logos/RajniJeweller.svg" />

			</div>

			<a href="under-construction" class="btn btn--blue">Client case studies</a>

		</div>
	</section>



<?php get_footer(); ?>