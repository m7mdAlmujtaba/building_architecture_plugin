(function ($) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	$(document).ready(function () {

		$('select').on('change', function () {
			var structure_code = $('#structure').find(":selected").val();
			if (structure_code == "07") {
				$("#finishing option[value=04]")
					.siblings().attr('disabled', 'disabled');
			} else {
				$("#finishing option").removeAttr('disabled');
			}
			var finishing_code = $('#finishing').find(":selected").val();
			var image_url = "../../wp-content/plugins/building-architecture/public/img/" + structure_code + finishing_code + ".png";
			$("#image").attr("src", image_url);
			$.ajax({
				type: 'GET',
				success: function (data) {
					console.log(data);
				}
			}).done(function () {
				setTimeout(function () {
					$("#overlay").fadeOut(300);
				}, 500);
			});
		})

		$(document).ajaxSend(function () {
			$("#overlay").fadeIn(300);
		});

		$("#request-quote").click(function (e) {
			e.preventDefault();
			$("#tab1").addClass("inactive");
			$("#tab1").removeClass("active");
			$("#tab2").removeClass("inactive");
			$("#tab2").addClass("active");
		});
		$("#back-btn").click(function (e) {
			e.preventDefault();
			$("#tab2").addClass("inactive");
			$("#tab2").removeClass("active");
			$("#tab1").removeClass("inactive");
			$("#tab1").addClass("active");
		});

	});
})(jQuery);
