$(document).ready(function () {
	// $('.navbarNavi').find('a[href*="#"]')
	// 	.not('[href="#"]')
	// 	.not('[href="#0"]')
	// 	.click(function (event) {
	// 		if (
	// 			location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
	// 			&&
	// 			location.hostname == this.hostname
	// 		) {
	// 			var target = $(this.hash);
	// 			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	// 			if (target.length) {
	// 				event.preventDefault();
	// 				$('html, body').animate({
	// 					scrollTop: target.offset().top
	// 				}, 1000, function () {
	// 					var $target = $(target);
	// 					$target.focus();
	// 					if ($target.is(":focus")) {
	// 						return false;
	// 					} else {
	// 						$target.attr('tabindex', '-1');
	// 						$target.focus();
	// 					};
	// 				});
	// 			}
	// 		}
	// 	});
	new WOW().init();
	/*active menu*/
	const url = window.location.href;
	const nav = document.querySelector('#navbar').children

	for (let i = 0; i < nav.length; i++) {
		let child = nav[i].children[0]
		child.classList.remove('active')
		let link = child.href
		if (url == link) {
			child.classList.add('active')
		}
	}

	document.getElementById('iconmenu').addEventListener('click', function () {
		document.getElementById('header').classList.add('nav-mobile')
		document.getElementById('menu').style.display = 'block'
	})
	document.getElementById('iconclose').addEventListener('click', function () {
		document.getElementById('menu').style.display = 'none'
		document.getElementById('header').classList.remove('nav-mobile')
	})

	/*responsive banner*/
	function resizeBrowser() {
		var w = window.innerWidth
		var height = 700;
		var width = 1440;
		// if (w < 768) {
		// 	height = 404;
		// 	width = 390;
		// }
		if($('#banner').length){
			var banner = document.getElementById('banner')
			if (w > 767)
				banner.style.height = w * height / width + 'px';
		}
	}
	resizeBrowser();
	window.addEventListener('resize', resizeBrowser)
	/*end*/
	/*fixed menu when scroll*/
	var lastScroll = 200;
	window.onscroll = function (e) {
		var st = document.documentElement.scrollTop;
		var element = document.getElementById('header');
		if (st > lastScroll) {
			element.classList.add('nav-up');
			element.classList.remove('nav-down');

		} else if (st >= 100 && st <= lastScroll) {
			element.classList.remove('nav-up');
			element.classList.add('nav-down');
		} else {
			element.classList.remove('nav-up');
			element.classList.remove('nav-down');
		}
		lastScroll = st < 0 ? 0 : st;
	}

})