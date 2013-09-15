(function($) {
	$(function() {
		function updateAvailability() {
			$.getJSON(app.basepath + 'data', function(data) {
				$.each(data, function(key, val) {
					if (val == 1) {
						$('.ks-' + key).addClass('available');
					} else {
						$('.ks-' + key) .removeClass('available');
					}
				});
			});
		}

		setInterval(updateAvailability, 120000);
		updateAvailability();
	});
})(jQuery);