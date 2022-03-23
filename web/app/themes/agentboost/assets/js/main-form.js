var $ = jQuery.noConflict();

$(document).ready(function () {

});

const form = $("#bigForm");

form.on('submit', (e) => {
  sendForm(e);
});

function sendForm(e) {
  e.preventDefault();

  const ajax_url = $('[name="ajax_url"]').val();

  var myData = $(form).serialize();

  validateForm(form);

  if ($('.no-valid').length != 0) {
    clearInterval;
    contactingMessage(1);
  } else {
    $.ajax({
      url: ajax_url,
      method: 'post',
      data: {
          action: 'ajax_order',
          data: myData

      },
      success: function (response) {
          console.log(response);
          contactingMessage(0);
      }
    });
  }
}

function validateForm(form) {
  $(form).find('[data-required="true"]').each(function() {

    if ($(this).val() == 0) {
      console.log('error');
      $(this).addClass('no-valid');
    } else {
      $(this).removeClass('no-valid');
    }

  });
}

function contactingMessage(message) {
  var el = $('#contactingMessage');

  if ( message == 1 ) {
    el.html('<span class="contact-message error">Not all fields are filled</span>');
  } else if ( message == 0 ) {
    el.html('<span class="contact-message success">Message sent. Thanks!</span>');
  }

  setTimeout(() => {
    el.fadeIn();
  }, 500);

  setTimeout(() => {
    el.fadeOut();
  }, 5000);
}