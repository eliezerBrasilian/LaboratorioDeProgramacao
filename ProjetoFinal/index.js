function isUserLogged() {
  if (
    localStorage.getItem('name') == null ||
    localStorage.getItem('id') == null ||
    localStorage.getItem('email') == null ||
    localStorage.getItem('id_usario') == null
  ) {
    window.location.href = './index.php';
  } else {
    window.location.href = './pages/Home/index.php';
  }
}
isUserLogged();

$(document).ready(function () {
  $('#form').submit(function (event) {
    event.preventDefault();

    let email = $('#email').val();
    let password = $('#password').val();
    let opcao = 'login';
    let url = './ponte/handleUser.php';

    let userData = { email, password, opcao };

    if (email !== '' && password !== '')
      $.ajax({
        type: 'POST',
        url: url,
        data: userData,
        dataType: 'json',
        success: function (response) {
          console.log(response);
          let { name, id, email, tipo_usuario } = response;
          localStorage.setItem('name', name);
          localStorage.setItem('id', id);
          localStorage.setItem('email', email);
          localStorage.setItem('tipo_usuario', tipo_usuario);
          console.log('dados salvos');
          isUserLogged();
        },
        error: function (xhr, status, error) {
          alert(
            'Houve alguma falha ao legar, verifique os dados e tente novamente'
          );
          console.log(xhr.responseText);
        },
      });
  });
});
