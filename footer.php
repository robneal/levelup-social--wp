	



	<section id="work-with-us" class=" work-with-us page-section page-section--gray">

		<div class="wrapper">

			<h2 class="section-title">Work with us</h2>

			<form class="contact-form" action="index.html" method="post">

				<div class="contact-form__inquery">

					<p class="contact-form__title">
						What would you like to talk about?
						<span class="contact-form__reqiured-field">*</span>
					</p>

					<div class="contact-form__radio-group">
						<div class="contact-form__radio-group__item">
							<input type="radio" name="inquery" value="business" id="business-inquery">
							<label for="business-inquery">Business Inquiry</label>
						</div>
						
						<div class="contact-form__radio-group__item">
							<input type="radio" name="inquery" value="employment" id="employment-inquery">
							<label for="employment-inquery">Employment Inquiry</label> 
						</div>

						<div class="contact-form__radio-group__item">
							<input type="radio" name="inquery" value="general" id="general-inquery">
							<label for="general-inquery">General Inquiry</label>
						</div>
					</div>
				</div>

				<div class="contact-form__sender-group">
				
					<div class="contact-form__sender-info">
						
						<div class="contact-form__text-input">
							<label for="name">
								Name 
								<span class="contact-form__reqiured-field">*</span>
							</label>
							<input type="text" id="sender_name" name="sender_name">
						</div>

						<div class="contact-form__text-input">
							<label for="email">
								Email 
								<span class="contact-form__reqiured-field">*</span>
							</label>
							<input type="email" id="sender_email" name="sender_email">
						</div>
						
						<div class="contact-form__text-input">
							<label for="email">
								Phone Number 
							</label>
							<input type='tel' pattern='[\+]\d{1}[\(]\d{3}[\)]\d{3}[\-]\d{4}' 
							title='Phone Number (Format: +9(999)999-9999)' id="phone" 
							name="sender_phone">
						</div>

					</div>

					<div class="contact-form__sender-message">
						<div class="contact-form__text-input">
							<label for="message">What are you looking to achieve
								<span class="contact-form__reqiured-field">*</span>
							</label>
							<textarea id="sender_message" name="sender_message"></textarea>
						</div>
						<button class="btn btn--black" type="submit">Submit</button>
					</div>
					
				</div>

				<p class="contact-form__disclaimer">
					Don't worry, we don't give out your info. Check out our
					 <a href="<?php bloginfo('stylesheet_directory'); ?>/levelup-privacy-policy.pdf">Privacy Policy</a> for more details.
				</p>


			</form>
			
		</div>
	</section>

	<footer class="site-footer page-section page-section--brown">
		<div class="wrapper">
			<p class="site-footer__text"> Levelup Social Media &copy; <?php echo date('Y'); ?> | 
				<a class="site-footer__github-logo"  href="https://github.com/robneal/levelup-social">
					<!-- <img class="site-footer__github-logo" src="img/icons/github-logo--white.png" /> -->
				</a>
			</p>
		</div>
	</footer>



	<?php wp_footer(); ?>

</body>
</html>