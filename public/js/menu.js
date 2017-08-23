/*
  Slidemenu
*/
(function () {
	var $body = document.body,
		$menu_trigger = $body.getElementsByClassName('menu-trigger')[0];

	if (typeof $menu_trigger !== 'undefined') {
		$menu_trigger.addEventListener('click', function () {
			$body.className = ($body.className == 'menu-active') ? '' : 'menu-active';
		});
	}

}).call(this);

/*
  Hamburger Button
*/

var menu = $('.wrapper div');

menu.on('click', function () {
	var menuNum = $(this).data('menu');
	$(this).toggleClass('menu-' + menuNum + '-active');


})


// var menuNum = $(this).data('menu');
// $(this).toggleClass('menu-'+ menuNum +'-active');
