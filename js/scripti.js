//*******************************************************************
//jQuery
//*******************************************************************

jQuery(document).ready(function($) {

	$(".border-menu").click(function() {
		$(".resValikko").slideToggle();
	});

	document.querySelector( ".border-menu" )
	  .addEventListener( "click", function() {
	    this.classList.toggle( "active" );
		});
//	$(".border-menu").click(function() {
//		$(".resValikko").slideToggle();
//	});

//document.querySelector( ".border-menu" )
//  .addEventListener( "click", function() {
//    this.classList.toggle( "active" );
//	});

var btt =$('.ylosNappi');
	btt.on('click', function(e) {
	$('html, body').animate ({
	scrollTop: 0 }, 50);
	e.preventDefault();
});

var bttA =$('.alasNappi img');
	bttA.on('click', function(e) {
	$('html, body').animate ({
	scrollTop: 900 }, 500);
	e.preventDefault();
});

$(window).scroll(function(){
   if($(window).scrollTop()<10){
//		 $('.ylosNappi').fadeOut("fast");
//         $('.alasNappi img').fadeIn("fast");
//         $('#tervetuloaloota').fadeIn("fast");
		 $('p').css('font-color', '#660000');
//		 $('header').css('border-bottom', '0px solid #890010');
   } else {
//         $('.ylosNappi').fadeIn("fast");
//		 $('.alasNappi img').fadeOut("fast");
//         $('#tervetuloaloota').fadeOut("fast");
		 $('p').css('font-color', '#454454');
//		 $('#headeri').css('border-bottom', '1px solid #890010');
   }

 });
});

//*******************************************************************
//AJAX
//*******************************************************************
