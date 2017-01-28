<footer class="footer">
	<div class="container">
		<div class="ui doubling grid">
			<div class="eight wide column">
				<a href="<?php bloginfo('url'); ?>"><img class="logo" src="http://thebatonproject.org/wp-content/uploads/2016/02/logo.png" alt="logo"></a>
				<img class="role" src="http://thebatonproject.org/wp-content/uploads/2016/02/role.png" alt="role">
			</div>
			<div class="eight wide column">
				<ul class="social">
					<li><a class="fa fa-facebook" href="https://www.facebook.com/BatonEnlightenmentProject/?ref=aymt_homepage_panel" target='_blank'></a></li>
					<li><a class="fa fa-envelope" href="mailto:drive-shares-noreply@google.com"></a></li>
				</ul>
			</div>
		</div>
		<p class="slogan">發現美好天賦與熱情為人所用</p>
	</div>
	<p id="copyright">接棒啟蒙計畫 | The Baton Project &copy 2016. All Rights Reserved.</p>
</footer>
<div id="gotop"><i class="fa fa-chevron-up"></i></div>  <!-- 向上滑 -->
<?php wp_footer();?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/jquery.flexslider-min.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/sidebar.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.fa-bars,.fa-chevron-right').click(function(){
        $('.ui.sidebar').sidebar('toggle');
        return false;
    });
	 $('.flexslider').flexslider({
	    animation: "slide",
	    slideshowSpeed: 3000,
	    pauseOnHover: true,
	    prevText: "",
	    nextText: ""
	 });
	 $(".thumb, .planText").hover(
	 	function(){
	 		var excerpt = $(this).parent().children(".planExcerpt").children("p").text();
	 		$(this).parent().children(".planText").html(excerpt);
	 		$(this).parent().children(".thumb").css("opacity","0.8");
	 	},function(){
	 		var title = $(this).parent().children(".planTitle").text();
	 		$(this).parent().children(".planText").html(title);
	 		$(this).parent().children(".thumb").css("opacity","1");
	 	}
	 );
	$("#gotop").click(function(){
		jQuery("html,body").animate({
			scrollTop:0
		},1000);
	});
(function($){
$.fn.animateNumbers = function(stop, commas, duration, ease) {
        return this.each(function() {
            var $this = $(this);
            var start = parseInt($this.text().replace(/,/g, ""));
			commas = (commas === undefined) ? true : commas;
            $({value: start}).animate({value: stop}, {
            	duration: duration == undefined ? 1000 : duration,
            	easing: ease == undefined ? "swing" : ease,
            	step: function() {
            		$this.text(Math.floor(this.value));
					if (commas) { $this.text($this.text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")); }
            	},
            	complete: function() {
            	   if (parseInt($this.text()) !== stop) {
            	       $this.text(stop);
					   if (commas) { $this.text($this.text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")); }
            	   }
            	}
            });
        });
 };
})(jQuery);
	$(window).scroll(function() {
		if ( $(this).scrollTop() > 300){
			$('#gotop').fadeIn("fast");
		} else {
			$('#gotop').stop().fadeOut("fast");
		}
		var currentTop = $(window).scrollTop()-100;
		if(currentTop >= $("#plan").offset().top && currentTop < $("#results").offset().top) {
			$stuNum=$('#stuNumber').val();
			$volNum=$('#volNumber').val();
			$actNum=$('#actNumber').val();
			$("#stuNum").animateNumbers($stuNum, true, 1000);
			$("#volNum").animateNumbers($volNum, true, 1000);
			$("#actNum").animateNumbers($actNum, true, 1000);
		}
		else{}
		return false;
	});
});
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
