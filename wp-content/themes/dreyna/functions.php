<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//  
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'bootstrap',get_stylesheet_directory_uri() . '/bootstrap.min.css');
    wp_enqueue_style( 'child-style',get_stylesheet_directory_uri() . '/style.css',array('parent-style'));
}
//
// Your code goes below
//
function wpb_hook_javascript(){
	?>
	<script type="text/javascript">
		document.addEventListener('DOMContentLoaded', function(event){

			var b = document.getElementsByClassName('attachment-medium');
			b[0].classList.add("img-responsive");
			b[1].classList.add("img-responsive");
			b[2].classList.add("img-responsive");

			var a = document.getElementsByClassName("comment");
			a[0].children[0].classList.remove('listing-item');
			a[0].children[0].classList.add("col-md-6");
			a[0].children[1].classList.remove('listing-item');
			a[0].children[1].classList.add("col-md-6");
		});
		
	</script>
	<?php
}

add_action('wp_head','wpb_hook_javascript');