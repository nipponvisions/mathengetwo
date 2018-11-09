<?php
/*
template name: sidebar.php
author: Mathenge Moses
description: The Main sidebar
*/
?>

<div class="sidebar">
	<h3> Sidebar template  </h3>

	<?php
	 if ( is_active_sidebar('main_sidebar ') ) { ?>

			<ul id="main_sidebar">
            
				<?php dynamic_sidebar('main_sidebar'); ?>
               
			</ul>

      		<?php 
	}   else{
		
		echo " Nothing is loaded  ";
		
		}
		?>

</div><!--sidebar -->
