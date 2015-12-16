$(document).ready(function() {
	loadUpload();

	window.makeNewUpload = function(index) {
		var number = (parseInt(index) + 1);
		var btnUpload =  '<div class="parent-item col-xs-6 col-sm-4 col-lg-3" data-index="' + number + '">'
							+ '<div class="item">'
			                    + '<div class="mf-upload" data-type="create-new" mf-upload="upload-picture">'
			                        + '<div class="img-thumb">'
										+ '<div class="img-background" style="background-image:url(' + noImage + ')"></div>'
										+ '<input name="picture[' + number + '][image]" class="picture-upload" type="hidden" value="">'
									+ '</div>'
			                    + '</div>'
		                    + '</div>'
		                + '</div>'
		$('#upload-list .list-upload').append(btnUpload);
		loadUpload();
	}
});