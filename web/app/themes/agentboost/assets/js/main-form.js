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

    if ( $(this).val() == 0 ) {
      console.log('error');
      $(this).addClass('no-valid');
    } else {
      $(this).removeClass('no-valid');
    }

  });

  $(form).find('[type="radio"]').each(function() {

    var name = $(this).attr('name');

    // if ( !$('input[type="radio"][name="' + name + '"]').checked ) {
    //   console.log('error');
    //   $(this).next().addClass('no-valid');
    // } else {
    //   $(this).next().removeClass('no-valid');
    // }
    var elements = $('input[type="radio"][name="' + name + '"]')
    for (var i=0, len=elements.length; i<len; ++i) {
      if (elements[i].checked) {
        $(this).next().removeClass('no-valid');
      } else {
        console.log('error');
        $(this).next().addClass('no-valid');
      }
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