jQuery(document).ready(function() {

	
/*-----------------------------------------------------------------------------------*/
/*	Superfish Settings - http://users.tpg.com.au/j_birch/plugins/superfish/
/*-----------------------------------------------------------------------------------*/
	
	$('nav ul').superfish({
				autoArrows	: false,
				dropShadows : false,
				animation	: {opacity:'show'},
				speed		: 'medium',
				easing:      'easeInOutCirc'
			});
	
	
	
	
/*-----------------------------------------------------------------------------------*/
/*	Opacity changes
/*-----------------------------------------------------------------------------------*/

	jQuery(".img-opacity").hover(function() {
		jQuery(this).stop().animate({
			opacity: 0.5
			}, 200);
	},function() {
		jQuery(this).stop().animate({
			opacity: 1
			}, 500);
	});
	
	
/*-----------------------------------------------------------------------------------*/
/*	Portfolio Overlay Effect
/*-----------------------------------------------------------------------------------*/
	
	function image_overlay() {
jQuery('.portfolio-img').hover( function () {
			jQuery(this).find('.overlay, .overlaytwo, .overlaythree').stop().animate({ opacity: 1 }, 200);
}, function () {
			jQuery(this).find('.overlay, .overlaytwo, .overlaythree').stop().animate({ opacity: 0 }, 200);
});
}
image_overlay(); 


 
 /*-----------------------------------------------------------------------------------*/
/*	Chosen Select Menu - http://harvesthq.github.com/chosen/
/*-----------------------------------------------------------------------------------*/

$(".chzn-select").chosen();

/*-----------------------------------------------------------------------------------*/
/*	Convert a Menu to a Dropdown for Small Screens - http://css-tricks.com/convert-menu-to-dropdown/
/*-----------------------------------------------------------------------------------*/

// DOM ready
           
      // Create the dropdown base
      $("<select />").appendTo("nav");
      
      // Create default option "Go to..."
      $("<option />", {
         "selected": "selected",
         "value"   : "",
         "text"    : "Go to..."
      }).appendTo("nav select");
      
      // Populate dropdown with menu items
      $("nav a").each(function() {
       var el = $(this);
       $("<option />", {
           "value"   : el.attr("href"),
           "text"    : el.text()
       }).appendTo("nav select");
      });
      
           // To make dropdown actually work
           // To make more unobtrusive: http://css-tricks.com/4064-unobtrusive-page-changer/
      $("nav select").change(function() {
        window.location = $(this).find("option:selected").val();
      });
         
        



/*-----------------------------------------------------------------------------------*/
/*	Pretty Photo http://www.no-margin-for-errors.com/
/*-----------------------------------------------------------------------------------*/	
$("a[rel^='prettyPhoto']").prettyPhoto();
		$(".overlay").prettyPhoto();
	
/*-----------------------------------------------------------------------------------*/
/*	UItoTop jQuery Plugin 1.1 http://www.mattvarone.com/web-design/uitotop-jquery-plugin/
/*-----------------------------------------------------------------------------------*/		

			
			$().UItoTop({ easingType: 'easeOutQuart' });
			

/*-----------------------------------------------------------------------------------*/
/*	Page Loading Effects
/*-----------------------------------------------------------------------------------*/		

 
	$('#page_effect').fadeIn(2000);
 


/*-----------------------------------------------------------------------------------*/
/*	Contact 
/*-----------------------------------------------------------------------------------*/
   
	//if submit button is clicked
	$('#submit').click(function () {		
		
		//Get the data from all the fields
		var name = $('input[name=name]');
		var email = $('input[name=email]');
		var website = $('input[name=website]');
		var comment = $('textarea[name=comment]');

		//Simple validation to make sure user entered something
		//If error found, add hightlight class to the text field
		if (name.val()=='') {
			name.addClass('hightlight');
			return false;
		} else name.removeClass('hightlight');
		
		if (email.val()=='') {
			email.addClass('hightlight');
			return false;
		} else email.removeClass('hightlight');
		
		if (comment.val()=='') {
			comment.addClass('hightlight');
			return false;
		} else comment.removeClass('hightlight');
		
		//organize the data properly
		var data = 'name=' + name.val() + '&email=' + email.val() + '&website=' + 
		website.val() + '&comment='  + encodeURIComponent(comment.val());
		
		//disabled all the text fields
		$('.text').attr('disabled','true');
		
		//show the loading sign
		$('.loading').show();
		
		//start the ajax
		$.ajax({
			//this is the php file that processes the data and send mail
			url: "process.php",	
			
			//GET method is used
			type: "GET",

			//pass the data			
			data: data,		
			
			//Do not cache the page
			cache: false,
			
			//success
			success: function (html) {				
				//if process.php returned 1/true (send mail success)
				if (html==1) {					
					//hide the form
					$('.form').fadeOut('slow');					
					
					//show the success message
					$('.done').fadeIn('slow');
					
				//if process.php returned 0/false (send mail failed)
				} else alert('Sorry, unexpected error. Please try again later.');				
			}		
		});
		
		//cancel the submit button default behaviours
		return false;
	});	

 
/*-----------------------------------------------------------------------------------*/
/*	Lettering
/*-----------------------------------------------------------------------------------*/ 
		
		

					$("#letter-container h2 a").lettering();



/*-----------------------------------------------------------------------------------*/
/*	Countdown
/*-----------------------------------------------------------------------------------*/ 


				    launchTime = new Date('2012','03','20'); // Set launch: [year], [month], [day], [hour]...
					launchTime.setDate(launchTime.getDate()); // Add 15 days
				$("#countdown").countdown({until: launchTime, format: "odHMS"});
			


/*-----------------------------------------------------------------------------------*/
/*	Tipsy & Normal Tooltips - http://onehackoranother.com/projects/jquery/tipsy/
/*-----------------------------------------------------------------------------------*/

		
		$("a.next-testimonial").tipsy({gravity: 'w', fade: true, delayIn: 2000, delayOut: 200});
		$("a.top-slick").tipsy({gravity: 'e', fade: true, delayIn: 2000, delayOut: 200});
		$('a.live-tipsy').tipsy({live: true, fade: true, delayIn: 2000, delayOut: 200});
		
		
		
/*-----------------------------------------------------------------------------------*/
/*	Sliding Top
/*-----------------------------------------------------------------------------------*/
$(".show_hide").click(function(){   
  				$(this).next().fadeSliderToggle()
 				 return false;
 			})




 
});