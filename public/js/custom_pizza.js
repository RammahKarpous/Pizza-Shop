// Custom Scripts
let input = document.querySelector('.custom-pizza__input-field');
let output = document.querySelector('.custom-pizza__name');

let checked = document.querySelector('.size-tags input');

checked.checked = "true";

input.addEventListener('input', function (e) {
    output.textContent = e.target.value;

    if (e.target.value < 1) {
        output.innerHTML = "Your custom pizza name";
        output.classList.add('placeholder-style')
    } else {
        output.classList.remove('placeholder-style');
    }
});

output.addEventListener('click', function () {
    input.focus();
});
