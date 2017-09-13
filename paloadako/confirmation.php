<?php 
/**
Template Name: Confirmation Page
**/
get_header(); ?>
<!-- MID -->

<div id="mid-hldr page" class="page-hldr">	
	<div class="container">
		<div class="page-content-hldr">
			<div class="page-title"><?php the_title(); ?></div>
			
			<?php
				date_default_timezone_set('UTC+08:00');
				if ( isset( $_POST['submit'] )) {
					$network = $_POST['network'];
					$pnum = $_POST['pnum'];
					$price = $_POST['amount'];				
					$cprice = $_POST['camount'];
					$date = date('l F jS Y ');	
					$userip = $_SERVER['REMOTE_ADDR']; 
					
					$wpdb->insert( 
						'eload_details', 
						array( 
							'phone_num' => $pnum,
							'network' => $network,
							'last_activity' => $network,
							'ip_address' => $userip,
							'amount' => $price,
						)
					);				
				}
				echo 'DATE :' .$date. '<br/>'; 
				echo 'YOUR IP :' . $userip . '<br/>';
				echo 'Load Price: $' . $price. '<br/>';
				echo 'Network: ' . $network . '<br/>';
				echo 'Your Number: ' . $pnum. '<br/>';  	
			?>

			
			
			<!--<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_xclick">
				<input type="hidden" name="business" value="benjoco10@yahoo.com.ph">
				<input type="hidden" name="item_name" value="<?php //echo $network; ?> Prepaid Load">
				<input type="hidden" name="item_number" value="1">
				<input type="hidden" name="amount" value="<?php //echo $price; ?>">
				<input type="hidden" name="no_shipping" value="0">
				<input type="hidden" name="no_note" value="1">
				<input type="hidden" name="currency_code" value="USD">
				<input type="hidden" name="lc" value="AU">
				<input type="hidden" name="bn" value="PP-BuyNowBF">
				<div class="send-c"><input type="submit" name="submit" value="Load Now"/></div>
			</form>-->
			
			<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_xclick">
				<input type="hidden" name="business" value="developer@dev2.com">
				<input type="hidden" name="item_name" value="<?php echo $network; ?> Prepaid Load">
				<input type="hidden" name="item_number" value="1">
				<input type="hidden" name="amount" value="<?php echo $price; ?>">
				<input type="hidden" name="no_shipping" value="0">
				<input type="hidden" name="no_note" value="1">
				<input type="hidden" name="currency_code" value="USD">
				<input type="hidden" name="lc" value="AU">
				<input type="hidden" name="bn" value="PP-BuyNowBF">
				<div class="send-c"><input type="submit" name="submit" value="Load Now"/></div>
			</form>
			
		</div>	

   </div>

</div>

<!--/MID -->



<?php get_footer(); ?>