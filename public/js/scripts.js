'use strict';

(function($, viewport) {

    $(window).resize(
        viewport.changed(function() {
            if( viewport.is(">=md") && $('#main-menu').hasClass('s-inactive') ) {
                $('#main-menu').removeClass('s-inactive');
            }
            if($('.active-section').hasClass('page-left')){
                $('.active-section').removeClass('left-25').addClass('left-0');
                $('#main-menu').removeClass('left-25').addClass('left-50');
            } 
            if($('.active-section').hasClass('page-right')){
                $('.active-section').removeClass('left-25').addClass('left-50');
                $('#main-menu').removeClass('left-25').addClass('left-0');
            }
            if(!$('.active-section')[0] === 'undefined'){
                $('#main-menu').removeClass('left-0 left-50').addClass('left-25');
            }
        })
    ); 

    $('a.nav-link').on('click', function() {

        var mainMenu = $('#main-menu'),
	     	clickedId = $(this).attr('href'),
	     	pageRight = $(this).hasClass('page-right'),
	     	hwPanel = $('hwpanel'),
	     	activeSection = "#" + $('.active-section').attr('id');

        if (viewport.is("xs")) {
        
            //checks if bootstrap menu is opened, if so wait for animation
            if($('.navbar-collapse').is(":visible")){
                $('.navbar-collapse').off().on('hidden.bs.collapse', function(event) { 
                    smallviewport(clickedId, mainMenu, activeSection);
                })
            } else {
                smallviewport(clickedId, mainMenu, activeSection);
            }
        }
        if (viewport.is("sm")) {
            smallviewport(clickedId, mainMenu, activeSection);
        }

        if (viewport.is(">=md")) {
            removeInactive(activeSection);
            removeInactive(clickedId);

            //clean up the previous section
            if (activeSection !== clickedId && activeSection !== "#undefined") {
                if (pageRight === true) {
                    moveLeft(activeSection);
                    sectionDefault(activeSection, true);
                } else {
                    moveRight(activeSection);
                    sectionDefault(activeSection, false);
                }
                menuDefault(mainMenu);
            }

            if (pageRight !== true) {
                leftSideLinks(clickedId, pageRight, mainMenu);
            } else {
                rightSideLinks(clickedId, pageRight, mainMenu);
            }
        }

    });

    function smallviewport(clickedId, mainMenu, activeSection) {
         if (clickedId === mainMenu.selector) {
                mainMenu.removeClass('s-inactive');
            } else {
                mainMenu.addClass('s-inactive');
            }

            if (clickedId !== activeSection && clickedId != mainMenu.selector) {
                if (activeSection !== 'undefined') {
                    $('.hwpanel.active-section').removeClass('active-section');
                }
                addInactive(activeSection);
                addInactive(clickedId);
                setTimeout(function() {
                    removeInactive(clickedId);
                    addActive(clickedId);
                }, 1000);

            } else {
                removeInactive(activeSection);
                removeActive(activeSection)
                removeInactive('#main-menu');
            };
        }

    function removeActive(elementId){
    	$(elementId).removeClass('active-section');
    }

    function addActive(elementId){
    	$(elementId).addClass('active-section');
    }

    function removeInactive(elementId){
    	$(elementId).removeClass('s-inactive');
    }

     function addInactive(elementId){
    	$(elementId).addClass('s-inactive');
    }

    function leftSideLinks(clickedId, pageRight, mainMenu) {
        if (!$(clickedId).hasClass('active-section') && (pageRight !== true)) {
            moveRight(mainMenu);
            $(mainMenu).removeClass('left-0');
            moveAndActivate(clickedId, pageRight);
        } else {
            removeAllRight();
            menuDefault(mainMenu);
            $(mainMenu).removeClass('left-50');
            sectionDefault(clickedId);
        }
    }

    function rightSideLinks(clickedId, pageRight, mainMenu) {
        if (!$(clickedId).hasClass('active-section') && (pageRight === true)) {
            moveLeft(mainMenu);
            moveAndActivate(clickedId, pageRight);
        } else {
            removeAllLeft();
            menuDefault(mainMenu);
            sectionDefault(clickedId);
        }
    }

    function moveRight(selector) {
        $(selector).addClass('left-50').removeClass('left-25');
    }

    function moveLeft(selector) {
        $(selector).addClass('left-0').removeClass('left-25');
    }
    function removeAllRight() {
        $('.hwpanel').removeClass('left-50').addClass('left-25');
    }

    function removeAllLeft() {
        $('.hwpanel').removeClass('left-0').addClass('left-25');
    }

    function moveAndActivate(selector, pageRight) {
        $(selector).addClass('active-section').removeClass('left-25');
        if (pageRight === true) {
            setTimeout(function() {
                $(selector).addClass('left-50');
            }, 50);
        } else {
            setTimeout(function() {
                $(selector).addClass('left-0');
            }, 50);
        }
    }

    function menuDefault(menu) {
        $(menu).removeClass('left-50 left0').addClass('left-25');
    }

    function sectionDefault(section, activesec) {
        if ($(section).hasClass('left-0') && activesec === false) {
            $(section).removeClass('left-0');
            setTimeout(function() {
                $(section).removeClass('active-section left-50');
            }, 1000);

        } else if ($(section).hasClass('left-50') && activesec !== true) {
            $(section).removeClass('left-50');
            setTimeout(function() {
                $(section).removeClass('active-section left-0');
            }, 1000);
        } else {
            $(section).removeClass('left-50').addClass('left-0');
            setTimeout(function() {
                $(section).removeClass('active-section left-0');
            }, 1000);
        }
    }

    //skills progress

    $('.skill-progress').bind('inview', function(event, visible, visiblePartX, visiblePartY) {
        if (visible) {
            $.each($('div.progress-bar'),function(){
                $(this).css('width', $(this).attr('aria-valuenow')+'%');
            });
            $(this).unbind('inview');
        }
    });
    
    // -------------------------------------------------------------
    // More skill
    // -------------------------------------------------------------
    $('.more-skill').bind('inview', function(event, visible, visiblePartX, visiblePartY) {
        if (visible) {
            $('.chart').easyPieChart({
                //configuration
                easing: 'easeOut',
                delay: 3000,
                barColor:'#fff',
                trackColor:'rgba(58, 65, 73, 1)',
                scaleColor: false,
                lineWidth: 8,
                size: 140,
                animate: 2000,
                onStep: function(from, to, percent) {
                    this.el.children[0].innerHTML = Math.round(percent);
                }

            });
            $(this).unbind('inview');
        }
    });



})(jQuery, ResponsiveBootstrapToolkit);


