<!--
	Most generic content template for pages.
	The default template loads this file when there is a valid
	post that results from a WP query for pages.
-->
<link rel="stylesheet" type="text/css" href="screen.scss" />
<div>
HELOOOOOOOO

</div>

<div class="col-md-12 intro">
	<h1 style="text-transform: uppercase;"><?php the_title(); ?></h1>
	<?php the_content(); ?>
	<?php
		if (get_the_title() == 'About Us' || get_the_title() == 'About EduCo') {
	?>
			<h2>EDUCO MAP</h2>
			<ul class="mapLocations">
				<li id="cicMelbourne"><img src="<?php echo get_template_directory_uri(); ?>/img/cic-icon.png" alt=""> <a href="#">CIC-Melbourne</a></li>
				<li id="cicPerth"><a href="#">CIC-PERTH</a> <img src="<?php echo get_template_directory_uri(); ?>/img/cic-icon.png" alt=""></li>
				<li id="arbutusVan"><a href="#">Arbutus-Vancouver</a> <img src="<?php echo get_template_directory_uri(); ?>/img/arbutus-icon.png" alt=""></li>
				<li id="scu"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/scu-icon.png" alt=""></a></li>
				<li id="eduAu"><a href="#">Australia</a> <img src="<?php echo get_template_directory_uri(); ?>/img/educo-icon.png" alt=""></li>
				<li id="eduPh"><img src="<?php echo get_template_directory_uri(); ?>/img/educo-icon.png" alt=""> <a href="#">Philippines</a>
</li>
<li id="eduSri"><img src="<?php echo get_template_directory_uri(); ?>/img/educo-icon.png" alt=""> <a href="#">Sri Lanka</a></li>
				<li id="eduIndo"><img src="<?php echo get_template_directory_uri(); ?>/img/educo-icon.png" alt=""><a href="#">Indonesia</a></li>
				<li id="eduViet"><a href="#">Vietnam</a> <img src="<?php echo get_template_directory_uri(); ?>/img/educo-icon.png" alt=""></li>
				<li id="eduKor"><img src="<?php echo get_template_directory_uri(); ?>/img/educo-icon.png" alt=""><a href="#">Korea</a></li>
				<li id="eduBang"><img src="<?php echo get_template_directory_uri(); ?>/img/educo-icon.png" alt=""> <a href="#">Bangladesh</a>
</li>
				<li id="eduChin"><img src="<?php echo get_template_directory_uri(); ?>/img/educo-icon.png" alt=""> <a href="#">China</a></li>
				<li id="eduInd"><a href="#">India</a> <img src="<?php echo get_template_directory_uri(); ?>/img/educo-icon.png" alt=""></li>


				<li id="eduPak"><a href="#">Pakistan</a> <img src="<?php echo get_template_directory_uri(); ?>/img/educo-icon.png" alt=""></li>
				<li id="eduEu"><a href="#">Europe</a> <img src="<?php echo get_template_directory_uri(); ?>/img/educo-icon.png" alt=""></li>
				<li id="eduBra"><img src="<?php echo get_template_directory_uri(); ?>/img/educo-icon.png" alt=""> <a href="#">Brazil</a></li>

				<li id="eduVan"><a href="#">Vancouver</a> <img src="<?php echo get_template_directory_uri(); ?>/img/educo-icon.png" alt=""></li>	
				<li id="bayUsa"><img src="<?php echo get_template_directory_uri(); ?>/img/baystate-icon.png" alt=""> <a href="#">Baystate College-USA</a></li>
			</ul>
			<img class="map1" src="<?php echo get_template_directory_uri(); ?>/img/educo-map.jpg">
	        <img class="map2" src="<?php echo get_template_directory_uri(); ?>/img/map.jpg">
	        <h2>OFFICE LOCATIONS</h2>

		<div class="form-group">
			<select name="salesOffices" id="salesOffices">
				<option value="global">Global</option>
				<?php
		        	$args = $args = array('post_type' => 'office-location', 'posts_per_page' => -1, 'orderby' => 'ID', 'order' => 'ASC');
					$loop = new WP_Query($args);

					if ($loop->have_posts()) :
						while($loop->have_posts()) : $loop->the_post();
							$title1 = str_replace(" ", "", get_the_title());
		        ?>
		        			<option value="office<?php echo $title1; ?>"><?php the_title(); ?></option>
		    	<?php
		    			endwhile;
		    		endif;
		    		wp_reset_postdata();
		    	?>
			</select>
		</div>
	        <?php
	        	$args = $args = array('post_type' => 'office-location', 'posts_per_page' => -1, 'orderby' => 'ID', 'order' => 'ASC');
				$loop = new WP_Query($args);

				if ($loop->have_posts()) :
					while($loop->have_posts()) : $loop->the_post();
						$title2 = str_replace(" ", "", get_the_title());
	        ?>
	        			<div class="office" id="office<?php echo $title2; ?>"><h3><?php the_title(); ?></h3>
						<section>
							<?php the_content(); ?>
						</section></div>
	    	<?php
	    			endwhile;
	    		endif;
	    		wp_reset_postdata();
	    	?>
	    	<h2>CAREERS WITH EDUCO</h2>
	<?php
			$page = get_page_by_title( 'Careers with Educo' );
	?>
			<p><?php echo get_post_field('post_content', $page->ID); ?></p>
	<?php
		}
	?>
</div>