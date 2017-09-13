<?php 
/*
Template Name: Home Page
*/
get_header(); ?><!-- MID -->
<div id="mid-hldr">
	<div class="banner">		
		<div class="h-relative">			
			<div class="container">				
				<div class="number-background">					
					<?php 					 
					global $current_user;					
					get_currentuserinfo();					
					//if (is_user_logged_in()) { ?>						
					<h3>Welcome to paloadako.com</h3> 						
					<p>
						Your 1-stop E-loading station to all networks like Globe, Smart, Sun, Talk ‘N Text, and Touch Mobile. <br>
						Buy your epins for Call Cards, Prepaid Internet, Online Gaming and Satellite Cards.
					</p>											
					<?php   // } else {						
						//wp_login_form( $args );					
					//} ?> 					
					<!--<form action="<?php bloginfo('url')?>/confimation" method="post"  target="_top" onsubmit="return confirm('Everything is correct? Please Check and click OK');">						
					<input type="hidden" name="cmd" value="_s-xclick">						
					<div class="form-left-hldr">							
						<div class="network">								
							<select name="network" id="" required>									
								<option value="">Choose Network</option>									
								<option value="globe">Globe</option>									
								<option value="TM">TM</option>									
								<option value="Smart">Smart</option>									
								<option value="TNT">TNT</option>									
								<option value="Sun">Sun</option>								
							</select>							
						</div>							
						<div class="amout">								
							<select name="amount" id="amount" required>									
								<option value="">Amount</option>									
								<option value="2.09">P50 Load - $2.09 USD</option>									
								<option value="4.09">P100 Load - $4.09 USD</option>									
								<option value="5.10">P150 Load - $5.10 USD</option>									
								<option value="6.50">P200 Load - $6.50 USD</option>									
								<option value="8.60">P300 Load - $8.60 USD</option>									
								<option value="13.00">P500 Load - $13.00 USD</option>									
								<option value="25.00">P1000 Load - $27.00 USD</option>									
								<option value="38.00">P1500 Load - $40.00 USD</option>									
								<!--<option value="other">Custom Price</option>								
							</select>									
							</div>														
							<div class="others-amount"><input type="text" placeholder="Type your amount" name="camount"/></div>						
						</div>						

						<div class="form-right-hldr">													
							<div class="mobile-num"> 								
								<span>+63</span> <input type="text" name="pnum" placeholder="9161234567"  required/>							
							</div>														
							<div class="payment">								
							<select name="payment-method" id="" required>									
								<option value="">Choose Your Payment Method</option>									
								<option value="paypal">Paypal</option>									
								<option value="unionbank">Unionbank (EON)</option>									
								<option value="bpi">BPI</option>									
								<option value="metrobank">METROBANK</option>									
								<option value="rcbc">RCBC</option>								
							</select>							
							</div>														
							<div class="send"><input type="submit" name="submit" value="Continue"/></div>						
						</div>												<div class="clr"></div>											
					</form>-->										
					<div class="clr"></div>									
				</div>						
			</div>			
				<div class="hand"><img src="<?php bloginfo('template_url')?>/images/phone.png" width="678" height="517" alt=""/></div>		
			</div>		
			<div class="clear"></div>	</div>	<div class="clear"></div>		
				<div class="container">		<!-- Place somewhere in the <body> of your page -->				
					<?php if( have_rows('promo') ): ?>				
					<div class="flexslider">					  
					<ul class="slides">			
						<?php  while ( have_rows('promo') ) : the_row(); ?>			
						<li>				
							<a href="<?php	the_sub_field('link_page'); ?>">										
								<img src="<?php bloginfo('template_url')?>/images/<?php	the_sub_field('network'); ?>.jpg" />					
								<div class="price">						
									<strong><?php the_sub_field('amount_in_dollars'); ?></strong>						
									<span>for <?php the_sub_field('amount_in_pesos'); ?></span>					
								</div>				
							</a>				
								<img src="<?php bloginfo('template_url')?>/images/box-shadow.png" height="22" />			
							</li>			
						<?php endwhile; ?>			
						<!--<li>				
						<a href="">					
							<img src="<?php //bloginfo('template_url')?>/images/smart.jpg" />					
							<div class="price">						
								<strong>$4</strong>						
								<span>for P100</span>					
							</div>				
						</a>				
						<img src="<?php //bloginfo('template_url')?>/images/box-shadow.png" height="22" />			
					</li>			
					<li>				
						<a href="">					
							<img src="<?php //bloginfo('template_url')?>/images/sun.jpg" />					
							<div class="price">						
								<strong>$3</strong>						
								<span>for P150</span>					
							</div>				
						</a>				
						<img src="<?php //bloginfo('template_url')?>/images/box-shadow.png" height="22" />			
					</li> -->									
					<!-- items mirrored twice, total of 12 -->		  
				</ul>		
			</div>				
		<?php endif; ?>		
		<div class="clear"></div>				
		<div class="payment-method">			
			<p>payment method accepted</p>			
			<img src="<?php bloginfo('template_url')?>/images/payment-method.jpg" alt=""/>		
		</div>			
	</div>	<div class="clear"></div>
</div>
<!--/MID -->



<?php get_footer(); ?>