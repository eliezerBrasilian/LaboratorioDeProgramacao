function isUserValid() {
  let name = localStorage.getItem('name');
  let id = localStorage.getItem('name');
  let email = localStorage.getItem('name');
  let tipoUsuario = localStorage.getItem('tipo_usuario');

  if (id === null) {
    window.location.href = '../../index.php';
  } else {
    console.log('Name: ' + tipoUsuario);
  }
}
isUserValid();
