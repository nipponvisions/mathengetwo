<?php
/**
* template name: customfield_template
* description: Powers the Custom meta Display
* hidden from templates: // https://wordpress.stackexchange.com/questions/223479/hide-certain-template-files-in-apearance-editor/223494#223494
**/
?>

<!-- custom Field contents -->  
<div class="customfield">
	<h4> Custom Field Contents </h4>

<!-- 	<?php the_meta(); ?>   -->

 <ul class="customfield">
	
		<li class="customfield"> Last Name :  <?php echo  get_post_meta($post ->ID ,'Last Name', true );  ?> </li>
		<li clas="customfield>"> First Name :   <?php echo  get_post_meta($post ->ID ,'First Name', true );  ?> </li>
		<li clas="customfield>"> Capital City :  <?php echo  get_post_meta($post ->ID ,'Capital City', true );  ?> </li>
		<li clas="customfield>"> Residence :  <?php echo  get_post_meta($post ->ID ,'Residence', true );  ?> </li>
		<li clas="customfield>"> na ya kuongeza :  <?php echo  get_post_meta($post ->ID ,'na ya kuongeza', true );  ?> </li>

	</ul><!--customfield --> 
 

</div><!--customfield --> 
