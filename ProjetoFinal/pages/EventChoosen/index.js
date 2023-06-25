function reviews(id) {
  $.ajax({
    method: 'POST',
    url: '../Reviews/index.php',
    data: { id: parseInt(id) },
    success: function (response) {
      window.location.href = '../Reviews/index.php?id=' + id;
    },
    error: function () {
      alert('error');
    },
  });
}
function subscribe(id) {
  let usuario_id = localStorage.getItem('id');
  $.ajax({
    method: 'POST',
    url: '../Registration/index.php',
    data: { id: parseInt(id), usuario_id: parseInt(usuario_id) },
    success: function (response) {
      window.location.href =
        '../Registration/index.php?id=' + id + '&user=' + usuario_id;
    },
    error: function () {
      alert('error');
    },
  });
}
