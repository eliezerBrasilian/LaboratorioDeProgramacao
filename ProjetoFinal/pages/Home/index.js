function isUserValid() {
  let name = localStorage.getItem('name');
  let id = localStorage.getItem('name');
  let email = localStorage.getItem('name');
  let tipoUsuario = localStorage.getItem('tipo_usuario');

  if (id === null) {
    window.location.href = '../../index.php';
  } else {
    console.log('tipo de usuario: ' + tipoUsuario);
  }
}
isUserValid();

function showMore(id) {
  localStorage.setItem('id_evento_atual', JSON.stringify(id));
  let usuario_id = localStorage.getItem('id');
  $.ajax({
    method: 'POST',
    url: '../EventChoosen/index.php',
    data: { id: parseInt(id) },
    success: function (response) {
      // Manipule a resposta do servidor aqui
      window.location.href =
        '../EventChoosen/index.php?id=' + id + '&user=' + usuario_id;
    },
    error: function () {
      // Lida com o erro da solicitação AJAX aqui
      alert('error');
    },
  });
}
