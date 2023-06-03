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
    }
  );
}

function fetchData() {
  fetch('insert.php')
    .then((response) => {
      if (!response.ok) {
        // Before parsing (i.e. decoding) the JSON data,
        // check for any errors.
        // In case of an error, throw.
        throw new Error('Something went wrong!');
      }

      return response.json(); // Parse the JSON data.
    })
    .then((data) => {
      // This is where you handle what to do with the response.
      alert(data); // Will alert: 42
    })
    .catch((error) => {
      alert('error');
      // This is where you handle errors.
    });
}
