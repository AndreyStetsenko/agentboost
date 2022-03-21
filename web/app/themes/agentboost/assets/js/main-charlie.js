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

const btnPrevious = document.getElementById('btnPrevious');
const btnContinueLater1 = document.getElementById('btnContinueLater1');
const btnContinueLater2 = document.getElementById('btnContinueLater2');

formBtnSteps.addEventListener('click', () => {
    const formBtnStepsAttr = formBtnSteps.getAttribute('data-step');

    document.getElementById('formStages').scrollIntoView({
        behavior: 'smooth',
        block: 'start'
    })

    if ( formBtnStepsAttr == 1 ) { nextStep(1) }
    else if ( formBtnStepsAttr == 2 ) { nextStep(2) }
    else if ( formBtnStepsAttr == 3 ) { nextStep(3) }
    else if ( formBtnStepsAttr == 4 ) { nextStep(4) }
});

btnPrevious.addEventListener('click', () => {
    const formBtnStepsAttr = formBtnSteps.getAttribute('data-step');

    document.getElementById('formStages').scrollIntoView({
        behavior: 'smooth',
        block: 'start'
    })

    if ( formBtnStepsAttr == 1 ) { prevStep(1) }
    else if ( formBtnStepsAttr == 2 ) { prevStep(2) }
    else if ( formBtnStepsAttr == 3 ) { prevStep(3) }
    else if ( formBtnStepsAttr == 4 ) { prevStep(4) }
});

function nextStep(stepNum) {
    if ( stepNum == 1 ) {
        formStep1.style.display = 'none';
        formStep2.style.display = 'block';
        formBtnSteps.setAttribute('data-step', 2);
        instractionStep2.classList.add('active');
        instractionStep3.classList.remove('active');
        instractionStep4.classList.remove('active');
        btnPrevious.style.display = 'none';
        btnContinueLater1.style.display = 'block';
        btnContinueLater2.style.display = 'none';
    }

    if ( stepNum == 2 ) {
        formStep2.style.display = 'none';
        formStep3.style.display = 'block';
        formBtnSteps.setAttribute('data-step', 3);
        instractionStep3.classList.add('active');
        instractionStep4.classList.remove('active');
        btnPrevious.style.display = 'block';
        btnContinueLater1.style.display = 'none';
        btnContinueLater2.style.display = 'block';
    }

    if ( stepNum == 3 ) {
        formStep3.style.display = 'none';
        formStep4.style.display = 'block';
        formBtnSteps.setAttribute('data-step', 4);
        formBtnSteps.innerHTML = '<span>Submit</span>';
        instractionStep4.classList.add('active');
    }
}

function prevStep(stepNum) {
    if ( stepNum == 1 ) {
        
    }

    if ( stepNum == 2 ) {
        formStep1.style.display = 'block';
        formStep2.style.display = 'none';
        formBtnSteps.setAttribute('data-step', 1);
        instractionStep2.classList.remove('active');
        btnPrevious.style.display = 'none';
        btnContinueLater1.style.display = 'block';
        btnContinueLater2.style.display = 'none';
    }

    if ( stepNum == 3 ) {
        formStep2.style.display = 'block';
        formStep3.style.display = 'none';
        formBtnSteps.setAttribute('data-step', 2);
        instractionStep3.classList.remove('active');
    }

    if ( stepNum == 4 ) {
        formStep3.style.display = 'block';
        formStep4.style.display = 'none';
        formBtnSteps.setAttribute('data-step', 3);
        formBtnSteps.innerHTML = '<span>Next</span>';
        instractionStep4.classList.remove('active');
    }
}