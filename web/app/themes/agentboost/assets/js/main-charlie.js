var $ = jQuery.noConflict();

$(document).ready(function () {

});

const dropdownBtn = document.querySelector(".dropbtn");
const dropdownContent = document.querySelector(".dropdown-content");
const dropbtnText = document.querySelector('.dropbtnText')

if(dropdownBtn) {
    dropdownBtn.addEventListener('click', ()=> {
        dropdownContent.classList.toggle('dropdown-show');
    })
}
if(dropdownBtn) {
    dropdownBtn.addEventListener('click', ()=> {
        if (dropbtnText.textContent === "Open") {
            dropbtnText.innerHTML = "Hide";
        } else if (dropbtnText.textContent === "Hide") {
            dropbtnText.innerHTML = "Open";
        }
    })
}



