// Change Icon Email When Form Email Fill
$('.email').on("change keyup paste",
  function() {
    if($(this).val()) {
      $('.icon-email').addClass("next");
    } else {
      $('.icon-email').removeClass("next");
    }
  }
);
$('.next-button.email').click(
  function() {
    document.getElementById('email_val').value = $('.email').val();
    $('.email-section').addClass("fold-up");
    $('.password-section').removeClass("folded");
  }
);
$('.password').on("change keyup paste",
  function() {
    if($(this).val()) {
      $('.icon-lock').addClass("next");
    } else {
      $('icon-lock').removeClass("next");
    }
  }
);
$('.next-button.password').click(
  function() {
    document.getElementById('password_val').value = $('.password').val();
    $('.password-section').addClass("fold-up");
    $('.success').css("marginTop", 0);
  }
);
$('.next-button').hover(
  function(){
    $(this).css('cursor', 'pointer');
  }
);