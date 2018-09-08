<?php 
/* 
	template name: About us
*/
get_header(); ?>	
<main class="about-us">
	<section class="section">
		<h1 class="main-title"><?php the_title(); ?></h1>
		<div class="text">
			<?php
				global $post;
				$content = $post->post_content;
				if ( !empty( $content ) ) :
				    echo $content;
				endif;
			?>
		</div>
		<div class="professionals row">
			<?php
				$repeater = 'professional-repeater';
				if(!is_null($repeater) && have_rows($repeater)):
				    while (have_rows($repeater)) : the_row();
				    	?>
				    	<div class="col-sm-4">
							<div class="professional">
								<div class="image-box">
									<img src="<?php the_sub_field('image');?>" alt="<?php the_sub_field('name');?>" class="image">
								</div>
								<h5 class="name"><?php the_sub_field('name');?></h5>
								<p class="role"><?php the_sub_field('role');?></p>
								<p class="text about"><?php the_sub_field('description');?></p>
								<ul class="list social">
									<?php
										if(!get_sub_field('link-email') == "") {
											?>
											<li class="list-item">
												<a href="mailto:<?php the_sub_field('link-email');?>" target="_blank" class="link">
													<i class="far fa-envelope"></i>
												</a>
											</li>
											<?php
										} 
									?>
									<?php
										if(!get_sub_field('link-site') == "") {
											?>
											<li class="list-item">
												<a href="<?php the_sub_field('link-site');?>" target="_blank" class="link">
													<i class="fas fa-link"></i>
												</a>
											</li>
											<?php
										} 
									?>	
									<?php
										if(!get_sub_field('link-linkedin') == "") {
											?>
											<li class="list-item">
												<a href="<?php the_sub_field('link-linkedin');?>" target="_blank" class="link">
													<i class="fab fa-linkedin-in"></i>
												</a>
											</li>
											<?php
										} 
									?>	
									<?php
										if(!get_sub_field('link-github') == "") {
											?>
											<li class="list-item">
												<a href="<?php the_sub_field('link-github');?>" target="_blank" class="link">
													<i class="fab fa-github"></i>
												</a>
											</li>
											<?php
										} 
									?>	
								</ul>
							</div>
						</div>
						<?php
				    endwhile;
				else :
				endif;
			?>
		</div>
	</section>
</main>
<?php get_footer(); ?>