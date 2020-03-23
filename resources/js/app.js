let links = document.querySelectorAll('a[href="#"');

links.forEach((link) => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
    });
});

// Calculating the total price
