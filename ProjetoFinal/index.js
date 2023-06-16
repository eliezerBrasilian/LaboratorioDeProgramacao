function isUserLogged() {
  if (
    localStorage.getItem('name') !== null ||
    localStorage.getItem('id') !== null ||
    localStorage.getItem('email')
  ) {
    console.log('pode ir para home');
    window.location.href = './pages/Home/index.html';
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
          let { name, id, email } = response;
          localStorage.setItem('name', name);
          localStorage.setItem('id', id);
          localStorage.setItem('email', email);
          console.log('dados salvos');
          isUserLogged();
          // console.log(response.name);
          //localStorage.setItem('name', JSON.stringify(response.name));
        },
        error: function (xhr, status, error) {
          console.log(xhr.responseText);
        },
      });
  });
});
