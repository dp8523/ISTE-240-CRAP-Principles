let cssInputEle = document.getElementById("cssInput");
cssInputEle.addEventListener("keyup", applyCss);

function applyCss(event) {
    let input = event.target.value;
    let stylizedSpace = event.target.nextElementSibling;
    stylizedSpace.setAttribute("style", input);
}