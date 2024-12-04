let cssInputEle = document.getElementById("cssInput");
cssInputEle.addEventListener("keyup", applyCss);
function applyCss(event) {
    let input = event.target.value;
    let stylizedSpace = event.target.nextElementSibling;
    stylizedSpace.setAttribute("style", input);
}


document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('menuToggle');
    const menuDropdown = document.getElementById('menuDropdown');

    menuToggle.addEventListener('click', function () {
        menuDropdown.classList.toggle('show');
    });
});

