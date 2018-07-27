<?php 
/* 
	template name: About us
*/
?>

<section class="about-us">
	<div class="text">
		<?php
			global $post;
			$content = $post->post_content;
			if ( !empty( $content ) ) :
			    echo $content;
			endif;
		?>
	</div>
	<div class="professionals">
		<div class="col-sm-4">
			<div class="professional">
				<div class="image-box">
					<img src="assets/images/logo.jpg" alt="" class="image">
				</div>
				<h3 class="name">Sabrina Boing Moreira</h3>
				<p class="role"><small>Software Enginner</small></p>
				<p class="about">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
				<ul class="list social">
					<li class="list-item">
						<a href="#" class="link">
							<i class="fa fa-facebook"></i>
						</a>
					</li>
					<li class="list-item">
						<a href="#" class="link">
							<i class="fa fa-twitter"></i>
						</a>
					</li>
					<li class="list-item">
						<a href="#" class="link">
							<i class="fa fa-google-plus"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>