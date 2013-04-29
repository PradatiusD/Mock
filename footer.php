	</div> <!-- .wrap < #main -->
</section> <!--  #main -->

<footer id="footer">
	<div class="wrap group">
		<div class="footer-text">
			<a href="#myDivID2" id="fancyBoxLink2"  class="cta black" >Contact us to learn more</a>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
<div style="display:none">
	<div id="myDivID2">
		<form action="contact.php" method="post">
			<input type="text" name="Name" placeholder="Full Name*" >
			<br>
			<input type="email" name="email" placeholder="Email*" >
			<br>
			<input type="tel" name="phonenumber" placeholder="Phone Number">
			<br>
			<textarea name="pitch" id="" cols="30" rows="10" placeholder="Message..."></textarea>
			<br>
			<input type="submit" class="send" value="send">
		</form>
	</div>
</div>
<div style="display:none">
	<div id="myDivID">
		<p><img src="http://getmock.com/store/wp-content/uploads/2013/04/library.png"/><strong>Extensive Library</strong><span>Hundreds of mobile-only elements, one of the largest on the web. New elements added every week.</span></p>
		<p><img src="http://getmock.com/store/wp-content/uploads/2013/04/star1.png"/><strong>Production Quality</strong><span>Pixel perfect images, ready to drop into your project, backed by a rigorous QA process.</span></p>
		<p><img src="http://getmock.com/store/wp-content/uploads/2013/04/checkmark.png"/><strong>Vector Layer PSDs</strong><span>Need help customizing to your needs? No problem, we’ve got a design team to back you up.</span></p>
		<p><img src="http://getmock.com/store/wp-content/uploads/2013/04/mobile.png"/><strong>Companion iPhone App</strong><span>With Mock, you can take your clients from low-fidelity to production quality mock-ups.</span></p>
		<p><img src="http://getmock.com/store/wp-content/uploads/2013/04/smiley.png"/><strong>It makes economic sense</strong><span>We focus on the forefront of mobile design so you don't have to.</span></p>
		<p><img src="http://getmock.com/store/wp-content/uploads/2013/04/trophy.png"/><strong>Focus on the product</strong><span>  Hire us for core design competence, and free yourself to add more value to your client’s business.</span></p>
	</div>
</div>

<script type="text/javascript">
jQuery(document).ready(function($){
	$("a#fancyBoxLink").fancybox({
		'href'   : '#myDivID',
		'titleShow'  : false,
		'transitionIn'  : 'elastic',
		'transitionOut' : 'elastic'
	});
	$("a#fancyBoxLink2").fancybox({
		'href'   : '#myDivID2',
		'titleShow'  : false,
		'transitionIn'  : 'elastic',
		'transitionOut' : 'elastic'
	});
})
</script>

<!-- Layout scripts-->


<script>

jQuery(document).ready(function($){
	$('a.entry-permalink').text("BUY")
	var postcount = $('article').length - 1;
	var postarray = []
	for (i=0;i<=postcount; i++){
		var addpost = $('article').eq(i).attr("id");
		postarray.push(addpost)
	}
	for (i=0;i<=postarray.length;i++){
		var changex = Math.random() * -1000;
		var changey = Math.random() * -400;
		$("#"+postarray[i]).find('.entry-content-cnt').css('background-position-x',changex+"px").css('background-position-y',changey+"px");

		var lightboxlink = $("#"+postarray[i]).find('.entry-content > a').attr('rel');
		var photohref = $("#"+postarray[i]).find('.entry-content > a').attr('href');
		$("#"+postarray[i]).find('.entry-desc h1 a').attr('rel',lightboxlink).attr('href',photohref);

	}
})
</script>
</body>
</html>