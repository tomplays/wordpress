<?php
/**
 * Template Name: page list ville
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>


<div class="list-towns bg-grey">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="text-center padded">
		<?php
			$page = get_page_by_name('Liste des villes');
		    $title = apply_filters('the_title',$page->post_title);
		    echo '<h2>'.$title.'</h2>';
			$args = array(
					'child_of' => $page->ID,
					'post_type' => 'page',
					'post_status' => 'publish'
			);
			$pages_sub = get_pages($args);
			if($pages_sub){
					echo '<ul class="list-unstyled list-inline padded">';
					foreach ( $pages_sub as $p ) :
							$content = apply_filters('the_content',$p->post_content);
							$title = apply_filters('the_title',$p->post_title);
							$url = esc_url( get_permalink($p->ID) );
							echo '<li class="tag"><a href="'.$url.'"">'.$title.'</a></li>';
							endforeach;
					echo '</ul>';

			}
		?>
        </div>
      </div>
    </div>





  </div>
</div>
	<?php
		get_template_part('templates/module', 'rassemblements');
		?>
    <div class="row">
<div class="text-center padded">

				<h3>Votre ville n'est pas listée ?</h3>
				<p><a class="btn btn-primary btn-lg" href="http://wiki.nuitdebout.fr">ajoutez-la sur le wiki !</a></p>

         </div>

         </div>