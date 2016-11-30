jQuery(function( $ ) {

	$('a.nav-link').on('click', function() {

		var mainMenu = $('#main-menu');
		var clickedId = $(this).attr('href');
		var pageRight = $(this).hasClass('page-right');
		var hwPanel = $('hwpanel');
		var activeSection = "#" + $('.active').attr('id'); 
		
		//clean up the previous section
		if (activeSection !== clickedId && activeSection !== "#undefined"){ 
			if (pageRight === true){
				moveLeft(activeSection);
				sectionDefault(activeSection, true);
			} else {
				moveRight(activeSection);
				sectionDefault(activeSection, false);
			}
			menuDefault(mainMenu);
		}
		
		if (pageRight !== true){
			leftSideLinks(clickedId, pageRight, mainMenu);
		} else {
			rightSideLinks(clickedId, pageRight, mainMenu);			
		}
	});

	function leftSideLinks(clickedId, pageRight, mainMenu){
		if (!$(clickedId).hasClass('active') && (pageRight !== true)) {
			moveRight(mainMenu);
			moveAndActivate(clickedId, pageRight);
		} else {
			removeAllRight();
			menuDefault(mainMenu);
			sectionDefault(clickedId);
		}
	}

	function rightSideLinks(clickedId, pageRight, mainMenu){
		if (!$(clickedId).hasClass('active') && (pageRight === true)) {
			moveLeft(mainMenu);
			moveAndActivate(clickedId, pageRight);
		} else {
			removeAllLeft();
			menuDefault(mainMenu);
			sectionDefault(clickedId);
		}
	}

	function moveRight(selector){
		$(selector).addClass('left-50').removeClass('left-25');
	}
	function moveLeft(selector){
		$(selector).addClass('left-0').removeClass('left-25');
	}
	function removeAllRight(){
		$('.hwpanel').removeClass('left-50').addClass('left-25');
	}
	function removeAllLeft(){
		$('.hwpanel').removeClass('left-0').addClass('left-25');
	}
	function moveAndActivate(selector, pageRight){
		$(selector).addClass('active').removeClass('left-25');
		if (pageRight === true){
			setTimeout(function(){
				$(selector).addClass('left-50');
			}, 50);
		} else{
			setTimeout(function(){
				$(selector).addClass('left-0');
			}, 50);
		}
	}
	function menuDefault(menu){
		$(menu).removeClass('left-50 left0').addClass('left-25');
	}

	function sectionDefault(section, activesec){ 
		/*
			**** the classes var is just for debugging, remove when done debugging
		*/
		var classes = $(section).attr("class");
		console.log(classes + section + activesec);

		if ($(section).hasClass('left-0') && activesec === false){
			$(section).removeClass('left-0');
				setTimeout(function(){
					$(section).removeClass('active left-50');
				}, 1000);	

		} else if($(section).hasClass('left-50') && activesec !== true) {
			$(section).removeClass('left-50');
				setTimeout(function(){
					$(section).removeClass('active left-0');
				}, 1000);	
		} else {
			$(section).removeClass('left-50').addClass('left-0');
				setTimeout(function(){
					$(section).removeClass('active left-0');
				}, 1000);	
		}
	}    
});

