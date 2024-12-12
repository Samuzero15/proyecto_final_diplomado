<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>

<script src="{{ asset('js/modernizr.custom.js') }}"></script>
	
	<script src="{{ asset('js/minicart.min.js') }}"></script>
<script>
	
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>

					
<script src="{{ asset('js/easy-responsive-tabs.js') }}"></script>
<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default',            
	width: 'auto', 
	fit: true,   
	closed: 'accordion', 
	activate: function(event) { 
	var $tab = $(this);
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
	$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
	type: 'vertical',
	width: 'auto',
	fit: true
	});
	});
</script>

	<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('js/jquery.countup.js') }}"></script>
	<script>
		$('.counter').countUp();
	</script>

<script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.easing.min.js') }}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>

	<script type="text/javascript">
		$(document).ready(function() {
	
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<script src="{{ asset('js/responsiveslides.min.js') }}"></script>
<script src="{{ asset('js/jquery.flexslider.js') }}"></script>
<script src="{{ asset('js/imagezoom.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-ui.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
