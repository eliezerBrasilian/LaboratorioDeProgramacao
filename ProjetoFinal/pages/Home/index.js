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

// $('button').click(() => {
//   alert('clicked');
// });
async function showMore(id) {
  localStorage.setItem('id_evento_atual', JSON.stringify(id));
  await $.ajax({
    method: 'POST',
    url: '../Subscribe/index.php',
    data: { id: parseInt(id) },
    success: function (response) {
      // Manipule a resposta do servidor aqui
      window.location.href = '../Subscribe/index.php?id=' + id;
    },
    error: function () {
      // Lida com o erro da solicitação AJAX aqui
      alert('error');
    },
  });
}
// $(document).ready(function () {
//   $('#btn-show-more').click(function (event) {
//     //alert('clicked');
//     var dataValue = $(this).data('btn-id');
//     alert('Valor do atributo data: ' + dataValue);
//   });
// });
