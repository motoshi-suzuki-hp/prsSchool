let elements = document.getElementsByTagName("strong");
Array.prototype.forEach.call(elements, function (element) {
    element.classList.add("js-marker");
});