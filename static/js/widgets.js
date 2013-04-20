(function($) {
$.fn.dropdown = function(options, callback) {
	if (!this.length)
		return;

	if (typeof options == 'function') {
		callback = options;
		options = {};
	}

	var options = $.extend({
		current: "hover",
		delay: 0
	}, options || {});

	$.each(this, function() {
		var itimer = null,
			otimer = null,
			hovered = false;

		$(this).hover(function() {
			if (hovered) {
				clearTimeout(otimer);
			} else {
				var $this = $(this);
				itimer = setTimeout(function() {
					$this.addClass(options.current);
					hovered = true;
					if (callback)
						callback($this);
				}, options.delay)
			}
		}, function() {
			if (hovered) {
				var $this = $(this);
				otimer = setTimeout(function() {
					$this.removeClass(options.current);
					hovered = false;
				}, options.delay);
			} else
				clearTimeout(itimer);
		});
	});
};

$.fn.tab = function(options, callback) {
	if (!this.length) {
		return;
	}

	if (typeof options == 'function') {
		callback = options;
		options = {};
	}

	var options = $.extend({
		type: "static",
		auto: false,
		event: "mouseover",
		currClass: "curr",
		source: "data-tag",
		hookKey: "data-widget",
		hookItemVal: "tab-item",
		hookContentVal: "tab-content",
		stay: 5000,
		delay: 100,
		threshold: null,
		mainTimer: null,
		subTimer: null,
		index: 0,
		compatible: false
	}, options || {});
};
})(jQuery);
