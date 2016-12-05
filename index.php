<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<?php
		include("title.php");
	?>
	<link rel="stylesheet" href="css/style.css" type="text/css">-
</head>
<body>
	<!-- Script AJAX -->
	<script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<div id="background">
		<div id="page">
			<div id="header">
				<?php
					include("header.php");
				?>
				<div id="navigation">
					<?php
						include("menu_header.php");
					?>
				</div>
			</div>
            
          <div id="contents">
				<!--<div id="adbox">-->
                	<!-- Div Slideshow Image -->
                	<?php
						include("wallpaper_slider.php");
					?>
                    <!---->
                  
				<!--</div>-->

				<div id="main">
					<div class="box">
						<div>
							<div>
								<h3>INFO</h3>
								<ul>
									<li>
										<h4>What is MaximusCards?</h4>
										<p>
											MaximusCards is a e-commerce that specialize in iTunes Gift Cards, Playstation Network (PSN) Cards, Microsoft Xbox Live Points, Nintendo Points, Warcraft, and PC Game Codes. We offer online delivery of your Video Game Code for a minimal fee. You should be using your Video Game Code in minutes!

No more driving to the store, spending your gas and time, only to be told that they run out of the product. No more ordering online and waiting days or weeks for your product to arrive.

We have been selling Video Game Codes since 2004 to our satisfied customers in more than 100 countries so you can buy with confidence. Founded in 2004, Maximus Cards has since become the worldwide leader in multinational retailer of digital codes for iTunes, PSN, Xbox, Wii and PC games. We hope you find our service to your satisfaction. If you have any question or comments, don't hesitate to contact us
										</p>
									</li>
                                    <li>
										<h4>New Payment Options</h4>
										<p>
											For added convenience, we are also offering BitCoin, Bradesco Comércio Eletrônico, Banricompras, Banco do Brasil Comércio Eletrônico, Boleto Bancário, MrCash, DirectEbanking, Multibanco SBS, Alipay, Trustly, Paysafecard, Tenpay, MyBank, QIWI Wallet, Beeline, Megafon, Yandex, Fawry, Entropay, SafetyPay, Ukash, cashU, SOFORT Überweisung, eNETS, iDEAL, EPS, ING Home'Pay, Amazon Payments, inpay, Skrill, POLi and OneCard as our alternative payment options. 
										</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<?php
						include("quote.php");
					?>
				</div>
				<div id="sidebar">
					<?php
						include("plugin.php");
					?>
				</div>
			</div>
		</div>
		<div id="footer">
			<div>
				<?php
					include("menu_footer.php");
				?>
			</div>
			<?php
				include("copyright.php");
			?>
		</div>
	</div>
</body>
</html>