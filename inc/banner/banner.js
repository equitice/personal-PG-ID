(function () {
	var countdown =  document.getElementById('countdown');
	if (typeof(countdown) != 'undefined' && countdown != null)
	{
        if(window.screen.width > 992){
			var w_label = document.querySelector('.countdown__label').offsetWidth;
			var w_countdown = "calc(100% - " + w_label + "px)";
			document.getElementById('countdown-list').style.width = w_countdown;	
		}	
        
		var countdown_date = document.getElementById('countdown').getAttribute('data-date');
		const second = 1000,
		minute = second * 60,
		hour = minute * 60,
		day = hour * 24;

		const countDown = new Date(countdown_date).getTime(),
			  now = new Date().getTime();
		var add_span_html = "<span class='el-number'>0</span>";
		distance = countDown - now;
		if(distance > 0){
			x = setInterval(function() {    
				var days = Math.floor(distance / (day));
				var hours = Math.floor((distance % (day)) / (hour));
				var minutes = Math.floor((distance % (hour)) / (minute));
				var seconds = Math.floor((distance % (minute)) / second);

				if(days < 10){
					document.getElementById("days").innerHTML = add_span_html + days.toString().replace(/(.)/g, "<span class='el-number'>$1</span>");
				}else{
					document.getElementById("days").innerHTML = days.toString().replace(/(.)/g, "<span class='el-number'>$1</span>");
				}
				if(hours < 10){
					document.getElementById("hours").innerHTML = add_span_html + hours.toString().replace(/(.)/g, "<span class='el-number'>$1</span>");
				}else{
					document.getElementById("hours").innerHTML = hours.toString().replace(/(.)/g, "<span class='el-number'>$1</span>");
				}
				if(minutes < 10){
					document.getElementById("minutes").innerHTML = add_span_html + minutes.toString().replace(/(.)/g, "<span class='el-number'>$1</span>");
				}else{
					document.getElementById("minutes").innerHTML = minutes.toString().replace(/(.)/g, "<span class='el-number'>$1</span>");
				}
				if(seconds < 10){
					document.getElementById("seconds").innerHTML = add_span_html + seconds.toString().replace(/(.)/g, "<span class='el-number'>$1</span>");
				}else{
					document.getElementById("seconds").innerHTML = seconds.toString().replace(/(.)/g, "<span class='el-number'>$1</span>");
				}

				var el_countdown_list = document.getElementById('countdown-list');
				var el_countdown_bg = el_countdown_list.getAttribute('data-shapeBgColor-countdown');
				var el_countdown_clText = el_countdown_list.getAttribute('data-numberText-Color');
		
				var elements_elNumber = document.getElementsByClassName('el-number'); 
				for(var i = 0; i < elements_elNumber.length; i++){
					elements_elNumber[i].style.backgroundColor = el_countdown_bg;
					elements_elNumber[i].style.color = el_countdown_clText;
				}
			}, 0);
		}else{
			//do something later when date is reached
			document.getElementById("days").innerHTML = add_span_html + add_span_html;
			document.getElementById("hours").innerHTML = add_span_html + add_span_html;
			document.getElementById("minutes").innerHTML = add_span_html + add_span_html;
			if (typeof(document.getElementById("seconds")) != 'undefined' && document.getElementById("seconds") != null){
				document.getElementById("seconds").innerHTML = add_span_html + add_span_html;
			}
			var el_countdown_list = document.getElementById('countdown-list');
			var el_countdown_bg = el_countdown_list.getAttribute('data-shapeBgColor-countdown');
			var el_countdown_clText = el_countdown_list.getAttribute('data-numberText-Color');
	
			var elements_elNumber = document.getElementsByClassName('el-number');
			console.log(elements_elNumber); 
			for(var i = 0; i < elements_elNumber.length; i++){
				elements_elNumber[i].style.backgroundColor = el_countdown_bg;
				elements_elNumber[i].style.color = el_countdown_clText;
			}
		}
	}

}());

