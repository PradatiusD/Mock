	</div> <!-- .wrap < #main -->
</section> <!--  #main -->

<footer id="footer">
	<div class="wrap group">
		<div class="footer-text">
			<?php echo apply_filters('ci_footer_credits', ''); ?>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
<div style="display:none">
	<div id="myDivID2">
		<form action="">
			<input type="text" placeholder="Full Name*">
			<br>
			<input type="text" placeholder="Email*">
			<br>
			<input type="text" placeholder="Phone Number">
			<br>
			<textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
			<br>
			<input type="submit" value="Send" class="send">
		</form>
	</div>
</div>
<div style="display:none">
	<div id="myDivID">
		<p><strong>Extensive Library</strong>100s of mobile-only elements, one of the largest on the web. New elements added every week.</p>
		<p><strong>Production Quality</strong>Pixel perfect images, ready to drop into your project, backed by a rigorous QA process</p>
		<p><strong>Custom Services</strong>You get PSDs With vector layers. Need help customizing. No problem, we’ve got a design team to back you up.</p>
		<p><strong>Companion App</strong></p>
		<p><strong>We understand enterprise</strong>Led by a team of Enterprise veterans We’re ready to Give you the support you need.</p>
		<p><strong>Leverage our design service to free yourself and focus on your platform</strong><strong>It makes economic sense</strong>We are good at following Design trends and efficiently expanding our design library. If you had to do it yourself, it would cost you hundredsof thousands of dollars. Hire Us for core competence, And Free Yourself to add more value To your client’s business.
</p>
	</div>
</div>

<script type="text/javascript">
jQuery(document).ready(function($){
	$('.footer-text').html('<a href="#myDivID2" id="fancyBoxLink2"  class="cta black" >Contact us to learn more</a>');
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