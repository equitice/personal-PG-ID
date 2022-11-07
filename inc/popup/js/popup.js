//cookie for banner
function setCookie(name,value) {
    document.cookie = name + "=" + (value || "");
}

function setCookie(name,value,exdays) {
	const d = new Date();
	d.setTime(d.getTime() + exdays);
	let expires = "expires="+d.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/";
}
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}


var cookie_expires =  document.querySelector("#gr-popup.cookie-expires");
if (typeof(cookie_expires) != 'undefined' && cookie_expires != null)
{
	var cookie_popup_expires = getCookie('popup_expires');
	console.log(cookie_popup_expires);
	if (cookie_popup_expires){
		document.getElementById('gr-popup').style.display = "none";
	}else{
		document.getElementById('gr-popup').style.display = "block";
	}

	var timeCookie = document.getElementById('gr-popup').getAttribute('data-timeCookie');
	var el_timeCookie = timeCookie.split(':');
	var hours = el_timeCookie[0];
	var min = el_timeCookie[1];
	console.log(hours,min);
	var exdays_miliseconds = (hours * 60 * 60 * 1000) + (min * 60 * 1000);
	console.log(exdays_miliseconds);

	document.querySelector("#gr-popup.cookie-expires .popup-close").addEventListener("click", function(){
		console.log("expires");
		setCookie('popup_expires','checkCookie', exdays_miliseconds);
		document.getElementById('gr-popup').style.display = "none";
	});
}

var cookie_default =  document.querySelector("#gr-popup.cookie-default");
if (typeof(cookie_default) != 'undefined' && cookie_default != null)
{
	var cookie_popup_default = getCookie('popup_default');
	if (cookie_popup_default){
		document.getElementById('gr-popup').style.display = "none";
	}else{
		document.getElementById('gr-popup').style.display = "block";
	}

	document.querySelector("#gr-popup.cookie-default .popup-close").addEventListener("click", function(){
		setCookie('popup_default','checkCookie');
		document.getElementById('gr-popup').style.display = "none";
	});
}


jQuery(function($) {
    $(document).ready(function() {

        $('.popup-toggle__label').click(function(){
            $(this).parent().toggleClass('js-active');
        })
		$('.wrapper-gr-popup').each(function(){
			console.log($(this).children('.popup-wrap').length);
		})

    });
}(jQuery));