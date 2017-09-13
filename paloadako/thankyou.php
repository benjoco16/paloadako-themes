<?php 
/**
Template Name: Thank You Page
**/
get_header(); ?>
<!-- MID -->

<div id="mid-hldr page" class="page-hldr">	
	<div class="container">
		<div class="page-content-hldr">
			<div class="page-title"><?php echo "Please Double Check And Click Confirm"; ?></div>
			<ul>
				<li>YOUR NUMBER:</li>
				<li>NETWORK:</li>
				<li>AMOUNT:</li>
				<li><input type="submit" name="confirm" /></li>
			</ul>			
		</div>	

   </div>
   
   <?php
		$to = "+639302508760@mysmart.mymobile.ph";
		$subject = "My subject benjo";
		$txt = "From paload ako.com!";
		$headers = "From: benjoco10@yahoo.com.ph" . "\r\n" .
		"CC: benjoco10@gmail.com";

		mail($to,$subject,$txt,$headers);
		?>
		
	<form action="" method="post">
		<input type="text" name="" placeholder="Number" />
		<input type="submit"/>
	</form>	

</div>

<!--/MID -->



<?php get_footer(); ?>