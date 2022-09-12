require('./bootstrap');

const sections = document.querySelectorAll('.section');
const sectBtns = document.querySelectorAll('.controls');
const sectBtn = document.querySelectorAll('.control');
const allSections = document.querySelector('.main-content');

function pageTransition() {
    // button click active-btn class
    for (let val of sectBtn) {
        val.addEventListener('click', function () {
            let activeBtn = document.querySelector('.active-btn');
            activeBtn.classList.remove('active-btn');
            this.classList.add('active-btn');
        })
    }
}

// When button is clicked set active class in to the section and button
allSections.addEventListener('click', function (e) {
    let buttonId = e.target.dataset.id;

    if (buttonId) {
        sectBtn.forEach((btn) => {
            btn.classList.remove('active');
        })
        e.target.classList.add('active');

        sections.forEach((section) => {
            section.classList.remove('active');
        })
        document.querySelector('.' + buttonId).classList.add('active');
    }
})

pageTransition();
