let cssInputEle = document.getElementById("cssInput");
cssInputEle.addEventListener("keyup", applyCss);

function applyCss(event) {
    let input = event.target.value;
    let stylizedSpace = event.target.nextElementSibling;
    stylizedSpace.setAttribute("style", input);
}

function toggleMenu() {
    const menuDropdown = document.querySelector('.menu-dropdown');
    menuDropdown.classList.toggle('show');
}
