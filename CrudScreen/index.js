let btnSalvar = document.getElementById('btn-salvar');
btnSalvar.addEventListener('click', (ev) => {
  ev.preventDefault();
  let productName = document.getElementById('product_name').value;
  let productPrice = document.getElementById('product_price').value;

  var url = 'insert.php';
  //alert(`${productPrice}`);

  var req = new XMLHttpRequest();
  req.onload = function () {
    fetch(url).then((res) => {
      console.log(res.status);
    });
  };
  req.open('post', url, true);
  req.send({ productName: productName, productPrice: productPrice });

  //   var httpc = new XMLHttpRequest(); // simplified for clarity

  //   httpc.open('POST', url, true); // sending as POST

  //   httpc.onreadystatechange = function () {
  //     //Call a function when the state changes.
  //     if (httpc.readyState == 4 && httpc.status == 200) {
  //       // complete and no errors
  //       //alert('ok'); // some processing here, or whatever you want to do with the response
  //       fetchData();
  //     }
  //   };
  //   httpc.send({ productName: productName, productPrice: productPrice });
});

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
