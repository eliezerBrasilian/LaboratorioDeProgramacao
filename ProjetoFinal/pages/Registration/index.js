let usuario_id = localStorage.getItem('id');
function validaTermo(evento_id) {
  let checado = $('#pago').is(':checked');
  $.ajax({
    method: 'POST',
    url: '../../ponte/handleRegistration.php',
    data: {
      status_pagamento: checado ? 1 : 0,
      evento_id: evento_id,
      usuario_id: usuario_id,
    },
    success: function (response) {
      console.log(response);
      window.location.reload();
    },
    error: function () {
      alert('error');
    },
  });
}
