@include('Home.head')

<body>
<!-- Navbar -->
@include('Home.navbar')

<!-- End Navbar --> 
<!-------Banner Start------->


 

<!-------Banner End-------> 

<!-------About End------->

@include('Home.about')
<!-------About End-------> 

<!-------Video Start------->
@include('Home.services')
<!-------Video End-------> 

<!-------Features Start------->
@include('Home.feature')
@include('Home.projects')
<!-------Features End-------> 

<!-------Team Start------->

@include('Home.team')
<!-------Team End-------> 

<!-------Testimonial Start------->
@include('Home.testimonial')
@include('Home.Review')

<!-------Testimonial End-------> 

<!-------FAQ Start------->


<!-------FAQ End-------> 

<!-------Contact Start------->
@include('Home.contact')

<!-------Contact End-------> 

<!-------Download End------->


<!-------Download End------->

@include('Home.footer')




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script> 

<script src="https://cdn.tailwindcss.com"></script>

<!-- scrollIt js --> 
<script src="{{ asset('js/scrollIt.min.js')}}"></script> 
<script src="{{ asset('js/wow.min.js')}}"></script> 
<script src="{{ asset('js/script.js')}}"></script> 
<script>
	wow = new WOW();
	wow.init();
$(document).ready(function(e) {

	$('#video-icon').on('click',function(e){
		e.preventDefault();
		$('.video-popup').css('display','flex');
		$('.iframe-src').slideDown();
	});

	$('.video-popup').on('click',function(e){
		var $target = e.target.nodeName;
		var video_src = $(this).find('iframe').attr('src');
		if($target != 'IFRAME'){
			$('.video-popup').fadeOut();
			$('.iframe-src').slideUp();
			$('.video-popup iframe').attr('src'," ");
			$('.video-popup iframe').attr('src',video_src);
		}
	});

	$('.slider').bxSlider({
		pager: false
	});
});
    
$(window).on("scroll",function () {

	var bodyScroll = $(window).scrollTop(),
	navbar = $(".navbar");
	
	if(bodyScroll > 50){
	$('.navbar-logo img').attr('src','images/logo-black.png');
	navbar.addClass("nav-scroll");

}else{
	$('.navbar-logo img').attr('src','images/logo.png');
	navbar.removeClass("nav-scroll");
}

});
$(window).on("load",function (){
	var bodyScroll = $(window).scrollTop(),
	navbar = $(".navbar");
	
	if(bodyScroll > 50){
	$('.navbar-logo img').attr('src','images/logo-black.png');
	navbar.addClass("nav-scroll");
	}else{
	$('.navbar-logo img').attr('src','images/logo-white.png');
	navbar.removeClass("nav-scroll");
	}

	$.scrollIt({
	
	easing: 'swing',      // the easing function for animation
	scrollTime: 900,       // how long (in ms) the animation takes
	activeClass: 'active', // class given to the active nav element
	onPageChange: null,    // function(pageIndex) that is called when page is changed
	topOffset: -63
	});
});

</script>
</body>
</html>
