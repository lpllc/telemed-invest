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
            top = $(id).offset().top;     
        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 1500);
    });
	var lg_menu = $('.select-lang');
	lg_menu.hide();
	$('.lang').on('click', function(){
		lg_menu.toggle();
	})
	var lg_menu_mob = $('.select-lang-mob');
	lg_menu_mob.hide();
	$('.lang_mob').on('click', function(){
		lg_menu_mob.toggle();
	})
	var mob_burger = $('.mob_burger');
	mob_burger.on('click', function(){
		$('.mob-nav').addClass('active');
	})
	var close_menu = $('.close-menu');
	close_menu.on('click', function(){
		$('.mob-nav').removeClass('active');
	})
});


/*
<script>
  setTimeout( 'location="index.htm";', 5000 );
  location.href = 'thanks.html';
</script> 
*/