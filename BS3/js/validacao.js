$(document).ready(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#cadastrar').click({
    rules: {
      name: {
        required: true,
        name: true,
      },
      fone: {
        required: true,
        minlength: 13
      },
      celu: {
        required: true,
        minlength: 5
      },
      ende: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
      name: {
        required: "Por favor, preencha um nome.",
        //email: "Please enter a vaild email address"
      },
      fone: {
        required: "Por favor, preencha um número de telefone.",
        minlength: "Preencha um número de telefone válido!"
      },
      celu: {
        required: "Por favor, preencha um número de celular.",
        minlength: "Preencha um número de celular válido!"
      },
      end: {
        required: "Por favor, preencha um endereço.",
       // minlength: "Preencha um telefone válido!"
      },
     // terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});