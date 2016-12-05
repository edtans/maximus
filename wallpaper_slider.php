<div class="w3-content w3-display-container">
	<img class="mySlides" src="images/pagbrazil_payment.jpg" style="width:100%">
	<img class="mySlides" src="images/promotion_banner_gift_card.jpg" style="width:100%">
	<img class="mySlides" src="images/mobile_banner.jpg" style="width:100%">
	<img class="mySlides" src="images/join-Affiliate.jpg" style="width:100%"><!-- height="425">-->

	<a class="w3-btn-floating w3-display-left" onclick="plusDivs(-1)">&#10094;</a>
	<a class="w3-btn-floating w3-display-right" onclick="plusDivs(1)">&#10095;</a>
</div>

<script>
	var slideIndex = 1;
	showDivs(slideIndex);

	function plusDivs(n)
	{
		showDivs(slideIndex += n);
	}

	function showDivs(n)
	{
		var i;
		var x = document.getElementsByClassName("mySlides");
		if (n > x.length) {slideIndex = 1}    
		if (n < 1) {slideIndex = x.length}
		for (i = 0; i < x.length; i++)
		{
			x[i].style.display = "none";  
		}
		x[slideIndex-1].style.display = "block";  
	}
</script>
<h1>Welcome to MaximusCards</h1>