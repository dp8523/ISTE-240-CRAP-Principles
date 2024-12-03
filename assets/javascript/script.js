document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('menuToggle');
    const menuDropdown = document.getElementById('menuDropdown');

    menuToggle.addEventListener('click', function () {
        menuDropdown.classList.toggle('show');
    });
});
