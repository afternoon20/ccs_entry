$(function () {
  'use strict';
  window.addEventListener(
    'load',
    function () {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function (form) {
        form.addEventListener(
          'submit',
          function (event) {
            if (form.checkValidity() === false) {
              $('#contents-check').checked = false;
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
            if (form.checkValidity() === true) {
            }
          },
          false
        );
      });
    },
    false
  );
});

// 生年月日の制御
$(function () {
  var year = $('#year');
  var month = $('#month');
  var date = $('#date');
  var birthday = $('.birthday');
  var entry_birthday = $('#entry_birthday');
  var put_birthday;

  put_birthday = year.val() + '-' + month.val() + '-' + date.val();
  entry_birthday.val(put_birthday);

  birthday.change(function () {
    put_birthday = year.val() + '-' + month.val() + '-' + date.val();
    entry_birthday.val(put_birthday);
  });
});

// マガジン購読の制御
$(function () {
  var magazine = $('[name=entry_magazine]');
  var magazine_type = $('[name=entry_magazine_type]');
  if (magazine.val() != 1) {
    magazine_type.val('');
    magazine_type.attr('disabled', 'disabled');
  }
  magazine.on('change', function () {
    console.log(magazine.val());
    if (magazine.val() != 1) {
      magazine_type.val('');
      magazine_type.attr('disabled', 'disabled');
    } else {
      magazine_type.removeAttr('disabled');
    }
  });

  //   magazine_type.attr('disabled', 'disabled');
  //   if (magazine.val() != 1) {
  //     magazine_type.attr('disabled', 'disabled');
  //     magazine_type.val('');
  //   } else {
  //     magazine_type.removeAttr('disabled');
  //     magazine_type.attr('required', 'required');
  //   }
  //   magazine.on('change', function () {
  //     if (magazine.val() != 1) {
  //       magazine_type.attr('disabled', 'disabled');
  //       magazine_type.val('');
  //     } else {
  //       magazine_type.removeAttr('disabled');
  //       magazine_type.attr('required', 'required');
  //     }
  //   });
});

// 登録日時の制御
$(function () {
  var reg_year = $('#reg-year');
  var reg_month = $('#reg-month');
  var reg_date = $('#reg-date');
  var reg_hour = $('#reg-hour');
  var reg_minute = $('#reg-minute');
  var reg_sec = $('#reg-sec');

  var register_time = $('.register-time');
  var register = $('[name=entry_register_time]');
  var put_register;

  put_register = reg_year.val() + '-' + reg_month.val() + '-' + reg_date.val() + ' ' + reg_hour.val() + ':' + reg_minute.val() + ':' + reg_sec.val();
  register.val(put_register);
  console.log(put_register);

  register_time.change(function () {
    put_register = reg_year.val() + '-' + reg_month.val() + '-' + reg_date.val() + ' ' + reg_hour.val() + ':' + reg_minute.val() + ':' + reg_sec.val();
    register.val(put_register);
  });
});

// アコーディオン
$(function () {
  $('.entry-search__bottom').hide();
  $('.fa-chevron-up').hide();
  // $('.entry-search__bottom').first().show();

  $('.entry-search').click(function () {
    if ($(this).hasClass('accordion__top--active')) {
      $(this).next('.entry-search__bottom').slideUp('fast');
      $(this).removeClass('accordion__top--active');
      $('.fa-chevron-down').show();
      $('.fa-chevron-up').hide();
    } else {
      $(this).next('.entry-search__bottom').slideDown('fast');
      $(this).addClass('accordion__top--active');
      $('.fa-chevron-up').show();
      $('.fa-chevron-down').hide();
    }
  });
});
