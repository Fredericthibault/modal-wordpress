<?php
/**
 * Template Name: À vous de voir
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php if( have_rows('galerie') ): ?>

						<ul class="galeries">


						<?php 
                            
                            $i = 1;
                            
                            while( have_rows('galerie') ): the_row(); 

							// vars
                        
							$image_apres = get_sub_field('image_apres');
							$image_avant = get_sub_field('image_avant');
							$content = get_sub_field('description-galerie');
							$titre = get_sub_field('titre-galerie');
							$id = $i;
                            $i++;
							
							?>

							<?php echo $id ?>

							<!-- Trigger/Open The Modal -->
							<button id="myBtn<?php echo $id ?>">Open Modal</button>

							<!-- The Modal -->
							<div id="myModal<?php echo $id ?>" class="modal">

							  <!-- Modal content -->
							  <div class="modal-content">
							    <span class="close<?php echo $id ?>">&times;</span>
							    <p>Some text in the Modal <?php echo $id ?></p>
							  </div>

							</div>


							<script>
							// Get the modal
								var modal<?php echo $id ?> = document.getElementById('myModal<?php echo $id ?>');

								// Get the button that opens the modal
								var btn<?php echo $id ?> = document.getElementById("myBtn<?php echo $id ?>");

								// Get the <span> element that closes the modal
								var test<?php echo $id ?> = document.getElementsByClassName("close<?php echo $id ?>")[0];

								// When the user clicks on the button, open the modal 
								btn<?php echo $id ?>.onclick = function() {
								    modal<?php echo $id ?>.style.display = "block";
								}

								// When the user clicks on <span> (x), close the modal
								test<?php echo $id ?>.onclick = function() {
								    modal<?php echo $id ?>.style.display = "none";
								}

								// When the user clicks anywhere outside of the modal, close it
								window.onclick = function(event) {
								    if (event.target == modal) {
								        modal<?php echo $id ?>.style.display = "none";
								    }
								}
							
						</script>

							

						<?php endwhile; ?>
						<?php wp_reset_query(); ?>

						<?php endif; ?>

                </ul>


			</div><!-- #content -->
		</div><!-- #primary -->


<?php get_footer(); ?>