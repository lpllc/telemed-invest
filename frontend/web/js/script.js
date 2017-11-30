$(document).ready(function() {
		$('.pop').magnificPopup({
					removalDelay: 300,
					duration: 300, // duration of the effect, in milliseconds
    			easing: 'ease-in-out', // CSS transition easing function
  				mainClass: 'mfp-fade'
				});
	$(".menu").on("click","a", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();
        //забираем идентификатор бока с атрибута href
        var id  = $(this).attr('href'),
        //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top-53;     
        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 1000);
    });

	var lg_menu = $('.select-lang');
	lg_menu.hide();
	$('.lang').on('click', function(){
		lg_menu.toggle();
		$('.fa-angle-down').toggleClass('active');
	})

	var lg_menu_mob = $('.select-lang-mob');
	lg_menu_mob.hide();
	$('.lang_mob').on('click', function(){
		lg_menu_mob.toggle();
		$('.fa-angle-down').toggleClass('active');
	})

	var mob_burger = $('.mob_burger');
	mob_burger.on('click', function(){
		$('.mob-nav').addClass('active');
	})

	var close_menu = $('.close-menu');
	close_menu.on('click', function(){
		$('.mob-nav').removeClass('active');
	})

	var element = $('.scroll_hidden');
	    $(window).scroll(function(){
	        element['display'+ ($(this).scrollTop() > 0 ? 'block': 'none')];          
	    });

 

 $('.hover_section, .box').on('mouseover',(function() {
    $('.desc').addClass('animated flipInY')
  }));
$('.hover_section, .box').on('mouseleave',(function() {
    $('.desc').removeClass('animated flipInY')
  }));
if($(window).width()<=480){
     $('.hover_section, .box').on('mouseover',(function() {
    $('.desc').removeClass('animated flipInY')
  }));
		$('.hover_section, .box').on('mouseleave',(function() {
    $('.desc').removeClass('animated flipInY')
  }));
     }   
});
 function myFunc() {
		var x = $('#snackbar');
		var close_snack = $('#snackbar span');
		close_snack.on('click', function(){
			x.removeClass('show');
		})
		x.addClass('show');
	}      
/*
<script>
  setTimeout( 'location="index.htm";', 5000 );
  location.href = 'thanks.html';
</script> 
*/