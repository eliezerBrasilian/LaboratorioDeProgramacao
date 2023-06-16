$(document).ready(function () {
  $('#form').submit(function (event) {
    event.preventDefault();

    let nome = $('#name').val();
    let email = $('#email').val();
    let password = $('#password').val();
    let url = '../../ponte/handleUser.php';
    let created = 'Conta criada com sucesso';

    let userData = { nome, email, password };
    console.log(nome);
    if (nome !== '' && email !== '' && password !== '')
      $.ajax({
        type: 'POST',
        url: url,
        data: userData,
        success: function (response) {
          console.log(response);
          Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: created,
            showConfirmButton: false,
            timer: 1500,
          });
        },
        error: function (xhr, status, error) {
          console.log(xhr.responseText);
        },
      });
  });
});

// $(document).ready(function () {
//   $('#btn').click(function () {
//     alert('clicou');
//   });
// });
