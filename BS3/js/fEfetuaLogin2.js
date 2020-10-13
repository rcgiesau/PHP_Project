$(document).ready(function () {
  $('#login-form').submit(function () {
    $.ajax({
      type: 'POST',
      url: 'efetua_login.php',
      data: {
        login: $('#login').val(),
        senha: $('#senha').val(),
      },
      success: function (data) {
        if (data === 'Login') {
          window.location.replace('/painel_admin');
        } else {
          alert('Invalid Credentials');
        }
      },
    });
  });
});
