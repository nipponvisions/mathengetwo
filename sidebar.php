<?php
/*
template name: sidebar.php
author: Mathenge Moses
description: The Main sidebar
*/
?>

<div class="main_sidebar">
	<h3> Sidebar template  </h3>
	<?php if ( is_active_sidebar('') ) { ?>

			<ul id="sidebar">
            
				<?php dynamic_sidebar(''); ?>
               
			</ul>

      		<?php 
	}   else{
		
		echo " Nothing is loaded  ";
		
		}
		?>
</div><!--main_sidebar -->