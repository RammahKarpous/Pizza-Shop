let links = document.querySelectorAll('a[href="#"');

links.forEach((link) => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
    });
});

let checked = document.querySelector('.size-tags input');
checked.checked = "true";
