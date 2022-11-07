var parseXml;
if (typeof window.DOMParser != "undefined") {
    parseXml = function(xmlStr) {
        return ( new window.DOMParser() ).parseFromString(xmlStr, "text/xml");
    };
} else if (typeof window.ActiveXObject != "undefined" &&
       new window.ActiveXObject("Microsoft.XMLDOM")) {
    parseXml = function(xmlStr) {
        var xmlDoc = new window.ActiveXObject("Microsoft.XMLDOM");
        xmlDoc.async = "false";
        xmlDoc.loadXML(xmlStr);
        return xmlDoc;
    };
} else {
    throw new Error("No XML parser found");
}

jQuery( function( $ ) {
	var bh_wpc_admin = {

		/**
		 * Initialize variations actions
		 */
		init: function() {
			$(document).on('click', '.categorychecklist [type="checkbox"]', this.load);
			$(document).ajaxComplete(this.ajax_add_item);


		},
		load: function(){
			var $select = $('#bh_wpc_select').val();
			var $this = $('.categorychecklist');
	        var option = [];

	        $this.find(':checkbox:checked').each(function(i){
	          option[i] = $(this).val();
	        });

			$.ajax({
				url: bhwpc.ajax_url,
				data: {
					action:     'bhwpc_load',
					security: bhwpc.security,
					post: $('#post_ID').val(),
					option: option,
					select: $select
				},
				type: 'POST',
				datatype: 'json',
				success: function( response ) {
					var rs = JSON.parse(response);

					if(rs.complete != undefined){
						$('#bh_wpc_select').closest('.inside').html(rs.field);
					}
				},
				error:function(){
					alert('There was an error when processing data, please try again !');
					nbtcs_ajax.unblock();
				}
			});

		},
		ajax_add_item: function(event, xhr, options){
			var tax = $('.categorydiv').attr('id').replace('taxonomy-', '');
			if(options.data && options.data.includes("action=add-" + tax)){
				// var data = xhr.responseText;
				// var myRegexp = /<label class="selectit"><input value="(.*)" type="checkbox" name="tax_input\[(.*)\]\[\]" id="in-(.*)-(.*)" checked=\'checked\' \/> (.*)<\/label>/g;
				// var match = myRegexp.exec(data);

				// var $id = match[4];
				// var $text = match[5];
				bh_wpc_admin.load();
				
			}
		}
	}

	bh_wpc_admin.init();
});