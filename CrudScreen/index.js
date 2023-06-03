function excluir(id) {
  console.log('id - ' + id);
  let idOculto = document.getElementById('id-oculto-' + id).value;
  console.log('ID_oculto: ' + idOculto);
  //alert(id);

  var url = 'delete.php';
  var req = new XMLHttpRequest();

  //let btnValue = btn.value;

  // jQuery Ajax Post Request
  $.post(
    url,
    {
      id: idOculto,
    },
    (response) => {
      // response from PHP back-end
      console.log(response);
      window.location.reload();
    }
  );
}
