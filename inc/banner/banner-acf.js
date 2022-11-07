(function ($) {
    "use strict";
    $(document).ready(function () {
        $(document).on('click', '.cta', function (e) {
			e.preventDefault();
			var _this = $(this),
				type = $(this).attr('data-type'),
				id = $(this).attr('data-postID');
				console.log(type, id);
				// let f = acf.getField("numbers_click",id);
				// console.log(f);
				var postID = acf.get(id);

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
					console.log(rs.name);
					console.log(rs.data);
					console.log(rs.count);
				}
			});

		});

    });
});