const sections = document.querySelectorAll('.section');
const sectBtns = document.querySelectorAll('.controls');
const sectBtn = document.querySelectorAll('.control');
const allSections = document.querySelector('.main-content');

function pageTransition() {
    // button click actice class
    for (let val of sectBtn) {
        val.addEventListener('click', function () {
            let activeBtn = document.querySelector('.active-btn');
            activeBtn.classList.remove('active-btn');
            this.classList.add('active-btn');
        })
    }
}

pageTransition();