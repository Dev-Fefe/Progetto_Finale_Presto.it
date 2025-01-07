// ICONA LENTE PER BARRA DI RICERCA
const searchIcon = document.querySelector('#searchIcon');
const searchForm = document.querySelector('#searchForm');

searchIcon.addEventListener('click', () => {
    searchForm.classList.toggle('d-none');
});

// DARK MODE
let mode = localStorage.getItem('mode') || 'light';
let confirm = false;
let button = document.querySelector('#button');

let buttonDark = document.querySelector('#buttonDark');
let body = document.querySelector('body');

buttonDark.addEventListener('click', () => {
    if (!confirm) {
        confirm = true;
        body.classList.add('darkMode');
        buttonDark.innerHTML = '<i class=" nav-link bi bi-brightness-high-fill text-black fs-5"></i>';
        localStorage.setItem('mode', 'dark');
        button.classList.remove('btn-outline-dark');
        button.classList.add('btn-outline-light');
    } else {
        confirm = false;
        body.classList.remove('darkMode');
        buttonDark.innerHTML = '<i class=" nav-link bi bi-moon-fill text-black fs-5"></i>';
        localStorage.setItem('mode', 'light');
        button.classList.add('btn-outline-dark');
        button.classList.remove('btn-outline-light');
    }
});

if (mode === 'dark') {
    body.classList.add('darkMode');
    confirm = true;
    buttonDark.innerHTML = '<i class=" nav-link bi bi-brightness-high-fill text-black fs-5"></i>';
    button.classList.remove('btn-outline-dark');
    button.classList.add('btn-outline-light');
} else {
    confirm = false;
    body.classList.remove('darkMode');
    buttonDark.innerHTML = '<i class=" nav-link bi bi-moon-fill text-black fs-5"></i>';
    button.classList.add('btn-outline-dark');
    button.classList.remove('btn-outline-light');
};





// document.querySelectorAll('.toggle-password').forEach(button => {
//     button.addEventListener('click', function () {
//         const targetId = this.getAttribute('data-target');
//         const targetInput = document.getElementById(targetId);

//         if (targetInput.type === 'password') {
//             targetInput.type = 'text';
//             this.querySelector('i').classList.remove('bi-eye');
//             this.querySelector('i').classList.add('bi-eye-slash');
//         } else {
//             targetInput.type = 'password';
//             this.querySelector('i').classList.remove('bi-eye-slash');
//             this.querySelector('i').classList.add('bi-eye');
//         }
//     });
// });



