function isUserLogged() {
  if (
   ( localStorage.getItem('name') == null) ||
    (localStorage.getItem('id') == null) ||
   ( localStorage.getItem('email') == null) ||
   ( localStorage.getItem('id_usario') == null))
}


isUserLogged();
