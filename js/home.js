const submenus = document.querySelectorAll('.submenu');
submenus.forEach(submenu => {
  const links = submenu.querySelectorAll('a');
  links.forEach(link => {
    link.addEventListener('click', event => {
      event.preventDefault();
      const href = link.getAttribute('href');
      window.location.href = href;
    });
  });
});
