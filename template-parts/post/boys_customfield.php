<?php
/**
* template name: boys-customfield
* description: Powers the Custom meta Display
*
**/
?>


<!-- <div class="Customfield_girls"> -->
	<ul class="Customfield_boys">	
		<li> <h4> boys Custom Field Contents</h4> </li>
		<li> <b> Last Name : </b>  <?php echo  get_post_meta($post ->ID ,'Last Name', true );  ?> </li>
		<li> <b> First Name : </b>   <?php echo  get_post_meta($post ->ID ,'First Name', true );  ?> </li>
		<li> <b> Capital City :</b>  <?php echo  get_post_meta($post ->ID ,'Capital City', true );  ?> </li>
		<li> <b> Residence :</b>  <?php echo  get_post_meta($post ->ID ,'Residence', true );  ?> </li>
		<li> <b> na ya kuongeza :</b>  <?php echo  get_post_meta($post ->ID ,'na ya kuongeza', true );  ?> </li>
	</ul>
<!-- </div> --> <!--Customfield_girls --> 

