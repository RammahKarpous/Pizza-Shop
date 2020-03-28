let links = document.querySelectorAll('a[href="#"');

links.forEach((link) => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
    });
});

// Calculating the total price
let pizzaPrices = document.querySelectorAll('.pizza-price--size');
let totalPrice = document.querySelector('.pizza-price--total');

pizzaPrices.forEach(function(pizzaPrice) {
    pizzaPrice.addEventListener('change', function() {
        totalPrice.setAttribute('value', `£ ${pizzaPrice.value}`);


    });
});
