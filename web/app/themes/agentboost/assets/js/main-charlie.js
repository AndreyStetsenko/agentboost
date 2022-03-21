var $ = jQuery.noConflict();

$(document).ready(function () {

});

const dropdownBtn = document.querySelector(".dropbtn");
const dropdownContent = document.querySelector(".dropdown-content");
const dropbtnText = document.querySelector('.dropbtnText')

if(dropdownBtn) {
    dropdownBtn.addEventListener('click', () => {
        dropdownContent.classList.toggle('dropdown-show');
    })
}
if(dropdownBtn) {
    dropdownBtn.addEventListener('click', () => {
        if (dropbtnText.textContent === "Open") {
            dropbtnText.innerHTML = "Hide";
        } else if (dropbtnText.textContent === "Hide") {
            dropbtnText.innerHTML = "Open";
        }
    })
}



const formBtnSteps = document.getElementById('formBtnSteps');

const formStep1 = document.getElementById('formStep1');
const formStep2 = document.getElementById('formStep2');
const formStep3 = document.getElementById('formStep3');
const formStep4 = document.getElementById('formStep4');

const instractionStep1 = document.getElementById('instractionStep1');
const instractionStep2 = document.getElementById('instractionStep2');
const instractionStep3 = document.getElementById('instractionStep3');
const instractionStep4 = document.getElementById('instractionStep4');

formBtnSteps.addEventListener('click', () => {
    const formBtnStepsAttr = formBtnSteps.getAttribute('data-step');

    if ( formBtnStepsAttr == 1 ) { nextStep(1) }
    else if ( formBtnStepsAttr == 2 ) { nextStep(2) }
    else if ( formBtnStepsAttr == 3 ) { nextStep(3) }
    else if ( formBtnStepsAttr == 4 ) { nextStep(4) }
});

function nextStep(stepNum) {
    if ( stepNum == 1 ) {
        formStep1.style.display = 'none';
        formStep2.style.display = 'block';
        formBtnSteps.setAttribute('data-step', 2);
        instractionStep2.classList.add('active');
    }

    if ( stepNum == 2 ) {
        formStep2.style.display = 'none';
        formStep3.style.display = 'block';
        formBtnSteps.setAttribute('data-step', 3);
        instractionStep3.classList.add('active');
    }

    if ( stepNum == 3 ) {
        formStep3.style.display = 'none';
        formStep4.style.display = 'block';
        formBtnSteps.setAttribute('data-step', 4);
        formBtnSteps.innerHTML = '<span>Submit</span>';
        instractionStep4.classList.add('active');
    }
}