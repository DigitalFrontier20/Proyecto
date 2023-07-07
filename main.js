const menuIcono = document.querySelector('#imgmenu'),
    menu = document.querySelector('#menu');

menuIcono.addEventListener('click', (e) => {

    menu.classList.toggle('active');
    document.body.classList.toggle('opacity');


    const rutaActual = e.target.getAttribute('src');
    if (rutaActual == 'Imagenes/menu.png') {
        e.target.setAttribute('src', 'Imagenes/cruzado.png');
    } else {
        e.target.setAttribute('src', 'Imagenes/menu.png');
    }
})


