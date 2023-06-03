function confirmarEdit(id) {
  let url = 'edit.php';
  console.log('dentro');

  inputTitle = document.getElementById(`card-product-title-input-${id}`);
  inputPrice = document.getElementById(`card-product-price-input-${id}`);

  // priceNumber = Number(inputPrice);
  // console.log(typeof priceNumber);
  $.post(
    url,
    {
      id: id,
      nome: String(inputTitle.value),
      preco: Number(inputPrice.value),
      updatedAt: new Date().getTime(),
    },
    (response) => {
      console.log(response);
      window.location.reload();
    }
  );
}

function editar(id) {
  title = document.getElementById(`card-product-title-${id}`).style.display =
    'none';
  inputTitle = document.getElementById(`card-product-title-input-${id}`);
  inputTitle.type = 'text';
  price = document.getElementById(`card-product-price-${id}`).style.display =
    'none';
  inputPrice = document.getElementById(`card-product-price-input-${id}`);
  inputPrice.type = 'number';

  btnEdit = document.getElementById(`btn-edit-${id}`).style.display = 'none';
  btnConfirmEdit = document.getElementById(`btn-confirm-edit-${id}`).type =
    'button';
  inputTitle.focus();
}

function excluir(id) {
  console.log('id - ' + id);
  let idOculto = document.getElementById('id-oculto-' + id).value;
  console.log('ID_oculto: ' + idOculto);

  var url = 'delete.php';
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
