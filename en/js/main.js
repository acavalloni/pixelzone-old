/* main.js
 *
 * Main jQuery file for pixelzone.fr
 * @author Anthony Cavalloni <anthonycavalloni@gmail.com>
 * Last update: December 31, 2011
 *
 */
 
/* Page transition and loading
*****************************************************/

$(document).ready(function() {

/* content fades when appearing, on click */
	$("#content").css("display", "none");	
	$("#content").fadeIn(700);
/* if the link has the class no-fadeout, the fade won't work */
	$("a:not(.no-fadeout)").click(function(event){
		event.preventDefault();
		linkLocation = this.href;
	$("#content").fadeOut(200, redirectPage);
	});
	
/* Loading page */
	
	/* add a 1000px margin to the maskcontent (that wraps the content div)*/	
	$("#maskcontent").css("marginTop",1000);
	/* i add the mask div to the scene, so it doesn't appear when javascript is disabled*/
	$('#mask').show();
	function redirectPage() {
		window.location = linkLocation;
	}
	
	/* i make the mask and the content slide up after a certain delay */
	$(window).load(function () {
		$('#mask').delay(3000).animate({
 		marginTop: "-100%"
    }, 1200);
		$('#maskcontent').delay(3000).animate({
 		marginTop: "0"
    }, 1350);
    /* in and out effect on the loading image */
    imageinandout();
	});
	

/* Services icons */

	$("#services-icons li").hover(function() {
	    $(this).stop().animate({ marginTop: "-80px" }, 300);
	},function(){
	    $(this).stop().animate({ marginTop: "0px" }, 300);
	});	

});

function imageinandout(){
	$('.loading-image').animate({opacity:1},1000).animate({opacity:0}, 1000)
 setTimeout("imageinandout()",2000);
}

/* Services easing
*****************************************************/

jQuery(function(){

	$(".service-icon").hover(function() {
		$("em",this).animate({opacity: "show", top: "235"}, 350);
	}, function() {
		$("em",this).animate({opacity: "hide", top: "320"}, 300);
	});


});

/* No script
*****************************************************/

jQuery(function(){
	$('#chart-message').show();
    $('#experience').css('margin-left','15px');
});

/*	Link images sliding up and down on hover
******************************************************/
 
jQuery(function($){
	$(".image a").hover(function(){
		$("img", this).stop().animate({top:"-30px"},{queue:false,duration:300});
	}, function() {
		$("img", this).stop().animate({top:"0px"},{queue:false,duration:300});
	});
});


/*	Skills > expanding chart divs' widths on hover
******************************************************/

jQuery(function($){
/* sets the width of the five divs to 150px. They have their actual width defined in the css
in case javascript is disabled. when js is enabled, the width is the expected short one
so the hover works properly */
    $("#bar-htmlcss").css('width','150px');
    $("#bar-photoshop").css('width','150px');
    $("#bar-illustrator").css('width','150px');
    $("#bar-phpmysql").css('width','150px');
    $("#bar-jquery").css('width','150px');
/* changes width on hover */ 
	$("#skill-chart").hover(function(){
	    $("#bar-htmlcss").filter(':not(:animated)').animate({ width: "550px" },700);
	    $("#bar-phpmysql").filter(':not(:animated)').animate({ width: "550px" },700)
	    $("#bar-photoshop").filter(':not(:animated)').animate({ width: "470px" },700);
	    $("#bar-jquery").filter(':not(:animated)').animate({ width: "410px" },700)
	    $("#bar-illustrator").filter(':not(:animated)').animate({ width: "310px" },700)
	}, function() {
	    $("#bar-htmlcss").animate({ width: "150px" },700);
	    $("#bar-photoshop").animate({ width: "150px" },700);
	    $("#bar-illustrator").animate({ width: "150px" },700);
	    $("#bar-phpmysql").animate({ width: "150px" },700);
	    $("#bar-jquery").animate({ width: "150px" },700);
	});
});

/*	Sliding the footer up and down
******************************************************/
  
jQuery(function($) {
	var open = false;
	$('.unfold').click(function () {
		if(open === false) {
			$('#footer-unfold').animate({ height: '540px' },{queue:false,duration:700});
			$('#footer #title_footer').html("All right, it is <span class='bold'>ok</span> ?");
			$('#contact-pigeon p').html("Click on the minus to close.");
			$('#contact-pigeon p').css('font-size', '1.1em');
			$('#icone_langue_fr').fadeOut();
			$('#icone_langue_en').fadeOut();
			$('#plus').text('-');
			open = true;
		} else {
			$('#footer-unfold').animate({ height: '0px' },{queue:false,duration:700});
			$('#footer #title_footer').html("Want to contact <span class='bold'>me</span> ?");
			$('#contact-pigeon p').html("Don't worry, you don't need one.<br />Click on the plus sign to contact me.");
			$('#contact-pigeon p').css('font-size', '0.7em');
			$('#icone_langue_fr').fadeIn();
			$('#icone_langue_en').fadeIn();
			$('#plus').text('+');
			open = false;
		}
	});		
});

/* Work showcase
*****************************************************/

jQuery(function()
{
	$("#showcase").awShowcase(
	{
		content_width:			800,
		content_height:			450,
		fit_to_parent:			false,
		auto:					false,
		interval:				3000,
		continuous:				false,
		loading:				true,
		tooltip_width:			450,
		tooltip_icon_width:		30,
		tooltip_icon_height:	30,
		tooltip_offsetx:		25,
		tooltip_offsety:		-17,
		arrows:					true,
		buttons:				false,
		btn_numbers:			false,
		keybord_keys:			true,
		mousetrace:				false, /* Trace x and y coordinates for the mouse */
		pauseonover:			true,
		stoponclick:			false,
		transition:				'vslide', /* hslide/vslide/fade */
		transition_delay:		0,
		transition_speed:		500,
		show_caption:			'onload', /* onload/onhover/show */
		thumbnails:				false,
		thumbnails_position:	'outside-last', /* outside-last/outside-first/inside-last/inside-first */
		thumbnails_direction:	'vertical', /* vertical/horizontal */
		thumbnails_slidex:		0, /* 0 = auto / 1 = slide one thumbnail / 2 = slide two thumbnails / etc. */
		dynamic_height:			false, /* For dynamic height to work in webkit you need to set the width and height of images in the source. Usually works to only set the dimension of the first slide in the showcase. */
		speed_change:			true, /* Set to true to prevent users from swithing more then one slide at once. */
		viewline:				false, /* If set to true content_width, thumbnails, transition and dynamic_height will be disabled. As for dynamic height you need to set the width and height of images in the source. */
		custom_function:		null /* Define a custom function that runs on content change */
	});
});
