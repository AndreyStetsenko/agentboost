// javascript
document.addEventListener('DOMContentLoaded', function () {
	initDatePicker();
	toggleFilter();
});

function initDatePicker() {
	const pickerEl = document.querySelectorAll('.date-picker');

	pickerEl.forEach(function (el) {
		airDatepicker = new AirDatepicker(el, {
			locale: {
				days: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
				daysShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
				daysMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
				months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
				monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
				today: 'Today',
				clear: 'Clear',
				dateFormat: 'MM/dd/yyyy',
				timeFormat: 'hh:mm aa',
				firstDay: 0
			},
		});
	})
}

function toggleFilter() {
	const TOGGLE_BUTTON = document.querySelectorAll('[data-filter]');
	const TOGGLE_CLASS = 'filter-opened';

	TOGGLE_BUTTON.forEach(function(el) {
		el.addEventListener('click', function (e) {
			e.preventDefault();
			if (document.body.classList.contains(TOGGLE_CLASS)) {
				document.body.classList.remove(TOGGLE_CLASS);
			} else {
				document.body.classList.add(TOGGLE_CLASS);
			}
		});
	});
};

// jQuery
(function ($) {
	'use strict';

	$(document).ready(function () {
		initPopup();
	}); // ready

	function initPopup() {
		$(document).on('click', '.modal__content', function(e) {
			e.stopPropagation();
		});

		$(document).on('click', '[data-modal]', function(e) {
			e.preventDefault();
			var idModal = $(this).attr('data-modal');

			$('body').addClass('lock');
			$(idModal).addClass('modal--show');
		});

		$(document).on('click', '[data-close-modal], .modal', function(e) {
			e.preventDefault();
			$('.modal').removeClass('modal--show');
			$('body').removeClass('lock');
		});
	}

})(this.jQuery);