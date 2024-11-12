// Ce script est optionnel
document.querySelectorAll('.dropdown').forEach(item => {
    item.addEventListener('click', event => {
        event.target.nextElementSibling.classList.toggle('show');
    });
});
