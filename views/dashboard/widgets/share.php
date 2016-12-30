<div class="slider">

	<!-- STYLE -->

	<link href="<?php echo $this->theme->getBaseUrl().'/css/orbit.css'; ?>" rel="stylesheet">
	
	<!-- BLOCK -->

	<div class="panel panel-default members" id="share-panel">
		<div class="panel-body">
		
			<!-- 
				IMAGES 
				Imgaes folder: ../FlatHub/img/orbit/banner
				Images format: 346x346px jpg
			--> 
			
			<div id="featured"> 
				<img src="<?php echo $this->theme->getBaseUrl().'/img/orbit/banner/1.jpg'; ?>" rel="caption-1" />
				<a href="http://humhub.com" target="_blank">
					<img src="<?php echo $this->theme->getBaseUrl().'/img/orbit/banner/2.jpg'; ?>" rel="caption-2" />
				</a>
				<img src="<?php echo $this->theme->getBaseUrl().'/img/orbit/banner/3.jpg'; ?>" rel="caption-3" />
				<img src="<?php echo $this->theme->getBaseUrl().'/img/orbit/banner/4.jpg'; ?>"  rel="caption-4" />
			</div>
			
			<!-- CAPTIONS -->
			
			<span class="orbit-caption" id="caption-2">Thanks for use HumHub!</span>
			<span class="orbit-caption" id="caption-4">You can edit this block. Open ../FlatHub/views/dashboard/widgets/share.php</span>
			
		</div>
	</div>

	<!-- JAVASCRIPT -->
		
	<script src="<?php echo $this->theme->getBaseUrl().'/js/jquery.orbit.min.js'; ?>"></script>	
	<script type="text/javascript">
		$(window).load(function() {
			$('#featured').orbit({
				'animation': 'vertical-slide',		//fade, horizontal-slide, vertical-slide
				'animationSpeed': 800,				//how fast animtions are
				'advanceSpeed': 4000,				//if auto advance is enabled, time between transitions 
				'startClockOnMouseOut': true,		//if clock should start on MouseOut
				'startClockOnMouseOutAfter': 3000,	//how long after mouseout timer should start again
				'directionalNav': false,			//manual advancing directional navs
				'captions': true,					//do you want captions?
				'captionAnimationSpeed': 800,		//if so how quickly should they animate in
				'timer': true,						//true or false to have the timer
				'bullets': true						//true or false to activate the bullet navigation
			});
		});
	</script>
	
</div>