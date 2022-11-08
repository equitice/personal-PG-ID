//cookie for banner
function setCookie(name, value) {
	document.cookie = name + "=" + (value || "");
}

function setCookie(name, value, exdays) {
	const d = new Date();
	d.setTime(d.getTime() + exdays);
	let expires = "expires=" + d.toUTCString();
	document.cookie = name + "=" + value + ";" + expires + ";path=/";
}
function getCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for (var i = 0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') c = c.substring(1, c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
	}
	return null;
}


jQuery(document).ready(($) => {
	let listBTNmenu = $(".menu-item-has-children").before();
	$(listBTNmenu).on('click', function() {
 			if ($('.custom-sub-menu', $(this)).hasClass('click')) {
 				$('.custom-sub-menu', $(this)).removeClass('click');
 				$('.custom-sub-menu', $(this)).slideUp();
 			} else {
 				$('.custom-sub-menu', $(this)).addClass('click');
 				$('.custom-sub-menu', $(this)).slideDown();
 			}
		});
	// for (let i = 0; i < listBTNmenu.length; i++) {
	// 	$(listBTNmenu[i]).click(() => {
	// 		if ($('.menu-item-has-children .custom-sub-menu').hasClass('click')) {
	// 			$('.menu-item-has-children .custom-sub-menu').removeClass('click');
	// 			$('.menu-item-has-children .custom-sub-menu').slideUp();

	// 		} else {
	// 			$('.menu-item-has-children .custom-sub-menu').addClass('click');
	// 			$('.menu-item-has-children .custom-sub-menu').slideDown();

	// 		}
	// 	})
	// }
// 	$(listBTNmenu).each(function () {
// 		$(this).off('click touchstart').on('click touchstart', function() {
// 			if ($('.custom-sub-menu', $(this)).hasClass('click')) {
// 				$('.custom-sub-menu', $(this)).removeClass('click');
// 				$('.custom-sub-menu', $(this)).slideUp();
// 			} else {
// 				$('.custom-sub-menu', $(this)).addClass('click');
// 				$('.custom-sub-menu', $(this)).slideDown();

// 			}
// 		});
// 	});
})

var cookie_expires = document.querySelector("#gr-popup.cookie-expires");
if (typeof (cookie_expires) != 'undefined' && cookie_expires != null) {
	var cookie_popup_expires = getCookie('popup_expires');
	console.log(cookie_popup_expires);
	if (cookie_popup_expires) {
		document.getElementById('gr-popup').style.display = "none";
	} else {
		document.getElementById('gr-popup').style.display = "block";
	}

	var timeCookie = document.getElementById('gr-popup').getAttribute('data-timeCookie');
	var el_timeCookie = timeCookie.split(':');
	var hours = el_timeCookie[0];
	var min = el_timeCookie[1];
	console.log(hours, min);
	var exdays_miliseconds = (hours * 60 * 60 * 1000) + (min * 60 * 1000);
	console.log(exdays_miliseconds);

	document.querySelector("#gr-popup.cookie-expires .popup-close").addEventListener("click", function () {
		console.log("expires");
		setCookie('popup_expires', 'checkCookie', exdays_miliseconds);
		document.getElementById('gr-popup').style.display = "none";
	});
}

var cookie_default = document.querySelector("#gr-popup.cookie-default");
if (typeof (cookie_default) != 'undefined' && cookie_default != null) {
	var cookie_popup_default = getCookie('popup_default');
	if (cookie_popup_default) {
		document.getElementById('gr-popup').style.display = "none";
	} else {
		document.getElementById('gr-popup').style.display = "block";
	}

	document.querySelector("#gr-popup.cookie-default .popup-close").addEventListener("click", function () {
		setCookie('popup_default', 'checkCookie');
		document.getElementById('gr-popup').style.display = "none";
	});
}

(function ($) {
	"use strict";
	$(document).ready(function () {
		if ($(window).width() <= 400) {
			let i = `width=320, user-scalable=yes`;
			$("#monile_view_port")?.attr('content', i);
		}
		if ($(window).width() > 700) {

			$('.menu-item-has-children')?.mouseenter(function () {
				$('.menu-item-has-children ul.sub-menu').css({
					display: 'flex',
				});
			})
				.mouseleave(function () {
					$('.menu-item-has-children ul.sub-menu').css({
						display: 'none'
					});
				});

		}

		if (($(".page_nav_")?.length) > 0) {
			$("#primary").css({
				'padding-top': '0px'
			})
			$("#page").css({
				'padding-top': '0px'
			})
		}

		if (($(".page_nav")?.length) > 0) {
			$("#primary").css({
				'padding-top': '0px'
			})
			$("#page").css({
				'padding-top': '0px'
			})
		}


		if ($(window).innerWidth() <= 500) {
			let marginRight = $("#masthead .container").offset();
			if (marginRight) {
				$(".red-hero").css({
					"background-position": `calc(100% - 40px) 95%`
				})
			}
		} else {
			let marginRight = $("#masthead .container").offset();
			if (marginRight) {
				$(".red-hero").css({
					"background-position": `calc(100% - ${marginRight.left}px) -100%`
				})
			}
		}
		$(window).on('resize', function () {
			if ($(window).innerWidth() >= 1280) {
				// take margin-left from other containers
				var margin = $("section.home-firstsec .container").css("margin-left");
				// and put on leftright
				$(".section.leftright-sec .inner").css("padding-left", margin);
				$(".section.leftright-altsec .inner").css("padding-right", margin);
			} else {
				$(".section.leftright-sec .inner").css("padding-left", '30px');
				$(".section.leftright-altsec .inner").css("padding-right", '30px');
			}
		});
		/*Videos Ajax Filter Start*/
    if ($(".page-template-academy-resources").length) {
        $('.nav-link').on('click', function (e) {
            e.preventDefault();
            $('.nav-link').removeClass('active');
            $(this).addClass('active');
            //var url_current = $("#url_current").data("url-current");
            $.ajax({
                type: 'POST',
                url: propertyguru.ajax_url,
                data: {
                    action: 'filter_videos',
                    category: $(this).data('slug')
                //    url_current: url_current
                },
                success: function (data) {
                    $('.video-main-wrapper').html(data);
					console.log('success');
//                     if (history.pushState) {
//                         history.pushState({}, document.title, url_current);
//                     }
                },
                error: function () {
                    $('.video-main-wrapper').html('An error has occurred.');
                }
            })
        });
    }
    /*Videos Ajax Filter End*/
		if ($(".page-template-academy-resources").length) {
		  $('#videos-filters-search-button').on('click', function (e) {
				console.log('yiqi the great');
				  e.preventDefault();
					$.ajax({
							type: 'POST',
							url: propertyguru.ajax_url,
							data: {
									action: 'search_videos',
									keyword: $('#videos-filters-search-text').val()
							},
							success: function (data) {
									$('.videos-listing').html(data);
				console.log('success search');
//                     if (history.pushState) {
//                         history.pushState({}, document.title, url_current);
//                     }
							},
							error: function () {
									$('.videos-listing').html('An error has occurred.');
							}
					})
			});
		}
/*Videos Ajax ChangeFeatured Start*/
    if ($(".page-template-academy-resources").length) {

		$(document.body).on('click', '.other_videos' ,function(e){
			$('html,body').animate({
      		  scrollTop: $(".videos-filters").offset().top
			 },
        	'slow');
            e.preventDefault();
           // $('.nav-link').removeClass('active');
            //$(this).addClass('active');

            $.ajax({
                type: 'POST',
                url: propertyguru.ajax_url,
                data: {
                    action: 'filter_change_featured',
                    this_id: $(this).data('id')
                //    url_current: url_current
                },
                success: function (data) {
                    $('.featured_video_wrapper').html(data);
					console.log('success');
//                     if (history.pushState) {
//                         history.pushState({}, document.title, url_current);
//                     }
                },
                error: function () {
                    $('.featured_video_wrapper').html('An error has occurred.');
                }
            })
        });
    }
    /*Videos Ajax ChangeFeatured End*/
		//menu mobile

		$(".menu-toggle")?.click(() => {
			$("#site-navigation").addClass('active');
		});
		$(".menu-close")?.click(() => {
			$("#site-navigation").removeClass('active');
		})

		//get submenu by js

		let listSubMenu = $(".sub-menu li a");
		let listRender = $(".page_nav ul");
		let listResult = [];
		let domRender = (name, href) => {
			return `<li><a href="${href}">${name}</a></li>`;
		};

		for (let i = 0; i < listSubMenu?.length; i++) {
			listResult.push({
				text: listSubMenu[i]?.textContent,
				url: listSubMenu[i]?.getAttribute('href')
			})
			if ((i + 1) == listSubMenu?.length) {
				listRender.empty();
			}
		}
		listResult.map(e => {
			let string = domRender(e.text, e.url);
			listRender?.append(string);
		})

		if ($(".contact-sec").length) {
			var offset = $(".contact-sec").offset().top;
			$(".short-cta a")?.click((e) => {
				e.preventDefault();
				$('html, body').scrollTop(offset - 100);
				return false;

			})
		}

		function social_count(social) {
			$.ajax({
				type: "POST",
				url: propertyguru.ajax_url,
				dataType: 'json',
				data: {
					action: 'propertyguru_single_post_social',
					id: $('.single-sharing-meta').attr('data-id'),
					social: social,
					_wpnonce: propertyguru.nonce
				},
				success: function (rs) {

				}
			});
		}
		$(document).on('click', '.single-sharing-meta a', function (e) {
			var social = $(this).attr('data-social');
			social_count(social);
		});

		$(window).load(function () {
			var sliderItem = $('#main-slider .main-slide-item').map(function () {
				var imgHeight = $(this).find('.thumb-pc').height();

				return parseInt(imgHeight);
			});

			var minSliderItem = Math.min.apply(Math, sliderItem);

			if (minSliderItem > 0) {
				$('#main-slider .main-slide-item .thumb-pc').css('height', minSliderItem);
			}
		});


		if ($('body').hasClass('single-post')) {
			var views = [];
			const regex = /postid-([0-9]+)/gm;
			var m = regex.exec($('body').attr('class'));



			if (m !== null) {
				var post_id = parseInt(m[1]);
				views.push(post_id);

				Cookies.set('single_views', views.join(','));
			}
		}

		$(document).on('click', '.cta', function () {
			var _this = $(this),
				type = $(this).attr('data-type'),
				id = $(this).attr('data-postID');
			$.ajax({
				type: "POST",
				url: propertyguru.ajax_url,
				dataType: 'json',
				data: {
					action: 'propertyguru_cta_banner',
					type: type,
					id: id
				},
				success: function (rs) {
				}
			});
		});

		$(document).on('click', '.popup-footer__icon', function (e) {
			e.preventDefault();

			var _this = $(this),
				type = $(this).attr('data-type'),
				id = $(this).attr('data-id');
			$.ajax({
				type: "POST",
				url: propertyguru.ajax_url,
				dataType: 'json',
				data: {
					action: 'propertyguru_popup_post',
					id: id,
					type: type
				},
				success: function (rs) {
					if (_this.next().length <= 0) {
						_this.after('<div class="social-count">' + rs.count + '</div>');
					} else {
						_this.next().html(rs.count);
					}
				}
			});
		});


		$(document).on('click', '.single-extra-meta-right a', function (e) {
			e.preventDefault();

			var _this = $(this),
				type = $(this).attr('data-type'),
				id = $(this).attr('data-id'),
				isOK = false;

			if (typeof Cookies.get(type) != 'undefined') {
				var _cookies = JSON.parse(Cookies.get(type));
				// console.log(_cookies);
				$.each(_cookies, function (i, v) {
					if (v == id) {
						isOK = true;
					}
				});
			}

			if (!isOK) {
				$.ajax({
					type: "POST",
					url: propertyguru.ajax_url,
					dataType: 'json',
					data: {
						action: 'propertyguru_single_post',
						id: id,
						type: type,
						_wpnonce: propertyguru.nonce
					},
					success: function (rs) {
						console.log(rs.complete);
						console.log(rs.count);
						console.log(rs.cookie);
						console.log(rs.name);
						console.log(rs.data);
						if (typeof rs.complete != 'undefined') {
							if (_this.next().length <= 0) {
								_this.after('<div class="social-count">' + rs.count + '</div>');
							} else {
								_this.next().html(rs.count);
							}

							_this.addClass('active');
							Cookies.set(type, rs.cookie);
						} else {
							if (typeof rs.message != 'undefined') {
								alert(rs.message);
							}
						}
					}
				});
			} else {
				alert(propertyguru.labels[type]);
			}


		});

		if ($('body').hasClass('single-post')) {
			var clipboard = new ClipboardJS('.clipboard-share');
			clipboard.on('success', function (e) {
				alert('Copy success');
				social_count('share-link');
				e.clearSelection();
			});
		}



		$('textarea#comment').addClass('textarea-init');
		$(document).on('focus', '#comment', function (e) {
			if ($(this).hasClass('textarea-init')) {
				autosize($('textarea#comment'));
				$(this).removeClass('textarea-init');
				$(this).closest('#commentform').addClass('textarea-focus');
			}
		});

		if (jQuery().owlCarousel) {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				items: 1,
				dots: false,
				nav: true,
				navText: ['<i class="icon-left-arrow"></i>', '<i class="icon-right-arrow"></i>']
			});
		}

		if (jQuery().select2) {
			$('.form-select2').select2({ width: '100%' });
		}
		if ($('body').hasClass('page-template-news')) {
			$(document).on('change', '.news-search-filters :input', function (e) {
				e.preventDefault();

				filter_search($(this));
			});

			function filter_search($this) {
				var params = [],
					url = $this.closest('form').attr('action'),
					keyword = $('.news-search-input input[name="k"]').val(),
					hasParam = false;

				$('.news-search-filters select').each(function () {
					var val = $(this).val(),
						name = $(this).attr('name');

					if (val != 'all') {
						params.push(name + '=' + val);
					} else {
						if (getUrlParameter(name)) {
							hasParam = true;
						}
					}
				});

				if (keyword.length > 0) {
					params.push('search=' + keyword);
				}

				if (params.length > 0) {
					url = url + '?' + params.join('&');
					window.location.href = url;
				} else {
					if (hasParam) {
						window.location.href = url;
					}
				}


			}

			var getUrlParameter = function getUrlParameter(sParam) {
				var sPageURL = window.location.search.substring(1),
					sURLVariables = sPageURL.split('&'),
					sParameterName,
					i;

				for (i = 0; i < sURLVariables.length; i++) {
					sParameterName = sURLVariables[i].split('=');

					if (sParameterName[0] === sParam) {
						return typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
					}
				}
				return false;
			}
		}

		$('.menu-toggle').click(function () {
			$(this)
				.parent()
				.siblings('.main-navigation').addClass('toggled');
			$('.menu-close').click(function () {
				$(this).parents('.main-navigation').removeClass('toggled');
			})
			$('.main-navigation li a').on("click", function () {
				$(this).parents('.main-navigation').removeClass('toggled');
			});
			//remove popup  when click screen//
			$(document).mouseup(function (event) {
				event.preventDefault();
				var container = $(".main-navigation.toggled");
				if (!container.is(event.target) && container.has(event.target).length === 0) {
					$(".main-navigation.toggled").removeClass('toggled');
				}
			});
		})

		// guidelines popup
		$('.comment-respond .comment-reply-desc a').on("click", function (e) {
			e.preventDefault();
			console.log("zzz");
			$(this).parents('.site-main').find('.guidelines').addClass("js-active");
		})
		$('.guidelines .cta-agree button').click(function () {
			$(this).parents('.guidelines').removeClass("js-active");
		})
		$('.guidelines .cta-close').click(function () {
			$(this).parents('.guidelines').removeClass("js-active");
		})

		$(document).mouseup(function (event) {
			event.preventDefault();
			var container = $(".guidelines .container");
			if (!container.is(event.target) && container.has(event.target).length === 0) {
				$(".guidelines").removeClass('js-active');
			}
		});

		$('.not_login_submit,.reply_notlogin').click((e) => {
			e.preventDefault();
			$('.login_requit').css('display', 'flex');
			$("body, html").animate({ scrollTop: $('.login_requit').offset().top - 300 }, 500), !1;
			setTimeout(() => {
				window.location = "https://agentnet.staging.propertyguru.com.sg/";
			}, 1500);
		})

		$('.pop-up-test button').click(() => {
			console.log("test");
			$('.pop-up-test').hide();
		});

	});

	$(".fastkey .oacarousel").slick({
		dots: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		centerMode: true,
		variableWidth: true,
		arrows: true,
	});
	$(".partner360 .oacarousel").slick({
		dots: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		variableWidth: true,
		centerMode: true,
	});
	$(".homeloan .oacarousel").slick({
		dots: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		centerMode: true,
	});
	$(".weeklyfeature .oacarousel").slick({
		dots: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		centerMode: true,
		arrows: true
	});
	$(".market-insights .avail-toyou .oacarousel").slick({
		dots: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		centerMode: true,
		arrows: true
	});
	$(".market-insights .harness-data .oacarousel").slick({
		dots: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		centerMode: true,
		arrows: true
	});
	$('.container_3_slick, .container_5_slick, .content3_container_right_slick').slick({
		infinite:true,
		slidesToShow:1,
		slidesToScroll:1,
		dots:true,
		autoplay:true,
		autoplaySpeed:4000,
		arrows: false
	  });
	if ($(window).innerWidth() >= 1280) {
		// take margin-left from other containers
		var margin;
		setTimeout(function () {
			margin = $("section.home-firstsec .container").css("margin-left");
			// and put on leftright
			$(".section.leftright-sec .inner").css("padding-left", margin);
			$(".section.leftright-altsec .inner").css("padding-right", margin);
		}, 300);
	} else {
		$(".section.leftright-sec .inner").css("padding-left", '30px');
		$(".section.leftright-altsec .inner").css("padding-right", '30px');
	}


	if ($(window).width() < 767) {
		$('body.page-template-template-renewal').addClass('device-mobile-optimized');
	}
	document.querySelectorAll('a.scrollToAnchor').forEach(a => {
		a.addEventListener('click', function (e) {
			e.preventDefault();
			var href = this.getAttribute("href");
			var elem = document.querySelector(href) || document.querySelector("a[name=" + href.substring(1, href.length) + "]");
			//gets Element with an id of the link's href
			//or an anchor tag with a name attribute of the href of the link without the #
			window.scroll({
				top: elem.offsetTop,
				left: 0,
				behavior: 'smooth'
			});
		});
	});

})(jQuery);
